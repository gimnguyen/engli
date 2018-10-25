<?php

class Vocabulary extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->Model("FeDb");
        $proListArray['patitle'] = 'Vocabulary';

        $proListArray['a8PlayList'] = $this->FeDb->get8Playlist();
        $proListArray['randomwords'] = $this->FeDb->getRandomWords();
        $proListArray['faBlog'] = $this->FeDb->getFaBlogs();

        $today = gmdate('d');
        // $today = 21;

        $proListArray['todayListID'] = $this->FeDb->getTodayWordID($today);

        if(count($proListArray['todayListID']) != 10){
            $proListArray['todayradom'] = $this->FeDb->getVocabularyRandom();
            $i = 1;
            foreach($proListArray['todayradom'] as $key => $value){
                $this->FeDb->insertTodayword($value['ID'], $today, $i);
                $i++;
            }
            $proListArray['todayListID'] = $this->FeDb->getTodayWordID($today);
        }

//        $tmp = array();
        $g = 0;
        foreach($proListArray['todayListID'] as $key => $value){
            $proListArray['todayList'][$g] =  $this->FeDb->getTodayFullWords($value['ID']);
            $g++;
        }

        $this->load->view('top', $proListArray);
        $this->load->view('vocabulary', $proListArray);
        $this->load->view('bottom');
    }

    public function lists($plID){

        $playlistIDarr = explode ("-", $plID);
        $playlistID = $playlistIDarr[0];

        $this->load->Model("FeDb");
        $proListArray['vocapList'] = $this->FeDb->getPlaylist($playlistID);
        $proListArray['wordpList'] = $this->FeDb->getplwords($playlistID);
        $proListArray['faBlog'] = $this->FeDb->getFaBlogs();
        $proListArray['patitle'] = 'Vocabulary Playlist';

        $this->load->view('top', $proListArray);
        $this->load->view('vocalist', $proListArray);
        $this->load->view('bottom');
    }

    public function word($wordID){
        echo 'xx: '. $wordID;

        $this->load->Model("FeDb");
        $proListArray['gword'] = $this->FeDb->getword($wordID);
        $proListArray['relativeword'] = $this->FeDb->getrelativewords();
        $proListArray['patitle'] = 'Vocabulary';

//        $this->load->view('top', $proListArray);
//        $this->load->view('vocaword', $proListArray);
//        $this->load->view('bottom');
    }

    public function all_playlist(){
        $this->load->Model("FeDb");
        $proListArray['patitle'] = 'Vocabulary';

        $proListArray['a8PlayList'] = $this->FeDb->getAllPlaylist();
        $proListArray['faBlog'] = $this->FeDb->getFaBlogs();

        $this->load->view('top', $proListArray);
        $this->load->view('allvocalist', $proListArray);
        $this->load->view('bottom');
    }
}