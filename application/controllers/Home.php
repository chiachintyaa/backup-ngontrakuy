<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    $data['featured'] = $this->Kontrakan->getFeatured();
		$this->load->view('home',$data);
	}
	
	public function regis()
	{
		$this->load->view('register');
	}
	
}
