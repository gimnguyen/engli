<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Sửa bài viết</h3>
    </div>
    <div class="col-md-12">
        <?php
        foreach ($question as $key => $value){
            $ID = isset($value['ID'])?$value['ID']:-1;
            $questpar1 = isset($value['questpar1'])?$value['questpar1']:"";
            $questpar2 = isset($value['questpar2'])?$value['questpar2']:"";
            $quest1img = $value['quest1img'];
            $quest2img = $value['quest1img'];

            $quest1 = $value['quest1'];
            $quest2 = $value['quest2'];
            $quest3 = $value['quest3'];
            $quest4 = $value['quest4'];
            $quest5 = $value['quest5'];

            $trueans1 = $value['trueans1'];
            $trueans2 = $value['trueans2'];
            $trueans3 = $value['trueans3'];
            $trueans4 = $value['trueans4'];
            $trueans5 = $value['trueans5'];

            $iShow = isset($value['ishow'])?$value['ishow']:"";

            if ($iShow == 1){
                $ishowCode = 'checked="checked"';
                $ihindenCode = '';
            }else{
                $ishowCode = '';
                $ihindenCode = 'checked="checked"';
            }

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/saveUpdateBlog/'.$ID.'">
                        <div class="form-group">
                            <label for="inputPassword3">Chọn hiển thị</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1"'.$ishowCode.'> Hiển thị bài viết</label>
                                <label><input type="radio" name="vIshow" value="0"'.$ihindenCode.'> Ẩn bài viết</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3">Paragrap 1</label>
                            <textarea name="vLongDetail" id="editor1" rows="15" cols="10">'.$questpar1.'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Paragrap 1 image</label>
                            <input type="file" id="exampleInputFile" name="vUpImgThumbnail" accept="image/*"" value="'.$quest1img.'">
                            <input type="text" name="vImgThumbnail" class="form-control" readonly value="'.$quest1img.'">
                            <div class="admin-thumbnail">
                                <img src="'.$quest1img.'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Paragrap 2</label>
                            <textarea name="vLongDetail" id="editor2" rows="15" cols="10">'.$questpar2.'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Paragrap 2 image</label>
                            <input type="file" id="exampleInputFile" name="vUpImgThumbnail2" accept="image/*"" value="'.$quest2img.'">
                            <input type="text" name="vImgThumbnail2" class="form-control" readonly value="'.$quest2img.'">
                            <div class="admin-thumbnail">
                                <img src="'.$quest2img.'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Nội dung</label>
                            <textarea name="vLongDetail" id="editor1" rows="15" cols="10">'.$longDetail.'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question 1:</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$quest1.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question 2:</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$quest2.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question 3:</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$quest3.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question 4:</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$quest4.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Question 5:</label>
                            <input type="text" name="vLongName" class="form-control"  placeholder="Tên đầy đủ của bài viết" value="'.$quest5.'">
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