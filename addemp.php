    
    <?php
    require_once("db.php");
    if (isset($_POST['signup'])) {
         $ename = mysqli_real_escape_string($conn, $_POST['name']);
        $companyname = mysqli_real_escape_string($conn, $_POST['company']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
          $employee = mysqli_real_escape_string($conn, $_POST['employee']);

        // echo $name, $email, $phone, $password;
        $result =  mysqli_query($conn, "SELECT * FROM user WHERE email='" . $email . "'");
        if (mysqli_num_rows($result) > 0) {
        
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
            // $pass = md5($password);
             $sql = "INSERT into user (name,company, email, phone, password,type) VALUES('$ename','$companyname', '$email', '$phone','$password','$employee')";

            if ($conn->query($sql) === TRUE) {
               // $_SESSION['registeredSuccessfully'] = true;
                // echo "ok";
                //   header("Location:login.php");
                  echo "<script>
alert('Registration Successfully Completed');
window.location.href='internship.php';
</script>";
                   
            }
        }
    }
    else
    {
        echo "eror";
    }
    ?>

