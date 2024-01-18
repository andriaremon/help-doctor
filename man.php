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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="csss/stl.css">
   
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>

	
<header class="header">
        <span class="logo float-sm-start float-md-start float-lg-start " style="width: 20%;">  <img src="images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </span>
        <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

        <nav class="navbar w3-hide-small w3-hide-medium  " style="width: 80%;">
    
        <a  href="http://localhost/xampp/help/index2.php"  >home</a>
            <a  href="http://localhost/xampp/help/about.php" >about us</a>
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
<a class="w3-bar-item w3-button w3-text-white"  href="http://localhost/xampp/help/index2.php#home">home</a>
<a class="w3-bar-item w3-button w3-text-white" href="http://localhost/xampp/help/about.php" >about </a>
<a class="w3-bar-item w3-button  w3-text-white  "  href="http://localhost/xampp/help/index2.php#doctor">doctors</a>
<a class="w3-bar-item w3-button  w3-text-white  "     href="http://localhost/xampp/help/some diseases.php">some diseases </a>
<a class="w3-bar-item w3-button  w3-text-black  "    href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
<p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>

</nav>
    
    <div class="padding">
        <div class="social-s w3-panel  mb-2">
            <p class="  w3-large w3-serif symptom-note w3-black w3-text-white ">
                <i class="fa fa-quote-left w3-xxlarge xw3-margin-left w3-left"></i>
            </br>
                Welcome To The Diagnostic Of Men Health Symptoms. Here You Can Diagnose Your Symptoms And Determine Their Possible Health Conditions By Answering A Series Of Questions. But First You Have To Choose The Area Where The Symptoms You Complain Of Appear In Your Body:
                <i class="fa fa-quote-right w3-xxlarge xw3-margin-right w3-right"></i>
            </p>
        <div class="medium-up-3">
                <div class="column body-select-part">
                    <div>
                                
<img id="s-avatar" src="./imge/s_man_big.jpg"  data-originalimg="./imge/s_man_big (1).jpg" alt="male avatar">
<img id="belly" src="./imge/man_belly.jpg" class="s-display-away" alt="belly">
<img id="chest_and_back" src="./imge/s_man_big_chest.jpg" class="s-display-away" alt="chest and back">
<img id="ear_nose_throat" src="./imge/s_man_big_ear_nose_throat.jpg" class="s-display-away" alt="ear nose throat">
<img id="eyes" src="./imge/s_man_big_eyes.jpg" class="s-display-away" alt="eyes">
<img id="arms_and_hands"  class="s-display-away" alt="hands and arms">
<img id="head_and_nick" src="./imge/s_man_big_head_nick.jpg" class="s-display-away" alt="head and nick">
<img id="legs"  class="s-display-away" alt="legs">
<img id="other"  class="s-display-away" alt="other">
<map name="bodypartmap" id="js-body-part-map">

<area  coords="62,42,84,51"  coords="58,7,89,21"  alt="head_and_nick">
<area  coords="85,23,91,33" coords="56,23,61,34" coords="69,25,78,42"   alt=" ear_nose_throat">
<area  coords="38,60,106,103" data-id="chest_and_back"   alt="chest_and_back">
<area  coords="101,106,98,117,97,123,99,128,99,134,99,141,100,146,101,149,72,187,44,156,49,142,48,132,49,120,47,110,45,106" >
</map>

                    </div>
                </div>
            <div class="symptom part-select part-select-text column list-select-part">
                <h1 class="bold b-border text-lg-start text-md-start text-sm-start">Choosing a part of a man </h1>
                <ul id="bodyparts " class="parts list hover">
                        <li id="hide" class="text-lg-start text-md-start text-sm-start  " data-bodypart="head_and_nick">
                            <a title="head_and_nick" data-href="head_and_nick" href="head_and_nick" data-id="head_and_nick">
                                head and neck
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                  </svg>
                            </a>  
                        </li>
                   
                        <li id="neck" class="text-lg-start text-md-start text-sm-start" data-bodypart="ear_nose_throat">
                            <a title="ear_nose_throat" data-href="ear_nose_throat" href="ear_nose_throat" data-id="ear_nose_throat">
                                ear nose throat
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                  </svg>
                            </a>  
                        </li>
                        <li id="back" class="text-lg-start text-md-start text-sm-start" data-bodypart="chest_and_back">
                            <a title="chest_and_back" data-href="chest_and_back" href="chest_and_back" data-id="chest_and_back">
                                chest and back
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                  </svg>
                            </a>  
                        </li>
                      
                        <li id="bel" class="text-lg-start text-md-start text-sm-start" data-bodypart="belly">
                            <a title="belly" data-href="male/belly" href="male/belly" data-id="belly">
                                belly
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                  </svg>
                            </a>  
                        </li>
                      <!-- Default dropright button -->
<!-- Default dropright button -->

  
  <!-- Split dropright button -->
 
                     
                </ul>
            </div>
            <div class="symptom part-select column" id="symptomsByBodyPart">
                <div id="bodyPartsContainer" style="display: none;">
                    
<div id="symptomsList">
<h1 id="bodyPartHeader" class="bold b-border text-lg-start text-md-start text-sm-start  ">head and neck</h1>
</div>

<ul class="parts list" id="symptomsUl"><li class="symptom-item   text-lg-start text-md-start text-sm-start " ><a href="http://localhost/xampp/help/man/header/Hair loss.php" >Hair loss in men</a></li><li class="symptom-item  text-lg-start text-md-start text-sm-start  "><a href="http://localhost/xampp/help/man/header/Headache.php" >Headache</a></li><li class="symptom-item  text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/header/Dizziness.php" >Dizziness when standing</a></li><li class="symptom-item  text-lg-start text-md-start text-sm-start  "><a href="http://localhost/xampp/help/man/header/Neck pain.php" >Neck pain</a></li></ul>
                </div>
            </div>
   
            <div class="symptom part-select column" id="symptomsByBodyPart">
                <div id="body" style="display: none;">
                    
<div id="symptomsList">
<h1 id="bodyPartHeader   " class="bold b-border  text-lg-start text-md-start text-sm-start">  ear nose throat</h1>
</div>

<ul class="parts list" id="symptomsUl"><li class="symptom-item text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/ear nose throat/Chronic cough.php" >Chronic cough</a></li><li class="symptom-item text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/ear nose throat/Sore throat.php" >Sore throat</a></li></ul>
                </div>
            </div>

            <div class="symptom part-select column" id="symptomsByBodyPart">
                <div id="Container" style="display: none;">
                    
<div id="symptomsList">
<h1 id="bodyPartHeader " class="bold b-border  text-lg-start text-md-start text-sm-start  ">chest and back</h1>
</div>

<ul class="parts list" id="symptomsUl"><li class="symptom-item text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/chest and back/chest pain.php" >chest pain</a></li><li class="symptom-item text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/chest and back/heart palpitations.php" >heart palpitations</a></li><li class="symptom-item text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/chest and back/Shortness of breath in adults.php" >Shortness of breath in adults</a></li></ul>
                </div>
            </div>

            <div class="symptom part-select column" id="symptomsByBodyPart">
                <div id="Par" style="display: none;">
                    
<div id="symptomsList">
<h1 id="bodyPartHeader  " class="bold b-border  text-lg-start text-md-start text-sm-start">abdomen </h1>
</div>

<ul class="parts list" id="symptomsUl"><li class="symptom-item   text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/abdomen/pain in the abdomen.php"> pain in the abdomen</a></li><li class="symptom-item   text-lg-start text-md-start text-sm-start "><a href="http://localhost/xampp/help/man/abdomen/muscle weakness.php">muscle weakness</a></li></ul>
                </div>
            </div>

            <div class="restart block">
                <a href="http://localhost/xampp/help/Untitled-1.php" title="مشخص ألأعراض - ابدأ تشخيص جديد" class="button bold border centered">
                    New diagnosis
                </a>
            </div>
        </div>
    </div>
</div>
      <!-- Default dropright button -->
           

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
<script src="js/an.js.js"></script>
<script src="js/aboute.js"></script>
<script src="js/script.js"></script>
</body>
</html>



