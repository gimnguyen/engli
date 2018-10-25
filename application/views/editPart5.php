<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Sửa câu hỏi Part 5</h3>
    </div>
    <div class="col-md-12">
        <?php

        foreach ($gquestion as $key => $value){

            $gID = isset($value['ID'])?$value['ID']:-1;
            $gquest = isset($value['quest'])?$value['quest']:"";

            $gansa = isset($value['ansa'])?$value['ansa']:"";
            $gansb = isset($value['ansb'])?$value['ansb']:"";
            $gansc = isset($value['ansc'])?$value['ansc']:"";
            $gansd = isset($value['ansd'])?$value['ansd']:"";

            $gtrueAns = isset($value['trueans'])?strtoupper($value['trueans']):"";
            $gexplainans = isset($value['explainans'])?$value['explainans']:"";

            $iShow = isset($value['ishow'])?$value['ishow']:"";

            if ($iShow == 1){
                $ishowCode = 'checked="checked"';
                $ihindenCode = '';
            }else{
                $ishowCode = '';
                $ihindenCode = 'checked="checked"';
            }

            $isA = '';
            $isB = '';
            $isC = '';
            $isD = '';

            switch ($gtrueAns){
                case "A":
                    $isA = 'checked="checked"';
                    $isB = '';
                    $isC = '';
                    $isD = '';
                    break;
                case 'B':
                    $isB = 'checked="checked"';
                    $isA = '';
                    $isC = '';
                    $isD = '';
                    break;
                case 'C':
                    $isC = 'checked="checked"';
                    $isB = '';
                    $isA = '';
                    $isD = '';
                    break;
                case 'D':
                    $isD = 'checked="checked"';
                    $isB = '';
                    $isC = '';
                    $isA = '';
                    break;
                default:
                    echo "loi";
            }

            $proCode = '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/savePart5Quest/'.$gID.'">
                        <div class="form-group">
                            <label for="inputPassword3">Chọn hiển thị</label>
                            <div class="radio">
                                <label><input type="radio" name="vIshow" value="1"'.$ishowCode.'> Hiển thị bài viết</label>
                                <label><input type="radio" name="vIshow" value="0"'.$ihindenCode.'> Ẩn bài viết</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3">Question</label>
                            <textarea name="vQuest" class="form-control" rows="2" cols="10">'.$gquest.'</textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3">Answer A:</label><input type="radio" name="vTrueAns" value="A" '.$isA.'>
                            <input type="text" name="vAnsa" class="form-control" value="'.$gansa.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer B:</label><input type="radio" name="vTrueAns" value="B" '.$isB.'>
                            <input type="text" name="vAnsb" class="form-control" value="'.$gansb.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer C:</label><input type="radio" name="vTrueAns" value="C" '.$isC.'>
                            <input type="text" name="vAnsc" class="form-control" value="'.$gansc.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Answer D:</label><input type="radio" name="vTrueAns" value="D" '.$isD.'>
                            <input type="text" name="vAnsd" class="form-control" value="'.$gansd.'">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Explaination</label>
                            <textarea name="vExplain" id="editor1" rows="15" cols="10">'.$gexplainans.'</textarea>
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