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
    <link rel="stylesheet" href="csss/style1.css">
 
</head>
<body>

  
       
     
     
    
      

   

	
<header class="header">
        <span class="logo float-sm-start float-md-start float-lg-start " style="width: 20%;">  <img src="images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </span>
        <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

        <nav class="navbar w3-hide-small w3-hide-medium  " style="width: 80%;">
    
        <a  href="http://localhost/xampp/help/index2.php"  >home</a>
            <a  href="http://localhost/xampp/help/about.php"  >about us</a>
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
    <section class="and " id="">
<div class="symptom-note margin-bottom mt-7  ">
    <div class="medium-up-3">
        <div class="step-1 column">
            <p>1. Identify the area of the complaint in the body to be diagnosed  </p>
            <img class="lazy icon text-center" width="57" height="60" src="https://static.webteb.net/imgs/symptom/3.png" data-original="https://static.webteb.net/imgs/symptom/step-3.png" alt="تحديد الشكوى">
        </div>
        <div class="step-2 column">
            <p>2. Answer questions to clarify the situation</p>
            <img class="lazy icon text-center" width="57" height="60" src="https://static.webteb.net/imgs/symptom/1.png" data-original="https://static.webteb.net/imgs/symptom/step-2.png" alt="توضيح الحالة">
        </div>
        <div class="step-3 column">
            <p>3. Get a diagnosis of the possible causes of your condition and an explanation of them</p>
            <img class="lazy icon text-center" width="57" height="60" src="https://static.webteb.net/imgs/symptom/2.png" data-original="https://static.webteb.net/imgs/symptom/step-1.png" alt="تشخيص للاسباب">
        </div>
    </div>
</div>
    </section>
   
    <div class="white-bg block">
        <div class="s-head w3-center">
            <h1 class="bold w3-center text-black">Start by choosing a category</h1>
        </div>
        <div class="body">
            <div class="padding-sl">
                <div class="block fc">
                    <span class="label">Type</span>
                    <div class="small-up-3">
                        <div class="column">
                            <label class="radio">
                                <input type=" radio " class="hidden" name="symptomOption" value="0">
                                <a class="bold  w3-hover-black w3-hover-text-white" href="http://localhost/xampp/help/man.php">man</a>
                            </label>
                        </div>
                        <div class="column">
                            <label class="radio">
                                <input type="radio" class="hidden" name="symptomOption" value="1">
                                <a class="bold  w3-hover-black w3-hover-text-white" href="http://localhost/xampp/help/woman.php">woman</a>
                            </label>
                        </div>
                        <div class="column">
                            <label class="radio">
                                <input type="radio" class="hidden" name="symptomOption" value="2">
                                <a class="bold  w3-hover-black w3-hover-text-white " href="http://localhost/xampp/help/child.php">child</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <img class="symptoms" width="258" height="337" src="https://static.webteb.net/new-webteb/symptom/symptoms.jpg" alt="مشخص الأعراض - ويب طب">
    </div>
    
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
<script src="js/script.js"></script>
<script src="js/an.js.js"></script>
<script src="js/aboute.js"></script>
</body>
</html>