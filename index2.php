<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login1.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login1.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <!-- custom css file link  -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <link rel="stylesheet" href="csss/w3.css">
    <link rel="stylesheet" href="csss/stl.css">
    <link rel="stylesheet" href="csss/stls.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
        <span class="logo float-sm-start float-md-start float-lg-start " style="width: 20%;">  <img src="images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </span>
        <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

        <nav class="navbar  w3-hide-small w3-hide-medium " style="width: 80%;">
    
        <a  href="http://localhost/xampp/help/index2.php"  >home</a>
            <a  href="http://localhost/xampp/help/about.php" class="active" >about us</a>
            <a  href="http://localhost/xampp/help/some diseases.php" >some diseases </a>
            <a href="http://localhost/xampp/help/Untitled-1.php" class="active">Diagnosed symptoms</a>
            <p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>
        </nav>
       
        
</header>
<nav class="w3-sidebar2 w3-animate-top w3-hide-large float-sm-end  float-md-end  w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
 
</div>
<a class="w3-bar-item w3-button w3-text-black"  href="http://localhost/xampp/help/index2.php#home">home</a>
<a class="w3-bar-item w3-button w3-text-white" href="http://localhost/xampp/help/about.php" >about </a>
<a class="w3-bar-item w3-button  w3-text-black  "  href="http://localhost/xampp/help/index2.php#doctor">doctors</a>
<a class="w3-bar-item w3-button  w3-text-white  "     href="http://localhost/xampp/help/some diseases.php">some diseases </a>
<a class="w3-bar-item w3-button  w3-text-white  "    href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
<p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>

</nav>

    <!-- The slideshow/carousel -->
    <section class=" home video  " id="home">

       
    
        <div class="text-center align-te content w3-animate-right" >
            <h1 class="text">doctor <span class="text-black">at home</span></h1>
     
        </div>

        <div class="imagee   w3-animate-left ">
            <video width="80%%"    controls >
            <source src="images/videoplayback (1).mp4" type="video/mp4">
                <source src="images/videoplayback (1).mp4" type="video/ogg">
            
              </video>
        </div>
    
    </section>
    
    <!-- Left and right controls/icons -->
  
   
<!-- home section starts  -->

<section class="and home " id="home">

    <div class="image w3-animate-left ">
        <img class="img" src="imge/book-img.svg" alt="">
    </div>

    <div class="align-te content w3-animate-right" >
        <h3 >doctor <span class="text-black">at home</span></h3>
        <p class="par"  >A medical website that helps the patient find the right treatment</p>
        <a href="#about" class="btn"> ABOUT US <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->



<!-- icons section ends -->

<!-- services section starts  -->


<!-- services section ends -->

<!-- about section starts  -->

<section class="and about" id="">

    <h1 class="heading w3-animate-bottom w3-text-red"> <span class="w3-text-white"></h1>

    <div class="row">

        <div class="image w3-animate-left">
            <img class="img" src="imge/about-img.svg" alt="">
        </div>

        <div class="content w3-animate-right">
            <h3>doctor <span class="text-black">at home</span></h3>
            <p>we take care of your healthy life</p>
            <hr>
            <p >Our goal is to help him know the disease. By knowing the disease, we give the appropriate treatment without,</p>
            <hr> 
            <p>the need to go to a doctor, but there are some diseases that you must go to the doctor to help you,</p>
            <hr>
            <p> and here we will give you the best doctor from researching people’s reviews</p>
        
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="and doctors" id="doctor">

    <h1 class="heading w3-text-red"> our <span class="w3-text-black">doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="img" src="imge/294341612_506790421245524_5148618083539310060_n.jpg" alt="">
            <h3>Mohamed Sayed Isamil</h3>
            <span>Neurologists</span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
              
            </div>
            <div class="share">
                <a href="https://www.facebook.com/prof.mahmadsayed/?hc_ref=ARRphJ4qgoLGrEcqMY6H7yZ5cZs64KHH4vDCyny3nViAIOpaZnDZVfm2_U_-drQeygA&fref=nf" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/dir/30.0491627,30.9761594/30.0571,31.2387/@30.0407249,31.2475339,11z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href="https://www.vezeeta.com/en/dr/Doctor-mohamed-saeed-ismail-Neurosurgery?fbclid=IwAR2aGzsZH43bCU_pTs9rNI_Sv4jNaipmMbJiyrAFrGXroT0IXoO9KG3bECg" class="fab "><img src="imge/browser-chrome.svg"></a>
             
            </div>
        </div>

        <div class="box">
            <img class="img" src="imge/272903384_2916338318657146_3271297817548342007_n.jpg" alt="">
            <h3>Assem Salem</h3>
            <span>Heart consultant</span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star"  ></i>
              
            </div>
            <div class="share">
                <a href="https://www.facebook.com/dr.assem2017/reviews" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/dir//30.0492871,31.378144/@30.0492109,31.4482489,12z" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href="https://eg.locale.online/--------------1293990621.html" class="fab "><img src="imge/browser-chrome.svg"></a>
            </div>
        </div>

        <div class="box">
            <img class="img" src="imge/137203708_754352881954616_6619597106892114929_n.jpg" alt="">
            <h3>Sherief Elenany</h3>
            <span>brain and nerv surgeory</span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star-half-alt" style="color: gold;" ></i>
            </div>
            <div class="share">
                <a href="https://www.facebook.com/sherief.elenany" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/dir/30.0491627,30.9761594/31.0302941,31.361097/@30.5221179,31.6091403,9z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href="https://www.vezeeta.com/ar/dr/%D8%AF%D9%83%D8%AA%D9%88%D8%B1-%D8%B4%D8%B1%D9%8A%D9%81-%D8%A7%D9%84%D8%B9%D9%86%D8%A7%D9%86%D9%8A-%D8%AC%D8%B1%D8%A7%D8%AD%D8%A9-%D9%85%D8%AE-%D9%88%D8%A7%D8%B9%D8%B5%D8%A7%D8%A8" class="fab "><img src="imge/browser-chrome.svg"></a>
            </div>
        </div>

        <div class="box">
            <img class="img" src="imge/84143529_889061311550380_6475969719181508608_n.jpg" alt="">
            <h3> Abdel Moaty's fortune</h3>
            <span>Thyroid and sugar </span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star"  style="color: gold;"></i>
            </div>
            <div class="share">
                <a href="https://www.facebook.com/dr.Tharwatclinc/" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/dir/30.0491627,30.9761594/30.03872,31.21547/@30.0407249,31.2515865,11z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href="https://www.endocrine-doctor.com/%D8%A7%D9%84%D8%AD%D8%AC%D8%B2?fbclid=IwAR0_jnKUAX0TZ7UJtrvRX4NO4fAS9AFcRjaPStkjlZNRqBv5OXEeHm2hAf8" class="fab "><img src="imge/browser-chrome.svg"></a>
            </div>
        </div>

        <div class="box">
            <img class="img" src="imge/احمد-طارق-غيث-160x160.jpg" alt="">
            <h3>Ahmed Tarik Gheith</h3>
            <span> heart</span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star"  style="color: gold;"></i>
            </div>
            <div class="share">
                <a href="https://www.facebook.com/heartcare.eg/" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/place/30%C2%B006'28.6%22N+31%C2%B016'29.9%22E/@30.1079424,31.2771546,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x8406393d6446bde5!8m2!3d30.1079424!4d31.2749659" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href=https://koshofat.com/dr/171248_%d8%af%d9%83%d8%aa%d9%88%d8%b1-%d8%a3%d8%ad%d9%85%d8%af-%d8%b7%d8%a7%d8%b1%d9%82-%d9%82%d9%84%d8%a8/""" class="fab "><img src="imge/browser-chrome.svg"></a>
               
            </div>
        </div>

        <div class="box">
            <img class="img" src="imge/دكتور-محمود-العربي-160x160.jpeg" alt="">
            <h3>Mahmoud  Alaraby</h3>
            <span>the teeth </span>
            <div class="stars">
                <i class="fas fa-star" style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;" ></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star"  style="color: gold;"></i>
                <i class="fas fa-star-half-alt"  style="color: gold;"></i>
            </div>
            <div class="share">
                <a href="https://www.facebook.com/Dr.Mahmoud.alaraby1/" class="fab  fa-facebook "> </a>
                <a href="https://www.google.com/maps/place/29%C2%B057'52.6%22N+31%C2%B015'43.9%22E/@29.964601,31.26438,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xbd54dfd599d7fc16!8m2!3d29.964601!4d31.2621913" class="fab "><img src="imge/geo-alt-fill.svg" ></a>
                <a href=https://koshofat.com/dr/173196_%d9%85%d8%ad%d9%85%d9%88%d8%af-%d8%ac%d9%85%d8%a7%d9%84-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a/"" class="fab "><img src="imge/browser-chrome.svg"></a>
            </div>
        </div>

    </div>

</section>



<!-- booking section ends -->

<!-- review section starts  -->



<!-- review section ends -->





<div class="footer-dark" id="about">
    <footer>
        <div class="container">
            <div class="row">
            
             
             
                <div class="col item social">
                   
                <a href="https://www.facebook.com/profile.php?id=100092555534126" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.google.com/mail/u/0/#inbox" class="google" ><i class="fab fa-google"></i></a>
                <a href="https://twitter.com/doctorhome49981" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/@doctorhome-iv3zn" class="youtube"><i class="fab fa-youtube "></i></a>
              
        </div>
            </div>
            <p class="copyright">thebes.edu.eg</p>
        </div>
    </footer>
</div>


















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/an.js.js"></script>
<script src="js/aboute.js"></script>

</body>
</html>