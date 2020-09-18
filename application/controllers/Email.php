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
        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        $this->email->from($email_bcc, $sendername);
        $this->email->to("octopuscartltd@gmail.com");
         $this->email->bcc($email_bcc);
        $subject = "";
        $this->email->subject($subject);
        $checkcode = REPORT_MODE;
        if ($checkcode != '') {
            echo $this->load->view('Email/charity', array(), true);
        } else {
            $this->email->message($this->load->view('Email/charity', array(), true));
            $this->email->print_debugger();
            echo $result = $this->email->send();
        }
    }

}
?>

