<?php
  
Class Home_model extends CI_Model {

  function getPlaces($id)
  {
    $this->db->select('*');
    $this->db->from('places');
    $this->db->where('id', $id);

    $query = $this->db->get();

    return $query->result();
  }
}
