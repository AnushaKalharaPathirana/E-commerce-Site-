<?php 
echo '<br><table border="0" width="60%" cellpadding="10" align="center">
   <tr><td>
   <a href="Login.html"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
   </td></tr></table>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOWA STATE UNIVERSITY</title>
<style type="text/css">
<!--
body{

  background-image:url(picture/);
  background-size:cover;
  background-attachment:fixed;
    }
.content{width=100%; padding:40px; margin:100px auto;}

.style1 {color: #000000}
.style2 {font-family: "microsoft tai Le"}
.style5 {font-size: 20px}
.style8 {
	font-size: 28px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: "Century Gothic";
}
.style9 {
	color: #0099CC;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 20px;
}
.style19 {font-family: calibri; color: #330066; font-weight: bold; font-size: 20px; }
.style23 {
	font-weight: bold;
	color: #000000;
	font-size: 17px;
}
.style25 {font-size: 16px}
.style27 {font-weight: bold; font-size: 17px; }
-->
</style>
</head>

<body>

 <?php

	$conn = mysqli_connect('localhost','root','','library_management');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	          }
    else{
	   
	   if(isset($_GET['id'])){
	     
		 $un = $_GET['id'];
	                         }
       if(isset($_POST['btnUpdate'])){
	     
		 $pw = $_POST['txtnpw'];
		 $rpw = $_POST['txtrpw'];
		 $rn = $_POST['txtRname'];
		 $st = $_POST['rbst'];
		
		 
      $queUp = "UPDATE users SET Password ='$pw',Repass='$rpw',RealName='$rn',
	  Status=' $st' WHERE Username = '$un'";
		
		if(mysqli_query($conn,$queUp)){

           header("Location:ChangePro.php");
		   
		                              }
		                           }
        $qt = mysqli_query($conn,"SELECT *FROM users WHERE Username = '$un'");
		$qp = mysqli_fetch_assoc($qt);		
?>	                         

<div class="box content">

<form id="form1" name="form1" method="post" action="">
  
 
<table width="53%" border="0" align="center" cellpadding="5" cellspacing="0">
	<tr>
      <td colspan="2" bgcolor="#660066"><span class="style8">CHANGE USER INFO</span></td>
    </tr>
   
	<tr>
      <td colspan="2" bgcolor="#660099"><span class="style1"></span></td>
    </tr>
	<tr>
      <td colspan="2" bgcolor="#6633CC"><span class="style1"></span></td>
    </tr>
    
    <tr>
      <td width="52%"><span class="style2 style1 style12 style5"><strong>User Name</strong></span></td>
      <td width="48%"><label>
        <input name="txtun" type="text" class="style19" id="txtun" size="25" maxlength="20" value ="<?php echo $qp['Username']?>" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>New Password</strong></span></td>
      <td><label>
        <input name="txtnpw" type="text" class="style19" id="txtnpw" size="25" maxlength="20" value ="<?php echo $qp['Password']?>"  />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>Reenter password</strong></span></td>
      <td><label>
        <input name="txtrpw" type="password" class="style19" id="txtrpw" size="25" maxlength="20" 
        value = "<?php echo $qp['Repass']?>" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>Real Name</strong></span></td>
      <td><label>
        <input name="txtRname" type="text" class="style19" id="txtRname" size="25" maxlength="50"
       value = " <?php echo $qp['RealName']?>"  />
      </label></td>
    </tr>
    <tr>
      <td height="53" bordercolor="#FFFFFF"><span class="style5 style31 style2"><strong>Gender</strong></span></td>
      <td bordercolor="#FFFFFF"><label>
        <input type="radio" name="rbst"  value="Librarian" <?php echo ($qp['Status']=='Librarian')?'
	  checked="checked"':''?> />
        <span class="style23">Librarian</span> </label>
          <span class="style25">
          <label>          </label>
          </span>
          <label>
          <input type="radio" name="rbst" value="Professor" <?php echo ($qp['Status']=='Professor')?'
	  checked="checked"':''?> />
          <span class="style23">Professor</span></label>
           <label>
          <input type="radio" name="rbst" value="Student" <?php echo ($qp['Status']=='Student')?'
	  checked="checked"':''?> />
        <span class="style27">Stud</span><span class="style23">ent</span></label>        </td>
    </tr>
    <tr>
   	  <tr>
      <td colspan="2"><label></label></td>
    </tr>
    
    	<tr>
      <td><span class="style13">
        <label>
      </span>
      </label></td>
      <td>
        
        <div align="center">
          <input name="btnUpdate" type="submit" class="style9" id="btnUpdate" value="CHANGE" />
        </div></td>
   	</tr>
   
    	<tr>
      <td colspan="2" bgcolor="blue"><label></label></td>
    </tr>		  
  </table>
   
  
</form>
<?php
      }
?>
</div> 
</body>
</html>