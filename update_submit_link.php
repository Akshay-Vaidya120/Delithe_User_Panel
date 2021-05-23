<?php

session_start();

$user_id =  $_POST['user_id'];
require_once("db.php");
 if(!is_null($user_id))
 {
    if(isset( $_POST['program_id'])){
      $user_id =  $_POST['user_id'];
    $program_id = $_POST['program_id'];
    $link = $_POST['link'];
    
      $result =  mysqli_query($conn, "SELECT * FROM user_registered_program WHERE user_id='" . $user_id . "' AND program_id='" . $program_id . "' ");
     if (mysqli_num_rows($result) > 0) {
            
            $sql1 = "UPDATE user_registered_program SET assignment_submit_link='$link' WHERE program_id='$program_id' AND user_id='$user_id'";

  if ($conn->query($sql1) === TRUE) {
      header("Location:assignment_sub_confirmation.php?value=$user_id&p_id=$program_id");

       
  } else {
     echo "<script>
  alert('Error Please Try Again....');
  window.location.href='dashboard.php';
  </script>"; 
   
  }

    }else {
           echo "<script>
alert('You Are Not Registered to this course');
window.location.href='dashboard.php';
</script>";
  
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
