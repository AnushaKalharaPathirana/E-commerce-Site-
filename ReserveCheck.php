<?php

session_start();
if(isset($_SESSION['loginUser'])){

  if(isset($_SESSION['loginStatus'])){
		 
echo '<table border="0" width="75%" cellpadding="10" align="center">
  
   <tr><td>
   <a href="Reserve.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></td></tr></table></div><br><br><br>
   
  <table border="0" width="75%" cellpadding="10" align="center">
  
   <tr>
   <td colspan="2" bgcolor="#660066"><font face="calibri" size="6" color="White"> <b>SEARCH BOOK RESERVATION DETAILS </b>   </font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#660099" align="right"></td>
   </tr>';
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
body,td,th {
	color:#000099;
	font-family: Century Gothic;
	font-size: 24px;
	font-weight: bold;
}
.style4 {
	color:#0080C0;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 24px;
}


.style1 {
	color:#6A00D5;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 25px;
}

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
.style8 {
	color:#00CCCC;
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: 25px;
}
-->
</style></head>

<body>
<?php 

date_default_timezone_set('Asia/Colombo');
$T=date("Y-m-d h:i:s A");
 

?>
<?php 
echo'<tr>
    <td colspan="2" align="center">';
	$conn = mysqli_connect('localhost','root','','library_management');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	         }
    else{
	  $resID=$_POST['cmbResID'];
	  $queSearch="SELECT * FROM bookreserve WHERE ResID  ='$resID'";
	  
	  if(!mysqli_query($conn,$queSearch)){
	          echo 'Data connot be search at this moment',mysqli_error($conn);
			  
	         }
	   else{
	   $res=mysqli_query($conn,$queSearch);
               if(mysqli_num_rows($res)>0){
			   
       echo '<table cellspacing="0" cellpadding="5" align="center" bordercolor="tomato" border="0"             width=100%>
		  
           <tr>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Reserve ID</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Member ID</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Book ID</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Reserved Date & Time </b></th></font>
		   <th><font face="microsoft tai Le" size="4" color="Black"><b>Issue date & Time </b></th></font>
       
		   
           <td>&nbsp</th>
           <th>&nbsp</th>
           </tr>';

         while($rv=mysqli_fetch_assoc($res)){
		    
			$resid=$rv['ResID'];
			$memID=$rv['MemID'];
            $bkID=$rv['BkID'];
            $rd=$rv['Rdt'];
			
            
			
            echo'<tr>
			<tr bgcolor="#000066">
            <td><div align="center"><font face="microsoft tai Le" size="3" color="#FFFFFF">'.$resid.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3" color="#FFFFFF">'.$memID.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3" color="#FFFFFF">'.$bkID.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3" color="#FFFFFF">'.$rd.'</td>
			
			<td><div align="center"><font face="microsoft tai Le" size="3" color="#FFFFFF">
			'.$T.'</td>
			
           
  
   <td>
   <a href="ResDelete.php?id='.$resid.'"><img src="Picture/Bin.png" width="45" height="46"></a>
   </td>
            
   </tr>';
   
 
                      }
		echo'</table>';
		
					  
 
 
	                    }
			else{
				  echo '<font size = "4" face="microsoft tai Le" color="Black" ><b> Member ID:'.$memid.' not in the database!!</b></font>
				  <br></br>
				  <a href = "MemSearch.php"><img src = "picture/Back.png" width="50" height="50"></a>';
				 } 
				
		       }
	                  }
 echo'</td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="#0099FF"></td>
    </tr>
	</table>
     <br><br>
	<table width="30%" border="0" align="Right" cellpadding="5" cellspacing="0">

	  <tr>
   <td colspan="2" bgcolor="#FFFFFF">';
   
	
	
	$cdate= strtotime($T);
	$odate= strtotime($rd);
	$dif = $cdate - $odate;
	
	$ho = ($dif/(60*60));
	$m = ($dif/60%60);
	$s = ($dif%60);
	$days=($ho/24);
	$ho=($ho%24);

       if($days>=1){
	     
		  echo '<span class="style4">You Have Spent</span> <br>';
		  echo floor($days)." Days AND " ;
		  echo sprintf (" %02d",$ho).":".sprintf("%02d",$m).":".sprintf("%02d",$s)." Time";
	      echo'<br> <span class="style1">Reserve is not Available </span><span class="style8">!!</span>';
	             }
		else{
		  
		  
		 echo '<span class="style4">You Have Spent</span> <br>';
		  echo floor($days)." Days AND " ;
		  echo sprintf (" %02d",$ho).":".sprintf("%02d",$m).":".sprintf("%02d",$s)." Time";
	      echo'<br> <span class="style1">Reserve is Available </span><span class="style8">!!</span>';
		       }
		 
		
		
		
		             
	echo'</td>
   </tr>
	</table>';	
	

?>
</body>
</html>
