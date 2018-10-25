
<div class="col-sm-8 col-md-9 main-cont">
    <!-- San pham -->
    <div class="row san-pham">
        <div class="row tab tab-icon">
            nổi bật
        </div>

        <!-- San Pham -->
        <?php
        foreach ($proList as $key => $value) {
            $slugTitle = create_slug($value['longName']);
            $format_orPrice = number_format($value['orPrice']);
            $format_salePrice = number_format($value['salePrice']);

            $productCode = '<div class="col-xs-12 col-sm-6 col-md-4 col-rev">
             <div class="thumbnail">
                <a href="san-pham/bai-viet/' . $value['ID'] . '-'.$slugTitle.'"><img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '"></a>
                <div>
                   <h5 class="title"><a href="san-pham/bai-viet/' . $value['ID'] .'-'.$slugTitle. '"> ' . $value['shotName'] . '</a></h5>
                   <h4 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ <a href="'.base_url().'san-pham/dat-hang/' . $value['ID'] . '" class="btn c-btn buy-btn"><small>Đặt mua</small></a></h4>
                </div>
             </div>
          </div>';
            echo $productCode;
        }
        ?>

        <!-- btn -->
        <div class="col-xs-12 extra">
            <a href="<?php echo base_url() ?>index/tat-ca" class="btn btn-default c-btn">Xem thêm <i class="fas fa-chevron-right fa-xs"></i></a>
        </div>
    </div>

    <!-- catalog -->
    <div class="row catalog">
        <div class="col-xs-12 col-sm-6 thumbnail">
            <a href="#"><img src="<?php echo base_url() ?>public/imgs/catalog1.jpg"></a>
        </div>
        <div class="col-xs-12 col-sm-6 thumbnail">
            <a href="#"><img src="<?php echo base_url() ?>public/imgs/catalog2.jpg"></a>
        </div>
    </div>

    <!-- San pham -->
    <div class="row best-buy">
        <div class="row tab tab-icon">
            mua nhiều
        </div>

        <!-- San Pham -->
        <?php
        foreach ($blogList as $key => $value) {
            $slugTitle = create_slug($value['longName']);
            $productCode = '<div class="col-xs-12 col-sm-6 col-md-4 col-rev">
             <div class="thumbnail">
                <a href="san-pham/bai-viet/' . $value['ID'] . '-'.$slugTitle.'"><img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '"></a>
                <div>
                   <h5 class="title"><a href="san-pham/bai-viet/' . $value['ID'] .'-'.$slugTitle. '"> ' . $value['shotName'] . '</a></h5>
                   <h4 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ <a href="'.base_url().'san-pham/dat-hang/' . $value['ID'] . '" class="btn c-btn buy-btn"><small>Đặt mua</small></a></h4>
                </div>
             </div>
          </div>';
            echo $productCode;
        }
        ?>
        <!-- btn -->
        <div class="col-xs-12 extra">
            <a href="<?php echo base_url() ?>index/tat-ca" class="btn btn-default c-btn">Xem thêm <i class="fas fa-chevron-right fa-xs"></i></a>
        </div>
    </div>

    <!-- promiss -->
    <div class="row promiss">
        <div class="row tab tab-icon">
            Cam kết
        </div>
        <div class="col-sm-6">
            <img src="<?php echo base_url() ?>public/imgs/free-consultation.png">
            <h1>Chúng tôi cam kết</h1>
            <p>Chất lượng dịch vụ luôn là tiêu trí hàng đầu của chúng tôi. Thành công của bạn cũng là thành công của chúng tôi.</p>
            <h5>Chúng tôi hiểu chất lượng & uy tín quan trọng như thế nào!</h5>
        </div>
        <div class="col-sm-6 thumbnail no-padding">
            <img src="<?php echo base_url() ?>public/imgs/cam-ket.png">
        </div>
    </div>


    <!-- Tin tuc -->
    <div class="row news">
        <div class="row tab tab-icon">
            Tin tức mới
        </div>

        <?php
        foreach ($n3blog as $key => $value) {
            $slugTitle = create_slug($value['longName']);
            $blogCode = '<div class="col-sm-6 col-md-4 col-rev">
                    <div class="thumbnail">
                    <a href="bai-viet/bai-viet/' . $value['ID'] . '-'.$slugTitle.'">
                      <img src="' . $value['imgThumbnail'] . '" alt="' . $value['longName'] . '">
                    </a>
                    <div class="caption">
                      <a href="bai-viet/bai-viet/' . $value['ID'] .'-'.$slugTitle. '">
                        <h3>' . $value['shotName'] . '</h3>
                      </a>
                       <p>' . $value['shotDetail'] . ' […]</p>
                    </div>
                   </div>
                 </div>';
            echo $blogCode;
        }
        ?>

        <!-- btn -->
        <div class="col-xs-12 extra">
            <a href="<?php echo base_url() ?>bai-viet/tat-ca" class="btn btn-default c-btn">Xem thêm <i class="fas fa-chevron-right fa-xs"></i></a>
        </div>
    </div>

    <!-- about -->
    <div class="row icons">
        <div class="row tab tab-icon">
            về chúng tôi
        </div>
        <div class="col-sm-6 col-md-3 col-rev col-xs-6 thumbnail">
            <img src="<?php echo base_url() ?>public/imgs/chi-phi.png">
            <div class="caption c-icons">
                <h4>Tiết kiệm chi phí</h4>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-rev col-xs-6 thumbnail">
            <img src="<?php echo base_url() ?>public/imgs/dic-vu.png">
            <div class="caption c-icons">
                <h4>Thiết kế chuyên nghiệp</h4>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-rev col-xs-6 thumbnail">
            <img src="<?php echo base_url() ?>public/imgs/in-mau.png">
            <div class="caption c-icons">
                <h4>Chất liệu đa dạng</h4>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-rev col-xs-6 thumbnail">
            <img src="<?php echo base_url() ?>public/imgs/giao-hang.png">
            <div class="caption c-icons">
                <h4>Giao hàng tận nơi</h4>
            </div>
        </div>
        <!-- btn -->
        <div class="col-xs-12 extra btn-ts">
            <button type="button" class="btn btn-default c-btn"> Xem tất cả sản phẩm <i class="fas fa-chevron-right fa-xs"></i></button>
        </div>
    </div>

</div>

</div>

<!-- maps -->
<div class="container">
    <div class="row maps">
        <div class="container">
            <div class="row tab">
                chỉ đường
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.8803845501407!2d106.0790648506913!3d21.196910185838348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31350c3c3f321b7b%3A0xbc555528e2c46208!2zQ-G7lSBN4buFLCBC4bqvYyBOaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1523763692315" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
