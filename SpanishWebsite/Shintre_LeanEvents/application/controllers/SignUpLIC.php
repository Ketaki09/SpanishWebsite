<?php

class SignUpLIC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
   	$this->load->view('HeaderMain');
    $this->load->view('SignUpIndi');
  	$this->load->view('FooterMain');
}
}
?>