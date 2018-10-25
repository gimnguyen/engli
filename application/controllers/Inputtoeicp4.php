<?php

class Inputtoeicp4 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        require_once( "part3O.php");
    }

    public function index(){
        $this->load->view('inputp4');
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

        // print_r($listAnsTrue);
        // echo '<br>Co '.(sizeof($listAnsTrue)).' Dap an<br>';

        // process question

        $questarr = explode("\n", $gquest);

        print_r($questarr);

        // ---------------------
        $mp3url = 'public/books/p4/'.$testcode.'/'.$testcode.'a4.mp3';

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
        $i = 0;

        if(sizeof($listAnsTrue) == 30){

            echo 'size: '.sizeof($questarr);

            foreach($questarr as $key => $value){
                $line = explode("(A)", $value);
    
                $question = $line[0];
    
                $pos = strpos($question, '.');
                $question = substr($question,$pos+1);
                $finalquest = trim($question);
    
                $xanswer = end($line);
                $arrans = explode(" (", $xanswer);
    
                
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
                
                
                $qesttmp = new part3O;
                $qesttmp->setquestID($qestid);
                $qesttmp->settestID($testcode);
                $qesttmp->setmp3url($mp3url);
                $qesttmp->settranscript($transRep);
                
                $qesttmp->setquest($finalquest);
                $qesttmp->setansa($anA);
                $qesttmp->setansb($anB);
                $qesttmp->setansc($anC);
                $qesttmp->setansd($anD);
                
                $qesttmp->settrueans($listAnsTrue[$trueAnIndex]);
                $p3Oarr[$i] = $qesttmp;
                $qestid++;
                    
                $inx++;
                $i++;
                $trueAnIndex++;
            }
    
            print_r($p3Oarr);

            if(sizeof($p3Oarr) == 30){
                $flag = 1;
                foreach($p3Oarr as $key => $value){
                    echo '-----Ghi câu hỏi vào database------<br>';

                    $mp3url = $value->getmp3url();
                    $transcript = $value->gettranscript();
                    $questID = $value->getquestID();
                    $testID = $value->gettestID();
        
                    $quest = $value->getquest();
                    $trueans = $value->gettrueans();
                    $ansa = $value->getansa();
                    $ansb = $value->getansb();
                    $ansc = $value->getansc();
                    $ansd = $value->getansd();

                    if($flag != 1){
                        $transcript = "";
                    }
        
                    $this->load->Model("InputData");
                    $this->InputData->insertPart4qestion($mp3url, $transcript, $questID, $testID, 
                    $quest, $trueans, $ansa, $ansb, $ansc, $ansd);
                    $flag = 5;
                }

                echo 'Lưu câu hỏi thành công <a href="'.base_url().'inputtoeicp3">Tiếp tục nhập</a><br>';
                echo '------Transcipt-------<br>';
                echo $transRep;
            }else{
                echo '<br>Lỗi không đủ 30 câu hỏi<br>';
            }
        }
        else {
            echo 'LỖI không đủ 30 câu trả lời!';
        }
    }
}