<?php
class YiZSzkTGaa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('image_lib');
    }

    public function index(){
        redirect(base_url().'YiZSzkTGaa/getBlog');
    }

    function replaceImage($longDetail){

        $firstReplace = str_replace('<p><img','<p class="thumbnail"><img',$longDetail);
        $styleReplace = str_replace('style="height', 'stylex="heightx', $firstReplace);
        return $styleReplace;
    }

    function uploadImage($uImgThumbnail){
        echo 'vao upload';

        $config['upload_path'] = './public/imgs/products';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($uImgThumbnail)){
            $check = $this->upload->data();
            $imgThumbnail = base_url().'public/imgs/products/'.$check['file_name'];

            $err = $this->upload->display_errors();
            echo 'Lỗi tải hình lên: '.$err;
        }else{
            $err = $this->upload->display_errors();
            $imgThumbnail = '';
            echo 'Lỗi tải hình lên: '.$err;
        }
        return $imgThumbnail;

    }

    function resizeImage($uImgThumbnail){
        echo 'vao upload';

        $config['upload_path'] = './public/imgs/products';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['maintain_ratio'] = TRUE;
        $this->load->library("upload", $config);


        if ( $this->upload->do_upload($uImgThumbnail))
        {
            echo "<br>error: Loi up hinh<br>";
        }
        else
        {
            $config['image_library'] = 'gd2';
            $config['source_image'] = '/path/to/image/mypic.jpg';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 75;
            $config['height']       = 50;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
        }
    }

// Playlist

    public function getPlaylist()
    {
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllPlaylistAdmin();
        $this->load->view('admintopfull');
        $this->load->view('adminPlaylist', $data);
        $this->load->view('adminBot');
    }

    public function editPlaylist($productID){
        $this->load->model('Laydb');
        $data['productDetail'] = $this->Laydb->getPlaylistDetail($productID);

        $this->load->view('admintopfull');
        $this->load->view('adminEditPlaylist', $data);
        $this->load->view('adminBot');
    }

    public function saveUpdatePlaylist($productID){

        $playlistname = $this->input->post('vplaylistname');
        $totalword = $this->input->post('vtotalword');
        $rating = $this->input->post('vrating');

        $this->load->model('Laydb');
        $this->Laydb->updatePlaylist($playlistname, $totalword, $rating, $productID);

        redirect(base_url().'YiZSzkTGaa/getPlaylist');
    }

    public function addtoPlaylist($playID){
        $this->load->model('Laydb');
        $data['allword'] = $this->Laydb->getAllword();
        $data['addedword'] = $this->Laydb->getAddedWordinPlaylist($playID);
        $data['playlistID'] = $playID;

        $this->load->view('admintopfull');
        $this->load->view('adminAddtoPlaylist', $data);
        $this->load->view('adminBot');
    }

    public function addwordtoPlaylist($playlistID){
        $wordlist = $this->input->post('wordlist');

        $this->load->model('Laydb');
        $this->Laydb->deleteAllAddedwordinPlay($playlistID);

        foreach($wordlist as $key => $value){
            $this->Laydb->insertWordtoPlaylist($value, $playlistID);
        }

        redirect(base_url().'YiZSzkTGaa/getPlaylist');
    }

//    -------------------------------


// manage for U
public function getforu()
{
    $this->load->model('Laydb');
    $data['products'] = $this->Laydb->getAllforUAdmin();
    $this->load->view('admintopfull');
    $this->load->view('adminforU', $data);
    $this->load->view('adminBot');
}

public function editforU($ID){
    $this->load->model('Laydb');
    $data['productDetail'] = $this->Laydb->getforUDetail($ID);

    $this->load->view('admintopfull');
    $this->load->view('adminEditforU', $data);
    $this->load->view('adminBot');
}

public function saveUpdateforU($productID){

    $vqtitle = $this->input->post('vqtitle');
    $vusername = $this->input->post('vusername');
    $vquestionde = $this->input->post('vquestionde');
    $ishow = $this->input->post('vIshow');

    $this->load->model('Laydb');
    $this->Laydb->updateforU($productID, $vqtitle, $vusername, $vquestionde, $ishow);

    redirect(base_url().'YiZSzkTGaa/getforU');
}

// Create playlist -----------------
    public function createPlaylist(){

        $this->load->view('adminTop');
        $this->load->view('admincreatePlay');
        $this->load->view('adminBot');
    }

    public function searchingCreatePlaylist(){

        $playID = $this->input->post('vplayID');
        $playID = trim($playID);
        $vquestionde = $this->input->post('vLongDetail');
        $vquestionde = trim($vquestionde);

        $wordarr = preg_split( '/$\R?^/m', $vquestionde);
        
        // print_r($wordarr);

        $this->load->model('Laydb');
        foreach($wordarr as $key => $value){
            $value = trim($value);

            echo '<br>'.$value.'<br>';
            $wid = $this->Laydb->searchWordID($value);
            print_r($wid);

           if(sizeof($wid) == 1){
                foreach($wid as $key => $value){
                   $this->Laydb->insertWordtoPlaylist($value['ID'], $playID);
                }
           }
        }
    }

// End create ----------------------

    public function part_1(){
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllPart1();
        $this->load->view('adminTop');
        $this->load->view('allPart1', $data);
        $this->load->view('adminBot');
    }

    public function edit_part_1($qesID){
        $this->load->model('Laydb');
        $data['gquestion'] = $this->Laydb->getPart1qestion($qesID);

        $this->load->view('adminTop');
        $this->load->view('editPart1', $data);
        $this->load->view('adminBot');
    }

    public function part_5(){
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllPart5();
        $this->load->view('adminTop');
        $this->load->view('allPart5', $data);
        $this->load->view('adminBot');
    }

    public function edit_part_5($qesID){
        $this->load->model('Laydb');
        $data['gquestion'] = $this->Laydb->getPart5qestion($qesID);

        $this->load->view('adminTop');
        $this->load->view('editPart5', $data);
        $this->load->view('adminBot');
    }

    public function savePart5Quest($qesID){
        $gquest = $this->input->post('vQuest');
        $gvAnsa = $this->input->post('vAnsa');
        $gvAnsb = $this->input->post('vAnsb');
        $gvAnsc = $this->input->post('vAnsc');
        $gvAnsd = $this->input->post('vAnsd');
        $gtrueAns = $this->input->post('vTrueAns');
        $gExplain = $this->input->post('vExplain');
        $ishow = $this->input->post('vIshow');

        $this->load->model('Laydb');
        $updateProductStatus = $this->Laydb->updatePart5qestion($qesID, $gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd, $gtrueAns, $gExplain, $ishow);

        redirect(base_url().'YiZSzkTGaa/part-5');
    }

    public function newPart5Quest(){
        $this->load->view('adminTop');
        $this->load->view('newPart5');
        $this->load->view('adminBot');
    }

    public function insertPart5Quest(){
        $gquest = $this->input->post('vQuest');
        $gvAnsa = $this->input->post('vAnsa');
        $gvAnsb = $this->input->post('vAnsb');
        $gvAnsc = $this->input->post('vAnsc');
        $gvAnsd = $this->input->post('vAnsd');
        $gtrueAns = $this->input->post('vTrueAns');
        $gExplain = $this->input->post('vExplain');
        $ishow = $this->input->post('vIshow');

        $this->load->model('Laydb');
        $updateProductStatus = $this->Laydb->insertPart5qestion($gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd, $gtrueAns, $gExplain, $ishow);

        redirect(base_url().'YiZSzkTGaa/part-5');
    }

    public function deletePart5quest($qesID){

        $this->load->model('Laydb');
        $deleteStatus = $this->Laydb->deletePart5Quest($qesID);
        redirect(base_url().'YiZSzkTGaa/part-5');
    }

    public function part_7(){
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllPart7();
        $this->load->view('adminTop');
        $this->load->view('allPart7', $data);
        $this->load->view('adminBot');
    }

    public function edit_part_7($qesID){
        $this->load->model('Laydb');
        $data['question'] = $this->Laydb->getAllPart7qestion($qesID);
        $this->load->view('adminTop');
        $this->load->view('editPart7', $data);
        $this->load->view('adminBot');
    }

//    -------------------------------

    public function getProduct(){
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllProductsAdmin();
        $this->load->view('adminTop');
        $this->load->view('admin', $data);
        $this->load->view('adminBot');
    }

    public function getBlog(){
        $this->load->model('Laydb');
        $data['products'] = $this->Laydb->getAllBlogsAdmin();
        $this->load->view('adminTop');
        $this->load->view('adminBlogs', $data);
        $this->load->view('adminBot');
    }

    public function insertProduct(){

            $data['shotName'] = '';
            $data['shotDetail'] = '';
            $data['imgThumbnail'] = '';
            $data['longName'] = '';
            $data['longDetail'] = '';
            $data['ishow'] = '';

            $this->load->view('adminTop');
            $this->load->view('adminInsertNew', $data);
            $this->load->view('adminBot');
    }

    public function insertNew(){

        $shotName = $this->input->post('vShotName');
        $shotDetail = $this->input->post('vShotDetail');
//        $imgThumbnail = $this->input->post('vImgThumbnail');
        $longDetail = $this->input->post('vLongDetail');
        $longName = $this->input->post('vLongName');
        $ishow = $this->input->post('vIshow');

        $ishome = $this->input->post('vIshome');
        $orPrice = $this->input->post('vOrprice');
        $salePrice = $this->input->post('vSaleprice');
        $category = $this->input->post('vCategory');

        $newImgThumbnail = $_FILES['vUpImgThumbnail']['name'];

        $reLongDetail = $this->replaceImage($longDetail);

        echo 'hinh anh: '.$newImgThumbnail;

        if ($newImgThumbnail != ''){
            echo 'vao upload hinh';
            $upImage = $this->uploadImage('vUpImgThumbnail');

            if ($upImage != ''){
                $imgThumbnail = $upImage;
            }
        }

        $this->load->model('Laydb');
        $insertState = $this->Laydb->insertProduct($shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
            $ishome, $orPrice, $salePrice, $category);

        if ($insertState == true){
            redirect(base_url().'YiZSzkTGaa');
            echo 'Them san pham thanh cong!';
        }else {
            $data['shotName'] = $shotName;
            $data['shotDetail'] = $shotDetail;
            $data['imgThumbnail'] = $imgThumbnail;
            $data['longName'] = $longName;
            $data['longDetail'] = $longDetail;
            $data['ishow'] = $ishow;

            $this->load->view('adminTop');
            $this->load->view('insertNew', $data);
            $this->load->view('adminBot');
        }
    }

    public function editProduct($productID = -1){
        $this->load->model('Laydb');
        $data['productDetail'] = $this->Laydb->getProductDetail($productID);

        $this->load->view('adminTop');
        $this->load->view('adminEditProduct', $data);
        $this->load->view('adminBot');
    }

    public function saveUpdateProduct($productID = -1){

        $shotName = $this->input->post('vShotName');
        $shotDetail = $this->input->post('vShotDetail');
        $imgThumbnail = $this->input->post('vImgThumbnail');
        $longDetail = $this->input->post('vLongDetail');
        $longName = $this->input->post('vLongName');
        $ishow = $this->input->post('vIshow');

        $ishome = $this->input->post('vIshome');
        $orPrice = $this->input->post('vOrprice');
        $salePrice = $this->input->post('vSaleprice');
        $category = $this->input->post('vCategory');

        $newImgThumbnail = $_FILES['vUpImgThumbnail']['name'];

        $reLongDetail = $this->replaceImage($longDetail);

        echo 'hinh anh: '.$newImgThumbnail;

        if ($newImgThumbnail != ''){
            echo 'vao upload hinh';
            $upImage = $this->uploadImage('vUpImgThumbnail');

            if ($upImage != ''){
                $imgThumbnail = $upImage;
            }
        }

        $this->load->model('Laydb');
        $updateProductStatus = $this->Laydb->updateProduct($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
            $ishome, $orPrice, $salePrice, $category);

        redirect(base_url().'YiZSzkTGaa/getProduct');

//        if ($updateProductStatus){
//            redirect(base_url().'YiZSzkTGaa');
//        }else{
//            echo 'jhhhh: '.$imgThumbnail;
//            echo 'Lỗi update sản phẩm: '.$updateProductStatus;
//        }
    }

    public function deleteProduct($productID = -1){

        $this->load->model('Laydb');
        $deleteStatus = $this->Laydb->deleteProduct($productID);
        redirect(base_url().'YiZSzkTGaa');
    }

    //Blogs
    public function deleteBlog($productID = -1){

        $this->load->model('Laydb');
        $deleteStatus = $this->Laydb->deleteBlog($productID);
        redirect(base_url().'YiZSzkTGaa/getBlog');
    }

    public function editBlog($productID = -1){
        $this->load->model('Laydb');
        $data['productDetail'] = $this->Laydb->getBlogDetail($productID);

        $this->load->view('adminTop');
        $this->load->view('adminEditBlog', $data);
        $this->load->view('adminBot');
    }

    public function saveUpdateBlog($productID = -1){

        $shotName = $this->input->post('vShotName');
        $shotDetail = $this->input->post('vShotDetail');
        $imgThumbnail = $this->input->post('vImgThumbnail');
        $longDetail = $this->input->post('vLongDetail');
        $longName = $this->input->post('vLongName');
        $ishow = $this->input->post('vIshow');

        $newImgThumbnail = $_FILES['vUpImgThumbnail']['name'];

        $reLongDetail = $this->replaceImage($longDetail);

        if ($newImgThumbnail != ''){
            echo 'vao upload hinh';
            $upImage = $this->uploadImage('vUpImgThumbnail');

            if ($upImage != ''){
                $imgThumbnail = $upImage;
            }
        }

        $this->load->model('Laydb');
        $updateProductStatus = $this->Laydb->updateBlog($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow);

        if ($updateProductStatus){
            redirect(base_url().'YiZSzkTGaa/getBlog');
        }else{
            echo 'Lỗi update sản phẩm';
        }
    }

    public function insertBlog(){

        $shotName = "New article";
        $shotDetail = "";
        $ishow = 0;
        $imgThumbnail = "";
        $longName = "";
        $longDetail = "";


        $this->load->model('Laydb');
        $this->Laydb->insertBlog($shotName, $shotDetail, $imgThumbnail,
            $longName, $longDetail, $ishow);

        redirect(base_url()."YiZSzkTGaa/getBlog");
    }

    public function insertNewBlog(){
        $shortname = $this->input->post('vShortname');
        $shotDetail = $this->input->post('vShortdetail');
        $imgThumbnail = $this->input->post('imgThumbnail');
        $longName = $this->input->post('vLongname');
        $longDetail = $this->input->post('vLongdetail');
        $ishow = $this->input->post('vIshow');

        $reLongDetail = $this->replaceImage($longDetail);

        $this->load->model('Laydb');
        $insertState = $this->Laydb->insertBlog($shortname, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow);

        if ($insertState == true){
            redirect(base_url().'YiZSzkTGaa/getBlog');
        }else {
            $data['shotName'] = $shortname;
            $data['shotDetail'] = $shotDetail;
            $data['imgThumbnail'] = $imgThumbnail;
            $data['longName'] = $longName;
            $data['longDetail'] = $longDetail;
            $data['ishow'] = $ishow;

            $this->load->view('adminTop');
            $this->load->view('adminInsertBlog', $data);
            $this->load->view('adminBot');
        }
    }

    //Open dir
    public function openDirectory(){
        $dir = './public/imgs/products';
             if ($dh = opendir($dir)){
                 $imgArray = array();
                 $i = 0;

                 while (($file = readdir($dh)) !== false){
                     $imgArray[$i] = $file;
                     $i++;
                 }
                 closedir($dh);
             }
             $data['listImg'] = $imgArray;

             $this->load->view('adminTop');
             $this->load->view('adminImage', $data);
        $this->load->view('adminBot');
    }

    //Introduce
    public function editIntroduce($productID = -1){
        $this->load->model('Laydb');
        $data['productDetail'] = $this->Laydb->getIntroduceEdit();

        $this->load->view('adminTop');
        $this->load->view('adminIntroduce', $data);
        $this->load->view('adminBot');
    }

    public function saveUpdateIntroduce($productID = -1){

        $shotName = $this->input->post('vShotName');
        $shotDetail = $this->input->post('vShotDetail');
        $imgThumbnail = $this->input->post('vImgThumbnail');
        $longDetail = $this->input->post('vLongDetail');
        $longName = $this->input->post('vLongName');
        $ishow = $this->input->post('vIshow');

        $reLongDetail = $this->replaceImage($longDetail);

        $this->load->model('Laydb');
        $this->Laydb->updateIntroduce($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow);

        redirect(base_url().'YiZSzkTGaa');
    }

    public function order($productId){
        $cusName = $this->input->post('vCusName');
        $mobile = $this->input->post('vMobile');
        $adress = $this->input->post('vAddress');
        $total = $this->input->post('vTotal');


        $this->load->model('Laydb');
        $this->Laydb->saveOrder($cusName, $mobile, $adress, $productId, $total);

        redirect(base_url().'san-pham/thanh-cong');
    }

    public function orderList(){
        $this->load->model('Laydb');
        $data['orderList'] = $this->Laydb->getOrderList();

        $this->load->view('adminTop');
        $this->load->view('orderList', $data);
        $this->load->view('adminBot');
    }

    public function editOrder($orderId){
        $this->load->model('Laydb');
        $data['orderDetail'] = $this->Laydb->getOrderDetail($orderId);

        $this->load->view('adminTop');
        $this->load->view('adminEditOrder', $data);
        $this->load->view('adminBot');
    }

    public function saveUpdateOrder($orderID){
        $cusName = $this->input->post('vCusName');
        $mobile = $this->input->post('vMobile');
        $adress = $this->input->post('vAddress');
        $isshow = $this->input->post('vIshow');
        $note = $this->input->post('vNote');


        $this->load->model('Laydb');
        $this->Laydb->saveUpdateOrder($cusName, $mobile, $adress, $isshow, $note, $orderID);

        redirect(base_url().'YiZSzkTGaa/orderList');
    }
}