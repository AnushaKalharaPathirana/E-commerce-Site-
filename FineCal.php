<?php
session_start();
if(isset($_SESSION['loginUser'])){
if(isset($_SESSION['loginStatus'])){
echo '<table border="0" width="90%" height=2% cellpadding="10" align="center">
   <tr>
   <td> 
   <a href="Fine.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
    <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div> </td>
   
   </tr></table>';
   
   
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
 $query = "SELECT * FROM fine order by SerNo desc limit 1";
 $result = mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
 $lastid= $row['SerNo'];
  
 
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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	font-family: "microsoft tai Le";
	color: #FFFFFF;
	font-weight: bold;
	font-size: x-large;
}

.style12 {font-family: "microsoft tai Le"; font-weight: bold; font-size:20px; color: #000000; }

.style13 {
	font-family: calibri;
	font-size: 20px;
	color: #000000;
	}
.style88{ font-size:22px; font-weight:bold; color:#000099; font-family:calibri;}
.style92 {
	font-family: "Century Gothic";
	font-size: x-large;
	color: #FFFFFF;
	font-weight: bold;
}
.style94 {
	font-size: 26px;
	font-weight: bold;
	color: #990066;
	font-family: calibri;
}
.style102 {
	color: #FF0066;
	font-size: 18px;
	font-weight: bold;
	font-family: "microsoft tai Le";
}
.style104 {color: #FF0033}
.style105 {color: #000000}
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


<body>
<div class="row">
 <div class="col-sm-4">
 

<?php 
	if(isset($_POST['btnCal'])){
	  
	  $days=$_POST['txtDates'];
	  $fine=$_POST['txtFpd'];
	  $tot = $days*$fine;
	  
	  if($tot>0){
	  
	  $tot = $days*$fine;
	  
	             }
	 else{
	  
	  $tot="0.00";
	     }
	  
	 
	
	 
	   
	  
	                           }
	?>
   
<form id="form1" name="form1" method="post" action= "FineCalPro.php"" <?php echo($_SERVER["PHP_SELF"]); ?>">
       

     
  <table width="43%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="3" bgcolor="#660066"><span class="style92">CHARGE  FINE
      </span></td>
    </tr>
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
      <td><span class="style12">Issue ID</span></td>
      <td colspan="2"><label>
  <input type="text" name="txtIsID" id="txtIsID" class="style13" style="color:#000099;" 
  value="<?php echo $serino; ?>" />
      </label></td>
    </tr>
    <tr>
      <td width="39%"><span class="style12">Member ID</span></td>
      <td width="61" colspan="2"><label>
        <input type="text" name="txtmID" id="txtmID" class="style13" value="<?php echo $_POST["txtMid"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Book ID</span></td>
      <td colspan="2"><label>
  <input type="text" name="txtBkID" id="txtBkID" class="style13" value="<?php  echo $_POST["txtBkID"];?>" />
      </label></td>
    </tr>
    
    <tr>
      <td><span class="style12">Issued Date</span></td>
      <td colspan="2"><label>
        <input type="text" name="txtIdate" id="txtIdate" class="style13" 
        value="<?php  echo $_POST["txtIdate"];?>"/>
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Return Date</span></td>
      <td colspan="2"><label>
        <input type="text" name="txtRdate" id="txtRdate" class="style13" 
        value="<?php  echo $_POST["txtRdate"];?>" />
      </label></td>
    </tr>
    <?php $Today=date("Y-m-d");?>
      <tr>
      <td><span class="style12">Returned Date</span></td>
      <td colspan="2"><label>
        <input type="text" name="txtToday" id="txtToday" class="style13" 
        value="<?php echo $Today?>" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Overdue days</span></td>
      <td colspan="2"><label>
        <input type="text" name="txtDates" id="txtDates" class="style13"
        value="<?php  echo $_POST["txtDates"];?>"/>
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Due Per Day</span></td>
      <td colspan="2"><label>
        <input type="text" name="txtFperD" id="txtFperD" 
        class="style13" value="<?php  echo $_POST["txtFpd"];?>"/>
      </label></td>
      <tr>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style1"></span></td>
    </tr>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#00CCCC"><div align="center">
          <span class="style1"><?php echo $_POST["txtMid"]?> <span class="style105">:</span> Have a Rs.<?php echo $tot;?> <span class="style104">Fine!!</span></span></div>    </td>
    </tr>
    <tr>
      <td height="1" colspan="3" bgcolor="#FFFFFF"><span class="style1"></span></td>
    </tr>
    <tr>
      <td><span class="style94">Total charge</span><span class="style1"></span></td>
      <td><label>
        <input type="text" name="txttot" id="txttot" class="style88" 
        value=" Rs.<?php  echo $tot?>"/>
      </label></td>
      <td><div align="left"><img src="picture/Fine.png" width="78" height="81" /></div></td>
    </tr>
    
    <tr>
      <td height="5"><label></label></td>
      <td height="5" colspan="2"><label></label>
        <div align="center">
          <input name="btnSave" type="submit" class="style3" id="btnSave" value="SAVE" />
      </div></td>
      
    <tr>
      <td height="15" colspan="3" bgcolor="#0099FF"><span class="style1"></span></td>
    </tr>
    
    
  </table>
</form>
</body>
</html>
