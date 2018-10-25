<div class="col-sm-8 col-md-9 main-cont">
    <!-- San pham -->
    <div class="row san-pham">
        <div class="row tab tab-icon">
            <?php echo $longName?>
        </div>

<!--<div class="product">-->
<!--    <div class="container">-->
<!--        <div class="row tab">-->
<!--            --><?php //echo $longName?>
<!--        </div>-->
<!--        <div class="row pro-item">-->
            <?php
            foreach ($allProducts as $key => $value) {
                $slugTitle=create_slug($value['longName']);
                $format_orPrice = number_format($value['orPrice']);
                $format_salePrice = number_format($value['salePrice']);

                $productCode ='<div class="col-xs-12 col-sm-6 col-md-4 col-rev">
                   <div class="thumbnail">
                      <a href="'.base_url().'san-pham/bai-viet/'.$value['ID'].'-'.$slugTitle.'"><img src="'.$value['imgThumbnail'].'" alt="'.$value['longName'].'"></a>
                      <div>
                         <h5 class="title"><a href="'.base_url().'san-pham/bai-viet/'.$value['ID'].'-'.$slugTitle.'"> '.$value['shotName'].'</a></h5>
                         <h4 class="price"><del>'.$format_orPrice.'</del>'.$format_salePrice.' đ <a href="#" class="btn c-btn buy-btn"><small>Đặt mua</small></a></h4>
                      </div>
                   </div>
                </div>';
                echo $productCode;
            }
            ?>
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

</div>
</div>



