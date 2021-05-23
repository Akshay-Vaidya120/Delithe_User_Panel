<?php

session_start();
// SELECT p.program_title,p.is_free,p.fees,u.name,u.email FROM `user_registered_program` ur,`program` p,`user` u WHERE ur.`program_id`=p.`pr_info_id` and ur.user_id=u.user_id
$user_id =  $_GET['user_id'];

$program_id = $_GET['program_id'];
require_once("db.php");
 if(!is_null($user_id))
 {
    if(isset( $_GET['program_id'])){
      $user_id =  $_GET['user_id'];
    $program_id = $_GET['program_id'];
    
      $result =  mysqli_query($conn, "SELECT * FROM user_registered_program WHERE user_id='" . $user_id . "' AND program_id='" . $program_id . "' ");
     if (mysqli_num_rows($result) > 0) {
            

            echo "<script>
alert('Course already registered for you');
window.location.href='dashboard.php';
</script>";
    }else {
        $sql = "INSERT INTO user_registered_program (user_id,program_id) VALUES('$user_id','$program_id')";
        if ($conn->query($sql) === TRUE) {
        // $_SESSION['registeredSuccessfully'] = true;
        
        // echo "<script> 
        // window.location.href='dashboard.php';
        // <script>";
        /*   echo "<script>
            alert('Course Registration Successfully Completed');
            </script>";
            header("dashboard.php");*/

            header("Location:course_reg_confirmation_mail.php?value=$user_id&p_id=$program_id");

        
    } 
  
   }

 
 }
  
 }
 else
 {
//   echo strlen($user_id);
header("Location: dashboard.php");
 }
   
// }
?>
