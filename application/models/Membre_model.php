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


    public function insert_membre($data)
    {    
        return $this->db->insert('membre', $data);
    }
    public function insert_senateur($data)
    {    
        return $this->db->insert('pastpresident', $data);
    }
    public function liste_senateur()
    {    
        $query = $this->db->get('pastpresident');
        return $query->result(); 
    }
    public function ajout_membre($data)
    {    
        return $this->db->insert('membreJCI', $data);
    }
    public function liste_membre()
    {    
        $query = $this->db->get('membreJCI');
        return $query->result(); 
    }
    public function ajout_presse($data)
    {    
        return $this->db->insert('presse', $data);
    }
    public function liste_presse()
    {    
        $query = $this->db->get('presse');
        return $query->result(); 
    }
    
}

 ?>