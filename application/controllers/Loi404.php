<?php

class Loi404 extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
        $this->load->Model("FeDb");
        $proListArray['newsList'] = $this->FeDb->getNews();
        $proListArray['longName'] = "404";

        $this->load->view('top', $proListArray);
        $this->load->view('404',$proListArray);
        $this->load->view('bottom');

	}
}