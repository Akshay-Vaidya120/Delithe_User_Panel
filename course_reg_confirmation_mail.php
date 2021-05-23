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
   $mail ->SetFrom("gdcaa@alumnigdc.in","Payment Confirmation");
//$mail->SetFrom('alumni@nmamit-alumni.in','A');
		 $mail->SMTPSecure = 'TLS';							//Sets connection  
		// $mail ->SetFrom("alumni@nmamit-alumni.in","WENAMITAA");
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		 		
		$mail->Subject = $txt;
		//$mail->Body = $txt2;
		  $mail->Body =   $mail->Body =  "<p><strong><!-- ######## This is a comment, visible only in the source editor  ######## --></strong></p>
<p><strong>Dear $row[name],</strong></p>
<p><strong>Congratulations! You have successfully registered with DLithe for the program $row[program_title].</strong></p>
<p><strong>We have received the course fee Rs. $row[fees], with thanks</strong></p>
<p><strong>Transaction number &lt;xxx&gt; is for your reference.</strong></p>
<p><strong>We look forward your presence during the session.</strong></p>
<p><strong>You will be notified further process through email.</strong></p>
<p><br /><strong>Kind Regards,</strong><br /><strong>Team DLithe </strong><br /><strong>M:900 881 5252</strong><br /><strong>info@dlithe.com</strong><br /><strong>www.dlithe.com</strong></p>";
    
		
		$mail->AltBody = '';
        

        try {
   $result = $mail->Send();
  // echo "Message has been sent successfully";
   echo "<script>
            alert('Course Registration Successfully Completed ');
            </script>";
            header("dashboard.php");
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    	if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
		}
}
	
	if($output == '')
	{
		//echo 'ok';
	}
	else
	{
		echo $output;
	}
           }
	
}
ob_flush();
?>