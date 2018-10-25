<div class="all-page">
    <div class="container cbody">
        <div class="row">
            <div class="col-sm-9">
                <div class="intro">
                    <h1>TOEIC - Incomplete sentences</h1>
                    <p>Category: <a class="tx-blu" href="">Part 5 - Incomplete sentences</a></p>
                    <p><strong>Directions:</strong> A word or phrase is missing in each of the
                        following sentences. Four answer choices are given below
                        each sentence. Select the best answer to complete the
                        sentence. Then mark the letter (A), (B), (C), or (D) on your
                        answer sheet.</p>
                    <hr>
                    <p class="tx-blu">Click on the 'View Answers' button to see the correct answers.</p>
                </div>


                <div class="quest">
                    <h2>Questions</h2>
                    <?php
                    $i = 1;
                    foreach ($quesList as $key => $value){
                        $j = 1;
                        echo '<h6>'.$i.'. '.$value['quest'].' </h6>';
                        echo '<ul class="part5-list">
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansb'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansc'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansd'].'</label></li>
                                </ul>';

                        $i++;
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
                                    if ($value['trueans'] != ''){
                                        echo '<li>'.$value['trueans'].'</li>';
                                    }else{
                                        echo '<li>N/A</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="note">
                    <p class="tx-note">Note: We can not turn back previous question after clicking on 'Next' button. Let's go!</p>
                </div>

                <!-- page -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link tx-ye" href="<?php echo base_url();?>toeic-part-5">Next <img src="<?php echo base_url()?>public/imgs/icons/right-arrow.svg" class="lgicon"></a>
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
            </div> <!-- end side--!>
        </div>
    </div>
