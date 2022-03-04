<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
    	$this->load->library(array('form_validation', 'mailjet'));
    	$this->load->model('login_model');
		
	}

	public function index()
	{

		$this->load->view('commun/accueil');
	}
	public function add_new()
	{
            $email = $this->input->post("email");
            
			$this->db->set('email', $email)
						->insert('ci_newsletter');
	 	    $insert =$this->db->insert_id();

            //$insert = $this->db->insert_id();
            redirect('Accueil');
    }
    public function login()
    {
    	$email    = $this->input->post('email',TRUE);
	    $password = md5($this->input->post('password',TRUE));
	    $validate = $this->login_model->validate($email,$password);
	    if($validate->num_rows() > 0)
	    {
	        $data  = $validate->row_array();
	        $name  = $data['user_name'];
	        $email = $data['user_email'];
	        $level = $data['user_level'];
	        $sesdata = array(
	            'username'  => $name,
	            'email'     => $email,
	            'level'     => $level,
	            'logged_in' => TRUE
	        );
	        $this->session->set_userdata($sesdata);
	        // access login for admin
	        if($level === '1')
	        {
	            redirect('Accueil');
	 
	        }elseif($level === '2')
	        {
	            redirect('Accueil');
	 
	        }else
	        {
	            redirect('Accueil');
	        }
	    }else
	    {
	        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
	        redirect('Accueil');
	    }
    }
	public function commission()
	{

		$this->load->view('commun/commission');
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
	public function contact()
	{

		$this->load->view('commun/contact');
	}

	public function sendEmail()
	{
		//get the form data
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('phone');
        $message = $this->input->post('message');

        //Web master email
        $to_email = 'salimata.kone277@gmail.com'; //Webmaster email, who receive mails

        $mailto = $this->mailjet->emailing($to_email, $subject, $message,$email);
        //var_dump($mailto);
        //exit();
	    if ($mailto) 
	    {
	        // mail sent
	        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Votre mail à été envoyer avec success!</div>');
	        redirect('Accueil/contact');
	    }
	    else
	    {
	        //error
	        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Erreur lors de l\'envoie du mail, Reessayer SVP</div>');
	        redirect('Accueil/contact');

		}
	}
	function logout()
	{
      $this->session->sess_destroy();
      redirect('Accueil');
  	}	

}
?>