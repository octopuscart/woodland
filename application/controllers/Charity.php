<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charity extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->db->where_in('attr_key', ["EOPGMid", "EOPGSecretCode", "EOPGSalesLink", "EOPGQueryLink", "CouponLink"]);
        $query = $this->db->get('configuration_attr');
        $paymentattr = $query->result_array();
        $paymentconf = array();
        foreach ($paymentattr as $key => $value) {
            $paymentconf[$value['attr_key']] = $value['attr_val'];
        }
        $this->mid = $paymentconf['EOPGMid'];
        $this->secret_code = $paymentconf['EOPGSecretCode'];
        $this->salesLink = $paymentconf['EOPGSalesLink'];
        $this->queryLink = $paymentconf['EOPGQueryLink'];
        $this->couponApiUrl = $paymentconf['CouponLink'];
//        $this->couponApiUrl = "http://localhost/woodlandcoupon/index.php/";
    }

    private function useCurl($url, $headers, $fields = null) {
        // Open connection
        $ch = curl_init();
        if ($url) {
            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            if ($fields) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            }

            // Execute post
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('Curl failed: ' . curl_error($ch));
            }

            // Close connection
            curl_close($ch);

            return $result;
        }
    }

    public function index() {
        if (isset($_POST['submit_now'])) {
            $requestid = "CHWL" . date('ymd') . date('His');
            $paymenttype = $this->input->post('payment_type');
            $charity_donation = array(
                "request_hash" => md5($requestid),
                "request_id" => $requestid,
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "contact_no" => $this->input->post('contact_no'),
                "payment_type" => $this->input->post('payment_type'),
                "message" => $this->input->post('message'),
                'amount' => $this->input->post('amount'),
                'anonymous_donation' => $this->input->post('anonymous_donation'),
                "status" => "Payment Init",
                "remark" => "",
                "date" => date('Y-m-d'),
                "time" => date('H:i:s'),
            );
//            print_r($charity_donation);
            $this->db->insert('charity_donation', $charity_donation);
            redirect("Charity/orderPayment/" . $requestid);
        }

        $this->load->view('donation/annual_charity');
    }

    function orderPayment($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row();
        $amount = $requestdata->amount;
        $itemsdescription = "Woodlands $$amount Donation";
        $paymenttypeg = $requestdata->payment_type;
        $amt = $requestdata->amount;
        $marchentref = $order_key;
        $returnUrl = site_url("Charity/orderPaymentResult/$order_key");
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=SALE&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$returnUrl&goods_subject=Woodlands Donation&app_pay=WEB&goods_body=$itemsdescription&api_version=2.8&lang=en&reuse=Y&active_time=300&wallet=HK";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
//        echo $endurl = $salesLink . "?" . $ganarateurl;
        redirect($endurl = $salesLink . "?" . $ganarateurl);
    }

    function orderPaymentResult($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row();
        $marchentref = $order_key;
        $amt = $requestdata->amount;
        $paymenttype = $requestdata->payment_type;
        $marchentref = $order_key;
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $queryLink = $this->queryLink;
        $paymenttypeg = $paymenttype;
        $notifyUrl = site_url("Charity/orderPaymentNotify/$order_key/$paymenttype");
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=QUERY&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$notifyUrl&api_version=2.9&redirect=Y";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
        redirect($endurl = $queryLink . "?" . $ganarateurl);
    }

    function orderPaymentResultTest($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row();
        $marchentref = $order_key;
        $amt = $requestdata->amount;
        $paymenttype = $requestdata->payment_type;
        $marchentref = $order_key;
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $queryLink = $this->queryLink;
        $paymenttypeg = $paymenttype;
        $notifyUrl = site_url("Charity/orderPaymentNotifyTest/$order_key/$paymenttype");
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=QUERY&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$notifyUrl&api_version=2.9&redirect=Y";
        echo $endurl = $queryLink . "?" . $ganarateurl;
    }

    function orderPaymentNotifyTest($order_key, $paymenttype) {
        $returndata = $_GET;
        print_r($returndata);
    }

    function orderPaymentNotify($order_key, $paymenttype) {
        $returndata = $_GET;
        if (isset($returndata['trans_status'])) {
            if ($returndata['trans_status'] == 'SUCCESS') {
                $this->db->where("request_id", $order_key);
                $query = $this->db->get("coupon_request");
                $requestdata = $query->row_array();
                $requestdata['status'] = "SUCCESS";

                $updatearray = array(
                    "Txn_id:" . $returndata['order_id']
                );
                $this->db->set($updatearray);
                $this->db->where('request_id', $order_key); //set column_name and value in which row need to update
                $this->db->update("coupon_request");

                $senderemail = site_url("Charity/thankyouEmail/$order_key");
                $this->useCurl($senderemail, $headers);


                redirect("Charity/orderPaymentSuccess/" . $order_key);
            } else {
                $updatearray = array(
                    "status" => $returndata['trans_status'],
                    "remark" => "Txn_id:" . $returndata['order_id']
                );
                $this->db->set($updatearray);
                $this->db->where('request_id', $order_key); //set column_name and value in which row need to update
                $this->db->update("charity_donation");
                redirect(site_url("Charity/orderPaymentFailed/$order_key"));
            }
        }
    }

   

    function orderPaymentFailed($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row_array();
        $data = array("donation" => $requestdata);
        $this->load->view('donation/payment_failed', $data);
    }

    function orderPaymentSuccess($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row_array();
        $data = array("donation" => $requestdata);
        $this->load->view('donation/payment_success', $data);
    }

    function thankyouEmail($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("charity_donation");
        $requestdata = $query->row_array();
        $data = array("donation" => $requestdata);
        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        $this->email->set_newline("\r\n");
        $this->email->from(email_bcc, $sendername);
        $this->email->to($requestdata['email']);
        $this->email->bcc(email_bcc);
        $subjectt = "Thank you for your donation";
        $subject = $subjectt;
        $this->email->subject($subject);
        $htmlsmessage = $this->load->view('donation/donation_email', $data, true);
        if (REPORT_MODE == 1) {
            $this->email->message($htmlsmessage);
            $this->email->print_debugger();
            $send = $this->email->send();
            if ($send) {
                
            } else {
                $error = $this->email->print_debugger(array('headers'));
            }
        } else {
            echo $htmlsmessage;
        }
    }

}
