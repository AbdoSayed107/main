<?php

if (isset($_POST['submit'])){

    $mailto = 'sayedzaky98@gmail.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Your message submitted succesfully";
    $message = "Name:  " . $name . "<br> wrote the following message" . "\n\n" . $_POST['message'];
    $message2 = "Dear " . $name . "\n\n" . "Thank you for contact us. We will get back to you shortly";
    $headers = "From: " . $from;
    $headers2 = "From: " . $mailto;

    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($mailto, $subject2, $message2, $headers2);

    if ($result) {
        echo '<script type="text/javascrip"> alert("Your message was sent succesfully, we will contact you shortly!") </script>';
    }else {
        echo '<script type="text/javascrip"> alert("Submission failed! Try again later.") </script>';

    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f28a90b0db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Abdulrahman Sayed</title>
</head>

<body>
    <div class="header">
        <div class="width" class="header">
            <div class="logo">
                <img src="https://www.linkpicture.com/q/Logo_56.png" alt="My Logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#portfolio">contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="home">
        <div class="width">
            <div class="info">
                <div class="pic">
                    <img src="images/Me.png" alt="My picuture">
                </div>
                <div class="title">
                    <div class="name">
                        <h1>abdulrahman</h1>
                        <h2>sayed</h2>
                    </div>
                    <div class="job">
                        <h2>I'm a</h2>
                        <h1>Civil Engineer</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="support">
            <h3><a href="#">support me</a></h3>
        </div>
        <div class="social">
            <ul>
                <li class="facebook">
                    <a href="https://www.facebook.com/ZAbdoSayed/">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="https://www.linkedin.com/ZAbdoSayed/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://www.twitter.com/ZAbdoSayed/">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/ZAbdoSayed/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="services">
        <div class="width">
            <h2>Services</h2>
            <div class="nav">
                <div class="first">
                    <div class="content">
                        <div class="image">
                            <img src="images/videos.jpg" alt="video">
                        </div>
                    </div>
                    <h3>videos</h3>
                </div>
                <div class="second">
                    <div class="content">
                        <div class="image">
                            <img src="images/websites.jpg" alt="websites">
                        </div>
                    </div>
                    <h3>websites</h3>
                </div>
                <div class="third">
                    <div class="content">
                        <div class="image">
                            <img src="images/courses.jpg" alt="courses">
                        </div>
                    </div>
                    <h3>courses</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="width">
            <h2>About</h2>
            <p>
                I am Abdulrahman Sayed. I am a civil engineer and a trainer. I am interested in everything related to
                engineering, students and youth activities. I built this community to help student and everyone who
                wants to learn more about Engineering and how to become professional at computer.
            </p>
        </div>
    </div>

    <div class="contact">
        <div class="width">
            <h2>Contact</h2>
            <div class="nav">
                <div class="logo">
                    <img src="images/Logo.png" alt="My Logo">
                </div>

                <div class="email">
                    <form action="index.php" method="POST">
                        <input type="text" id="name" placeholder="Enter your name" required>
                        <input type="text" id="phone" placeholder="Enter your phone number" required>
                        <input type="text" id="subject" placeholder="Enter your Subject" required>
                        <input type="email" id="email" placeholder="Enter your email" required>
                        <textarea id="message" cols="30" rows="4" placeholder="Enter your message"></textarea>

                        <button id="submit" type="submit"> Sned </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        Made By: <a href="#">Me</a>
    </div>






</body>

</html>