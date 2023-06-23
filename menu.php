<?php

function AddMenuEntry($entry){
	$menuEntry= '<a class="nav-link nasiMenu symposiaForms text-light" id="'.$entry.'" name="'.$entry.'" href="#"><h5>'.$entry.'</a>';
    //$menuEntry='<a href="index.html" class="nav-item nav-link active">Home</a>';
                    return $menuEntry;

}

function Menu(){
    $menuMsg='<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU &#8250; &#8250;</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">';
    $menuMsg.='
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">'.
        AddMenuEntry("Home").
        AddMenuEntry("About the Organisers").
	    AddMenuEntry("Committee").
	    AddMenuEntry("Registration");

	$menuMsg.= AddMenuEntry("Payment");
	$menuMsg.= AddMenuEntry("Programme");
	$menuMsg.= AddMenuEntry("Abstract");
	$menuMsg.= AddMenuEntry("Speakers");
 	$menuMsg.= AddMenuEntry("Venue");
	$menuMsg.= AddMenuEntry("Accommodation");
	$menuMsg.= AddMenuEntry("Sponsor");
	$menuMsg.= AddMenuEntry("Awards");
	$menuMsg.= AddMenuEntry("Contact us");
    
    $menuMsg.='</div>
                            
    </div>
</nav>
</div>
</div>';


  return $menuMsg;

}


function IccmMenu(){
    $menuMsg='  <!-- Nav Bar Start -->
    
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU &#8250; &#8250;</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">';
                 /*
                    $menuMsg.=AddMenuEntry("Home");
                       $menuMsg.=AddMenuEntry("About the Organisers");
                       $menuMsg.=AddMenuEntry("Committee");
                       $menuMsg.=AddMenuEntry("Registration");
               
                   $menuMsg.= AddMenuEntry("Programme");
                   $menuMsg.= AddMenuEntry("Abstract");
                   $menuMsg.= AddMenuEntry("Speakers");
                   $menuMsg.= AddMenuEntry("Venue");
                   $menuMsg.= AddMenuEntry("Accommodation");
                   $menuMsg.= AddMenuEntry("Sponsor");
                   $menuMsg.= AddMenuEntry("Awards");
                   $menuMsg.= AddMenuEntry("Contact us");
                   */
                       
  
                   $menuMsg.='
                       <a href="index.html" class="nav-item nav-link active iccmMenu" id="Home">Home</a>
                        <a href="about-organizer.html" class="nav-item nav-link iccmMenu" id="About" value="About the Organisers">About the Organisers</a>
                        <a href="committee.html" class="nav-item nav-link iccmMenu" id="Committee" value="Committee">Committee</a>
                        <a href="registration.html" class="nav-item nav-link iccmMenu" id="Signup" value="Signup">Signup</a>
                        <a href="registration.html" class="nav-item nav-link iccmMenu" id="Login" value="Login">Login</a>
                        <a href="registration.html" class="nav-item nav-link iccmMenu" id="Registration" value="Registration">Registration</a>
                        <a href="#" class="nav-item nav-link iccmMenu" id="PaymentForm" value="Payment">Payment</a>
                        <a href="programme.html" class="nav-item nav-link iccmMenu" id="Programme" value="Programme">Programme</a>
                        <a href="abstract.html" class="nav-item nav-link iccmMenu" id="Abst" value="Abstract">Abstract</a>
                        <a href="speakers.html" class="nav-item nav-link iccmMenu" id="Speakers" value="Speakers">Speakers</a>
                        <a href="venue.html" class="nav-item nav-link iccmMenu" id="Venue" value="Venue">Venue</a>
                        <a href="accommodation.html" class="nav-item nav-link iccmMenu" id="Accommodation" value="Accommodation">Accommodation</a>
                        <a href="sponsors.html" class="nav-item nav-link iccmMenu" id="Sponsor" value="Sponsor">Sponsor</a>
                         <div class="nav-item dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" value="Awards">Awards</a>
                         <div class="dropdown-menu">
                              <a href="pdf/Best PhD Thesis Award.doc" target="_blank" class="dropdown-item"> Best PhD Thesis Award</a>
                                <a href="pdf/Best Innovation Award.doc" target="_blank" class="dropdown-item"> Best Innovation Award</a>
                                <a href="pdf/BD Bangur Award.doc" target="_blank" class="dropdown-item"> BD Bangur Award</a>
                         </div>
                     </div>

                       <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle iccmMenu" data-toggle="dropdown" value="Downloads">Downloads</a>
                            <div class="dropdown-menu">
                                <a href="pdf/Brochure ICCM 2023.pdf" target="_blank" class="dropdown-item"> Conference Brochure</a>
                                <a href="#" target="_blank" class="dropdown-item"> Registration Form</a>
                              
                            </div>
                      </div>
                        <a href="#contact" class="nav-item nav-link" id="Contact">Contact Us</a>';
                     
                    
                     $menuMsg.='
                        
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    
    <!-- Nav Bar End -->';

return $menuMsg;

}
?>
