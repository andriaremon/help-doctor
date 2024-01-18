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
    <link rel="stylesheet" href="csss/some.css">
    <link rel="stylesheet" href="csss/stl.css">
</head>
<body>
    
<!-- header section starts  -->

<header class="header">
        <span class="logo float-sm-start float-md-start float-lg-start " style="width: 20%;">  <img src="images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </span>
        <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

        <nav class="navbar w3-hide-small w3-hide-medium  " style="width: 80%;">
    
        <a  href="http://localhost/xampp/help/index2.php"  >home</a>
            <a  href="http://localhost/xampp/help/about.php" >about </a>
            <a  href="http://localhost/xampp/help/some diseases.php"class="active" >some diseases </a>
            <a href="http://localhost/xampp/help/Untitled-1.php" >Diagnosed symptoms</a>
            <p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>
        </nav>
       
        
</header>

<!-- header section ends -->
<nav class="w3-sidebar2 w3-animate-top w3-hide-large float-sm-end  float-md-end  w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
 
</div>
<a class="w3-bar-item w3-button w3-text-white"  href="http://localhost/xampp/help/index2.php#home">home</a>
<a class="w3-bar-item w3-button w3-text-white" href="http://localhost/xampp/help/about.php" >about </a>
<a class="w3-bar-item w3-button  w3-text-white  "  href="http://localhost/xampp/help/index2.php#doctor">doctors</a>
<a class="w3-bar-item w3-button  w3-text-black  "     href="http://localhost/xampp/help/some diseases.php">some diseases </a>
<a class="w3-bar-item w3-button  w3-text-white  "    href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
<p> <a href="woman.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>

</nav>



<!-- booking section ends -->

<!-- review section starts  -->



<!-- review section ends -->

<!-- review section starts  -->



<!-- review section ends -->
<section class=" and services" id="services">

    <h1 class="heading w3-text-red"> some<span class="w3-text-black"> diseases</span>(image) </h1>

    <div class="box-container">

        <div class="box w3-animate-left">
            <span class="w3-center" style="width: 30%;">  <img src="images/Diabetes.jpeg" style="width: 100%;"> </span>

            <h2 class="text"> Diabetes</h2>
            <p class="text par">The first type? Here's the answer from Mayo Clinic experts</p>
              <p class="text par" >  Learn about type 1 diabetes with Yogesh Kodva, MD, endocrinologist, MBBS.</p>
              <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Diabetes.php"> Read more</a></button>
            </div>

        <div class="box w3-animate-top">
            <span class="w3-center" style="width: 30%;">  <img src="images/High Blood Pressure.webp" style="width: 100%;"> </span>

            <h2 class="text">High blood pressure </h2>
            <p class="text">It is a common disease that occurs when there is continuous pressure on the walls of the arteries over a long period of time.</p>
             
            <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/High blood pressure.php"> Read more</a></button>
        </div>

        <div class="box w3-animate-right">
            <span class="w3-center" style="width: 30%;">  <img src="images/download (4).jpeg" style="width: 100%;"> </span>
            <h2 class="text">Headache</h2>
            <p class="text" >A headache is defined as a headache that can occur in any part of the head, on both sides of the head, or on one side only</p>
            <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Headache.php"> Read more</a></button>
        </div>
      
        
    </div>
</section>
<section class=" and services" id="services">


    <div class="box-container">

        <div class="box w3-animate-left">
            <span class="w3-center" style="width: 30%;">  <img src="images/download (5).jpeg" style="width: 100%;"> </span>

            <h2 class="text"> Acne</h2>
            <p class="text par">Acne appears on the surface of the skin of the face, neck, chest, back, and shoulders, </p>
              <p class="text par" > as these are the skin areas that contain the largest number of active sebaceous glands.</p>
              <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Acne.php"> Read more</a></button>
            </div>

        <div class="box w3-animate-top">
            <span class="w3-center" style="width: 30%;">  <img src="images/Flu.jpeg" style="width: 100%;"> </span>

            <h2 class="text">flu </h2>
            <p class="text">The flu initially appears as a common cold, but the common cold usually develops slowly, </p>
             <p class="text"> while the flu appears and strikes suddenly, and while the common cold can be a mere fleeting .</p>
             <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php//flu.php"> Read more</a></button>
            </div>

        <div class="box w3-animate-right">
            <span class="w3-center" style="width: 30%;">  <img src="images/Hair Loss.webp" style="width: 100%;"> </span>

            <h2 class="text">hair loss</h2>
            <p class="text">new hair grows in place of the hair that fell, </p>
            <p class="text">and in other cases it is possible to treat the phenomenon of hair loss successfully by going to a dermatologist.</p>
            <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/hair loss.php"> Read more</a></button>
        </div>

        
    </div>
</section>
<section class=" and services" id="services">

 

    <div class="box-container">

        <div class="box w3-animate-left">
            <span class="w3-center" style="width: 30%;">  <img src="images/Allergies.jpeg" style="width: 100%;"> </span>

            <h2 class="text"> Allergies</h2>
            <p class="text par">Symptoms of allergies differ according to the same allergies from one person to another. </p>
             <p class="text par" >Symptoms of allergies may appear in the airways, in the pockets and nasal passages, in the skin, or in the digestive system.</p>
             <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Allergies.php"> Read more</a></button>
            </div>

        <div class="box w3-animate-top">
            <span class="w3-center" style="width: 30%;">  <img src="images/Depression.jpg" style="width: 100%;"> </span>

            <h2 class="text">Depression </h2>
            <p class="text">Symptoms of depression are different and varied; Because depression appears in different forms in different people, </p>
               <p class="text"> for example: symptoms of depression in a 25-year-old may appear differently than those in a 70-year-old.</p>
               <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Depression.php"> Read more</a></button>
            </div>

        <div class="box w3-animate-right">
            <span class="w3-center" style="width: 30%;">  <img src="images/Dental Cavities2.jpeg" style="width: 100%;"> </span>

            <h2 class="text">Dental cavities</h2>
            <p class="text">The initial symptoms of the development of dental caries differ from one case to another,  </p>
            <p class="text"> and they are related to the degree and location of caries. Caries at its inception may not be accompanied by any symptoms or signs, but as the caries intensify, symptoms may appear.</p>
            <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Dental cavities.php"> Read more</a></button>
        </div>

        
    </div>
</section>
<section class=" and services" id="services">

   

    <div class="box-container">

        <div class="box w3-animate-left ">
            <span class="w3-center" style="width: 30%;">  <img src="images/download (1).jpeg" style="width: 100%;"> </span>
            <h2 class="text-center  "> heart disease</h2>
            <p class="text par">Coronary artery disease is a common heart condition that affects the main blood </p>
              <p class="text par" >  vessels that supply the heart muscle. Coronary artery disease is usually caused </p>
              <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/heart disease.php"> Read more</a></button>

            </div>

        <div class="box w3-animate-top">
            <span class="w3-center" style="width: 30%;">  <img src="images/download.jpeg" style="width: 100%;"> </span>
            <h2 class="text-center  ">High Blood Cholesterol </h2>
            <p class="text  ">There are many factors under control that contribute to raising the level of harmful </p>
               <p class="text   "> cholesterol on the one hand  .</p>
               <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/High Blood Cholesterol .php"> Read more</a></button>

        </div>

        <div class="box w3-animate-right">
            <span class="w3-center" style="width: 30%;">  <img src="images/w1600.png" style="width: 100%;"> </span>

            <h2 class=" text-center   ">Anemia</h2>
            <p class="text">Anemia is a medical condition characterized by an insufficient amount of red blood cells that carry oxygen to the tissues. </p>
            <p class="text"> There are several types of anemia, each with a specific cause</p>
            <button class="w3-button w3-black"  > <a  href="http://localhost/xampp/help/php/Anemia.php"> Read more</a></button>
        </div>

        
    </div>
</section>
<!-- blogs section starts  -->

<section class="and blogs" id="blogs">

    <h1 class="heading w3-text-red">  some <span class="w3-text-black">diseases</span>(video) </h1>

    <div class="box-container">

        <div class="box" id="diabetes">
         
            <div class="image">
                <video class="vid" src="imge/Mayo Clinic Explains Diabetes.mp4" controls ></video> 
             </div>
            <div class="content">
               
                <h3><span> Diabetes</span></h3>
<p>Reference this video from:mayoclinic.org</p>
            </div>
        </div>

        <div class="box" id="long">
           
            <div class="image">
                <video class="vid" src="imge/videoplayback.mp4" controls ></video> 
             </div>
            <div class="content">
                
                <h3><span>Long-term high blood pressure</span></h3>
                <p>Reference this video from:mayoclinic.org</p>
            </div>
        </div>

        <div class="box" >
           
            <div class="image">
               <video class="vid" src="imge/Mayo Clinic Explains Migraine.mp4" controls ></video> 
            </div>
            <div class="content">
               
                <h3><span>Headache </span></h3> 
                <p>Reference this video from:mayoclinic.org</p>
                </div>
        </div>

    </div>
    <div class="box-container">

        <div class="box m-3" id="diabetes">
         
            <div class="image">
                <video class="vid" src="images/Acne.mp4" controls ></video> 
             </div>
            <div class="content">
               
                <h3><span> Acne</span></h3>
                <p>Reference this video from:mayoclinic.org</p>

            </div>
        </div>

        <div class="box m-3" id="long">
           
            <div class="image">
                <video class="vid" src="images/flu.mp4" controls ></video> 
             </div>
            <div class="content">
                
                <h3><span>flu</span></h3>
                <p>Reference this video from:mayoclinic.org</p>
            </div>
        </div>

        <div class="box m-3" >
           
            <div class="image">
               <video class="vid" src="images/hair.mp4" controls ></video> 
            </div>
            <div class="content">
               
                <h3><span>hair loss </span></h3> 
                <p>Reference this video from:mayoclinic.org</p>

                </div>
        </div>
    </div>
    <div class="box-container">

        <div class="box m-3" id="diabetes">
         
            <div class="image">
                <video class="vid" src="images/Allergies.mp4" controls ></video> 
             </div>
            <div class="content">
               
                <h3><span> Allergies</span></h3>
                <p>Reference this video from:mayoclinic.org</p>

            </div>
        </div>

        <div class="box m-3" id="long">
           
            <div class="image">
                <video class="vid" src="images/Depression.mp4" controls ></video> 
             </div>
            <div class="content">
                
                <h3><span>Depression</span></h3>
                <p>Reference this video from:mayoclinic.org</p>

            </div>
        </div>

        <div class="box m-3" >
           
            <div class="image">
               <video class="vid" src="images/Dental Cavities.mp4" controls ></video> 
            </div>
            <div class="content">
               
                <h3><span>Dental cavities </span></h3> 
                <p>Reference this video from:mayoclinic.org</p>

                </div>
        </div>
    </div>
    <div class="box-container">

        <div class="box m-3" id="diabetes">
         
            <div class="image">
                <video class="vid" src="images/heart.mp4" controls ></video> 
             </div>
            <div class="content">
               
                <h3><span> heart disease</span></h3>
                <p>Reference this video from:mayoclinic.org</p>

            </div>
        </div>

        <div class="box m-3" id="long">
           
            <div class="image">
                <video class="vid" src="images/High Blood Cholesterol.mp4" controls ></video> 
             </div>
            <div class="content">
                
                <h3><span>High Blood Cholesterol</span></h3>
                <p>Reference this video from:mayoclinic.org</p>

            </div>
        </div>

        <div class="box m-3" >
           
            <div class="image">
               <video class="vid" src="images/Mayo Clinic Explains Migraine.mp4" controls ></video> 
            </div>
            <div class="content">
               
                <h3><span>Anemia </span></h3> 
                <p>Reference this video from:mayoclinic.org</p>

                </div>
        </div>
    </div>
</section>

<!-- blogs section ends -->

<!-- footer section starts  -->




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