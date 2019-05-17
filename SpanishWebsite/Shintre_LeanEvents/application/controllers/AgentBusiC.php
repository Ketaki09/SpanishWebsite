<?php

class AgentBusiC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    $this->load->view('AgentBusi');
    $this->load->view('AgentFooter');
    
}
}
?>