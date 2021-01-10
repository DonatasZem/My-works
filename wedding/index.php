<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
// html top
require 'sections/htmltop.php';
require 'sections/header.php';
require 'class/cards.php';

$cardArray = [
['ahref' => 'events/event.php',
 'img' => 'imgs/img_1.jpg',
 'title' => 'Lorem ipsum dolor sit amet', 
 'date' => 'July 17, 2019', 
 'author' => 'Admin', 
 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

['ahref' => '1',
'img' => 'imgs/img_2.jpg', 
'title' => 'Lorem ipsum dolor sit amet', 
'date' => 'July 17, 2019', 
'author' => 'Admin',
'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

['ahref' => '2',
'img' => 'imgs/img_3.jpg', 
'title' => 'Lorem ipsum dolor sit amet', 
'date' => 'July 17, 2019', 
'author' => 'Admin', 
'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.']
];
?>

    <!-- My works section -->

    <section class="padding-112">

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

        <div class="container my-works">
            <h4>My works</h4>
            <h2>See My Works</h2>
            <div class="container-photo">
            </div>
        </div>
    </section>

    <!-----------------ABOUT ME SECTION-------------->

    <?php include 'sections/aboutmesection.php'; ?>
    
    <!-----------------ABOUT ME SECTION-------------->

    <!-- See the video section -->
    <?php 
        include 'sections/videosection.php';
    ?>
    <!-- What clients says section -->

    <section class="padding-112 section-bg-color">
        <div class="container my-works">
            <h4>Testimonials</h4>
            <h2>What Client Says</h2>
            <div class="what-client-says-div">
                <div>
                    <span>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <h5>The Best Photographer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                    <p>— Chris Smith</p>
                </div>
                <div>
                <span>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <h5> <h5>Easy To Work With</h5></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                    <p>— Chris Smith</p>
                </div>
                <div>
                <span>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <h5> <h5>Professional Photographer</h5></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                    <p>— Chris Smith</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events section -->

    <section class="padding-112">
        <div class="container my-works">
            <h4>News</h4>
            <h2>Events</h2>
            <div class="event-div">

                <?php 
                
                    foreach($cardArray as $card) :
                        new Card($card['ahref'],$card['img'], $card['title'], $card['date'], $card['author'], $card['text']);
                    endforeach;   

                ?>

            </div>
        </div>
    </section>
    
    <?php
    // Footer
    include 'sections/footer.php';
    ?>
    <script src="js/javascripts.js"></script>
    <?php
    include 'sections/htmlend.php';
    ?>

    