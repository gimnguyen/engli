<?php

	class Gioi_thieu extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->model('FeDb');
            $proListArray['productDetail'] = $this->FeDb->getIntroduceDetail();
            $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();
            $proListArray['newsList'] = $this->FeDb->getNews();
            $proListArray['longName'] = 'Giới thiệu';

			$this->load->view('top', $proListArray);
			$this->load->view('blog_detail', $proListArray);
			$this->load->view('bottom');
		}
	}