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
   <br><br>
    
  <a href= "Home.php"><img src="picture/signout.png" width="27" height="28"></a> </div>
   
   
 
 <div class="box content">
 
   
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div><br>';
  
  
  
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
.style1 {
	font-family: "microsoft tai Le";
	font-size:26px;
	color: #000099;
	font-weight: bold;
}

.style1 {font-family: "Century Gothic"; font-size:20px;}

.style3{
     color:#9900CC;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:22px;
}
.style8 {font-size: x-large}
.style14 {font-size: 22px; font-family: calibri; color: #000000; }
.style16 {
	font-size: 20px;
	font-family: "microsoft tai Le";
	color: #000000;
}


.style5{
     color:#00CC00;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:22px;
}

.style2{
     color:#FF0066;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:22px;
}

.style3{
     color:#9900CC;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:22px;
}

.style9{
     color:#000000;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:24px;}
	 
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
-->
</style>
</head>

<body>
<?php 
echo '<table border="0" width="80%" cellpadding="10" align="center">
  <tr>
  
   <td>&nbsp;</td>
  </tr>
   <tr>
   <td colspan="2" bgcolor="#660066"><font face="calibri" size="6" color="White"> <b>SEARCH EMPLOYEE </b>   </font></td>
  </tr>
   <tr>
   <td  colspan="2" align="right" bgcolor="#660099"></a></td>
  </tr>
   <tr>
   
   <tr>
    <td colspan="2" align="center">
	<form id="form1" name="form1" method="post" action="LibrarianSearchPro.php">
  <table width="50%" height="127" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="36%" height="56" class="style1"><div align="center">Librarian ID</div></td>
      <td width="28%" bgcolor="#FFFFFF"><div align="center">
        <input name="txtlid" type="text" class="style16" id="txtlid" size="18" maxlength="12" />
      </div></td>
      <td width="10%">
	  
	  <td width="26%" bgcolor="#FFFFFF" aligin="center"> 
      <img src="Picture/MSearch.png" width="100" height="101"></tr>
    <tr>
      <td class="style8">&nbsp;</td>
      <td bgcolor="#FFFFFF"><label>
        <div align="center">
          <input name="btnsrc" type="submit" class="style3" id="btnsrc" value="Search" />
        </div>
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
    </td>
  </tr>
	 <tr>
     <td  colspan="2" bgcolor="#0099FF"></td>
    </tr>
</table>

<br><marquee behavior="alternate"><span class="style6"> ::::::::LOWA</span><span class="style7"> STATE </span></font><span class="style8">UNIVERSITY::::::::</span></marquee></marquee>';
?>
</body>
</html>
