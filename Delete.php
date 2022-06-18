
<?php
session_start();

 if(isset($_SESSION['loginUser'])){
 
  if(isset($_SESSION['loginStatus'])){


echo ' <table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td><a href="MemSearch.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
    <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div> </td>
  
   
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"><b>Delete Record</b></font>
    <img src = "picture/checked1.png" width="40" height="40"></a>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC00FF" align="right"><a href ="Home.php"><img src = "picture/home.png"    width="40"   height="40"></a></td>
   </tr>
    <tr>
   <td colspan="2" align="center">';
                                        }
										  }
										 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
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
</style>
</head>

<body>
<?php
 $conn = mysqli_connect ('localhost','root','','library_management');
 if($conn){
 
     if(isset($_GET['id'])){
   
          $eid=$_GET['id'];
		  
		        $quedel= "DELETE FROM member WHERE MemID = '$eid'";
		  
		     if(mysqli_query($conn,$quedel) ){
		  
		  echo ' <b> <font size="4" face="microsoft tai Le">Employee ID:'.$eid.' Sucessfully Deleted!!                 </font></b><br></b>
		          <br>
		  
		  <a href="search.php"><img src="Picture/back.png" width="50" height="50"></a>';
		                                  
										     }
                           } 
						  
          }
		    
	echo'
		  </td>
		      <tr>
		  <td  colspan="2" bgcolor="lime"></td>
		      </tr>
		  </table>';
	 
	 
	 
?>
</body>
</html>
