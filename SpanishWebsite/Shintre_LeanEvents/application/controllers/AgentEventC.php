<?php

class AgentEventC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    $this->load->view('AgentEvent');
    $this->load->view('AgentFooter');
   
}
}
?>