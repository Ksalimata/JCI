<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_model extends CI_Model
{
    /*
     * get rows from the files table
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getAllFiles(){
        $query = $this->db->get('files');
        return $query->result(); 
    }
 
    public function insertfile($file){
        return $this->db->insert('files', $file);
    }
 
    public function download($id){
        $query = $this->db->get_where('files',array('id'=>$id));
        return $query->row_array();
    }

    public function insert_image($image)
    {
      // assign the data to an array
      $data = array(
       'image_id' => $this->input->post('image_id'),
       'image_name' => $this->input->post('image_name'),
       'image' => $image
      );
      //insert image to the database
      $this->db->insert('image', $data);
    }
    public function get_images()
    {
      $this->db->select('*');
      $this->db->order_by('image_id');
      $query = $this->db->get('image');
      return $query->result();
    }

}