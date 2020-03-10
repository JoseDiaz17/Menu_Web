<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comida extends CI_Controller
{

	function __construct()
	{
		parent::__construct(); //acceder al constructor de la clase padre
		//$this->load->Model('PublicacionesModel');
	}

	public function index()
	{
		$this->load->view('Comida/index');
	}
}
