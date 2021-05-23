<?php
if(isset($_SESSION['email']))
{
$inactive = 3600;

//session_start(); 
	ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours


if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // 
	//Start session
	// session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	
	if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])) {
		header("location: ../login_failed.php");
		exit();
	}
}
// server should keep session data for AT LEAST 24 hour
	
if (!isset($_SESSION)) {



}


?>