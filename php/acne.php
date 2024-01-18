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
        <a   href="http://localhost/xampp/help/Untitled-1.php">Diagnosed symptoms</a>
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

    <h1 class="heading w3-text-red"> Acne </h1>
    <div class="l-66-33--1 main-content js-main-content">
        <nav class="article-nav js-article-nav">
        <ul class="no-bullets">
        <li class="article-nav__li"><a class="article-nav__link" href="/health/diseases/12233-acne">Overview</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#symptoms-and-causes">Symptoms and Causes</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#diagnosis-and-tests">Diagnosis and Tests</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#management-and-treatment">Management and Treatment</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#prevention">Prevention</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#outlook--prognosis">Outlook / Prognosis</a></li>
        <li class="article-nav__li"><a class="article-nav__link" href="#living-with">Living With</a></li>
        </ul>
        </nav>
       
        <div class="js-health-article__content health-article__content">
        <div class="js-section js-section--overview">
        <h2 id="overview" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--overview"></span>
        Overview
        </h2>
        <figure class="img-container featured-media">
        <img src="https://www.clevelandclinic.org/healthinfo/ShowImage.ashx?PIC=2604&amp;border=0&amp;Crop=0&amp;width=280" alt="Acne pimples on a teenager’s face.">
        <figcaption class="media-caption">Acne is common among teenagers and causes pimples on your skin. </figcaption>
        </figure>
        <h3 id="what-is-acne-">What is acne?</h3>
        <p>Acne is a common skin condition where the pores of your <a href="https://my.clevelandclinic.org/health/articles/10978-skin" target="_blank">skin</a> clog. Pore blockages produce blackheads, whiteheads and other types of pimples. Pimples are pus-filled, sometimes painful, bumps on your skin.</p>
        <p>The medical term for acne is acne vulgaris.</p>
        <div id="mobile-ad-1" class="ad-mobile">
        <span id="billboard_300x250_mobiletrack"></span><div id="billboard_300x250_mobile" class="ad-mobile__container" data-google-query-id="CNXdk4u3mf8CFWxwpAQdTXgLEw"><div id="google_ads_iframe_/4213/cchl/skinhairnails/acne_1__container__" style="border: 0pt none; margin: auto; text-align: center;"><iframe id="google_ads_iframe_/4213/cchl/skinhairnails/acne_1" name="google_ads_iframe_/4213/cchl/skinhairnails/acne_1" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-google-container-id="2" data-load-complete="true" data-integralas-id-d904526e-f9d6-70e4-56fb-15369e225200=""></iframe></div></div>
        <div class="ad-mobile__description">
        <p>
        Cleveland Clinic is a non-profit academic medical center. Advertising on our site helps support our mission. We do not endorse non-Cleveland Clinic products or services.
        <a class="ad__description-link" href="https://health.clevelandclinic.org/advertising" target="_blank">Policy</a>
        </p>
        </div>
        </div><h3 id="what-are-the-types-of-acne-">What are the types of acne?</h3>
        <p>There are several types of acne, including:</p>
        <ul>
        <li><a href="https://my.clevelandclinic.org/health/diseases/24341-fungal-acne" target="_blank"><strong>Fungal acne</strong></a><strong> (pityrosporum folliculitis)</strong>: Fungal acne occurs when yeast builds up in your hair follicles. These can be itchy and inflamed.</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/21737-cystic-acne" target="_blank"><strong>Cystic</strong></a><strong> acne</strong>: Cystic acne causes deep, pus-filled pimples and nodules. These can cause scars.</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/21792-hormonal-acne" target="_blank"><strong>Hormonal acne</strong></a>: Hormonal acne affects adults who have an overproduction of sebum that clogs their pores.</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/22888-nodular-acne" target="_blank"><strong>Nodular acne</strong></a>: Nodular acne is a severe form of acne that causes pimples on the surface of your skin, and tender, nodular lumps under your skin.</li>
        </ul>
        <p>All of these forms of acne can affect your self-esteem, and both cystic and nodular acne can lead to permanent skin damage in the form of scarring. It’s best to seek help from a healthcare provider early so they can determine the best treatment option(s) for you.</p>
        <h3 id="who-does-acne-affect-">Who does acne affect?</h3>
        <p>Acne usually affects everyone at some point in their lifetime. It’s most common among teenagers and young adults undergoing hormonal changes, but acne can also occur during adulthood. Adult acne is more common among women and people assigned female at birth (AFAB). You may be more at risk of developing acne if you have a family history of acne (genetics).</p>
        <div id="mobile-ad-2" class="ad-mobile">
        <div id="billboard2_300x250_mobile" class="ad-mobile__container _hold-size"></div>
        </div><h3 id="how-common-is-acne-">How common is acne?</h3>
        <p>If you have acne, know that you’re not alone. Acne is the most common skin condition that people experience. An estimated 80% of people ages 11 to 30 will have at least a mild form of acne.</p>
        <h3 id="where-on-my-body-will-i-have-acne-">Where on my body will I have acne?</h3>
        <p>The most common places where you might have acne are on your:</p>
        <ul>
        <li>Face.</li>
        <li>Forehead.</li>
        <li>Chest.</li>
        <li>Shoulders.</li>
        <li>Upper <a href="https://my.clevelandclinic.org/health/diseases/22756-back-acne" target="_blank">back</a>.</li>
        </ul>
        <p>Oil glands exist all over your body. The common locations of acne are where oil glands exist the most.</p>
        </div>
        <div class="js-section js-section--symptoms-and-causes">
        <div id="mobile-ad-3" class="ad-mobile">
        <div id="billboard3_300x250_mobile" class="ad-mobile__container _hold-size"></div>
        </div><h2 id="symptoms-and-causes" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--symptoms-and-causes"></span>
        Symptoms and Causes
        </h2>
        <h3 id="what-are-the-symptoms-of-acne-">What are the symptoms of acne?</h3>
        <p>Symptoms of acne on your skin include:</p>
        <ul>
        <li><a href="https://my.clevelandclinic.org/health/diseases/22468-pimples" target="_blank"><strong>Pimples</strong></a><strong> (pustules)</strong>: Pus-filled bumps (papules).</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/22905-acne-papules" target="_blank"><strong>Papules</strong></a>: Small, discolored bumps, often red to purple or darker than your natural skin tone.</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/22038-blackheads" target="_blank"><strong>Blackheads</strong></a>: Plugged pores with a black top.</li>
        <li><a href="https://my.clevelandclinic.org/health/diseases/22039-whiteheads" target="_blank"><strong>Whiteheads</strong></a>: Plugged pores with a white top.</li>
        <li><strong>Nodules</strong>: Large lumps under your skin that are painful.</li>
        <li><strong>Cysts</strong>: Painful fluid-filled (pus) lumps under your skin.</li>
        </ul>
        <p>Acne can be mild and cause a few occasional pimples or it can be moderate and cause inflammatory papules. Severe acne causes nodules and cysts.</p>
        <h3 id="what-causes-acne-">What causes acne?</h3>
        <p>Clogged hair follicles or pores cause acne. Your <a href="https://my.clevelandclinic.org/health/body/23435-hair-follicle" target="_blank">hair follicles</a> are small tubes that hold a strand of your hair. There are several glands that empty into your hair follicles. When too much material is inside your hair follicle, a clog occurs. Your pores can clog with:</p>
        <ul>
        <li><strong>Sebum</strong>: An oily substance that provides a protective barrier for your skin.</li>
        <li><strong>Bacteria</strong>: Small amounts of bacteria naturally live on your skin. If you have too much bacteria, it can clog your pores.</li>
        <li><strong>Dead skin cells</strong>: Your skin cells shed often to make room for more cells to grow. When your skin releases dead skin cells, they can get stuck in your hair follicles.</li>
        </ul>
        <p>When your <a href="https://my.clevelandclinic.org/health/diseases/22773-clogged-pores" target="_blank">pores clog</a>, substances plug up your hair follicle, creating a pimple. This triggers inflammation, which you feel as pain and swelling. You can also see inflammation through skin discoloration like redness around a pimple.</p>
        <h4 id="triggers-of-acne">Triggers of acne</h4>
        <p>Certain things in your environment contribute to acne or they can make an acne breakout worse, including:</p>
        <ul>
        <li>Wearing tight-fitting clothing and headgear, like hats and sports helmets.</li>
        <li>Air pollution and certain weather conditions, especially high humidity.</li>
        <li>Using oily or greasy personal care products, like heavy lotions and creams, or working in an area where you routinely come in contact with grease, such as working at a restaurant with frying oil.</li>
        <li><a href="https://my.clevelandclinic.org/health/articles/11874-stress" target="_blank">Stress</a>, which increases the hormone cortisol.</li>
        <li>A side effect of a medication.</li>
        <li>Picking at your acne.</li>
        </ul>
        <h4 id="foods-that-cause-acne">Foods that cause acne</h4>
        <p>Some studies link particular foods and diets to acne, like:</p>
        <ul>
        <li>Skim milk.</li>
        <li>Whey protein.</li>
        <li>Diets high in sugar.</li>
        </ul>
        <p>While high-sugar diets may lead to acne outbreaks, chocolate isn’t directly linked to acne.</p>
        <p>To reduce your risk of acne, choose to eat a balanced, nutritious diet with plenty of fresh fruits and vegetables, especially those rich in vitamin C and beta-carotene, which helps reduce inflammation.</p>
        <h3 id="hormones-and-acne">Hormones and acne</h3>
        <p>Acne is largely a hormonal condition that’s driven by <a href="https://my.clevelandclinic.org/health/articles/22002-androgens" target="_blank">androgen hormones</a> (testosterone). This typically becomes active during teenage and young adult years. You might also notice acne forming around the time of your period as a result of hormone activity. Sensitivity to this hormone — combined with surface bacteria on your skin and substances released from your body’s glands — can result in acne.</p>
        </div>
        <div class="js-section js-section--diagnosis-and-tests">
        <h2 id="diagnosis-and-tests" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--diagnosis-and-tests"></span>
        Diagnosis and Tests
        </h2>
        <h3 id="how-is-acne-diagnosed-">How is acne diagnosed?</h3>
        <p>A healthcare provider can diagnose acne during a skin exam. During this exam, the provider will closely look at your skin to learn more about your symptoms. In addition, they may also ask about risk factors for acne, like:</p>
        <ul>
        <li>Are you feeling stressed?</li>
        <li>Do you have a family history of acne?</li>
        <li>If a woman or person AFAB, do you notice breakouts during your menstrual cycle?</li>
        <li>What medications do you currently take?</li>
        </ul>
        <p>Your healthcare provider won’t need to run any diagnostic tests for acne, but they may offer tests to diagnose any underlying conditions if you have sudden, severe acne outbreaks, especially if you’re an adult.</p>
        <h3 id="who-treats-acne-">Who treats acne?</h3>
        <p>A general healthcare provider or a <a href="https://my.clevelandclinic.org/health/articles/12165-dermatologists-skin-care-doctors" target="_blank">dermatologist</a> can diagnose and treat acne. If you have stubborn acne that doesn’t improve with treatment, a dermatologist can help.</p>
        <h3 id="how-severe-can-acne-get-">How severe can acne get?</h3>
        <p>Dermatologists rank acne by severity:</p>
        <ul>
        <li><strong>Grade 1 (mild)</strong>: Mostly whiteheads and blackheads, with a few papules and pustules.</li>
        <li><strong>Grade 2 (moderate or pustular acne)</strong>: Multiple papules and pustules, mostly on your face.</li>
        <li><strong>Grade 3 (moderately severe or nodulocystic acne)</strong>: Numerous papules and pustules, along with occasionally inflamed nodules. Your back and chest may also be affected.</li>
        <li><strong>Grade 4 (severe nodulocystic acne)</strong>: Numerous large, painful and inflamed pustules and nodules.</li>
        </ul>
        </div>
        <div class="js-section js-section--management-and-treatment">
        <h2 id="management-and-treatment" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--management-and-treatment"></span>
        Management and Treatment
        </h2>
        <h3 id="how-is-acne-treated-">How is acne treated?</h3>
        <p>There are several ways to treat acne. Each type of treatment varies based on your age, the type of acne you have and the severity. A healthcare provider might recommend taking oral medications, using topical medications or using medicated therapies to treat your skin. The goal of acne treatment is to stop new pimples from forming and to heal the existing blemishes on your skin.</p>
        <h4 id="topical-acne-medications">Topical acne medications</h4>
        <p>Your healthcare provider may recommend using a topical acne medication to treat your skin. You can rub these medications directly onto your skin as you would a lotion or a moisturizer. These could include products that contain one of the following ingredients:</p>
        <ul>
        <li><a href="https://my.clevelandclinic.org/health/drugs/18432-benzoyl-peroxide-clindamycin-skin-gel-or-lotion" target="_blank"><strong>Benzoyl peroxide</strong></a>: This is available as an over-the-counter product (such as Clearasil®, Stridex® and PanOxyl®) as a leave-on gel or wash. It targets surface bacteria, which often aggravates acne. Lower concentrations and wash formulations are less irritating to your skin.</li>
        <li><a href="https://my.clevelandclinic.org/health/drugs/20341-salicylic-acid-topical-gel-cream-lotion-solution" target="_blank"><strong>Salicylic acid</strong></a>: This is available over the counter for acne as a cleanser or lotion. It helps remove the top layer of damaged skin. Salicylic acid dissolves dead skin cells to prevent your hair follicles from clogging.</li>
        <li><strong>Azelaic acid</strong>: This is a natural acid found in various grains such as barley, wheat and rye. It kills microorganisms on the skin and reduces swelling.</li>
        <li><a href="https://my.clevelandclinic.org/health/treatments/23293-retinol" target="_blank"><strong>Retinoids</strong></a><strong> (vitamin A derivatives)</strong>: Retinol, such as Retin-A®, Tazorac® and Differin®, which is available without a prescription, breaks up blackheads and whiteheads and helps prevent clogged pores, the first signs of acne. Most people are candidates for retinoid therapy. These medications aren’t spot treatments and must be used on the entire area of skin affected by acne to prevent the formation of new pimples. You often need to use these for several months before noticing positive results.</li>
        <li><strong>Antibiotics</strong>: Topical antibiotics like clindamycin and erythromycin control surface bacteria that aggravate and cause acne. Antibiotics are more effective when combined with benzoyl peroxide.</li>
        <li><a href="https://my.clevelandclinic.org/health/drugs/20173-dapsone-topical-gel" target="_blank"><strong>Dapsone</strong></a>: Dapsone (Aczone®) is a topical gel, which also has antibacterial properties. It treats inflamed acne.</li>
        </ul>
        <h4 id="oral-acne-medications">Oral acne medications</h4>
        <p>Oral acne medications are pills that you take by mouth to clear your acne. Types of oral acne medications could include:</p>
        <ul>
        <li><strong>Antibiotics</strong>: Antibiotics treat acne caused by bacteria. Common antibiotics for acne include <a href="https://my.clevelandclinic.org/health/drugs/20959-tetracycline-tablets-or-capsules" target="_blank">tetracycline</a>, minocycline and doxycycline. These are best for moderate to severe acne.</li>
        <li><a href="https://my.clevelandclinic.org/health/drugs/19186-isotretinoin-capsules" target="_blank"><strong>Isotretinoin</strong></a><strong> (Amnesteem®, Claravis® and Sotret®)</strong>: Isotretinoin is an oral retinoid. Isotretinoin shrinks the size of oil glands, which contributes to acne formation.</li>
        <li><a href="https://my.clevelandclinic.org/health/drugs/3977-birth-control-the-pill" target="_blank"><strong>Contraceptives</strong></a>: The use of certain contraceptives can sometimes help women and people AFAB who have acne. The U.S. Food and Drug Administration (FDA) approved several types of birth control pills for treating acne. Some brand names include Estrostep®, Beyaz®, Ortho Tri-Cyclen® and Yaz®. These pills contain a combination of estrogen (the primary AFAB sex hormone) and progesterone (a natural form of steroid that helps regulate menstruation).</li>
        <li><strong>Hormone therapy</strong>: Hormone therapy is helpful for some people with acne, especially if you experience acne flare-ups during menstruation or irregular periods caused by excess androgen (a hormone). Hormone therapy consists of low-dose estrogen and progesterone (birth control pills) or a medication called spironolactone that blocks the effect of certain hormones at the level of your hair follicles and oil glands.</li>
        </ul>
        <h4 id="additional-acne-therapies">Additional acne therapies</h4>
        <p>If topical or oral medications don’t work well for your acne or if you have scars from your acne, a healthcare provider may recommend different types of acne therapies to clear your skin, including:</p>
        <ul>
        <li><strong>Steroids</strong>: Steroids can treat severe acne with injections into large nodules to reduce inflammation.</li>
        <li><strong>Lasers</strong>: Lasers and <a href="https://my.clevelandclinic.org/health/treatments/24385-phototherapy-light-therapy" target="_blank">light therapy</a> treat acne scars. A laser delivers heat to the scarred <a href="https://my.clevelandclinic.org/health/articles/23089-collagen" target="_blank">collagen</a> under your skin. This relies on your body’s wound-healing response to create new, healthy collagen, which encourages growth of new skin to replace it.</li>
        <li><a href="https://my.clevelandclinic.org/health/treatments/11010-chemical-peels" target="_blank"><strong>Chemical peels</strong></a>: This treatment uses special chemicals to remove the top layer of old skin. After removal of the top layer of skin, new skin grows in smoother and can lessen acne scars.</li>
        </ul>
        <h3 id="how-do-antibiotics-treat-acne-">How do antibiotics treat acne?</h3>
        <p><a href="https://my.clevelandclinic.org/health/drugs/16386-antibiotics" target="_blank">Antibiotics</a> are medications that target bacteria. Some used to treat acne also can decrease inflammation. Bacteria can clog your pores and cause acne. Antibiotics are responsible for:</p>
        <ul>
        <li>Blocking bacteria from entering your body.</li>
        <li>Destroying bacteria.</li>
        <li>Preventing bacteria from multiplying.</li>
        </ul>
        <p>A healthcare provider will recommend antibiotics if you have acne caused by bacteria or if you have an infection. Antibiotics get rid of an infection if bacteria gets into a popped pimple, which can swell and become painful. This medication isn’t a cure for acne and you shouldn’t take it long-term to treat acne.</p>
        <h3 id="how-can-i-make-my-acne-go-away-at-home-">How can I make my acne go away at home?</h3>
        <p>If you have acne, you can start an at-home skin care routine to help your acne go away by:</p>
        <ul>
        <li>Washing your skin at least once daily with warm (not hot) water and a gentle cleanser. Cleansers are over-the-counter skin care products that help clean your skin.</li>
        <li>Washing your skin after you exercise or sweat.</li>
        <li>Avoid using skin care products with alcohol, astringents, toners and exfoliants, which can irritate your skin.</li>
        <li>Removing your makeup at the end of the day or before you go to bed.</li>
        <li>Choosing an oil-free moisturizer to apply on your skin after cleansing.</li>
        <li>Avoid popping, picking or squeezing your acne. Let your skin heal naturally to prevent scars from forming on your skin.</li>
        </ul>
        <p>If your at-home skin care routine isn’t effective at treating acne, visit a healthcare provider.</p>
        <h3 id="is-acne-treatment-safe-for-people-who-are-pregnant-">Is acne treatment safe for people who are pregnant?</h3>
        <p>Many topical and oral acne treatments aren’t safe to take during pregnancy. If you’re pregnant or planning on becoming pregnant, it’s important to discuss acne treatments with your healthcare provider and notify them if you become pregnant.</p>
        <h3 id="how-long-does-it-take-for-acne-to-go-away-">How long does it take for acne to go away?</h3>
        <p>On average, it can take between one to two weeks for acne pimples to clear up on their own. With medicated treatment and a good skin care routine, you can speed up your body’s healing time to make acne go away faster. For severe acne, it can take several weeks for your acne to go away, even with treatment.</p>
        </div>
        <div class="js-section js-section--prevention">
        <h2 id="prevention" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--prevention"></span>
        Prevention
        </h2>
        <h3 id="how-can-i-prevent-acne-">How can I prevent acne?</h3>
        <p>You can’t completely prevent acne, especially during hormone changes, but you can reduce your risk of developing acne by:&nbsp;</p>
        <ul>
        <li>Washing your face daily with warm water and a facial cleanser.</li>
        <li>Using an oil-free moisturizer.</li>
        <li>Wearing “noncomedogenic” makeup products and removing makeup at the end of each day.</li>
        <li>Keeping your hands away from your face.</li>
        </ul>
        </div>
        <div class="js-section js-section--outlook--prognosis">
        <h2 id="outlook--prognosis" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--outlook--prognosis"></span>
        Outlook / Prognosis
        </h2>
        <h3 id="what-can-i-expect-if-i-have-acne-">What can I expect if I have acne?</h3>
        <p>Acne often goes away in early adulthood, though some people will continue to experience acne throughout adulthood. Your healthcare provider or a board-certified dermatologist can help you manage this condition. Various medications and therapies are effective forms of treatment. They target the underlying factors that contribute to acne. It may take several different types of treatment before you and your healthcare provider find one that works best for your skin. The skin care products that work for you might not work for someone else with similar symptoms.</p>
        <h3 id="can-acne-cause-scars-">Can acne cause scars?</h3>
        <p>Yes, sometimes acne can cause <a href="https://my.clevelandclinic.org/health/diseases/21222-acne-scars" target="_blank">scarring</a>. This happens when the acne penetrates the top layer of your skin and damages deeper skin layers. Inflammation makes your acne pores swell and the pore walls start to breakdown, which causes skin damage. Scarring can be a source of anxiety, which is normal. Before treatment, your healthcare provider will determine what type of acne caused your scars. There are several treatment options available for acne scars.</p>
        <h3 id="how-does-acne-affect-my-mental-health-">How does acne affect my mental health?</h3>
        <p>Acne can cause disruptions in your mental health because it affects your appearance and self-esteem. Often, acne development is out of your control if hormones cause it. This can create stress, which can influence future breakouts. Acne can be challenging for teenagers and young adults. If your acne causes you to feel anxious or it prevents you from participating in social activities with your friends and family, talk to a healthcare provider or a mental health professional.</p>
        </div>
        <div class="js-section js-section--living-with">
        <h2 id="living-with" class="js-health-article__section-title">
        <span class="js-section-icon section-icon section-icon--living-with"></span>
        Living With
        </h2>
        <h3 id="when-should-i-see-my-healthcare-provider-">When should I see my healthcare provider?</h3>
        <p>Visit a healthcare provider as soon as you notice pimples so you can start treatment immediately before scarring occurs. If you’re using an acne treatment that isn’t working to clear your acne or it causes skin irritation like itchiness or skin discoloration, visit a provider.</p>
        <h3 id="what-questions-should-i-ask-my-doctor-">What questions should I ask my doctor?</h3>
        <ul>
        <li>What type of acne do I have?</li>
        <li>How severe is my acne?</li>
        <li>Do I need to see a dermatologist?</li>
        <li>What over-the-counter medications do you recommend?</li>
        <li>What prescription medications do you recommend?</li>
        </ul>
        <p><strong>A note from Cleveland Clinic</strong></p>
        <p>Acne is the most common of all skin conditions and it can have an impact on your mental health and self-esteem. If you have stubborn acne, visit a healthcare provider or a dermatologist to treat your acne. Sometimes, your acne needs a little extra help to go away with a medication if at-home skin care treatments don’t work. While it may be tempting, try not to pick at your acne or pop pimples to prevent scarring. Remember that acne is temporary and will go away with the right treatment designed for your skin.</p>
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