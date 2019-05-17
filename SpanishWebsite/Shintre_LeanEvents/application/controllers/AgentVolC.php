<?php

class AgentVolC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    $this->load->view('AgentVol');
    $this->load->view('AgentFooter');
    
}
}
?>