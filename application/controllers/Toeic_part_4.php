<?php

class Toeic_part_4 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $arrayGrID = $this->FeDb->getToeicPart4Random();

        $gtestID = 1;
        foreach ($arrayGrID as $key => $value){
            $gtestID = $value['testID'];
        }

        $proListArray['quesList'] = $this->FeDb->getToeicPart4Group($gtestID);
        $proListArray['patitle'] = 'TOEIC - Part 4 Talks - Online test';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp4', $proListArray);
        $this->load->view('bottom');
    }
}