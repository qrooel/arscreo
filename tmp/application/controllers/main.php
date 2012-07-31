<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('main_model');
		$this->load->library('email');
		$this->load->helper('form');
		$this->load->library('form_validation');		
	}
	
	public function index()
	{
		$data['slider'] = 1;
		$data['content'] = 'main/index_view';
		$this->load->view('layout/index_view', $data);
	}
	
	public function kontakt()
	{
		$data['content'] = 'main/kontakt_view';
		$this->load->view('layout/index_view', $data);
		
	}
	
	function mail()
	{
		$this->form_validation->set_message('required', 'To pole musi być wypełnione');
		$this->form_validation->set_message('valid_email', '%s jest niepoprawny.');
		
		$this->form_validation->set_rules('email', 'Adres e-mail', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('name', 'Imię i nazwisko', 'required|trim|xss_clean');
		$this->form_validation->set_rules('telephone', 'Telefon', 'trim|xss_clean');
		$this->form_validation->set_rules('title', 'Tytuł wiadomości', 'trim|xss_clean');
		$this->form_validation->set_rules('message', 'Treść wiadomości', 'required|trim|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->kontakt();
		}
		else
		{	
			$mail['name'] = $this->input->post('name', TRUE);
			$mail['telephone'] = $this->input->post('telephone', TRUE);
			$mail['title'] = $this->input->post('title', TRUE);
			$mail['message'] = $this->input->post('message', TRUE);
			$mail['email'] = $this->input->post('email', TRUE);
		
			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['validate'] = TRUE;

			$this->email->initialize($config);

			$this->email->from($mail['email'], 'AC FORM - '.$mail['name']);
			$this->email->to('biuro@arscreo.pl');
			
			$this->email->subject($mail['title'].'<br />');
			$this->email->message($mail['message'].'<br /> Telefon kontaktowy: '.$mail['telephone'].'<br /> Mail: '.$mail['email']);	

				if($this->email->send())
					redirect('main/kontakt');
				else
					redirect('main');
		}
	}
	
}
