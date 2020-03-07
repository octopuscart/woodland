<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Movie');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $data['moves'] = $this->Movie->movieList();
        $this->load->view('movie/list', $data);
    }

    public function showTime($mid) {
        $movies = $this->Movie->movieList();
        $data['movie'] = $movies[$mid];
        $data['theaters'] = $this->Movie->theaters();
        $this->load->view('movie/showtime', $data);
    }

    public function selectSit() {
        // $this->load->view('pages/faq');
    }

    public function checkOut() {
        $this->load->view('pages/faq');
    }

    public function yourTicket() {
        $this->load->view('pages/catalogue');
    }

}
