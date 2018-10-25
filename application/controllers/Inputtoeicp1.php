<?php

class Inputtoeicp1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function uploadImage($uImgThumbnail, $testcode){
        // echo 'vao upload';
        $path = base_url().'public/books/p1/'.$testcode;

        $config['upload_path'] = './public/books/p1/'.$testcode;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if ($this->upload->do_upload($uImgThumbnail)){
            $check = $this->upload->data();
            $imgThumbnail = 'public/books/p1/'.$testcode.'/'.$check['file_name'];

        }else{
            $err = $this->upload->display_errors();
            $imgThumbnail = '';
            echo 'Lỗi tải hình lên: '.$err;
        }
        return $imgThumbnail;

    }

    public function index()
    {
        $this->load->view('inputp1');
    }


    public function process(){
        $bookcode = $this->input->post('vbookcode');
        $testcode = $this->input->post('vtestcode');
        $para = array();
        $trueAns = $this->input->post('vtrueAns');
        $trans = $this->input->post('vtrans');

        $mp3url = 'public/books/p1/'.$testcode.'/'.$testcode.'a1.mp3';

        $newImgThumbnail1 = $_FILES['vPara1']['name'];
        $newImgThumbnail2 = $_FILES['vPara2']['name'];
        $newImgThumbnail3 = $_FILES['vPara3']['name'];
        $newImgThumbnail4 = $_FILES['vPara4']['name'];
        $newImgThumbnail5 = $_FILES['vPara5']['name'];
        $newImgThumbnail6 = $_FILES['vPara6']['name'];
        $newImgThumbnail7 = $_FILES['vPara7']['name'];
        $newImgThumbnail8 = $_FILES['vPara8']['name'];
        $newImgThumbnail9 = $_FILES['vPara9']['name'];
        $newImgThumbnail10 = $_FILES['vPara10']['name'];

        if ($newImgThumbnail1 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara1', $testcode);

            if ($upImage != ''){
                $para[0] = $upImage;
                echo $para[0].' hinh 1<br>';
            }
        }
        if ($newImgThumbnail2 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara2', $testcode);

            if ($upImage != ''){
                $para[1] = $upImage;
                echo $para[1].' hinh 2<br>';
            }
        }
        if ($newImgThumbnail3 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara3', $testcode);

            if ($upImage != ''){
                $para[2] = $upImage;
                echo $para[2].' hinh 3<br>';
            }
        }
        if ($newImgThumbnail4 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara4', $testcode);

            if ($upImage != ''){
                $para[3] = $upImage;
                echo $para[3].' hinh 4<br>';
            }
        }
        if ($newImgThumbnail5 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara5', $testcode);

            if ($upImage != ''){
                $para[4] = $upImage;
                echo $para[4].' hinh 5<br>';
            }
        }
        if ($newImgThumbnail6 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara6', $testcode);

            if ($upImage != ''){
                $para[5] = $upImage;
                echo $para[5].' hinh 6<br>';
            }
        }
        if ($newImgThumbnail7 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara7', $testcode);

            if ($upImage != ''){
                $para[6] = $upImage;
                echo $para[6].' hinh 7<br>';
            }
        }
        if ($newImgThumbnail8 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara8', $testcode);

            if ($upImage != ''){
                $para[7] = $upImage;
                echo $para[7].' hinh 8<br>';
            }
        }
        if ($newImgThumbnail9 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara9', $testcode);

            if ($upImage != ''){
                $para[8] = $upImage;
                echo $para[8].' hinh 9<br>';
            }
        }
        if ($newImgThumbnail10 != ''){
            // echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara10', $testcode);

            if ($upImage != ''){
                $para[9] = $upImage;
                echo $para[9].' hinh 10<br>';
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
        $transimg ='';
        $ishow = 0;
        for ($i=0; $i<10; $i++){
            if ($para[$i] != ''){
                $numpara = $numpara + 1;
            }else{
                echo '<h2>Lỗi phân tích câu hỏi. Paragrap '.($i+1).' bị trống hoặc upload lỗi</h2>';
            }
        }
        echo '<br>Co '.$numpara.' hình ảnh được upload thành công<br>';


//        tach transcript

        $transRep = '';
        if ($trans != ''){
            $transRep = str_replace("(0)","(D)", $trans);
            $transRep = str_replace("(8)","(B)", $transRep);
            $transRep = str_replace("(B","<br>(B", $transRep);
            $transRep = str_replace("(C","<br>(C", $transRep);
            $transRep = str_replace("(D","<br>(D", $transRep);
            $transRep = str_replace("2","<br><br>2", $transRep);
            $transRep = str_replace("3","<br><br>3", $transRep);
            $transRep = str_replace("4","<br><br>4", $transRep);
            $transRep = str_replace("5","<br><br>5", $transRep);
            $transRep = str_replace("6","<br><br>6", $transRep);
            $transRep = str_replace("7","<br><br>7", $transRep);
            $transRep = str_replace("8","<br><br>8", $transRep);
            $transRep = str_replace("9","<br><br>9", $transRep);
            $transRep = str_replace("10","<br><br>10", $transRep);
        }

//        End transcript

        if (sizeof($listAnsTrue) == 10 && $numpara == 10 && $transRep != ''){

            $this->load->Model("InputData");

            for ($i = 0; $i < 10; $i++){
                $this->InputData->insertP1($mp3url, $para[$i], $listAnsTrue[$i], $transRep, $transimg, $ishow,
                    ($i+1), $bookcode, $testcode);
                echo '<h3>Inser Paragrap '.($i+1).' thành công</h3>';
            }
            echo '<a href="'.base_url().'inputtoeicp1">Tiếp tục nhập</a><br>';
            echo $transRep;

        }else{
            echo '<h2>Lỗi phân tích câu hỏi</h2>';
        }

    }

}