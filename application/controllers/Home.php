<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function our_work(){
		$this->load->view('ourwork');
	}
}
