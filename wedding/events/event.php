
<?php 
// html top
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- initial-scale=1.0 jisai man padarydavo zoom -->
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<!-- Header -->
<div class="main-img">
    <div class="dark">
        <div class="container">
            <div class="nav-bars">
                <div class="capture">
                    <a href="#">CAPTURE</a>
                </div>
                    <div class="right-side">     
                        <a href="../index.php" <?php if($curPageName === "index.php") {echo 'style="color: #f4ad2d"';} ?>>Home</a>
                        <a href="../about.php" <?php if($curPageName === "about.php") {echo 'style="color: #f4ad2d"';} ?>>About</a>
                        <a href="../photography.php" <?php if($curPageName === "photography.php") {echo 'style="color: #f4ad2d"';} ?> >Photography</a>
                        <a href="../event.php" <?php if($curPageName === "event.php" || $curPageName === "events/event.php") {echo 'style="color: #f4ad2d"';} ?> >Event</a>
                        <a href="../contacts.php" <?php if($curPageName === "contacts.php") {echo 'style="color: #f4ad2d"';} ?>>Contact</a>
                    </div>
                    <div id="phone-tablet-btn" class="phone-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="event-center-text">
            <p>July 17, 2019 . By Admin</p>
            <h1>Single Blog/Event<br>Posts Title</h1>
        </div>
    </div>
</div>

<div class="phone-button-slide">
    <div  class="closing-slide-div"><span class="exit-slide">X</span></div>
    <nav> 
        <a href="../index.php" <?php if($curPageName === "index.php") {echo 'style="color: #f4ad2d"';} ?>>Home</a>
        <a href="../about.php" <?php if($curPageName === "about.php") {echo 'style="color: #f4ad2d"';} ?>>About</a>
        <a href="../photography.php" <?php if($curPageName === "photography.php") {echo 'style="color: #f4ad2d"';} ?> >Photography</a>
        <a href="../event.php" <?php if($curPageName === "event.php") {echo 'style="color: #f4ad2d"';} ?> >Event</a>
        <a href="../contacts.php" <?php if($curPageName === "contacts.php") {echo 'style="color: #f4ad2d"';} ?>>Contact</a>
    </nav>
</div>

    <section class="padding-112">
        <div class="container">
            <p class="story-about-event-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A officia in rem aliquam, blanditiis voluptates amet magnam nesciunt voluptas, itaque asperiores reprehenderit delectus, eaque dolorem veniam optio alias voluptate maxime ex modi labore. Porro earum, aliquam ullam ex quod deleniti molestiae quisquam necessitatibus vero ipsa architecto modi! Itaque voluptatum obcaecati saepe alias quaerat, eius impedit dolore earum animi fugit! Similique, molestiae, quae cupiditate laborum perspiciatis culpa hic provident, mollitia facere sunt natus velit nulla nihil consectetur exercitationem nobis? Sed ullam harum rerum veritatis aperiam! Corporis, temporibus quidem soluta consectetur inventore ea necessitatibus eius, provident dolore aspernatur sit tenetur ex impedit tempora possimus itaque iure. Cumque illo nam error harum nihil natus sunt provident. Et hic deserunt exercitationem veniam, porro eligendi fuga. Tenetur repellat quod ipsum officia, ad aut illum pariatur eveniet numquam totam quo iure. Exercitationem, quisquam! Maxime provident cumque ex quas! Quasi minus officiis expedita autem esse, excepturi maiores quas numquam accusantium? Sit explicabo fugit qui tempore doloribus. Placeat accusantium maxime velit quaerat, quia sint, nam deleniti earum eos ut ad a sit, iste sapiente quae. Minima sed porro esse ullam? Quibusdam ipsum magni adipisci necessitatibus ducimus, pariatur molestias voluptatum voluptatibus aperiam sit. Minima ab labore quas tempora facilis, praesentium ducimus, eaque atque dolorum sunt dolore! Fuga repudiandae, tempore, id tenetur ratione natus dolorem harum fugit, laudantium autem facilis adipisci pariatur iure sunt error reiciendis a officia? Distinctio quae soluta omnis, totam expedita vitae inventore delectus velit dicta suscipit voluptates unde minus cum natus commodi assumenda molestias explicabo esse quaerat doloribus veritatis cumque deleniti quia? Voluptatem placeat minima provident. Provident consectetur suscipit sint. Nam delectus doloribus esse natus aliquam minima, similique corrupti velit quisquam, odit facilis vitae nulla eum voluptatibus non. Nam commodi animi, fugiat atque rerum temporibus. Dignissimos culpa vitae voluptatibus cum, officiis totam eos. Facere tempore fugit, eos doloremque eius illo quaerat dolor id. Nostrum deleniti dolores voluptate. Quibusdam aliquam cumque eos, non consectetur optio possimus asperiores soluta culpa voluptate ipsum blanditiis aliquid aspernatur? At ad laboriosam laudantium ducimus, quisquam pariatur beatae expedita. Debitis molestias provident eligendi delectus, non sequi facere ea incidunt sapiente! Maxime necessitatibus non at adipisci cupiditate asperiores quas nemo, et vel recusandae quae accusamus eum, excepturi eos debitis, voluptas vero error tenetur hic sint. Cum aliquam, doloremque, aliquid officia eligendi in voluptas voluptates fugiat facilis esse voluptate aut itaque cupiditate eaque quisquam! Ipsa, molestiae. Exercitationem, rerum nisi culpa obcaecati quia asperiores veniam et?</p>
        </div>
    </section>

<?php 
include '../sections/footer.php';
include '../sections/htmlend.php';
?>