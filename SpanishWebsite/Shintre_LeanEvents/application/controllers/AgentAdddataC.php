


<?php

class AgentAdddataC extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('addeventModel');
}
function index() {
//Including validation library
$this->load->library('form_validation');
$this->load->helper(array('form', 'url'));

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('fname', 'Username', 'required|min_length[5]|max_length[15]|alpha');


$this->form_validation->set_rules('lname', 'Username', 'required|min_length[5]|max_length[15]');


//Validating Address Field
$this->form_validation->set_rules('comment', 'Address', 'required|min_length[5]|max_length[50]');

$this->form_validation->set_rules('zip', 'Number', 'required|numeric|min_length[3]|max_length[3]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('AgentAdd');
$this->load->view('AgentFooter');
} else {
//Setting values for tabel columns
$data = array(
'Event_name' => $this->input->post('fname'),
'Responsible' => $this->input->post('lname'),
'Place' => $this->input->post('comment'),
'Price' =>  $this->input->post('zip')
);


//Transfering data to Model

$this->addeventModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';

//Loading View
$this->load->view('AgentHeader');
$this->load->view('AgentAdd', $data);
$this->load->view('AgentFooter');
}
}

}

?>