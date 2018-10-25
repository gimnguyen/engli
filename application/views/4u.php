<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="p-3 mb-2 bg-light text-dark">
                <a class="tx-ye" href="<?php echo base_url()?>">Home</a> / <a class="tx-ye" href="<?php echo base_url()?>grammar">Grammar</a> / Post your questions
            </div>

            <!-- question form -->
            <div class="questform">
                <form action="<?php echo base_url()?>foru/insertquestion" method="post" id="insert-new" name="vInsertProduct">
                    <div class="form-group">
                        <input type="text" name="vname" class="form-control" aria-describedby="yourname" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="vtitle" class="form-control" aria-describedby="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="vquestion" class="form-control" rows="4" placeholder="Text your question..."></textarea>
                        <small id="emailHelp" class="form-text text-muted">We just delete or modify by admin. <a class="tx-ye" href="">Contact if you need support!</a></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <hr>
            <!-- end question form -->

            <?php
            foreach ($a28Quest as $key => $value) {
                $slugTitle=create_slug($value['qtitle']);
                $ava = '<img src="'.base_url().'public/imgs/ani-1.png" alt="avatar" class="rounded-circle avatar">';
                if ($value['ID']%3 == 0){
                    $ava = '<img src="'.base_url().'public/imgs/ani-2.png" alt="avatar" class="rounded-circle avatar">';
                }
                if ($value['ID']%5 == 0){
                    $ava = '<img src="'.base_url().'public/imgs/ani-3.png" alt="avatar" class="rounded-circle avatar">';
                }
                if ($value['ID']%6 == 0){
                    $ava = '<img src="'.base_url().'public/imgs/ani-4.png" alt="avatar" class="rounded-circle avatar">';
                }

                $shortdes = substr($value['questionde'],0,180);
                $shortdes = str_replace("<br>","",$shortdes);
                $shortdes = trim($shortdes);
                $title = $value['qtitle'];

                if($title == ""){
                    $title = "Title of question";
                }


                $productCode ='<div class="gram-item">
                <h3><a href="'.base_url().'foru/detail/'.$value['ID'].'-'.$slugTitle.'">'.$title.'</a></h3>
                <p class="viewer">
                    '.$ava.'
                    <small>Posted by <span class="pad-right pad-left tx-ye">'.$value['username'].'</span></small>
                    
                </p>
                <p>'.$shortdes.'...<br>
                    <a href="'.base_url().'foru/detail/'.$value['ID'].'-'.$slugTitle.'"><small class="tx-ye">Contribute the answer</small></a>
                </p>
            </div>';
                echo $productCode;
            }
            ?>
        </div>

        <!-- Right -->
        <div class="col-sm-3">

            <div class="card quote">
                <img class="card-img-top" src="<?php echo base_url()?>public/imgs/right-banner.jpg" alt="Card image cap">
                <div class="card-body">
                    <p>Battlefield brave challenge, anger challenging the wise, tough challenge friends.</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Russian proverb</cite></footer>
                </div>
            </div>

            <!-- Category -->
            <div class="falesson">
                <h4>Favorite Lesson <img src="<?php echo base_url()?>public/imgs/icons/right_icon.svg" class="miniicon"></h4>
                <ul>
                    <?php
                    foreach($faBlog as $key => $value){
                        $slugTitle=create_slug($value['longName']);
                        echo '<li>
                                <img src="'.base_url().'public/imgs/icons/3dots.svg">
                                <a href="'.base_url().'grammar/detail/' . $value['category'] .'/'.$value['ID'].'-'.$slugTitle.'" title = "'.$value['longName'].'">'.$value['shotName'].'</a></li>';
                    }
                    ?>
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
            <link rel="stylesheet" type="text/css" media="all" href="https://dictionarybox.com/dic_box_v3.css" />
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
            <script type="text/javascript" src="https://dictionarybox.com/dic_box.js"></script>
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
        <!-- End Right -->
    </div>
</div>
