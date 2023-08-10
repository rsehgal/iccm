<?php

require_once "helpers.php";
require_once "Forms.php";
require_once "DB.php";
require_once "helpers2.php";
require_once "mailer.php";
require_once "yourtasks.php";
function Home(){
    $homeMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left" style="margin-bottom: 25px !important;">
                    <h3 style="text-decoration:underline;"><strong>INTRODUCTION</strong></h3>
                </div>
                <div class="about-text">
                    <p align="justify">
                       CARBON is a unique material with wide range of structures and properties. Though the research on carbon based materials started centuries ago, the interest has renewed with the advent of newer and exotic forms of carbon. The Indian Carbon Society, formed in 1979, has been organizing conferences on carbon materials at regular intervals till the pandemic disrupted the world. Since the last conference on Carbon Materials in 2019, when the researchers, students and industry representative met physically, there has been a gap of 4 years. To rejuvenate the researchers and the practitioners, the Maharashtra Chapter of Indian Carbon Society along with Materials Group, BARC is pleased to invite you to the <strong>Indian Conference on Carbon Materials (ICCM)-2023</strong> at DAE Convention Centre, Bhabha Atomic Research Centre<strong></strong> during <strong>November 30 - December 2, 2023</strong> and provide you a forum in which the latest scientific and technical developments in the field of  carbon will be discussed. This is an excellent platform for the researchers, academicians, students and industrialists to showcase their works and interact among themselves.
    <br>
    <br>
    
    
    <!--<a class="btn" href="#">Read More</a>-->
    
    <iframe width="80%" height="215" src="https://www.youtube.com/embed/pzqoV8vEwsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    
    
                  </p>
                    
                   <!-- <a class="btn" href="#">Read More</a>-->
                </div>
            </div>
            
          <div class="col-lg-5 col-md-6" style="margin-top:0 !important; margin-bottom:auto !important;">
          
        
                    
                 <div class="section-header text-center">
            
            <!-- <h5 style="color:#900;"> Conference Will Start in</h5>-->
             
             </div>
    
          
          
          <div style="background-color:none; padding-bottom: 10px;"> <!--padding-top: 20px;-->
-     
        <div class="countdown" id="js-countdown">

    <div class="countdown__item countdown__item">
  <!--  <div class="countdown__timer js-countdown-days" aria-labelledby="day-countdown">
    
    </div>
    <div class="countdown__label" id="day-countdown">Days</div>
    </div>
    
    <div class="countdown__item">
    <div class="countdown__timer js-countdown-hours" aria-labelledby="hour-countdown">
    
    </div>
    
    <div class="countdown__label" id="hour-countdown">Hours</div>
    </div>
    
    <div class="countdown__item">
    <div class="countdown__timer js-countdown-minutes" aria-labelledby="minute-countdown">
    
    </div>
    
    <div class="countdown__label" id="minute-countdown">Minutes</div>
    </div>
    
    <div class="countdown__item">
    <div class="countdown__timer js-countdown-seconds" aria-labelledby="second-countdown">
    
    </div>
    
    <div class="countdown__label" id="second-countdown">Seconds</div>
    -->
    <script type="text/javascript">
    // ========================== //
    // 2017 Countdown JS
    // ========================== //
    
    const countdown = new Date("November 30, 2023");
    
    function getRemainingTime(endtime) {
    const milliseconds = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor( (milliseconds/1000) % 60 );
    const minutes = Math.floor( (milliseconds/1000/60) % 60 );
    const hours = Math.floor( (milliseconds/(1000*60*60)) % 24 );
    const days = Math.floor( milliseconds/(1000*60*60*24) );
    
    return {
    "total": milliseconds,
    "seconds": seconds,
    "minutes": minutes,
    "hours": hours,
    "days": days,
    };
    }
    
    function initClock(id, endtime) {
    const counter = document.getElementById(id);
    const daysItem = counter.querySelector(".js-countdown-days");
    const hoursItem = counter.querySelector(".js-countdown-hours");
    const minutesItem = counter.querySelector(".js-countdown-minutes");
    const secondsItem = counter.querySelector("".js-countdown-seconds");
    
    function updateClock() {
    const time = getRemainingTime(endtime);
    
    daysItem.innerHTML = time.days;
    hoursItem.innerHTML = ("0" + time.hours).slice(-2);
    minutesItem.innerHTML = ("0" + time.minutes).slice(-2);
    secondsItem.innerHTML = ("0" + time.seconds).slice(-2);
    
    if (time.total <= 0) {
    clearInterval(timeinterval);
    }
    }
    
    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
    }
    
    initClock("js-countdown", countdown);
    
    
    
    
    // ========================== //
    // 2013 Countdown JS
    // ========================== //
    
    // function counter() {
    //   var today = new Date(); //variable contains current date and time
    
    //   var days = calcDays(today); //calculate the time left until set date below
    //   document.countDown.daysLeft.value = Math.floor(days); // displays days rounded to the next lowest integer
    
    //   var hours = (days - Math.floor(days)) * 24; //calculate the hours left in the current day
    //   document.countDown.hrLeft.value = Math.floor(hours); // display hours rounded to the next lowest integer
    
    //   var minutes = (hours - Math.floor(hours)) * 60; // calculate the minutes left in the current hour
    //   document.countDown.minLeft.value = Math.floor(minutes); // display minutes rounded to the next lowest integer
    
    //   var seconds = (minutes - Math.floor(minutes)) * 60; //calculate the seconds left in the current minute
    //   document.countDown.secLeft.value = Math.floor(seconds); // display seconds rounded to the next lowest integer
    // }
    
    // function calcDays(currentDate) {
    //   //create a date object for date of graduation
    //   //calculate the difference between currentDate and set date
    //   setDate = new Date("May 6, 2013");
    //   currentTime = currentDate.getFullYear() + 1;
    //   setDate.setFullYear(currentTime);
    
    //   days = (setDate - currentDate) / (1000 * 60 * 60 * 24);
    //   return days;
    // }
    
    // setInterval("counter()", 1000)
    </script>
    </div>
    </div>
            
        
        <!--	<div class="hs-featured-excerpt">
            CardioAlex 2017 Presentations
    
    
            </div>-->
        
       
                        
            </div>
          
          
                
                <div class="about-text">
                    
                    <div class="table-responsive">
                    
                    
    
    <table width="100%" border="0">
    
    <tr style="font-size:16px; color:#FFF;">
    <td width="50%" align="center" valign="top" bgcolor="#29297a" style="padding-top:10px; padding-bottom:10px;">
    
    <strong>Important Updates</strong></td>
    </tr>
    
    <tr style="font-size:15px;">
    <td width="50%" valign="top" align="center" style="color:#000; height:150px; border-bottom:#000; ">
    
    <div class="container">
    
    
    <h1 class="text-red blink-soft">
    <span style="color:#900;"><strong> Deadline of abstract submission is August 30, 2023 </strong></span> 
    </h1>
    <br>
    
    <h1 class="text-red blink-soft">
    <span style="color:#900;"><strong> Deadline for the Nominations of Awards is <br/>September 30, 2023 </strong></span> 
    </h1>
    <br>

    
    <h1 class="text-red blink-hard">
    <span style="color:#900;"><a><strong>Early bird registration closes on October 01, 2023</strong></a></span> 
    </h1>
    <br>
    
    
    
    </div>
    
    
    </td>
    </tr>
    
    <tr style="font-size:16px; color:#FFF;">
    <td width="50%" align="center" valign="top" bgcolor="#16679E">
    
    </td>
    </tr>
    
     <tr class="text-center">
     <td><a href="PDF/Steps_for_registration.pdf"  class="blink-soft font-weight-bold" >Steps for ICCM registration </a></td>
     </tr> 
     <tr class="text-center">
     <td><a href="PDF/Steps_for_Abstract_Submission.pdf" class="blink-hard font-weight-bold" >Steps for Abstract submission </a></td>
     </tr> 

    <tr style="font-size:16px; color:#FFF;">
    <td width="50%" align="center" valign="top" bgcolor="#16679E">
    
    </td>
    </tr>
    
    
    </table>
    
    </div>
    
                   <!-- <a class="btn" href="#">Read More</a>-->
                </div>
            </div>  
            
            
        </div>
    </div>
    </div>
    <!-- About End -->
    
    
    
    
    
    
    
    <!-- Fact Start -->
    
    <!-- Fact End -->
    
    
    <!-- Service Start -->
    
    <!-- Service End -->
    
    
    
    
    <!-- FAQs Start -->
    <!-- Org committee Start -->
    
    
    <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-orgcom.jpg); background-attachment:fixed;">
    <div class="container">
    
    <div class="section-header text-center">
           
           <br>
    <br>
    
            <h3 style="color:#FFF;"><strong>CONFERENCE OFFICE  BEARERS</strong></h3>
            
        </div>
    
    <div class="row">
    
    
    <div class="col-lg-2 col-md-12" style="top:-15px !important;">
                <div class="table-responsive">
                <table width="100%" border="0">
    <tr align="center">
    <td align="center" valign="top">
    <img src="img/org committee/1.png" width="80%">
    </td>
    </tr>
    <tr style="font-size:15px;">
    <td width="33%" valign="top" align="center">
    <p><span style="font-size:14px; color:#FFF"><strong>Dr. Raghvendra Tewari<br>
    BARC</strong><br>
    Conference Chairman
    </span></p>
    </td>
    </tr>
    </table>
    </div>
    </div>
    
    
    <div class="col-lg-3 col-md-12" style="top:-15px !important;">
                <div class="table-responsive">
                <table width="100%" border="0">
    <tr align="center">
    <td align="center" valign="top">
    <img src="img/org committee/2.png" width="50%" class="logocontrol">
    <img src="img/org committee/2.png" width="80%" class="logocontrol2">
    </td>
    </tr>
    <tr style="font-size:15px;">
    <td width="33%" valign="top" align="center">
    <p><span style="font-size:15px; color:#FFF"><strong>Dr. Ashok K. Arya<br>
    BARC</strong><br>
    Conference Co-Chairman</span></p>
    </td>
    </tr>
    </table>
    </div>
    </div>
    
    
    <div class="col-lg-2 col-md-12" style="top:-15px !important;">
                <div class="table-responsive">
                <table width="100%" border="0">
    <tr align="center">
    <td align="center" valign="top">
    <img src="img/org committee/3.png" width="80%">
    </td>
    </tr>
    <tr style="font-size:15px;">
    <td width="33%" valign="top" align="center">
    <p><span style="font-size:15px; color:#FFF"><strong>Dr. Kinshuk Dasgupta<br>
    BARC</strong><br>
    Conference Convener</span></p>
    </td>
    </tr>
    </table>
    </div>
    </div>                    
    
    
    
    
    <div class="col-lg-3 col-md-12" style="top:-15px !important;">
                <div class="table-responsive">
                <table width="100%" border="0">
    <tr align="center">
    <td align="center" valign="top">
    <img src="img/org committee/4.png" width="50%" class="logocontrol">
    <img src="img/org committee/4.png" width="80%" class="logocontrol2">
    </td>
    </tr>
    <tr style="font-size:15px;">
    <td width="33%" valign="top" align="center">
    <p><span style="font-size:15px; color:#FFF"><strong>Dr. Jyoti Prakash<br>
    BARC</strong><br>
    Conference Secretary</span></p>
    </td>
    </tr>
    </table>
    </div>
    </div> 
    
    
    <div class="col-lg-2 col-md-12" style="top:-15px !important;">
                <div class="table-responsive">
                <table width="100%" border="0">
    <tr align="center">
    <td align="center" valign="top">
    <img src="img/org committee/5.png" width="80%">
    </td>
    </tr>
    <tr style="font-size:15px;">
    <td width="33%" valign="top" align="center">
    <p><span style="font-size:15px; color:#FFF"><strong>Dr. Manishkumar D Yadav<br>
    ICT</strong><br>
    Conference Treasurer</span></p>
    </td>
    </tr>
    </table>
    </div>
    </div> 
    
    
    </div>  
    </div>
    </div>
    </div>';


$homeMsg.='<hr/>';

$homeMsg.=' <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-orgcom.jpg); background-attachment:fixed;">
    <div class="container">
    
    <div class="section-header text-center">
    <br/><br/> 
            <h3 style="color:#FFF;"><strong>SPEAKERS</strong></h3>
    <br/>
';

$homeMsg.=Speakers();
$homeMsg.='</div></div></div>';
$homeMsg.=' 
    <!-- org committee End -->
    <!-- FAQs End -->
    
    
    
    <!-- Blog Start -->
    
    <div class="faqs">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
            
           
        
          <div>
          
           <img src="img/DAE-Convention-Centre.jpg"  alt="By Air" width="100%">
          
          </div>
          
    
            </div>
            
            
            <div class="col-md-6">
            
            <div class="section-header text-center" style="margin-bottom: 5px !important;">
            
             <h4 style="font-size:25px !important;">Venue : DAE Convention Centre, Anushaktinagar, Mumbai</h4>
           <br>
    
            <p align="justify" style="color:#000 !important; font-weight:normal; font-size:17px;"> 2WJH+V32, Anushakti Nagar, Mumbai, Maharashtra 400094</p>
            <br>
    
           <p align="justify" style="color:#000 !important; font-weight:normal; font-size:17px;">
          The venue of ICCM-2023 is a state-of – the-art convention centre facility located in the beautiful residential township of BARC surrounded by lush greenery and picturesque views. DAE Convention Centre has three auditoriums, exhibition halls and ample dining space. The main auditorium has seating capacity of 1000 and each of the two mini auditoriums can accommodate 250 people. All auditoriums are well-furnished, air-conditioned and equipped with all modern amenities. The DAE Convention Centre also has two fully equipped board rooms with a seating capacity of 30 people for conducting small group meetings. <br>
          <br>
          
    
    DAE Convention Centre has a guest house facility within the venue and two guest houses of BARC nearby the venue which can accommodate a limited number of the conference participants.. <br>
    <br>
    </p> 
           
        </div>
    
    <div class="col-md-12">
        
        <div class="about-text" align="left">
    <a class="btn" href="venue.html" style="background:#03F; color:#FFF;">Read More</a>   
    </div>
    
    </div>                   
                
            </div>
        </div>
    </div>
    </div>     
    
    <!-- Blog End -->  
    
    
    
    <!-- Blog Start -->
    <div class="blog">
    <div class="container">
        <div class="section-header text-center">
           
            <h3><strong>MUMBAI CITY ATTRACTIONS</strong></h3>
        </div>
        <div class="row blog-page">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/tour/1.jpg" alt="Bandra-Worli Sea Link">
                    </div>
                    <div class="blog-title">
                        <h3>Bandra-Worli Sea Link</h3>
                       <a class="btn" href="img/tour/1.jpg" data-lightbox="service">+</a>
                    </div>
                    
                    <div class="blog-text">
                        <p>
                           The Bandra-Worli Sea Link (officially known as Rajiv Gandhi Sea Link[1]) is a 5.6 km long, 8-lane wide bridge that links Bandra in the Western Suburbs of Mumbai with Worli in Central Mumbai.<br><br>
    
    <div class="about-text" align="left">
    <a class="btn" href="mumbai-attraction.html" style="background:#29297a; color:#FFF; width:100%;">Read More</a>   
    </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/tour/2.jpg" alt="Gateway of India Mumbai">
                    </div>
                    <div class="blog-title">
                        <h3>Gateway of India Mumbai</h3>
                       <a class="btn" href="img/tour/2.jpg" data-lightbox="service">+</a>
                    </div>
                    
                    <div class="blog-text">
                        <p>
                           The Gateway of India is an arch-monument built in the early 20th century in the city of Mumbai, India. It was erected to commemorate the landing of King-Emperor George V, the first British<br>
    <br>
    <div class="about-text" align="left">
    <a class="btn" href="mumbai-attraction.html" style="background:#29297a; color:#FFF; width:100%;">Read More</a>   
    </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/tour/3.jpg" alt="Chhatrapati Shivaji Maharaj Terminus">
                    </div>
                    <div class="blog-title">
                        <h3>Chhatrapati Shivaji Maharaj Terminus</h3>
                        <a class="btn" href="img/tour/3.jpg" data-lightbox="service">+</a>
                    </div>
                    
                    <div class="blog-text">
                        <p>
                           Chhatrapati Shivaji Maharaj Terminus, is a historic railway terminus and UNESCO World Heritage Site in Mumbai, Maharashtra, India. Its construction began in 1878,<br>
    <br><br>
    
    <div class="about-text" align="left">
    <a class="btn" href="mumbai-attraction.html" style="background:#29297a; color:#FFF; width:100%;">Read More</a>   
    </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/tour/4.jpg" alt="Shree Siddhivinayak Temple">
                    </div>
                    <div class="blog-title">
                        <h3>Shree Siddhivinayak Temple</h3>
                        <a class="btn" href="img/tour/4.jpg" data-lightbox="service">+</a>
                    </div>
                    
                    <div class="blog-text">
                        <p>
                          The Shree Siddhivinayak Ganapati Mandir is a Hindu temple dedicated to Lord Shri Ganesh. It is located in Prabhadevi, Mumbai, Maharashtra, India. It was originally built by<br>
    <br>
    <div class="about-text" align="left">
    <a class="btn" href="mumbai-attraction.html" style="background:#29297a; color:#FFF; width:100%;">Read More</a>   
    </div>
                        </p>
                    </div>
                </div>
            </div>
           
           <!--<div class="col-md-12">
        
        <div class="about-text" align="left">
    <a class="btn" href="Agra_General_Information.html" style="background:#1d94f3; color:#FFF; width:100%;">Read More</a>   
    </div>
    
    </div>--> 
            
        </div>
        
    </div>
    </div>
    <!-- Blog End -->
    
    
    
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
   <!-- 
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
    <li><img src="data1/images/3.png" alt="css image gallery" title="1" id="wows1_0"/></li>
    <li><img src="data1/images/4.png" alt="2" title="2" id="wows1_1"/></li>
    </ul></div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="#"></a> </div>
    <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
  -->
    <center>
    <table class="text-center">
	<tr><td><h2>Platinum Sponsor</h2></td><td><img src="img/s1.png"/></td><td></td></tr>
	<tr><td><h2>Gold Sponsor</h2></td><td><img src="img/s2.png"/></td><td><img src="img/s3.jpg"/></td></tr>
    </table>
	</center>
    <!-- End WOWSlider.com BODY section -->
   
    
    
    ';
    
    return $homeMsg;
    }

function About(){

    $aboutMsg='<!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-12 col-md-6">
                   
                    <div class="about-text">
                        <p align="justify">
                          Indian Carbon Society-Maharashtra Chapter was started to tap the huge potential of academia-industry partnership of western India, where a large number of industries, research institutes and educational institutes dealing with carbon materials coexist. 
The Materials Group of  Bhabha Atomic Research Centre is actively involved in the research and development of carbon based materials for energy applications, composite applications, sensor applications and separation science and technology.  
<br>
<br>
<img src="img/about organizer.png" width="100%"><!--<a class="btn" href="#">Read More</a>-->
</p>
                        
                       <!-- <a class="btn" href="#">Read More</a>-->
                    </div>
                </div> 
                
             
             <div class="col-lg-12 col-md-6">
                    <div class="section-header text-left" style="margin-bottom: 25px !important; margin-top:25px !important;">
                        <h3 style="text-decoration:underline;"><strong>CONFERENCE TOPICS</strong></h3>
                    </div>
                    <div class="about-text">
                       <div class="table-responsive">
                       
                       <table width="100%" cellpadding="5" cellspacing="5">

<tr>
<td width="50%" align="justify" bgcolor="#FFFFFF">

<ul> <li> Carbon Fibers and C/C Composites</li>
<li>Graphite and Industrial Carbon (Precursor to Finished Products)</li>
<li>Carbon for Energy and Storage</li>
<li>Carbon in Biology, Medicine and Health</li>
<li>Novel synthesis Routes and Innovation in Carbon Technology</li></ul>

</td>
<td width="50%" align="justify" bgcolor="#FFFFFF">

<ul><li> Carbon in Sensors</li>
<li>Nanocarbons and Heterocarbons</li>
<li>Carbon in catalysis</li>
<li>Carbon in Adsorption and Separation Technology</li>
<li>New Carbon Materials (Mxene, Carbyne, Biphenylene, Long–range Porous Carbon, Carbide etc)</li></ul>

</td>
</tr>


</table>
                       
                       
                       </div>
                        
                       <!-- <a class="btn" href="#">Read More</a>-->
                    </div>
                </div>   
                
                   
            </div>
        </div>
    </div>
    <!-- About End -->';

    return $aboutMsg;
}

function Committee(){

    $commMsg='<div class="table-responsive">
                               
    <table width="100%" align="center" cellpadding="5" cellspacing="5">

<tr style="color: #FFF;">
<td colspan="3" align="center" bgcolor="#004c66">

<strong>PATRONS</strong>    </td>
</tr>
<tr>
<td width="33%" align="center" bgcolor="#E4E4E4"><strong>Dr. Ajit Kumar Mohanty</strong><br />
Director, <br />
Bhabha Atomic <br />
Research Centre (BARC)</td>
<td width="34%" align="center" bgcolor="#E4E4E4"><strong>Prof. A. B. Pandit</strong><br />
Vice Chancellor<br />
Institute of Chemical <br />
Technology (ICT)</td>
<td width="33%" align="center" bgcolor="#E4E4E4"><strong>Prof. J. B. Joshi</strong><br />
Emeritus Professor, <br />
Homi Bhabha National<br />
Institutes (HBNI)</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. O. P. Bahl</strong><br />
President, <br />
Indian Carbon Society (ICS)</td>
<td align="center" bgcolor="#F5F5F5"><strong>Mr. K. K. Bangur</strong><br />
Graphite India Ltd.</td>
<td align="center" bgcolor="#F5F5F5"><strong>Mr. Ravi Jhunjhunwala</strong><br />
HEG Ltd</td>
</tr>



</table>

<table width="100%" align="center" cellpadding="5" cellspacing="5">

<tr style="color: #FFF;">
<td colspan="3" align="center" bgcolor="#004c66">

<strong>NATIONAL ADVISORY COMMITTEE</strong>    </td>
</tr>
<tr>
<td width="33%" align="center" bgcolor="#E4E4E4"><strong>Dr. Vivek Bhasin</strong><br />
BARC</td>
<td width="34%" align="center" bgcolor="#E4E4E4"><strong>Dr. A. K. Tyagi</strong><br />
BARC</td>
<td width="33%" align="center" bgcolor="#E4E4E4"><strong>Dr. R. B. Mathur</strong><br />
ICS</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. L. M. Manocha</strong><br />
ICS</td>
<td align="center" bgcolor="#F5F5F5"><strong>Mr. Praveen Saxena</strong><br />
Bhumishta Infra Services</td>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. S. R. Dhakate</strong><br />
NPL</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4"><strong>Dr. P. K. Jain</strong><br />
ARC International</td>
<td align="center" bgcolor="#E4E4E4"><strong>Mr. Paresh Patel</strong><br />
Schutz Carbon</td>
<td align="center" bgcolor="#E4E4E4"><strong>Mr. Manish Gulati</strong><br />
HEG</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. A. Udayakumar</strong><br />
CSIR-NAL</td>
<td align="center" bgcolor="#F5F5F5"><strong>Prof. Anchal Shrivastava</strong><br />
BHU</td>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. T.L. Dhami</strong><br />
ICS</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4"><strong>Dr. V. S. Tripathy</strong><br />
Sabre Safety Pvt Ltd</td>
<td align="center" bgcolor="#E4E4E4"><strong>Prof. Swati Sharma</strong><br />
IIT MANDI</td>
<td align="center" bgcolor="#E4E4E4"><strong>Dr. Manoj Srivastava</strong><br />
CSIR-IIP</td>
</tr>



</table>


<table width="100%" align="center" cellpadding="5" cellspacing="5">

<tr style="color: #FFF;">
<td colspan="4" align="center" bgcolor="#004c66">

<strong>ORGANIZING  COMMITTEE</strong>    </td>
</tr>
<tr>
<td colspan="2" align="center" bgcolor="#E4E4E4"><strong>Dr. Raghvendra Tewari, BARC</strong><br />
Conference Chairman</td>
<td colspan="2" align="center" bgcolor="#E4E4E4"><strong>Dr. Ashok K. Arya, BARC</strong><br />
Conference Co-Chairman</td>
</tr>
<tr>
<td width="33%" align="center" bgcolor="#F5F5F5"><strong>Dr. Kinshuk Dasgupta, BARC</strong><br />
Conference Convener</td>
<td colspan="2" align="center" bgcolor="#F5F5F5"><strong>Dr. Jyoti Prakash, BARC</strong><br />
Conference Secretary</td>
<td width="33%" align="center" bgcolor="#F5F5F5"><strong>Dr. Manishkumar D Yadav, ICT</strong><br />
Conference Treasurer</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4"><strong>Mr. Niraj Bhukhanwala</strong><br />
Bhukhanvala Industries</td>
<td colspan="2" align="center" bgcolor="#E4E4E4"><strong>Dr. B. P. Singh</strong><br />
NPL</td>
<td align="center" bgcolor="#E4E4E4"><strong>Dr. D. K. Singh</strong><br />
BARC</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5"><strong>Dr. Kartikey Yadav</strong><br />
BARC</td>
<td colspan="2" align="center" bgcolor="#F5F5F5"><strong>Dr. Sanghamitra Chatterjee</strong><br />
ICT</td>
<td align="center" bgcolor="#F5F5F5"><strong>Mr. Amit Kaushal</strong><br />
BARC</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4"><strong>Mr. Rajath Alexander</strong><br />
BARC</td>
<td width="17%" align="center" bgcolor="#E4E4E4"><strong>Mr. P. T. Rao</strong><br>
BARC</td>
<td width="17%" align="center" bgcolor="#E4E4E4"><strong>Mr. R. K. Seth</strong><br />
NPL</td>
<td align="center" bgcolor="#E4E4E4"><strong>Mr. S. A. Thakur</strong><br />
BARC</td>
</tr>
</table>                   


                       </div>';
return $commMsg;

}


function Registration(){

    $registrationMsg='<div class="about-text">
    <div class="table-responsive">
    
    <table width="100%" align="center" cellpadding="5" cellspacing="5">

<tr style="color: #FFF;">
<td width="33%" align="center" bgcolor="#004c66">

<strong>Category</strong>

</td>
<td width="34%" align="center" bgcolor="#004c66">

<strong> Before October 1st, 2023</strong>

</td>
<td width="33%" align="center" bgcolor="#004c66">

<strong>After October 1st, 2023</strong>

</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4">Member of ICS</td>
<td align="center" bgcolor="#E4E4E4">INR 5000</td>
<td align="center" bgcolor="#E4E4E4">INR 5500</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5">Students of ICS Members</td>
<td align="center" bgcolor="#F5F5F5">INR 2000</td>
<td align="center" bgcolor="#F5F5F5">INR 2500</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4">Non-Members (Academic / Government Institutions)</td>
<td align="center" bgcolor="#E4E4E4">INR 5500</td>
<td align="center" bgcolor="#E4E4E4">INR 6000</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5">Non-Members (Professional)</td>
<td align="center" bgcolor="#F5F5F5">INR 9500</td>
<td align="center" bgcolor="#F5F5F5">INR 10000</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4">Students / Superannuated Scientists / Spouse</td>
<td align="center" bgcolor="#E4E4E4">INR 2500</td>
<td align="center" bgcolor="#E4E4E4">INR 3000</td>
</tr>
<tr>
<td align="center" bgcolor="#F5F5F5">Foreign Participants</td>
<td align="center" bgcolor="#F5F5F5">USD 450</td>
<td align="center" bgcolor="#F5F5F5">USD 500</td>
</tr>
<tr>
<td align="center" bgcolor="#E4E4E4">Foreign Student Participants</td>
<td align="center" bgcolor="#E4E4E4">USD 250</td>
<td align="center" bgcolor="#E4E4E4">USD 300</td>
</tr>


</table>

<br>

<table width="100%" align="center" cellpadding="5" cellspacing="5">

<tr style="color: #FFF;">
<td colspan="3" align="center" bgcolor="#004C66"><strong>Bank Account Details:</strong></td>
</tr>
<tr>
<td colspan="3" align="center" bgcolor="#E4E4E4">

<strong> Account Name :</strong> ICCM 2023   |   <strong>Bank Name :</strong> State Bank of India   |   <strong>Account Type:</strong> Current <strong><br>
Account Number :</strong> 41779569690   |   <strong>CIF No:</strong> 91132643626   |   <strong>IFSC:</strong> SBIN0011075   |   <strong>MICR:</strong> 400002180      

</td>
</tr>
<tr>
<td colspan="3" align="center" bgcolor="#E4E4E4">

<strong> SWIFT CODE :</strong> SBININBB355, Hindu Colony, Dadar Branch   
</td>
</tr>




</table>
    
    
    </div>
     
    <!-- <a class="btn" href="#">Read More</a>-->
 </div>';

 return $registrationMsg;

}

function Programme(){

    $programmeMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12 col-md-6">
               
                <div class="about-text">
                    <p align="left">
                     <strong>Details will be updated shortly...</strong>
<!--<a class="btn" href="#">Read More</a>-->
</p>
                    
                   <!-- <a class="btn" href="#">Read More</a>-->
                </div>
            </div> 

        </div>
    </div>
</div>';

return $programmeMsg;
}

function Accommodation(){

    $accommodationMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
    <div class="container">
        <div class="row align-items-center">

	<h3 class="font-weight-bold text-primary">Arrangements will be made on payment basis to accommodate the participants in the BARC Guest house on first come first serve basis.</h3>


<h4 class="font-weight-bold">NOTE :  <br/>(i) Limited accommodation available in BARC guest house, Anushaktinagar (near conference venue) for participants.</h4>

<h4 class="font-weight-bold"> (ii) Limited accommodation available for students on nominal rate in the BARC guest house, Anushaktinagar (near conference venue). <h4>
<hr/>
	<h3 class="font-weight-bold text-primary">These are the suggested hotels with tariff near to the conference venue, individual can book directly from hotel for their stay during conference period.</h3>  
            
            <div class="col-lg-12 col-md-6">
               
                <div class="about-text">
                    <p align="left">
			<table class="table table-bordered table-striped">
			<tr><td><h3>FOUR POINTS BY SHERATON, VASHI</h3></td><td></td></tr>
			<tr><td>Single occupancy</td><td>Rs. 8500 + tax per day </td></tr>
			<tr><td>Double occupancy</td><td>Rs. 9500 + tax per day</td></tr>
			<tr><td>Sales Manager</td><td>Vishal Pawar</td></tr>
			<tr><td>Contact Number</td><td>+91-22-61587777 / +91-8879788810</td></tr>
			<tr><td>Website</td><td><a class="text-primary" href="https://www.marriott.com/en-us/hotels/bomfp-four-points-navi-mumbai-vashi/overview">
			https://www.marriott.com/en-us/hotels/bomfp-four-points-navi-mumbai-vashi	</a></td></tr>
			<tr><td> INCLUSIONS:<br/>

     * Complimentary Buffet Breakfast at Asian Kitchen Restaurant.<br/>
    * Complimentary Wi-⁠⁠Fi access in Room & Lobby area.<br/>
    * Complimentary access to Fitness centre & Swimming Pool</td> 

	<td></td></tr>
			</table>

			<br/><br/>
			<table class="table table-bordered table-striped">
			<tr><td><h3>FERN RESIDENCY, Chembur</h3></td><td></td></tr>
			<tr><td>Single occupancy</td><td>Rs. 7000 + 12% tax per day </td></tr>
			<tr><td>Double occupancy</td><td>Rs. 7500 + 12% tax per day</td></tr>
			<tr><td>Extra Bed charges for Triple occ.</td><td>Rs. 1000 + 12% tax per day</td></tr>
			<tr><td>Sales Manager</td><td>Kiran Jadhav</td></tr>
			<tr><td>Contact Number</td><td>+91-022-68541100 / +91-8879651106 </td></tr>
			<tr><td>Website</td><td><a class="text-primary" href="https://www.fernhotels.com/the-fern-residency-mumbai">https://www.fernhotels.com/the-fern-residency-mumbai</a></td></tr>

			<tr><td> INCLUSION :<br/>
			Accommodation.
*  Tea/⁠⁠coffee maker in each room<br/>
*  02 bottles of water in the accommodation per day.<br/>
*  Complimentary breakfast buffet in art house restaurant for Inhouse guest<br/>
*  Complimentary usage of Wi-⁠⁠Fi in the rooms<br/>
*  Complimentary usage of Gymnasium & Swimming pool @ The Acres Club<br/>
			</td><td></td></tr>
			</table>

			<br/><br/>
			<table class="table table-bordered table-striped">
			<tr><td><h3>HOTEL BROADWAY, Chembur</h3></td><td></td></tr>
			<tr><td>Single occupancy</td><td>Rs. 2750 + tax per day </td></tr>
			<tr><td>Double occupancy></td><td>Rs. 3250 + tax per day</td></tr>
			<tr><td>Email</td><td class="text-primary">hotelbroadway2009@yahoo.co.in</td></tr>
			</table>

<br/>

<h3 class="text-primary"> Travel Assistance</h3>
The society has decided to offer travel grant (Limited to maximum III AC to and fro rail fare) to young researchers (up to the age of 30 years as on 30.07.2023), who wish to attend the conference and present their work. Those desirous of availing this grant should write to the secretary along with the extended abstract latest by 15 September 2023. The society will convey the decision of travel grant latest by 01 October 2023.	
		
<!--<a class="btn" href="#">Read More</a>-->
</p>
                    
                   <!-- <a class="btn" href="#">Read More</a>-->
                </div>
            </div> 

        </div>
    </div>
</div>';

return $accommodationMsg;
}


function Sponsor(){

    $sponsorMsg='            <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
        <div class="container">
            <div class="row align-items-center">

             <div class="col-lg-12 col-md-6">
                    <!--<div class="section-header text-left" style="margin-bottom: 25px !important; margin-top:25px !important;">
                        <h3 style="text-decoration:underline;"><strong>CONFERENCE TOPICS</strong></h3>
                    </div>-->
                    <div class="about-text">
                       <div class="table-responsive">
                       
    <table width="100%" align="center" cellpadding="5" cellspacing="5">


<tr>
<td width="50%" align="center"><img src="img/s1.png" width="60%"></td>
<td width="50%" align="center"><img src="img/s2.png" width="60%"></td>
</tr>
</table>                  


                       </div>
                        
                       <!-- <a class="btn" href="#">Read More</a>-->
                    </div>
                </div>   
                            
                   
            </div>
        </div>
    </div>
    <!-- About End -->';
    return $sponsorMsg;

}
function Speakers(){
$speakersMsg='
		<div class="row text-light">                
			<div class="col-2 text-center">
			    <img src="img/speakers/1.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof.Marc Monthioux,<br/> CEMES,<br/> France 
				</speaker>
			</div>
			<div class="col-2 text-center">
			    <img src="img/speakers/2.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof.Rahul Raveendran Nair,<br/> University of Manchester,<br/> UK 
				</speaker>
			</div>
			<div class="col-2 text-center">
			    <img src="img/speakers/3.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof.Albert Nasibulin,<br/> Skolkovo Institute of Science and
Technology,<br/> Russia 
				</speaker>
			</div>
			<div class="col-2 text-center">
			    <img src="img/speakers/4.jpeg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. Dmitry Krasnikov,<br/> Skolkovo Institute of Science and
Technology,<br/> Russia 
				</speaker>
			</div>
			<div class="col-2 text-center">
			    <img src="img/speakers/5.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. Y. Mao,<br/> Illinois Institute of Technology,<br/> USA 
				</speaker>
			</div>
<div class="col-2 text-center">
			    <img src="img/speakers/6.JPG" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Dr. OP Bahl, ,<br/> ICS,<br/> India 
				</speaker>
			</div>


			<div class="col-2 text-center">
			    <img src="img/speakers/7.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. Juan Jose Vilatela,<br/> IMDEA Materials Institute, <br/>Spain 
				</speaker>
			</div>

<div class="col-2 text-center">
			    <img src="img/speakers/8.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. A. K. Tyagi, ,<br/> BARC,<br/> India 
				</speaker>
			</div>
<div class="col-2 text-center">
			    <img src="img/speakers/9.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. P. K. Jain, ,<br/> ARCI,<br/> India 
				</speaker>
			</div>

<div class="col-2 text-center">
			    <img src="img/speakers/10.jpg" width="80%"><br/>
			    	<speaker class="font-weight-bold">
					Prof. P. K. Mohapatra, ,<br/> BARC,<br/> India 
				</speaker>
			</div>
</div>
<br/>
<p class="text-center"><h3 class="text-warning">Other Speakers</h3></p>
<table class="table table-bordered table-striped text-light">
<tr><td> Prof. Indranil lahiri</td><td>IITR</td></tr>
<tr><td>Prof. Amartya Mukhopadhyay</td><td>IITB</td></tr>
<tr><td>Prof. Sanghamitra Chatterjee</td><td>ICT</td></tr>
<tr><td>Prof. Debrupa Lahiri</td><td>IITR</td></tr>
<tr><td>Prof. Kantesh Balani</td><td>IITK</td></tr>
<tr><td>Prof. Bhanu Pratap Singh</td><td>NPL</td></tr>
<tr><td>Prof. Suresh Gokhale</td><td>NCL, Pune</td></tr>
<tr><td>Dr. A.S. Prakash</td><td>CSIR-CECRI</td></tr>
<tr><td>Prof. S.SRIKANTASWAMY</td><td>DEPT. OF STUDIES IN ENVIRONMENTAL SCIENCE, MANSAGANGOTRI, UNIVERSITY OF MYSORE</td></tr>
<tr><td>Prof. Sanjay Dhakate</td><td>NPL</td></tr>
<tr><td>Prof. Jitendra Bahadur</td><td>BARC</td></tr>

</table>

';
return $speakersMsg;
    


    $speakersMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12 col-md-6">
               
                <div class="about-text">
                    <p align="left">
                     <strong>Details will be updated shortly...</strong>
<!--<a class="btn" href="#">Read More</a>-->
</p>
                    
                   <!-- <a class="btn" href="#">Read More</a>-->
                </div>
            </div> 

        </div>
    </div>
</div>';

return $speakersMsg;
}

function ServeLogin(){
	session_start();
	$obj = new DB();
	//$obj->Set('127.0.0.1','sympadmin','sympadmin','symposia');
	//$obj->Connect();
	
	$uname=$_POST["username"];
	$passwd=$_POST["password"];

        $tableToQuery="iccm_user_credentials";
		$query = "select * from ".$tableToQuery." where uname='".$uname."'";
	$result = $obj->GetQueryResult($query);
	if(!$result)
            return Message("Query execution fails","alert-danger");	
	$row = $result->fetch_assoc();
		$js='<script>
			/*//alert("Raw loaded............");
			$(function(){
			//	alert("JS loaded...");
				//if($("#hiddenInfo").attr("logintype")="Admin" &&
				if($("#hiddenInfo").attr("loggedin")="TRUE"){
					$("#YourTasks").show();
				}
			});*/

			var data={};
			$("#logout").click(function(e){
				alert("You are loggin out....");
				e.preventDefault();
				data["function_name"]="Logout";
				$.ajax({
				    url: "controller.php",
				    method: "POST",
				    data : data,
				    success: function(response) {
				    $("#loginstatus").html(response);
				    $("#result").html("");
				    //$("#result").html("You have logged out successfully.");
					
				    }
				  });
					
			});
		</script>';
	$adCordJS = "<script>
					$(function(){
						//alert('Admin or Coorinator loggged in...');
					//if($('#hiddenInfo').attr('logintype')=='Admin' &&
					if( $('#hiddenInfo').attr('loggedin')=='1'){
						//alert('Enabling your tasks...');
					//$('#YourTasks').show();
					//$('#YourTasks').removeClass('text-light');
                			//$('#YourTasks').addClass('text-light');
			                //$('#YourTasks').addClass('text-bold');
			                $('#YourTasks').show();
					$('#Home').trigger('click');

					$('#YourTasks').click(function(){
						//alert('Your Tasks clickedd....');
					});

					$('.iccmMenu').on('click',function(event){
        alert($(this).attr('id')+' called..');
        event.preventDefault();
        var funcName='';
        var data={};
        var funcName=$(this).attr('id');
        //alert(funcName);
        data['function_name']=funcName;
        console.log(data);
        $.ajax({
            url: 'controller.php',
            method: 'POST',
            data : data,
            success: function(response) {
            $('#result').hide();
            //$('#result').delay(1000).fadeIn();
            $('#result').html(response);
            $('#result').fadeIn(1000);
            }
          });

});


				}

					});
				</script>";

	if($row["passwd"]==$passwd){
		$_SESSION["loggedin"]=TRUE;
		$_SESSION["username"]=$uname;
		if($uname=="admin")
			$_SESSION["logintype"]="Admin";
		else
			$_SESSION["logintype"]="Author";
		//return "Login type : ".$_SESSION["logintype"];
		$_SESSION["FirstName"]=$row["firstname"];
		$_SESSION["LastName"]=$row["lastname"];
		$_SESSION["Email"]=$row["email"];
        $_SESSION["uploadlocation"]="Uploads";
	//	$result->free();

	  	return YourTasks();	
	}
	else
		return "<div><h3 class='alert alert-danger text-center' role='alert'> Authenication failure : Please check your credentials.</h3> <br/>";
		
}
function Login($loginType="Author"){
    //return Message("Will be available soon","alert-warning");
    //return "Hello";
    session_start();
    //$_SESSION["logintype"]=$loginType;
    $forms = new Forms();
      return $forms->Login($loginType);
    }

function Upload_Contribution(){
	
    //if(!EnableMenuItem("Upload_Contribution"))
    //return Message("Will be available soon.","alert-warning");
        session_start();
    
        $obj = new DB();
        $query = "select contrib_start_date,contrib_end_date from symposium";
        $result = $obj->GetQueryResult($query);
        $row = $result->fetch_assoc();
        $start_date = $row["contrib_start_date"];
        $end_date = $row["contrib_end_date"];
    
        $now = time();
        $start_time = GetStartTime($start_date);
        $end_time = GetEndTime($end_date);
    
        //return "Start time : $start_time : End Time : $end_time <br/>";
    
        if($now < $start_time)
        return Message("Contribution submission will start on ".date("d-M-Y",strtotime($start_date)), "alert-info");
    
        if($now > $end_time)
        return Message("Contribution submission Deadline crossed on ".date("d-M-Y",strtotime($end_date)).", Kindly contact Convener.", "alert-danger");
        
        $returnVal="";
        if(isset($_SESSION["loggedin"])){
            //return "Hello <br/>";
            //return "<h3 class='alert alert-success' role='alert'>Welcome user : ".$_SESSION["username"]."</h3><br/>";
            return NewSubmission();
            //return "Dear $_SESSION["username"], Please upload your Contribution <br/>";
        }
        else{
            return Message("Please login before uploading.");
            //return "<h3 class='alert alert-danger text-center' role='alert'>Please login before uploading.</h3><br/>";
        }
    }
    
    function View_Contribution(){
        //if(!EnableMenuItem("View_Contribution"))
       // return Message("Will be available soon.","alert-warning");
        
            session_start();
            if(isset($_SESSION["loggedin"])){
            $submitterName = GetSubmitterName();
            $query = 'select * from iccm_contributions where uname="'.$_SESSION["username"].'" and status NOT IN ("Deleted")';
             //return $query;	
            $obj = new DB();
            $result = $obj->GetQueryResult($query);
            if($result===false)
                                        return Message("Query execution fails","alert-danger");
            //return $query;
            
            $retValue="";
            //$retTable='<table class="table table-striped table-bordered">';
            $retTable='<table class="table table-dark table-striped table-bordered">';
            $retTable.='<tr class="bg-warning text-dark">
                    <th>uname</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Topic</th>
                    <th>Author names</th>
                    <th>Author Emails</th>
                    <th>Uploaded File</th>
                    <th>Update/Resubmit</th>
                    <th>Withdraw</th>
                    </tr>';
            while($row = $result->fetch_assoc()){
                $retTable.='<tr>';
                //$retValue.=$row["Topic"]." : ".$row["Category"]."<br/>";
                //$retValue.="Hello <br/>";
                $paperTitle=$row["Title"];
                $authorNamesList=$row["AuthorNamesList"];
                $authorEmailsList=$row["AuthorEmailsList"];
                $fileName=$row["Filename"];
                $queryTopic=$row["Topic"];
                
                //$retValue.=GetTopic($queryTopic)." : ";
                //$retValue.=GetCategory($queryTopic,$queryCategory);
                $selectedTopic=$queryTopic." : ".GetTopic($queryTopic);
                $retValue.=$selectedTopic." : ";
                
                $retValue.="<br/>";
                $retTable.='<td>'.$_SESSION["username"].'</td>';
                $retTable.='<td>'.$submitterName.'</td>';
                $retTable.='<td>'.$paperTitle.'</td>';
                $retTable.='<td>'.$selectedTopic.'</td>';
                $retTable.='<td>'.$authorNamesList.'</td>';
                $retTable.='<td>'.$authorEmailsList.'</td>';
                $retTable.='<td><a href="'.$_SESSION["uploadlocation"].'/'.$fileName.'">'.$fileName.'</a></td>';
                $retTable.='<td><input type="button" class="btn form-control resubmit btn-primary" value="Resubmit" uname="'.$_SESSION["username"].'" filename="'.$fileName.'" functionname="PopulateResubmissionForm"/></td>';
                $retTable.='<td><input type="button" id="delete" class="btn form-control withdraw btn-primary" value="Withdraw" uname="'.$_SESSION["username"].'" filename="'.$fileName.'" functionname="WithdrawContribution"/></td>';
        
                $retTable.='</tr>';
        
                    
                //	return $retTable;//.=$associatedJs;
        
            }
            
            $result->free();
        
                $associatedJs='
                    <script>
                    $(".resubmit, .withdraw").on("click",function(event){
                    //alert("Nasi Menu clicked.......");
                    event.preventDefault();
                    //alert($(this).attr("class"));
                    var data={};
                    var funcName=$(this).attr("functionname");
                    //alert(funcName);
                    data["function_name"]=funcName;
                    data["filename"]=$(this).attr("filename");
                    data["uname"]=$(this).attr("uname");
                    //console.log(data);
                    var okornot=true;
                    if($(this).attr("id")=="delete")
                        okornot = confirm("Are you sure you want to withdraw the paper.");
                    if(okornot){
                    $.ajax({
                        url: "controller.php",
                        method: "POST",
                        data : data,
                        success: function(response) {
                        $("#result").html(response);
                        }
                      });
                    }
        
                     });
        
        
                </script>
                    ';		
        
            //return $retValue;
            return $retTable.$associatedJs;
        }else{
        
                return Message("Please login to view your submissions.");
        }
            
        }


        function PopulateResubmissionForm(){

            $obj=new DB();
            $query="select UploadLocation from symposium";
            $result = $obj->GetQueryResult($query);
            if($result===false)
                                            return Message("Query execution fails","alert-danger");
            
            $row = $result->fetch_assoc();
            $loc = $row["UploadLocation"];
            
            $fileName = $_POST["filename"];
            $uname = $_POST["uname"];
            $query = 'select * from iccm_contributions where uname="'.$uname.'" and Filename="'.$fileName.'"';
            $obj = new DB();
            $result=$obj->GetQueryResult($query);
            $row=$result->fetch_assoc();
            
            //$loc="/home/nasiin/public_html/nasi2023/Uploads/";
            //$loc="/var/www/html/Symposia/Uploads/";
            
            
            $filename=$row["Filename"];
            
            $selectedTopic=$row["Topic"]." : ".GetTopic($row["Topic"]);
            //$selectedCategory=GetCategory($selectedTopic,$row["Category"]);
            //return $query;
            $fieldNames=array("Topic","Title","Filename");
            
            $formContent='<br/><div class="container">
                            <h2>Resubmit your contribution</h2>
                            <form method="POST" id="login" class="">';
            
            for($i=0 ; $i<count($fieldNames) ; $i++){
            $formContent.='<div class="form-group">
                                            <label for="'.$fieldNames[$i].'">'.$fieldNames[$i].':</label>';
            
                if($fieldNames[$i]=="Filename"){
                    $fileComponent='<div class="custom-file mb-3">
                      <input type="file" class="custom-file-input uploadFile" id="uploadFile" loc="'.$loc.'" name="uploadFile" required>
                          <label class="custom-file-label" for="uploadFile">Choose file</label>
                    </div>';
                 $formContent.=$fileComponent;
                }else{
                    $code="";
                    $value=$row[$fieldNames[$i]];
                    $code=$value;
            
                    if($fieldNames[$i]=="Topic")
                    $value=$selectedTopic;
                    
                    
                   
            
                    if($fieldNames[$i]=="Topic" ){
                        
                        $formContent.='
                                            <input type="text" class="form-control" id="'.$fieldNames[$i].'" name="'.$fieldNames[$i].'" value="'.$value.'" code="'.$code.'" required readonly>
                                    </div>
                        <div id="uploadStatus" ></div>
            ';
                    }else{
                    $formContent.='
                                          
                                            <input type="text" class="form-control" id="'.$fieldNames[$i].'" name="'.$fieldNames[$i].'" value="'.$value.'" required >
                                    </div><div id="uploadStatus"></div>
            ';
                    }
                }
            }
            
                    $formContent.=AuthorList().'<br/><hr/>';
                             $formContent.='<input type="button"  class="btn btn-primary" id="uploadAndSubmit" loc="'.$loc.'" filename="'.$filename.'" value="Submit"></button>';
                    $formContent.='<img id="loadingGif" src="images/loadingTransparent.gif" style="display: none;" alt="Loading...">';
            
            $result->free();
            
            $associatedJs='
            <script>
            $(function(){
                  
            //$("#loadingGif").hide();
            $(".custom-file-input").on("change",function(e){
                  //alert("file selected...");
                  var fileName = e.target.files[0].name;
                  //alert(fileName);
          
                  if(e.target.files[0].size > 1048576){
          
                        alert("File size exceeds the allowed size of 1 MB");
                        const form = document.querySelector("form");
                        form.reset();
                        $(this).siblings(".custom-file-label").removeClass("selected").html("Choose file");
                        return;
          
                  }
                  dataUp.append("file",e.target.files[0]);
                  dataUp.append("loc",$(this).attr("loc"));
          
          
                  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });	
          
            
            $("#uploadAndSubmit").click(function(){
          
            
          
                dataUp.append("topicid",$("#Topic").attr("code"));
                  
                  if($("#Title").val()==""){
                        alert("Please provide the title of your paper.");
                        return ;
                  }
                  if($("#uploadFile").val()==""){
                        alert("Please select a file to upload.");
                        return;
                  }
                  var returnVar=0;
                  $(".authorname").each(function(){
                        if($(this).val()==""){
                              $(this).css("background", "yellow");
                           returnVar=1;
                           alert("Please fill the Author Name : "+returnVar);
                          }
                  });
                  if(returnVar==1){
                        //returnVar=0;
                        return;
                        }
          
                        $(".authoremail").each(function(){
                              if($(this).val()==""){
                                          $(this).css("background", "yellow");
                                 returnVar=1;
                                 alert("Please fill the Author Email : "+returnVar);
                                    }
                        });
                        
          
                        if(returnVar==1){
                        return;
                        }
          
                  //	alert("This should not Pop up.");
                  dataUp.append("function_name","IccmResubmitUpload");
                  //alert($("#Title").val());
                  dataUp.append("title",$("#Title").val());
                  dataUp.append("filename",$(this).attr("filename"));
          
                  //alert("Submit clicked...");
                  var authorNameTextBoxValues = $(".authorname").map(function() {
                        return $(this).val();
                        }).get();
                        var authorEmailTextBoxValues = $(".authoremail").map(function() {
                        return $(this).val();
                        }).get();
                        dataUp.append("authornameslist",authorNameTextBoxValues);
                        dataUp.append("authoremailslist",authorEmailTextBoxValues);
                      console.log(dataUp);
          
                
                $.ajax({
                        url: "controller.php",
                        method: "POST",
                        data : dataUp,
                        processData : false,
                        contentType : false,
                        success: function(response) {
                                    //$("#uploadStatus").html(response);
                                    //$("#loadingGif").hide();
                                    //$("#newsubmission input").prop("disabled", false); 
                                    //$("#uploadAndSubmit").prop("disabled",false);
                                    $("#result").html(response);
                        }
                    });
                
          
            });
            
          });		
            </script>
          </div><br/>';
            
                return $formContent.$associatedJs;
            }

            function IccmResubmitUpload(){
                session_start();
                //return "FileUplaoded...";
                //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //echo $_FILES['file']."<br/>";
                //echo $_FILES['file']['error']."<br/>";
                //return;
                if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                        
                        $targetDirectory = $_POST['loc']; // Specify the target directory where the file will be saved
                         $topicId = $_POST['topicid'];
                        $authorNamesList=$_POST['authornameslist'];
                        $authorEmailsList=$_POST['authoremailslist'];
                        $actualFileName = $_POST['filename'];
                        //echo $targetDirectory."<br/>";
                        //echo basename($_FILES['file']['name'])."<br/>";
            
                        //select count(*) as count from contributions where Filename like '%paper_3_1%'			
                            $obj = new DB();
                                    //$obj->Set('127.0.0.1','sympadmin','sympadmin','symposia');
                                    //$obj->Connect();
            
                        /*$query='select count(*) as count from contributions where Filename like "%paper_'.$topicId.'_'.$categoryId.'%"';
                            $result=$obj->GetQueryResult($query);
                            $row = $result->fetch_assoc();
                            $count=$row["count"];
                            $count++;*/
                        //$renamedFileName=$_SESSION["username"].'_paper_'.$topicId.'_'.$categoryId.'_'.$count.'.pdf';
                        //$targetFilePath = $targetDirectory . basename($_FILES['file']['name']); // Get the file path
            
                        $renamedFileName = $actualFileName;
                        $targetFilePath = $targetDirectory.$renamedFileName; // Get the file path
                        //echo "Taget file path :".$targetFilePath."<br/>";
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                            //echo 'File uploaded successfully.<br/>';
                            //$query='insert into contributions values("'.$_SESSION["username"].'","'.$topicId.'","'.$categoryId.'","'.$_POST["title"].'","'.$renamedFileName.'","submitted","'.$authorNamesList.'","'.$authorEmailsList.'","","")';
            
                            $query = 'update iccm_contributions set Title="'.$_POST["title"].'" , AuthorNamesList="'.$authorNamesList.'" , AuthorEmailsList="'.$authorEmailsList.'" where FileName="'.$actualFileName.'"';
                            //return $query."<br/>";
                            //return $query;
                                            $obj->GetQueryResult($query);
            $body="Dear ".$_SESSION["username"].", 
            
            Your have successfully resubmitted your paper $renamedFileName 
            You can view your updated paper in View_Contribution link.

	    Regards,
	    ICCM-2023";
            
            
                    SendMail("resubmission",$_SESSION["Email"],"ICCM 2023 : Contribution Resubmitted",$body);
  		    //SendMail("admin",$email,"ICCM 2023 : Credentials",$body);
                    //SendMail("resubmission",$_SESSION["email"],"ICCM 2023 : Contribution Resubmitted",$body);
            
                            return Message("File uploaded successfully with name : $renamedFileName","alert-success");
                        } else {
                                echo Message('Error uploading the file.','alert-danger');
                                                        }
                } else {
                    echo Message('No file uploaded.','alert-danger');
                    }
                //}
            }

        function WithdrawContribution(){
            $fileName=$_POST["filename"];
            $query = 'update iccm_contributions set status="Deleted" where Filename="'.$fileName.'"';
            $obj = new DB();
            $obj->GetQueryResult($query);	
            return Message("Your paper is withdrawn.","alert-info");
        }

        function Abst(){
            //ini_set('display_errors', 1);
            //ini_set('display_startup_errors', 1);
            //error_reporting(E_ALL);
            
                $abstractMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-12 col-md-6">
                       
                        <div class="about-text">
                            <p align="left">
                             
                            <table width="100%" align="center" cellpadding="5" cellspacing="5">
            
            <tr style="color: #FFF;">
            <td colspan="3" align="center" bgcolor="#004C66"><h4 style="color: #FFF;">CALL FOR PAPERS</h4></td>
            </tr>
            <tr>
            <td colspan="3" align="left">
            
            <p align="justify">
            
            Authors are requested to submit extended abstracts through online portal. The selected papers will be published in indexed journal.
            <br>
            <br>
            <strong>Deadlines</strong>
            
            <ul><li><strong>Deadline of abstract submission is August 30, 2023</strong></li>
            </ul>
            </p>
            
            </td>
            </tr>   
            </table> 
                             
                             
            </p>
                            
                           <!-- <a class="btn" href="#">Read More</a>-->
                        </div>
                    </div> 
                    
                    
                    
                   <div class="about wow fadeInUp" data-wow-delay="0.1s" style="margin-top:20px;">
            <div class="container">
                <div  class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12" style="text-align: center;">
                        
                    <div class="about-text">
                   
                   <div class="about-text" align="center">
            <p align="center"><a href="#" target="_blank" class="btn contributions" id="Upload_Contribution" style="width:100%;">Online Abstract Submission  </a>   </p>
            <!--https://in.eregnow.com/ticketing/register/carbonindia-iccm-abst-->
            </div>
            </div>
            
            </div>
            
            
            <div class="col-lg-4 col-md-12" style="text-align: center;">
                        
                    <div class="about-text">
                   
                   <div class="about-text" align="center">
            <p align="center"><a href="pdf/Extended abstract format.pdf" target="_blank" class="btn contributions" id="View_Contribution" style="width:100%;">View your Contributions</a>   </p>
            
            </div>
            </div>
            </div>
            
            <div class="col-lg-4 col-md-12" style="text-align: center;">
                        
                    <div class="about-text">
                   
                   <div class="about-text" align="center">
            <p align="center"><a href="pdf/Extended abstract format.pdf" target="_blank" class="btn" style="width:100%;">Download extended abstract format</a>   </p>
            
            </div>
            </div>
            </div>
            
            </div>
            </div>
            ';
            
            $associatedJs = "<script>
                                $(function(){
                                        var data={};
                                    //$('#Upload_Contribution').click(function(e){
                                        $('.contributions').click(function(e){
            
                                        e.preventDefault();
                                       // alert($(this).attr('id'));
                                        var funcName=$(this).attr('id');
                //alert(funcName);
                data['function_name']=funcName;
                console.log(data);
                $.ajax({
                    url: 'controller.php',
                    method: 'POST',
                    data : data,
                    success: function(response) {
                    $('#result').hide();
                    //$('#result').delay(1000).fadeIn();
                    $('#result').html(response);
                    $('#result').fadeIn(1000);
                    }
                  });
            
                                    });
                                });
                                </script>";
            return $abstractMsg.$associatedJs;
            }
            
            function NewSubmission(){
                $obj = new DB();
                    //$obj->Set('127.0.0.1','sympadmin','sympadmin','symposia');
                    //$obj->Connect();
                $fieldNames = $obj->GetFieldNames("iccm_contributions");
                //return count($fieldNames);
            
                $forms = new Forms();
                return $forms->NewSubmission($fieldNames);
            }
                
                
            
            function Venue(){
            
                $venueMsg='<!-- About Start -->
                <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
                    <div class="container">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-12 col-md-6">
                               
                                <div class="about-text">
                                
                                <table width="100%" align="center" cellpadding="5" cellspacing="5">
            
            <tr style="color: #FFF;">
            <td colspan="3" align="center" bgcolor="#004C66"><h4 style="color: #FFF;">Venue : DAE Convention Centre, Anushaktinagar, Mumbai</h4>
            2WJH+V32, Anushakti Nagar, Mumbai, Maharashtra 400094</td>
            </tr>
            <tr>
            <td colspan="3" align="left">
            
            <p align="justify">
            
            <img src="img/DAE-Convention-Centre.jpg" width="40%" align="left" hspace="30">
            DAE Convention Centre is a conference facility located in Anushaktinagar, Mumbai. The main hall has a seating capacity of 1000, with a floating capacity of up to 3000. The DAE Convention Centre has spacious parking and can park up to 150 cars. The centre is centrally air-conditioned, and facilities like green rooms and a dining hall make the venue ideal for conducting scientific meetings.
            <br>
            <br>
            <strong>How to reach</strong>
            
            <ul><li>Nearest Bus Stop: Anushakti Nagar Bus Stop </li>
            <li> Nearest Railway Station: MMCT, CSTM & LTT</li>
            <li> From Airport: 20 KM</li></ul>
            </p>
            
            </td>
            </tr>
            
            <tr>
            <td colspan="3" align="left">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.718358799634!2d72.92544941490051!3d19.03212828711309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5c3527b0327%3A0x8a63274e6c3dbdc0!2sD.A.E%20Convention%20Center!5e0!3m2!1sen!2sin!4v1679564304815!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
            
            </td>
            </tr>
            
            
            </table>
                          
                                   <!-- <a class="btn" href="#">Read More</a>-->
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                <!-- About End -->';
           
		$venueMsg = '<br/><hr/><venue class="text-primary text-center">'.
				Message("DAE Convention center, Bhabha Atomic Research Centre, Anushakti Nagar, Mumbai-400094","alert-primary").
				'<div class="row bg-primary text-light border">
					 <div class="col-6 border">
					 	From Airport
					 </div>
					 <div class="col-6 border">
						Time
					 </div>

				</div><div class="row border" >
					 <div class="col-6 border">
						By Car
					 </div>
					 <div class="col-6 border">
						1 hr.
					 </div>

				</div><div class="row">
					 <div class="col-6 border">
						By Bus
					 </div>
					 <div class="col-6 border">
						1 hr. 30 min.
					 </div>

				</div><div class="row">
					 <div class="col-6 border">
						By Train
					 </div>
					 <div class="col-6 border">
						45 min.
					 </div>

				</div>
				<hr/>


				<div class="row bg-primary text-light">
					 <div class="col-6 border">
					  	From Mumbai Central / Chhatrapati Shivaji Maharaj Terminus
					 </div>
					 <div class="col-6 border">
						Time
					 </div>

				</div><div class="row">
					 <div class="col-6 border">
					 	By Car
					 </div>
					 <div class="col-6 border">
						45 min.
					 </div>

				</div><div class="row">
					 <div class="col-6 border">
						By Bus
					 </div>
					 <div class="col-6 border">
						1 hr. 30 min.
					 </div>

				</div><div class="row">
					 <div class="col-6 border">
						By Train
					 </div>
					 <div class="col-6 border">
						1 hr.
					 </div>

				</div>

				<div class="row">
					<div class="col font-weight-bold text-dark">
						Nearest local Railway Station :  Mankhurd (Harbour Line)
					</div>
				</div>';

				'<!-- <table class="table table-striped table-bordered">
				<tr class="bg-primary text-light"><th>From Airport</th><th>Time</th></tr>
				<tr><td>By Car</td><td>1 hr.</td></tr>
				<tr><td>By Bus</td><td>1 hr 30 min.</td></tr>
				<tr><td>By Train</td><td>45 min.</td></tr>
				</table> -->';

		$venueMsg.='<!-- <table class="table table-striped table-bordered">
				<tr class="bg-primary text-light"><th>From Mumbai Central / Chhatrapati Shivaji Maharaj Terminus</th><th>Time</th></tr>
				<tr><td>By Car</td><td>45 min.</td></tr>
				<tr><td>By Bus</td><td>1 hr 30 min.</td></tr>
				<tr><td>By Train</td><td>1 hr.</td></tr>
				</table> -->';

		$venueMsg.='</venue>';
 
                return $venueMsg;
            }
            
            function Contact(){
            
                
                echo IccmFooter();
                
            }
            
            function Show($filename){
                
            if(!EnableMenuItem("Poster"))
            return Message("Will be available soon.","alert-warning");
            
                echo '<iframe src="pdf/'.$filename.'"></iframe>';
            }
            
            function GetQueryResult($query){
            
                $obj = new DB();
                $result = $obj->GetQueryResult($query);
                if($result===false)
                                                return Message("Query execution fails","alert-danger");
                
                return $result;
                }
                
            
            function ServeSignup(){
            
            //return "Signup...";
            //ini_set('display_errors', 1);
            //ini_set('display_startup_errors', 1);
            //error_reporting(E_ALL);
                $obj = new DB();
                //$obj->Set('127.0.0.1','sympadmin','sympadmin','symposia');
                //$obj->Connect();	
                 $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email=$_POST['email'];
                $contactno=$_POST['contactno'];
                $qualification=$_POST['qualification'];
                $designation=$_POST['designation'];
                $institute=$_POST['institute'];
                $institute_add=$_POST['institute_add'];
                $institute_type=$_POST['institute_type'];
                $accomm_req=$_POST['accomm_req'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $query='select uname from iccm_user_credentials where uname="'.$username.'"';
                //$fetchedUname=GetQueryResult($query)->fetch_assoc()["uname"];
                //echo "Fetch uname : ".$fetchedUname."<br/>";
                if(GetQueryResult($query)->fetch_assoc()["uname"] == $username)
                    return Message("Username : $username already exist.","alert-danger");
                
                $query='select email from iccm_user_credentials where email="'.$email.'"';
                if(GetQueryResult($query)->fetch_assoc()["email"] == $email)
                    return Message("Email : $email already registered.","alert-danger");
            
            
                //$query = "insert into iccm_user_credentials values('$username','$password','$firstname','$lastname','$email',NOW())";
                $query = "insert into iccm_user_credentials values('$firstname','$lastname',
'$email','$contactno','$qualification','$designation','$institute','$institute_add','$institute_type','$username','$password',NOW(),'$accomm_req')";
                $result=$obj->GetQueryResult($query);
		if($result===false){
                                return Message("Query execution fails","alert-danger");
				$errString = "Query execution fails 
						".$query;
				SendMail("newaccount","sc.ramansehgal@gmail.com","ERROR report for user : ".$username,$errString);
		}

                $body="Dear $firstname $lastname, 
            
            Your Account is successfully created with following details:
            
            username : $username 
            password : $password
            
            Your can use these credentials to do the registration and to upload your paper.";
                //SendMail($from,$to,$subject,$body);
                SendMail("newaccount",$email,"ICCM 2023 : Account Created",$body);	
                //echo "$username : $password : $firstname : $lastname : $email";	
                       //return "<div>ServeSignup function called..........</div><br/>".$_POST['firstname'];
                return Message("User account creation successful.","alert-success");
            }
            
            
            
            function Signup(){
                //if(!EnableMenuItem("Signup"))
                //return Message("Will be available soon.","alert-warning");
                $forms = new Forms();
                  return $forms->Signup();
                //
            }
            
            function IccmUpload2(){
            
                return Message("Correct function called.","alert-warning");
            }
            
            function IccmUpload(){
            
               // return Message("Returning from UPload.........","alert-danger");
            
                session_start();
                //return "FileUplaoded...";
                //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //echo $_FILES['file']."<br/>";
                //echo $_FILES['file']['error']."<br/>";
                //return;
                if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                            $targetDirectory = $_POST['loc']; // Specify the target directory where the file will be saved
                        //$categoryId = $_POST['categoryid'];
                        $topicId = $_POST['topicid'];
                        $authorNamesList=$_POST['authornameslist'];
                        $authorEmailsList=$_POST['authoremailslist'];
			$abstype=$_POST['abstype'];
			$abspref=$_POST['abspref'];
			$ext=$_POST['ext'];
                        //echo $targetDirectory."<br/>";
                        //echo basename($_FILES['file']['name'])."<br/>";
            
                        //select count(*) as count from contributions where Filename like '%paper_3_1%'			
                            $obj = new DB();
                                    //$obj->Set('127.0.0.1','sympadmin','sympadmin','symposia');
                                    //$obj->Connect();
            
                        $query='select count(*) as count from iccm_contributions where Filename like "%paper_'.$topicId.'%"';
                            $result=$obj->GetQueryResult($query);
                            if($result===false)
                            return Message("Query execution fails","alert-danger");
                            $row = $result->fetch_assoc();
                            $count=$row["count"];
                            $count++;
                        $renamedFileName=$_SESSION["username"].'_paper_'.$topicId.'_'.$count.'.'.$ext;
                        //$targetFilePath = $targetDirectory . basename($_FILES['file']['name']); // Get the file path
                        $targetFilePath = $targetDirectory.$renamedFileName; // Get the file path
                        //echo "Taget file path :".$targetFilePath."<br/>";
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                            //echo 'File uploaded successfully.<br/>';
                            $query='insert into iccm_contributions values("'.$_SESSION["username"].'","'.$topicId.'","'.$_POST["title"].'","'.$renamedFileName.'","submitted","'.$authorNamesList.'","'.$authorEmailsList.'","","","'.$abstype.'","'.$abspref.'")';
                            //echo $query."<br/>";
                                            $obj->GetQueryResult($query);
            $body="Dear ".$_SESSION["username"].", 
            
            Your have successfully submitted your paper $renamedFileName 
            You can view your paper in View_Contribution link.

	    Regards,
	    ICCM-2023";
            
            
                            SendMail("submission",$_SESSION["Email"],"ICCM 2023 : Contribution submitted",$body);
            
                            $result->free();
                            return Message("File uploaded successfully with name : $renamedFileName","alert-success");
                        } else {
                                echo Message('Error uploading the file.','alert-danger');
                                                        }
                } else {
                    echo Message('No file uploaded.','alert-danger');
                    }
            
                //}
            }
            
            function Message($message,$colorClass="alert-danger"){
                $msg="<h3 class='alert alert-dismissible fade show ".$colorClass." text-center' role='alert'>".$message."</h3><br/>";
                $associatedJs = '<script>
                        setTimeout(function(){
                        $("refereeUpdateStatus").alert("close");
                        },2000);
                    </script>
                    ';
                return $msg.$associatedJs;
                }
            
            if (isset($_POST['function_name'])) {
                $function_name = $_POST['function_name'];
                if (function_exists($function_name)) {
                  $response_data = call_user_func($function_name);
                  echo $response_data;
                }
              }
            

              function LoadForgotPasswordForm(){
                $forms = new Forms();
                return $forms->ForgotPassword(); 
                }
                
                //Ajax called
                function ServeForgotPassword(){
                $email = $_POST["email"];
                $obj=new DB();
                $query = 'select * from iccm_user_credentials where email="'.$email.'"';
                $result = $obj->GetQueryResult($query);
                if($result===false)
                                                return Message("Query execution fails","alert-danger");
                
                $row=$result->fetch_assoc();
                $uname=$row["uname"];
                $passwd=$row["passwd"];
                $fname=$row["firstname"];
                $lname=$row["lastname"];
                $body='Dear '.$fname.' '.$lname.',
                
                We have received a request to recover your credentials for ICCm-2023.
                
                Please find below the required credentials
                
                username : '.$uname.'
                password : '.$passwd.'
                
                With Regards,
                ICCM-2023
                ';
                
                //return $body;
                SendMail("admin",$email,"ICCM 2023 : Credentials",$body);
                $result->free();
                return Message("Login credentials sent to email : ".$email,"alert-info");
                }
        
	function PaymentForm(){
		session_start();
		if(isset($_SESSION["loggedin"])){
			$counter=GetCounter("iccm_payment_detail");
			if($counter===0){	
			$forms = new Forms();
                	return $forms->PaymentForm();		
			}else{
				$filledMsg = Message("It seems you had already filled the below mentioned payment details, Kindly contact Secretary","alert-info");
				$filledMsg.="<table class='table'>";
				$obj = new DB();
				$query = "select * from iccm_payment_detail where uname='".$_SESSION["username"]."'";
				$result = $obj->GetQueryResult($query);
				$row = $result->fetch_assoc();
				$filledMsg.="<tr bgcolor='d5f9f9'><th>uname</th><th>Name</th><th>BankName</th>
					  <th>Date of Transation</th><th>Ref. Number</th><th>
					  Amount</th> </tr>";
				$filledMsg.="<tr><td>".$row["uname"]."</td><td>".$row["name"]."</td><td>".$row["bankname"]."</td>
					  <td>".$row["dateoftrans"]."</td><td>".$row["refnum"]."</td><td>".$row["amount"]."</td> </tr>";

				$filledMsg.="</table>";

				return $filledMsg;
			}
        	}
	        else{
        	    return Message("Please login to fill the payment details.");
        	}
	}

	function GetCounter($tablename){
                $obj = new DB();
                return $obj->GetCounter($tablename);
        }

	function ServePayment(){


		$counter=GetCounter("iccm_payment_detail");
		if($counter==0){
		$obj = new DB();
		$query = "insert into iccm_payment_detail values
				('$_POST[username]',
				 '$_POST[name]', 
				 '$_POST[bankname]', 
				 '$_POST[dateoftrans]', 
				 '$_POST[refnum]', 
				 $_POST[amount] 
				)";
		$result = $obj->GetQueryResult($query);
		if($result)
		return Message("Payment details registered successfully","alert-success");
		else
		return Message("Failed to register your payment details","alert-danger");
		}else{
		return Message("It seems you had already filled the payment details, Kindly contact Secretary","alert-info");
		}
	}        
    
    
    

        ?>
