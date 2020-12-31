<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->db->where_in('attr_key', ["EOPGMid", "EOPGSecretCode", "EOPGSalesLink", "EOPGQueryLink"]);
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
    }

    public function index() {
        if (isset($_POST['submit_now'])) {
            $requestid = "WOODLAND" . date('Ymd') . date('His');
            $paymenttype = $this->input->post('payment_type');
            $coupnrequest = array(
                'request_id' => $requestid,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'name_receiver' => $this->input->post('name_receiver'),
                'email_receiver' => $this->input->post('email_receiver'),
                'contact_no_receiver' => $this->input->post('contact_no_receiver'),
                'payment_type' => $this->input->post('payment_type'),
                'message' => $this->input->post('message'),
                'amount' => '100.00',
                'status' => 'Payment Init',
                'remark' => '',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
            );
            $this->db->insert('coupon_request', $coupnrequest);
            redirect("Coupon/orderPayment/" . $requestid);
        }

        $this->load->view('coupon/gift_coupon');
    }

    function orderPayment($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("coupon_request");
        $requestdata = $query->row();

        $itemsdescription = "Woodlands $100.00 Coupon Purchase";
        $paymenttypeg = $requestdata->payment_type;
        $amt = $requestdata->amount;
        $marchentref = $order_key;
        $returnUrl = site_url("Coupon/orderPaymentResult/$order_key");
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=SALE&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$returnUrl&goods_subject=Woodlands Coupon&app_pay=WEB&goods_body=$itemsdescription&api_version=2.8&lang=en&reuse=Y&active_time=300&wallet=HK";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
        echo $endurl = $salesLink . "?" . $ganarateurl;
//        redirect($endurl = $salesLink . "?" . $ganarateurl);
    }

    function orderPaymentResult($order_key) {
        $this->db->where("request_id", $order_key);
        $query = $this->db->get("coupon_request");
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
        $notifyUrl = site_url("Coupon/orderPaymentNotify/$order_key/$paymenttype");
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=QUERY&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$notifyUrl&api_version=2.9&redirect=Y";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
        redirect($endurl = $queryLink . "?" . $ganarateurl);
    }

    function orderPaymentNotify($order_key, $paymenttype) {

        $returndata = $_GET;
        print_r($returndata);
    }

}
