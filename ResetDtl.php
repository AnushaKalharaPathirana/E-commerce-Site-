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
</head>

<body>
<?php
echo'<tr>
    <td colspan="2" align="center">';
	$conn = mysqli_connect('localhost','root','','library_management');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	         }
    else{
	  $un=$_POST['txtun'];
	  $queSearch="SELECT * FROM users WHERE Username ='$un'";
	  
	  if(!mysqli_query($conn,$queSearch)){
	          echo 'Data connot be search at this moment',mysqli_error($conn);
			  
	         }
	   else{
	   $res=mysqli_query($conn,$queSearch);
               if(mysqli_num_rows($res)>0){
			   
       echo '<table cellspacing="0" cellpadding="5" align="center" bordercolor="tomato" border="0"             width=80%>
		   
           <tr>
           <td><font face="microsoft tai Le" size="4" color="Black"><b>User name</b></td></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Password</b></th></font>
           <th><font face="microsoft tai Le" size="4" color="Black"><b>Real Name</b></th></font>
           <td><font face="microsoft tai Le" size="4" color="Black"><b>Status</b></td></font>
        
           <td>&nbsp</th>
           <th>&nbsp</th>
           </tr>';

         while($rv=mysqli_fetch_assoc($res)){
		    
			$un=$rv['Username'];
			$pw=$rv['Password'];
            $rpw=$rv['Repass'];
            $rn=$rv['RealName'];
            $st=$rv['Status'];
            
			
            echo'<tr>
			<tr bgcolor="#000066">
            <td><font face="microsoft tai Le" size="3">'.$un.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3">'.$pw.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3">'.  $rn.'</td>
            <td><font face="microsoft tai Le" size="3">'. $st.'</td>
          
           
			
   <td>
   <a href="change.php?id='.$un.'"><img src="Picture/pencil1.png" width="55" height="50"></a>
   </td>
   
            
   </tr>';
 
                      }
		echo'</table>';
		
					  
 
 
	                    }
			else{
				  echo '<font size = "4" face="microsoft tai Le" color="Black" ><b> Member ID:'.$un.' not in the database!!</b></font>
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
	</table>';
?>
</body>
</html>
