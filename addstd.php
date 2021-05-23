    
    <?php
    require_once("db.php");
    if (isset($_POST['signup'])) {
         $ename = mysqli_real_escape_string($conn, $_POST['name']);
        $collegename = mysqli_real_escape_string($conn, $_POST['collegename']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
          $usnno = mysqli_real_escape_string($conn, $_POST['usnno']);
          $employee = mysqli_real_escape_string($conn, $_POST['employee']);

        // echo $name, $email, $phone, $password;
        $result =  mysqli_query($conn, "SELECT * FROM user WHERE email='" . $email . "'");
        if (mysqli_num_rows($result) > 0) {
        echo $email;
   echo "<script>
alert('Entered Email ID Already Registered');
window.location.href='signup.php';
</script>";
        }
        elseif(strlen($_POST["phone"]) !=10){ 
            //  echo "<script>
        //alert('Enter 10 digit phone number');
        //</script>";
         //header("Location:signup.php");
             echo "<script>
alert('Please Enter 10 digit Phone Number');
window.location.href='signup.php';
</script>";
         
             # code...
         } else {

            // if(empty($name) || empty($email) || empty($phoneno) || empty($password))
            // {
            //   echo 'pls fill the fields';
            // }
            // else
            // {
            //  $last_id = mysqli_insert_id($conn);
            // $pass = md5($password);

        
             $sql = "INSERT into user (name,college_name, email, phone, password,type,USN) VALUES('$ename','$collegename', '$email', '$phone','$password','$employee',
              '$usnno')";

            if ($conn->query($sql) === TRUE) {
                $last_id = mysqli_insert_id($conn);

                      $sql1 = "INSERT into user_profile_summary (user_id ,Name, Email, PHONE,College,USN) VALUES('$last_id','$ename', '$email', '$phone','$collegename','$usnno' )";

            if ($conn->query($sql1) === TRUE) {

                 echo "<script>
alert('Registration Successfully Completed');
window.location.href='internship.php';
</script>";
                   
            }
            else
            {
                   echo "<script>
alert('Error Try Again!.....');
window.location.href='internship.php';
</script>";
            }
                   
            }
        }
    }
    else
    {
        echo "eror";
    }
    ?>

