<?php

class Lien_he extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['longName'] = 'Liên hệ';
		$this->load->view('top', $data);
		$this->load->view('contact');
		$this->load->view('bottom');
	}
}