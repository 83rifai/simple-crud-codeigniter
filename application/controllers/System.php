<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {

	public function index()
	{
		$this->load->view('template');
	}

	public function data()
	{
		$this->load->view('template');
	}
}
