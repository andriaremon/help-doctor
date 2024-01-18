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

    <h1 class="heading w3-text-red"> Flu</h1>
    <main class="content-primary">
                        

                        

        <div class="page-header ">
            <h1 class="h1-main">
                <span class="h1-main__title u-block">
                    Flu (Influenza)
                </span>
            </h1>
        </div>
        
        <div class="rtf mb-2">
            
        </div>
        
        
        
        
            <div class="rtf u-cf mb-2">
                
                <h2>Definition</h2><p>The flu is an infection of the nose, throat, and lungs. It spreads easily from person to person.</p><p>This article discusses influenza types A and B. A type of influenza A infection due to the H1N1 influenza strain is commonly called the swine flu.</p><h2>Alternative Names</h2><p>Influenza A; Influenza B; Oseltamivir (Tamiflu) - flu; Zanamivir (Relenza) - flu; Vaccine - flu</p><h2>Causes</h2><p>The flu is caused by an influenza virus. </p><p>Most people get the flu when they breathe in tiny airborne droplets from the coughs or sneezes of someone who has the flu. You can also catch the flu if you touch something with the virus on it, and then touch your mouth, nose, or eyes.</p><p>People often confuse colds and flu. They are different, but you might have some of the same symptoms. Most people get a cold several times a year. On the contrary, people generally get the flu only once every few years.</p><p>Sometimes, you can get a virus that makes you throw up or have diarrhea. Some people call this the "stomach flu." This is a misleading name because this virus is usually not the actual flu. The flu mostly affects your nose, throat, and lungs.</p><quizcontent title="Test Your Flu Prevention Knowledge" quizid="44"></quizcontent><h2>Symptoms</h2><p>Flu symptoms often start quickly. You can start to feel sick about 1 to 7 days after you come in contact with the virus. Most of the time, symptoms appear within 2 to 3 days.</p><p>The flu spreads easily. It can affect a large group of people in a very short amount of time. For example, students and co-workers often get sick within 2 or 3 weeks of the flu's arrival in a school or workplace.</p><p>The first symptom is a fever between 102°F (39°C) and 106°F (41°C). An adult often has a lower fever than a child.</p><p>Other common symptoms include:</p><ul><li>Body aches</li><li>Chills</li><li>Dizziness</li><li>Flushed face</li><li>Headache</li><li>Lack of energy</li><li>Nausea and vomiting</li></ul><p>The fever, aches, and pains begin to go away on days 2 through 4. But new symptoms may occur, including:</p><ul><li>Dry cough</li><li>Increased symptoms that affect breathing</li><li>Runny nose (clear and watery)</li><li>Sneezing</li><li>Sore throat</li></ul><p>Most symptoms go away in 4 to 7 days. The cough and tired feeling may last for weeks. Sometimes, the fever comes back.</p><p>Some people may not feel like eating.</p><p>The flu can make asthma, breathing problems, and other long-term (chronic) illnesses and conditions worse.</p><h2>Exams and Tests</h2><p>Most people do not need to see a health care provider when they have flu symptoms. This is because most people are not at risk for a severe case of the flu.</p><p>If you are very sick with the flu, you may want to see your provider. People who are at high risk for flu complications may also want to see a provider if they get the flu.</p><p>When many people in an area have flu, a provider can make a diagnosis after hearing about your symptoms. No further testing is needed.</p><p>There is a test to detect the flu. It is done by swabbing the nose or throat. Most of the time, test results are available very fast. The test can help your provider prescribe the best treatment.</p><h2>Treatment</h2><p>HOME CARE</p><p>Acetaminophen (Tylenol) and ibuprofen (Advil, Motrin) help lower fever. Providers sometimes suggest that you use both types of medicine. Do not use aspirin.</p><p>A fever does not need to come all the way down to a normal temperature. Most people feel better when the temperature drops by 1 degree.</p><p>Over-the-counter cold medicines may make some of your symptoms better. Cough drops or throat sprays will help with your sore throat.</p><p>You will need a lot of rest. Drink plenty of liquids. Do not smoke or drink alcohol.</p><p>ANTIVIRAL DRUGS</p><p>Most people with milder symptoms feel better in 3 to 4 days. They do not need to see a provider or take antiviral medicines.</p><p>Providers may give antiviral medicines to people who get very sick with the flu. You may need these medicines if you are more likely to have flu complications The health problems below may increase your risk of getting sicker with the flu:</p><ul><li>Lung disease (including asthma)</li><li>Heart conditions (except high blood pressure)</li><li>Kidney, liver, nerve, and muscle conditions</li><li>Blood disorders (including sickle cell disease)</li><li>Diabetes</li><li>A weakened immune system due to diseases (such as AIDS), radiation therapy, or certain medicines, including chemotherapy and corticosteroids</li><li>Other long-term medical problems</li></ul><p>These medicines may shorten the time you have symptoms by about 1 day. They work better if you start taking them within 2 days of your first symptoms.</p><p>Children at risk for a severe case of the flu may also need these medicines.</p><h2>Outlook (Prognosis)</h2><p>Millions of people in the United States get the flu each year. Most people get better within a week or two, but thousands of people with the flu develop pneumonia or a brain infection. They need to stay in the hospital. About 36,000 people in the United States die each year of problems from the flu.</p><p>Anyone at any age can have serious complications from the flu. Those at highest risk include:</p><ul><li>People age 65 or over</li><li>Children younger than 2 years old</li><li>Women who are more than 3 months pregnant</li><li>Anyone living in a long-term care facility</li><li>Anyone with chronic heart, lung, or kidney conditions, diabetes, or a weakened immune system </li></ul><h2>Possible Complications</h2><p>Complications may include:</p><ul><li>Pneumonia</li><li>Encephalitis (infection of the brain)</li><li>Meningitis</li><li>Seizures</li></ul><h2>When to Contact a Medical Professional</h2><p>Contact your provider if you get the flu and think you are at risk for having complications. </p><p>Also contact your provider if your flu symptoms are very bad and self-treatment is not working.</p><h2>Prevention</h2><p>You can take steps to avoid catching or spreading the flu. The best step is to get a flu vaccine.</p><img src="https://ssl.adam.com/graphics/images/en/19664.jpg" alt="Nasal spray flu vaccine"><p>If you have the flu: </p><ul><li>Stay in your apartment, dorm room, or home for at least 24 hours after your fever has gone.</li><li>Wear a mask if you leave your room.</li><li>Avoid sharing food, utensils, cups, or bottles.</li><li>Use hand sanitizer often during the day and always after touching your face.</li><li>Cover your mouth with a tissue when coughing and throw it away after use.</li><li>Cough into your sleeve if a tissue is not available. Avoid touching your eyes, nose, and mouth. </li></ul><p>The Centers for Disease Control and Prevention (CDC) recommends that everyone 6 months and older should receive the influenza vaccine. Children 6 months through 8 years of age may need 2 doses during a single flu season. Everyone else needs only 1 dose each flu season. For the 2022-2023 season, the CDC recommends use of any type of flu shot for those under age 65 and one of 3 high dose vaccines for those age 65 or older. The nasal spray flu vaccine (live attenuated influenza vaccine, or LAIV) may be given to healthy, non-pregnant people 2 through 49 years of age.</p><div class="disclaimer"><h2>References</h2><p>Aoki FY. Antiviral drugs for influenza and other respiratory virus infections. In: Bennett JE, Dolin R, Blaser MJ, eds. <em>Mandell, Douglas, and Bennett's Principles and Practice of Infectious Diseases.</em> 9th ed. Philadelphia, PA: Elsevier; 2020:chap 45.</p><p>Centers for Disease Control and Prevention website. Seasonal flu vaccines. <a href="https://www.cdc.gov/flu/prevent/flushot.htm">www.cdc.gov/flu/prevent/flushot.htm</a>. Updated August 25, 2022. Accessed December 15, 2022.</p><p>Centers for Disease Control and Prevention website. What you should know about flu antiviral drugs. <a href="https://www.cdc.gov/flu/treatment/whatyoushould.htm">www.cdc.gov/flu/treatment/whatyoushould.htm</a>. Updated November 17, 2022. Accessed November 23, 2022.</p><p>Havers FP, Campbell AJP. Influenza viruses. In: Kliegman RM, St. Geme JW, Blum NJ, Shah SS, Tasker RC, Wilson KM, eds. <em>Nelson Textbook of Pediatrics.</em> 21st ed. Philadelphia, PA: Elsevier; 2020:chap 285.</p><p>Ison MG, Hayden FG. Influenza. In: Goldman L, Schafer AI, eds. <em>Goldman-Cecil Medicine.</em> 26th ed. Philadelphia, PA: Elsevier; 2020:chap 340.</p><p>Treanor JJ. Influenza viruses, including avian influenza and swine influenza. In: Bennett JE, Dolin R, Blaser MJ, eds. <em>Mandell, Douglas, and Bennett's Principles and Practice of Infectious Diseases</em>. 9th ed. Philadelphia, PA: Elsevier; 2020:chap 165.</p><h2>Version Info</h2><ul><li>Last reviewed on 8/15/2022</li><li>Linda J. Vorvick, MD, Clinical Professor, Department of Family Medicine, UW Medicine, School of Medicine, University of Washington, Seattle, WA. Also reviewed by David C. Dugdale, MD, Medical Director, Brenda Conaway, Editorial Director, and the A.D.A.M. Editorial team.</li></ul></div>
                  <div class="disclaimer">
        <p><img alt="ADAM Quality" src="/-/media/images/logos/adamsquarequart.ashx?h=70&amp;w=70&amp;la=en" style="height: 70px; width: 70px;" class="photo-left">A.D.A.M., Inc. is accredited by URAC, also known as the American Accreditation HealthCare Commission (www.urac.org). URAC's accreditation program is the first of its kind, requiring compliance with 53 standards of quality and accountability, verified by independent audit. A.D.A.M. is among the first to achieve this important distinction for online health information and services. Learn more about A.D.A.M.'s editorial process. A.D.A.M. is also a founding member of Hi-Ethics (www.hiethics.com) and subscribes to the principles of the Health on the Net Foundation (www.hon.ch).</p>
        <p>The information provided herein should not be used during any medical emergency or for the diagnosis or treatment of any medical condition. A licensed physician should be consulted for diagnosis and treatment of any and all medical conditions. Call 911 for all medical emergencies. Links to other sites are provided for information only -- they do not constitute endorsements of those other sites. Copyright 2002 A.D.A.M., Inc. Any duplication or distribution of the information contained herein is strictly prohibited.</p>
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