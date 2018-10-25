<?php

class Inputtoeicp6 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('inputp6');

    }

    function uploadImage($uImgThumbnail, $testcode){
        echo 'vao upload';

        $config['upload_path'] = './public/books/p6/'.$testcode;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($uImgThumbnail)){
            $check = $this->upload->data();
            $imgThumbnail = 'public/books/p6/'.$testcode.'/'.$check['file_name'];

        }else{
            $err = $this->upload->display_errors();
            $imgThumbnail = '';
            echo 'Lỗi tải hình lên: '.$err;
        }
        return $imgThumbnail;
    }

    public function process(){
        $bookcode = $this->input->post('vbookcode');
        $testcode = $this->input->post('vtestcode');
        $para1 = $this->input->post('vPara1');
        $para2 = $this->input->post('vPara2');
        $para3 = $this->input->post('vPara3');
        $para4 = $this->input->post('vPara4');
        $trueAns = $this->input->post('vtrueAns');

        $newImgThumbnail = $_FILES['vPara1']['name'];
        $newImgThumbnail2 = $_FILES['vPara2']['name'];
        $newImgThumbnail3 = $_FILES['vPara3']['name'];
        $newImgThumbnail4 = $_FILES['vPara4']['name'];

        if ($newImgThumbnail != ''){
            echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara1', $testcode);

            if ($upImage != ''){
                $para1 = $upImage;
                echo $para1.' hinh 1<br>';
            }
        }
        if ($newImgThumbnail2 != ''){
            echo 'vao upload hinh';
            $upImage2 = $this->uploadImage('vPara2', $testcode);

            if ($upImage2 != ''){
                $para2 = $upImage2;
                echo $para2.' hinh 2<br>';
            }
        }
        if ($newImgThumbnail3 != ''){
            echo 'vao upload hinh';
            $upImage3 = $this->uploadImage('vPara3', $testcode);

            if ($upImage3 != ''){
                $para3 = $upImage3;
                echo $para3.' hinh 3<br>';
            }
        }
        if ($newImgThumbnail4 != ''){
            echo 'vao upload hinh';
            $upImage4 = $this->uploadImage('vPara4', $testcode);

            if ($upImage4 != ''){
                $para4 = $upImage4;
                echo $para4.' hinh 4<br>';
            }
        }

//        parse answer
        $listAns1 = str_replace("(","", $trueAns);
        $listAns2 = str_replace(")","", $listAns1);
        $listAns3 = str_replace("{","", $listAns2);
        $listAns4 = str_replace("}","", $listAns3);

        for ($i=0; $i<5; $i++){
            $listAns4 = str_replace("  "," ", $listAns4);
        }
        $listAns = explode (" ", $listAns4);


        $listAnsTrue = array();
        $anindex = 0;
        foreach ($listAns as $key => $value){
            if ($value == 'A'){
                $listAnsTrue[$anindex] = $value;
                $anindex++;
            } if ($value == 'B'){
                $listAnsTrue[$anindex] = $value;
                $anindex++;
            } if ($value == 'C'){
                $listAnsTrue[$anindex] = $value;
                $anindex++;
            } if ($value == 'D'){
                $listAnsTrue[$anindex] = $value;
                $anindex++;
            }
        }

        print_r($listAnsTrue);
        echo '<br>Co '.(sizeof($listAnsTrue)).' Dap an<br>';

        $numpara = 0;
        $flgpa1 = 0;
        $flgpa2 = 0;
        $flgpa3 = 0;
        $flgpa4 = 0;

        if ($para1 != ''){
            $numpara = $numpara + 1;
            $flgpa1 = 1;
        }
        if ($para2 != ''){
            $numpara = $numpara + 1;
            $flgpa2 = 1;
        }
        if ($para3 != ''){
            $numpara = $numpara + 1;
            $flgpa3 = 1;
        }
        if ($para4 != ''){
            $numpara = $numpara + 1;
            $flgpa4 = 1;
        }

        echo '<br>Co '.$numpara.' hình ảnh được upload thành công<br>';

        if (sizeof($listAnsTrue)/3 == $numpara){

            $this->load->Model("InputData");
            if ($flgpa1 == 1){
                $this->InputData->insertP6($para1, $listAnsTrue[0], $listAnsTrue[1], $listAnsTrue[2], $bookcode, $testcode);
                echo '<h3>Inser Paragrap 1 thành công</h3>';
            }else{
                echo '<h2>Lỗi phân tích câu hỏi. Paragrap 1 bị trống hoặc upload lỗi</h2>';
            }

            if ($flgpa1 == 1 && $flgpa2 == 1){
                $this->InputData->insertP6($para1, $listAnsTrue[3], $listAnsTrue[4], $listAnsTrue[5], $bookcode, $testcode);
                echo '<h3>Inser Paragrap 2 thành công</h3>';
            }else{
                echo '<h2>Lỗi phân tích câu hỏi. Paragrap 2 bị trống hoặc upload lỗi</h2>';
            }

            if ($flgpa1 == 1 && $flgpa2 == 1 && $flgpa3 == 1){
                $this->InputData->insertP6($para1, $listAnsTrue[6], $listAnsTrue[7], $listAnsTrue[8], $bookcode, $testcode);
                echo '<h3>Inser Paragrap 3 thành công</h3>';
            }else{
                echo '<h2>Lỗi phân tích câu hỏi. Paragrap 3 bị trống hoặc upload lỗi</h2>';
            }

            if ($flgpa1 == 1 && $flgpa2 == 1 && $flgpa3 == 1 && $flgpa4 == 1){
                $this->InputData->insertP6($para1, $listAnsTrue[9], $listAnsTrue[10], $listAnsTrue[11], $bookcode, $testcode);
                echo '<h3>Inser Paragrap 6 thành công</h3>';
            }else{
                echo '<h2>Lỗi phân tích câu hỏi. Paragrap 6 bị trống hoặc upload lỗi</h2>';
            }

            echo '<a href="'.base_url().'inputtoeicp6">Tiếp tục nhập</a>';

        }else{
            echo '<h2>Lỗi phân tích câu hỏi</h2>';
        }

    }

}