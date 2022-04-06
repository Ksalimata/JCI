<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CACE extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('File_model','files_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'mailjet'));
    }


	public function index()
	{
		//$this->load->view('welcome_message');
	}

	public function reunion()
	{
		$data['images'] = $this->files_model->get_images();
		$this->load->view('commun/reunionCACE', $data);
	}

	public function projet()
	{
		$this->load->view('commun/projetCACE');
	}

	public function archive()
	{
		$this->load->view('commun/archives');
		
	}

	public function agendaCACE()
	{
		$this->load->view('commun/agendaCACE');
		
	}

	public function insert()
    {
          // CI form validation
          $this->form_validation->set_rules('image_name', 'Image Name', 'required');
          if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('commun/reunionCACE');
            }
          else 
            {
               // configurations from upload library
            	if (!file_exists('imageCACE')) 
            	{
                    mkdir('imageCACE', 0777, true);
                }
                $config['upload_path'] = './assets/imagesCACE';
                //restrict uploads to this mime types
                $config['file_name'] = $_FILES['upload']['name'];
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               // $config['max_size'] = '2048000'; // max size in KB
               //$config['max_width'] = '20000'; //max resolution width
               //$config['max_height'] = '20000';  //max resolution height
               // load CI libarary called upload
               $this->load->library('upload', $config);
               $this->upload->initialize($config);
              
               if(!$this->upload->do_upload())
               {
                    $errors = array('error' => $this->upload->display_errors());
                    // This image is uploaded by deafult if the selected image in not uploaded
                    $image = 'no_image.png';    
               }
               else
               {
                $data = array('upload_data' => $this->upload->data());
                $image = $_FILES['userfile']['name']; 
                
               }
               $this->files_model->insert_image($image);
               $this->session->set_flashdata('success','Image enregistré avec success');
               redirect('CACE/reunion');
            }
    }
}
