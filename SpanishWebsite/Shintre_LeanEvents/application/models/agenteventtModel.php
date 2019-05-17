
<?php
class agenteventtModel extends CI_Model {
 
 function getPosts(){
  $this->db->select('*'); 
  $this->db->from('add_event');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>