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
        $datearray = array();
        for($i=0;$i<=3;$i++){
            $datef = Date('Y-m-d', strtotime("+$i days"));
            $date_day = Date('dS', strtotime("+$i days"));
            $date_month = Date('F', strtotime("+$i days"));
            $datearray[$datef] = array("day"=>$date_day, "month"=>$date_month);
        }
        $data['datearray'] = $datearray;
       
        $this->load->view('movie/showtime', $data);
    }

    public function selectSit() {
        $mid = $this->input->get("movie");
        $thid = $this->input->get("theater");
        $stime = $this->input->get("selectdate");
        $sdate = $this->input->get("selecttime");

        $data['stime'] = $stime;
        $data['sdate'] = $sdate;
        $data['total_seats'] =  $this->input->get("seats");
        
        $movies = $this->Movie->movieList();
        $data['movie'] = $movies[$mid];

        $theaters = $this->Movie->theaters();
        $data['theater'] = $theaters[$thid];

        if (isset($_POST['proceed'])) {
            $ticket = $this->input->post('ticket');
            $price = $this->input->post('price');
            $ticketarray = array(
                "ticket" => array(), "movie_id" => $mid, "total" => 0,
                "theater_id" => $thid, "selected_date" => $sdate, "selected_time" => $stime);
            foreach ($ticket as $key => $value) {
                $ticketarray["ticket"][$value] = $price[$key];
                $ticketarray["total"] += $price[$key];
            }
            $this->session->set_userdata('selectedseat', $ticketarray);
            redirect("Movies/checkout");
        }
        $this->load->view('movie/selectsit', $data);
    }

    public function checkOut() {
        $selectedseat = $this->session->userdata('selectedseat');
        if ($selectedseat) {
            
        } else {
            redirect("Movies");
        }

        $data['stime'] = $selectedseat['selected_time'];
        $data['sdate'] = $selectedseat['selected_date'];
        $movies = $this->Movie->movieList();
        $data['movie'] = $movies[$selectedseat['movie_id']];

        $theaters = $this->Movie->theaters();
        $data['theater'] = $theaters[$selectedseat['theater_id']];
        $ticketlist = $selectedseat['ticket'];
        $data['ticketlist'] = $ticketlist;
        $data['total'] = $selectedseat['total'];
        $this->load->view('movie/checkout', $data);
    }

    public function yourTicket() {
        $this->load->view('pages/catalogue');
    }

}
