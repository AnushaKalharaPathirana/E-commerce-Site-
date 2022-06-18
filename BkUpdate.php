
<?php
session_start();
if(isset($_SESSION['loginUser'])){
if(isset($_SESSION['loginStatus'])){
echo '<table border="0" width="90%" height=2% cellpadding="10" align="center">
   <tr>
   <td> 
   <a href="MemSearch.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
    <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div> </td>
   
   </tr></table>';
   
   
                                  }
								    }
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #FFFFFF;
}
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
.style22 {
	font-size: xx-large;
	color: #FFFFFF;
	font-family:"Century Gothic";
}
.style23 {color: #FFFFFF}
.style24 {color: #660066}
.style31 {font-size: 20px; font-family:"microsoft tai Le"; color:#000000; font-weight: bold; }
.style23 {color: #FFFFFF}
.style32 {color: #000099}
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
	     
		 $memid = $_GET['id'];
	                         }
       if(isset($_POST['btnUpdate'])){
	     $name = $_POST['txtcat'];
		 $mtype = $_POST['txtname'];
		 $gen = $_POST['rbisbn'];
		 $age = $_POST['txted'];
		 $mail = $_POST['txtAn'];
		 $regd = $_POST['txtrpub'];
		 $av = $_POST['txtrAv'];
		 $rdt = $_POST['txtrdt'];
		 
      $queUp = "UPDATE book SET Category='$name',BkName ='$mtype',Isbn='$gen',Edition='$age',
	  Aurthor='$mail',Publisher='$regd',avbooks='$av',RegD='$rdt' WHERE BookID = '$memid'";
		
		if(mysqli_query($conn,$queUp)){

           header("Location:BookUpdatedPro.php");
		   
		                              }
		                           }
        $qt = mysqli_query($conn,"SELECT *FROM book WHERE BookID = '$memid'");
		$qp = mysqli_fetch_assoc($qt);		
?>	                         

<br><br>
<form id="form1" name="form1" method="post" action="">
<table width="57%" border="0" align="center" cellpadding="5" cellspacing="0">


   <tr>
      <td colspan="2" bgcolor="#660066"><strong><span class="style22"><span class="style24">&gt;</span> EDIT RECORDS</span></strong> </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#660099"><span class="style23">&nbsp;</span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="white"><span class="style23">&nbsp; </span>
          <h4 class="style28">
            <div align="left"><span class="style23"><span class="style32"><font face="microsoft tai Le">EDIT RECORDS OF</font></span> <font size="5" face="microsoft tai Le"><span class="style43">:</span></font><font color="black" size="5" face="microsoft tai Le"> <span class="style25"><?php echo $memid; ?></span> </font></span></div>
        </h4></td>
    </tr>
  
  
   <tr>
    <td width="46%" height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Category</span></td>
    <td width="54%" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
       <input name="txtcat" type="text" class="style16" id="txtcat" size="25" maxlength="50" 
       value="<?php echo $qp['Category']?>" />
    </label></td>
  </tr>
  
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Book Name</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtname" type="text" class="style16" id="txtname" size="25" maxlength="50"
       value="<?php echo $qp['BkName']?>" />
    </label></td>
  </tr>
   <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">ISBN</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtisbn" type="text" class="style16" id="txtemail" size="25" maxlength="50" value="<?php echo $qp['Isbn']?>" />
    </label></td>
  </tr>
 <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Edition</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <span class="style16">
    <input name="txted" type="text" class="style16" id="txtage" size="25" maxlength="50" value="<?php echo $qp['Edition']?>" />
      </span></label></td>
  </tr>
  
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Aurthor Name</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <span class="style16">
    <input name="txtAn" type="text" class="style16" id="txtAn" size="25" maxlength="50" value="<?php echo $qp['Aurthor']?>" />
      </span></label></td>
  </tr>
  <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Publisher</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtpub" type="text" class="style16" id="txtemail" size="25" maxlength="50" value="<?php echo $qp['Publisher']?>" />
    </label></td>
  </tr>
   
    <tr>
    <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Available Books</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <span class="style16">
    <input name="txtAv" type="text" class="style16" id="txtAv" size="10" maxlength="15" value="<?php echo $qp['avbooks']?>" />
      </span></label></td>
  </tr>
   
  <tr>
 
    <td height="56" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Register Date & Time</span></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label></label>
      <label>
     
	   
	  
	 <input name="txtrdt" type="datetime-local" class="style16" size="12" maxlength="10" 
	 value="<?php echo $qp['RegD']?>"/>
      </label></td>
  </tr>
  <tr>
    <td height="53" bgcolor="#CCFFFF"><label>
      
        <div align="left"></div>
    </label></td>
    <td bgcolor="#CCFFFF"><label>
      
        <div align="left">
          <input name="btnUpdate" type="submit" class="style12" id="btnUpdate" value="UPDATE" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099CC">&nbsp;</td>
    </tr>
</table>
</form>
<?php
      }
?>
<body>
</body>
</html>