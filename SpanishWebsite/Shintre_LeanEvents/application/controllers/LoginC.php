<?php

class LoginC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('HeaderMain');
    $this->load->view('LoginV');
    $this->load->view('FooterMain');
   
}
}
?>