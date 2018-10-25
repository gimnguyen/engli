<?php

class Inputtoeicp5 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        require_once( "part3O.php");
    }

    public function index(){
        $this->load->view('inputp5');

    }

    public function process(){
        $gquest = $this->input->post('vquest');
        $gansw = $this->input->post('vansw');
        $bookcode = $this->input->post('vbookcode');
        $testcode = $this->input->post('vtestcode');


//        parse answer
        $listAns1 = str_replace("(","", $gansw);
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

//        replace khoang trong dap an

        $repla1 = str_replace('  ',' ______ ',$gquest,$numberRepl);
        $repla2 = str_replace('xxx',' ______ ',$repla1,$numberRep2);
        echo 'Có '.substr_count($repla2, ' ______ ').' khoảng cách được đánh dấu';


// ---------------------------
        $p3Oarr;
        $qesttmp;
        $trueAnIndex = 0;

        $questarr = explode("\n", $repla2);
        print_r($questarr);
        echo 'size: '.sizeof($questarr);

        if(sizeof($questarr) == sizeof($listAnsTrue)){

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
                
                $qesttmp = new part3O;
                $qesttmp->settestID($testcode);
                $qesttmp->setquest1($finalquest);
                $qesttmp->setansa1($anA);
                $qesttmp->setansb1($anB);
                $qesttmp->setansc1($anC);
                $qesttmp->setansd1($anD);
                $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                $p3Oarr[$i] = $qesttmp;
                $i++;
                $trueAnIndex++;
            }
        
            print_r($p3Oarr);
        
            foreach($p3Oarr as $key => $value){
                echo '-----Ghi câu hỏi vào database------<br>';
                $testID = $value->gettestID();
        
                $quest = $value->getquest1();
                $trueans = $value->gettrueans1();
                $ansa = $value->getansa1();
                $ansb = $value->getansb1();
                $ansc = $value->getansc1();
                $ansd = $value->getansd1();
        
                $this->load->Model("InputData");
                $this->InputData->insertP5($quest, $ansa, $ansb, $ansc, $ansd, $trueans, $testID);
            }
        
            echo 'Lưu thành công. Câu hỏi đang được ẩn <a href="'.base_url().'inputtoeicp5">Tiếp tục nhập</a><br>';

        }else {
            echo '<br>Số câu hỏi KHÔNG bằng số đáp án<br>';
        }
    }
}