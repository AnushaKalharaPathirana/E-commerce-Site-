<?php
session_start();
if(isset($_SESSION['loginUser'])){

  if(isset($_SESSION['loginStatus'])){


		 
echo '<br><br>
<table border="0" width="75%" cellpadding="10" align="center">
  
   <tr><td>
   <a href="LibrarianSearch.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
  <div align = "right"> <span class="style5">You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></td></tr></table></div><br><br><br><br><br>
   
  <table border="0" width="75%" cellpadding="10" align="center">
  
   <tr>
   <td colspan="2" bgcolor="#660066"><font face="calibri" size="6" color="White"> <b>SEARCH MEMBERS </b>   </font>
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
	color: #FFFFFF;
}

.style21 {
	color: #FF0066;
	font-weight: bold;
	font-size: large;
	font-family: "Bookman Old Style";
}
.style22 {color: #FFFFFF}
.style24 {font-size: large; font-family: "Bookman Old Style"; color: #FF0066;}
.style26 {color: #0099FF; font-weight: bold; font-size: large; font-family: "Bookman Old Style"; }
.style27 {color: #00FFFF}

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


-->
</style></head>

<body>
<?php
echo'<tr>
    <td colspan="2" align="center">';
	$conn = mysqli_connect('localhost','root','','library_management');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	         }
    else{
	  $Lid=$_POST['txtlid'];
	  $queSearch="SELECT * FROM librarian WHERE lid ='$Lid'";
	  
	  if(!mysqli_query($conn,$queSearch)){
	          echo 'Data connot be search at this moment',mysqli_error($conn);
			  
	         }
	   else{
	   $res=mysqli_query($conn,$queSearch);
               if(mysqli_num_rows($res)>0){
			   
       echo '<table cellspacing="0" cellpadding="5" align="center" bordercolor="tomato" border="0"             width=100%>
		   
           <tr>
           <td><font face="microsoft tai Le" size="4" color="Black"><b>Librarian ID</b></td></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Name</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>NIC</b></th></font>
           <td><font face="microsoft tai Le" size="4" color="Black"><b>Civil Status</b></td></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Contact</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>E-mail</b></th></font>
		   <th><font face="microsoft tai Le" size="4" color="Black"><b>Registered date & Time
		   </b></th></font>
           <td>&nbsp</th>
           <th>&nbsp</th>
           </tr>';

         while($rv=mysqli_fetch_assoc($res)){
		    
			$Lid=$rv['Lid'];
			$name=$rv['Name'];
            $nic=$rv['NIC'];
            $cs=$rv['Cst'];
            $con=$rv['Contatct'];
            $mail=$rv['mail'];
			$rd=$rv['RegD'];
			
            echo'<tr>
			<tr bgcolor="#000066">
            <td><font face="microsoft tai Le" size="3">'.$Lid.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3">'.$name.'</td>
            <td><font face="microsoft tai Le" size="3">'. $nic.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$cs.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$con.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$mail.'</td>
			<td> <div align="center"><font face="microsoft tai Le" size="3">'.$rd.'</td>
			
   <td>
   <a href="LibrarianEdit.php?id='.$Lid.'"><img src="Picture/pencil1.png" width="55" height="50"></a>
   </td>
   <td>
   <a href="LibrarianDelete.php?id='.$Lid.'"><img src="Picture/Bin.png" width="45" height="46"></a>
   </td>
            
   </tr>';
 
                      }
		echo'</table>';
		
					  
 
 
	                    }
			else{
				  echo '<font size = "4" face="microsoft tai Le" color="Black" ><b> Member ID:'.$Lid.' not in the database!!</b></font>
				  <br></br>
				  <a href = "LibrarianSearch.php"><img src = "picture/Back.png" width="50" height="50"></a>';
				 } 
				
		       }
	                  }
		    
	
   echo'</td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="#0099FF"></td>
    </tr>
	</table>';
?>
<strong></strong>
</body>
</html>