<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CL extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function reunion()
	{
		$this->load->view('commun/reunionCL');
	}

	public function projet()
	{
		$this->load->view('commun/projetCL');
	}

	public function archive()
	{
		$this->load->view('commun/archives');
		
	}
	public function agendaCL()
	{
		$this->load->view('commun/agendaCACE');
		
	}
}
