<?php
//action.php
session_start();
if(isset($_POST["action"]))
{

 // $_SESSION['user_id']
 $connect = mysqli_connect("localhost", "root", "", "dlithe");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM user_profile_summary";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
      <th width="70%">Resume</th>
     
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["resume"].'</td>
       <td style="display:none;">'.$row["profile_id"].'</td>
      <td style="display:none;"><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["profile_id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["resume"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  //$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

   $user_id =  $_POST['user_id'];
  $folder_dir = "uploads/";

  $base = basename($_FILES['image']['name']); // mydocs/images/myprofile.jpg -> myprofile.jpg

  $imageFileType = pathinfo($base, PATHINFO_EXTENSION); // .png .jpg

  $file = "";

  if(file_exists($_FILES['image']['tmp_name'])) {
    if($imageFileType == 'pdf' || $imageFileType == 'docx') {
      if($_FILES['image']['size'] < 5000000) {
          
        $file = uniqid() . "." . $imageFileType;  

        $filename = $folder_dir . $file;  

        move_uploaded_file($_FILES['image']['tmp_name'], $filename);
            $sql1 = "UPDATE user_profile_summary SET resume='$filename' WHERE user_id='$user_id'";

  if ($connect->query($sql1) === TRUE) {
      echo 'Resume Uploaded';
  }
  else   
  {
   echo 'Error Please Try Again';
  }
      } else {
         echo 'Wrong Size. Max Size Allowed: 5MB';
         
      }
    } else {
       echo 'Wrong Format. Only pdf or docx allowed.';
     
    }
  }

 
 }
 if($_POST["action"] == "update")
 {
  /*$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE tbl_images SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Updated into Database';
  }*/

    //$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

   $user_id =  $_POST['user_id'];
  $folder_dir = "uploads/";

  $base = basename($_FILES['image']['name']); // mydocs/images/myprofile.jpg -> myprofile.jpg

  $imageFileType = pathinfo($base, PATHINFO_EXTENSION); // .png .jpg

  $file = "";

  if(file_exists($_FILES['image']['tmp_name'])) {
    if($imageFileType == 'pdf' || $imageFileType == 'docx') {
      if($_FILES['image']['size'] < 5000000) {
          
        $file = uniqid() . "." . $imageFileType;  

        $filename = $folder_dir . $file;  

        move_uploaded_file($_FILES['image']['tmp_name'], $filename);
            $sql1 = "UPDATE user_profile_summary SET resume='$filename' WHERE user_id='$_SESSION[user_id]'";

  if ($connect->query($sql1) === TRUE) {
      echo 'Resume Uploaded';
  }
  else   
  {
   echo 'Error Please Try Again';
  }
      } else {
         echo 'Wrong Size. Max Size Allowed: 5MB';
         
      }
    } else {
       echo 'Wrong Format. Only pdf or docx allowed.';
     
    }
  }
 }
 if($_POST["action"] == "delete")
 {

   unlink($_POST["profile_id"]);

         $sql1 = "UPDATE user_profile_summary SET resume=null WHERE user_id='$_SESSION[user_id]'";

  if ($connect->query($sql1) === TRUE) {
      echo 'Document Deleted';
  }
  else   
  {
   echo 'Error Please Try Again';
  }
  
 }
}
?>