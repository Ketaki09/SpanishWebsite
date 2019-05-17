<?php

class AgentHomeC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    $this->load->view('AgentHome');
    $this->load->view('AgentFooter');
   
}
}
?>