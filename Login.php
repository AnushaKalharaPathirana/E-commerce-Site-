<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<?php
  $un=$_POST['txtun'];
  $pw=$_POST['txtpw'];
  $st=$_POST['rbst'];
  
  if(!empty($un) && !empty($pw)){
  
   $conn = mysqli_connect('localhost','root','','library_management');
   
   if($conn){
      $searchQue="SELECT * FROM users WHERE Username ='$un'";
	  if(mysqli_query($conn,$searchQue)){
	      $dres=mysqli_query($conn,$searchQue);
	       if(mysqli_num_rows($dres)>0){
	           $rowValue = mysqli_fetch_array($dres);
			   if($rowValue["Username"]==$un && $rowValue["Password"]== $pw){
			      $_SESSION['loginUser']=$rowValue["RealName"];
			       $run = $rowValue["RealName"];
				   
				    if($rowValue["Status"]==$st){
			       $_SESSION['loginStatus']=$rowValue["Status"];
			       $go = $rowValue["Status"];
				   
				   $queUp = "INSERT INTO logsrc(RealName,Status,Login) VALUES('$run','$go',(now()))";
				   if(mysqli_query($conn,$queUp)){
					//echo 'Update the shedule!';
					
					header("Location:Home.php");
				                                 }
			   
			                                                              }
		       else{
			    
				echo'Select Your Correct User Type!!';
			       }
				                                }
	            else{
				  
				  echo'Incorrect User name or Password!!';
				    
					}
				  
		   
	                                    }
	 else{
	   echo 'Please Sign up Before Login to the system';
	     }
	                                    }
    
            }
			
  
   else{
        echo 'Database Under Construction';
	   }
  
                               }
	else {
	   echo 'Username Password cannot be Blank!!';
	     }
 
?>
</body>
</html>
