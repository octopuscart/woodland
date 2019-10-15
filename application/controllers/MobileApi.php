<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');

class MobileApi extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    function productListData($category_id) {
        
    }

    //ProductList APi
    public function productListApi_get($category_id, $limit) {
        $this->config->load('rest', TRUE);
        $categoriesString = $this->Product_model->stringCategories($category_id) . ", " . $category_id;
        $categoriesString = ltrim($categoriesString, ", ");
        $product_query = "select pt.id as product_id, pt.*
            from products as pt where pt.category_id in ($categoriesString) ";
        $product_result = $this->Product_model->query_exe($product_query);
        $this->output->set_header('Content-type: application/json');
        $productArray = array(
            'products' => $product_result,
            'product_count' => count($product_result),
        );
        $this->response($productArray);
    }

    //category list api
    function categoryMenu_get($custom_id, $staticcat) {
        $this->config->load('rest', TRUE);
        $this->db->where('id', $custom_id);
        $query = $this->db->get('custome_items');
        $customeitem = $query->row();
        $staticcat = $customeitem->category_id;
        $categories = $this->Product_model->productListCategories($staticcat, $custom_id);
        $catarray = array();
        foreach ($categories as $key => $value) {
            $catarray[$value['id']] = $value;
        }
        $this->response($categories);
    }

    //order detail get
    function appointment_get() {

        $this->response($appointmentdetails);
    }

}

?>
