<?php
class AgentDeleteC extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('agentdeletModel'); // load model 
 }
 
 public function index() {
   $this->data['posts'] = $this->agenteventtModel->getPosts();
   $this->load->view('AgentHeader'); // calling Post model method getPosts()
   $this->load->view('AgentEvent', $this->data);
   $this->load->view('AgentFooter'); // load the view file , we are passing $data array to view file
 }
 
 
}
?>