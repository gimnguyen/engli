<div class="topbanner">
    <img src="<?php echo base_url() ?>public/imgs/toeicp1.png" class="img-fluid" alt="Responsive image">
</div>

<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="vocaword">
                <?php
                    echo '<h1 class="mainword">'.$gword['wordname'].'
                                <a onclick="playAudio()" ><img src="'.base_url().'public/imgs/icons/unspeaker-icon.svg" class="spicon"></a>
                            </h1>
                            <audio id="myAudio">
                                <source src="'.$gword['audiourl'].'" type="audio/ogg">
                                Your browser does not support the audio element.
                            </audio>';

                    echo '<h5 class="wordpron">
                            <span>'.$gword['wordtype'].'</span> /'.$gword['pron'].'/
                        </h5>';

                ?>
                <script>
                    var x = document.getElementById("myAudio");

                    function playAudio() {
                        x.play();
                    }

                    function pauseAudio() {
                        x.pause();
                    }
                </script>
                <div class="col-sm-8 worddefined">
                    <ol>
                        <?php
                            if ($gword['firstdefine'] != ''){
                                echo '<li>'.$gword['firstdefine'].'</li>';
                            }
                            if ($gword['seconddefine'] != ''){
                                echo '<li>'.$gword['seconddefine'].'</li>';
                            }
                            if ($gword['thirddefine'] != ''){
                                echo '<li>'.$gword['thirddefine'].'</li>';
                            }
                            if ($gword['fourthdefine'] != ''){
                                echo '<li>'.$gword['fourthdefine'].'</li>';
                            }
                            if ($gword['fifthdefine'] != ''){
                                echo '<li>'.$gword['fifthdefine'].'</li>';
                            }
                        ?>
                    </ol>
                    <hr>
                    <h6 class="relativeword">See some another words</h6>
                    <?php
                        $i = 1;
                        foreach ($relativeword as $key => $value){
                            echo '<div class="vocaword">
                                    <h1><span class="wordindex">'.$i.'. </span><a href="'.base_url().'vocabulary/word/'.$value['ID'].'">'.$value['wordname'].'</a></h1>
                                    <h6>
                                        <img src="'.base_url().'public/imgs/icons/if_Love_2134665.svg" class="mdicon">
                                        '.$value['brefdefine'].'</h6>
                                </div>';
                            $i++;
                        }
                    ?>
                </div>

            </div>


        </div>

        <!-- Right -->
        <div class="col-sm-3">

            <div class="card" style="width: 17rem;">
                <img class="card-img-top" src="https://fat.gfycat.com/LightHelplessAmericanalligator.gif" alt="Card image cap">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </div>
            </div>

            <!-- Category -->
            <div class="category">
                <h3>Test Content <img src="<?php echo base_url() ?>public/imgs/icons/speech-bubble.svg" class="lgicon"></h3>
                <ul>
                    <h5 class="cate-line">Section I: Listening</h5>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-1">Part 1</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-2">Part 2</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-3">Part 3</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-4">Part 4</a></li>
                    <h5 class="cate-line">Section II: Reading</h5>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-5">Part 5</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-6">Part 6</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-7">Part 7</a></li>
                </ul>
            </div>
            <!-- End category -->
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