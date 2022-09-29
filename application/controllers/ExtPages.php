<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ExtPages extends CI_Controller {

    public function __construct() {
        parent::__construct();
      
    }

 
    public function ourPolicy() {
        $this->load->view('extpages/ourPolicy');
    }
   public function refundPolicy() {
        $this->load->view('extpages/refundPolicy');
    }
    public function termsOfUse() {
        $this->load->view('extpages/termsOfUse');
    }



   

}
