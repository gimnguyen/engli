<div class="container vobody">
    <div class="row">
        <div class="col-sm-9">
            <div class="worddetail">
                <h7>STUDY VOCABULARY</h7>
                <h2>Vocabulary with us <img src="<?php echo base_url()?>public/imgs/icons/love_icon.svg" class="mdicon"></h2>
            </div>

<!--            word today-->
            <div class="today">
                <h3>Word of the day</h3>
                <div class="row">
                    <?php
                    $audioUrl = 'https://dictionary.cambridge.org';
                        $g = 1;
                        $i = 1;
                        foreach($todayList as $key => $value){
                            if($g == 1){
                                echo '<div class="col-sm-6">
                                <ul class="today-list">';
                            }
                            echo '<audio id="todayAudio'.$i.'">
                                    <source src="'.$audioUrl.$value['oggurl'].'" type="audio/ogg">
                                    Your browser does not support the audio element.
                                </audio>';
                            echo '<script>
                                var td'.$i.' = document.getElementById("todayAudio'.$i.'");
                                
                                function playtodayAudio'.$i.'() {
                                    td'.$i.'.play();
                                }</script>';
                            echo '<li>
                                    <span class="prefix">'.$i.'</span>
                                    '.$value['word'].'<small><span><em> - '.$value['type'].'</em></span> <span class="spelling">/'.$value['spelling'].'/</span></small> <span class="ustone"><small>US</small> <a onclick="playtodayAudio'.$i.'()" ><img src="'.base_url().'public/imgs/icons/unspeaker-icon.svg" class="spicon"></a></span>
                                </li>';
                            if($g == 5){
                                echo '</ul>
                                </div>';
                                $g = 0;
                            }
                            $g++;
                            $i++;
                        }
                    ?>
                </div>
            </div>
<!--            end today-->

<!--            favourt playlist-->
            <div class="fplaylist">
                <h3 class="fplist-title">Favorite playlist <img src="<?php echo base_url()?>public/imgs/icons/rightwhite_icon.svg" class = "miniicon"></h3>
                <?php
                    foreach($a8PlayList as $key => $value){
                        $slugTitle = create_slug($value['playlistname']);

                        echo '<div class="plist-item">
                            <small>Practice - '.$value['totalword'].' words:</small>
                            <h5><a href="'.base_url().'vocabulary/lists/'.$value['ID'].'-'.$slugTitle.'">'.$value['playlistname'].'</a></h5>';

                        echo '<small class="ratinglist">Rating:';
                        for ($i=0; $i<$value['rating']; $i++){
                            echo '<img src="'.base_url().'public/imgs/icons/heart-icon.svg" class="plistrate">';
                        }
                        for ($i=$value['rating']; $i<5; $i++){
                            echo '<img src="'.base_url().'public/imgs/icons/unheart-icon.svg" class="plistrate">';
                        }
                        echo '</small></div>';

                    }
                    echo '<h6 class = "allplaylist"><a href = "'.base_url().'vocabulary/all-playlist">All playlist in here!</a></h6>';
                ?>
                
            </div>
            <!-- end playlist-->

            <!-- random words-->
            <div class="random-word">
                <h3>Random words</h3>
            <?php
                // $audioUrl = 'https://dictionary.cambridge.org';
                $i = 1;
                foreach ($randomwords as $key => $value){
                    echo '<div class="vocaword">';
                    echo '<h1><span class="wordindex">'.$i.'. </span>'.$value['word'].'
                            
                        </h1>
                        <audio id="myAudio'.$i.'">
                                <source src="'.$audioUrl.$value['oggurl'].'" type="audio/ogg">
                                Your browser does not support the audio element.
                            </audio>';
                    
                            echo '<script>
                            var x'.$i.' = document.getElementById("myAudio'.$i.'");
        
                            function playAudio'.$i.'() {
                                x'.$i.'.play();
                            }
        
                            function pauseAudio() {
                                x.pause();
                            }
                        </script>';

                        echo '<h6><span><em>'.$value['type'].'</em></span> <span class="spelling">/'.$value['spelling'].'/</span> <span class="ustone">US <a onclick="playAudio'.$i.'()" ><img src="'.base_url().'public/imgs/icons/unspeaker-icon.svg" class="spicon"></a></span></h6>';
                    echo '<h6>
                    <img src="'.base_url().'public/imgs/icons/if_Love_2134665.svg" class="mdicon">  '.$value['shortdes'].'</h6>';
                    echo '<em>Ex: '.$value['example'].'</em>';
                    echo '<footer class="blockquote-footer">Someone in <cite title="Source Title">The Internet</cite></footer>';
                    echo '</div>';
                    $i++;

                }
            ?>
            </div>
<!--            end random words-->


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
