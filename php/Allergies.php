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

    <h1 class="heading w3-text-red"> Allergies </h1>
    <div class="l-66-33--1">
        <h1 class="hero-content__title lede">
        Allergies
        </h1>
        <div class="hero-content__subtitle">Allergies are your body’s reaction to normally harmless substances. Allergy symptoms range from mild to life-threatening. Treatments include antihistamines, decongestants, nasal steroids, asthma medicines and immunotherapy.</div>
        </div>
        <div class="l-66-33--1">
            <div class="l-66-33--1 main-content js-main-content">
                <nav class="article-nav js-article-nav">
                <ul class="no-bullets">
                <li class="article-nav__li"><a class="article-nav__link" href="/health/diseases/8610-allergies">Overview</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#symptoms-and-causes">Symptoms and Causes</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#diagnosis-and-tests">Diagnosis and Tests</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#management-and-treatment">Management and Treatment</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#prevention">Prevention</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#outlook--prognosis">Outlook / Prognosis</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#living-with">Living With</a></li>
                <li class="article-nav__li"><a class="article-nav__link" href="#frequently-asked-questions">Frequently Asked Questions</a></li>
                </ul>
                </nav>
              
                <div class="js-health-article__content health-article__content">
                <div class="js-section js-section--overview">
                <h2 id="overview" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--overview"></span>
                Overview
                </h2>
                <figure class="img-container featured-media">
                <img src="https://my.clevelandclinic.org/-/scassets/images/org/health/articles/8610-allergies" alt="Allergies may cause different symptoms, including sneezing, itching, watery eyes or trouble breathing.">
                <figcaption class="media-caption">Allergies cause your immune system to overreact to certain foreign substances.</figcaption>
                </figure>
                <h3 id="what-are-allergies-">What are allergies?</h3>
                <p>Allergies are your body’s reaction to a foreign protein. Usually, these proteins (allergens) are harmless. However, if you have an allergy to a particular protein, your body’s defense system (<a href="https://my.clevelandclinic.org/health/articles/21196-immune-system" target="_blank">immune system</a>) overreacts to its presence in your body.</p>
                <div id="mobile-ad-1" class="ad-mobile">
                <span id="billboard_300x250_mobiletrack"></span><div id="billboard_300x250_mobile" class="ad-mobile__container" data-google-query-id="CLf2mM-ymf8CFUeKhQodAsEI7w"><div id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_1__container__" style="border: 0pt none; margin: auto; text-align: center;"><iframe id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_1" name="google_ads_iframe_/4213/cchl/earnosethroat/allergies_1" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-google-container-id="2" data-load-complete="true" data-integralas-id-55e75a9b-fdc6-184b-53ac-b5c27133ef00=""></iframe></div></div>
                <div class="ad-mobile__description">
                <p>
                Cleveland Clinic is a non-profit academic medical center. Advertising on our site helps support our mission. We do not endorse non-Cleveland Clinic products or services.
                <a class="ad__description-link" href="https://health.clevelandclinic.org/advertising" target="_blank">Policy</a>
                </p>
                </div>
                </div><h3 id="what-is-an-allergic-reaction-">What is an allergic reaction?</h3>
                <p>An allergic reaction is the way your body responds to an allergen.</p>
                <p>If you have allergies, the first time you encounter a specific allergen, your body responds by creating immunoglobulin E (IgE). Your immune system makes antibodies to form IgE.</p>
                <p>IgE antibodies bind to mast cells (allergy cells) that live in your skin, respiratory tract (airways) and the mucus membrane in the hollow organs that connect to each other from your mouth to your anus (gastrointestinal or GI tract). </p>
                <p>The antibodies find the allergens in your body and help remove them by taking them to the mast cell (allergy cell), where they attach to a special receptor. This causes the allergy cell to release histamine. Histamine is what causes your allergy symptoms.</p>
                <h4 id="how-common-are-allergies-">How common are allergies?</h4>
                <p>Allergies are very common.</p>
                <p>More than 50 million people in the United States have an allergic reaction each year. They’re the sixth-leading cause of long-term illness in the United States.</p>
                <h4 id="who-do-allergies-affect-">Who do allergies affect?</h4>
                <p>Allergies can affect anyone.</p>
                <p>You’re more likely to have or develop allergies if your biological parents have allergies.</p>
                </div>
                <div class="js-section js-section--symptoms-and-causes">
                <h2 id="symptoms-and-causes" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--symptoms-and-causes"></span>
                Symptoms and Causes
                </h2>
                <h3 id="what-are-the-most-common-allergies-">What are the most common allergies?</h3>
                <p>The most common allergies include:</p>
                <h4 id="certain-foods">Certain foods</h4>
                <p><a href="https://my.clevelandclinic.org/health/diseases/9196-food-allergies" target="_blank">Food allergies</a> develop when your body releases a specific antibody to a particular food. An allergic reaction occurs within minutes of eating the food, and symptoms can be severe. Symptoms may include:</p>
                <ul>
                <li>Itching all over your body (generalized pruritus).</li>
                <li>Itching in just one certain part of your body (localized pruritus).</li>
                <li>Nausea and vomiting.</li>
                <li>Hives.</li>
                <li>Swelling around your mouth, including your throat, tongue or face.</li>
                </ul>
                <p>If you have an IgE-mediated food allergy, symptoms may also include <a href="https://my.clevelandclinic.org/health/diseases/8619-anaphylaxis" target="_blank">anaphylaxis</a>. It may present as any one of the above symptoms or a combination of the above symptoms. It usually occurs within 30 minutes of ingesting a food you’re allergic to.</p>
                <p>In adults, the most common food allergies are:</p>
                <ul>
                <li><a href="https://my.clevelandclinic.org/health/diseases/11315-milk-allergy" target="_blank">Milk</a>.</li>
                <li>Eggs.</li>
                <li><a href="https://my.clevelandclinic.org/health/diseases/17717-wheat-allergy" target="_blank">Wheat</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/diseases/11320-soy-allergy" target="_blank">Soy</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/diseases/21511-peanut-allergy" target="_blank">Peanuts</a>.</li>
                <li>Tree nuts.</li>
                <li><a href="https://my.clevelandclinic.org/health/diseases/11319-allergies-shellfish" target="_blank">Shellfish</a>.</li>
                </ul>
                <p>In children, the most common food allergies are:</p>
                <ul>
                <li>Milk.</li>
                <li>Eggs.</li>
                <li>Wheat.</li>
                <li>Soy.</li>
                <li>Peanuts</li>
                <li>Tree nuts.</li>
                </ul>
                <h4 id="inhalants">Inhalants</h4>
                <p>Inhalant allergies are airborne substances that you inhale (breathe in). They include allergens that may affect you throughout the year (perennial allergens) and seasonal allergens.</p>
                <p>Inhalant allergy symptoms include:</p>
                <ul>
                <li>Runny nose.</li>
                <li>Stuffy nose.</li>
                <li>Itchy nose.</li>
                <li>Sneezing.</li>
                <li>Itchy eyes.</li>
                <li>Watery eyes.</li>
                </ul>
                <p>If you have asthma, inhalant allergies can also trigger or worsen your symptoms, including wheezing and shortness of breath.</p>
                <p>Perennial allergens include:</p>
                <ul>
                <li><strong>Pets</strong>. Pet allergens include certain proteins in animal fur, skin (dander), urine (pee) and saliva (spit).</li>
                <li><strong>Dust mites</strong>. Dust mites are tiny, eight-legged relatives of spiders. They’re too small to see with your eyes. They live in dust and the fibers of household objects, such as pillows, mattresses, carpets and upholstery.</li>
                <li><strong>Cockroaches</strong>. Cockroaches are reddish-brown insects that are 1.5 to 2 inches (in) long. The proteins in their feces (poop), spit, eggs and dead body parts can cause allergic reactions.</li>
                <li><strong>Molds</strong>. Molds are tiny fungi (plural of fungus). They have spores that float in the air, like pollen. Common mold allergies include <em>Aspergillus, Cladosporium and Alternaria</em>.</li>
                </ul>
                <p>Seasonal allergies include pollens. Pollen is microspores from trees, grass or weeds that appear as a fine dust on surfaces or float in the air. Tree pollens generally appear in the spring, while weed pollens generally appear in the fall.</p>
                <h4 id="medications">Medications</h4>
                <p>Certain medications can cause an allergic reaction. The medicines may be herbal, over-the-counter (OTC) or prescription.</p>
                <p>Common medications that cause allergies include:</p>
                <ul>
                <li><a href="https://my.clevelandclinic.org/health/drugs/16386-antibiotics" target="_blank">Antibiotics</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/drugs/11086-non-steroidal-anti-inflammatory-medicines-nsaids" target="_blank">Nonsteroidal anti-inflammatory drugs</a> (NSAIDs).</li>
                <li><a href="https://my.clevelandclinic.org/health/articles/22601-insulin" target="_blank">Insulin</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/treatments/16859-chemotherapy" target="_blank">Chemotherapy</a> drugs.</li>
                </ul>
                <p>Symptoms include:</p>
                <ul>
                <li>Rash.</li>
                <li>Hives.</li>
                <li>Itching.</li>
                <li>Shortness of breath.</li>
                <li>Swelling.</li>
                </ul>
                <h4 id="latex">Latex</h4>
                <p><a href="https://my.clevelandclinic.org/health/diseases/8623-latex-allergy" target="_blank">Latex allergies</a> develop after repeated contact with natural rubber latex.</p>
                <p>Common natural rubber latex products include:</p>
                <ul>
                <li>Rubber gloves.</li>
                <li>Balloons.</li>
                <li>Condoms.</li>
                <li>Bandages.</li>
                <li>Rubber balls.</li>
                </ul>
                <p>The most common reaction to latex is skin irritation (<a href="https://my.clevelandclinic.org/health/diseases/6173-contact-dermatitis" target="_blank">contact dermatitis</a>). It manifests as a rash on the area of skin that touched the latex. It may develop within minutes of exposure to latex. Other symptoms may include:</p>
                <ul>
                <li>Hives.</li>
                <li>Runny nose.</li>
                <li>Itchy nose.</li>
                <li>Difficulty breathing.</li>
                </ul>
                <h4 id="venoms-stinging-insects">Venoms/stinging insects</h4>
                <p>Stinging insects can inject venom, which is a toxic substance. The venom in insect stings can cause an allergic reaction. The most common stinging insects that cause allergic reactions include:</p>
                <ul>
                <li>Bees.</li>
                <li>Fire ants.</li>
                <li>Hornets.</li>
                <li>Wasps.</li>
                <li>Yellow jackets.</li>
                </ul>
                <p>Venom symptoms are consistent with anaphylaxis. They may include:</p>
                <ul>
                <li>Difficulty breathing.</li>
                <li>Hives.</li>
                <li>Swelling in your face, mouth or throat.</li>
                <li>Wheezing.</li>
                <li>Difficulty swallowing.</li>
                <li>Rapid pulse.</li>
                <li>Dizziness.</li>
                <li>Drop in blood pressure.</li>
                </ul>
                <h4 id="can-allergies-cause-a-fever-">Can allergies cause a fever?</h4>
                <p>No, allergies can’t cause a fever.</p>
                <div id="mobile-ad-2" class="ad-mobile">
                <span id="billboard2_300x250_mobiletrack"></span><div id="billboard2_300x250_mobile" class="ad-mobile__container" data-google-query-id="CILvidCymf8CFRKghQodcBAGiA"><div id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_2__container__" style="border: 0pt none; margin: auto; text-align: center;"><iframe id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_2" name="google_ads_iframe_/4213/cchl/earnosethroat/allergies_2" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-google-container-id="3" data-integralas-id-33ec1c93-efcf-f9d9-258f-732fd092cb0a="" data-load-complete="true"></iframe></div></div>
                </div><h3 id="what-causes-allergies-">What causes allergies?</h3>
                <p>Allergies develop when your immune system reacts to a foreign substance or protein.</p>
                <h4 id="are-allergies-contagious-">Are allergies contagious?</h4>
                <p>No, allergies aren’t contagious. You can’t spread your allergies to another person.</p>
                </div>
                <div class="js-section js-section--diagnosis-and-tests">
                <h2 id="diagnosis-and-tests" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--diagnosis-and-tests"></span>
                Diagnosis and Tests
                </h2>
                <h3 id="how-are-allergies-diagnosed-">How are allergies diagnosed?</h3>
                <p>If you think you have allergies, don’t wait to see if your symptoms go away. If your symptoms last longer than a week or two or tend to come back during certain times of the year, make an appointment with an allergist.</p>
                <p>An allergist is a healthcare provider who specializes in allergies. They can help diagnose your allergies through tests.</p>
                <div id="mobile-ad-3" class="ad-mobile">
                <span id="billboard3_300x250_mobiletrack"></span><div id="billboard3_300x250_mobile" class="ad-mobile__container" data-google-query-id="CIL3itCymf8CFcuJhQodbEQGtg"><div id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_3__container__" style="border: 0pt none; margin: auto; text-align: center;"><iframe id="google_ads_iframe_/4213/cchl/earnosethroat/allergies_3" name="google_ads_iframe_/4213/cchl/earnosethroat/allergies_3" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-google-container-id="4" data-integralas-id-a1ccf492-2a4d-356f-34d2-46b07cf35180="" data-load-complete="true"></iframe></div></div>
                </div><h3 id="how-do-i-test-for-allergies-">How do I test for allergies?</h3>
                <p>There are different types of <a href="https://my.clevelandclinic.org/health/diagnostics/21495-allergy-testing" target="_blank">allergy tests</a>. The most common allergy tests are skin prick tests and blood tests.</p>
                <p>Skin prick (scratch) tests can identify the allergens that cause your allergy symptoms. An allergist will use a thin needle to prick your skin with a tiny amount of different possible allergens. They then check to see if your skin reacts to the allergen.</p>
                <p>Blood (IgE) tests can also identify allergies. However, they’re not as sensitive as skin prick tests. Blood tests evaluate IgE antibodies that your immune system produces against a specific protein.</p>
                </div>
                <div class="js-section js-section--management-and-treatment">
                <h2 id="management-and-treatment" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--management-and-treatment"></span>
                Management and Treatment
                </h2>
                <h3 id="how-are-allergies-treated-">How are allergies treated?</h3>
                <p>Avoiding allergens is an important treatment approach. However, it often doesn’t completely end allergic reactions. Over-the-counter and prescription allergy medications are also a solution to managing your allergies. These may include:</p>
                <h4 id="antihistamines">Antihistamines</h4>
                <ul>
                <li><a href="https://my.clevelandclinic.org/health/drugs/20151-fexofenadine-orally-disintegrating-tablets" target="_blank">Fexofenadine</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/drugs/19786-loratadine-chewable-tablets" target="_blank">Loratadine</a>.</li>
                <li><a href="https://my.clevelandclinic.org/health/drugs/20692-cetirizine-pseudoephedrine-extended-release-tablets" target="_blank">Cetirizine</a> (All Day Allergy-D® or Zyrtec®).</li>
                </ul>
                <h4 id="nasal-sprays">Nasal sprays</h4>
                <p>These medications are very effective and safe to use daily but they may take a few days to a week to kick in.</p>
                <ul>
                <li><a href="https://my.clevelandclinic.org/health/drugs/18853-fluticasone-nasal-spray" target="_blank">Fluticasone nasal spray</a> (Flonase® or ClariSpray®).</li>
                <li>Cromolyn sodium.</li>
                <li>Antihistamine nasal sprays</li>
                </ul>
                <h4 id="decongestants">Decongestants</h4>
                <p>These medications should be used cautiously when treating allergies due to higher side effects and concerns related to long-term use.</p>
                <ul>
                <li>Oxymetazoline.</li>
                <li><a href="https://my.clevelandclinic.org/health/drugs/20850-phenylephrine-oral-tablet" target="_blank">Phenylephrine</a> (Sudafed PE® or Sudogest PE®).</li>
                <li><a href="https://my.clevelandclinic.org/health/drugs/20768-pseudoephedrine-tablets" target="_blank">Pseudoephedrine</a> (Contac® or Sudafed®).</li>
                </ul>
                <h4 id="asthma-medications">Asthma medications</h4>
                <ul>
                <li>Inhaled or oral <a href="https://my.clevelandclinic.org/health/treatments/17575-bronchodilators--asthma" target="_blank">bronchodilators</a>.</li>
                <li>Inhaled steroids.</li>
                <li>Oral antileukotrienes, including <a href="https://my.clevelandclinic.org/health/drugs/20684-montelukast-oral-tablets" target="_blank">montelukast</a>, <a href="https://my.clevelandclinic.org/health/drugs/18731-zafirlukast-tablets" target="_blank">zafirlukast</a> and <a href="https://my.clevelandclinic.org/health/drugs/20079-zileuton-tablets" target="_blank">zileuton</a>.</li>
                <li>Injected drugs, including <a href="https://my.clevelandclinic.org/health/drugs/19805-omalizumab-injection" target="_blank">omalizumab</a>, <a href="https://my.clevelandclinic.org/health/drugs/20590-dupilumab-injection" target="_blank">dupilumab</a> or <a href="https://my.clevelandclinic.org/health/drugs/19268-benralizumab-injection" target="_blank">benralizumab</a>.</li>
                </ul>
                <h4 id="immunotherapy">Immunotherapy</h4>
                <p>A healthcare provider may recommend <a href="https://my.clevelandclinic.org/health/treatments/11582-immunotherapy" target="_blank">immunotherapy</a> (allergy shots) and/or sublingual immunotherapy (allergy drops) if you can’t manage your allergy symptoms through over-the-counter and prescription medications and avoiding allergens. The provider will expose you to small amounts of allergens and gradually increase the dosage over several months. Gradual exposure creates a tolerance to the allergen.</p>
                <h4 id="nasal-saline-irrigation">Nasal saline irrigation</h4>
                <p>A neti pot is an over-the-counter device that pushes a saline (salt) solution through your nasal passages. It helps clear out mucus and allergens trapped inside your nasal passages.</p>
                <h3 id="what-is-the-best-treatment-for-allergies-">What is the best treatment for allergies?</h3>
                <p>Nasal steroid sprays are generally the most effective medication for people with allergic rhinitis symptoms. Antihistamines block some of the effects of histamine and may offer additional benefits. Immunotherapy helps create a tolerance to allergens and can improve many of the symptoms related to inhalant allergy exposure.</p>
                <p>Remember, your body is unique. What over-the-counter or prescription medications work for one person may not work well for you.</p>
                <p>Talk to a healthcare provider. They can help recommend the best treatment for you.</p>
                <h3 id="what-can-can-t-i-eat-drink-if-i-have-food-allergies-">What can/can’t I eat/drink if I have food allergies?</h3>
                <p>If you have food allergies, avoid any products that contain the allergens. By law, manufacturers must include all ingredients on the label of packaged foods for sale in the United States.</p>
                <p>You should also consider other possible food allergy exposures. Some nonfood items may contain food allergens, and labeling laws don’t apply to nonfood items.</p>
                <p>During the manufacturing process, some food items share equipment or surfaces. Look for labels that state whether the product shared equipment with possible food allergens.</p>
                </div>
                <div class="js-section js-section--prevention">
                <h2 id="prevention" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--prevention"></span>
                Prevention
                </h2>
                <h3 id="how-can-i-prevent-allergies-">How can I prevent allergies?</h3>
                <p>The best way to prevent allergies is to avoid allergens. You can also take antihistamines or other medications daily to help control your symptoms and reduce your allergic reaction.</p>
                <p>If you have animal allergies, avoid petting, hugging or kissing animals. Don’t allow them in your bedroom or on your furniture.</p>
                <p>Regularly vacuuming rugs, carpets and other surfaces helps remove dust, animal dander, pollen and other allergens.</p>
                <p>High-efficiency particulate (HEPA) air filters can also help. These air purifiers remove airborne allergens from your environment.</p>
                </div>
                <div class="js-section js-section--outlook--prognosis">
                <h2 id="outlook--prognosis" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--outlook--prognosis"></span>
                Outlook / Prognosis
                </h2>
                <h3 id="what-can-i-expect-if-i-have-allergies-">What can I expect if I have allergies?</h3>
                <p>Living with allergies can be challenging. Symptoms can range from mild to severe. However, with caution, you can lead a fulfilling life. Your healthcare provider can recommend resources, support groups and specialists to help you.</p>
                <h3 id="how-long-can-allergies-last-">How long can allergies last?</h3>
                <p>Your allergies will last as long as your allergen exposure. Once you’re no longer around allergens, your symptoms should go away after a few hours. However, if you have inhalant allergies, your symptoms may last for several days or longer due to ongoing exposure to pets, dust mites and pollens.</p>
                <h3 id="can-children-outgrow-allergies-">Can children outgrow allergies?</h3>
                <p>Yes, some children can outgrow their allergies. However, it depends on the type of allergy and the severity of your child’s allergy.</p>
                </div>
                <div class="js-section js-section--living-with">
                <h2 id="living-with" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--living-with"></span>
                Living With
                </h2>
                <h3 id="when-should-i-see-my-healthcare-provider-">When should I see my healthcare provider?</h3>
                <p><strong>Go to the ER or call 911 immediately if you start showing symptoms of anaphylaxis.</strong></p>
                <h3 id="what-questions-should-i-ask-my-healthcare-provider-">What questions should I ask my healthcare provider?</h3>
                <ul>
                <li>How can you tell that I have allergies?</li>
                <li>What am I allergic to?</li>
                <li>Do I have mild, moderate or severe allergies?</li>
                <li>What medications do you recommend?</li>
                <li>Should I take allergy medications every day or only when I develop symptoms?</li>
                <li>What’s the complete list of side effects of your recommended allergy medication?</li>
                <li>Can you recommend an allergist?</li>
                <li>Can you recommend a dietitian?</li>
                </ul>
                </div>
                <div class="js-section js-section--frequently-asked-questions">
                <h2 id="frequently-asked-questions" class="js-health-article__section-title">
                <span class="js-section-icon section-icon section-icon--frequently-asked-questions"></span>
                Frequently Asked Questions
                </h2>
                <h3 id="what-is-the-difference-between-a-cold-and-allergies-">What is the difference between a cold and allergies?</h3>
                <p>A cold is a contagious upper respiratory infection. Viruses cause colds.</p>
                <p>Allergies are your immune system’s response to an allergen. Viruses aren’t allergens.</p>
                <p>A cold shares many of the same symptoms as allergies. These include sneezing, runny nose, cough and congestion. However, there are differences between cold symptoms and allergy symptoms.</p>
                <ul>
                <li><strong>Mucus</strong>. If you have allergies, your mucus is usually clear and watery. If you have a cold, your mucus is generally thicker and discolored (yellow or green).</li>
                <li><strong>Eyes</strong>. If you have allergies, your eyes may be itchy, watery or red. These symptoms don’t usually develop if you have a cold.</li>
                <li><strong>Duration</strong>. Without treatment, allergy symptoms may last for weeks or months until you’re no longer around the allergen. Cold symptoms usually go away after about 10 days.</li>
                </ul>
                <p><strong>A note from Cleveland Clinic</strong></p>
                <p>Allergies occur when your immune system mistakenly triggers an allergic reaction to an allergen. Allergic reaction symptoms include congestion, watery eyes, a runny nose, vomiting and, in severe cases, anaphylaxis.</p>
                <p>Allergies can be incredibly frustrating if you don’t know what’s triggering your immune system. However, a healthcare provider can help provide relief. They can conduct tests to pinpoint your allergies and prescribe medications. They can also refer you to specialists or support groups.</p>
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
<script src="../js/script.js"></script>
<script src="../js/an.js.js"></script>
<script src="../js/aboute.js"></script>
</body>
</html>