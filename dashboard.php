<?php


$inactive = 10800;

//session_start(); 
  ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours
session_start();

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
    header("location: internship.php");
    exit();
  }



require_once("db.php");
//require_once("authadmin.php");
//include 'authadmin.php';
 
  if(empty($_SESSION['email']))
 {
 echo "<script>
 
window.location.href='internship.php';
</script>"; 
 }
 else
 {

 }

?>
<!doctype html>
<html lang="en">

<head>
  <title>Dlithe | Dashboard</title>
  <link rel="shortcut icon" type="image/jpg" href="assets/dfavicon.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
 <div class="sidebar" style="text-align:center;padding-top:10px">
  <img src="assets/images/logo.png" style="height:60px;width:150px;margin-left:5px;margin-bottom:10px">
  
      <div class="sidebar">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="myprofile.php">My Profile</a>
  <a href="#contact">Job Openings</a>
  <a href="logout.php">Logout</a>
</div>
    <style>
      #signout{
        color:maroon;
        font-weight:bold;
      }
     #signout:hover:not(.active){
      background-color:maroon;
      color:#fff;
     }

    </style>
    <style>
    body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
      .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color:#f9f9f8;
        position: fixed;
        height: 100%;
        overflow: auto;
      }

      /* Sidebar links */
      .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }

      /* Active/current link */
      .sidebar a.active {
        background-color: maroon;
        color: white;
      }

      /* Links on mouse-over */
      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
      div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: fit-content;
      }
      /* div.content1{
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
      } */

      /* On screens that are less than 700px wide, make the sidebar into a topbar */
      @media screen and (max-width: 700px) {
        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
        }

        .sidebar a {
          float: left;
        }

        div.content {
          margin-left: 0;
        }
        /* div.content1{
          margin-left: 0;
        } */
        
      }

      /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
      @media screen and (max-width: 400px) {
        .sidebar a {
          text-align: center;
          float: none;
        }
      }
    </style> 
  </div>
</div>

  <!-- Page content -->
      <div class="content" id="home">

  <div class="container-fluid" style="text-align:right;height:50px;background-color:#f9f9f8;padding-top:10px">
     <p>Welcome : <?php echo $_SESSION['email'] ?></p></div>
    <div class="header" style="margin-top:20px;margin-left:5px">
      
      <h3>Upcoming Programmes</h3>
    
    </div>
    
    <style>
      .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
        transition: 0.3s;
      }

      /* On mouse-over, add a deeper shadow */
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
      }

      /* Add some padding inside the card container */
      .container {
        padding: 2px 16px;
      }
      .btn-secondary {
    
    display: flex;
    position: absolute;
    right: 0;
    bottom: 15px;
    left: 5px;
}
    </style>
      <style>
                .line {
                  background-color: #dcdcdc;
                  height: 4px;
                  width: 100%
                }
              </style>
    <div class="row">
  <?php
        
 
        $query=mysqli_query($conn,"select * from `program`");
        while($row=mysqli_fetch_array($query)){
          ?>
            <div class="col">
      
        <div class="card" style="height:350px;width:250px;background-color:<?php echo $row['info_background_color']; ?>;margin-top:10px">
          <div class="container">
                <h4 class="text-uppercase" style="color:#fff"><b><?php echo htmlspecialchars($row['program_title']); ?></b></h4>
            <div class="line">
            
            </div>
            <p style="margin-top:10px;color:#fff"><?php echo $row['program_info']; ?>.</p>
              <a href="#edit<?php echo $row['pr_info_id']; ?>" data-toggle="modal" class="btn btn-secondary" style="width: fit-content;background-color:<?php echo $row['button_background']; ?>"> Read More!</a>
          
            <!-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal4Long" style="background-color:<?php echo $row['button_background']; ?>">
              Read More!
            </button>-->
                 <div class="modal fade"id="edit<?php echo $row['pr_info_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-long" role="document">
                  
                     <?php
        
 
        $query1=mysqli_query($conn,"select * from `program` where pr_info_id='".$row['pr_info_id']."'");
        while($row1=mysqli_fetch_array($query1)){
          ?>
         
                          <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"><?php echo htmlspecialchars($row['program_title']); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><?php echo htmlspecialchars($row['program_description']); ?></p>
                    <h5><u>Highlights</u></h5>
                     <ul>
                         <?php
        
 
        $query2=mysqli_query($conn,"select * from `highlights_program_map` where program_id='".$row['pr_info_id']."'");
        while($row2=mysqli_fetch_array($query2)){
          ?>
           <li><?php echo htmlspecialchars($row2['highlight_info']); ?></li>
          <?php
        }
 
      ?>
                     
                     </ul>
                    <!-- <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <P style="margin-left:5px">Overview : </P>
                    </div><br>
                         <div class="jumbtron" style="background-color:#add8e6;height:fit-content;border-radius:5px;padding-top:5px">
                  
                     -->
                      <h5><u>Agenda : </u></h5>
                     <ul>
                         <?php
        
 
        $query3=mysqli_query($conn,"select * from `agenda_program_map` where program_id='".$row['pr_info_id']."'");
        while($row3=mysqli_fetch_array($query3)){
          ?>
           <li><?php echo htmlspecialchars($row3['agenda_info']); ?></li>
          <?php
        }
 
      ?>
                     
                     </ul>
                    <br>
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px;margin-top: -25px;">
                     <p style="margin-left:5px">Start Date : <?php echo date('d-F-Y',strtotime(($row['Start Date'])));?></p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:fit-content;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Mode : <?php echo htmlspecialchars($row['Mode']); ?></p>
                    </div>
                    
                  </div>
                   <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                     <h3>Hurry Up !</h3>
                    <?php echo "<a  class='btn btn-primary' href='course_reg_add.php?program_id=".urlencode($row['pr_info_id'])."&user_id=".urlencode($_SESSION['user_id'])."'> Apply Now! </a>"?>;
                  <!--  <form method="POST" action="course_reg_add.php">
                    <input type="hidden" id="program_id" name="program_id" value="<?php// echo $row['pr_info_id']; ?>">
                    <input type="submit" class="btn btn-primary" name="btn-apply" value="Apply Now!">-->
                    </form>
                    
                  </div> 
                </div>
         
          <?php
        }
 
      ?>
              </div>
            </div>
            
          </div>
        </div> 
      </div>
          <?php
        }
 
      ?>
      </div>

      <br>
      <br>
      <div>
        <div class="" style="margin-top:0px;margin-left:5px">
      
      <h3>Upcoming Programmes</h3>
    
    </div>
<div style="overflow-x:auto;">
  <table class="table table-striped table-bordered table-hover">
      <thead style="background-color: maroon;color:white;">
      
        <th>Program</th>
        <th>Start Date</th>
        <th>Link</th>
        <th>Upload Assignment</th>
        <th>My Submission</th>
        <th>Certificate</th>
      </thead>
      <!-- 
    <a href="#edit<?php echo $row['pr_info_id']; ?>" data-toggle="modal" class="btn btn-secondary" style="width: fit-content;background-color:<?php echo $row['button_background']; ?>"> Read More!</a>
          
      -->
      <tbody style="background-color: #dcdcdc;color:black;">
      <?php
        
 
        $query5=mysqli_query($conn,"SELECT * FROM `user_registered_program` up,`user` U,`program` p WHERE up.user_id=U.user_id and p.pr_info_id=up.program_id and up.user_id='$_SESSION[user_id]'");
        while($row5=mysqli_fetch_array($query5)){
          ?>
          <tr>
            
            <td><?php echo $row5['program_title']; ?></td>
            <td><?php echo $row5['Start Date']; ?></td>
            <td><?php if($row5['link_active']=="Y"){echo $row5['link']; }?> </td>

            <td><button type="button" class="btn btn-success" data-toggle="modal"  data-target="#submitModalCenter<?php echo $row5['program_id'];?>">
          Upload
        </button></td>
       <div class="modal fade" id="submitModalCenter<?php  echo $row5['program_id'];?>" tabindex="-1" role="dialog" aria-labelledby="submitModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submitModalLongTitle">Drop Your Assignments Here !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="update_submit_link.php">
        <div class="form-group">
    <!-- <label for="exampleInputEmail" style="color:#fff;">Email address</label> -->

    
    <input type="text" class="form-control" aria-describedby="emailHelp" name="user_id" required value="<?php echo $_SESSION['user_id'];?>">  
      <input type="text" class="form-control" aria-describedby="emailHelp" name="program_id" required value="<?php echo $row5['pr_info_id'];?>">      
      
    <input type="text" class="form-control" aria-describedby="emailHelp" name="link" required placeholder="Drop Your Github/Google drive link">
    </div>


      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
         <input type="submit" class="btn btn-primary" name="btn-apply" value="Submit">
               
      </div>
         </form>
   
    </div>
  </div>
</div>
            <td><?php echo $row5['assignment_submit_link']; ?></td>
           <td><?php if($row5['certificate_issued']=="Y"){echo '<a href="#"  class="btn btn-info">Download</a>';}?> </td>
           
               </tr>
          <?php
        }
 
      ?>
      </tbody>
    </table>  
    </div> 
    </div>

 
</div>
 

</body>

</html>