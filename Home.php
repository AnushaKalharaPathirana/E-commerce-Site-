<?php
 session_start();
 if(isset($_SESSION['loginUser'])){
 
  if(isset($_SESSION['loginStatus'])){
 
 echo '<img src="picture/libry.png" width="100%" height="750"/>

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
      <div align="center"><a href="Fine.php"><strong>FAQ</strong></a>
      &nbsp;</div></td>
  </tr>
</table>

<div class="wrapper">
<div class="box header"></div>
 <div class="box sidebar">
   
   <a href="http://www.facebook.com"><img src="picture/facebook.png" width="40" height="40"></a> 
   <a href="http://www.twitter.com"><img src="picture/twitter.png" width="36" height="36"></a> 
   <a href="http://www.whatsapp.com"><img src="picture/whatsapp.png" width="38" height="38"></a> 
   <a href="https://www.gmail.com"><img src="picture/Mail.png" width="38" height="38"></a> 
   <a href="http://www.Instragram.com"><img src="picture/instar.png" width="38" height="38"></a>
   
   <br><br><br><br>
    
  <a href= "Logout.php"><img src="picture/signout.png" width="27" height="32"></a><br><br>
  <a href="help.php">    
       <img src="picture/help1.png" width="900" height="90"/></a>
   </div>
  
   
   
 
 <div class="box content">
 
   
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div>
   <h1 align="left" class="style1"> PLUNGE INTO THE WONDERFUL
    <br>
    WORLD OF READING</h1>
	
	<table width="93%" border="0" align="right" cellpadding="5" cellspacing="0">
<tr>
       <td width="31%" height="372"><div align="center"> <a href="MemSave.php">     
       <img src="picture/MemRegister.png" width="260" height="260"/></a></div></td>
       
       <td width="31%" height="372"><div align="center"><a href="BookReg.php">    
       <img src="picture/BookRegi.png" width="260" height="260"/></a></div></td>
       
       <td width="31%" height="372"><div align="center"><a href="BkBorrow.php">    
       <img src="picture/BookBorrow.png" width="260" height="260" /></a></div></td>
  </tr>
     <tr>
       <td><div align="center"><a href="MemSave.php">
	   <span class="style4">MEMBER REGISTRATION</span></a></div></td>
	   
       <td><div align="center"><a href="BookReg.php">    
	   <span class="style4">BOOKS REGISTRATION</span></a></div></td>
	   
       <td><div align="center"><a href="BkBorrow.php">    
	   <span class="style4">BOOK BORROWING INFO</span></a></div></td>
     </tr>
     </div>
</table>
   
    <div align="right">
<table width="93%" border="0" align="right" cellpadding="5" cellspacing="0">
  <tr>
   <td width="31%" height="372"><div align="center"><a href="Reserve.php">
         <img src="picture/reserve.png" width="260" height="260"/></a>
       </div></td>
       
       <td width="31%" height="372"><div align="center"><a href="AllBookSearch.php">    
       <img src="picture/BookSearch.png" width="260" height="260"/></a>
       </div></td>
       
       <td width="31%" height="372"><div align="center"><a href="Librarian.php">    
       <img src="picture/librarianGirl.png" width="260" height="260" /></a>
       </div></td>
     </tr>
     <tr>
       <td><div align="center"><a href="Reserve.php">    
	   <span class="style4">BOOK RESERVATION</span></a></div></td>
	   
       <td><div align="center"><a href="AllBookSearch.php">    
	   <span class="style4">SEARCH BOOK DETAILS</span></a></div></td>
	   
       <td><div align="center"><a href="Librarian.php">    
	   <span class="style4"> SAVE LIBRARIAN INFO </span></a></div></td>
     </tr>
	 <br><br><br>
	 
   </table>
   
   
   
   <p align="left" class="style1">&nbsp;</p>
   <div align="right"></div>
    <div align="left"></div>
    
    
    
 </div>
 
 
 
</div>';
 
 
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
.style1 {font-family: "Century Gothic"; font-size:45px;}
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
	   .style24{
     color:#FFFFFF;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:24px;}
	 

-->
</style>
</head>
<body>


</body>
</html>
