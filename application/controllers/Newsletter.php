<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->library(array('form_validation'));
		}

        function index()
        {
		    $this->load->view('commun/newsletter');
        }

		public function add_new()
		{
            $email = $this->input->post("email");
            
			$this->db->set('email', $email)
						->insert('ci_newsletter');
	 	    $insert =$this->db->insert_id();

            //$insert = $this->db->insert_id();
            echo(json_encode($insert));
        }


	}
