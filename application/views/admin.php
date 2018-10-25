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
          <div class="col-md-10"><h3 class="title">Sản phẩm</h3></div>
           <div class="col-md-2"><a class="btn btn-danger" href="<?php echo base_url()?>YiZSzkTGaa/insertproduct" role="button">Thêm mới</a></div>
      </div>
              <div class="col-md-12">
                <div class="panel panel-default">
                  <!-- Table -->
                  <table class="table">
                    <tr class="table-title">
                      <th>stt</th>
                      <th>Tên sản phẩm</th>
                      <th>Trạng thái</th>
                      <th>Sửa bài</th>
                      <th>Xóa</th>
                    </tr>
                      <?php
                        $i = 1;
                        foreach ($products as $key => $value){

                            $iShow = isset($value['ishow'])?$value['ishow']:"";

                            if ($iShow == 1){
                                $msgCode = 'Đang hiện';
                            }else{
                                $msgCode = 'Ẩn';
                            }

                            $rowCode = '<tr class="row-detail">
                              <td>'.$i.'</td>
                              <td>'.$value['shotName'].'</td>
                              <td>'.$msgCode.'</td>
                              <td><a href="'.base_url().'YiZSzkTGaa/editProduct/'.$value['ID'].'">Sửa</a></td>
                              <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$i.'">Xóa</button></td>
                              </tr>
                              <div class="modal fade" tabindex="-1" role="dialog" id="'.$i.'">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Bạn muốn xóa bài này không?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                            <a href="'.base_url().'YiZSzkTGaa/deleteProduct/'.$value['ID'].'" type="button" class="btn btn-danger">Xóa</a>
                                        </div>
                                    </div>
                                </div>
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

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Bạn muốn xóa bài này không?</h4>
                <p>Xóa vĩnh viễn bài này và sẽ không thể lấy lại được!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <a href="<?php echo base_url()?>/deleteProduct/" type="button" class="btn btn-danger">Xóa</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
