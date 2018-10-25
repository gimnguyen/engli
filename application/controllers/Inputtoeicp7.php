<?php

class Inputtoeicp7 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        require_once( "part3O.php");
    }

    public function index(){
        $this->load->view('inputp7');

    }

    function uploadImage($uImgThumbnail, $testcode){
        echo 'vao upload';

        $config['upload_path'] = './public/books/p7/'.$testcode;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($uImgThumbnail)){
            $check = $this->upload->data();
            $imgThumbnail = 'public/books/p7/'.$testcode.'/'.$check['file_name'];

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

        $gquest = $this->input->post('vquest');
        $gansw = $this->input->post('vansw');

        $newImgThumbnail = $_FILES['vPara1']['name'];
        $newImgThumbnail2 = $_FILES['vPara2']['name'];

        if ($newImgThumbnail != ''){
            echo 'vao upload hinh';
            $upImage = $this->uploadImage('vPara1', $testcode);

            if ($upImage != ''){
                $para1 = $upImage;
            }
        }
        if ($newImgThumbnail2 != ''){
            echo 'vao upload hinh';
            $upImage2 = $this->uploadImage('vPara2', $testcode);

            if ($upImage2 != ''){
                $para2 = $upImage2;
            }
        }
        $listAns1 = str_replace("(","", $gansw);
        $listAns2 = str_replace(")","", $listAns1);
        $listAns3 = str_replace("{","", $listAns2);
        $listAns4 = str_replace("}","", $listAns3);

        for ($i=0; $i<3; $i++){
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
        echo 'Co '.sizeof($listAnsTrue).' Dap an<br>';


// --------------------------------
        // process question

        $questarr = explode("\n", $gquest);
        echo '<br>Có '.sizeof($questarr).' câu hỏi<br>';
        print_r($questarr);

        $inx = 0;
        $qesttmp;
        $trueAnIndex = 0;

        if(sizeof($listAnsTrue) == sizeof($questarr)){

            echo 'size: '.sizeof($questarr);

            foreach($questarr as $key => $value){
                $line = explode("(A)", $value);

                $question = $line[0];

                $pos = strpos($question, '.');
                $question = substr($question,$pos+1);
                $finalquest = trim($question);

                // print_r($line);

                $xanswer = end($line);

                // echo ($xanswer);
                $arrans = explode("(", $xanswer);

                // print_r($arrans);
                
                $iflag = 0;
                foreach($arrans as $key => $value){

                    if($iflag == 0){
                        $anA = trim($value);
                    }
                    elseif ($iflag == 1){
                        $anB = trim(str_replace('B)', '', $value));
                    }
                    elseif ($iflag == 2) {
                        $anC = trim(str_replace('C)', '', $value));
                    }
                    elseif ($iflag == 3) {
                        $anD = trim(str_replace('D)', '', $value));
                    }
                    $iflag++;
                }

                switch(sizeof($questarr)){
                    case 1:
                    $qesttmp = new part3O;
                    $qesttmp->settestID($testcode);

                    $qesttmp->setquest1($finalquest);
                    $qesttmp->setansa1($anA);
                    $qesttmp->setansb1($anB);
                    $qesttmp->setansc1($anC);
                    $qesttmp->setansd1($anD);
                    $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                    break;

                    case 2:
                    if($inx == 0){
                        $qesttmp = new part3O;
                        $qesttmp->settestID($testcode);
    
                        $qesttmp->setquest1($finalquest);
                        $qesttmp->setansa1($anA);
                        $qesttmp->setansb1($anB);
                        $qesttmp->setansc1($anC);
                        $qesttmp->setansd1($anD);
                        $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 1){
                        $qesttmp->setquest2($finalquest);
                        $qesttmp->setansa2($anA);
                        $qesttmp->setansb2($anB);
                        $qesttmp->setansc2($anC);
                        $qesttmp->setansd2($anD);
                        $qesttmp->settrueans2($listAnsTrue[$trueAnIndex]);
                    }
                    break;

                    case 3:
                    if($inx == 0){
                        $qesttmp = new part3O;
                        $qesttmp->settestID($testcode);

                        $qesttmp->setquest1($finalquest);
                        $qesttmp->setansa1($anA);
                        $qesttmp->setansb1($anB);
                        $qesttmp->setansc1($anC);
                        $qesttmp->setansd1($anD);
                        $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 1){
                        $qesttmp->setquest2($finalquest);
                        $qesttmp->setansa2($anA);
                        $qesttmp->setansb2($anB);
                        $qesttmp->setansc2($anC);
                        $qesttmp->setansd2($anD);
                        $qesttmp->settrueans2($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 2){
                        $qesttmp->setquest3($finalquest);
                        $qesttmp->setansa3($anA);
                        $qesttmp->setansb3($anB);
                        $qesttmp->setansc3($anC);
                        $qesttmp->setansd3($anD);
                        $qesttmp->settrueans3($listAnsTrue[$trueAnIndex]);
                    }
                    break;

                    case 4:
                    if($inx == 0){
                        $qesttmp = new part3O;
                        $qesttmp->settestID($testcode);
    
                        $qesttmp->setquest1($finalquest);
                        $qesttmp->setansa1($anA);
                        $qesttmp->setansb1($anB);
                        $qesttmp->setansc1($anC);
                        $qesttmp->setansd1($anD);
                        $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 1){
                        $qesttmp->setquest2($finalquest);
                        $qesttmp->setansa2($anA);
                        $qesttmp->setansb2($anB);
                        $qesttmp->setansc2($anC);
                        $qesttmp->setansd2($anD);
                        $qesttmp->settrueans2($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 2){
                        $qesttmp->setquest3($finalquest);
                        $qesttmp->setansa3($anA);
                        $qesttmp->setansb3($anB);
                        $qesttmp->setansc3($anC);
                        $qesttmp->setansd3($anD);
                        $qesttmp->settrueans3($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 3){
                        $qesttmp->setquest4($finalquest);
                        $qesttmp->setansa4($anA);
                        $qesttmp->setansb4($anB);
                        $qesttmp->setansc4($anC);
                        $qesttmp->setansd4($anD);
                        $qesttmp->settrueans4($listAnsTrue[$trueAnIndex]);
                    }
                    break;

                    case 5:
                    if($inx == 0){
                        $qesttmp = new part3O;
                        $qesttmp->settestID($testcode);
    
                        $qesttmp->setquest1($finalquest);
                        $qesttmp->setansa1($anA);
                        $qesttmp->setansb1($anB);
                        $qesttmp->setansc1($anC);
                        $qesttmp->setansd1($anD);
                        $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 1){
                        $qesttmp->setquest2($finalquest);
                        $qesttmp->setansa2($anA);
                        $qesttmp->setansb2($anB);
                        $qesttmp->setansc2($anC);
                        $qesttmp->setansd2($anD);
                        $qesttmp->settrueans2($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 2){
                        $qesttmp->setquest3($finalquest);
                        $qesttmp->setansa3($anA);
                        $qesttmp->setansb3($anB);
                        $qesttmp->setansc3($anC);
                        $qesttmp->setansd3($anD);
                        $qesttmp->settrueans3($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 3){
                        $qesttmp->setquest4($finalquest);
                        $qesttmp->setansa4($anA);
                        $qesttmp->setansb4($anB);
                        $qesttmp->setansc4($anC);
                        $qesttmp->setansd4($anD);
                        $qesttmp->settrueans4($listAnsTrue[$trueAnIndex]);
                        $trueAnIndex++;
                    }
                    if($inx == 4){
                        $qesttmp->setquest5($finalquest);
                        $qesttmp->setansa5($anA);
                        $qesttmp->setansb5($anB);
                        $qesttmp->setansc5($anC);
                        $qesttmp->setansd5($anD);
                        $qesttmp->settrueans5($listAnsTrue[$trueAnIndex]);
                    }
                    break;
                }
            }

            echo '-----Ghi câu hỏi vào database------<br>';
           $quest1 = $qesttmp->getquest1();
            $trueans1 = $qesttmp->gettrueans1();
            $ansa1 = $qesttmp->getansa1();
            $ansb1 = $qesttmp->getansb1();
            $ansc1 = $qesttmp->getansc1();
            $ansd1 = $qesttmp->getansd1();

            $quest2 = $qesttmp->getquest2();
            $trueans2 = $qesttmp->gettrueans2();
            $ansa2 = $qesttmp->getansa2();
            $ansb2 = $qesttmp->getansb2();
            $ansc2 = $qesttmp->getansc2();
            $ansd2 = $qesttmp->getansd2();

            $quest3 = $qesttmp->getquest3();
            $trueans3 = $qesttmp->gettrueans3();
            $ansa3 = $qesttmp->getansa3();
            $ansb3 = $qesttmp->getansb3();
            $ansc3 = $qesttmp->getansc3();
            $ansd3 = $qesttmp->getansd3();

            $quest4 = $qesttmp->getquest4();
            $trueans4 = $qesttmp->gettrueans4();
            $ansa4 = $qesttmp->getansa4();
            $ansb4 = $qesttmp->getansb4();
            $ansc4 = $qesttmp->getansc4();
            $ansd4 = $qesttmp->getansd4();

            $quest5 = $qesttmp->getquest5();
            $trueans5 = $qesttmp->gettrueans5();
            $ansa5 = $qesttmp->getansa5();
            $ansb5 = $qesttmp->getansb5();
            $ansc5 = $qesttmp->getansc5();
            $ansd5 = $qesttmp->getansd5();

            $this->load->Model("InputData");
            $this->InputData->insertP7($para1, $para2, 
            $quest1,$ansa1,$ansb1, $ansc1, $ansd1,
            $quest2, $ansa2,$ansb2, $ansc2, $ansd2,
            $quest3, $ansa3,$ansb3, $ansc3, $ansd3,
            $quest4, $ansa4,$ansb4, $ansc4, $ansd4,
            $quest5, $ansa5,$ansb5, $ansc5, $ansd5,
            
            $trueans1, $trueans2, $trueans3, $trueans4, $trueans5,
            $testcode, $bookcode);

                echo '<h2>Lưu thành công. Câu hỏi đang được ẩn <a href="'.base_url().'inputtoeicp7">Tiếp tục nhập</a></h2><br>';

        }
        else {
            echo '<br><h2>Lỗi: Số đáp án KHÔNG bằng số câu hỏi</h2>';
        }
    }

}