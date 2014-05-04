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
    $this->db->select('places.id, places.name, places.note, places.jaunt_id, jaunts.jaunt_name');
    $this->db->from('places','jaunts');
    $this->db->where('jaunts.id', $id);
    $this->db->join('jaunts', 'jaunts.id = places.jaunt_id', 'right');

    $query = $this->db->get();
    return $query->result();
  }
}
