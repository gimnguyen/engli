<?php

class Toeic_part_6 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $proListArray['quesList'] = $this->FeDb->getToeicPart6Random();
        $proListArray['patitle'] = 'TOEIC - Part 6 Text Completion';

        $this->load->view('top', $proListArray);
        $this->load->view('toeicp6', $proListArray);
        $this->load->view('bottom');
    }
}