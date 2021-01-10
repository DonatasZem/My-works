<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
// html top
include 'sections/htmltop.php';
require 'sections/header.php';
include 'sections/aboutmesection.php';
?>

    <!-- See the video section -->
    <?php 
        include 'sections/videosection.php';
    ?>
    <!-- See the video section -->

    <?php
    // Footer
    include 'sections/footer.php';
    ?>
    
    <script src="js/slidebtn.js"></script>
    <?php
    include 'sections/htmlend.php';
    ?>