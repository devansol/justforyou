<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_katalog extends CI_Controller {

	/*
	* Author Muhammad Firdaus
	*/

	public function index() {
		$this->load->view('header');
		$this->load->view('view_katalog');
		$this->load->view('footer');
	}
}
