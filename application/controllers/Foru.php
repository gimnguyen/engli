<?php

class Foru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('FeDb');
        $data['a28Quest'] = $this->FeDb->get28Quest();
        $data['faBlog'] = $this->FeDb->getFaBlogs();
        $data['longName'] = 'Question and answer';

        $this->load->view('top', $data);
        $this->load->view('4u', $data);
        $this->load->view('bottom');
    }

    public function detail($blogID = 0)
    {

        if ($blogID > 0) {
            $this->load->Model("FeDb");
            $proListArray['productDetail'] = $this->FeDb->getQuestDetail($blogID);
            $proListArray['faBlog'] = $this->FeDb->getFaBlogs();
            $proListArray['longName'] = "Question and answer";

            $this->load->view('top', $proListArray);
            $this->load->view('4udetail',$proListArray);
            $this->load->view('bottom');
        }
    }

    public function insertquestion(){
        $qtitle = $this->input->post('vtitle');
        $questionde = $this->input->post('vquestion');
        $username = $this->input->post('vname');

        $proques = preg_replace("/\r\n|\r|\n/",'<br/>',$questionde);
        
        $this->load->model('Laydb');
        $updateProductStatus = $this->Laydb->insertuserqestion($qtitle, $proques, $username);

        redirect(base_url().'foru/success');
    }

}