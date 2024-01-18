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

    <h1 class="heading w3-text-red"> Headache </h1>

    <div class="max-w-md-lg mx-auto">

        <a href="https://www.health.harvard.edu/topics/pain">
                <p class="heading-subtle">Pain</p>
            </a>
        
    
    <h1 class="font-bold font-sans break-normal text-black mb-6 text-4xl lg:text-5xl leading-extra-tight">
    
        Headache: When to worry, what to do
    
    </h1>
    
            
            <div class="mb-4 mt-8">
                <span>April 15, 2020</span>
        </div>
    
            
            
            <div class="content-repository-content prose max-w-md-lg mx-auto flow-root getShouldDisplayAdsAttribute has-image-links">
                <h2>Understanding what causes headaches and finding treatments to relieve the pain</h2>
    
    <p><img alt="eb4282d8-b39e-4cc9-b592-98c3bc907c71" class="ucr-content-image" data-cr-imageid="eb4282d8-b39e-4cc9-b592-98c3bc907c71" height="400" src="https://domf5oio6qrcr.cloudfront.net/medialibrary/10775/eb4282d8-b39e-4cc9-b592-98c3bc907c71.jpg" width="600"></p>
    
    <p>Nearly everyone has had headache pain, and most of us have had it many times. A minor&nbsp;<a href="/topics/headache">headache</a> is little more than a nuisance that's relieved by an over-the-counter pain reliever, some food or coffee, or a short rest. But if your headache is severe or unusual, you might worry about stroke, a tumor, or a blood clot. Fortunately, such problems are rare. Still, you should know&nbsp;<a href="/blog/headaches-what-to-know-when-to-worry-2019061116803" target="_blank">when a headache needs urgent care</a>&nbsp;and how to control the vast majority of headaches that are not threatening to your health.</p>
    
    <div class="inline-ad not-prose">
    
        <div class="border-t border-gray-400"></div>
        <div class="px-6 py-10 md:py-12 md:px-10 xl:p-20 xl:!px-12 xl:!py-14 image-link-wrapper max-w-md-lg mx-auto">
        <div class="max-w-screen-xl mx-auto">
    
            <div class="sm:grid sm:grid-cols-3 sm:gap-8">
    
                <div class="sm:col-span-2">
    
                    <h2 class="font-bold text-3xl md:text-4xl leading-extra-tight mb-4 font-bold font-sans !text-xl sm:!text-xl leading-tight mt-0 mb-4">
        <a class="hover:text-red focus:text-red transition-colors duration-200" target="_blank" href="https://www.health.harvard.edu/promotions/sumo/fighting-inflammation/?utm_campaign=Inflammation_site_ad_new_image">Protect yourself from the damage of chronic inflammation.</a>
    </h2>
    
                    <p class="text-sm font-sans leading-prose">
                        Science has proven that chronic, low-grade inflammation can turn into a silent killer that contributes to cardiovas­cular disease, cancer, type 2 diabetes and other conditions. Get simple tips to fight inflammation and stay healthy -- from Harvard Medical School experts.
                    </p>
    
                    <a class="inline-block group relative mt-4 hover:text-red focus:text-red transition-colors duration-200" target="_blank" href="https://www.health.harvard.edu/promotions/sumo/fighting-inflammation/?utm_campaign=Inflammation_site_ad_new_image">
        <span class="h-full flex items-center">
    
            <span class="mr-4 leading-tight uppercase border-b border-transparent tracking-widest font-sans font-medium text-md">
    
                Learn More
    
            </span>
    
            <svg class="w-6 h-6 transform transition transition-transform -translate-x-2 duration-200 group-hover:translate-x-0 text-red" width="30" height="30" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"></path></svg>
    
        </span>
        <span class="w-full absolute bottom-0 left-0 h-[2px] bg-red origin-left scale-0 group-hover:scale-100 transform duration-200"></span>
    </a>
                </div>
    
                <div class="mt-8 sm:mt-0 h-full">
                    <a target="_blank" href="https://www.health.harvard.edu/promotions/sumo/fighting-inflammation/?utm_campaign=Inflammation_site_ad_new_image" class="w-full h-full">
                        <span class="sr-only">View Protect yourself from the damage of chronic inflammation.</span>
    
                        <picture>
                                                    <img width="350" height="215" class="object-contain w-full" src="https://domf5oio6qrcr.cloudfront.net/medialibrary/13752/GettyImages-585586116.jpg" alt="Couple running in woods" role="presentation" loading="lazy">
                        </picture>
    
                    </a>
                </div>
    
            </div>
    
        </div>
    </div>
        <div class="border-t border-gray-400"></div>
    </div>
    <h3><strong>What causes headaches?</strong></h3>
    
    <p>Doctors don't fully understand what&nbsp;<a href="/headache/causes-of-headaches" target="_blank">causes most headaches</a>. They do know that the brain tissue and the skull are never responsible since they don't have nerves that register pain. But the blood vessels in the head and neck can signal pain, as can the tissues that surround the brain and some major nerves that originate in the brain. The scalp, sinuses, teeth, and muscles and joints of the neck can also cause head pain.</p>
    
    <h3><strong>When to worry about a headache</strong></h3>
    
    <p>You can take care of many types of headaches by yourself, and your doctor can give you medication to control most of the tougher headaches. But some headaches call for prompt medical care. Here are some warning signs for when you should worry about headaches:</p>
    
    <ul>
        <li>Headaches that first develop after age 50</li>
        <li>A major change in the pattern of your headaches</li>
        <li>An unusually severe headache</li>
        <li>Head pain that increases with coughing or movement</li>
        <li>Headaches that get steadily worse</li>
        <li>Changes in personality or mental function</li>
        <li>Headaches that are accompanied by fever, stiff neck, confusion, decreased alertness or memory, or neurological symptoms such as visual disturbances, slurred speech, weakness, numbness, or seizures</li>
        <li>Headaches that are accompanied by a painful red eye</li>
        <li>Headaches that are accompanied by pain and tenderness near the temples</li>
        <li>Headaches after a blow to the head</li>
        <li>Headaches that prevent normal daily activities</li>
        <li>Headaches that come on abruptly, especially if they wake you up</li>
        <li>Headaches in patients with cancer or impaired immune systems</li>
    </ul>
    
    <h3><strong>Types of headaches</strong></h3>
    
    <p>There are more than 300&nbsp;<a href="/healthbeat/what-type-of-headache-do-you-have" target="_blank">types of headaches</a>, but only about 10% of headaches have a known cause. The others are called primary headaches. Here is a rundown on some major primary headaches.</p>
    
    <h3><strong>Tension headaches</strong></h3>
    
    <p>Occurring in about three of every four adults, <a href="/pain/4-ways-to-tame-tension-headaches">tension headaches</a> are the most common of all headaches. In most cases, they are mild to moderate in severity and occur infrequently. But a few people get severe tension headaches, and some are troubled by them for three or four times a week.</p>
    
    <p>The typical tension headache produces a dull, squeezing pain on both sides of the head. People with strong tension headaches may feel like their head is in a vise. The shoulders and neck can also ache. Some tension headaches are triggered by fatigue, emotional stress, or problems involving the muscles or joints of the neck or jaw. Most last for 20 minutes to two hours.</p>
    
    <p>If you get occasional tension-type headaches, you can take care of them yourself. Over-the-counter pain relievers such as acetaminophen (Tylenol, other brands) and nonsteroidal anti-inflammatories (NSAIDs) such as aspirin, naproxen (Aleve, other brands), or ibuprofen (Motrin, Advil, other brands) often do the trick, but follow the directions on the label, and never take more than you should. A heating pad or warm shower may help; some people feel better with a short nap or light snack.</p>
    
    <p>If you get frequent tension-type headaches, try to identify triggers so you can avoid them. Don't get overtired or skip meals. Learn relaxation techniques; <a href="https://health.harvard.edu/staying-healthy/the-physical-benefits-of-yoga">yoga</a> is particularly helpful because it can relax both your mind and your neck muscles. If you clench your jaw or grind your teeth at night, a bite plate may help.</p>
    
    <p>If you need more help, your doctor may prescribe a stronger pain medication or a muscle relaxant to control headache pain. Many people with recurrent tension-type headaches can prevent attacks by taking a tricyclic antidepressant such as amitriptyline (Elavil, generic). Fortunately, most people with tension-type headaches will do very well with simpler programs.</p>
    
    <h3><strong>Migraine</strong></h3>
    
    <p><a href="/pain/migraine">Migraines</a>&nbsp;occur less often than tension headaches, but they are usually much more severe. They are two to three times more common in women than men, but that's small consolation if you are among the 6% to 8% of all men who have migraines. And since a Harvard study of 20,084 men age 40 to 84 reported that having migraines boosts the risk of heart attacks by 42%,&nbsp;<a href="/mens-health/feel-your-pain-the-health-risk-of-migraines-in-men" target="_blank">men with migraines</a>&nbsp;should take their headaches to heart.</p>
    
    <p>Neurologists believe that migraines are caused by changes in the brain's blood flow and nerve cell activity. Genetics play a role since 70% of migraine victims have at least one close relative with the problem.</p>
    
    <p><strong><em>Migraine triggers.</em></strong>&nbsp;Although a migraine can come on without warning, it is often set off by a trigger. The things that set off a migraine vary from person to person, but a migraine sufferer usually remains sensitive to the same triggers. The table lists some of the most common ones.</p>
    
    <table border="1" cellspacing="0" class="Table" style="border-collapse:collapse; border:undefined">
        <tbody>
            <tr>
                <td style="vertical-align:top">
                <h4><strong>Major migraine triggers</strong></h4>
    
                <ul>
                    <li>Changing weather: rising humidity, heat</li>
                    <li>Lack of sleep or oversleeping</li>
                    <li>Fatigue</li>
                    <li>Emotional stress</li>
                    <li>Sensory triggers: bright or flickering lights, loud noises, strong smells</li>
                    <li>Dietary triggers:
                    <ul style="list-style-type:circle">
                        <li>missing a meal</li>
                        <li>alcohol, especially red wine</li>
                        <li>chocolate</li>
                        <li>nitrates in cured meats and fish</li>
                        <li>aged cheese</li>
                        <li>an increase or decrease in caffeine</li>
                        <li>MSG (often present in Asian and prepared foods)</li>
                    </ul>
                    </li>
                </ul>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p><strong><em>Migraine symptoms.</em></strong>&nbsp;Migraines often begin in the evening or during sleep. In some people, the attacks are preceded by several hours of fatigue, <a href="/mind-and-mood/what-causes-depression">depression</a>, and sluggishness or by irritability and restlessness. Because migraine symptoms vary widely, at least half of all migraine sufferers think they have sinus or tension headaches, not migraines.</p>
    
    <p>About 20% of migraines begin with one or more neurological symptoms called an aura. Visual complaints are most common. They may include halos, sparkles or flashing lights, wavy lines, and even temporary loss of vision. The aura may also produce numbness or tingling on one side of the body, especially the face or hand. Some patients develop aura symptoms without getting headaches; they often think they are having a stroke, not a migraine.</p>
    
    <p>The majority of migraines develop without an aura. In typical cases, the pain is on one side of the head, often beginning around the eye and temple before spreading to the back of the head. The pain is frequently severe and is described as throbbing or pulsating. Nausea is common, and many migraine patients have a watering eye, a running nose, or congestion. If these symptoms are prominent, they may lead to a misdiagnosis of sinus headaches. One way to remember the features of migraine is to use the word POUND</p>
    
    <p>P is for pulsating pain<br>
    O for one-day duration of severe untreated attacks<br>
    U for unilateral (one-sided) pain<br>
    N for nausea and vomiting<br>
    D for disabling intensity.</p>
    
    <p>Without effective treatment, migraine attacks usually last for four to 24 hours. When you're suffering a migraine, even four hours is far too long — and that's why early treatment for a migraine is so important.</p>
    
    <p><strong><em>Migraine treatment.</em></strong>&nbsp;If you spot a migraine in its very earliest stages, you may be able to control it with nonprescription pain relievers. Acetaminophen, aspirin, ibuprofen, naproxen, and a combination of pain medications and caffeine are all effective — if you take a full dose very early in the attack.</p>
    
    <p>When prescription drugs are needed, most doctors turn to the triptans, which are available as tablets, nasal sprays, or as injections that patients can learn to give to themselves. Examples include sumatriptan (Imitrex), zolmitriptan (Zomig), and rizatriptan (Maxalt). Triptans provide complete relief within two hours for up to 70% of patients; the response is best if treatment is started early. Some patients require a second dose within 12 to 24 hours. Patients with cardiovascular disease and those who take a high dose of certain antidepressants need to discuss the risks of using them with their doctor.</p>
    
    <p>Work with your doctor to find the migraine treatment that works best for you. Remember, though, that overuse can lead to rebound headaches and a vicious cycle of drugs and headaches. So, if you need treatment more than two or three times a week, consider preventive medications.</p>
    
    <p><strong><em>Migraine prevention.</em></strong>&nbsp;Some people can prevent migraines simply by avoiding triggers. Others do well with prompt therapy for occasional attacks. But patients who suffer frequent migraine attacks often benefit from preventive medications. Effective prescription drugs include beta blockers (such as propranolol, nadolol and atenolol), certain antidepressants (such as amitriptyline), and certain antiseizure medications (such topiramate and valproate). Difficult cases may benefit from referral to a headache specialist.</p>
    
    <h3><strong>Cluster headaches</strong></h3>
    
    <p>Cluster headaches are uncommon but very severe headaches, and they occur five times more often in men than women. Although anyone can get cluster headaches, the typical patient is a middle-aged man with a history of smoking.</p>
    
    <p>The problem gets its name because the headaches tend to come in clusters, with one to eight headaches a day during a one- to three-month period every year or two, often at the same time of year. The pain always strikes one side of the head and is very severe. The eye on the painful side is red and watery, the eyelid may droop, and the nose runs or is blocked. The attack starts abruptly and lasts for 30 to 60 minutes. Most sufferers become restless and agitated during the attack; unable to sit still, they pace, jog in place, or beat their head against a wall. Nausea and sensitivity to light and sound may accompany the pain.</p>
    
    <p>Inhaling high flow oxygen soon after the onset of the headache can often stop the attack. Sumatriptan is often effective for cluster headaches, particularly when given by injection. Other triptans may also help. Some patients favor lidocaine nose drops, dihydroergotamine injections, or other treatments. The most effective medication for preventing cluster headache attacks is verapamil, a calcium-channel blocker. Other drugs that may help include divalproex, topiramate, and lithium.</p>
    
    <h3><strong>Other types of headaches</strong></h3>
    
    <p>Doctors have diagnosed hundreds of conditions associated with headaches. Here are just a few:</p>
    
    <p><strong><em>Medication headaches.</em></strong>&nbsp;Many drugs number headaches among their side effects. And although it seems paradoxical, many medications used to treat headaches can also cause medication overuse headaches or rebound headaches. Migraine sufferers are particularly vulnerable to a vicious cycle of pain leading to more medication, which triggers more pain. If you have frequent headaches and use medication, OTC or prescription, or both, for more than 10 to 15 days a month, you may have medication overuse headaches. The way to find out is to discontinue or taper your medication — but always consult your doctor first. A corticosteroid such as prednisone may help control pain during the withdrawal period.</p>
    
    <p><strong><em>Sinus headaches.</em></strong>&nbsp;<a href="/diseases-and-conditions/what_to_do_about_sinusitis">Acute sinusitis</a>&nbsp;causes pain over the forehead, around the nose and eyes, over the cheeks, or in the upper teeth. Stooping forward increases the pain. Thick nasal discharge, congestion, and fever pinpoint the problem to the sinuses. When the acute infection resolves, the pain disappears. Sinusitis is not a common cause of chronic or recurrent headaches.</p>
    
    <p><strong><em>Ice cream headaches.</em></strong>&nbsp;Some people develop sharp, sudden headache pain when they eat anything cold. The pain is over in less than a minute, even if you keep eating. If you are bothered by ice cream headaches, try eating slowly and warming the cold food at the front of your mouth before you swallow it.</p>
    
    <p><strong><em>Headache from high blood pressure.</em></strong>&nbsp;Except in cases of very high blood pressure, hypertension does not cause headaches. In fact, most people with&nbsp;<a href="/heart-health/7-ways-to-keep-stress-and-blood-pressure-down" target="_blank">high blood pressure</a>&nbsp;don't&nbsp;have any symptoms at all, and a study of 51,234 people reported that hypertension was associated with a&nbsp;<em>reduced</em>&nbsp;incidence of headaches. But that's no reason to neglect your blood pressure. Hypertension leads to strokes, <a href="/heart-disease-overview/heart-attacks-in-women">heart attacks</a>, <a href="/heart-health/stay-on-top-of-heart-failure-symptoms">heart failure</a>, and kidney disease, so all men should have their pressure checked, and then take steps to correct abnormalities.</p>
    
    <p><strong><em>Headache from exercise and sex.</em></strong>&nbsp;Sudden, strenuous exercise can bring on a headache. Gradual warm-ups or treatment with an anti-inflammatory medication before exercise can help. Sexual intercourse may also trigger headaches; some men note only dull pain, but others suffer from severe attacks called orgasmic headaches. Some people can prevent orgasmic headaches by taking an NSAID 30 to 60 minutes before intercourse.</p>
    
    <h3><strong>Headache testing</strong></h3>
    
    <p>Modern medicine depends on tests to diagnose many problems. For most headaches, though, a good old-fashioned history and physical will do the job. In fact, CT scans, MRIs, and EEGs (brain wave tests) look normal in tension-type headaches, migraines, and cluster headaches. Still, these tests can be vital in patients with warning signs or other worrisome headaches.</p>
    
    <h3><strong>Living with constant headaches</strong></h3>
    
    <p>For most of us, an occasional headache is nothing more than a temporary speed bump in the course of a busy day. Even so, most men can ease the problem with simple lifestyle measures and nonprescription medications. Relaxation techniques, biofeedback, yoga, and acupuncture may also help. But for some of us, headaches are a big problem. Learn to recognize warning signs that call for prompt medical care. Work with your doctor to develop a program to prevent and treat migraines and other serious headaches. And don't fall into the trap of overusing medications; for some gents, rebound headaches are the biggest pain of all.</p>
    
    <div>
    
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