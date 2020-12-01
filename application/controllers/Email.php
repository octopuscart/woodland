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

