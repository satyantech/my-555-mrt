<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){ 
		parent::__construct();
		
	}
	// welcome page
	public function index()
	{
		$data = array(
				 'title'    	=> 'SSS :: Home',
				 'description' 	=> 'Shop',
				 'keywords' 	=> 'Shop',
				 'content'  	=> 'home');
				 
		$this->load->view('layout/inner-template', $data);
	}
	
	
}
