<?php

class Toeic_part_3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $arrayGrID = $this->FeDb->getToeicPart3Random();

        $gtestID = 1;
        foreach ($arrayGrID as $key => $value){
            $gtestID = $value['testID'];
        }

        $proListArray['quesList'] = $this->FeDb->getToeicPart3Group($gtestID);
        $proListArray['patitle'] = 'TOEIC - Part 3 Conversations Online test';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp3', $proListArray);
        $this->load->view('bottom');
    }
}