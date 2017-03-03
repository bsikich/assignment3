<?php

class Projects_model extends CI_model{

    function getAll()
    {
      $q = $this->db->get('projects');

      if($q->num_rows() > 0) {
        foreach($q->result() as $row)
        {
          $data[] = $row;
        }
      }
      return $data;
    }

    function addRecord($data)
    {
      $this->db->insert('projects', $data);
      return;
    }

    function updateRecord($id, $data)
    {
      $this->db->where('id', $id);
      $this->db->update('projects', $data);
    }

    function deleteRecord()
    {
      $this->db->where('id', $this->uri->segment(3));
      $this->db->delete('projects');
    }
}
