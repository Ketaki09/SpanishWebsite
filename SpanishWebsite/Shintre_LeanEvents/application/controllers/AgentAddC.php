<?php

class AgentAddC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    
    $this->load->view('AgentFooter');
    $this->load->view('AgentAdd');
}
}
?>