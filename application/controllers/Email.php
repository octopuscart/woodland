<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $session_user = $this->session->userdata('logged_in');
        if ($session_user) {
            $this->user_id = $session_user['login_id'];
        } else {
            $this->user_id = 0;
        }
    }

    public function index() {
        redirect('/');
    }

    public function checkEmailSend() {
        $this->db->select('mailer_contact_id');
        $query = $this->db->get('mailer_contacts2_check');
        $mmailer_contacts2_check = $query->result();

        $emailcheck = array();

        foreach ($mmailer_contacts2_check as $key => $value) {
            array_push($emailcheck, $value->mailer_contact_id);
        }




        $ignore = $emailcheck;
        $this->db->where('status', 'Y');
        $this->db->where('mailer_list_id', "0");

        if (count($ignore)) {
            $this->db->where_not_in('id', $ignore);
        }

        $this->db->limit(1);

        $query = $this->db->get('mailer_contacts2');

        $contactdata = $query->row_array();


        print_r($contactdata);

        $useremail = $contactdata['email'];
        $username = $contactdata['last_name'] . " " . $contactdata['first_name'];

        setlocale(LC_MONETARY, 'en_US');
        $this->db->where('default', '1');
        $query = $this->db->get('configuration_email');
        $mailerconf = $query->row();


        //sendgrid setting
        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => $mailerconf->smtp_server,
            'smtp_user' => $mailerconf->username,
            'smtp_pass' => $mailerconf->password,
            'smtp_port' => $mailerconf->smtp_port,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ));

        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        ini_set('display_errors', 1);

        $this->email->from("info@woodlandshk.com", $sendername);
        $this->email->to($useremail);
//        $this->email->bcc("tailor123hk@gmail.com");
        $this->email->charset = "UTF-8";
        $subject = "Woodlands Annual Charity Lunch & Dinner 2 Oct, 2020";
        $this->email->subject($subject);
        $checkcode = REPORT_MODE;







        $randomno = "1002" . rand(10, 99) . $contactdata['id'];
        $data['useremail'] = $useremail;

        $data['coupon_no'] = $randomno;
//        $data['name'] = $username;
        $data['name'] = "Sir/Ma'am";



        $result = "";

        if ($checkcode == '1') {
            echo $this->load->view('Email/charity', $data, true);
        } else {
            $this->email->message($this->load->view('Email/charity', $data, true));
            $this->email->print_debugger();
            echo $result = $this->email->send();
        }
        $this->db->set('full_name', $randomno);
        $this->db->where('id', $contactdata['id']); //set column_name and value in which row need to update
        $this->db->update('mailer_contacts2');

        $mailer_contacts2_check = array(
            "email" => $useremail,
            "status" => $result,
            "mailer_contact_id" => $contactdata['id'],
            "datetime" => date('Y-m-d H:M:S')
        );
        print_r($mailer_contacts2_check);
        $this->db->insert('mailer_contacts2_check', $mailer_contacts2_check);
    }

    public function sendMail() {
        setlocale(LC_MONETARY, 'en_US');
        $this->db->where('default', '1');
        $query = $this->db->get('configuration_email');
        $mailerconf = $query->row();
        print_r($mailerconf);


        //sendgrid setting
        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => $mailerconf->smtp_server,
            'smtp_user' => $mailerconf->username,
            'smtp_pass' => $mailerconf->password,
            'smtp_port' => $mailerconf->smtp_port,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ));

        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        ini_set('display_errors', 1);
        $useremail = $this->input->get('useremail');
        $username = $this->input->get('name');
        $this->email->from("info@woodlandshk.com", $sendername);
        $this->email->to($useremail);
        $this->email->bcc($email_bcc);
        $this->email->charset = "UTF-8";
        $subject = "Woodlands Annual Charity Lunch & Dinner 2 Oct, 2020";
        $this->email->subject($subject);
        $checkcode = REPORT_MODE;







        $randomno = "1002" . rand(1000, 9999);
        $data['useremail'] = $useremail;
        $data['coupon_no'] = $randomno;
        $data['name'] = $username;

        if ($checkcode == '') {
            echo $this->load->view('Email/charity', $data, true);
        } else {
            $this->email->message($this->load->view('Email/charity', $data, true));
            $this->email->print_debugger();
            echo $result = $this->email->send();
        }
    }

    function getCouponByEmail() {
        $email = $this->input->get("email");
        $this->db->where('email', $email); //set column_name and value in which row need to update
        $query = $this->db->get('mailer_contacts2');

        $contactdata = $query->row();
        if ($contactdata) {
            $couponcode = $contactdata->full_name;
            echo  "<img src='https://www.woodlandshk.com/Shop/getCouponImage/$couponcode?client_email=$email' style='width: 100%'>";

        }
    }

}
?>

