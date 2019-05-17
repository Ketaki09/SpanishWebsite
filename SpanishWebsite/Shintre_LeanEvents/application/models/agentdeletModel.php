<?php
class agenteventtModel extends CI_Model {
 
 function getPosts(){
 	$post=1;
   $this->db->where('Event_id', $post);
  $this->db->delete('add_event');
  
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>
