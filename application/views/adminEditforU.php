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
            $qtitle = isset($value['qtitle'])?$value['qtitle']:"";
            $username = isset($value['username'])?$value['username']:"";
            $questionde = isset($value['questionde'])?$value['questionde']:"";
            $iShow = isset($value['ishow'])?$value['ishow']:"";

            if ($iShow == 1){
                $ishowCode = 'checked="checked"';
                $ihindenCode = '';
            }else{
                $ishowCode = '';
                $ihindenCode = 'checked="checked"';
            }

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/saveUpdateforU/'.$productID.'">
                        <div class="form-group">
                            <label for="inputEmail3">Title</label>
                            <input type="text" name="vqtitle" class="form-control" placeholder="Tên ngắn của bài viết (25 ký tự)" value="'.$qtitle.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">User name</label>
                            <input type="text" name="vusername" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$username.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Chọn hiển thị</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1"'.$ishowCode.'> Hiển thị bài viết</label>
                                <label><input type="radio" name="vIshow" value="0"'.$ihindenCode.'> Ẩn bài viết</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question</label>
                            <textarea name="vquestionde" id="editor1" rows="15" cols="10">'.$questionde.'</textarea>
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

<script>
    window.onload = function() {
        var editorElement = CKEDITOR.document.getById( 'editor1' );
        var editor = CKEDITOR.replace( 'editor1' ,{
            filebrowserBrowseUrl: '/public/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/public/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        })
        CKFinder.setupCKEditor( editor )
    }
</script>