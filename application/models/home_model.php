<?php
  
Class Home_model extends CI_Model {

  function getPlace($id)
  {
    $this->db->select('*');
    $this->db->from('places');
    $this->db->where('id', $id);

    $query = $this->db->get();

    return $query->result();
  }
  function getJaunt($id)
  {
    $this->db->select('*');
    $this->db->from('places','jaunts');
    $this->db->where('jaunts.id', $id);
    $this->db->join('jaunts', 'jaunts.id = places.jaunt_id', 'left');

    $query = $this->db->get();
    return $query->result();
  }
}
