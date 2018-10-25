<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Thêm câu hỏi Part 5</h3>
    </div>
    <div class="col-md-12">
        <?php
            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/insertPart5Quest">
                        <div class="form-group">
                            <label for="inputPassword3">Chọn hiển thị</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1" checked="checked"> Hiển thị bài viết</label>
                                <label><input type="radio" name="vIshow" value="0"> Ẩn bài viết</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3">Question</label>
                            <textarea name="vQuest" class="form-control" rows="2" cols="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3">Answer A:</label><input type="radio" name="vTrueAns" value="A">
                            <input type="text" name="vAnsa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer B:</label><input type="radio" name="vTrueAns" value="B">
                            <input type="text" name="vAnsb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer C:</label><input type="radio" name="vTrueAns" value="C">
                            <input type="text" name="vAnsc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer D:</label><input type="radio" name="vTrueAns" value="D">
                            <input type="text" name="vAnsd" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Explaination</label>
                            <textarea name="vExplain" id="editor1" rows="15" cols="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                        
                    </form>';
            echo $proCode;
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