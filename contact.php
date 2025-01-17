<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+AR:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/mediaquery.css" />
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
</head>
<body id="about-us-body">
    <header class="header2" id="home">
        <nav>
          <div class="nav__header">
            <div class="nav__logo">
              <a href="#">
                <img src="Images/Capture1-removebg-preview.png" alt="logo" />
              </a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
              <i class="ri-menu-line"></i>
            </div>
          </div>
          <ul class="nav__links" id="nav-links">
            <li><a href="home.html">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="service.html">SERVICES</a></li>
            <li class="nav__logo">
              <a href="#">
                <img src="Images/Capture-removebg-preview.png" alt="logo" />
              </a>
            </li>
            <li><a href="#client">CLIENT</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
          </ul>
        </nav>
        <div id="header5-text">
            <h1>Contact Us</h1>
          </div>
      </header>

      <div class="contact-details">
        <div class="contact-section1">
            <h1>Get In Touch</h1>
            <hr>
            <i style="color: #a363aa;;line-height: 30px;" class="ri-mail-send-line"> Email</i>
            <p>Pixel.Bloom@gmail.com</p>

            <i style="color: #a363aa;; line-height: 30px;" class="ri-phone-fill"> Phone</i>
            <p>+91-9163515627</p>
            <p>+91-9880477244</p>

        </div>
        <div class="form-section">
            <h2>Fill out the contact form below and our team will reach out within 24-48 hours.</h2>
            <div class="contact-form">
       
                <form action="" method="post" id="contactForm">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                  </div>
                  <button type="submit" name="send">Send Message</button>
                  <p class="success-message">Your message has been sent!</p>
                </form>
              </div>


        </div>
      </div>

      <div>
        <h4 id="locate-us-text">Locate Us</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.093476670145!2d75.90338227406458!3d22.72476672737839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962e2b4f2cca3a5%3A0xdf9f58e56d49b151!2sMayur%20Hospital%20And%20Research%20Centre!5e0!3m2!1sen!2sin!4v1723366020587!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>

    <!-- footer section -->

    <footer id="contact">
        <div class="section__container footer__container">
          <div class="footer__col">
            <img src="Images/Capture1-removebg-preview.png" alt="logo" />
            <div class="footer__socials">
              <!-- <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-youtube-fill"></i></a>
              <a href="#"><i class="ri-pinterest-line"></i></a> -->
              <img src="Images/facebook.png" alt="No Images">
              <img src="Images/instagram.png" alt="No Images">
              <img src="Images/twitter.png" alt="No Images">
              <img src="Images/youtube.png" alt="No Images">
            </div>
          </div>
          <div class="footer__col">
            <ul class="footer__links">
              <li><a href="#home">HOME</a></li>
              <li><a href="#about">ABOUT US</a></li>
              <li><a href="#service">SERVICES</a></li>
              <li><a href="#client">CLIENT</a></li>
              <li><a href="#blog">BLOG</a></li>
              <li><a href="#contact">CONTACT US</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4>STAY IN TOUCH</h4>
            <p>
              Keep up-to-date with all things Capturer! Join our community and
              never miss a moment!
            </p>
          </div>
        </div>
        <div class="footer__bar">
          Copyright © 2024 PixelBloom. All rights reserved |
          Designed By Arsheed Alam
        </div>
        <div class="elfsight-app-cced2392-bffe-4d73-a6d5-55d2aa5d7b7d" data-elfsight-app-lazy></div>
      </footer>

     
      <!-- <script>
        const form = document.getElementById('contactForm');
        const successMessage = document.querySelector('.success-message');
    
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          successMessage.style.display = 'block'; // Show the success message
          form.reset(); // Clear the form
        });
      </script> -->

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="main.js"></script>
    
</body>
</html>

<?php 

  //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];


//Load Composer's autoloader
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'arsheed.muz@gmail.com';                     //SMTP username
    $mail->Password   = 'retk inda ygvr hsqf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('arsheed.muz@gmail.com', 'Contact Form');
    $mail->addAddress('nauman.mum@gmail.com', 'PixelBloom');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Contact Form';
    $mail->Body    = "Sender Name - $name <br> Sender Email - Email - $email <br> message - $message";
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
?>