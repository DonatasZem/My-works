<?php 
// html top
include 'class/cards.php';
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
include 'sections/htmltop.php';
include 'sections/header.php';

$cardArray = [
    ['ahref' => 'events/event.php',   
     'img' => 'imgs/img_1.jpg',
     'title' => 'Lorem ipsum dolor sit amet', 
     'date' => 'July 17, 2019', 
     'author' => 'Admin', 
     'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

    ['ahref' => 'events/event.php',    
    'img' => 'imgs/img_2.jpg', 
    'title' => 'Lorem ipsum dolor sit amet', 
    'date' => 'July 17, 2019', 
    'author' => 'Admin', 
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

    ['ahref' => 'events/event.php',
    'img' => 'imgs/img_3.jpg', 
    'title' => 'Lorem ipsum dolor sit amet', 
    'date' => 'July 17, 2019', 
    'author' => 'Admin', 
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

    ['ahref' => 'events/event.php',
    'img' => 'imgs/img_1.jpg',
     'title' => 'Lorem ipsum dolor sit amet', 
     'date' => 'July 17, 2019', 
     'author' => 'Admin', 
     'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

    ['ahref' => 'events/event.php',
    'img' => 'imgs/img_2.jpg', 
    'title' => 'Lorem ipsum dolor sit amet', 
    'date' => 'July 17, 2019', 
    'author' => 'Admin', 
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.'],

    ['ahref' => 'events/event.php',
    'img' => 'imgs/img_3.jpg', 
    'title' => 'Lorem ipsum dolor sit amet', 
    'date' => 'July 17, 2019', 
    'author' => 'Admin', 
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.']
    ];
?>


    <!-- My works section -->
    
    <section class="padding-112">
        <div class="container my-works">
            <h4>News</h4>
            <h2>Events</h2>
            <div class="event-div">

                <?php 
                
                    foreach($cardArray as $card) :
                        new Card($card['ahref'], $card['img'], $card['title'], $card['date'], $card['author'], $card['text']);
                    endforeach;   

                ?>
                
            </div>

            <div class="event-selectors">
                <a href="event.php">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
            </div>

        </div>

    </section>

    <!-- My works section -->

    <?php
    // Footer
    include 'sections/footer.php';
    ?>
    <script src="js/slidebtn.js"></script>
    <?php
    include 'sections/htmlend.php';
    ?>