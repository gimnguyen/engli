<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Thêm sản phẩm mới</h3>
    </div>
    <div class="col-md-12">
        <form action="<?php echo base_url()?>YiZSzkTGaa/insertNewBlog" method="post" id="insert-new" name="vInsertProduct">
            <div class="form-group">
                <label for="inputEmail3">Tên ngắn</label>
                <input type="text" name="vShortname" class="form-control" id="inputEmail3" placeholder="Tên ngắn của bài viết (25 ký tự)">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Tên dài</label>
                <input type="text" name="vLongname" class="form-control" id="inputPassword3" placeholder="Tên đầy đủ của bài viết">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Mô tả ngắn</label>
                <textarea name="vShortdetail" class="form-control" id="inputPassword3" rows="2" placeholder="Mô tả ngắn của bài viết (50 ký tự)"></textarea>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Chọn hiển thị</label>
                <div class="radio">
                    <label><input type="radio" name="vIshow" value="1" checked="checked">Hiển thị bài viết</label>
                    <label><input type="radio" name="vIshow" value="0">Ẩn bài viết</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Ảnh đại diện</label>
                <input type="file" id="exampleInputFile" accept="image/*">
                <input type="text" name="vImgThumbnail" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Nội dung</label>
                <textarea name="vLongdetail" id="editor1" rows="15" placeholder="Nội dung bài viết"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="vInsert" id="save" class="btn btn-success">Lưu</button>
            </div>
        </form>
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