<?php
class YiZSzkTGaa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('image_lib');
    }

    public function index(){
        redirect(base_url().'YiZSzkTGaa/getBlog');
    }

    
}