<?php
ob_start();
if(isset($_REQUEST['submit']))
{
$ToEmail = 'yameecluster@gmail.com';
$EmailSubject = 'Site contact Alakar Products';
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= 'Bcc: ravr.sasikumar@gmail.com  ' . "\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$Campany = "".$_POST["company"]."";
$Email .= "".$_POST["mailid"]."";
$Phone .="".$_POST["mobile"]."";
$Message .="".$_POST["message"]."";
$Subject .="".$_POST["subject"]."";
echo "Hello world!"; 

$MESSAGE_BODY .="<html>
<style type='text/css'>

.style2 {font-family:Arial, Helvetica, sans-serif; font-size: 9px; color:#949494; }
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#009966; font-weight:bold; }
.main_ta {   border:6px solid #0C3;  }
.border_bot { border-bottom:6px solid #0C3; padding-top:6px; padding-bottom:6px; padding-left:6px; }
.pad_ta { padding:10px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; }
.foo_bot { background-color:#0C3; height:30px; color:#FFFFFF; font-size:13px;  font-family: Arial, Helvetica, sans-serif;  font-weight:bold; vertical-align:middle; }
.inn_table {  font-family: Arial, Helvetica, sans-serif; font-size: 12px; }

</style>
<body>

<table width='600'  border='0' align='center' cellpadding='0' cellspacing='0'>
<tr >
<td>


<table width='600'  border='0' align='center' class=main_ta cellpadding='0' cellspacing='0'>

<tr>

<td valign=top class=pad_ta colspan=2>Dear Alakar Products, 
<br>

  We received enguiry from the following person:<br><br>

<table width=400 border=0 cellspacing=1 cellpadding=3 class=inn_table align=center>
    <tr>
      <td width=143>Campany </td>
      <td width=246>$Campany </td>
    </tr>

    <tr>
      <td width=143>Email</td>
      <td width=246>$Email </td>
    </tr>
    
    
    <tr>
      <td width=143>Phone</td>
      <td width=246>$Phone </td>
    </tr>
    
    
    <tr>
      <td width=143>Message </td>
      <td width=246>$Message </td>
    </tr>
     <tr>
      <td width=143>Subject </td>
      <td width=246>$Subject </td>
    </tr>
    	
  </table>
  
 </td>

</tr>
<br><br>
<tr>
<td width=600 class=foo_bot align=center  >Alakar Products</td>
</tr>

</table>
</td></tr></table>
</body>
</html>	";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

exit();
}

?>

<script type="text/javascript">
	   DM_redirect("index.php");
	</script>