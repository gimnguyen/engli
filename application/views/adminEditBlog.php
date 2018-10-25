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
            $shotName = isset($value['shotName'])?$value['shotName']:"";
            $shotDetail = isset($value['shotDetail'])?$value['shotDetail']:"";
            $longName = isset($value['longName'])?$value['longName']:"";
            $longDetail = isset($value['longDetail'])?$value['longDetail']:"";
            $iShow = isset($value['ishow'])?$value['ishow']:"";

            if ($iShow == 1){
                $ishowCode = 'checked="checked"';
                $ihindenCode = '';
            }else{
                $ishowCode = '';
                $ihindenCode = 'checked="checked"';
            }

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/saveUpdateBlog/'.$productID.'">
                        <div class="form-group">
                            <label for="inputEmail3">Tên ngắn</label>
                            <input type="text" name="vShotName" class="form-control" placeholder="Tên ngắn của bài viết (25 ký tự)" value="'.$shotName.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Tên dài</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$longName.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Mô tả ngắn</label>
                            <textarea name="vShotDetail" class="form-control"  rows="2" placeholder="Mô tả ngắn của bài viết (50 ký tự)">'.$shotDetail.'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Chọn hiển thị</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1"'.$ishowCode.'> Hiển thị bài viết</label>
                                <label><input type="radio" name="vIshow" value="0"'.$ihindenCode.'> Ẩn bài viết</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Nội dung</label>
                            <textarea name="vLongDetail" id="editor1" rows="15" cols="10">'.$longDetail.'</textarea>
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