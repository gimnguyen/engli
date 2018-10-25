<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Sửa bài viết</h3>
    </div>
    <div class="col-md-12">
        <?php
        foreach ($productDetail as $key => $value){
            $productID = isset($value['ID'])?$value['ID']:-1;
            $playlistname = isset($value['playlistname'])?$value['playlistname']:"";
            $rating = isset($value['rating'])?$value['rating']:"";
            $totalword = isset($value['totalword'])?$value['totalword']:"";

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/saveUpdatePlaylist/'.$productID.'">
                        <div class="form-group">
                            <label for="inputEmail3">Tên</label>
                            <input type="text" name="vplaylistname" class="form-control" placeholder="Tên ngắn của bài viết (25 ký tự)" value="'.$playlistname.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Tổng số từ</label>
                            <input type="text" name="vtotalword" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$totalword.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Rating</label>
                            <textarea name="vrating" class="form-control"  rows="2" placeholder="Mô tả ngắn của bài viết (50 ký tự)">'.$rating.'</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </form>';
            echo $proCode;
        }
        ?>

    </div>
</div>
<!-- End body -->