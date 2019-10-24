<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_tentang_kami extends CI_Controller {

	/*
	* Author Muhammad Firdaus
	*/

	public function index() {
		$this->load->view('header');
		$this->load->view('view_tentang_kami');
		$this->load->view('footer');
	}
}
