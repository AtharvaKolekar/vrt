<?php

$jsonFilePath = 'data.json';
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

$htmlOutput = ''; // Initialize an empty variable to store HTML code

foreach ($data as $entry) {
    if ($entry['type'] == "Captain") {
        $imgsrc = htmlspecialchars($entry['image_url'], ENT_QUOTES, 'UTF-8');
        $t = htmlspecialchars($entry['title'], ENT_QUOTES, 'UTF-8');
        $s = htmlspecialchars($entry['subtitle'], ENT_QUOTES, 'UTF-8');



        // Append HTML code to the variable
        $htmlOutput =  $htmlOutput . <<<HTML
        <div class='frame-wrap'>
            <div class='frame' style='background-image: url($imgsrc);'>
                <div class='dd'>
                    <h3>$t</h3>
                    <p>$s</p>
                </div>
            </div>
        </div>
        HTML;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - VRT</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/home.css">

</head>
<body>
    <div id="main">
        <div class="header" id="header" >
            <div class="up">
                <div onclick="location.href='./'">
                    <img class="" src="./img/logo.webp" alt="logo" height="40">
                </div>
                
            </div>
            <div class="funding">
                <!-- <a class="fund" href="#">Crowd Funding</a> -->
            </div>
            <div class="down">
                <a href="#">Home</a><p>|</p>
                <a href="#">About Us</a><p>|</p>
                <a href="#">The Team</a><p>|</p>
                <a href="#">Achievments</a><p>|</p>
                <a href="#">Events</a><p>|</p>
                <a href="#">Gallery</a><p>|</p>
                <a href="#contact-us">Contact Us</a>
                <a class="fund" href="#">Crwdo Funding</a>
                
            </div>
           
        </div>
        <div class="p">
            <h1>Our <span>Team</span>
                <div class="below">
                    <img src="./img/f1.png" alt="f">
                </div>
            </h1>

            <?php echo $htmlOutput; ?>


        </div>
        <footer>
            <div class="row primary">
              <div class="column about">
            
              <h3>VANGUARD RACING</h3>
            <p>A team of diverse, passionate undergraduate engineering students dedicated to crafting and competing with an All-Terrain Vehicle (ATV), nurturing technical prowess while fostering camaraderie and excellence in esteemed competitions like Baja SAE, Mega-ATV, and Enduro Student India.</p>
            
              <div class="social">
                <a href="https://www.facebook.com/vanguardracing" target="_blank"><img src="./img/facebook.png" alt="facebook"></a>
                <a href="https://www.instagram.com/vanguard.racing/" target="_blank"><img src="./img/instagram.png" alt="instagram"></a>
                <a href="https://www.linkedin.com/in/pce-vanguard-36b203218/" target="_blank"><img src="./img/linkedin.png" alt="linkedin"></a>
                <a href="https://youtube.com/@vanguardracing636" target="_blank"><img src="./img/youtube.png" alt="youtube"></a>
              </div>
            </div>
            
            <div class="column links">
            <h3>Contacts</h3>
            
             <ul>
            
              <li>
               <a href="tel:+91 93263 68553">Harshvardhan Kedare (Captain) <br>+91 93263 68553</a>
              </li>
              <li>
                <a href="tel:+91 84540 97707">Atharva Kolekar (Website) <br>+91 84540 97707</a>
               </li>
              <li>
               <a href="mailto:vanguardpce@mes.ac.in">Email:<br>vanguardpce[at]mes.ac.in</a>
              </li>
              <li>
                <a href="https://maps.app.goo.gl/3rdDuCLvF7wJRNiM9">Address:<br>Pillai College Of Engineering,<br>New Panvel, Navi Mumbai<br>Pincode - 410206</a>
               </li>
             </ul>
            
            </div>
            
            
            <div class="column links">
              <h3>Useful Links</h3>
               <ul>
                <li>
                 <a href="team.html">Team</a>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="sponsors.html">Sponsors</a>
                </li>
                <li>
                 <a href="privacy.html">Privacy Policy</a>
                </li>
                <li>
                <a href="terms.html">Terms & Conditions</a>
                </li>
                <li>
                    <a href="#about-us">About Us</a>
                </li>
                <li>
                <a href="contact-us.html">Contact Us</a>
                </li>
              </ul>
            </div>
            
            <div class="column subscribe">
             <h3>Find Us</h3>
             <iframe title="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283394!2d73.12548141469603!3d18.99020098713722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1660568572635!5m2!1sen!2sin" width="100%" height="180" style="max-width: 300px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
            </div>
            
            </div>
            
            <div class="row copyright">
              <p>Copyright &copy; 2024 Vanguard Racing </p>
                <p>
                    <a href="https://pce.ac.in">PCE</a>
                    <a href="https://mes.ac.in">MES</a>
                </p>

              
            </div>
            </footer>
    </div>
</body>
<script src="./scripts/s1.js"></script>
</html>