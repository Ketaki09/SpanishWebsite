


<?php

class SignUpBDPC extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('signupbModel');
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
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[business_profile.B_Email]');

//Validating Address Field
$this->form_validation->set_rules('comment', 'Address', 'required|min_length[10]|max_length[50]');

$this->form_validation->set_rules('city', 'City', 'required|alpha|max_length[5]');
$this->form_validation->set_rules('state', 'State', 'required|alpha|max_length[2]');
$this->form_validation->set_rules('zip', 'Number', 'required|numeric|min_length[5]|max_length[5]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('SignUpBusi');
$this->load->view('FooterMain');
} else {
//Setting values for tabel columns
$data = array(
'B_Name' => $this->input->post('fname'),
'B_Surname' => $this->input->post('lname'),
'B_Email' => $this->input->post('email'),
'B_Password' => $this->input->post('psd'),
'B_Address' => $this->input->post('comment'),
'B_City' =>  $this->input->post('city'),
'B_State' =>  $this->input->post('state'),
'B_Zipcode' =>  $this->input->post('zip')
);


//Transfering data to Model

$this->signupbModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';

//Loading View
$this->load->view('HeaderMain');
$this->load->view('SignUpBusi', $data);
$this->load->view('FooterMain');
}
}

}

?>