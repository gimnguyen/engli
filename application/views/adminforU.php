<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <div class="col-md-10"><h3 class="title">4U question</h3></div>
        <div class="col-md-2"><a class="btn btn-danger" href="<?php echo base_url()?>YiZSzkTGaa/insertPlaylist" role="button">Thêm mới</a></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <!-- Table -->
            <table class="table">
                <tr class="table-title">
                    <th>stt</th>
                    <th>Title</th>
                    <th>Question</th>
                    <th>Ẩn / Hiện</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                $i = 1;
                foreach ($products as $key => $value){
                    $ishow = 'Ẩn';
                    if($value['ishow'] == 1){
                        $ishow = 'Hiện';
                    }

                    $rowCode = '<tr class="row-detail">
                              <td>'.$i.'</td>
                              <td style="width: 20%">'.$value['qtitle'].'</td>
                              <td style="width: 40%">'.$value['questionde'].'</td>
                              <td>'.$ishow.'</td>
                              <td><a href="'.base_url().'YiZSzkTGaa/editforU/'.$value['ID'].'">Sửa</a></td>
                              <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$i.'">Xóa</button></td>
                              </tr>
                              <div class="modal fade" tabindex="-1" role="dialog" id="'.$i.'">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Bạn muốn xóa mục này không?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                            <a href="'.base_url().'YiZSzkTGaa/unsupport/'.$value['ID'].'" type="button" class="btn btn-danger">Xóa</a>
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
