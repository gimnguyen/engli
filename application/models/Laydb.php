<?php
	class Laydb extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllProducts(){
		    $this->db->where('ishow', 1);
			$query = $this->db->get("product");
			return $query->result_array();
		}

//		----------------------
        public function insertuserqestion($qtitle, $questionde, $username){
            $this->db->set('qtitle', $qtitle);
            $this->db->set('questionde', $questionde);
            $this->db->set('username', $username);
            $this->db->set('ishow', 0);
            $this->db->insert('foru');
        }


        public function getAllPart1(){
            $this->db->group_by('grID');
            $query = $this->db->get("toeicpart1");
            return $query->result_array();
        }

        public function getPart1qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart1");
            return $query->result_array();
        }

        public function getAllPart2(){
            $query = $this->db->get("toeicpart2");
            return $query->result_array();
        }

        public function getAllPart5(){
            $query = $this->db->get("toeicpart5");
            return $query->result_array();
        }

        public function getPart5qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart5");
            return $query->result_array();
        }

        public function updatePart5qestion($qesID, $gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd,$gtrueAns, $gExplain, $ishow){
            $this->db->set('quest', $gquest);
            $this->db->set('ansa', $gvAnsa);
            $this->db->set('ansb', $gvAnsb);
            $this->db->set('ansc', $gvAnsc);
            $this->db->set('ansd', $gvAnsd);
            $this->db->set('trueans', $gtrueAns);
            $this->db->set('explainans', $gExplain);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $qesID);
            $this->db->update('toeicpart5');
        }

        public function insertPart5qestion($gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd,$gtrueAns, $gExplain, $ishow){
            $this->db->set('quest', $gquest);
            $this->db->set('ansa', $gvAnsa);
            $this->db->set('ansb', $gvAnsb);
            $this->db->set('ansc', $gvAnsc);
            $this->db->set('ansd', $gvAnsd);
            $this->db->set('trueans', $gtrueAns);
            $this->db->set('explainans', $gExplain);
            $this->db->set('ishow', $ishow);
            $this->db->insert('toeicpart5');
        }

        public function deletePart5Quest($qesID){
            $this->db->where('ID', $qesID);
            $this->db->delete('toeicpart5');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function getAllPart7(){
            $query = $this->db->get("toeicpart7");
            return $query->result_array();
        }

        public function getPart7qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart7");
            return $query->row_array();
        }

        public function getAllPlaylistAdmin(){
            $query = $this->db->get("playlist");
            return $query->result_array();
        }

		public function getPlaylistDetail($blogID){
			$this->db->where('ID',$blogID);
			$query = $this->db->get('playlist');
			return $query->result_array();
		}

        public function updatePlaylist($playlistname, $totalword, $rating, $productID){
            $this->db->set('playlistname', $playlistname);
            $this->db->set('totalword', $totalword);
            $this->db->set('rating', $rating);
            $this->db->where('ID', $productID);
            $this->db->update('playlist');
        }

        public function getAllword(){
			$query = $this->db->get("vocabulary");
			return $query->result_array();
        }
        
        public function insertWordtoPlaylist($value, $playlistID){
            $this->db->set('wordID', $value);
            $this->db->set('playlistID', $playlistID);

            $this->db->insert('playlistrow');
        }

        function getAddedWordinPlaylist($playID) {
            $this->db->select('wordID');
            $this->db->where ( 'playlistID', $playID);
            $query = $this->db->get ("playlistrow");
            return $query->result_array ();
        }

        function deleteAllAddedwordinPlay($playID) {
            $this->db->where('playlistID', $playID);
            $this->db->delete('playlistrow');
        }

//      ------------------------

// manage for U
        public function getAllforUAdmin(){
            $query = $this->db->get("foru");
            return $query->result_array();
        }

        public function getforUDetail($blogID){
			$this->db->where('ID',$blogID);
			$query = $this->db->get('foru');

			return $query->result_array();
        }
        
        public function updateforU($productID, $vqtitle, $vusername, $vquestionde, $ishow){
            $this->db->set('qtitle', $vqtitle);
            $this->db->set('username', $vusername);
            $this->db->set('questionde', $vquestionde);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $productID);

            $this->db->update('foru');
        }

// ------------------------


// Create playlist

        public function searchWordID($word){
            $this->db->select('ID');
            $this->db->like('word', $word, 'both');
            $query = $this->db->get("vocabulary");
            return $query->result_array();
        }

// end create playlist

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

            $this->db->set('ishow', "1");
            $this->db->insert('toeicpart3');
        }

// end insert part 3

        public function getNumberProducts(){
            $this->db->where('ishow', 1);
            $this->db->limit(8);
            $query = $this->db->get("product");
            return $query->result_array();
        }

        public function getAllProductsAdmin(){
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

		public function updateProduct($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
                                      $ishome, $orPrice, $salePrice, $category){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $reLongDetail);
            $this->db->set('ishow', $ishow);
            $this->db->set('ishome', $ishome);
            $this->db->set('orPrice', $orPrice);
            $this->db->set('salePrice', $salePrice);
            $this->db->set('category', $category);

            $this->db->where('ID', $productID);



            $this->db->update('product');
            echo 'So dong update: '.$this->db->affected_rows();

        }

        public function insertProduct($shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
                                      $ishome, $orPrice, $salePrice, $category){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $reLongDetail);
            $this->db->set('ishow', $ishow);
            $this->db->set('ishome', $ishome);
            $this->db->set('orPrice', $orPrice);
            $this->db->set('salePrice', $salePrice);
            $this->db->set('category', $category);

            $this->db->insert('product');

            if($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteProduct($productID){
            $this->db->where('ID', $productID);
            $this->db->delete('product');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function getAllBlogs(){
            $this->db->where('ishow', 1);
            $this->db->limit(8);
            $this->db->order_by("ID", "DESC");
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function get8Blogs(){
            $this->db->where('ishow', 1);
            $this->db->where('category !=', 0);
            $this->db->limit(8);
            $this->db->order_by("ID", "DESC");
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function getAllBlogsAdmin(){
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

		public function getBlogDetail($blogID){
			$this->db->where('ID',$blogID);
			$query = $this->db->get('blogs');

			return $query->result_array();
		}

		public function getBlogTitle($blogID){
			$this->db->select('longName');
			$this->db->where('ID',$blogID);
			$query = $this->db->get('blogs');

			return $query->row_array();
		}

        public function updateBlog($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $productID);

            $this->db->update('blogs');

            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function insertBlog($shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);

            $this->db->insert('blogs');
        }

        public function deleteBlog($productID){
            $this->db->where('ID', $productID);
            $this->db->delete('blogs');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

		public function getIntroduceDetail(){
			$this->db->select('longName,longDetail');
			$query = $this->db->get('introduce');

			return $query->result_array();
		}

        public function getIntroduceEdit(){
            $this->db->limit(1);
            $query = $this->db->get('introduce');

            return $query->result_array();
        }

        public function updateIntroduce($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $productID);

            $this->db->update('introduce');
        }

		public function getMaybeLike(){
			
			$query = $this->db->get('blogs', 5, rand(1,5));

			return $query->result_array();
		}

        public function get3sanpham($catalog){
            $this->db->where('ishow', 1);
            $this->db->where('ishome', 1);
            $this->db->where('category', $catalog);
            $this->db->limit(3);
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function saveOrder($cusName, $mobile, $adress, $productId, $total){
            $this->db->set('cusname', $cusName);
            $this->db->set('mobile', $mobile);
            $this->db->set('adress', $adress);
            $this->db->set('productid', $productId);
            $this->db->set('total', $total);

            $this->db->insert('order');
        }

        public function saveUpdateOrder($cusName, $mobile, $adress, $isshow, $note, $orderID){
            $this->db->set('cusname', $cusName);
            $this->db->set('mobile', $mobile);
            $this->db->set('adress', $adress);
            $this->db->set('status', $isshow);
            $this->db->set('note', $note);
            $this->db->where('ID', $orderID);

            $this->db->update('order');
        }

        public function getOrderList(){
            $this->db->select('order.*, order.id AS order_id, product.longName, product.salePrice, product.id AS product_id');
            $this->db->from('order');
            $this->db->join('product', 'product.ID = order.productid', 'left outer');
            $this->db->order_by("order.ID", "DESC");

            $query = $this->db->get();
            return $query->result_array();
        }

        public function getOrderDetail($orderId){
            $this->db->select('*');
            $this->db->from('order');
            $this->db->where('ID', $orderId);

            $query = $this->db->get();
            return $query->result_array();
        }
	}
?>