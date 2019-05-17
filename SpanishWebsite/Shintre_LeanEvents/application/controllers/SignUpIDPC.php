


<?php

class SignUpIDPC extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('signupiModel');
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
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[individual_profile.I_Email]');

//Validating Address Field
$this->form_validation->set_rules('comment', 'Address', 'required|min_length[10]|max_length[50]');

$this->form_validation->set_rules('city', 'City', 'required|alpha|max_length[5]');
$this->form_validation->set_rules('state', 'State', 'required|alpha|max_length[2]');
$this->form_validation->set_rules('zip', 'Number', 'required|numeric|min_length[5]|max_length[5]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('SignUpIndi');
$this->load->view('FooterMain');
} else {
//Setting values for tabel columns
$data = array(
'I_Name' => $this->input->post('fname'),
'I_Surname' => $this->input->post('lname'),
'I_Email' => $this->input->post('email'),
'I_Password' => $this->input->post('psd'),
'I_Address' => $this->input->post('comment'),
'I_City' =>  $this->input->post('city'),
'I_State' =>  $this->input->post('state'),
'I_Zipcode' =>  $this->input->post('zip')
);


//Transfering data to Model

$this->signupiModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';

//Loading View
$this->load->view('HeaderMain');
$this->load->view('SignUpIndi', $data);
$this->load->view('FooterMain');
}
}

}

?>