<?php
function AuthorTasks(){
    $yourTasksMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="margin-top:20px;">
                <div class="container">
                    <div  class="row justify-content-center align-items-center">';
    $yourTasksMsg.='<div class="col-lg-4 col-md-12" style="text-align: center;">
                            
                        <div class="about-text">
                       
                       <div class="about-text" align="center">
                <p align="center"><a href="#" target="_blank" class="btn contributions" id="Upload_Contribution" style="width:100%;">Online Abstract Submission</a>   </p>
                
                </div>
                </div>
                </div>';
    
    $yourTasksMsg.='<div class="col-lg-4 col-md-12" style="text-align: center;">
                            
                        <div class="about-text">
                       
                       <div class="about-text" align="center">
                <p align="center"><a href="#" target="_blank" class="btn contributions" id="View_Contribution" style="width:100%;">View your Contributions</a>   </p>
                
                </div>
                </div>
                </div>';
    
    
    $yourTasksMsg.='<div class="col-lg-4 col-md-12" style="text-align: center;">
                            
                        <div class="about-text">
                       
                       <div class="about-text" align="center">
                <p align="center"><a href="#" target="_blank" class="btn contributions" id="PaymentForm" style="width:100%;">Fill Payment details</a>   </p>
                
                </div>
                </div>
                </div>';
    
    $yourTasksMsg.='</div></div></div>';
    
    return $yourTasksMsg;
    }
    function AdminTasks(){
    $yourTasksMsg='<div class="about wow fadeInUp" data-wow-delay="0.1s" style="margin-top:20px;">
                <div class="container">
                    <div  class="row justify-content-center align-items-center">';
    $yourTasksMsg.='<div class="col-lg-4 col-md-12" style="text-align: center;">
                            
                        <div class="about-text">
                       
                       <div class="about-text" align="center">
                <p align="center"><a href="#" target="_blank" class="btn contributions" id="ShowRegistration" style="width:100%;">Registration Details</a>   </p>
                
                </div>
                </div>
                </div>';
    
    
    $yourTasksMsg.='</div></div></div>';
    
    return $yourTasksMsg;
    }
    
    function YourTasks(){
    
    session_start();
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
    
    if(isset($_SESSION["loggedin"])){
    
    if($_SESSION["logintype"]=="Author"){
    
    return AuthorTasks().$associatedJs;
    }
    if($_SESSION["logintype"]=="Admin"){
    
    return AdminTasks().$associatedJs;
    }
    }else{
    
    return Message("Please login first","alert-danger");
    }
    }
    
    
    function ShowRegistration(){
    //return Message("Helllo","alert-success");
    session_start();
    if(isset($_SESSION["loggedin"])){
    $obj = new DB();
    $queryReg = "select * from iccm_user_credentials";
    $resultReg = $obj->GetQueryResult($queryReg);
    $tabMsg= "<table class='table table-bordered'>";
    $tabMsg.="<tr class='text-center'> 
        <th>Username</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Institute</th>
        <th>BankName</th>
        <th>Trans. Date</th>
        <th>Ref. Number</th>
        <th>Amount</th>
        </tr>";
    while($row = $resultReg->fetch_assoc()){
    if($row["uname"]=="admin"){
    }else{
    $tabMsg.= "<tr>";
    $tabMsg.= "<td> ".$row["uname"]." </td>";
    $tabMsg.= "<td> ".$row["firstname"]." </td>";
    $tabMsg.= "<td> ".$row["lastname"]." </td>";
    $tabMsg.= "<td> ".$row["email"]." </td>";
    $tabMsg.= "<td> ".$row["institute"]." </td>";
    
    $queryPayment = "select * from iccm_payment_detail where uname='".$row["uname"]."'";
    $resultPayment=$obj->GetQueryResult($queryPayment);
    if($resultPayment->num_rows === 0){
    $tabMsg.="<td></td>";
    $tabMsg.="<td></td>";
    $tabMsg.="<td></td>";
    $tabMsg.="<td></td>";
    $tabMsg.= "</tr>";
    }else{
    $row=$resultPayment->fetch_assoc();
    $tabMsg.="<td>".$row["bankname"]."</td>";
    $tabMsg.="<td>".$row["dateoftrans"]."</td>";
    $tabMsg.="<td>".$row["refnum"]."</td>";
    $tabMsg.="<td>".$row["amount"]."</td>";
    $tabMsg.= "</tr>";
    
    }
    }
    }
    $tabMsg.="</table>";
    //$result->free();
    return $tabMsg;
    }else{
    return Message("Please login","alert-danger");
    }
    }
    
?>