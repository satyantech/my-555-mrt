<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){ 
		parent::__construct();
		
	}
	// Admin login
	public function index()
	{
		$data = array(
				 'title'    	=> 'Login :: SSS',
				 'description' 	=> 'Admin Login',
				 'keywords' 	=> 'Admin Login');
		$this -> load -> view('admin_layout/admin-login', $data);
	}
	//Admin Dashboard
	public function dashboard()
	{
		$data = array(
				 'title'    	=> 'Dashboard :: SSS',
				 'description' 	=> 'Dashboard',
				 'keywords' 	=> 'Dashboard',
				 'content'  	=> 'dashboard');
				 
		$this -> load -> view('admin_layout/admin-template', $data);
	}
	
}
