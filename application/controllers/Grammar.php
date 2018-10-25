<?php

class Grammar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('FeDb');
        $data['allBlog'] = $this->FeDb->getAllBlogs();
        $data['faBlog'] = $this->FeDb->getFaBlogs();
        $data['longName'] = 'Grammar';

        $this->load->view('top', $data);
        $this->load->view('grammar', $data);
        $this->load->view('bottom');
    }

    public function detail($catelog, $blogID)
    {

        if ($blogID > 0) {
            $this->load->Model("FeDb");
            $proListArray['productDetail'] = $this->FeDb->getBlogDetail($blogID);
            $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();
            $proListArray['samecatelog'] = $this->FeDb->getSameCatelog($catelog);

            $proListArray['newsList'] = $this->FeDb->getNews();
            $data = $this->FeDb->getBlogTitle($blogID);
            $proListArray['longName'] = $data['longName'];

            $this->load->view('top', $proListArray);
            $this->load->view('grammar-detail',$proListArray);
            $this->load->view('bottom');
        }
    }
}