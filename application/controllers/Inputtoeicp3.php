<?php

class Inputtoeicp3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        require_once( "part3O.php");
    }

    public function index(){
        $this->load->view('inputp3');
    }

    public function process(){
        $gquest = $this->input->post('vquest');
        $gansw = $this->input->post('vansw');
        $bookcode = $this->input->post('vbookcode');
        $testcode = $this->input->post('vtestcode');
        $trans = $this->input->post('vtrans');


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
        // echo '<br>Co '.(sizeof($listAnsTrue)).' Dap an<br>';

        // process question

        $questarr = explode("\n", $gquest);

        print_r($questarr);

        // ---------------------
        $mp3url = 'public/books/p3/'.$testcode.'/'.$testcode.'a3.mp3';

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


        $inx = 0;
        $qestid = 1;
        $p3Oarr;
        $qesttmp;
        $trueAnIndex = 0;

        if(sizeof($listAnsTrue) == 30){

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
                $arrans = explode(" (", $xanswer);
    
                // print_r($arrans);
                
                $iflag = 0;
                foreach($arrans as $key => $value){
    
                    if($iflag == 0){
                        $anA = trim($value);
                        
                    }
                    elseif ($iflag == 1){
                        $anB = trim(str_replace('B) ', '', $value));
                    }
                    elseif ($iflag == 2) {
                        $anC = trim(str_replace('C) ', '', $value));
                    }
                    elseif ($iflag == 3) {
                        $anD = trim(str_replace('D) ', '', $value));
                    }
                    $iflag++;
                }
                
                if($inx == 0 && $trueAnIndex != 30){
                    $qesttmp = new part3O;
                    $qesttmp->setquestID($qestid);
                    $qesttmp->settestID($testcode);
                    $qesttmp->setmp3url($mp3url);
                    $qesttmp->settranscript($transRep);
                    
                    $qesttmp->setquest1($finalquest);
                    $qesttmp->setansa1($anA);
                    $qesttmp->setansb1($anB);
                    $qesttmp->setansc1($anC);
                    $qesttmp->setansd1($anD);
                    // echo 'gg1: ' .$trueAnIndex;
                    $qesttmp->settrueans1($listAnsTrue[$trueAnIndex]);
                    $qestid++;
                }
                else if($inx == 1){
                    $qesttmp->setquest2($finalquest);
                    $qesttmp->setansa2($anA);
                    $qesttmp->setansb2($anB);
                    $qesttmp->setansc2($anC);
                    $qesttmp->setansd2($anD);
                    $qesttmp->settrueans2($listAnsTrue[$trueAnIndex]);
                }
                else if($inx == 2){
                    $qesttmp->setquest3($finalquest);
                    $qesttmp->setansa3($anA);
                    $qesttmp->setansb3($anB);
                    $qesttmp->setansc3($anC);
                    $qesttmp->setansd3($anD);
                    $p3Oarr[$i] = $qesttmp;
                    // echo 'gg: ' .$trueAnIndex;
                    $qesttmp->settrueans3($listAnsTrue[$trueAnIndex]);
                    $inx = -1;
                }
                $inx++;
                $i++;
                $trueAnIndex++;
            }
    
            print_r($p3Oarr);

            if(sizeof($p3Oarr) == 30){
                foreach($p3Oarr as $key => $value){
                    echo '-----Ghi câu hỏi vào database------<br>';
                    $mp3url = $value->getmp3url();
                    $transcript = $value->gettranscript();
                    $questID = $value->getquestID();
                    $testID = $value->gettestID();
        
                    $quest1 = $value->getquest1();
                    $trueans1 = $value->gettrueans1();
                    $ansa1 = $value->getansa1();
                    $ansb1 = $value->getansb1();
                    $ansc1 = $value->getansc1();
                    $ansd1 = $value->getansd1();
        
                    $quest2 = $value->getquest2();
                    $trueans2 = $value->gettrueans2();
                    $ansa2 = $value->getansa2();
                    $ansb2 = $value->getansb2();
                    $ansc2 = $value->getansc2();
                    $ansd2 = $value->getansd2();
        
                    $quest3 = $value->getquest3();
                    $trueans3 = $value->gettrueans3();
                    $ansa3 = $value->getansa3();
                    $ansb3 = $value->getansb3();
                    $ansc3 = $value->getansc3();
                    $ansd3 = $value->getansd3();
        
                    $this->load->Model("InputData");
                    $this->InputData->insertPart3qestion($mp3url, $transcript, $questID, $testID, 
                    $quest1, $trueans1, $ansa1, $ansb1, $ansc1, $ansd1, $quest2, $trueans2, $ansa2, $ansb2, $ansc2, $ansd2,
                    $quest3, $trueans3, $ansa3, $ansb3, $ansc3, $ansd3);
                }

                echo 'Lưu thành công. Câu hỏi đang được ẩn <a href="'.base_url().'inputtoeicp3">Tiếp tục nhập</a><br>';
                echo '------Transcipt-------<br>';
                echo $transRep;
            }else{
                echo '<br>Không đủ 30 câu hỏi<br>';
            }
        }
        else {
            echo 'Ko đủ 30 đáp án!';
        }
    }
}