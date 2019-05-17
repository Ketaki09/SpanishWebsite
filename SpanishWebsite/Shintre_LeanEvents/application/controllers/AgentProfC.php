<?php

class AgentProfC extends CI_Controller {
public function index(){
    //$this->load->helper('url');
    $this->load->view('AgentHeader');
    $this->load->view('AgentProf');
    $this->load->view('AgentFooter');
  
}
}
?>