<div class="col-sm-8 col-md-9 main-cont">
    <!-- San pham -->
    <div class="row content-detail">
        <div class="row tab tab-icon">
            Đặt hàng
        </div>

        <?php
        foreach ($productDetail as $key => $value) {
            $format_salePrice = number_format($value['salePrice']);

            $topcode = '<div class="row">
            <div class="col-sm-6 col-xs-12">
                <form action="'.base_url().'YiZSzkTGaa/order/'.$value['ID'].'" method="post" name="vOrder">
                  <h3>Thông tin đặt hàng</h3>
                  <hr>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên khách hàng</label>
                    <input type="text" class="form-control" name="vCusName" placeholder="Họ Tên">
                    <input type="text" class="form-control nodisplay" name="vTotal" value="'.$value['salePrice'].'">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" class="form-control" name="vMobile" placeholder="Vui lòng nhập số điện thoại">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ nhận hàng</label>
                    <textarea type="text" class="form-control" name="vAddress" rows="4" placeholder="Vui lòng nhập địa chỉ của bạn"></textarea>
                  </div>

                  <button type="submit" class="btn c-btn buy-btn">Lưu thông tin</button>
                </form>
                
            </div>
            <div class="col-sm-5 col-xs-12">
              <h3>Thông tin đơn hàng</h3>
              <hr>
              <div class="order-thumbnail">
                <img src="'.$value['imgThumbnail'].'" alt="'.$value['longName'].'">
              </div>
              <h5>MSP:'.$value['ID'].' - '.$value['longName'].'</h5>
              <table class="table">
                <tr>
                    <td>Giá tiền</td>
                    <td>'.$format_salePrice.'</td> 
                </tr>
                <tr>
                    <td>Phí giao hàng</td>
                    <td>MIỄN PHÍ</td> 
                </tr>
                <tr>
                    <th>Tổng cộng</th>
                    <th class="yellow-txt">'.$format_salePrice.'</th> 
                </tr>
              </table>
            </div>
        </div>';

            echo $topcode;
        }
        ?>
        <hr>
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
<!--        --><?php
//        if (isset($maybeLike)) {
//            foreach ($maybeLike as $key => $value) {
//                $slugTitle = create_slug($value['longName']);
//                $format_orPrice = number_format($value['orPrice']);
//                $format_salePrice = number_format($value['salePrice']);
//
//                $codeHtml = '<div class="col-xs-12 col-sm-6 col-md-4 col-rev">
//                     <div class="thumbnail">
//                        <a href="' . base_url() . 'san-pham/bai-viet/' . $value['ID'] .'-'.$slugTitle. '"><img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '"></a>
//                        <div>
//                           <h5 class="title"><a href="' . base_url() . 'san-pham/bai-viet/' . $value['ID'].'-'.$slugTitle. '" title="'.$value['longName'].'">'.$value['shotName'].'</a></h5>
//                           <h4 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ <a href="#" class="btn c-btn buy-btn"><small>Đặt mua</small></a></h4>
//                        </div>
//                     </div></div>';
//                echo $codeHtml;
//            }
//        }
//        ?>
    </div>
</div>
</div>