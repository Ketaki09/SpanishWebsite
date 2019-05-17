


<?php

class fetchData extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('fetchModel');
}
function index() {
			$this->load->model("fetchModel");
			$data["fetch_data"]=$this->fetchModel->fetch_data();
			$this->load->view("AgentEven
				",$data);

}
}



?>