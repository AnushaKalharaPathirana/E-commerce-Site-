
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
    
  <a href= "Reserve.php"><img src="picture/signout.png" width="27" height="32"></a> </div>
   
   
 
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
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="all" href="proj.css">
<style type="text/css">
<!--

.style12 {font-family: "microsoft tai Le"; font-weight: bold; font-size: large; color:#006699; }
.style15 {
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 19px;
	color: #007BB7;
}
.style16 {
	font-family: "microsoft tai Le";
	color: #FFFFFF;
	font-size: large;
}
.style17 {color: #660066}
.style8 {font-family:calibri;  font-size:large; color:#000000; font-weight:bold; }
.style18 {font-size: x-large; }
body {
	background-color: #330066;
}
body,td,th {
	color: #FFFFFF;
}
.style29 {color: #CC0099; font-weight: bold; font-size: 21px; font-family: "microsoft tai Le"; }
.style31 {color: #CC0099; font-weight: bold; font-size: 20px; font-family: "microsoft tai Le"; }
.style8 {color: #000000; font-weight: bold; font-size: 20px; font-family:calibri; }
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

.style10{
     color:#000099;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:16px;
}
.style20{
     color:#000099;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:20px;
}

.style8 {font-family: "microsoft tai Le";  font-size:17; color: #000000; }

-->
</style>
</head>

<body>
<?php 
$servername="localhost";
   $username="root";
   $password = "";
   $sbdname="library_management";
   $conn =mysqli_connect($servername,$username, $password, $sbdname);
   
?>
<?php

 $query = "SELECT * FROM bookReserve order by ResID desc limit 1";
 $result = mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
 $lastid= $row['ResID'];
  
 
 if($lastid == " "){
  
  $serino="RES 1";
                 }
  else{
   
   $serino = substr($lastid,3);
   $serino = intval($serino);
   $serino = "RES " . ($serino + 1);
      }
?>

<?php 

date_default_timezone_set('Asia/Colombo');
$Time=date("h:i:s A");
$Today = date("Y-m-d");

?>
<form id="form1" name="form1" method="post" action="ReserveSavePro.php""<?php echo($_SERVER["PHP_SELF"]);?>">
  <table width="46%" height="395" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td height="48" colspan="2" bgcolor="#660066"><strong><span class="style16"> <span class="style17">.
      </span><span class="style18">BOOK RESERVATION</span></span></strong></td>
    </tr>
    <tr>
     <td bgcolor="#FFFFFF"></td>
      <td height="10" bgcolor="#FFFFFF"><label></label></td>
    </tr>
    <tr>
      <td width="39%"><div align="left"><span class="style12">Reserve ID</span></div></td>
      <td width="61%"><label>
        
        <div align="left">
          <input name="txtres" type="text" class="style8" id="txtres" size="22" style="color:#6700CE" maxlength="10" 
         value="<?php echo $serino ?>" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><span class="style12">Member ID</span></div></td>
      <td><label>

        <div align="left">
  <?php 
          $conn=NEW MySQLi('localhost','root','','library_management');
         $result=$conn->query("SELECT MemID FROM member");
?>
          <select name="cmbMem" class="style8" id="cmbMem">
            <option> ---  SELECT--- </option>
  <?php
            while($rows=$result->fetch_assoc()){
 
               $id=$rows['MemID'];
               echo"<option value='$id'>$id</option>";
                                                }
 ?>
          </select>
        </div>
    </label></td></tr>
    <tr>
      <td><div align="left"><span class="style12">Book ID</span></div></td>
      <td>
        <div align="left">
        <?php 
		$result=$conn->query("SELECT BookID FROM book");
		?>
         <select name="cmbID" class="style8" id="cmbID">
            <option> ---  SELECT--- </option>
            
            <?php
            while($rows=$result->fetch_assoc()){
 
               $n=$rows['BookID'];
               echo"<option value='$n'>$n</option>";
                                                }
 ?>
  </select>
        </div></td>
    
    <tr>
      <td><div align="left"><span class="style12">Reserve Date </span></div></td>
      <td><label>
        
        <div align="left">
          <input name="dtp" type="datetime-local" class="style8" id="dtp" size="10" maxlength="10" />
        </div>
      </label></td>
      
     <tr>
     <td bgcolor="#FFFFFF"></td>
      <td height="8" bgcolor="#FFFFFF"><label></label></td>
    </tr>
    <tr>
      <td height="41" bgcolor="#CCFFFF""><input name="btnCl" type="reset" class="style31" id="btnCl"
       value="CLEAR" /></td>
      <td bgcolor="#CCFFFF"><input name="btnSave" type="submit" class="style20" id="btnSave" value="SAVE" /></td>
    </tr>
    <tr>
     <td bgcolor="#0099FF"></td>
      <td height="8" bgcolor="#0099FF"><label></label></td>
    </tr>
  </table>
</form>
<?php
echo '<br><marquee behavior="alternate"><span class="style6"> ::::::::LOWA</span><span class="style7"> STATE </span></font><span class="style10">UNIVERSITY::::::::</span></marquee></marquee>';
?>
</body>
</html>
