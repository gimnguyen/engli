<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Text Completion</h1>
                <p>Category: <a class="tx-ye" href="">Part 6 - Text Completion</a></p>

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
                    $img = $value['questimg'];

                    $img1path = '';

                    if ($img != ''){
                        $img1path = '<img src="'.base_url().$img.'" class="img-fluid" alt="TOEIC Test">';
                    }

                    echo '<div class="quest-detail">'.$img1path.'</div>';
                }
                ?>
                <div class="row">
                    <div class="col-sm-4">
                        <h6>First question:</h6>
                        <ul class="part2-list">
                            <li><input type="radio" name="subscribe_comments1" id="10"> <label for="10">Your answer is A</label></li>
                            <li><input type="radio" name="subscribe_comments1" id="11"> <label for="11">Your answer is B</label></li>
                            <li><input type="radio" name="subscribe_comments1" id="12"> <label for="12">Your answer is C</label></li>
                            <li><input type="radio" name="subscribe_comments1" id="13"> <label for="13">Your answer is D</label></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h6>Second question:</h6>
                        <ul class="part2-list">
                            <li><input type="radio" name="subscribe_comments2" id="20"> <label for="20">Your answer is A</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="21"> <label for="21">Your answer is B</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="22"> <label for="22">Your answer is C</label></li>
                                <li><input type="radio" name="subscribe_comments2" id="23"> <label for="23">Your answer is D</label></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h6>Third question:</h6>
                        <ul class="part2-list">
                            <li><input type="radio" name="subscribe_comments3" id="30"> <label for="30">Your answer is A</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="31"> <label for="31">Your answer is B</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="32"> <label for="32">Your answer is C</label></li>
                                <li><input type="radio" name="subscribe_comments3" id="33"> <label for="33">Your answer is D</label></li>
                        </ul>
                    </div>
                </div>
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
                        <a class="page-link tx-ye" href="<?php echo base_url();?>toeic-part-6">Next <img src="<?php echo base_url() ?>public/imgs/icons/right-arrow.svg" class="lgicon"></a>
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