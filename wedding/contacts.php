<?php
//   ( ALTER TABLE tablename AUTO_INCREMENT = 1 )    reset the increments at mysql
include 'class/db.php';
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$db = new db();
$db->connectToDb();

    $fName = '';
    $lName = '';
    $emailAdress = '';
    $message = '';
    $contactsSent = '';
    $errorMessage = '';

    $fnameErr = '';
    $lnameErr = '';
    $emailAdressErr = '';
    $messageErr = '';

    $borderClass1 = '';
    $borderClass2 = '';
    $borderClass3 = '';
    $borderClass4 = '';

    $brackets = [];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['firstName']) === true) {
            $borderClass1 = 'redinput';
            $fnameErr = "<p>Enter your name</p>";
        } else {
            $fName = test_input($_POST['firstName']);
            if(preg_match("/^[a-zA-Z ]*$/",$fName)) {
                $borderClass1 = 'greeninput';
            } else {
                $fnameErr = "<p>Your name contains symbols</p>";
                $borderClass1 = 'redinput';
            }
            
        }

        if(empty($_POST['lastName']) === true) {
            $borderClass2 = 'redinput';
            $lnameErr = "<p>Enter your last name</p>";
        } else {
            $lName = test_input($_POST['lastName']);
            if(preg_match("/^[a-zA-Z ]*$/",$lName)) {
                $borderClass2 = 'greeninput';
            } else {
            $lnameErr = "<p>Your last name contains symbols</p>";
            $borderClass2 = 'redinput';
            }
        }

        if(empty($_POST['emailAdress']) === true) {
            $borderClass3 = 'redinput';
            $emailAdressErr = '<p>Enter your email</p>';
        } else {
            $emailAdress = test_input($_POST['emailAdress']);
            if(filter_var($emailAdress, FILTER_VALIDATE_EMAIL)) {
                $borderClass3 = 'greeninput';
            } else {
                $emailAdressErr = "<p>Your email adress not correct</p>";;
                $borderClass3 = 'redinput';
            }
            
        }

        if(empty($_POST['messageTextAREA']) === true) {
            $borderClass4 = 'redinput';
            $messageErr = "<p>Enter message</p>";
        } else {
            // print_r($_POST['messageTextAREA']);
            // die();
            $message = test_input($_POST['messageTextAREA']);
            if(preg_match("/^[a-zA-Z ]*$/",$message)) {
                $borderClass4 = 'greeninput';
            } else {
            $messageErr = "<p>Your message contains symbols</p>";
            $borderClass4 = 'redinput';
            }
        }

        // Jeigu tusti visi laukai ismes zinute
         if(empty($_POST['firstName']) && empty($_POST['lastName']) && empty($_POST['emailAdress']) && empty($_POST['messageTextAREA'])) {
            $fnameErr = '';
            $lnameErr = '';
            $emailAdressErr = '';
            $messageErr = '';
            $errorMessage = '<p>Fill up all fields</p>';
            // array_push($brackets, ["Name" => $_POST['firstName'],"Last Name" => $_POST['lastName'],"Email Adress" => $_POST['emailAdress'],"Message" => $_POST['messageTextAREA'],]);
            // echo("<pre>");
            // var_dump($brackets);
            // echo("</pre>");
        } else {
            $errorMessage = '';
        }

        // issius duomenis i db jeigu nebus empty laukai ir visi atitinka validacijas
        if (!empty($fName) && !empty($lName) && !empty($emailAdress) && !empty($message)) {
            if(preg_match("/^[a-zA-Z ]*$/",$fName) && preg_match("/^[a-zA-Z ]*$/",$lName) && filter_var($emailAdress, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z ]*$/",$message)) {
                $contactsSent = '<p> Thanks for writting us </p>';
                $db->contacts($fName,$lName,$emailAdress,$message);
           }

        }



    } // IF END ////////////////////////////////////////

    function test_input($data) {
        $data = trim($data); // apkarpo white space 
        $data = stripslashes($data); // istrins visus pasvirus bruksnius \ /
        $data = htmlspecialchars($data); // nukerpa html charakters
        return $data;
      }


?>

<?php
// html top
include 'sections/htmltop.php';
include 'sections/header.php';
?>

<section class="padding-112">
        <div class="container my-works">
            <h4 id="contact">Contact</h4>
            <h2>Get in Touch</h2>
            <div class="php-correct"> <?php echo($contactsSent); ?></div>
            <div class="php-error"><?php echo($errorMessage); ?></div>
            <div class="contact-container">
                <div class="form-div-contacts">
                    <form action="contacts.php#contact" method="POST">
                        <!-- ERROR MESSAGES -->
                    <div class="div-holding-input-names margin-zero">
                            <div class="names php-error">
                                <?php echo $fnameErr; ?>
                            </div>
                            <div class="names php-error">
                                <?php echo $lnameErr; ?>
                            </div>
                        </div>
                        <!------------------------>
                        <div class="div-holding-input-names">
                            <div class="names m-bottom-50px">
                                <input value="<?php echo $fName ?>" class="<?php echo $borderClass1 ?>" id="fname" type="text" placeholder="First name" name="firstName">
                            </div>
                            <div class="names">
                                <input value="<?php echo $lName ?>" class="<?php echo $borderClass2 ?>" id="lname" type="text" placeholder="Last name" name="lastName">
                            </div>
                        </div>
                        <!-- ERROR MESSAGES -->
                        <div class="names php-error">
                            <?php echo $emailAdressErr; ?>
                        </div>
                        <input value="<?php echo $emailAdress ?>" class="einput <?php echo $borderClass3 ?>" type="emial" placeholder="Email adress" name="emailAdress">
                        <!--------------------->
                        <!-- ERROR MESSAGES -->
                        <div class="names php-error">
                            <?php echo $messageErr; ?>
                        </div>
                        <textarea class="<?php echo $borderClass4 ?>" name="messageTextAREA" placeholder="Write your message:"><?php echo $message?></textarea>
                        <!-------------------->
                        <input id="btn" class="contact-btn" type="submit" value="SEND MESSAGE">
                    </form>
                    <?php $db->closeDb(); ?>
                </div>
                <div class="holding-contact-ul">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>
                            Adress:
                            <br>
                            34 Street Name, City Name Here,
                            <br>
                            United States
                        </li>
                        <li>
                            Phone:
                            <br>
                            +37054812348913
                        </li>
                        <li>
                            Email:
                            <br>
                            info@yourdomain.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Footer
    include 'sections/footer.php';
    ?>
    <script src="js/slidebtn.js"></script>
    <?php
    include 'sections/htmlend.php';
    ?>