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
        <h2><b>Cotações</b> & <b>gráficos</b></h2>
        <a href="#b2" class="fa fa-arrow-down"></a>
    </div>
</div>
<div id="b2">
    <div class="msgCenterShowSample hidden">
        <?php include_once"./includes/content_body/cnt-cotacao-e-graficos.php";?>
    </div>
</div>
<?php include_once"./includes/menu-full.php";?>