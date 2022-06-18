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
   <a href="http://www.whatsapp.com"><img src="picture/whatsapp.png" width="37" height="37"></a> 
   <a href="https://www.gmail.com"><img src="picture/Mail.png" width="36" height="37"></a> 
   <a href="http://www.Instragram.com"><img src="picture/instar.png" width="38" height="38"></a>
   <br><br><br><br>
    
  <a href= "Login.html"><img src="picture/signout.png" width="27" height="32"></a> </div>
   
   
 
 <div class="box content">
 
   
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div>';
  
  echo '<br><marquee behavior="alternate"><span class="style6"> ::::::::LOWA</span><span class="style7"> STATE </span></font><span class="style8">UNIVERSITY::::::::</span></marquee></marquee>
  
   <div align="right"><table width="93%" border="0" cellpadding="5" cellspacing="0">
     <tr>
   <td width="60%" height="330"><div align="right"><a href="MemSaveForm.php">
        <img src="picture/MembSave.png" width="260" height="260"/></a></div></td>
		
       
       <td width="60%" height="330"><div align="center"><a href="MemSearch.php">
       <img src="picture/Memsearch.png" width="259" height="259"/></a>
       </div></td>
       
      
     </tr>
     <tr>
       <td><div align="center"><a href="MemSaveForm.php">
	   <span class="style4"> SAVE MEMBER DETAILS</span></div></td>
	   
       <td ><div align="center"><a href="MemSearch.php"><span class="style4">
	   SEARCH MEMBER DETAILS</span></a></div></td>
        
     </tr>
	 <br><br><br>
	 </div>
   </table>';
  
  
	                                 }
	
	                                           }
	

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOWA STATE UNIVERSITY</title>
<link rel="stylesheet" type="text/css" media="all" href="proj.css">
<style type="text/css">
body {
	background-color: #330066;
}
body,td,th {
	color: #FFFFFF;
}
.style1 {font-family: "Century Gothic"}
.style4 {
	color: #330066;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size:23px;

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
	 font-size:15px;
}

.style7{
     color:#00CCFF;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:15px;
}

.style8{
     color:#000099;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:15px;
}



-->
</style>

</head>

<br><br><br>
<br><br><br>

<body>

</body>
</html>
