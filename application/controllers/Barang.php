<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('Barang_model'=>'ModelBarang'));
	}


	public function index()
	{
		$data = array();

		$data["data"] = $this->ModelBarang->getall();

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$data = array();

		$data["data"] = $this->ModelBarang->getall();

		$this->load->view('template', $data);
	}

	
}
