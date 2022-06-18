<?php
session_start();
if(isset($_SESSION['loginUser'])){
echo '<br><table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td> <div align = "right"> <span class="style5">
   <a href="Fine.php"><div align="left"><img src="picture/signout.png" width="26" height="22"></div></a>
    You are loged as <span class="style9">:</span>
   <span class="style2">'.$_SESSION['loginUser'].'</span> <span class="style3">
   ('.$_SESSION['loginStatus'].')</span></div> </td>
   
   
   </tr></table>';
   
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

.style21 {
	color: #FF0066;
	font-weight: bold;
	font-size: large;
	font-family: "Bookman Old Style";
         }
.style22 {color: #FFFFFF;}
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

.style13 {
	font-family: calibri;
	font-size: 20px;
	color: #000000;
	}
.style32 {
	font-family: "microsoft tai Le";
	font-size: large;
	font-weight: bold;
	color: #330066;}
.style55{ font-size:18px; font-weight:bold; color:#FFFFFF; font-family:calibri;}

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
	  $Isuid=$_POST['txtisuid'];
	  $queSearch="SELECT * FROM bookborrow WHERE IssueID ='$Isuid'";
	  
	  if(!mysqli_query($conn,$queSearch)){
	          echo 'Data connot be search at this moment',mysqli_error($conn);
			  
	                                     }
	   else{
	   $res=mysqli_query($conn,$queSearch);
               if(mysqli_num_rows($res)>0){
			   
      

         while($rv=mysqli_fetch_assoc($res)){
		    
			$memid=$rv['MemID'];
			$bkID=$rv['BookID'];
           
            $issD=$rv['IssueDate'];
			$Rd=$rv['ReturnDate'];
			
			
		if(isset($_POST['btnCal'])){
		
   
   $memid =$_POST["txtMid"];
   $bkID =$_POST["txtBkID"];
   
   $issD =$_POST["txtIdate"];
   $Rd =$_POST["txtRdate"];
   
  
                                    }	
           
  echo '<form id="form1" name="form1" method="post" action="FineCal.php">
  
 
			<table width="40%" border="0" align="center" cellpadding="5" cellspacing="0">
	<tr>
      <td colspan="2" bgcolor="white"><span class="style1"></span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#660066"><span class="style1"><span class="style55">
	  <div align="center">Member ID : '.$memid.' Your Book Useage Information as Below</span></span></td>
    </tr>
	<tr>
      <td colspan="2" bgcolor="#660099"><span class="style1"></span></td>
    </tr>
	<tr>
      <td colspan="2" bgcolor="#6633CC"><span class="style1"></span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="white"><span class="style1"></span></td>
    </tr>
    <tr>
      <td><span class="style12">Member ID</span></td>
      <td><label>
      <input type="text" name="txtMid" class="style13" id="txtMid" value="'.$memid.'" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Book ID</span></td>
      <td><label>
        <input type="text" name="txtBkID" class="style13" id="txtBkID" value="'.$bkID.'" />
      </label></td>
    </tr>
    
    <tr>
      <td><span class="style12">Issued Date</span></td>
      <td><label>
	
        <input type="text" name="txtIdate" class="style13" id="txtIdate" value="'.$issD.'" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style12">Return Date</span></td>
      <td><label>
        <input type="text" name="txtRdate" class="style13" id="txtRdate" value="'.$Rd.'" />
      </label></td>
    </tr>';
    			  
			
			
		echo'<tr>
      <td><span class="style12" >Today</span></td>
      <td><label>';
     
			
			$Today=date("Y-m-d");
	  
        echo' <input type="text" name="txtToday" class="style13" id="txtToday" value="'.$Today.'"/>
      </label></td>';
    
	  
	        $Today=time();
			$TD = strtotime("$Rd");
			$dates = $Today - $TD;
			$days=floor($dates/(60*60*24))."\n";  
			
		 if($days>0){
		 
		 $days=floor($dates/(60*60*24))."\n";
		 $Fpd="";
		            }
		else{
		  
		  $days=0;
		  $Fpd=0;
		    }
		
	      
	
      		
		  
		echo'<tr>
      <td><span class="style12">Overdue days</span></td>
      <td><label>
	  
        <input type="text" name="txtDates" class="style13"id="txtDates" 
        value="'.$days.'" />
      </label></td>
	  <tr>
      <td colspan="2" bgcolor="#660066"><span class="style1"></span></td>
    </tr>
	<tr>
      <td colspan="2" bgcolor="#660099"><span class="style1"></span></td>
    </tr>
	  <tr>
      <td colspan="2" bgcolor="#FFFFFF"><span class="style1"></span></td>
    </tr>
    
   </tr>
  
	<tr>
      <td colspan="2" bgcolor="#FFFFFF"><span class="style1"></span></td>
    </tr>
   <tr>
      <td><span class="style12">Fine per day</span></td>
      <td><label>
        <input type="text" name="txtFpd" id="txtFpd" value="'.$Fpd.'" class="style13" />
      </label></td>
    </tr> 
	
	<tr>
      <td height="60" colspan="3"><label>
        <div align="right">
          <label>
          </label>
<input name="btnCal" type="submit" class="style32" id="btnCal" value="CALCULATE" />
        </div>
      </label></td>
    </tr>
	<tr>
      <td colspan="2" bgcolor="#0099FF"><span class="style1"></span></td>
    </tr>
	';
	
    }
		
		
					  
 
 
	                    }
			
   else{
				  echo '<font size = "4" face="microsoft tai Le" color="Black" ><b> Member ID:'.txtisuid.' not in the database!!</b></font>
				  <br></br>
				  <a href = "MemSearch.php"><img src = "picture/Back.png" width="50" height="50"></a>';
		} 
				
		       }
	                  }
   ?>  
   
  </table>
  
 
 
  
</form>	
       
</body>
</html>