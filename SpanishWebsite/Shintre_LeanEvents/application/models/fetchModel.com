<?php
class clientLoginModel extends CI_Model{
function __construct() {
parent::__construct();
}
function fetch_data(){
	$query = $this->db->get('individual_profile');
                
    return $query;
    }	
}
?>