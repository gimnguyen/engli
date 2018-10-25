<?php

class Index extends CI_Controller{
    
    public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	// $this->output->set_header('Access-Control-Allow-Origin: *');
    }
    
    public function index()
    {
        redirect(base_url()."toeic");
//    	$this->load->Model("FeDb");
//    	$proListArray['proList'] = $this->FeDb->getFavoriteProduct();
//    	$proListArray['blogList'] = $this->FeDb->getBestbuyProduct();
//        $proListArray['newsList'] = $this->FeDb->getNews();
//        $proListArray['n3blog'] = $this->FeDb->get3News();
//        $proListArray['longName'] = "Nội thất";
//
//        $this->load->view('top', $proListArray);
////        $this->load->view('home',$proListArray);
//        $this->load->view('toeicp5');
//        $this->load->view('bottom');
        
    }

    public function tat_ca()
    {
        $this->load->Model("FeDb");
        $data['allProducts'] = $this->FeDb->getAllProducts();

        $data['maybeLike'] = $this->FeDb->getMaybeLike();
        $data['danhmuc'] = "Tất cả dịch vụ";
        $produceTitle['longName'] = "Tất cả dịch vụ";
        $produceTitle['newsList'] = $this->FeDb->getNews();

        $this->load->view('top', $produceTitle);
        $this->load->view('allProduct',$data);
        $this->load->view('bottom');
    }
}