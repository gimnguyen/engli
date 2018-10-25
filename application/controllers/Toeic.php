<?php

class Toeic extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $arrayGrID = $this->FeDb->getToeicPart1Random();

        $groupID = 1;
        foreach ($arrayGrID as $key => $value){
            $groupID = $value['testID'];
        }

        $proListArray['quesList'] = $this->FeDb->getToeicPart1Group($groupID);
        $proListArray['patitle'] = 'TOEIC test - Do online test for free';

        $this->load->view('top', $proListArray);
        $this->load->view('toeic');
        $this->load->view('bottom');
    }
}