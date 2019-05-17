<?php

class RegisterC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
     $this->load->view('HeaderMain');
     $this->load->view('RegisterV');
    $this->load->view('FooterMain');

}
}
?>

