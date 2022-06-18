<?php
session_start();
if(isset($_SESSION['loginUser'])){
if(isset($_SESSION['loginStatus'])){


echo '<br><br><table border="0" width="75%" cellpadding="10" align="center">
   <tr><td>
   <a href="Home.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
    <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div> </td>
  
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="white"> <b>SAVE SUCCESS
   <img src = "picture/checked1.png" width="40" height="40"></a> </td></b>
   <a href ="main.php"></font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC33FF" align="right"><a href ="Home.php"><img src = "picture/home.png" width="40" height="40"></a></td>
   </tr>
   <tr>';
                                        }
										   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
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
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color:#FFFFFF;
}

.style5{
     color:#666666;
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
     color:#00CCCC;
	 font-family:"microsoft tai Le";
	 font-weight:bold;
	 font-size:20px;
}

-->
</style></head>

<body>
<?php

   $bid=$_POST['txtbid'];
   
   $type=$_POST['cmbMtype'];
   $name=$_POST['txtname'];
   $isbn=$_POST['txtisbn'];
   $edi=$_POST['txted'];
   $an=$_POST['txtAn'];
   $pb=$_POST['txtpub'];
   $av=$_POST['txtAv'];
   $rdt=$_POST['txtrdt'];
   
   
  
   $conn=mysqli_connect('localhost','root','','library_management');
   if(!$conn){
       echo 'Data connection not success',mysqli_error($conn);
             }
			 
	
  else{
     $queSave="INSERT INTO book VALUES ('$bid','$type','$name','$isbn','$edi','$an','$pb','$av','$rdt')";
	 if(mysqli_query($conn,$queSave)){
	 echo
	 '<tr>
	 <td> <font face ="calibri" size="5" color="#000099"> <b>  '.$name.' , Successfully Saved!!</b>
	 
	<td> <img src="picture/book.png" width="90" height="90"/>';
	
	            

	  
	    
	echo' </td>
	 </tr>';
	                                 }
  
      }

echo '<tr>
     <td  colspan="2" bgcolor="lime"></td>
     </tr>
	 </table>';
?>
</body>

</html>
