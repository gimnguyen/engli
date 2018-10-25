<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="p-3 mb-2 bg-light text-dark">
                <a class="tx-ye" href="<?php echo base_url()?>">Home</a> / <a class="tx-ye" href="<?php echo base_url()?>grammar">Grammar</a>
            </div>

            <div class="gram-detail">
                <?php
                foreach ($productDetail as $key => $value) {

                    echo '<h3>'. $value['longName'] . '</h3>';
                    echo '<p class="viewer">
                                <small><span class="pad-right">Views:</span></small> 4521
                                <small><span class="pad-right pad-left">Discuss in:</span> </small>
                                <a href="">4U
                                    <img src="'.base_url().'public/imgs/icons/discuss-issue-ye.svg" class="mdicon">
                                </a>
                            </p>';
                    echo $value['longDetail'];
                }
                ?>
                <hr>
                <div class="fb-like" data-href="http://realenglishtest.com/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="maybelike">
                <h6>Maybe You like</h6>
                <ul>
                <?php
                foreach($samecatelog as $key => $value){
                    $slugTitle = create_slug($value['longName']);
                        $codeHtml = '<li>
                                        <a href="' . base_url() . 'grammar/detail/' . $value['category'] .'/' . $value['ID'] .'-'.$slugTitle. '">' . $value['shotName'] . '</a>
                                    </li>';
                        echo $codeHtml;
                }

                if (isset($maybeLike)) {
                    foreach ($maybeLike as $key => $value) {
                        $slugTitle = create_slug($value['longName']);
                        $codeHtml = '<li>
                                        <a href="' . base_url() . 'grammar/detail/' . $value['category'] .'/' . $value['ID'] .'-'.$slugTitle. '">' . $value['shotName'] . '</a>
                                    </li>';
                        echo $codeHtml;
                    }
                }

                ?>
                </ul>
            </div>
            <div class="maybelike">
                <h6>Comments</h6>
                <div class="fb-comments" data-href="http://realenglishtest.com/" data-width="100%" data-numposts="15"></div>
            </div>
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
        </div> <!-- end side-->
    </div>
</div>
