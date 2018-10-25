<?php

class Inputtoeicp2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('inputp2');
    }

    function upload($uImgThumbnail, $testcode){
        echo 'vao upload';

        $config['upload_path'] = './public/books/p2/'.$testcode;
        $config['allowed_types'] = 'mp3';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($uImgThumbnail)){
            $check = $this->upload->data();
            $imgThumbnail = 'public/books/p2/'.$testcode.'/'.$check['file_name'];

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

        $trans = $this->input->post('vtran');
        $trueAns = $this->input->post('vansw');

        $mp3url = 'public/books/p3/'.$testcode.'/'.$testcode.'a2.mp3';

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

        if(sizeof($listAnsTrue) == 30 && $transRep != ''){

            echo "Bắt đầu insert vào database<br>";

            $this->load->Model("InputData");
            $this->InputData->insertP2($mp3url, $listAnsTrue[0],$listAnsTrue[1],
            $listAnsTrue[2],$listAnsTrue[3],$listAnsTrue[4],$listAnsTrue[5],
            $listAnsTrue[6],$listAnsTrue[7],$listAnsTrue[8],$listAnsTrue[9],
            $listAnsTrue[10],$listAnsTrue[11],$listAnsTrue[12],$listAnsTrue[13],
            $listAnsTrue[14],$listAnsTrue[15],$listAnsTrue[16],$listAnsTrue[17],
            $listAnsTrue[18],$listAnsTrue[19],$listAnsTrue[20],$listAnsTrue[21],
            $listAnsTrue[22],$listAnsTrue[23],$listAnsTrue[24],$listAnsTrue[25],
            $listAnsTrue[26],$listAnsTrue[27],$listAnsTrue[28],$listAnsTrue[29], $transRep, "", "0", $bookcode, $testcode);

            echo 'Lưu thành công. Câu hỏi đang được ẩn <a href="'.base_url().'inputtoeicp2">Tiếp tục nhập</a><br>';
            echo '------Transcipt-------<br>';
            echo $trans;
        }

    }
}