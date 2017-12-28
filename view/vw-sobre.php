<?php
    include_once"./includes/ref.php";
    $video = "grafico";
?>
<div class="filter2"></div>
<div class="homepage-hero-module">
    <div class="video-container">
        <!--div class="filter"></div-->
        <video autoplay loop class="fillWidth">
            <source src="<?PHP echo DIR_HEADER;?>MP4/<?php echo "$video";?>.mp4" type="video/mp4" />
            <!--source src="<?PHP echo DIR_HEADER;?>WEBM/<?php echo "$video";?>.webm" type="video/webm" /-->
        </video>
        <div class="poster hidden">
            <img src="<?PHP echo DIR_HEADER;?>Snapshots/<?php echo "$video";?>.jpg" alt="">
        </div>
    </div>
</div>
<?php include_once"./includes/brand.php";?>
<?php include_once"./includes/social-net.php";?>
<?php include_once"./includes/loader.php";?>
<div>
    <div class="msgCenter hidden">
        <?php include_once"./includes/content_body/cnt-sobre.php";?>
    </div>
</div>
<?php include_once"./includes/menu-full.php";?>