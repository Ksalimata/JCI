<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   
    class Files extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->model('File_model');
        }
        
        public function index(){
            $this->load->library('session');
            $data = array();
            
            //get files from database
            $data['files'] = $this->File_model->getRows();
            
            //load the view
            $this->load->view('commun/document', $data);
        }
        
        public function download($id){
            if(!empty($id)){
                //load download helper
                $this->load->helper('download');
                
                //get file info from database
                $fileInfo = $this->File_model->getRows(array('id' => $id));
                
                //file path
                $file = 'uploads/files/'.$fileInfo['file_name'];
                
                //download file from directory
                force_download($file, NULL);
            }
        }


        public function insert()
        {
            //load session library to use flashdata
            $this->load->library('session');
            //Check if file is not empty
            if(!empty($_FILES['upload']['name']))
            {
                $config['upload_path'] = 'upload/';
                //restrict uploads to this mime types
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['upload']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload'))
                {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    //set file data to insert to database
                    $file['description'] = $this->input->post('description');
                    $file['filename'] = $filename;
                    $query = $this->files_model->insertfile($file);
                    if($query){
                    header('location:'.base_url().$this->index());
                    $this->session->set_flashdata('success','File uploaded successfully');
                    }
                    else
                    {
                    header('location:'.base_url().$this->index());
                    $this->session->set_flashdata('error','File uploaded but not inserted to database');
                    }
                }else
                {
                   header('location:'.base_url().$this->index());
                   $this->session->set_flashdata('error','Cannot upload file.');
                }
            }else
            {
                header('location:'.base_url().$this->index());
                $this->session->set_flashdata('error','Cannot upload empty file.');
            }
        }
        
        /*public function download($id)
        {
            $this->load->helper('download');
            $fileinfo = $this->files_model->download($id);
            $file = 'upload/'.$fileinfo['filename'];
            force_download($file, NULL);
        }*/
}

?>