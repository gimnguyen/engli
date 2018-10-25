<?php
class FeDb extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get28Quest(){
        $this->db->limit(28);
        $this->db->where('ishow', 1);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("foru");
        return $query->result_array();
    }

    public function getQuestDetail($productID){
        $this->db->where('ID',$productID);
        $this->db->where('ishow', 1);
        $query = $this->db->get('foru');

        return $query->result_array();
    }

    public function getRandomWords(){
        $this->db->limit(8);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("vocabulary");
        return $query->result_array();
    }

    public function getTodayFullWords($plID){
        $this->db->from ( 'vocabulary' );
        $this->db->where ( 'ID', $plID);
        $query = $this->db->get ();
        return $query->row_array();

    }

    public function getTodayWordID($today){
        $this->db->where('today', $today);
        $this->db->limit(10);
        $query = $this->db->get("today");
        return $query->result_array();
    }

    public function getVocabularyRandom(){
        $this->db->select('ID');
        $this->db->limit(10);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("vocabulary");
        return $query->result_array();
    }

    public function insertTodayword($wordid, $today, $id){
        $this->db->set('today', $today);
        $this->db->set('wordid', $wordid);
        $this->db->where('ID', $id);
        $this->db->update('today');
    }

    public function getToeicPart2Random(){
        $this->db->limit(1);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("toeicpart2");
        return $query->result_array();
    }

    public function getToeicPart3Random(){
        $this->db->select('testID');
        $this->db->limit(1);
        $this->db->order_by('testID', 'RANDOM');
        $query = $this->db->get("toeicpart3");
        return $query->result_array();
    }

    public function getToeicPart3Group($gtestID){
        $this->db->limit(10);
        $this->db->order_by('questID', 'ASC');
        $this->db->where('ishow', 1);
        $this->db->where('testID',$gtestID );
        $query = $this->db->get("toeicpart3");
        return $query->result_array();
    }

    public function getToeicPart4Random(){
        $this->db->select('testID');
        $this->db->limit(1);
        $this->db->order_by('testID', 'RANDOM');
        $query = $this->db->get("toeicpart4");
        return $query->result_array();
    }

    public function getToeicPart4Group($gtestID){
        $this->db->limit(30);
        $this->db->order_by('questID', 'ASC');
        $this->db->where('ishow', 1);
        $this->db->where('testID',$gtestID );
        $query = $this->db->get("toeicpart4");
        return $query->result_array();
    }

    public function getToeicPart5Random(){
        $this->db->limit(5);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("toeicpart5");
        return $query->result_array();
    }

    public function getToeicPart6Random(){
        $this->db->limit(1);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("toeicpart6");
        return $query->result_array();
    }

    public function getToeicPart7Random(){
        $this->db->limit(1);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("toeicpart7");
        return $query->result_array();
    }

    public function getToeicPart1Random(){
        $this->db->select('testID');
        $this->db->limit(1);
        $this->db->order_by('testID', 'RANDOM');
        $query = $this->db->get("toeicpart1");
        return $query->result_array();
    }

    public function getToeicPart1Group($testID){
        $this->db->where('ishow', 1);
        $this->db->where('testID',$testID );
        $this->db->limit(10);
        $this->db->order_by('questID', 'ASC');
        $query = $this->db->get("toeicpart1");
        return $query->result_array();
    }

    public function get8Playlist(){
        $this->db->limit(8);
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get("playlist");
        return $query->result_array();
    }

    public function getAllPlaylist(){
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get("playlist");
        return $query->result_array();
    }

    public function getPlaylist($plID){
        $this->db->where('ID',$plID );
        $this->db->limit(10);
        $query = $this->db->get("playlist");
        return $query->result_array();
    }

    function getplwords($plID) {

        $this->db->select ( 'word, mp3url, oggurl, spelling, type, shortdes, example');
        $this->db->from ( 'vocabulary' );
        $this->db->join ( 'playlistrow', 'vocabulary.ID = playlistrow.wordID' , 'left' );
        $this->db->where ( 'playlistrow.playlistID', $plID);
        $query = $this->db->get ();
        return $query->result_array();
    }

    function getrelativewords() {
        $this->db->select ( 'ID, wordname, brefdefine');
        $this->db->order_by('ID', 'RANDOM');
        $this->db->limit(8);
        $query = $this->db->get ("words");
        return $query->result_array ();
    }





//    ---------------------

    public function getHomeService(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $query = $this->db->get("service");
        return $query->result_array();
    }

    public function getAllService(){
        $this->db->where('ishow', 1);
        $query = $this->db->get("service");
        return $query->result_array();
    }

    public function getServiceDetail($productID){
        $this->db->where('ID',$productID);
        $query = $this->db->get('service');

        return $query->result_array();
    }

    public function getServiceTitle($productID){
        $this->db->select('longName');
        $this->db->where('ID',$productID);
        $query = $this->db->get('service');

        return $query->row_array();
    }

    // Products
    public function getHomeProducts(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getAllProducts(){
        $this->db->where('ishow', 1);
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getProductDetail($productID){
        $this->db->where('ID',$productID);
        $query = $this->db->get('product');

        return $query->result_array();
    }

    public function getProductTitle($productID){
        $this->db->select('longName');
        $this->db->where('ID',$productID);
        $query = $this->db->get('product');

        return $query->row_array();
    }

    // Blogs
    public function getHomeBlogs(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $this->db->limit(12);
        $this->db->order_by("createDate", "desc");
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getHomeMostview(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $this->db->limit(4);
        $this->db->order_by("viewNumber", "desc");
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getRandom(){
        $this->db->where('ishow', 1);
        $this->db->limit(5);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getAllBlogs(){
        $this->db->where('ishow', 1);
        $this->db->where('category !=', 0);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getFaBlogs(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $this->db->limit(8);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getCategory($start, $end){
        $this->db->where('ishow', 1);
        $this->db->where("(category>=$start AND category<=$end)");
//        $this->db->where('category <=', $end);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getsanpham($catalog){
        $this->db->where('ishow', 1);
        $this->db->where('category', $catalog);
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getAllLinux(){
        $this->db->where('ishow', 1);
        $this->db->where('category3', 1);
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getAllMysql(){
        $this->db->where('ishow', 1);
        $this->db->where('category4', 1);
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function getBlogDetail($productID){
        $this->db->where('ID',$productID);
        $this->db->where('ishow', 1);
        $query = $this->db->get('blogs');

        return $query->result_array();
    }

    public function getBlogTitle($productID){
        $this->db->select('longName');
        $this->db->where('ID',$productID);
        $query = $this->db->get('blogs');

        return $query->row_array();
    }

    //Maybe like
    public function getMaybeLike(){
        $this->db->where('ishow', 1);
        $this->db->order_by('ID', 'RANDOM');
        $this->db->limit(6);
        $query = $this->db->get('blogs');
        return $query->result_array();
    }

    public function getSameCatelog($catelog){
        $this->db->where('ishow', 1);
        $this->db->where('category', $catelog);
        $this->db->limit(4);
        $query = $this->db->get('blogs');
        return $query->result_array();
    }

    public function getIntroduceDetail(){
//        $this->db->select('longName,longDetail');
        $query = $this->db->get('introduce');

        return $query->result_array();
    }

    public function getFavoriteProduct(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $this->db->limit(12);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getBestbuyProduct(){
        $this->db->where('ishow', 1);
        $this->db->where('ishome', 1);
        $this->db->limit(9);
        $this->db->order_by("ID", "DESC");
        $query = $this->db->get("product");
        return $query->result_array();
    }

    public function getNews(){
        $this->db->where('ishow', 1);
        $this->db->limit(5);
        $this->db->order_by('ID', 'RANDOM');
        $query = $this->db->get("blogs");
        return $query->result_array();
    }

    public function get3News(){
        $this->db->where('ishow', 1);
        $this->db->limit(3);
        $this->db->order_by('ID', 'DESC');
        $query = $this->db->get("blogs");
        return $query->result_array();
    }
}