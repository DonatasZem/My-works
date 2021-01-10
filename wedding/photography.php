<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
// html top
include 'sections/htmltop.php';
include 'sections/header.php';
?>
    <!-- My works section -->

    <section>

    <!-- Lightbox -->
    <div class="lightbox">
       <div class="exit-btn-div"><span id="exit-from-lightbox">X</span></div>
        <div class="clear-float"></div>
        <div class="container-imgsssss">
            <div class="arrow-div-width"><i id="left-arrow" class="fa fa-angle-double-left" aria-hidden="true"></i></div>
                <div class="div-holding-img">
                    <img id="lightbox-img" src="" alt="">
                </div>
            <div class="arrow-div-width"><i id="right-arrow" class="fa fa-angle-double-right" aria-hidden="true"></i></div>
        </div>
    </div>
    <!---------------->
        <div class="container padding-112 my-works">
            <div class="container-photo">
            </div>
        </div>
    </section>
    <!-- My works section -->

    <div id="photos" class="photo"></div>

    <?php
    // Footer
    include 'sections/footer.php';
    ?>
    <script src="js/javascripts.js"></script>
    <?php
    include 'sections/htmlend.php';
    ?>