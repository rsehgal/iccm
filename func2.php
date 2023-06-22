<?php

require_once "helpers.php";
require_once "Forms.php";
require_once "DB.php";
require_once "helpers2.php";

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
<td align="center" bgcolor="#E4E4E4">Non-Members (Academic)</td>
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

        $tableToQuery="";
	if(isset($_SESSION["logintype"]) && $_SESSION["logintype"]=="Author")	
		$tableToQuery = "user_credentials";
	if(isset($_SESSION["logintype"]) && $_SESSION["logintype"]=="Referee")	
		$tableToQuery = "refereeList";
	if(isset($_SESSION["logintype"]) && $_SESSION["logintype"]=="Admin")	
		$tableToQuery = "admin_credentials";
	if(isset($_SESSION["logintype"]) && $_SESSION["logintype"]=="Coordinator")	
		$tableToQuery = "coordinatorList";

	$query = "select * from ".$tableToQuery." where uname='".$uname."'";
	//return $query;
	//return $uname;
	$result = $obj->GetQueryResult($query);
	if($result===false)
            return Message("Query execution fails","alert-danger");	
	$row = $result->fetch_assoc();
	//return "Hello Raman";
	//return $row["passwd"]." : ".$passwd;

	/*$js='<script>
                        var data={};
                        $("#logout").on("click","function(e){
                                e.preventDefault();
				alert("logout");
			});
		 </script>';*/
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
				    url: "../controller/func2.php",
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
					//$('#YourTasks').show();
					$('#YourTasks').removeClass('text-light');
                			$('#YourTasks').addClass('text-warning');
			                $('#YourTasks').addClass('text-bold');
			                $('#YourTasks').show();

				}

					});
				</script>";

	if($row["passwd"]==$passwd){
		$_SESSION["loggedin"]=TRUE;
		$_SESSION["username"]=$uname;
		$_SESSION["FirstName"]=$row["firstname"];
		$_SESSION["LastName"]=$row["lastname"];
		$_SESSION["Email"]=$row["email"];
        $_SESSION["uploadlocation"]="Uploads";
		$result->free();
		//if($_SESSION["logintype"]=="Admin" && $_SESSION["loggedin"])
		if($_SESSION["loggedin"])
		echo '<input type="hidden" id="hiddenInfo" logintype="'.$_SESSION["logintype"].'" loggedin="'.$_SESSION["loggedin"].'" />';
		if($_SESSION["logintype"]=="Author")
		//return "<div><h3 class='alert alert-success' role='alert'> Welcome ".$_SESSION["logintype"]." : ".$uname."</h3><br/>";
		return '<h4><mark >Logged in as : '.$_SESSION["username"].'</mark> <input type="button" class="btn btn-custom btn-danger" id="logout" value="Logout"/></h4>'.$js ;

		if($_SESSION["logintype"]=="Referee"){

		$loginStatusMsg='<h4><mark >Logged in as : '.$_SESSION["username"].'</mark> <input type="button" class="btn btn-custom btn-danger" id="logout" value="Logout"/></h4>';
		$localJs = '<script>
				$(function(){

				$("#loginstatus").html("<h4><mark>Logged in as : '.
				$_SESSION["username"].'");
				});</script>';
				//'</mark><input type="button" class="btn btn-custom btn-danger" id="logout" value="Logout"/> </h4>")});</script>';	
				//$("#loginstatus").html('.$loginStatusMsg.')});
		return $localJs.$js." <div><h3 class='alert alert-success' role='alert'> Welcome ".$_SESSION["logintype"]." : ".$uname."</h3><br/>".$loginStatusMsg.'<br/>'.Referee_UpdatePaperStatus().$adCordJS;
		}
		if($_SESSION["logintype"]=="Admin"|| $_SESSION["logintype"]=="Coordinator"){
				return "<div><h3 class='alert alert-success' role='alert'> Welcome ".$_SESSION["logintype"]." : ".$uname."</h3><br/>".PopulateAllotment().$adCordJS;
		}

		//return "<div><h3 class='text-success'> Welcome User : ".$uname."</h3><br/>";
	}
	else
		return "<div><h3 class='alert alert-danger text-center' role='alert'> Authenication failure : Please check your credentials.</h3> <br/>";
		
}


function Login($loginType="Author"){
    //return Message("Will be available soon","alert-warning");
    //return "Hello";
    session_start();
    $_SESSION["logintype"]=$loginType;
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
                        url: "func2.php",
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
                  alert($("#Title").val());
                  dataUp.append("title",$("#Title").val());
                  dataUp.append("filename",$(this).attr("filename"));
          
                  alert("Submit clicked...");
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
                        url: "func2.php",
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
            You can view your updated paper in View_Contribution link.";
            
            
                    //SendMail("resubmission",$_SESSION["email"],"NASI 2023 : Contribution Resubmitted",$body);
            
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
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
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
            
            <ul><li><strong>Deadline of abstract submission is July 30, 2023</strong></li>
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
                    url: 'func2.php',
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
                $fieldNames = $obj->GetFieldNames("contributions");
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
                $username=$_POST['username'];
                $password=$_POST['password'];
                $query='select uname from user_credentials where uname="'.$username.'"';
                //$fetchedUname=GetQueryResult($query)->fetch_assoc()["uname"];
                //echo "Fetch uname : ".$fetchedUname."<br/>";
                if(GetQueryResult($query)->fetch_assoc()["uname"] == $username)
                    return Message("Username : $username already exist.","alert-danger");
                
                $query='select email from user_credentials where email="'.$email.'"';
                if(GetQueryResult($query)->fetch_assoc()["email"] == $email)
                    return Message("Email : $email already registered.","alert-danger");
            
            
                $query = "insert into user_credentials values('$username','$password','$firstname','$lastname','$email',NOW())";
                $obj->GetQueryResult($query);
                $body="Dear $firstname $lastname, 
            
            Your Account is successfully created with following details:
            
            username : $username 
            password : $password
            
            Your can use these credentials to do the registration and to upload your paper.";
                //SendMail($from,$to,$subject,$body);
                // SendMail("newaccount",$email,"NASI 2023 : Account Created",$body);	
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
                        $renamedFileName=$_SESSION["username"].'_paper_'.$topicId.'_'.$count.'.pdf';
                        //$targetFilePath = $targetDirectory . basename($_FILES['file']['name']); // Get the file path
                        $targetFilePath = $targetDirectory.$renamedFileName; // Get the file path
                        //echo "Taget file path :".$targetFilePath."<br/>";
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                            //echo 'File uploaded successfully.<br/>';
                            $query='insert into iccm_contributions values("'.$_SESSION["username"].'","'.$topicId.'","'.$_POST["title"].'","'.$renamedFileName.'","submitted","'.$authorNamesList.'","'.$authorEmailsList.'","","")';
                            //echo $query."<br/>";
                                            $obj->GetQueryResult($query);
            $body="Dear ".$_SESSION["username"].", 
            
            Your have successfully submitted your paper $renamedFileName 
            You can view your paper in View_Contribution link.";
            
            
                            //SendMail("submission",$_SESSION["email"],"NASI 2023 : Contribution submitted",$body);
            
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
            

        ?>