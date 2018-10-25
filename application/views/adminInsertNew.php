<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Thêm sản phẩm mới</h3>
    </div>
    <div class="col-md-12">
        <form action="<?php echo base_url()?>YiZSzkTGaa/insertNew" enctype= "multipart/form-data"   method="post" id="insert-new" name="vInsertProduct">
            <div class="form-group">
                <label for="inputEmail3">Tên ngắn</label>
                <input type="text" name="vShotName" class="form-control" id="inputEmail3" placeholder="Tên ngắn của bài viết (25 ký tự)">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Tên dài</label>
                <input type="text" name="vLongName" class="form-control" id="inputPassword3" placeholder="Tên đầy đủ của bài viết">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Mô tả ngắn</label>
                <textarea name="vShotDetail" class="form-control" id="inputPassword3" rows="2" placeholder="Mô tả ngắn của bài viết (50 ký tự)"></textarea>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Chọn hiển thị</label>
                <div class="radio">
                    <label><input type="radio" name="vIshow" value="1" checked="checked">Hiển thị bài viết</label>
                    <label><input type="radio" name="vIshow" value="0">Ẩn bài viết</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Hiện trang chủ</label>
                <div class="radio">
                    <label><input type="radio" name="vIshome" value="1"> Trang chủ</label>
                    <label><input type="radio" name="vIshome" value="0" checked="checked"> Chỉ trang con</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Giá gốc</label>
                <div class="radio">
                    <input type="text" name="vOrprice" class="form-control" placeholder="Giá gốc (chỉ nhập số, không nhập khoảng cách)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Giá đã giảm</label>
                <div class="radio">
                    <input type="text" name="vSaleprice" class="form-control" placeholder="Giá gốc (chỉ nhập số, không nhập khoảng cách)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Danh mục</label>
                <div class="radio">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Nội thất văn phòng
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="101" checked="checked" /> Bàn nhân viên</label>
                                    <label><input type="radio" name="vCategory" value="102" /> Bàn làm việc đôi</label>
                                    <label><input type="radio" name="vCategory" value="103" /> Bàn làm việc góc lượn</label>
                                    <label><input type="radio" name="vCategory" value="104" /> Bàn làm việc giá rẻ</label>
                                    <label><input type="radio" name="vCategory" value="105" /> Bàn máy tính hộc tiền</label>
                                    <label><input type="radio" name="vCategory" value="106" /> Bàn máy tính chân sắt</label>
                                    <label><input type="radio" name="vCategory" value="107" /> Bàn máy tính giá rẻ</label>
                                    <label><input type="radio" name="vCategory" value="108" /> Bàn lãnh đạo cổ điển</label>
                                    <label><input type="radio" name="vCategory" value="109" /> Bàn lãnh đạo hiện đại</label>
                                    <label><input type="radio" name="vCategory" value="110" /> Bàn trưởng phòng</label>
                                    <label><input type="radio" name="vCategory" value="111" /> Bàn & Tủ phụ</label>
                                    <label><input type="radio" name="vCategory" value="112" /> Bàn họp tròn</label>
                                    <label><input type="radio" name="vCategory" value="113" /> Bàn họp chữ nhật</label>
                                    <label><input type="radio" name="vCategory" value="114" /> Bàn họp Oval</label>
                                    <label><input type="radio" name="vCategory" value="100" /> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Ghế văn phòng
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="201"/> Ghế xoay lưới</label>
                                    <label><input type="radio" name="vCategory" value="202"/> Ghế xoay Nỉ</label>
                                    <label><input type="radio" name="vCategory" value="203"/> Ghế xoay Da</label>
                                    <label><input type="radio" name="vCategory" value="204"/> Ghế da giám đốc</label>
                                    <label><input type="radio" name="vCategory" value="205"/> Ghế lưới giám đốc</label>
                                    <label><input type="radio" name="vCategory" value="206"/> Ghế giám đôc chân tĩnh</label>
                                    <label><input type="radio" name="vCategory" value="207"/> Bàn nước sofa văn phòng</label>
                                    <label><input type="radio" name="vCategory" value="208"/> Ghế sofa góc văn phòng</label>
                                    <label><input type="radio" name="vCategory" value="209"/> Sofa văn phòng theo bộ</label>
                                    <label><input type="radio" name="vCategory" value="210"/> Ghế sofa văn phòng đơn</label>
                                    <label><input type="radio" name="vCategory" value="211"/> Ghế họp Lưới</label>
                                    <label><input type="radio" name="vCategory" value="212"/> Ghế họp Da</label>
                                    <label><input type="radio" name="vCategory" value="213"/> Ghế họp Nỉ</label>
                                    <label><input type="radio" name="vCategory" value="200"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Tủ tài liệu
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="301"/> Tủ cao</label>
                                    <label><input type="radio" name="vCategory" value="302"/> Tủ thấp</label>
                                    <label><input type="radio" name="vCategory" value="303"/> Tủ tài liệu giám đốc</label>
                                    <label><input type="radio" name="vCategory" value="304"/> Tủ gỗ hệ tủ ghép</label>
                                    <label><input type="radio" name="vCategory" value="305"/> Kệ máy in</label>
                                    <label><input type="radio" name="vCategory" value="306"/> Kệ sách văn phòng</label>
                                    <label><input type="radio" name="vCategory" value="307"/> Kệ trang trí văn phòng</label>
                                    <label><input type="radio" name="vCategory" value="308"/> Tủ sắt đựng file</label>
                                    <label><input type="radio" name="vCategory" value="309"/> Tủ locker sắt</label>
                                    <label><input type="radio" name="vCategory" value="310"/> Tủ sắt cánh lùa</label>
                                    <label><input type="radio" name="vCategory" value="311"/> Tủ hồ sơ sắt</label>
                                    <label><input type="radio" name="vCategory" value="312"/> Tủ phụ bàn nhân viên</label>
                                    <label><input type="radio" name="vCategory" value="313"/> Tủ phụ bàn giám đốc</label>
                                    <label><input type="radio" name="vCategory" value="314"/> Tủ phụ bàn trưởng phòng</label>
                                    <label><input type="radio" name="vCategory" value="300"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Tiếp tân
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="401"/> Bàn quầy lễ tân công ty</label>
                                    <label><input type="radio" name="vCategory" value="402"/> Bàn quầy giao dịch</label>
                                    <label><input type="radio" name="vCategory" value="403"/> Bàn quầy nhà hàng khách sạn</label>
                                    <label><input type="radio" name="vCategory" value="404"/> Ghế khách đến làm việc</label>
                                    <label><input type="radio" name="vCategory" value="405"/> Sofa khu lễ tân</label>
                                    <label><input type="radio" name="vCategory" value="406"/> Ghế bằng khách chờ khu lễ tân</label>
                                    <label><input type="radio" name="vCategory" value="400"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Gia đình
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="501"/> Giường đơn gia đình</label>
                                    <label><input type="radio" name="vCategory" value="502"/> Bàn ghế trang điểm</label>
                                    <label><input type="radio" name="vCategory" value="503"/> Tab dầu giường</label>
                                    <label><input type="radio" name="vCategory" value="504"/> Giường đôi</label>
                                    <label><input type="radio" name="vCategory" value="505"/> Tủ quần áo đơn</label>
                                    <label><input type="radio" name="vCategory" value="506"/> Tủ quần áo đôi</label>
                                    <label><input type="radio" name="vCategory" value="507"/> Tủ quần áo âm tường</label>
                                    <label><input type="radio" name="vCategory" value="508"/> Tủ giày, Mũ bảo hiểm</label>
                                    <label><input type="radio" name="vCategory" value="509"/> Kệ trang trí</label>
                                    <label><input type="radio" name="vCategory" value="510"/> Giá để báo</label>
                                    <label><input type="radio" name="vCategory" value="511"/> Tủ sách gia đình</label>
                                    <label><input type="radio" name="vCategory" value="512"/> Bộ bàn ghế ăn</label>
                                    <label><input type="radio" name="vCategory" value="513"/> Bộ bàn ăn gỗ tự nhiên</label>
                                    <label><input type="radio" name="vCategory" value="500"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Công trình
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="601"/> Nội thất khu công nghiệp</label>
                                    <label><input type="radio" name="vCategory" value="602"/> Nội thất bệnh viện</label>
                                    <label><input type="radio" name="vCategory" value="603"/> Nhà Hàng, Khách sạn</label>
                                    <label><input type="radio" name="vCategory" value="604"/> Vách Ngăn</label>
                                    <label><input type="radio" name="vCategory" value="605"/> Sàn nâng kỹ thuật</label>
                                    <label><input type="radio" name="vCategory" value="606"/> Ghế sân vận động, nhà thi đấu</label>
                                    <label><input type="radio" name="vCategory" value="600"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Trường học
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="701"/> Bàn ghế học sinh</label>
                                    <label><input type="radio" name="vCategory" value="702"/> Giường Tầng Nội Trú</label>
                                    <label><input type="radio" name="vCategory" value="703"/> Thư viện, phòng chức năng</label>
                                    <label><input type="radio" name="vCategory" value="704"/> Bảng chống lóa</label>
                                    <label><input type="radio" name="vCategory" value="705"/> Bàn ghế giáo viên</label>
                                    <label><input type="radio" name="vCategory" value="706"/> Tủ thư viện di động</label>
                                    <label><input type="radio" name="vCategory" value="700"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Đồ trang trí
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="801"/> Vật phong thủy</label>
                                    <label><input type="radio" name="vCategory" value="802"/> Đồ đồng</label>
                                    <label><input type="radio" name="vCategory" value="800"/> Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Đồ thờ cúng
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <label><input type="radio" name="vCategory" value="901"/> Đồ thờ cúng</label>
                                    <label><input type="radio" name="vCategory" value="902"/> Đồ đồng</label>
                                    <label><input type="radio" name="vCategory" value="900"/> Khác</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3">Ảnh đại diện</label>
                <input type="file" name="vUpImgThumbnail" id="upThumbnail" accept="image/*">
                <input type="text" name="vImgThumbnail" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Nội dung</label>
                <textarea name="vLongDetail" id="editor1" rows="15" placeholder="Nội dung bài viết"></textarea>
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