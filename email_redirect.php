<?php
//send_mail.php
ob_start();
  require 'class/class.phpmailer.php';
	require 'class/PHPMailerAutoload.php';
	require_once("db.php");
$user_id =  $_GET['value'];
if(isset($_GET['value']))
{
 

	  $query5=mysqli_query($conn,"SELECT p.program_title,p.is_free,p.fees,u.name,u.email FROM `user_registered_program` ur,`program` p,`user` u WHERE ur.`program_id`=p.`pr_info_id` and ur.user_id=u.user_id and ur.user_id='$_GET[value]' and ur.program_id='$_GET[p_id]'");
        while($row=mysqli_fetch_array($query5)){
        
	$output = '';
	$txt=$row["email"];
	//	$txt2=$row["email2"];
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
 $mail ->Host = "smtp.hostinger.in";
   $mail ->Port = 587; // or 587
   		$mail->SMTPAuth = true;							//Sets SMTP 
$mail->IsHTML(true);
$mail ->Username = "gdcaa@alumnigdc.in";
   $mail ->Password = "Gdcaa@2021";
   $mail ->SetFrom("gdcaa@alumnigdc.in","Assignment Submission Notification");
//$mail->SetFrom('alumni@nmamit-alumni.in','A');
		 $mail->SMTPSecure = 'TLS';							//Sets connection  
		// $mail ->SetFrom("alumni@nmamit-alumni.in","WENAMITAA");
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		 		
		$mail->Subject = $txt;
		//$mail->Body = $txt2;
		  $mail->Body =   $mail->Body =  "<p><strong><!-- ######## This is a comment, visible only in the source editor  ######## --></strong></p>
<p><strong><!-- ######## This is a comment, visible only in the source editor  ######## --></strong></p>
<p><strong>Dear Dlithe Tech Team,</strong></p>
<p><strong>$row[name]</strong><strong> submitting the report, Please review and approve your work shortly.&nbsp;</strong></p>
<p><strong></strong></p>
<p><strong>Kind Regards,</strong><br /><strong>Team DLithe </strong><br /><strong>M:900 881 5252</strong><br /><strong>info@dlithe.com</strong><br /><strong>www.dlithe.com</strong></p>";
    
		
		$mail->AltBody = '';
        

        try {
   $result = $mail->Send();
  // echo "Message has been sent successfully";
  echo "<script>
  alert('Your Assignment Successfully Submitted');
  window.location.href='dashboard.php';
  </script>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    	if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
			echo "<script>
  alert('Error Try Again.....');
  window.location.href='dashboard.php';
  </script>";
		}
			echo "<script>
  alert('Error Try Again.....');
  window.location.href='dashboard.php';
  </script>";
}
	
	if($output == '')
	{
		//echo 'ok';
	}
	else
	{
			echo "<script>
  alert('Error Try Again.....');
  window.location.href='dashboard.php';
  </script>";
	}
           }
	
}
ob_flush();
?>