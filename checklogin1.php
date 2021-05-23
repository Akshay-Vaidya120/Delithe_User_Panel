<?php

session_start();

require_once("db.php");


if(isset($_POST['btn-save'])) {

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
    //   echo $email;
    if(empty($email) || empty($password))
        {
            echo 'pls fill the fields';
        }
        else
        {
            $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
            // echo $email, $password;
			 $result = $conn->query($sql);
             
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
               
                $email = $_POST['email'];
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row['user_id'];
               
                // $user_id = $_REQUEST['user_id'];
            // $sql1 = "SELECT * from programs WHERE user_id='$_SESSION[email]'";
            // $result1 = $conn->query($sql);
            // if($result->num_rows > 0) {
            //     $row = $result1->fetch_assoc();

            //     $_SESSION['email'] = $row['user_id'];
            //     $_SESSION['program_id'] = $row['program_id'];
            //     $_SESSION['program_name'] = $row['program_name'];
            //     $_SESSION['start'] = $row['start'];
            //     $_SESSION['end'] = $row['end'];
            header("Location:dashboard.php");
            }
        
            else{

                echo "<script>
                        window.alert('Invalid Credentials');
                        </script>";
                // echo "invalid credentials";
                // header("Location:error.php");
            }
        }
    }
