<div class="container main-content">
    <div>
        <h3 class="title">Danh sách từ</h3>
    </div>
    <div class="col-md-12">
        <form method="post" enctype= "multipart/form-data" action="<?php echo base_url()?>YiZSzkTGaa/searchingCreatePlaylist">
            <div class="form-group">
                <label for="inputPassword3">Playlist ID</label>
                <input name="vplayID" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Nội dung</label>
                <textarea name="vLongDetail" class="form-control" rows="22"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu</button>
            </div>
        </form>
    </div>
</div>
<!-- End body -->
