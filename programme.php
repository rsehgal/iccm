<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ICCM 2023</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Indian Conference on Carbon Materials 2023" name="Indian Conference on Carbon Materials 2023">
        <meta content="Indian Conference on Carbon Materials 2023" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

          <!-- Bootstrap CSS -->
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- CSS Libraries -->
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">


      
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
var dataUp=new FormData();
  </script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
        
      
       <style type="text/css">
    

.countdown {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  width: 98%;
  max-width: 50rem;
  margin: 22px auto;
  
  color: black;
}

.countdown__item {
  display: flex;
  flex-direction: column;
  flex: 0 1 auto;
  min-width: 25%;
  /*margin-bottom: 1rem;*/

// Instead of a modifier one could use a pseudo-class:
//   &:first-child {
//     width: 100%;
//   }
  
//   &:not(:first-child) {
//     flex: 1;
//   }
}

.countdown__item--large {
  flex: auto;
  width: 100%;
  font-size: 2.75em;
}

.countdown__timer {
  padding: 5px;
  background: #1d94f3;
  border: 1px rgb(0, 0, 0);
  border-radius: 36px;
  font-weight: bold;
  font-size: 22px;
  text-align: center;
  color:#FFF;
  margin:2px;
}

.countdown__label {
  text-align: center;
  font-size: 15px;
  padding-top: 1px;
  color: #000000;
  
  .countdown__item--large & {
    &:before,
    &:after {
      content: '';
      display: block;
      height: 1px;
      background-image: linear-gradient(
        left,
        rgba(0, 0, 0, 0), 
        rgba(0, 0, 0, .4),
        rgba(0, 0, 0, 0));
    }

  }
}
</style>  

<style>

.blink-hard {
  animation: blinker 3s infinite /*step-end*/ /*infinite*/;
  font-size:18px;
  color:#900;
  padding-top:10px;
}

.blink-soft {
  animation: blinker 1.5s linear infinite;
   font-size:18px;
  color:#900;
  padding-top:10px;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

</style>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	



$('.iccmMenu').on('click',function(event){
	//alert($(this).attr("id")+" called..");
	event.preventDefault();
	var funcName="";
	var data={};
	var funcName=$(this).attr("id");
	//alert(funcName);
	data['function_name']=funcName;
	console.log(data);
	$.ajax({
	    url: "func2.php",
	    method: "POST",
	    data : data,
	    success: function(response) {
	    $("#result").hide();
	    //$("#result").delay(1000).fadeIn();
	    $("#result").html(response);
	    $("#result").fadeIn(1000);
	    }
	  });

});
});
</script>



<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    
           
        
    </head>

    <body>

        
        <div class="wrapper">
            <!-- Top Bar Start -->
            
            <?php
                require_once "menu.php";
                echo IccmMenu();
            ?>

            

            <?php
                require_once "helpers.php";
                echo IccmCarousel();
            ?>


<!-- Page Header Start -->
            <div class="page-header" style="margin-bottom: 0px !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="color:#FFF; font-weight:600;">PROGRAMME</h3>
                        </div>
                        <div class="col-12">
                            <a href="index.html">Home</a>
                            <a href="">Programme</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Feature Start-->
            
            <!-- Feature End-->

            <div id='result' class='' ></div>
            <!-- About Start -->
            <!--
            <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background:#E7F2F6; background-image:url(img/bg-main.jpg); background-attachment:fixed; padding-top:50px; padding-bottom:50px;">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-12 col-md-6">
                           
                            <div class="about-text">
                                <p align="left">
                                 <strong>Details will be updated shortly...</strong>

</p>
                                
                               
                            </div>
                        </div> 
      
                    </div>
                </div>
            </div>-->
            <!-- About End -->

            </div>
            
            
            <!-- org committee End -->
            <!-- FAQs End -->
    
            <?php
                require_once "helpers.php";
                echo IccmFooter();
            ?>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  
    </body>
</html>
