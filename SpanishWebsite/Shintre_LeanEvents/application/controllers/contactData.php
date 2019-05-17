


<?php

class contactData extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('contactModel');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('fname', 'Username', 'required|min_length[5]|max_length[15]');


$this->form_validation->set_rules('lname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

//Validating Address Field
$this->form_validation->set_rules('comment', 'Address', 'required|min_length[10]|max_length[50]');


if ($this->form_validation->run() == FALSE) {
$this->load->view('ContactV');
} else {
//Setting values for tabel columns
$data = array(
'fname' => $this->input->post('fname'),
'lname' => $this->input->post('lname'),
'Cust_Email' => $this->input->post('email'),

'Messages' => $this->input->post('comment')
);


//Transfering data to Model

$this->contactModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';

//Loading View
$this->load->view('HeaderMain');
$this->load->view('ContactV', $data);
$this->load->view('FooterMain');
}
}

}

?>