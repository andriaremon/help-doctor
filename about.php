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
    <link rel="stylesheet" href="csss/ab.css">
    <link rel="stylesheet" href="csss/stl.css">
    <link rel="stylesheet" href="css/about.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header class="header">
        <span class="logo float-sm-start float-md-start float-lg-start " style="width: 20%;">  <img src="images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </span>
        <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

        <nav class="navbar   w3-hide-small w3-hide-medium " style="width: 80%;">
    
        <a  href="http://localhost/xampp/help/index2.php"  >home</a>
            <a  href="http://localhost/xampp/help/about.php" class="active" >about us</a>
            <a  href="http://localhost/xampp/help/some diseases.php" >some diseases </a>
            <a href="http://localhost/xampp/help/Untitled-1.php" >Diagnosed symptoms</a>
            <p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>
        </nav>
       
        
</header>
<nav class="w3-sidebar2 w3-animate-top w3-hide-large float-sm-end  float-md-end  w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
 
</div>
<a class="w3-bar-item w3-button w3-text-white"  href="http://localhost/xampp/help/index2.php#home">home</a>
<a class="w3-bar-item w3-button w3-text-black" href="http://localhost/xampp/help/about.php" >about </a>
<a class="w3-bar-item w3-button  w3-text-white  "  href="http://localhost/xampp/help/index2.php#doctor">doctors</a>
<a class="w3-bar-item w3-button  w3-text-white  "     href="http://localhost/xampp/help/some diseases.php">some diseases </a>
<a class="w3-bar-item w3-button  w3-text-white  "    href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
<p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>

</nav>
       

    <section class="home" id="#home" >
        <div class="home-content">
            <h1>doctor<span> at home</span></h1>
            <div class="text-animate">
                <h3>Our goal</h3>
            </div>
            <p>We have noticed that there are many medical sites that give information about diseases, and because there are no sites that give medical advice and help the patient, the patient who needs   </p>
            <p>advice must come to know what the disease means, so we created a site that aims to help the patient first by giving Medical advice helps to know the disease and its treatment </p>
     
        </div>
     <div class="home-sci  ">
     
       <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
       <a href="https://mail.google.com/mail/u/0/#inbox"><i class="bx bxl-google"></i></a>
       <a href="https://www.youtube.com/@doctorhome-iv3zn"><i class="bx bxl-youtube"></i></a>
       <a href="https://twitter.com/doctorhome49981"><i class="bx bxl-twitter"></i></a>
   </div>
     </section>
     
 
<section class="and doctors" id="doctor">

    <h1 class="heading w3-text-red"> team <span class="w3-text-black"> work</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="img" src="images/اندريل 2.jpg" alt="">
            <h3>Andria Remon</h3>
            <h4 class="type">backend</h4>
       <span> (Php and javascrpt)   </span>
         
        </div>

        <div class="box">
            <img class="img" src="images/فادي شنودة.jpeg" alt="">
            <h3>Fadi Shenouda</h3>
            <h4 class="type">front</h4>
            <span> (Html and Css)   </span>
      
        </div>

        <div class="box">
            <img class="img" src="images/محمد الثي.jpeg" alt="">
            <h3>Mostafa mohamed</h3>
            <h4 class="type">front</h4>
       <span> (Html and Css)   </span>
        </div>

        <div class="box">
            <img class="img" src="images/احمد سعيد.jpeg" alt="">
            <h3>Ahmed Sabry</h3>
            <h4 class="type">Data </h4>
       <span> Data collection   </span>
   
     
        </div>

        <div class="box">
            <img class="img" src="images/احمد ميدو.jpeg" alt="">
            <h3>Ahmed Mohamed Said</h3>
            <h4 class="type">Data </h4>
       <span> Data collection  </span>
  
        </div>

        <div class="box">
            <img class="img" src="images/TH]D.jpeg" alt="">
            <h3>Philopateer Ashraf</h3>
            <h4 class="type">graphics</h4>
     
    
        </div>
        <div class="box">
            <img class="img" src="images/حمص.jpeg" alt="">
            <h3>Ahmed Emad</h3>
            <h4 class="type">graphics</h4>
     
        </div>

        <div class="box">
            <img class="img" src="images/روميساء.jpeg" alt="">
            <h3>Romisaa  Ahmed</h3>
            <h4 class="type">word</h4>
      
        </div>

        <div class="box">
            <img class="img" src="images/رنيا.jpeg" alt="">
            <h3>Rania Hussein</h3>
            <h4 class="type">word</h4>
      
        </div>
    </div>

</section>
    
    </section>
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