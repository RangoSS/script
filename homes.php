<?php include "hedss.php";
?>
<body style="height: auto;">
    <div class="accordian">
        <ul>
            <li>
                <div class="image_title">
                    <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">KungFu Panda</a>
                </div>
                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                    <img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" />
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Toy Story 2</a>
                </div>
                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                    <img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg" />
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Wall-E</a>
                </div>
                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                    <img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg" />
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a href="#">Up</a>
                </div>
                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                    <img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg" />
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a href="#">Cars 2</a>
                </div>
                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                    <img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg" />
                </a>
            </li>
        </ul>
    </div>

    <!-- end of Gallery now we start with tabs-->
    <div id="tabs" style="height:auto;margin-bottom:50px;overflow: hidden;">
       
<div class="col-lg-6 col-sm-6" style="float: right;">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="images/boy.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="images/boy.jpg">
            <p>my lovely boy</p>
            <p>my copy</p>
            <p>my challenge</p>
            <p>just in case Make sure you beat me</p>
        </div>
        <div class="card-info"> <span class="card-title">Mugumo Tshidaisa</span>

        </div>
    </div>
    
    </div>
      <div id="left" style="margin-left: 25%;">
        <h3>before you go watch one of our best Trailor</h3>
        <video width="320" height="240" controls autoplay>
        <source src="videos/spideman.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
    
</video>
      <p>this is our best selected movie trailor</p>
      <p>the spiderman is spiding its nest and hooking </p>
      <p>also dont foget to find the the master here on this site </p>
    </div>      
    
    </div>
    <br>
    
</body>
<?php

include "foot.php";
?>


<script type="text/javascript">
    $(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>