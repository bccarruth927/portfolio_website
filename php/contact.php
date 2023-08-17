<?php
    #This is where the main PHP code is

    #Variables for the form data
    $full_name = "";
    $email = "";
    $phone = "";
    $subject = "";
    $message = "";
    $server_validation = "";

    #Conditional for if the form was submitted via the POST method
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        #Sanitize the raw input data
        $raw_full_name = trim(htmlspecialchars($_POST["full_name"]));
        $raw_email = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
        $raw_phone = trim(preg_replace('/[^0-9]/', '', $_POST["phone"]));
        $raw_subject = trim(htmlspecialchars($_POST["subject"]));
        $raw_message = trim(htmlspecialchars($_POST["message"]));

        #Validate the name input
        if ($raw_full_name === "") {
            $server_validation .= "Please include a name. This is a required field.<br>";
        } elseif (strlen($raw_full_name) > 50) {
            $server_validation .= "Your name should be less than 50 characters.<br>";
        } else {
            if (!preg_match('/^[A-Za-z\s]+$/', $raw_full_name)) {
                $server_validation = "Your name contains invalid characters. Please review them.<br>";
            } else {
                $full_name = $raw_full_name;
            };
        };

        #Validate the email input
        if ($raw_email === "") {
            $server_validation .= "Please include an email address. This is a required field.<br>";
        } elseif (strlen($raw_email) > 50) {
            $server_validation .= "Your email should be less than 50 characters.<br>";
        } else {
            if (!filter_var($raw_email, FILTER_VALIDATE_EMAIL)) {
                $server_validation .= "Please enter a valid email address.<br>";
            } else {
                $email = $raw_email;
            };
        };

        #Validate the phone input
        if ($raw_phone === "") {
            $server_validation .= "Please include a phone number. This is a required field.<br>";
        } elseif (strlen($raw_phone) !== 10) {
            $server_validate .= "Your phone number should be 10 digits long.<br>";
        } else {
            if (!filter_var($raw_phone, FILTER_VALIDATE_INT)) {
                $server_validation .= "Please use only numbers for your phone number.<br>";
            } else {
                $phone = $raw_phone;
            };
        };

        #Validate the subject input
        if ($raw_subject === "") {
            $server_validation .= "Please include a subject for your message. This is a required field.<br>";
        } elseif (strlen($raw_subject) > 50) {
            $server_validation .= "Your subject should be less than 50 characters.<br>";
        } else {
            $subject = $raw_subject;
        };

        #Validate the message input
        if ($raw_message === "") {
            $server_validation .= "Please include a message. This is a required field.<br>";
        } elseif (strlen($raw_subject) > 1200) {
            $server_validation .= "Your message should be less than 1200 characters.<br>";
        } else {
            $message = $raw_message;
        };
    };
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brenden Carruth - ePortfolio - Contact Me!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/contact.styles.css">
    <!--Links to internal fontawesome css and webfont folders-->
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/solid.css">
</head>

<body>

    <!--The main header with navigation menu and logo-->
    <header>
        <nav>
            <ul class="menu">
                <li class="logo"><a href="#">Brenden Carruth</a></li>
                <li class="item"><a href="../index.html">Home</a></li>
                <li class="item"><a href="./about.html">About</a></li>
                <li class="item"><a href="./projects.html">Projects</a></li>
                <li class="item"><a href="./contact.html">Contact</a></li>
                <li class="item button secondary"><a target="_blank" href="../pdf/Resume.pdf">Resume</a></li>
                <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="intro">
                <div>
                    <h1>Contact Me!</h1>
                    <p>
                        Hey there! I'm glad you decided to stop by and see how you can contact me! The best way to do so
                        will
                        be the contact form provided. If that's not your thing you can also reach me through my email
                        at:<br>
                        <strong>brecarr1997@aol.com</strong><br>
                        You can also contact me through these social media links!<br>
                    <div class="contact-socials">
                        <a target="_blank" href="https://www.facebook.com/brenden.carruth"><i
                                class="fa-brands fa-facebook fa-2x"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/brenden-carruth"><i
                                class="fa-brands fa-linkedin fa-2x"></i></a>
                    </div>
                    </p>
                </div>
            </div>
            <div class="form">
                <form action="" method="POST" name="contact-form" id="contact-form">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" value="<?=$full_name?>" placeholder="Full Name...">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?=$email?>" placeholder="example@abc.com...">
                    <label for="phone">Phone #:</label>
                    <input type="text" id="phone" name="phone" value="<?=$phone?>" placeholder="XXXXXXXXXX...">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" value="<?=$subject?>" placeholder="Subject...">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" placeholder="This form is currently deactivated! But please experiment with the validation!"></textarea>
                    <input type="submit" id="submit" name="submit"><br>
                    <span id="server-error" style="color:red"><?=$server_validation?></span>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="socials">
            <a target="_blank" href="https://www.facebook.com/brenden.carruth"><i
                    class="fa-brands fa-facebook fa-2x"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/brenden-carruth"><i
                    class="fa-brands fa-linkedin fa-2x"></i></a>
        </div>
        <div class="copyright">
            <p>
                &copy;Brenden C. Carruth
            </p>
        </div>
    </footer>

    <!--JavaScript Files-->
    <script src="../js/jquery.js"></script>
    <script src="../js/mobile-toggle.js" async defer></script>
    <!--JQuery Validation Plugin-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="../js/validate.js"></script>
</body>

</html>