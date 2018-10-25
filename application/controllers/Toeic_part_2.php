<?php

class Toeic_part_2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $proListArray['quesList'] = $this->FeDb->getToeicPart2Random();
        $proListArray['patitle'] = 'TOEIC - Part 2 Question-Response Online practice';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp2', $proListArray);
        $this->load->view('bottom');
    }
}