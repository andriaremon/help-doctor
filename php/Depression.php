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
    <link rel="stylesheet" href="../csss/bootstrap.min.css">
    <link rel="stylesheet" href="../csss/w3.css">
    <link rel="stylesheet" href="../csss/some.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
<a class="logo float-sm-start float-md-start float-lg-start " href="../images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 20%;">  <img src="../images/WhatsApp Image 2023-05-10 at 7.17.28 PM.jpeg" style="width: 50%;"> </a>
    <button class="w3-hide-large   w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>

    <nav class="navbar   w3-hide-small w3-hide-medium " style="width: 80%;">

<a  class="w3-text-white w3-hover-text-black" href="http://localhost/xampp/help/index2.php"  >home</a>
    <a  class="w3-text-white w3-hover-text-black "  href="http://localhost/xampp/help/about.php"  >about </a>
    <a  class="w3-text-white  w3-hover-text-black "   href="http://localhost/xampp/help/some diseases.php" class="active">some diseases </a>
    <a   href="http://localhost/xampp/help/Untitled-1.php" >Diagnosed symptoms</a>
    <p> <a href="http://localhost/xampp/help/login1.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>
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
<a class="w3-bar-item w3-button  w3-text-black  "     href="http://localhost/xampp/help/some diseases.php">some diseases </a>
<a class="w3-bar-item w3-button  w3-text-white  "    href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
<p> <a href="http://localhost/xampp/help/login1.php?logout='1'" style="color: red;"><button class="w3-button w3-black">logout </button></a></p>

</nav>
<!-- header section ends -->




<!-- booking section ends -->

<!-- review section starts  -->



<!-- review section ends -->
<section class=" and services" id="services">

    <h1 class="heading w3-text-red"> Depression</h1>
<div class="css-0"><span style="font-size:0;line-height:0"></span><h2 class="css-13i30ag"><div><a class="chartbeat-section" name="What-is-depression?">What is depression?</a></div></h2><div id="widget_call_out_094b40c9-f7bf-4a1d-8609-7f144c782940" class="css-4llrzn"><span style="font-size:0;line-height:0"></span><div class="css-zr4wb2"><div><h3 class="css-1v0jij4">Suicide prevention</h3><div class="css-pzg5fr"><p class="standout--body">If you think someone is considering suicide, get help from a crisis or suicide prevention hotline. Try the National Suicide Prevention Lifeline at 988.</p></div></div></div><div class="css-1ab52pa"><div></div><div class="css-eyp0vq"><div class="css-k008qs"><span class="css-4uas4d">Was this helpful?</span><button type="button" class="css-11s3u88 icon-hl-circle-thumb-up"></button><button type="button" class="css-11s3u88 icon-hl-circle-thumb-down"></button></div></div><div><svg alt="Healthline" width="75" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 48"><path fill="#E1BE83" d="M39.452 46.66H25.095V23.881c0-2.394-1.713-3.929-3.73-3.929-1.96 0-4.325 1.596-4.325 3.93v22.776H4.154V10.376L0 7.429C4.748 5.832 12.707 2.394 17.04 0v19.032c1.72-2.149 5.926-4.911 11.268-4.911 6.765 0 9.673 4.481 9.673 9.823v19.23c0 .578.49 1.74 1.47 3.485zm147.981 0h-14.356V23.881c0-2.394-1.714-3.929-3.731-3.929-1.959 0-4.325 1.596-4.325 3.93v22.776h-12.885V10.376l-4.155-2.947C152.73 5.832 160.69 2.394 165.021 0v19.032c1.721-2.149 5.927-4.911 11.268-4.911 6.765 0 9.673 4.481 9.673 9.823v19.23c0 .578.49 1.74 1.471 3.485zM70.835 41.241v2.273C67.978 45.973 64.823 48 58.038 48c-10.714 0-17.262-7.188-17.262-16.034 0-10.566 6.726-17.754 16.607-17.754 9.761 0 13.452 6.696 13.452 15.113H52.99c.773 9.706 6.177 14.129 11.118 14.129 2.38 0 5.059-.799 6.726-2.212zM56.773 27.415c2.872 0 3.2-.818 3.2-3.22 0-1.842-.328-6.382-3.2-6.382-2.872 0-3.2 4.54-3.2 6.382 0 2.402.328 3.22 3.2 3.22zM300 41.233v2.273c-2.857 2.457-6.012 4.485-12.797 4.485-10.714 0-17.261-7.188-17.261-16.034 0-10.566 6.726-17.754 16.606-17.754 9.762 0 13.452 6.696 13.452 15.112h-17.844c.774 9.707 6.178 14.13 11.118 14.13 2.381 0 5.06-.799 6.726-2.212zm-14.061-13.827c2.871 0 3.199-.819 3.199-3.22 0-1.842-.328-6.382-3.2-6.382-2.871 0-3.199 4.54-3.199 6.381 0 2.402.328 3.22 3.2 3.22zM107.25 40.962l1.425.303C108.023 43.9 106.123 48 100.011 48c-5.104 0-6.536-3.133-7.605-6.45-.89 3.071-4.384 6.45-11.03 6.45-5.935 0-9.2-2.642-9.2-7.618 0-5.528 5.393-9.583 18.865-13.576V20.97c0-3.01-1.602-4.055-3.382-4.055-1.603 0-4.147 1.72-4.147 4.423 0 1.29.237 2.273.415 3.563 0 1.66-1.899 4.178-4.807 4.178-3.205 0-4.748-2.335-4.748-5.038 0-4.423 4.095-9.829 14.837-9.829 11.158 0 14.719 5.898 14.719 11.55V40.75c0 .921.356 1.843 1.365 1.843.89 0 1.496-.506 1.957-1.632zM91.112 39.83V28.7c-4.514 1.834-6.076 6.36-6.076 9.846 0 2.813.868 4.098 2.951 4.098 1.823 0 3.125-1.162 3.125-2.814zm34.59 6.83h-14.82V10.376l-3.95-2.947c4.513-1.597 12.807-5.035 16.925-7.429v43.173c0 .552.615 1.714 1.846 3.486zm81.217 0h-14.821V10.376l-3.95-2.947c4.514-1.597 12.807-5.035 16.926-7.429v43.173c0 .552.615 1.714 1.845 3.486zm-58.992-3.76v2.274c-2.16 1.844-5.74 2.827-9.605 2.827-6.365 0-8.582-4.732-8.582-8.726V17.922h-3.07l16.142-14.168V15.43h5.115v2.492h-5.115v23.134c0 1.843 1.08 2.704 2.387 2.704.796 0 2.217-.369 2.728-.86zm71.309-29.19c-3.669 0-6.592-3.04-6.592-6.854 0-3.815 2.923-6.855 6.592-6.855 3.668 0 6.592 3.04 6.592 6.855 0 3.815-2.924 6.855-6.592 6.855zm8.676 32.95h-15.13V23.814l-4.164-2.955c4.759-1.601 12.738-5.05 17.08-7.451v29.765c0 .573.738 1.735 2.214 3.486zm41.062 0H254.15V23.814c0-2.401-1.713-3.94-3.73-3.94-1.959 0-4.325 1.6-4.325 3.94V46.66H233.21V23.814l-4.154-2.955c4.748-1.601 12.369-5.05 16.701-7.451v6.28c2.136-2.832 6.266-5.664 11.607-5.664 6.765 0 9.673 4.495 9.673 9.852v19.297c0 .563.646 1.725 1.937 3.486z"></path></svg></div></div></div><p>Depression is classified as a mood disorder. It may be described as feelings of sadness, loss, or anger that interfere with a person’s everyday activities.</p><p>It’s also fairly common. Data from the <hl-trusted-source source="Centers for Disease Control and Prevention (CDC)" rationale="Governmental authority" class="css-12hs4c5"><a href="https://www.cdc.gov/nchs/products/databriefs/db379.htm" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">Centers for Disease Control and Prevention<span class="css-1mdvjzu icon-hl-trusted-source-after"><span class="sro">Trusted Source</span></span></a><span></span></hl-trusted-source> estimates that 18.5 percent of American adults had symptoms of depression in any given 2-week period in 2019. </p><p>Though depression and grief share some features, depression is <a rel="noopener noreferrer" target="_blank" href="https://www.nami.org/About-Mental-Illness/Mental-Health-Conditions/Depression" class="content-link css-5r4717">different from grief</a> felt after losing a loved one or sadness felt after a traumatic life event. Depression usually involves self-loathing or a loss of self-esteem, while grief typically does not.</p><p>In grief, positive emotions and happy memories of the deceased typically accompany feelings of emotional pain. In major depressive disorder, the feelings of sadness are constant.</p><p>People experience depression in different ways. It may interfere with your daily work, resulting in lost time and lower productivity. It can also influence relationships and some chronic health conditions.</p><p>Conditions that can get worse due to depression include:</p><ul><li><a  class="content-link css-5r4717">arthritis</a></li><li><a  class="content-link css-5r4717">asthma</a></li><li><a  class="content-link css-5r4717">cardiovascular disease</a></li><li><a  class="content-link css-5r4717">cancer</a></li><li><a  class="content-link css-5r4717">diabetes</a></li><li><a  class="content-link css-5r4717">obesity</a></li></ul><p>It’s important to realize that feeling down at times is a normal part of life. Sad and upsetting events happen to everyone. But if you’re feeling down or hopeless on a regular basis, you could be dealing with depression.</p><p>Depression is considered a serious medical condition that can get worse without proper treatment. </p><div class="css-umsscj"><aside class="css-0 css-0"><div><div data-empty="true" class="css-10gx9pb"><div class="css-1hjaa0k"></div><div id="inline2__slot" data-ad="true" class=" css-1l7cd95" data-adbridg-ad-class-invalid="false(inline2__slot)"></div></div></div></aside></div></div>
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
<script src="../js/script.js"></script>
<script src="../js/an.js.js"></script>
<script src="../js/aboute.js"></script>

</body>
</html>