<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Text Completion</h1>
                <p>Category: <a class="tx-ye" href="">Part 7 - Reading Comprehension</a></p>

                <p><strong>Test Length</strong> <br>
                    The test takes approximately 2½ hours, with: <br>

                    - 45 minutes for Section I: Listening <br>
                    - 75 minutes for Section II: Reading <br>
                    - approximately 30 minutes to answer biographical questions
                </p>
                <p><strong>Directions:</strong> In this part you will read a selection of texts, such as magazine and newspaper articles, letters, and advertisements. Each text is followed by several questions. Select the best answer for each question and mark the letter (A), (B), (C), or (D) on your answer sheet.</p>
                <hr>
                <p class="tx-note">Click on the 'View Answers' button to see the correct answers.</p>
            </div>
            <div class="quest">
                <?php
                foreach ($quesList as $key => $value){
                    $qespar1 = $value['questpar1'];
                    $qespar2 = $value['questpar2'];
                    $img1 = $value['quest1img'];
                    $img2 = $value['quest2img'];

                    $qe1 = $value['quest1'];
                    $qe2 = $value['quest2'];
                    $qe3 = $value['quest3'];
                    $qe4 = $value['quest4'];
                    $qe5 = $value['quest5'];

                    $img1path = '';
                    $img2path = '';

                    if ($img1 != ''){
                        $img1path = '<img src="'.base_url().$img1.'" class="img-fluid" alt="TOEIC Test">';
                    }
                    if ($img2 != ''){
                        $img2path = '<img src="'.base_url().$img2.'" class="img-fluid" alt="TOEIC Test">';
                    }

                    echo '<div class="quest-detail">'.$qespar1.$img1path.'</div>';
                    echo '<div class="quest-detail">'.$qespar2.$img2path.'</div>';

                    if ($qe1 != ''){
                        echo '<h6>1. '.$qe1.'</h6>';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments" id="q11"> <label for="q11">'.$value['ans1a'].'</label></li>
                                <li><input type="radio" name="subscribe_comments" id="q12"> <label for="q12">'.$value['ans1b'].'</label></li>
                                <li><input type="radio" name="subscribe_comments" id="q13"> <label for="q13">'.$value['ans1c'].'</label></li>
                                <li><input type="radio" name="subscribe_comments" id="q14"> <label for="q14">'.$value['ans1d'].'</label></li>
                            </ul>';
                    }
                    if ($qe2 != ''){
                        echo '<h6>2. '.$qe2.'</h6>';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments2" id="q21"> <label for="q21">'.$value['ans2a'].'</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="q22"> <label for="q22">'.$value['ans2b'].'</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="q23"> <label for="q23">'.$value['ans2c'].'</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="q24"> <label for="q24">'.$value['ans2d'].'</label></li>
                            </ul>';
                    }
                    if ($qe3 != ''){
                        echo '<h6>3. '.$qe3.'</h6>';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments3" id="q31"> <label for="q31">'.$value['ans3a'].'</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="q32"> <label for="q32">'.$value['ans3b'].'</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="q33"> <label for="q33">'.$value['ans3c'].'</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="q34"> <label for="q34">'.$value['ans3d'].'</label></li>
                            </ul>';
                    }
                    if ($qe4 != ''){
                        echo '<h6>4. '.$qe4.'</h6>';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments4" id="q41"> <label for="q41">'.$value['ans4a'].'</label></li>
                                <li><input type="radio" name="subscribe_comments4" id="q42"> <label for="q42">'.$value['ans4b'].'</label></li>
                                <li><input type="radio" name="subscribe_comments4" id="q43"> <label for="q43">'.$value['ans4c'].'</label></li>
                                <li><input type="radio" name="subscribe_comments4" id="q44"> <label for="q44">'.$value['ans4d'].'</label></li>
                            </ul>';
                    }
                    if ($qe5 != ''){
                        echo '<h6>5. '.$qe5.'</h6>';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments5" id="q51"> <label for="q51">'.$value['ans5a'].'</label></li>
                                <li><input type="radio" name="subscribe_comments5" id="q52"> <label for="q52">'.$value['ans5b'].'</label></li>
                                <li><input type="radio" name="subscribe_comments5" id="q53"> <label for="q53">'.$value['ans5c'].'</label></li>
                                <li><input type="radio" name="subscribe_comments5" id="q54"> <label for="q54">'.$value['ans5d'].'</label></li>
                            </ul>';
                    }

                }
                ?>
            </div>

            <!-- Answer -->
            <div class="answer">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        View Answer
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body dotbor">
                        <ul class="part5-ans">
                            <?php
                            foreach ($quesList as $key => $value){
                                if ($value['trueans1'] != ''){
                                    echo '<li>'.$value['trueans1'].'</li>';
                                }
                                if ($value['trueans2'] != ''){
                                    echo '<li>'.$value['trueans2'].'</li>';
                                }
                                if ($value['trueans3'] != ''){
                                    echo '<li>'.$value['trueans3'].'</li>';
                                }
                                if ($value['trueans4'] != ''){
                                    echo '<li>'.$value['trueans4'].'</li>';
                                }
                                if ($value['trueans5'] != ''){
                                    echo '<li>'.$value['trueans5'].'</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="note">
                <p class="tx-note"><strong>BE CAREFUL:</strong> We can not turn back previous question after clicking on 'Next' button. Let's go!</p>
            </div>

            <!-- page -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link tx-ye" href="<?php echo base_url();?>toeic-part-7">Next <img src="<?php echo base_url() ?>public/imgs/icons/right-arrow.svg" class="lgicon"></a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Right -->
        <div class="col-sm-3">

            <div class="card quote">
                <img class="card-img-top" src="<?php echo base_url()?>public/imgs/right-banner.jpg" alt="Card image cap">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
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