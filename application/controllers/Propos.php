<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propos extends CI_Controller {

	
	public function index()
	{
		$this->load->view('commun/propos');
	}

	public function jciCI()
	{
		$this->load->view('commun/jciCI');
	}
	public function jci()
	{
		$this->load->view('commun/jci');
	}
	public function organigrame()
	{
		$this->load->view('commun/organigrame');
	}
	public function aires()
	{
		$this->load->view('commun/aires');
	}
	public function membre()
	{
		$this->load->view('commun/devMembre');
	}
}
