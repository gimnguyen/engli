<div class="col-sm-8 col-md-9 main-cont">
    <!-- San pham -->
    <div class="row content-detail">
        <div class="row tab tab-icon">
            chi tiết
        </div>

        <?php
        foreach ($productDetail as $key => $value) {
            $format_orPrice = number_format($value['orPrice']);
            $format_salePrice = number_format($value['salePrice']);

            $topcode = '<div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <h2 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ</h2>
                <a class="btn lar-buy-btn btn-lg btn-block" href="'.base_url().'san-pham/dat-hang/' . $value['ID'] . '">Đặt mua</a>
                <a class="btn lar-hotline btn-lg btn-block" href="tel:0976368468">Hotline: 0976.368.468</a>

                <address class="extra-cond">
                    <h4>Tham khảo chi tiết:</h4>
                        <ul class="list-unstyled">
                            <li><a href="'.base_url().'gioi-thieu"><img src="'.base_url().'public/imgs/check-black.png"><small>Hướng dẫn mua hàng tại Nội thất Bắc Ninh</small></a></li>
                            <li><a href="'.base_url().'gioi-thieu"><img src="'.base_url().'public/imgs/check-black.png"<small>Các hình thức thanh toán</small></a></li>
                            <li><a href="'.base_url().'gioi-thieu"><img src="'.base_url().'public/imgs/check-black.png"><small>Chính sách vận chuyển và giao hàng</small></a></li>
                            <li><a href="'.base_url().'gioi-thieu"><img src="'.base_url().'public/imgs/check-black.png"><small>Chính sách đổi trả hàng và bảo hành sản phẩm</small></a></li>
                        </ul>
                </address>
            </div>
        </div>';
            echo $topcode;

            echo '<h1 class="pro-title"><small>Sản phẩm: </small>' . $value['longName'] . '</h1>';
            echo '<hr>';
            echo $value['longDetail'];
        }
        ?>
        <h4 class="contact-btn">Quý khách đặt hàng xin vui lòng liên hệ:</h4>
        <p>Điện thoai: <strong><span class="phone-number"><a href="tel:0976368468">0976.368.468</a> - <a href="tel:0912047696">0912.047.696</a><span> (Mr. Khiêm)</strong></p>
        <p>Địa chỉ: <strong>Số 209, Tổ 2, Khu Công Binh, đường Cô Mễ, P. Vũ Ninh, TP. Bắc Ninh</strong></p>
        <h5 class="end-blog"><var>Hân hạnh phục vụ quý khách 24/7</var></h5>
    </div>

    <!-- Maybe you like -->
    <div class="col-smx-3">
        <div class="row tab tab-icon">
            Có thể bạn quan tâm
        </div>
        <?php
        if (isset($maybeLike)) {
            foreach ($maybeLike as $key => $value) {
                $slugTitle = create_slug($value['longName']);
                $format_orPrice = number_format($value['orPrice']);
                $format_salePrice = number_format($value['salePrice']);

                $codeHtml = '<div class="col-xs-12 col-sm-6 col-md-4 col-rev">
                     <div class="thumbnail">
                        <a href="' . base_url() . 'san-pham/bai-viet/' . $value['ID'] .'-'.$slugTitle. '"><img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '"></a>
                        <div>
                           <h5 class="title"><a href="' . base_url() . 'san-pham/bai-viet/' . $value['ID'].'-'.$slugTitle. '" title="'.$value['longName'].'">'.$value['shotName'].'</a></h5>
                           <h4 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ <a href="'.base_url().'san-pham/dat-hang" class="btn c-btn buy-btn"><small>Đặt mua</small></a></h4>
                        </div>
                     </div></div>';
                echo $codeHtml;
            }
        }
        ?>
    </div>
</div>
</div>