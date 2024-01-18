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
    <a   href="http://localhost/xampp/help/Untitled-1.php" class="active">Diagnosed symptoms</a>
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

    <h1 class="heading w3-text-red"> Anemia</h1>
        <main id="main-content">
            <div id="rightcolumnpage" class="container right-column-page-container">
        <div class="row">
            <div class="col-md-9 left_content">
                <div class="container">
                        <div class="row">
                            <div class="col">
                                
<h1 class="page-title">                                Anemia
</h1>
                            </div>
                        </div>
                                            <div class="row">
                            <div class="col">
                                <div>
                                    <div class="wysiwyg">
<p>Anemia is the most common blood disorder, and according to the National Heart, Lung, and Blood Institute, it affects more than 3 million Americans.&nbsp;</p>
<h3><a name="a1"></a>The Role of Red Blood Cells in Anemia</h3>
<p><a href="/education/patients/blood-basics">Red blood cells</a>&nbsp;carry hemoglobin, an iron-rich protein that attaches to oxygen in the lungs and carries it to tissues throughout the body. Anemia occurs when you do not have enough red blood cells or when your red blood cells do not function properly. It is diagnosed when a <a href="http://labtestsonline.org/understanding/analytes/hemoglobin/glance.html">blood test</a>&nbsp;shows a hemoglobin value of less than 13.5 gm/dl in a man or less than 12.0 gm/dl in a woman. Normal values for children vary with age.</p>
<div class="video"><iframe allowfullscreen="true" src="//www.youtube.com/embed/_ZV5140OykE?showinfo=0&amp;theme=light&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.hematology.org" width="1125" height="600" frameborder="0" data-gtm-yt-inspected-13213556_121="true" id="807154955" data-gtm-yt-inspected-8="true" data-gtm-yt-inspected-13="true" title="The Role of Red Blood Cells in Anemia"></iframe></div>
<p>When you have anemia, your body lacks oxygen, so you may experience one or more of the following symptoms:</p>
<ul>
    <li>Weakness</li>
    <li>Shortness of breath</li>
    <li>Dizziness</li>
    <li>Fast or irregular heartbeat</li>
    <li>Pounding or "whooshing" in your ears</li>
    <li>Headache</li>
    <li>Cold hands or feet</li>
    <li>Pale or yellow skin</li>
    <li>Chest pain</li>
</ul>
<h3><a name="a2"></a>Am I at Risk for Anemia?</h3>
<p>Many people are at risk for anemia because of poor diet, intestinal disorders, chronic diseases, infections, and other conditions. Women who are menstruating or pregnant and people with chronic medical conditions are most at risk for this disease. The risk of anemia increases as people grow older.</p>
<p>If you have any of the following chronic conditions, you might be at greater risk for developing anemia:</p>
<ul>
    <li>Rheumatoid arthritis or other autoimmune disease</li>
    <li>Kidney disease</li>
    <li>Cancer</li>
    <li>Liver disease</li>
    <li>Thyroid disease</li>
    <li>Inflammatory bowel disease (Crohn disease or ulcerative colitis)</li>
</ul>
<p>The signs and symptoms of anemia can easily be overlooked. In fact, many people do not even realize that they have anemia until it is identified in a blood test.</p>
<h3><a name="a3"></a>Common Types of Anemia</h3>
<p><a href="/education/patients/anemia/iron-deficiency"><strong>Iron-deficiency anemia</strong></a>&nbsp;is the most common type of anemia. It happens when you do not have enough iron in your body. Iron deficiency is usually due to blood loss but may occasionally be due to poor absorption of iron. Pregnancy and childbirth consume a great deal of iron and thus can result in&nbsp;<a href="/education/patients/anemia/pregnancy">pregnancy-related anemia</a>. People who have had gastric bypass surgery for weight loss or other reasons may also be iron deficient due to poor absorption.</p>
<p><strong>Vitamin-deficiency anemia</strong>&nbsp;may result from low levels of vitamin B12 or folate (folic acid), usually due to poor dietary intake. Pernicious anemia is a condition in which vitamin B12 cannot be absorbed in the gastrointestinal tract.</p>
<p><strong><a href="/education/patients/anemia/pregnancy"><strong>Anemia and Pregnanc</strong><strong>y</strong></a></strong>&nbsp;- Learn about the risk factors and symptoms of anemia during pregnancy.</p>
<p><strong>Aplastic anemia&nbsp;</strong>&nbsp;is a rare bone marrow failure disorder in which the bone marrow stops making enough blood cells (red blood cells, white blood cells, and platelets). This occurs as a result of destruction or deficiency of blood-forming stem cells in your bone marrow, in particular when the body’s own immune system attacks the stem cells. However, the few blood cells the marrow does make are normal. Viral infections, ionizing radiation, and exposure to toxic chemicals or drugs can also result in aplastic anemia.</p>
<p><strong>Hemolytic anemia&nbsp;</strong>&nbsp;&nbsp;occurs when red blood cells are broken up in the bloodstream or in the spleen. Hemolytic anemia may be due to mechanical causes (leaky heart valves or aneurysms), infections, autoimmune disorders, or congenital abnormalities in the red blood cell. Inherited abnormalities may affect the hemoglobin or the red blood cell structure or function. Examples of inherited hemolytic anemias include some types of thalassemia and low levels of enzymes such as glucose-6 phosphate dehydrogenase deficiency. The treatment will depend on the cause.</p>
<p><a href="/education/patients/anemia/sickle-cell-disease"><strong>Sickle cell anemia</strong></a>&nbsp;is an inherited hemolytic anemia in which the hemoglobin protein is abnormal, causing the red blood cells to be rigid and clog the circulation because they are unable to flow through small blood vessels.</p>
<p><strong>Anemia caused by other diseases&nbsp;</strong>&nbsp;&nbsp;- Some diseases can affect the body's ability to make red blood cells. For example, some patients with kidney disease develop anemia because the kidneys are not making enough of the&nbsp;<a href="/about/history/50-years/erythropoietin">hormone erythropoietin</a>&nbsp;to signal the bone marrow to make new or more red blood cells. Chemotherapy used to treat various cancers often impairs the body's ability to make new red blood cells, and anemia often results from this treatment.</p>
<h3><a name="a4"></a>How is Anemia Treated?</h3>
<p>The treatment for anemia depends on what causes it.</p>
<p>Iron-deficiency anemia is almost always due to blood loss. If you have iron-deficiency anemia, your doctor may order tests to determine if you are losing blood from your stomach or bowels. Other nutritional anemias, such as folate or B-12 deficiency, may result from poor diet or from an inability to absorb vitamins in the gastrointestinal tract. Treatment varies from changing your diet to taking dietary supplements.</p>
<p>If your anemia is due to a chronic disease, treatment of the underlying disease will often improve the anemia. Under some circumstances, such as chronic kidney disease, your doctor may prescribe medication such as erythropoietin injections to stimulate your bone marrow to produce more red blood cells.</p>
<p>Aplastic anemia occurs if your bone marrow stops producing red blood cells. Aplastic anemia may be due to primary bone marrow failure, myelodysplasia (a condition in which the bone marrow produces abnormal red blood cells that do not mature properly), or occasionally as a side effect of some medications. If you appear to have a form of aplastic anemia, your doctor may refer you to a hematologist for a bone marrow biopsy to determine the cause of the anemia. Medications and blood transfusions may be used to treat aplastic anemia.</p>
<p>Hemolytic anemia occurs when red blood cells are destroyed in the blood stream. This may be due to mechanical factors (a leaky heart valve or aneurysm), infection, or an autoimmune disease. The cause can often be identified by special blood tests and by looking at the red blood cells under a microscope. The treatment will depend upon the cause and may include referral to a heart or vascular specialist, antibiotics, or drugs that suppress the immune system.</p>
<p>Talk with your doctor if you believe you may be at risk for anemia. Your doctor will determine your best course of treatment and, depending on your condition, may refer you to a hematologist, a doctor who specializes in blood disorders.</p>
<h3><a name="a5"></a>Is Anemia Preventable?</h3>
<p>While many types of anemia cannot be prevented, eating healthy foods can help you avoid both iron-and vitamin-deficiency anemia. Foods to include in your diet include those with high levels of iron (beef, dark green leafy vegetables, dried fruits, and nuts), vitamin B-12 (meat and dairy), and folic acid (citrus juices, dark green leafy vegetables, legumes, and fortified cereals). A daily multivitamin will also help prevent nutritional anemias; however, older adults should not take iron supplements for iron-deficiency anemia unless instructed by their physicians.</p>
<h3><a name="a6"></a>Hereditary Spherocytosis: A Patient's Journey</h3>
<div class="video"><iframe src="//www.youtube.com/embed/ddeTsa0H624?showinfo=0&amp;theme=light&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.hematology.org" allowfullscreen="true" width="1125" height="600" frameborder="0" data-gtm-yt-inspected-13213556_121="true" id="799505975" data-gtm-yt-inspected-8="true" data-gtm-yt-inspected-13="true" title="Hereditary Spherocytosis: A Patient's Journey"></iframe></div>
<h3><a name="a7"></a>Where Can I Find More Information?</h3>
<p>If you find that you are interested in learning more about blood diseases and disorders, here are a few other resources that may be of some help:</p>
<h4><a href="http://www.bloodjournal.org/search/How%252BI%252Btreat%252BAnemia%252B/">Results of Clinical Studies Published in&nbsp;<em>Blood</em></a></h4>
<p>Search&nbsp;<em>Blood</em>, the official journal of ASH, for the results of the latest blood research. While recent articles generally require a subscriber login, patients interested in viewing an access-controlled article in&nbsp;<em>Blood</em>&nbsp;may obtain a copy by e-mailing a request to the&nbsp;<a title="blocked::mailto:publishing@hematology.org" href="mailto:publishing@hematology.org"><em>Blood</em>&nbsp;Publishing Office</a>.</p>
<h4><a href="/education/patients/patient-groups">Patient Groups</a></h4>
<p>A list of Web links to patient groups and other organizations that provide information.</p>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
           
            </div>
        </div>
    </div>

    </main>
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