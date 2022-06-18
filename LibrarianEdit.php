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
	background-color:#FFFFFF;
}
body,td,th {
	color: #FFFFFF;
	
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
.style32 {
	color: #000099;
	font-size: 23px;
}
.style33 { font-size:20; font-weight:bold; color: #FF0066}
.style25{color:#FF8040; font-family:calibri; font-size:25px;}
.style43 {font-size: 20; font-weight: bold; color: #0080C0; }
.style5{
     color:#00CC00;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:19px;
}

.style2{
     color:#FF0066;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:19px;
}

.style3{
     color:#9900CC;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:19px;
}
-->
</style>
</head>

<body>

<p>
  <?php

	$conn = mysqli_connect('localhost','root','','library_management');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	          }
    else{
	   
	   if(isset($_GET['id'])){
	     
		 $Lid = $_GET['id'];
	                         }
       if(isset($_POST['btnUpdate'])){
	     $name = $_POST['txtname'];
		 $nic = $_POST['txtnic'];
		 $cs = $_POST['rbcs'];
		 $con = $_POST['txtcon'];
		 $mail = $_POST['txtemail'];
		 $regd = $_POST['txtrdate'];
		 
      $queUp = "UPDATE librarian SET Name='$name',NIC ='$nic',Cst='$cs',Contatct='$con',
	  mail='$mail',RegD='$regd' WHERE Lid = '$Lid'";
		
		if(mysqli_query($conn,$queUp)){

           header("Location:LibrarainEditedPro.php");
		   
		                              }
		                           }
        $qt = mysqli_query($conn,"SELECT *FROM librarian WHERE Lid = '$Lid'");
		$qp = mysqli_fetch_assoc($qt);		
?>	                         
</p>

<p>&nbsp;</p>
<form method="post" action="">
  <table width="48%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#660066"><strong><span class="style22"><span class="style24">&gt;</span> EDIT RECORDS</span></strong> </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#660099"><span class="style23">&nbsp;</span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="white"><span class="style23">&nbsp; </span>
          <h4 class="style28">
            <div align="left"><span class="style23"><span class="style32"><font face="microsoft tai Le">EDIT RECORDS OF</font></span> <font size="5" face="microsoft tai Le"><span class="style43">:</span></font><font color="black" size="5" face="microsoft tai Le"> <span class="style25"><?php echo $Lid; ?></span> </font></span></div>
        </h4></td>
    </tr>
    <tr>
      <td width="37%" height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Name</span></td>
      <td width="57%" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
        <input name="txtname" type="text" class="style16" id="txtname" size="25" maxlength="50" value="<?php echo $qp['Name']?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">NIC</span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
      <input name="txtnic" type="text" class="style16" id="txtnic"value="<?php echo $qp['NIC']?>"> 
      
      
      </label></td>
    </tr>
    <tr>
      <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Civil Status</span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
        <input type="radio" name="rbcs"  value="Married" <?php echo ($qp['Cst']=='Married')?'
	  checked="checked"':''?> />
        <span class="style21">Married</span> </label>
          <label>
          <input type="radio" name="rbcs" value="Unmarried" <?php echo ($qp['Cst']=='Unmarried')?'
	  checked="checked"':''?> />
          <span class="style21">Unmarried</span></label></td>
    </tr>
    <tr>
      <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Contact No</span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label> <span class="style16">
        <input name="txtcon" type="text" class="style16" id="txtcon" size="12" maxlength="10" value="<?php echo $qp['Contatct']?>" />
      </span></label></td>
    </tr>
    <tr>
      <td height="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">E-mail Address</span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label>
        <input name="txtemail" type="text" class="style16" id="txtemail" size="25" maxlength="50"  value="<?php echo $qp['mail']?>" />
      </label></td>
    </tr>
    <tr>
      <td height="57" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style31">Register Date</span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label></label>
          <label>
          <input name="txtrdate" type="text" class="style16" id="txtrdate" size="20" maxlength="10" 
	 value="<?php echo $qp['RegD']?>"/>
 fdgggdg       </label></td>
    </tr>
     <tr>
      <td bgcolor="#CCFFFF"></td>
      <td height="43" bgcolor="#CCFFFF"><input name="btnUpdate" type="submit" class="style33" id="btnUpdate" value="UPDATE" /></td>
     
    </tr>
    <tr>
      <td bgcolor="#0080C0"></td>
      <td height="20" bgcolor="#0080C0"><label></label></td>
     
    </tr>
<tr></tr>
</table>
</form>
<?php
      }
?>
</body>
</html>