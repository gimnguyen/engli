<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <div class="col-md-10"><h3 class="title">Add word to Vocabulary Playlist</h3></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <?php
            // print_r($addedword);
            $addedwordarr = array();
            $k = 0;

            foreach($addedword as $key => $value){
                $addedwordarr[$k] = $value['wordID'];
                $k++;
            }

            $i = 1;
            echo '<form method="post" enctype= "multipart/form-data" action="'.base_url().'YiZSzkTGaa/addwordtoPlaylist/'.$playlistID.'">';

            echo '<div class="row">';
            foreach ($allword as $key => $value){
                $checkedfag = '';
                if(in_array($value['ID'], $addedwordarr)){
                    $checkedfag = 'checked';
                }
                echo '<div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name = "wordlist[]" id="blankCheckbox" value="'.$value['ID'].'" '.$checkedfag.'> '.$value['word'].'
                            </label>
                        </div>
                    </div>';
                $i++;
            }
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Lưu</button>';
            echo '</form>';
            ?>
        </div>
    </div>
</div>
<!-- End body -->
