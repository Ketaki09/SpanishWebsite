<?php

class SignUpLBC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
   	$this->load->view('HeaderMain');
    $this->load->view('SignUpBusi');
  	$this->load->view('FooterMain');
}
}