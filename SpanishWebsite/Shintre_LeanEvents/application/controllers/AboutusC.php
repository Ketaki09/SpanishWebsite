<?php

class AboutusC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('HeaderMain');
    $this->load->view('Aboutus');
    $this->load->view('FooterMain');
  
}
}
?>