<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Sửa bài viết</h3>
    </div>
    <div class="col-md-12">
        <?php
        foreach ($orderDetail as $key => $value){
            $orderID = isset($value['ID'])?$value['ID']:-1;
            $cusName = isset($value['cusname'])?$value['cusname']:"";
            $productID = isset($value['productid'])?$value['productid']:"";
            $mobile = isset($value['mobile'])?$value['mobile']:"";
            $adress = isset($value['adress'])?$value['adress']:"";
            $status = isset($value['status'])?$value['status']:"";
            $total = isset($value['total'])?$value['total']:"";
            $note = isset($value['note'])?$value['note']:"";

            if ($status == 1){
                $statusCode = 'checked="checked"';
                $ihindenCode = '';
            }else{
                $statusCode = '';
                $ihindenCode = 'checked="checked"';
            }

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/saveUpdateOrder/'.$orderID.'">
                        <div class="form-group">
                            <label for="inputEmail3">Tên khách hàng</label>
                            <input type="text" name="vCusName" class="form-control" value="'.$cusName.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Điện thoại</label>
                            <input type="text" name="vMobile" class="form-control" value="'.$mobile.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Địa chỉ</label>
                            <input type="text" name="vAddress" class="form-control" value="'.$adress.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Mã sản phẩm</label>
                            <input type="text" name="vLongName" class="form-control" value="'.$productID.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Giá tiền</label>
                            <input type="text" name="vLongName" class="form-control" value="'.$total.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Trạng thái</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1"'.$statusCode.'> Đã xong</label>
                                <label><input type="radio" name="vIshow" value="0"'.$ihindenCode.'> Đang chờ</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Ghi chú</label>
                            <textarea class="form-control" name="vNote" rows="3">'.$note.'</textarea>
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