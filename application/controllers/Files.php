<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   
    class Files extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->model('File_model','files_model');
            $this->load->library('upload');
            $this->load->helper(array('form', 'url'));
        }
        
        public function index(){
            $this->load->library('session');
            $data = array();
            
            //get files from database
            $data['files'] = $this->files_model->getAllFiles();
            
            //load the view
            $this->load->view('commun/document', $data);
        }
        
    
        public function insert()
        {
            //load session library to use flashdata
            $this->load->library('session');
            //Check if file is not empty
            if(!empty($_FILES['upload']['name']))
            {

                if (!file_exists('upload')) {
                    mkdir('upload', 0777, true);
                }
                $config['upload_path'] = 'upload/';
                //restrict uploads to this mime types
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
                $config['file_name'] = $_FILES['upload']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $path_to_directory = 'directory/';
                if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
                    mkdir($path_to_directory, 0777, true);
                }

                if($this->upload->do_upload('upload'))
                {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    //set file data to insert to database
                    $file['description'] = $this->input->post('description');
                    $file['filename'] = $filename;
                    $query = $this->files_model->insertfile($file);
                   
                    if($query)
                    {
                        //header('location:'.base_url().$this->index());
                        $this->session->set_flashdata('success','File uploaded successfully');
                        redirect('Files');
                    }
                    else
                    {
                       // header('location:'.base_url().$this->index());
                        $this->session->set_flashdata('error','File uploaded but not inserted to database');
                        redirect('Files');

                    }
                }else
                {
                   //header('location:'.base_url().$this->index());
                   $this->session->set_flashdata('error','Cannot upload file.'.$this->upload->display_errors());
                   redirect('Files');

                }
            }else
            {
                //header('location:'.base_url().$this->index());
                $this->session->set_flashdata('error','Cannot upload empty file.');
                redirect('Files');

            }
        }

        public function download($id)
        {
            if(!empty($id)){
                //load download helper
                $this->load->helper('download');
                
                //get file info from database
                $fileInfo = $this->files_model->download($id);
                
                //file path
                $file = 'upload/'.$fileInfo['filename'];
                
                //download file from directory
                force_download($file, NULL);
            }
        }
        /*CREATE TABLE `files` (
  `id` int(11) NOT NULL Primary Key Auto_Increment,
  `filename` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/
        
        
}

?>