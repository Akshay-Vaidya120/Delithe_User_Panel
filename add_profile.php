    
    <?php
    require_once("db.php");
             $ename = mysqli_real_escape_string($conn, $_POST['name']);
        $Address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $usn = mysqli_real_escape_string($conn, $_POST['usn']);
          $college = mysqli_real_escape_string($conn, $_POST['college']);
          $degree = mysqli_real_escape_string($conn, $_POST['degree']);
           $degreem = mysqli_real_escape_string($conn, $_POST['degreem']);

             $passout = mysqli_real_escape_string($conn, $_POST['passout']);
        $mdegree = mysqli_real_escape_string($conn, $_POST['mdegree']);
          $puc = mysqli_real_escape_string($conn, $_POST['puc']);
          $sslc = mysqli_real_escape_string($conn, $_POST['sslc']);
           $linkin = mysqli_real_escape_string($conn, $_POST['linkin']);
          $gitlink = mysqli_real_escape_string($conn, $_POST['gitlink']);
          $uid = mysqli_real_escape_string($conn, $_POST['uid']);



   $skill1 = mysqli_real_escape_string($conn, $_POST['skill1']);
          $skill2 = mysqli_real_escape_string($conn, $_POST['skill2']);
          $skill3 = mysqli_real_escape_string($conn, $_POST['skill3']);
           $skill4 = mysqli_real_escape_string($conn, $_POST['skill4']);
          $skill5 = mysqli_real_escape_string($conn, $_POST['skill5']);
          $skill6 = mysqli_real_escape_string($conn, $_POST['skill6']);
              $skill7 = mysqli_real_escape_string($conn, $_POST['skill7']);
          $skill8 = mysqli_real_escape_string($conn, $_POST['skill8']);

            $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
           

              $sql1 = "UPDATE user_profile_summary SET Name='$ename',Address='$Address',PHONE='$phone',Email='$email',USN='$usn',College='$college',
              Degree='$degree',Passout='$passout',master='$mdegree',degree_mark='$degreem',puc_marks='$puc',SSLC_marks='$sslc',linkedIn='$linkin',github='$gitlink',
                skill1='$skill1',skill2='$skill2',skill3='$skill3',skill4='$skill4',skill5='$skill5',skill6='$skill6',skill7='$skill7',skill8='$skill8' WHERE profile_id='$uid'";

if ($conn->query($sql1) === TRUE) {
                    $sql2 = "UPDATE user SET name='$ename',email='$email',phone='$phone',USN='$usn',college_name='$college' WHERE user_id='$user_id'";

if ($conn->query($sql2) === TRUE) {
       echo "<script>
  alert('Details Successfully Updated');
  window.location.href='myprofile.php';
  </script>";
  } else {
     echo "<script>
  alert('Error Please Try Again....');
  window.location.href='myprofile.php';
  </script>"; 
   
  }
  } else {
     echo "<script>
  alert('Error Please Try Again....');
  window.location.href='myprofile.php';
  </script>"; 
   
  }
    ?>

