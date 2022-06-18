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

  background-image:url(picture/wallpaper.png);
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
.style13 {font-size: 21px}
.style14 {
	font-family: calibri;
	color: #330066;
	font-weight: bold;
}
.style18 {font-family: calibri; color: #330066; font-weight: bold; font-size: 22px; }
.style19 {font-family: calibri; color: #330066; font-weight: bold; font-size: 20px; }
-->
</style>
</head>

<body>

<?php 

echo '<div class="box content">

<form id="form1" name="form1" method="post" action="AccSavePro.php">
  
 
<table width="40%" border="0" align="center" cellpadding="5" cellspacing="0">
	<tr>
      <td colspan="2" bgcolor="#660066"><span class="style8">CREATE YOUR ACCOUNT</span></td>
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
        <input name="txtun" type="text" class="style19" id="txtun" size="25" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>New Password</strong></span></td>
      <td><label>
        <input name="txtnpw" type="text" class="style19" id="txtnpw" size="25" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong> Reenter password</strong></span></td>
      <td><label>
        <input name="txtrpw" type="password" class="style19" id="txtrpw" size="25" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>Real Name</strong></span></td>
      <td><label>
        <input name="txtRname" type="text" class="style19" id="txtRname" size="25" maxlength="50" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style2 style1 style12 style5"><strong>User Type</strong></span></td>
      <td><label>
        <select name="cmbUt" class="style19" id="cmbUt">
          <option value="---SELECT---">---SELECT---</option>
          <option value="Librarian">Librarian</option>
          <option value="Professor">Professor</option>
          <option value="Student">Student</option>
        </select>
      </label></td>
    </tr>
    	<tr>
      <td colspan="2"><label></label></td>
    </tr>
    
    	<tr>
      <td><span class="style13">
        <label>
      </span>
        <div align="right">
          <label>
          <div align="center">
            <input name="btnCl" type="reset" class="style9" id="btnCl" value="CLEAR" />
          </div>
          </label>
        </div>
      </label></td>
      <td>
        
        <div align="center">
          <input name="btnCreate" type="submit" class="style9" id="btnCreate" value="CREATE" />
        </div></td>
   	</tr>
   
    	<tr>
      <td colspan="2" bgcolor="blue"><label></label></td>
    </tr>		  
  </table>
   
  
</form>
</div>';
    ?>   
</body>
</html>
