<?php

class Toeic_part_5 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $proListArray['quesList'] = $this->FeDb->getToeicPart5Random();
        $proListArray['patitle'] = 'TOEIC - Part 5 Incomplete sentences Online practice';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp5', $proListArray);
        $this->load->view('bottom');
    }
}