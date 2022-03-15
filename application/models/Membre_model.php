<?php 
class Membre_model extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("items");
        return $query->result();
    }


    public function insert_item($data)
    {    
        return $this->db->insert('membre', $data);
    }
}

 ?>