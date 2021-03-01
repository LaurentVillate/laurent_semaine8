<?php
defined('BASEPATH') OR exist('No direct script access allowed');

class Cijarditou extends CI_Controller {
	public function accueil () {
		$this->load->database();
		$this->load->view('cijarditou/header');		
		$this->load->view('cijarditou/index');
		$this->load->view('cijarditou/footer');

	}

	public function contact(){
		//$this->load->helper('form');//
		$this->load->view('cijarditou/header');
		$this->load->view('cijarditou/contact');
		$this->load->view('cijarditou/footer');
	}
}