<?php

class Toeic_part_7 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $proListArray['quesList'] = $this->FeDb->getToeicPart7Random();
        $proListArray['patitle'] = 'TOEIC - Part 7 Reading Comprehension';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp7', $proListArray);
        $this->load->view('bottom');
    }
}