<?php

class San_pham extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->model('laydb');
        $data['allProducts'] = $this->laydb->getAllProducts();
        $data['longName'] = 'Sản phẩm';

        $this->load->view('top', $data);
        $this->load->view('allProduct', $data);
        $this->load->view('bottom');

    }

    public function bai_viet($productId = 0)
    {
        if ($productId > 0) {
            $this->load->Model("FeDb");
            $proListArray['productDetail'] = $this->FeDb->getProductDetail($productId);
            $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();

            $proListArray['newsList'] = $this->FeDb->getNews();
            $data = $this->FeDb->getProductTitle($productId);
            $proListArray['longName'] = $data['longName'];

            $this->load->view('top', $proListArray);
            $this->load->view('product_detail',$proListArray);
            $this->load->view('bottom');
        }
    }

    public function category($start, $end){
        $this->load->Model("FeDb");
        $proListArray['allProducts'] = $this->FeDb->getCategory($start, $end);
        $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();
        $proListArray['danhmuc'] = "Tất cả dịch vụ";
        $proListArray['longName'] = "Sản phẩm";

        $proListArray['newsList'] = $this->FeDb->getNews();

        switch ($start){
            case 100:
                $proListArray['longName'] = "Nội thất văn phòng";
                break;
            case 200:
                $proListArray['longName'] = "Ghế văn phòng";
                break;
            case 300:
                $proListArray['longName'] = "Tủ tài liệu";
                break;
            case 400:
                $proListArray['longName'] = "Tiếp tân";
                break;
            case 500:
                $proListArray['longName'] = "Gia đình";
                break;
            case 600;
                $proListArray['longName'] = "Công trình";
                break;
            case 700:
                $proListArray['longName'] = "Trường học";
                break;
            case 800:
                $proListArray['longName'] = "Đồ trang trí";
                break;
            case 900:
                $proListArray['longName'] = "Đồ thờ cúng";
                break;
        }

        $this->load->view('top', $proListArray);
        $this->load->view('allProduct',$proListArray);
        $this->load->view('bottom');

    }

    public function dat_hang($productId){
        $this->load->Model("FeDb");
        $proListArray['productDetail'] = $this->FeDb->getProductDetail($productId);
        $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();
        $proListArray['danhmuc'] = "Tất cả dịch vụ";
        $proListArray['longName'] = "Đặt hàng";
        $proListArray['newsList'] = $this->FeDb->getNews();

//        $this->load->view('top', $proListArray);
        $this->load->view('top', $proListArray);
        $this->load->view('order_form',$proListArray);
        $this->load->view('bottom');
    }

    public function thanh_cong(){
        $this->load->Model("FeDb");
//        $proListArray['productDetail'] = $this->FeDb->getProductDetail($productId);
        $proListArray['maybeLike'] = $this->FeDb->getMaybeLike();
        $proListArray['danhmuc'] = "Tất cả dịch vụ";
        $proListArray['longName'] = "Thành công";
        $proListArray['newsList'] = $this->FeDb->getNews();

//        $this->load->view('top', $proListArray);
        $this->load->view('top', $proListArray);
        $this->load->view('success',$proListArray);
        $this->load->view('bottom');
    }

    public function danhmuc($catalog)
    {
        $this->load->Model("FeDb");
        $proListArray['allProducts'] = $this->FeDb->getsanpham($catalog);
        $proListArray['newsList'] = $this->FeDb->getNews();
        $proListArray['longName'] = "Sản phẩm";

        switch ($catalog){
            case 100:
                $proListArray['longName'] = "Nội thất văn phòng";
                break;
            case 200:
                $proListArray['longName'] = "Ghế văn phòng";
                break;
            case 300:
                $proListArray['longName'] = "Tủ tài liệu";
                break;
            case 400:
                $proListArray['longName'] = "Tiếp tân";
                break;
            case 500:
                $proListArray['longName'] = "Gia đình";
                break;
            case 600;
                $proListArray['longName'] = "Công trình";
                break;
            case 700:
                $proListArray['longName'] = "Trường học";
                break;
            case 800:
                $proListArray['longName'] = "Đồ trang trí";
                break;
            case 900:
                $proListArray['longName'] = "Đồ thờ cúng";
                break;
        }

        $this->load->view('top', $proListArray);
        $this->load->view('allProduct',$proListArray);
        $this->load->view('bottom');
    }
}
