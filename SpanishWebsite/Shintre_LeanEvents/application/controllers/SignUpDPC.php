


<?php

class SignUpDPC extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('signupModel');
}
function index() {
//Including validation library
$this->load->library('form_validation');
$this->load->helper(array('form', 'url'));

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('fname', 'Username', 'required|min_length[5]|max_length[15]|alpha');

//validating password field
$this->form_validation->set_rules('psd', 'Password', 'required|alpha_numeric');

$this->form_validation->set_rules('lname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[agent_profile.A_Email]');

//Validating Address Field
$this->form_validation->set_rules('comment', 'Address', 'required|min_length[10]|max_length[50]');

$this->form_validation->set_rules('city', 'City', 'required|alpha|max_length[5]');
$this->form_validation->set_rules('state', 'State', 'required|alpha|max_length[2]');
$this->form_validation->set_rules('zip', 'Number', 'required|numeric|min_length[5]|max_length[5]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('SignUpAgen');
$this->load->view('FooterMain');
} else {
//Setting values for tabel columns
$data = array(
'A_Name' => $this->input->post('fname'),
'A_Surname' => $this->input->post('lname'),
'A_Email' => $this->input->post('email'),
'A_Password' => $this->input->post('psd'),
'A_Address' => $this->input->post('comment'),
'A_City' =>  $this->input->post('city'),
'A_State' =>  $this->input->post('state'),
'A_Zipcode' =>  $this->input->post('zip')
);


//Transfering data to Model

$this->signupModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';

//Loading View
$this->load->view('HeaderMain');
$this->load->view('SignUpAgen', $data);
$this->load->view('FooterMain');
}
}

}

?>