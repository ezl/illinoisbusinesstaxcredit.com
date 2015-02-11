<?php

$Subject = "New Email";
$Name = $_POST['t_name'];
$BName = $_POST['t_businessname'];
$Email = $_POST['t_email'];
$Phone = $_POST['t_phone'];
$Emp1 = $_POST['t_employees2012'];
$Emp2 = $_POST['t_employees2015'];
$Contact = $_POST['t_contact'];

$message = '<div style="font-weight:bold;">
<p>Name: '.$Name.'</p>
<p>Business Name: '.$BName.'</p>
<p>Phone: '.$Phone.'</p>
<p>Email: '.$Email.'</p>
<p>Number of Full Time Employees on Jan 2012: '.$Emp1.'</p>
<p>Number of Full Time Employees on Jan 2015: '.$Emp2.'</p>
<p>Contact: '.$Contact.'</p>
</div>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail('YOUREMAILHERE@TAXCREDIT.COM','New Request Submission',$message,$headers);

// redirect to success page 
if (mail){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>