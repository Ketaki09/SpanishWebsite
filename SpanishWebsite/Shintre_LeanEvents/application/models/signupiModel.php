<?php
class signupiModel extends CI_Model{
    function __construct() {
    parent::__construct();
    }
    function form_insert($data){
    // Inserting in Table(students) of Database(college)
    $this->db->insert('individual_profile', $data);
    }
}
?>