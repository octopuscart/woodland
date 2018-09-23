<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        
        $this->db->where_in('id', array(0=>1,1=>2));
        $query = $this->db->get('custome_items');
        $customeitem = $query->row();
        
        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();
        
        print_r($customeitem);

        $this->load->view('home', $data);
    }
    public function contactus() {
      

        $this->load->view('pages/contactus');
    }

}
