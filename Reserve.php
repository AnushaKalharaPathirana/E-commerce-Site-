
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
    
  <a href= "Home.php"><img src="picture/signout.png" width="27" height="32"></a> </div>
   
   
 
 <div class="box content">
 
   
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div><br><br>';
                              }
							    }
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="proj.css">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style20 {
	color: #330066;
	font-weight: bold;
	font-family: "microsoft tai Le";
	font-size: 20px;
}
.style21 {
	font-family: "Century Gothic";
	font-weight: bold;
	color: #FF0066;
	font-size: 20px;
}
.style8 {color: #000000; font-weight: bold; font-size: 20px; font-family:calibri; }
.style6 {color: #000000}
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
	font-size:22px;
	

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
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="ReserveCheck.php">

  <table width="72%" height="224" border="0" align="center" cellpadding="5" cellspacing="0">
  <td bgcolor="#660066">&nbsp;</td>
       <td colspan="2" bgcolor="#660066">&nbsp;</td>
  <tr>
      <td colspan="3" bgcolor="#660099"><span class="style1"></span></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#6633CC"><span class="style1"></span></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style1"></span></td>
    </tr>
      <tr>
      
        <td width="40%" rowspan="3"><div align="center"><a href="BkReserve.php">
        <img src="picture/click-here-icon-png-26.jpg" width="190"
       height="190" /></a></div></td>
        <td>&nbsp;</td>
        <td width="27%" rowspan="3"><div align="left"><img src="picture/Msearch.png" alt="" width="130" 
      height="130"/>
        </div>
        </div></td>
      </tr>
    <tr>
      <td width="33%"><div align="right">
        <label>

          
          <div align="right">
            <?php 
          $conn=NEW MySQLi('localhost','root','','library_management');
         $result=$conn->query("SELECT ResID FROM bookreserve");
?>
            <select name="cmbResID" class="style8" id="cmbResID">
              <option> ---  SELECT--- </option>
              <?php
            while($rows=$result->fetch_assoc()){
 
               $id=$rows['ResID'];
               echo"<option value='$id'>$id</option>";
                                                }
 ?>
            </select>
          </div>
            </label>
      </a></div></td>
    </tr>
    <tr>
      <td><label>

        <div align="right">
          <input name="btnSearch" type="submit" class="style21" id="btnSearch" value="CHECK" />
          </div>
      </label></td>
    </tr>
    
     <tr>
       <td>&nbsp;</td>
       <td colspan="2">&nbsp;</td>
     </tr>
     <tr>
      <td width="40%"><div align="center" ><a href="BkReserve.php"><span class="style4">
      RESERVE YOUR BOOK</span><a></div></td>
      <td colspan="2"><div align="center" class="style4"> CHECK YOUR RESERVE</div></td>
    </tr><tr>
    <td colspan="3" bgcolor="#0099FF"></td>
    </tr>
    
  </table>
</form>
</body>
</html>
