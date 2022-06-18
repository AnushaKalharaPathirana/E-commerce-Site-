<?php 
$mysli=NEW MySQLi('localhost','root','','library_management');
$result=$mysli->query("SELECT MemID FROM member");
?>
<select name="members">
<?php
while($rows=$result->fetch_assoc()){
 
 $id=$rows['MemID'];
 echo"<option value='$id'>$id</option>";
                                   }
								   
								   
 ?>
 </select>
 <?php 
echo date("h:i:sA");
 ?>
