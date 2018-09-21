<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CartGuest extends CI_Controller {

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

        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        redirect('Cart/details');
    }

    function details() {
        $this->load->view('CartGuest/details');
    }

    function checkoutInit() {

        $address = $this->session->userdata('shipping_address');
        $data['user_address_details'] = $address ? [$this->session->userdata('shipping_address')] : [];

        $address = $this->session->userdata('customer_inforamtion');
        $data['user_details'] = $address ? $this->session->userdata('customer_inforamtion') : array();


        $this->load->view('CartGuest/checkoutInit', $data);
    }

    function checkoutShipping() {
        $address = $this->session->userdata('shipping_address');
        $data['user_address_details'] = $address ? [$this->session->userdata('shipping_address')] : [];

        $user_info = $this->session->userdata('customer_inforamtion');
        $data['user_details'] = $user_info ? $this->session->userdata('customer_inforamtion') : array();

//Get Address
        if (isset($_GET['removeAddress'])) {
            $addressdata = $this->session->userdata('shipping_address');
            $this->session->unset_userdata('shipping_address');
            $this->session->unset_userdata('customer_inforamtion');
            redirect('CartGuest/checkoutShipping');
        }

//add New address
        if (isset($_POST['add_address'])) {
            $category_array = array(
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zipcode' => $this->input->post('zipcode'),
                'country' => $this->input->post('country'),
                'user_id' => $this->user_id,
                'status' => 'default',
            );
            $this->session->set_userdata('shipping_address', $category_array);
            $customer = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
            );
            $this->session->set_userdata('customer_inforamtion', $customer);
            redirect('CartGuest/checkoutShipping');
        }
        $this->load->view('CartGuest/checkoutShipping', $data);
    }

    function checkoutPayment() {

        $user_address_details = $this->session->userdata('shipping_address');
        $data['user_address_details'] = $user_address_details ? [$this->session->userdata('shipping_address')] : [];

        $user_details = $this->session->userdata('customer_inforamtion');
        $data['user_details'] = $user_details ? $this->session->userdata('customer_inforamtion') : array();



//place order
        if (isset($_POST['place_order'])) {
            $address = $user_address_details[0];

            if ($this->checklogin) {

                $session_cart = $this->Product_model->cartData($this->user_id);
            } else {
                $session_cart = $this->Product_model->cartData();
            }

            $sub_total_price = $session_cart['total_price'];
            $total_quantity = $session_cart['total_quantity'];

           


//place order

            $address = $user_address_details;
            $paymentmathod = $this->input->post('place_order');
            $order_array = array(
                'name' => $user_details['name'],
                'email' => $user_details['email'],
                'user_id' => 'guest',
                'contact_no' => $user_details['contact_no'],
                'zipcode' => $address['zipcode'],
                'address1' => $address['address1'],
                'address2' => $address['address2'],
                'city' => $address['city'],
                'state' => $address['state'],
                'country' => $address['country'],
                'order_date' => date('Y-m-d'),
                'order_time' => date('H:i:s'),
                'amount_in_word' => $this->Product_model->convert_num_word($sub_total_price),
                'sub_total_price' => $sub_total_price,
                'total_price' => $sub_total_price,
                'total_quantity' => $total_quantity,
                'status' => 'Order Confirmed',
                'payment_mode' => $paymentmathod,
                'credit_price' => $this->input->post('credit_price') || 0,
            );

            $this->db->insert('user_order', $order_array);
            $last_id = $this->db->insert_id();
            $orderno = "BT" . date('Y/m/d') . "/" . $last_id;
            $orderkey = md5($orderno);
            $this->db->set('order_no', $orderno);
            $this->db->set('order_key', $orderkey);
            $this->db->where('id', $last_id);
            $this->db->update('user_order');



            $this->Product_model->cartOperationCustomCopyOrder($last_id);

        




            $order_status_data = array(
                'c_date' => date('Y-m-d'),
                'c_time' => date('H:i:s'),
                'order_id' => $last_id,
                'status' => "Order Confirmed",
                'user_id' => 'guest',
                'remark' => "Order Confirmed By Customer Using " . $paymentmathod . ", Now Waiting for payment",
            );
            $this->db->insert('user_order_status', $order_status_data);
//                    $this->Product_model->order_to_vendor($last_id);
            redirect('Order/orderdetailsguest/' . $orderkey);
        }
        $this->load->view('CartGuest/checkoutPayment', $data);
    }

}

?>
