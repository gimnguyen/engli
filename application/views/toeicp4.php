<?php
$mp3url = '';
$transcript = '';
$transimg = '';

sort($quesList);
foreach ($quesList as $key => $value){
    if ($value['mp3url'] != ''){
        $mp3url = base_url().$value['mp3url'];
        
    }
    if ($value['transcript'] != ''){
        $transcript = $value['transcript'];
    }
    if ($value['transimg'] != ''){
        $transimg = '<img src="'.base_url().$value['transimg'].'" class="img-fluid" alt="TOEIC Test Transcript">';
    }
}
?>

<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Conversations</h1>
                <p>Category: <a class="tx-ye" href="">Part 4 - Talk</a></p>

                <p><strong>Test Length</strong> <br>
                    The test takes approximately 2½ hours, with: <br>

                    - 45 minutes for Section I: Listening <br>
                    - 75 minutes for Section II: Reading <br>
                    - approximately 30 minutes to answer biographical questions
                </p>
                <p><strong>Directions:</strong> You will hear some talks given by a single speaker. You will be asked to answer three questions about what the speaker says in each talk. Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet. The talks will not be printed in your test book and will be spoken only one time.</p>
                <hr>
                <div class="row">
                    <div class="col-sm-9">
                        <span class="tx-note">Click on the 'View Answers' button to see the correct answers.</span>
                    </div>
                    <div class="col-sm-3">
                        <span id="startClock" class="start-now">
                        <img class = "timericon" src = "<?php base_url()?>public/imgs/icons/timer-icon.svg" alt="Timer icon">
                        </span> <strong id="count"> 0h 0m 0s</strong>
                    </div>
                </div>
            </div>
            <div class="quest">
                <div class="mp3">
                    <audio controls class="audio-p2" controlsList="nodownload">
                        <?php
                        echo '<source src="'.$mp3url.'" type="audio/mpeg">';
                        echo 'Your browser does not support the audio element.';
                        ?>
                    </audio>

                </div>

                <!-- choose answer-->
                <div class="question-p2">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Question: 41 - 46</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">47 - 52</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">53 - 58</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">59 - 64</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">65 - 70</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active part2-ans" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $i = 1;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 3){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $i = 4;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 6){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $i = 7;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 9){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $i = 10;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 12){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $i = 13;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 15){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $i = 16;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 18){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-4" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $i = 19;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 21){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $i = 22;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 24){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-5" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $i = 25;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 27){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $i = 28;
                                    foreach ($quesList as $key => $value){
                                        $j = 1;
                                        if($i <= 30){
                                            echo ''.(40 + $i).'. '.$value['quest'].'. </h6>';
                                            echo '<ul class="part2-list">
                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansa'].'</label></li>
                                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansa'].'</label></li>
                                        </ul>';
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Answer -->
            <div class="answer">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        View Answer 41 - 46
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        47 - 52
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        53 - 58
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                        59 - 64
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                        65 - 70
                    </button>
                </p>
                <?php

                //                41 - 46
                echo '<div class="collapse" id="collapseExample">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $i = 1;
                foreach ($quesList as $key => $value) {

                    if ($i <= 6) {
                        echo '<li>' . (40 + $i) . ': ' . $value['trueans'] . '</li>';
                    }
                    $i++;
                }
                echo '</ul>
                        </div>
                    </div>';

                //                47 - 52
                echo '<div class="collapse" id="collapseExample2">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $i = 7;
                foreach ($quesList as $key => $value) {

                    if ($i <= 12) {
                        echo '<li>' . (40 + $i) . ': ' . $value['trueans'] . '</li>';
                    }
                    $i++;
                }
                echo '</ul>
                        </div>
                    </div>';

                //                53 - 58
                echo '<div class="collapse" id="collapseExample3">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $i = 13;
                foreach ($quesList as $key => $value) {

                    if ($i <= 18) {
                        echo '<li>' . (40 + $i) . ': ' . $value['trueans'] . '</li>';
                    }
                    $i++;
                }
                echo '</ul>
                        </div>
                    </div>';

                //                53 - 58
                echo '<div class="collapse" id="collapseExample4">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $i = 19;
                foreach ($quesList as $key => $value) {

                    if ($i <= 24) {
                        echo '<li>' . (40 + $i) . ': ' . $value['trueans'] . '</li>';
                    }
                    $i++;
                }
                echo '</ul>
                        </div>
                    </div>';

                //                53 - 58
                echo '<div class="collapse" id="collapseExample5">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $i = 25;
                foreach ($quesList as $key => $value) {

                    if ($i <= 30) {
                        echo '<li>' . (40 + $i) . ': ' . $value['trueans'] . '</li>';
                    }
                    $i++;
                }
                echo '</ul>
                        </div>
                    </div>';



                ?>
            </div>

            <!-- Script -->
            <div class="script">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#transcript" aria-expanded="false" aria-controls="collapseExample">
                        View Transcript
                    </button>
                </p>
                <div class="collapse" id="transcript">
                    <div class="card card-body dotbor mar-btm">
                        <?php
                        echo $transcript;
                        echo $transimg;
                        ?>
                    </div>
                </div>
            </div>

            <!-- Note -->
            <div class="note">
                <p class="tx-note"><strong>BE CAREFUL:</strong> We can not turn back previous question after clicking on 'Next' button. Let's go!</p>
            </div>

            <!-- page -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link tx-ye" href="<?php echo base_url();?>toeic-part-4">Next <img src="<?php echo base_url() ?>public/imgs/icons/right-arrow.svg" class="lgicon"></a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Right -->
        <div class="col-sm-3">

            <div class="card quote">
                <img class="card-img-top" src="<?php echo base_url()?>public/imgs/right-banner.jpg" alt="Card image cap">
                <div class="card-body">
                    <p>"Someone’s sitting in the shade today because someone planted a tree a long time ago."</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </div>
            </div>

            <!-- Category -->
            <div class="category">
                <h4>Test Content <img src="<?php echo base_url()?>public/imgs/icons/right_icon.svg" class="miniicon"></h4>
                <ul>
                    <h5 class="cate-line">Section I: Listening</h5>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-1">Part 1</a></li>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-2">Part 2</a></li>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-3">Part 3</a></li>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-4">Part 4</a></li>
                    <h5 class="cate-line">Section II: Reading</h5>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-5">Part 5</a></li>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-6">Part 6</a></li>
                    <li>
                        <img src="<?php echo base_url()?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-7">Part 7</a></li>
                </ul>
            </div>
            <!-- End category -->

            <!-- dictionary -->
            <div class="dictionary">
                <div class="dicbody">
                    <form class="dicform">
                        <h6>Select a dictionary</h6>
                        <select id="mySelect" class="form-control cform">
                            <option value="EnglishToAlbanian,AlbanianToEnglish">English ⇔ Albanian</option>
                            <option value="EnglishToChineseS,ChineseSToEnglish">English ⇔ Chinese(Simplified)</option>
                            <option value="EnglishToChineseT,ChineseTToEnglish">English ⇔ Chinese(Traditional)</option>
                            <option value="EnglishToDutch,DutchToEnglish">English ⇔ Dutch</option>
                            <option selected="" value="EnglishToEnglish">English ⇔ English</option>
                            <option value="EnglishToFrench,FrenchToEnglish">English ⇔ French</option>
                            <option value="EnglishToGerman,GermanToEnglish">English ⇔ German</option>
                            <option value="EnglishToGreek,GreekToEnglish">English ⇔ Greek</option>
                            <option value="EnglishToItalian,ItalianToEnglish">English ⇔ Italian</option>
                            <option value="EnglishToJapanese,JapaneseToEnglish">English ⇔ Japanese</option>
                            <option value="EnglishToKorean,KoreanToEnglish">English ⇔ Korean</option>
                            <option value="EnglishToPortuguese,PortugueseToEnglish">English ⇔ Portuguese</option>
                            <option value="EnglishToRussian,RussianToEnglish">English ⇔ Russian</option>
                            <option value="EnglishToSpanish,SpanishToEnglish">English ⇔ Spanish</option>
                            <option value="EnglishToTurkish,TurkishToEnglish">English ⇔ Turkish</option>
                        </select>
                        <button type="button" class="btn btn-diction" onclick="myFunction()">Try it !!!</button>
                    </form>
                </div>
                <h4>dictionarybox.com
                    <img src="<?php echo base_url()?>public/imgs/icons/rightwhite_icon.svg" class="miniicon">
                </h4>
            </div>
            <!-- begin dictionary box -->
            <div id="pl-dbox"><a class="pl-dbox-title" href="javascript:void(0);dboxCursorLoc();"><span id="pl-dbox-title-text">Dictionary</span></a>
                <div id="pl-dbox-content"><div id="pl-dboxFlags"><ul><li><img src="https://dictionarybox.com/flags/English.png" alt="english" /></li>
                            <li><h3>Dictionary Box</h3></li></ul></div><div id="pl-dbox-ajax-content">
                        <p class="info">Double click on any word on the page or type a word:</p><p><input type="text" name="pl-dbox-search-field" style="width:97%;" id="pl-dbox-search-field" onKeyPress="return dbxChkKy(event);" autocomplete=off /></p>
                        <p id="pl-dbox-search-button"><input type="button" value=" Search! " OnClick="getdboxResults();"/></p></div><input id="pl-dbox-glossary" type="hidden" value="EnglishToEnglish"/>
                    <div id="pl-dbox-credit">Powered by dictionarist.com</div></div></div>
            <!-- end dictionary box -->
            <script>
                function myFunction() {
                    var x = document.getElementById("mySelect").value;
                    document.getElementById("pl-dbox-glossary").value = x;
                }
            </script>
            <!-- end dictionary -->
        </div>
    </div>
</div>

<script>
    var myVar;
    var seconds = 0;
    var hours = 0;
    var minutes = 0;

    function startTimer(){

        myVar = setInterval(function() {
            seconds = seconds + 1;
            if (seconds > 59){
                seconds = 0;
                minutes = minutes + 1;

                if (minutes > 59){
                    minutes = 0;
                    hours = hours + 1;
                }
            }
            document.getElementById("count").innerHTML = hours + "h "
                + minutes + "m " + seconds + "s ";

        }, 1000);
    }

    var timer_is_on = 0;
    $("#startClock").click( function(){

        if (!timer_is_on) {
            timer_is_on = 1;
            startTimer();
        }else{
            timer_is_on = 0;
            clearInterval(myVar);
        }
    });
</script>