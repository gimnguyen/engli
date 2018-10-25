<?php

class Toeic_part_1 extends CI_Controller
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
            $testID = $value['testID'];
        }

        $proListArray['quesList'] = $this->FeDb->getToeicPart1Group($testID);
        $proListArray['patitle'] = 'TOEIC - Part 1 Photographs';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp1', $proListArray);
        $this->load->view('bottom');
    }
}