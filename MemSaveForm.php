<?php

   
 session_start();
 if(isset($_SESSION['loginUser'])){
 
  if(isset($_SESSION['loginStatus'])){
  



 
 echo '<img src="picture/libry.png" width="100%" height="728"/>

<div align="center"></div>
<Br><Br>
<table height="40" width="100%"  border="0" cellpadding="5" cellspacing="0">
  <tr height="25">
    <td width="20%" height="25" bgcolor="#330066">
      <div align="center"><a href="Home.php"><strong> Home</strong></a>
     &nbsp; </div></td>
    <td width="18%" height="30" bgcolor="#330066">
   <div align="center"><a href="http://www.facebook.com"><strong>About Us</strong></a>
&nbsp;      </div></td>
    <td width="23%" height="25" bgcolor="#330066">
      <div align="center"><a href="http://www.facebook.com"><strong>Contact</strong></a>
&nbsp;      </div></td>
    <td width="20%" height="20" bgcolor="#330066">
     <div align="center"><a href="http://www.facebook.com"><strong>Map</strong></a>
      &nbsp;</div></td>
    <td width="19%" height="25" bgcolor="#330066">
      <div align="center"><a href="http://www.facebook.com"><strong>FAQ</strong></a>
      &nbsp;</div></td>
  </tr>
</table>

<div class="wrapper">
<div class="box header"></div>
 <div class="box sidebar">
   
   <a href="http://www.facebook.com"><img src="picture/facebook.png" width="39" height="39"></a> 
   <a href="http://www.twitter.com"><img src="picture/twitter.png" width="35" height="35"></a> 
   <a href="http://www.whatsapp.com"><img src="picture/whatsapp.png" width="38" height="38"></a> 
   <a href="https://www.gmail.com"><img src="picture/Mail.png" width="37" height="36"></a> 
   <a href="http://www.Instragram.com"><img src="picture/instar.png" width="38" height="38"></a>
   <br><br><br><br>
    
  <a href= "Login.html"><img src="picture/signout.png" width="30" height="31"></a> </div>
   
   
 
 <div class="box content">
 
   
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div>';
  
  
  
                               }
							     }
?>


<?php 
$servername="localhost";
   $username="root";
   $password = "";
   $sbdname="library_management";
   $conn =mysqli_connect($servername,$username, $password, $sbdname);
   
?>
<?php
 $query = "SELECT * FROM member order by MemID desc limit 1";
 $result = mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
 $lastid= $row['MemID'];
  
 
 if($lastid == " "){
  
  $serino="LSU 1";
                 }
  else{
   
   $serino = substr($lastid,3);
   $serino = intval($serino);
   $serino = "LSU " . ($serino + 1);
      }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOWA STATE UNIVERSITY</title>
<link rel="stylesheet" type="text/css" media="all" href="proj.css">
<style type="text/css">
<!--

body {
	background-color:#330066;
}
.error{

    color:#400040;
	font-weight:bold;
	   
	   }

.style1 {font-family: "Century Gothic"}
.style4 {
	color: #330066;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size:28px;

}
.style5{
     color:#00CC00;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:20px;
}

.style2{
     color:#FF0066;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:20px;
}

.style3{
     color:#9900CC;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:20px;
}

.style9{
     color:#000000;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:22px;}
	 
.style11{
  
  font-size:22px;

       }
.style6{
     color:#FF0000;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:16px;
}

.style7{
     color:#00CCFF;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:16px;
}

.style8{
     color:#000099;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:16px;
}


.style11 {font-family: "microsoft tai Le"; font-weight: bold; font-size: 25px; color: #330066; }
.style12 {
	font-family: "microsoft tai Le";
	color: #660066;
	font-weight: bold;
	font-size: 19px;
}
.style16 {
	font-family: calibri;
	font-size: large;
	color: #000000;
}
.style21 {font-size: 20px; color: #330066; font-family: calibri; font-weight: bold; }
.style22 {
	font-size: xx-large;
	color: #FFFFFF;
	font-family:"Century Gothic";
}
.style23 {color: #FFFFFF}
.style24 {color: #660066}
.style31 {font-size: 20px; font-family:"microsoft tai Le"; color:#000000; font-weight: bold; }

.style1 {
	font-family: "microsoft tai Le";
	font-size: large;
	font-weight: bold;
	color: #330066;
}
.style4 {
	font-size: x-large;
	color: #660066;
	font-family: calibri;
}
body,td,th {
	color: #000000;
}
-->
</style>
</head>

<body>
<?php 
$nameErr="";$mTypeErr="";$genErr="";$mailErr="";$rdErr="";
 $name=$mType=$gen=$age=$mail=$rd="";
 
   if($_SERVER["REQUEST_METHOD"]=="POST"){
   
   if(empty($_POST["txtname"])){  
     
	 $nameErr="Name is required";
	 
                               }
							   
	
	else{
	  $name=test_input($_POST["txtname"]);
	   
		
	if(!Preg_match("/^[a-zA-Z ]*$/",$name)){
     
	   $nameErr="Only letters and white spaces errors";
	 
                                            }
   
       }
	   
	   if(empty($_POST["cmbMtype"])){
	   
	   $mTypeErr="Member Type is required!";
	    
	   
	                                }
	   else{
	    
		$mType=test_input($_POST["cmbMtype"]);
	       }
		   
		   
		   if(empty($_POST["rbgen"])){
		 
		       $genErr="Gender is required!";
		 
		                          }
		        else{
		 
		        $gen=test_input($_POST["rbgen"]);
		            }
					
	 if(empty($_POST["txtemail"])){
		 
		 $mailErr="Email is required!";
		 
		                              }
		else{
		  
		  $mail=test_input($_POST["txtemail"]);
		  //Check if email address well formed
		  
		       if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		  
		            $emailErr="Invalied email format";
		  
		                                                    }
		    }
			
	 if(empty($_POST["txtrdate"])){
	   
	   $rdErr="Member Type is required!";
	    
	   
	                                }
	   else{
	    
		$rd=test_input($_POST["txtrdate"]);
		
	       }
			
			
		                                 }
										 
		function test_input($data){
	   $data=trim($data);
	   $data=stripslashes($data);
	   $data=htmlspecialchars($data);
	   
	   return $data;
	                          }
	   
	   
	
?>

<br><br>
<form id="form1" name="form1" method="post" action="MemSavPro.php""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table width="57%" border="0" align="center" cellpadding="5" cellspacing="0">
 <tr>
    <td colspan="2" bgcolor="#660066"><strong><span class="style22"><span class="style24">&gt;</span>Member Registration</span></strong></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#660099"></label>
      <span class="style23">&nbsp;</span></td>
  </tr>
  <tr>
    <td width="46%" height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Member ID</span></td>
    <td width="54%" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtmid" type="text" class="style16" id="txtmid" size="10" maxlength="10" style="color:#000099;" value="<?php echo $serino ?>" />
    </label></td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Name</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtname" type="text" class="style16" id="txtname" size="25" maxlength="50" />
       <span class="error">*<?php echo $nameErr;?></span>
    </label></td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Member Type</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <select name="cmbMtype" class="style16" id="cmbMtype">
        <option>--SELECT--</option>
        
        <option value="Professor">Professor</option>
        <option value="Student">Student</option>
        </select>
         <span class="error">*<?php echo $mTypeErr;?></span>
    </label></td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Gender</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input type="radio" name="rbgen" id="radio" value="Male" />
      <span class="style21">Male</span>
      </label>
      
      <label>
      <input type="radio" name="rbgen" id="radio" value="Female" />
      <span class="style21">Female</span></label>
       <span class="error">*<?php echo $genErr;?></span>
      </td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Age</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <span class="style16">
    <input name="txtage" type="text" class="style16" id="txtage" size="5" maxlength="3" />
    
      </span></label></td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">E-mail Address</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtemail" type="text" class="style16" id="txtemail" size="25" maxlength="50" />
       <span class="error">*<?php echo $mailErr;?></span>
    </label></td>
  </tr>
  <tr>
 
    <td height="56" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Register Date</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label></label>
      <label>
     
	   
	  
	 <input name="txtrdate" type="date" class="style16" size="12" maxlength="10" value=""/>
      <span class="error">*<?php echo $rdErr;?></span>
      </label></td>
	  
	 
    
  </tr>
  <tr>
    <td height="53" bgcolor="#CCFFFF"><label>
      
        <div align="left">
          <input name="btncl" type="reset" class="style12" id="btncl" value="CLEAR" />
        </div>
    </label></td>
    <td bgcolor="#CCFFFF"><label>
      
        <div align="left">
          <input name="btnsave" type="submit" class="style12" id="btnsave" value="SAVE" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099CC">&nbsp;</td>
    </tr>
</table>
</form>

<br>
<?php
echo '<br><marquee behavior="alternate"><span class="style6"> ::::::::LOWA</span><span class="style7"> STATE </span></font><span class="style8">UNIVERSITY::::::::</span></marquee></marquee>';
?>
</body>
</html>
