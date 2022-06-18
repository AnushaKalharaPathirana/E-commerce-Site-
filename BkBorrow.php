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
 $query = "SELECT * FROM bookborrow order by IssueID desc limit 1";
 $result = mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
 $lastid= $row['IssueID'];
  
 
 if($lastid == " "){
  
  $serino="ISU 1";
                 }
  else{
   
   $serino = substr($lastid,3);
   $serino = intval($serino);
   $serino = "ISU " . ($serino + 1);
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
	 font-size:21px;}
	 
.style11{
  
  font-size:16px; font-family:calibri;

       }
.style12 {font-family: "microsoft tai Le"; font-weight: bold; font-size: large; color: #000000; }
.style13 {font-family: "microsoft tai Le";  font-size:18; color: #000000; }
.style8 {font-family: "microsoft tai Le";  font-size:17; color: #000000; }
.style14 {color: #FFFFFF}
.style15 {
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 19px;
	color: #007BB7;
}
.style16 {
	font-family: "microsoft tai Le";
	color: #FFFFFF;
	font-size: x-large;
}
.style17 {color: #660066}
.style21 {font-size: 20px; color: #330066; font-family: calibri; font-weight: bold; }
.style31 {font-size: 20px; font-family:"microsoft tai Le"; color:#000000; font-weight: bold; }
-->
</style>
</head>

<body>


<br><br>
<form id="form1" name="form1" method="post" action="BkBorrowSave.php""<?php echo($_SERVER["PHP_SELF"]);?>"> 
  <table width="52%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td height="48" colspan="2" bgcolor="#660066"><strong><span class="style16"> <span class="style17">.</span>BOOK BORROWING</span></strong></td>
    </tr>
    <tr>
     <td bgcolor="#FFFFFF"></td>
      <td height="10" bgcolor="#FFFFFF"><label></label></td>
    </tr>
    <tr>
      <td width="39%"><div align="left"><span class="style9">Issue ID</span></div></td>
      <td width="61%"><label>
        
        <div align="left">
          <input name="txtID" type="text" class="style11" id="txtID" size="22" maxlength="10"
          style="color:#6700CE" value="<?php echo $serino ?>" />
          </label>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><span class="style9">Member ID</span></div></td>
      <td><label>
        
        <div align="left">
          <?php 
         $mysli=NEW MySQLi('localhost','root','','library_management');
         $result=$mysli->query("SELECT MemID FROM member");
?>
          <select name="members" class="style8">
            <option> ---  SELECT--- </option>
            <?php
            while($rows=$result->fetch_assoc()){
 
               $id=$rows['MemID'];
               echo"<option value='$id'>$id</option>";
                                                }
 ?>
          </select>
          </label>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><span class="style9">Book ID</span></div></td>
      <td>
        <div align="left">
          <?php 
          $conn=NEW MySQLi('localhost','root','','library_management');
         $result=$conn->query("SELECT BookID FROM book");
?>
            <select name="cmbbkID" class="style8" id="cmbbkID">
              <option> ---  SELECT--- </option>
              <?php
            while($rows=$result->fetch_assoc()){
 
               $id=$rows['BookID'];
               echo"<option value='$id'>$id</option>";
                                                }
 ?>
            </select>
    </tr>
    
    <tr>
      <td><div align="left"><span class="style9">Issue Date</span></div></td>
      <td><label>
        
        <div align="left">
         <?php $Today=date("Y-m-d");?>
          <input name="txtIdate" type="text" class="style11" id="txtIdate" size="22" maxlength="10"
          value="<?php echo $Today;?>" />
          </label>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><span class="style9">Return Date</span></div></td>
      <td><label>
        <div align="left">
          <input type="date" class="style13" name="date" id="date"/>
          </label>
      </div></td>
    </tr>
    
    <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Borrowing Status</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input type="radio" name="rbbr" id="radio" value="Issued" />
      <span class="style21">Issued</span>
      </label>
      
      <label>
      <input type="radio" name="rbbr" id="radio" value="Returned" />
      <span class="style21">Returned</span></label></td>
  </tr>
    <tr>
      <td height="29" bgcolor="#CCFFFF"><input name="btnCl" type="reset" class="style15" id="btnCl" value="CLEAR" /></td>
      <td height="29" bgcolor="#CCFFFF"><div align="center">
        <input name="btnSave" type="submit" class="style15" id="btnSave" value="SAVE" />
      </div></td>
    </tr>
    <tr>
     <td bgcolor="#0080C0"></td>
      <td height="15" bgcolor="#0080C0"><label></label></td>
    </tr>
  </table>
</form>
</body>
</html>
