<?php
$sucessCode = '<div class="alert alert-success" role="alert">
        Thêm sản phẩm thành công!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
?>
<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <div class="col-md-10"><h3 class="title">Đơn hàng</h3></div>
        <div class="col-md-2"><a class="btn btn-danger" href="<?php echo base_url()?>YiZSzkTGaa/insertOrder" role="button">Thêm mới</a></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <!-- Table -->
            <table class="table">
                <tr class="table-title">
                    <th>stt</th>
                    <th>Tên khách</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tên sản phẩm</th>
                    <th>trạng thái</th>
                    <th>Sử lý đơn hàng</th>
                </tr>
                <?php

                $i = 1;
                foreach ($orderList as $key => $value){

                    $iShow = isset($value['status'])?$value['status']:"";

                    if ($iShow == 1){
                        $msgCode = 'Đã xong';
                    }else{
                        $msgCode = 'Đang chờ';
                    }

                    $rowCode = '<tr class="row-detail">
                              <td>'.$i.'</td>
                              <td>'.$value['cusname'].'</td>
                              <td>'.$value['mobile'].'</td>
                              <td>'.$value['adress'].'</td>
                              <td>'.$value['longName'].'</td>
                              <td>'.$msgCode.'</td>
                              <td><a href="'.base_url().'YiZSzkTGaa/editOrder/'.$value['order_id'].'">xử lý</a></td>
                              </tr>
                            </div>';
                    echo $rowCode;
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<!-- End body -->