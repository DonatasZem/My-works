    <!-- Header -->
    <div class="main-img">
        <div class="dark">
            <div class="container">
                <div class="nav-bars">
                    <div class="capture">
                        <a href="#">CAPTURE</a>
                    </div>
                        <div class="right-side">     
                            <a href="index.php" <?php if($curPageName === "index.php") {echo 'style="color: #f4ad2d"';} ?>>Home</a>
                            <a href="about.php" <?php if($curPageName === "about.php") {echo 'style="color: #f4ad2d"';} ?>>About</a>
                            <a href="photography.php" <?php if($curPageName === "photography.php") {echo 'style="color: #f4ad2d"';} ?> >Photography</a>
                            <a href="event.php" <?php if($curPageName === "event.php" || $curPageName === "events/event.php") {echo 'style="color: #f4ad2d"';} ?> >Event</a>
                            <a href="contacts.php" <?php if($curPageName === "contacts.php") {echo 'style="color: #f4ad2d"';} ?>>Contact</a>
                        </div>
                        <div id="phone-tablet-btn" class="phone-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-at-img">
                <p><?php if($curPageName === "index.php") {
                    echo "Hey there! I'm Craig Smith";}?></p>
                <h1><?php if($curPageName === "index.php") {
                    echo "Wedding & Event<br>Photographer";
                } elseif($curPageName === "about.php") {
                    echo "About Us";
                } elseif($curPageName === "photography.php") {
                    echo "Photography Works";
                } elseif($curPageName === "event.php") {
                    echo "Events";
                } elseif($curPageName === "contacts.php") {
                    echo "Contact Us";
                } ?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in<br> tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
                <button>CONTACT ME</button>
            </div>
        </div>
    </div>

    <div class="phone-button-slide">
        <div  class="closing-slide-div"><span class="exit-slide">X</span></div>
        <nav> 
            <a href="index.php" <?php if($curPageName === "index.php") {echo 'style="color: #f4ad2d"';} ?>>Home</a>
            <a href="about.php" <?php if($curPageName === "about.php") {echo 'style="color: #f4ad2d"';} ?>>About</a>
            <a href="photography.php" <?php if($curPageName === "photography.php") {echo 'style="color: #f4ad2d"';} ?> >Photography</a>
            <a href="event.php" <?php if($curPageName === "event.php") {echo 'style="color: #f4ad2d"';} ?> >Event</a>
            <a href="contacts.php" <?php if($curPageName === "contacts.php") {echo 'style="color: #f4ad2d"';} ?>>Contact</a>
        </nav>
    </div>