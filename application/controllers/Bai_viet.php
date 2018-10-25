<?php

class Bai_viet extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $produceTitle['longName'] = "Lỗi không tìm thấy trang";
        $this->load->view('top', $produceTitle);
        $this->load->view('404');
        $this->load->view('bottom');
    }

    public function bai_viet($blogID = 0)
    {

        if ($blogID > 0) {
            $this->load->Model("FeDb");
            $proListArray['productDetail'] = $this->FeDb->getBlogDetail($blogID);
            $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();

            $proListArray['newsList'] = $this->FeDb->getNews();
            $data = $this->FeDb->getBlogTitle($blogID);
            $proListArray['longName'] = $data['longName'];

            $this->load->view('top', $proListArray);
            $this->load->view('blog_detail',$proListArray);
            $this->load->view('bottom');
        }
    }

    public function category($catalog)
    {
        $this->load->Model("FeDb");
        $proListArray['allProducts'] = $this->FeDb->getsanpham($catalog);
        $proListArray['newsList'] = $this->FeDb->getNews();
        $proListArray['longName'] = "Nội thất";

        if(1<= $catalog || $catalog <=4){
            $proListArray['longName'] = "Bàn Làm Việc";
        }elseif (5<= $catalog || $catalog <=7){
            $proListArray['longName'] = "Bàn máy tính";
        }elseif (8<= $catalog || $catalog <=11){
            $proListArray['longName'] = "Bàn lãnh đạo";
        }elseif (12<= $catalog || $catalog <=16){
            $proListArray['longName'] = "Bàn họp";
        }

        $this->load->view('top', $proListArray);
        $this->load->view('allProduct',$proListArray);
        $this->load->view('bottom');
    }

    public function tat_ca()
    {
        $this->load->Model("FeDb");
        $data['allProducts'] = $this->FeDb->getAllBlogs();
        $data['maybeLike'] = $this->FeDb->getMaybeLike();
        $data['danhmuc'] = "Tất cả dịch vụ";
        $produceTitle['longName'] = "Tin tức";
        $produceTitle['newsList'] = $this->FeDb->getNews();

        $this->load->view('top', $produceTitle);
        $this->load->view('allBlog',$data);
        $this->load->view('bottom');
    }
}