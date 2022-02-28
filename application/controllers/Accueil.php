<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{

		$this->load->view('commun/accueil');
	}

	public function commission()
	{

		$this->load->view('commun/accueil');
	}

	public function archive()
	{

		$this->load->view('commun/archives');
	}

	public function event()
	{

		$this->load->view('commun/evenement');
	}

	public function annuaire()
	{

		$this->load->view('commun/annuaire');
	}

	public function propos()
	{

		$this->load->view('commun/propos');
	}
	public function communo()
	{

		$this->load->view('commun/communautaire');
	}
	public function formation()
	{

		$this->load->view('commun/formation');
	}
	public function loisirs()
	{

		$this->load->view('commun/loisirs');
	}

}
?>