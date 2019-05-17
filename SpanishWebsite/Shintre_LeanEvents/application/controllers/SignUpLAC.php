<?php

class SignUpLAC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
   	$this->load->view('HeaderMain');
    $this->load->view('SignUpAgen');
  	$this->load->view('FooterMain');
}
}
?>