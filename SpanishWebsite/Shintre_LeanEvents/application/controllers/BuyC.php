<?php

class BuyC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('HeaderMain');
    $this->load->view('BuyV');
    $this->load->view('FooterMain');
  
}
}
?>