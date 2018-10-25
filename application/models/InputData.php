<?php
class InputData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertP1($mp3url, $quest, $trueans, $transcript, $transimg, $ishow,
                             $questID, $bookcode, $testID){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('trueans', $trueans);
        $this->db->set('quest', $quest);
        $this->db->set('transcript', $transcript);
        $this->db->set('transimg', $transimg);
        $this->db->set('ishow', $ishow);
        $this->db->set('questID', $questID);
        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);

        $this->db->insert('toeicpart1');
    }

    public function insertP2($mp3url, $trueans1,$trueans2, $trueans3, $trueans4, $trueans5,
                             $trueans6, $trueans7, $trueans8, $trueans9, $trueans10, $trueans11
    , $trueans12, $trueans13, $trueans14, $trueans15, $trueans16, $trueans17, $trueans18, $trueans19,
                             $trueans20, $trueans21, $trueans22, $trueans23, $trueans24, $trueans25, $trueans26,
                             $trueans27, $trueans28, $trueans29, $trueans30, $transcript, $transimg, $ishow, $bookcode, $testID){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('trueans1', $trueans1);
        $this->db->set('trueans2', $trueans2);
        $this->db->set('trueans3', $trueans3);
        $this->db->set('trueans4', $trueans4);
        $this->db->set('trueans5', $trueans5);
        $this->db->set('trueans6', $trueans6);
        $this->db->set('trueans7', $trueans7);
        $this->db->set('trueans8', $trueans8);
        $this->db->set('trueans9', $trueans9);
        $this->db->set('trueans10', $trueans10);
        $this->db->set('trueans11', $trueans11);
        $this->db->set('trueans12', $trueans12);
        $this->db->set('trueans13', $trueans13);
        $this->db->set('trueans14', $trueans14);
        $this->db->set('trueans15', $trueans15);
        $this->db->set('trueans16', $trueans16);
        $this->db->set('trueans17', $trueans17);
        $this->db->set('trueans18', $trueans18);
        $this->db->set('trueans19', $trueans19);
        $this->db->set('trueans20', $trueans20);
        $this->db->set('trueans21', $trueans21);
        $this->db->set('trueans22', $trueans22);
        $this->db->set('trueans23', $trueans23);
        $this->db->set('trueans24', $trueans24);
        $this->db->set('trueans25', $trueans25);
        $this->db->set('trueans26', $trueans26);
        $this->db->set('trueans27', $trueans27);
        $this->db->set('trueans28', $trueans28);
        $this->db->set('trueans29', $trueans29);
        $this->db->set('trueans30', $trueans30);

        $this->db->set('transcript', $transcript);
        $this->db->set('transimg', $transimg);
        $this->db->set('ishow', $ishow);
        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);

        $this->db->insert('toeicpart2');
    }

    public function insertP5($quest, $ansa, $ansb, $ansc, $ansd, $trueans, $testID){
        $this->db->set('quest', $quest);
        $this->db->set('ansa', $ansa);
        $this->db->set('ansb', $ansb);
        $this->db->set('ansc', $ansc);
        $this->db->set('ansd', $ansd);
        $this->db->set('trueans', $trueans);
        $this->db->set('ishow', 0);
        $this->db->set('testID', $testID);

        $this->db->insert('toeicpart5');
    }

    public function insertP6($questimg, $trueans1, $trueans2, $trueans3, $bookcode, $testID){
        $this->db->set('questimg', $questimg);
        $this->db->set('trueans1', $trueans1);
        $this->db->set('trueans2', $trueans2);
        $this->db->set('trueans3', $trueans3);
        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);
        $this->db->set('ishow', 0);

        $this->db->insert('toeicpart6');
    }

    public function insertP7($quest1img, $quest2img, $quest1,$ans1a,$ans1b, $ans1c,
                             $ans1d, $quest2, $ans2a,$ans2b, $ans2c, $ans2d,
                             $quest3, $ans3a,$ans3b, $ans3c, $ans3d,
                             $quest4, $ans4a,$ans4b, $ans4c, $ans4d,
                             $quest5, $ans5a,$ans5b, $ans5c, $ans5d,
                             $trueans1, $trueans2, $trueans3, $trueans4, $trueans5,
                             $testID, $bookcode){
        $this->db->set('quest1img', $quest1img);
        $this->db->set('quest2img', $quest2img);

        $this->db->set('quest1', $quest1);
        $this->db->set('ans1a', $ans1a);
        $this->db->set('ans1b', $ans1b);
        $this->db->set('ans1c', $ans1c);
        $this->db->set('ans1d', $ans1d);

        $this->db->set('quest2', $quest2);
        $this->db->set('ans2a', $ans2a);
        $this->db->set('ans2b', $ans2b);
        $this->db->set('ans2c', $ans2c);
        $this->db->set('ans2d', $ans2d);

        $this->db->set('quest3', $quest3);
        $this->db->set('ans3a', $ans3a);
        $this->db->set('ans3b', $ans3b);
        $this->db->set('ans3c', $ans3c);
        $this->db->set('ans3d', $ans3d);

        $this->db->set('quest4', $quest4);
        $this->db->set('ans4a', $ans4a);
        $this->db->set('ans4b', $ans4b);
        $this->db->set('ans4c', $ans4c);
        $this->db->set('ans4d', $ans4d);

        $this->db->set('quest5', $quest5);
        $this->db->set('ans5a', $ans5a);
        $this->db->set('ans5b', $ans5b);
        $this->db->set('ans5c', $ans5c);
        $this->db->set('ans5d', $ans5d);

        $this->db->set('trueans1', $trueans1);
        $this->db->set('trueans2', $trueans2);
        $this->db->set('trueans3', $trueans3);
        $this->db->set('trueans4', $trueans4);
        $this->db->set('trueans5', $trueans5);

        $this->db->set('bookcode', $bookcode);
        $this->db->set('testID', $testID);
        $this->db->set('ishow', 0);

        $this->db->insert('toeicpart7');
    }

    //  Insert part 3
    public function insertPart3qestion($mp3url, $transcript, $questID, $testID, $quest1, $trueans1,
    $ansa1, $ansb1, $ansc1, $ansd1, $quest2, $trueans2, $ansa2, $ansb2, $ansc2, $ansd2, $quest3, $trueans3, $ansa3, $ansb3, $ansc3, $ansd3){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('transcript', $transcript);
        $this->db->set('questID', $questID);
        $this->db->set('testID', $testID);

        $this->db->set('quest1', $quest1);
        $this->db->set('trueans1', $trueans1);
        $this->db->set('ansa1', $ansa1);
        $this->db->set('ansb1', $ansb1);
        $this->db->set('ansc1', $ansc1);
        $this->db->set('ansd1', $ansd1);

        $this->db->set('quest2', $quest2);
        $this->db->set('trueans2', $trueans2);
        $this->db->set('ansa2', $ansa2);
        $this->db->set('ansb2', $ansb2);
        $this->db->set('ansc2', $ansc2);
        $this->db->set('ansd2', $ansd2);

        $this->db->set('quest3', $quest3);
        $this->db->set('trueans3', $trueans3);
        $this->db->set('ansa3', $ansa3);
        $this->db->set('ansb3', $ansb3);
        $this->db->set('ansc3', $ansc3);
        $this->db->set('ansd3', $ansd3);

        $this->db->set('ishow', "0");
        $this->db->insert('toeicpart3');
    }
    // end insert part 3

    //  Insert part 4
    public function insertPart4qestion($mp3url, $transcript, $questID, $testID, 
                    $quest, $trueans, $ansa, $ansb, $ansc, $ansd){
        $this->db->set('mp3url', $mp3url);
        $this->db->set('transcript', $transcript);
        $this->db->set('questID', $questID);
        $this->db->set('testID', $testID);

        $this->db->set('quest', $quest);
        $this->db->set('trueans', $trueans);
        $this->db->set('ansa', $ansa);
        $this->db->set('ansb', $ansb);
        $this->db->set('ansc', $ansc);
        $this->db->set('ansd', $ansd);

        $this->db->set('ishow', "0");
        $this->db->insert('toeicpart4');
    }
    // end insert part 4

}
?>