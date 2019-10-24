<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/*
	* Author Muhammad Firdaus
	*/

	public function index() {
		$this->load->view('header');
		$this->load->view('view_beranda');
		$this->load->view('footer');
	}

	public function katalog() {
		$this->load->view('header');
		$this->load->view('view_katalog');
		$this->load->view('footer');
	}
}
