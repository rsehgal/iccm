<?php
//echo "Hello Friend...";
function IccmHeader($headerType=""){

    $headerMsg="";
    $headerType=$_POST["value"];
    if($headerType==""){
        
    }else{
    $headerMsg='<div class="page-header" style="margin-bottom: 0px !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#FFF; font-weight:600;">'.strtoupper($headerType).'</h3>
                        </div>
                        <div class="col-12">
                            <a href="#" id="iccmHomeLink">Home</a>
                            <a href="">'.$headerType.'</a>
                        </div>
                    </div>
                </div>
            </div>';
        
    }

    $associatedJs ="<script>
                    $('#iccmHomeLink').click(function(){

                        $('#Home').trigger('click');
                    });
                    </script>";
    return $headerMsg.$associatedJs;
}

function IccmFooter(){

    $footerMsg='<!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s" id="contact">
       <div class="container">
           <div class="row">
           
           <div class="col-md-6 col-lg-4">
                   <div class="newsletter">
                       <h2>Conference Secretariat</h2>
                       <p>
                       <strong>Dr. Jyoti Prakash</strong><br>
Conference Secretary, ICCM 2023<br>
Indian Carbon Society, Maharashtra Chapter<br>
C/o Materials Group, Bhabha Atomic Research Centre, Mumbai – 400085<br>
<br>
<strong>Email: </strong>secretaryiccm2023@gmail.com<br>
<strong>Ph no:</strong> 022 25593924 
                       </p>
                       
                   </div>
               </div>
               
               <div class="col-md-6 col-lg-3">
                   <div class="footer-contact">
                      
                      
                   </div>
               </div>
               <!--<div class="col-md-6 col-lg-1">
                   <div class="footer-link">
                       &nbsp;
                   </div>
               </div>-->
               <div class="col-md-6 col-lg-2">
                   <div class="footer-link">
                       <h2>Quick Links</h2>
                       <a href="registration.html">Registration</a>
                       <a href="programme.html">Programme</a>
                       <a href="#">Contact Us </a>
                   </div>
                   
                   <div class="footer-social">
                           <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                           <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                           <!--<a href=""><i class="fab fa-youtube"></i></a>-->
                          
                       </div>
                   
                 
               </div>
               
               <div class="col-md-6 col-lg-3">
                   <div class="newsletter">
                      
                    
                     
                    <br>

                         <a href="http://s11.flagcounter.com/more/C2M"><img src="https://s11.flagcounter.com/count2/C2M/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_12/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                   </div>
               </div>
           </div>
       </div>
       
       <!--<div class="container copyright">
           <div class="row">
               <div class="col-md-6">
                   <p>&copy; <a href="#">xxxxxx</a>, All Right Reserved.</p>
               </div>
               <div class="col-md-6">
                   <p>Designed By Alpcord Network</p>
               </div>
           </div>
       </div>-->
   </div>
   <!-- Footer End -->';
   return $footerMsg;
}

function IccmCarousel(){

    $carouselMsg='<!-- Carousel Start -->
    
    <div id="carousel" class="carousel slide" data-ride="carousel" style="margin-top:0px;">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" alt="Carousel Image" class="logocontrol">
                
                <img src="img/carousel-11.jpg" alt="Carousel Image" class="logocontrol1">
                
            </div>

          <div class="carousel-item">
                <img src="img/carousel-2.jpg" alt="Carousel Image" class="logocontrol">
                 <img src="img/carousel-22.jpg" alt="Carousel Image" class="logocontrol1">
                
            </div>

            <div class="carousel-item">
                <img src="img/carousel-3.jpg" alt="Carousel Image" class="logocontrol">
                
                <img src="img/carousel-33.jpg" alt="Carousel Image" class="logocontrol1">
                
            </div>
            
           
            
            
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->';

    return $carouselMsg;
}

function GetSubmitterName(){
	session_start();
	$obj = new DB();
	$query='select firstname,lastname from user_credentials where uname="'.$_SESSION["username"].'"';
	$result = $obj->GetQueryResult($query);
	if($result===false)
                                return Message("Query execution fails","alert-danger");
	$row=$result->fetch_assoc();
	$result->free();
	return $row["firstname"]." ".$row["lastname"];
}

function GetTopic($topic){
	$query='select Topic from iccmTopics where Code="'.$topic.'"';
	$obj = new DB();
	$result = $obj->GetQueryResult($query);
	if($result===false)
                                return Message("Query execution fails","alert-danger");

	$row = $result->fetch_assoc();
	$result->free();
	return $row["Topic"];
}
?>