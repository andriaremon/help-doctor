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

    <h1 class="heading w3-text-red"> hair<span class="w3-text-black">   loss </h1>
        <div class="css-0"><span style="font-size:0;line-height:0"></span><h2><div><a class="chartbeat-section" name="symptoms">Hair loss symptoms</a></div></h2><p>The main symptom of alopecia is losing more hair than usual, but this can be harder to identify than you might think.</p><p> The following symptoms can provide some clues:</p><ul><li><strong>Widening part.</strong> If you part your hair, you might start to notice your part getting wider, which can be a sign of thinning hair. </li><li><strong>Receding hairline.</strong> Similarly, if you notice your hairline looking higher than usual, it may be a sign of thinning hair.</li><li><strong>Loose hair. </strong>Check your brush or comb after using it. Is it collecting more hair than usual? If so, this may be a sign of hair loss. </li><li><strong>Bald patches. </strong>These can range in size and can grow over time. </li><li><strong>Clogged drains. </strong>You might find that your sink or shower drains are clogged with hair. </li><li><strong>Pain or itching.</strong> If you have an underlying skin condition causing your hair loss, you might also feel pain or experience itching on your scalp. </li></ul><div class="css-1cg0byz"><aside class="css-0 css-0"><div><div data-empty="true" class="css-az6x7v"><div class="css-1hjaa0k"></div><div id="inline5__slot" data-ad="true" class=" css-itezwm" data-adbridg-ad-class-invalid="false(inline5__slot)"></div></div></div></aside></div></div>
        <div class="css-0"><span style="font-size:0;line-height:0"></span><h2><div><a class="chartbeat-section" name="causes">What causes hair loss?</a></div></h2><p>There are several types of hair loss, some are common and some are rarer, and each with different underlying causes. </p><p>Depending on the type of hair loss, it can be the result of genetics, internal causes, or external causes. Here’s a look at a few different types of hair loss:</p><h3>Androgenic alopecia</h3><p>Androgenic alopecia refers to hereditary hair loss, like <a href="/health/male-pattern-baldness" class="content-link css-5r4717">male pattern baldness</a> or <a href="/health/womens-health/female-pattern-baldness" class="content-link css-5r4717">female pattern baldness</a>, and is also known as “pattern alopecia” because it can happen to both males and females. </p><p>It’s also the most common cause of hair loss, affecting up to <hl-trusted-source source="PubMed Central" rationale="Highly respected database from the National Institutes of Health" class="css-12hs4c5"><a href="https://www.ncbi.nlm.nih.gov/books/NBK430924/" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">50% of people<span class="css-1mdvjzu icon-hl-trusted-source-after"><span class="sro">Trusted Source</span></span></a><span></span></hl-trusted-source>. </p><p>Hair loss related to androgenic alopecia tends to happen gradually. While some people might experience hair loss as early as puberty, others might not notice symptoms until their middle ages. </p><p>Female pattern baldness often results in thinning all over the scalp and might look like widening or thinning around the part. It typically occurs after age 65 but, for some females, it can begin early in their lives. </p><p>Male pattern baldness typically involves progressive hair loss above the temples and thinning at the crown of the head, creating an “M” shape. </p><p><a href="/health/baldness-gene" class="content-link css-5r4717">Learn more about hereditary hair loss.</a></p><h3>Alopecia areata</h3><p><a class="content-link css-5r4717 sl" href="https://www.healthline.com/health/alopecia-barbae">Alopecia areata</a> is an autoimmune condition that causes your immune system to attack hair follicles, resulting in bald patches that can range from small to large. In some cases, it might lead to total hair loss. </p><p>In addition to losing hair on the scalp, some people with alopecia areata lose hair from their eyebrows, eyelashes, or other parts of the body. </p><p><a href="/health/alopecia-areata" class="content-link css-5r4717">Learn more about alopecia areata.</a></p><h3>Anagen effluvium</h3><p>Anagen effluvium involves a rapid loss of hair. This usually happens because of radiation treatment or chemotherapy. </p><p>Hair will usually regrow after the treatment stops. </p><h3>Telogen effluvium</h3><p>Telogen effluvium is a type of sudden hair loss that results from emotional or physical shock, like a traumatic event, period of extreme stress, or a serious illness. </p><p>It can also happen because of hormonal changes, like those that happen in:</p><ul><li><a href="/health/parenting/postpartum-hair-loss" class="content-link css-5r4717">childbirth</a></li><li><a rel="noreferrer noopener" href="/health/postpartum-recovery-timeline" data-type="URL" data-id="https://www.healthline.com/health/postpartum-recovery-timeline" target="_blank" class="content-link css-5r4717">postpartum</a></li><li><a href="/health/menopause" class="content-link css-5r4717">menopause</a></li><li><a rel="noreferrer noopener" href="https://www.healthline.com/health/pcos-hair-loss-2" data-type="URL" data-id="https://www.healthline.com/health/pcos-hair-loss-2" target="_blank" class="content-link css-5r4717">Polycystic Ovar</a><a href="https://www.healthline.com/health/pcos-hair-loss-2" data-type="URL" data-id="https://www.healthline.com/health/pcos-hair-loss-2" target="_blank" rel="noreferrer noopener" class="content-link css-5r4717">y</a><a rel="noreferrer noopener" href="https://www.healthline.com/health/pcos-hair-loss-2" data-type="URL" data-id="https://www.healthline.com/health/pcos-hair-loss-2" target="_blank" class="content-link css-5r4717"> Syndrome (PCOS)</a></li></ul><p>Other potential causes of telogen effluvium include:</p><ul><li>malnutrition including vitamin or mineral deficiency</li><li>certain endocrine disorders</li><li>starting or stopping hormonal birth control</li><li>post surgery as a <a rel="noreferrer noopener" href="/health/hair-loss-after-surgery" data-type="URL" data-id="https://www.healthline.com/health/hair-loss-after-surgery" target="_blank" class="content-link css-5r4717">result of the anesthesia</a></li><li>acute illnesses or severe infections like COVID-19</li></ul><p>Several types of medications can also cause it, including:</p><ul><li>anticoagulants</li><li>anticonvulsants</li><li>oral retinoids</li><li>beta-blockers</li><li>thyroid medications</li></ul><p>This type of hair loss typically resolves on its own once the underlying cause is addressed. </p><h3>Tinea capitis</h3><p><a rel="noreferrer noopener" href="/health/tinea-capitis" data-type="URL" data-id="https://www.healthline.com/health/tinea-capitis" target="_blank" class="content-link css-5r4717">Tinea capitis</a>, also called ringworm of the scalp, is a fungal infection that can affect the scalp and hair shaft. It causes small bald patches that are scaly and itchy. Over time, if not treated early, the size of the patch or patches will increase and fill with pus. </p><p>These patches, sometimes called a kerion, <hl-trusted-source source="PubMed Central" rationale="Highly respected database from the National Institutes of Health" class="css-12hs4c5"><a rel="noopener noreferrer" href="https://www.ncbi.nlm.nih.gov/books/NBK536909/" data-type="URL" data-id="https://www.ncbi.nlm.nih.gov/books/NBK536909/" target="_blank" class="content-link css-5r4717">can cause<span class="css-1mdvjzu icon-hl-trusted-source-after"><span class="sro">Trusted Source</span></span></a><span></span></hl-trusted-source> scarring as well.</p><p>Other symptoms include:</p><ul><li>brittle hair that breaks easily</li><li>scalp tenderness</li><li>scaly patches of skin that look grey or red</li></ul><p>It’s treatable with antifungal medication. </p><h3>Traction alopecia</h3><p>Traction alopecia results from too much pressure and tension on the hair, often from wearing it in tight styles, like braids, ponytails, or buns.</p><div id="me4df5827-51d0-4570-b768-b61db4763436mpd_middle_4089a38f-e1bc-4ab1-9f36-58b584d84cfb" class=""><div><div><div class="css-17gk7lu"><aside class="css-0 css-0"><div><div data-empty="true" class="css-1m5rslq"><div class="css-1hjaa0k"></div><div id="dlb_middle_mpd__slot" data-ad="true" class=" css-1gjdrx" data-adbridg-ad-class-invalid="false(dlb_mpd)"></div></div></div></aside></div></div></div></div><div class="css-umsscj"><aside class="css-0 css-0"><div><div data-empty="true" class="css-10gx9pb"><div class="css-1hjaa0k"></div><div id="inline8__slot" data-ad="true" class=" css-1l7cd95" data-adbridg-ad-class-invalid="false(inline8__slot)"></div></div></div></aside></div></div>
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