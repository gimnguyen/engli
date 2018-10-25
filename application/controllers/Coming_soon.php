<?php

class Coming_soon extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $proListArray['longName'] = "Coming soon";

        $this->load->view('top', $proListArray);
        $this->load->view('comingsoon');
        $this->load->view('bottom');

    }
}