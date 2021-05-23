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
// require_once("authadmin.php");
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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
 <div class="sidebar" style="text-align:center;padding-top:10px">
  <img src="assets/images/logo.png" style="height:60px;width:150px;margin-left:5px;margin-bottom:10px">
  
      <div class="sidebar">
  <a  href="dashboard.php">Dashboard</a>
  <a class="active" href="myprofile.php">My Profile</a>
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
    .content-wrapper {
    min-height: calc(100vh - 101px);
    background-color: #ecf0f5;
    z-index: 800;
}
    body {
       background-color: #ecf0f5;
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
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

<style type="text/css">
  .box.box-primary {
    border-top-color: #3c8dbc;
    font-family: 'Source Sans Pro',sans-serif;
}

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
} 
</style>
  <!-- Page content -->
      <div class="content" id="home">

  <div class="container-fluid" style="text-align:right;height:50px;background-color:#f9f9f8;padding-top:10px">
     <p>Welcome : <?php echo $_SESSION['email'] ?></p></div>
    <div class="header" style="margin-top:20px;margin-left:5px">
      
      <h4>My Profile</h4>
    
    </div>
      <form method="POST" action="add_profile.php">
    <?php $query5=mysqli_query($conn,"SELECT * FROM `user_profile_summary` where  user_id='$_SESSION[user_id]'");
        while($row5=mysqli_fetch_array($query5)){
          ?>
        
           <div class="box box-primary">
                  <div class="box-header with-border">
                    <h5 class="box-title">Personal Information</h5>
                  </div>
                  <div class="box-body">
                    <div class="row showRenewalDates">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Full Name *</label>
                                       <input type="hidden" class="form-control" aria-describedby="emailHelp" name="user_id" required value="<?php echo $row5['user_id']; ?>">  
   
                                  <input type="hidden" class="form-control" aria-describedby="emailHelp" name="uid" required value="<?php echo $row5['profile_id']; ?>">  
   
                                <input type="text" class="form-control" name="name" placeholder="Full Name" value="<?php echo $row5['Name']; ?>" required>
                              </div>
                          </div>
                           
                              <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Contact Address *</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $row5['Address']; ?>" required>
                                  </div>
                              </div>
                          
                           <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Contact Number *</label>
                                <input type="number" class="form-control" name="phone" placeholder="Contact Number" value="<?php echo $row5['PHONE']; ?>"  required>
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Contact Email ID *</label>
                                <input type="email" class="form-control" name="email" placeholder="Email ID" value="<?php echo $row5['Email']; ?>"   required>
                                  </div>
                              </div>
                      </div>
                    
                  </div>
              </div>

     <div class="box box-primary">
                  <div class="box-header with-border">
                    <h5 class="box-title">Academic Information</h5>
                  </div>
                  <div class="box-body">
                    <div class="row showRenewalDates">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">USN *</label>
                                <input type="text" class="form-control" name="usn" placeholder="USN" value="<?php echo $row5['USN']; ?>" required>
                              </div>
                          </div>
                           
                              <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">College Name</label>
                                <input type="text" class="form-control" name="college" placeholder="college" value="<?php echo $row5['College']; ?>" required>
                                  </div>
                              </div>
                          
                           <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Degree *</label>
                                <input type="text" class="form-control" name="degree" placeholder="Degree" value="<?php echo $row5['Degree']; ?>" required>
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Year of Passout *</label>
                                <input type="text" class="form-control" name="passout" placeholder="Passout" value="<?php echo $row5['Passout']; ?>" required>
                                  </div>
                              </div> 

                             <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Master Degree Marks in % </label>
                                <input type="text" class="form-control" name="mdegree" placeholder="MASTER DEGREE %"  value="<?php echo $row5['master']; ?>" required>
                                  </div>
                              </div>   
                           
                              <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Degree Marks in % *</label>
                                <input type="text" class="form-control" name="degreem" placeholder="Degree %"  value="<?php echo $row5['degree_mark']; ?>" required>
                                  </div>
                              </div>
                          
                           <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">PUC Marks in % *</label>
                                <input type="text" class="form-control" name="puc" placeholder="PUC %" value="<?php echo $row5['puc_marks']; ?>" required>
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">SSLC Marks in % *</label>
                                <input type="text" class="form-control" name="sslc" placeholder="SSLC %" value="<?php echo $row5['SSLC_marks']; ?>" required>
                                  </div>
                              </div>
                      </div>
                    
                  </div>
              </div>
                  <div class="box box-primary">
                  <div class="box-header with-border">
                    <h5 class="box-title">Technical Information</h5>
                  </div>
                  <div class="box-body">
                    <div class="row showRenewalDates">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Skill 01</label>
                                <input type="text" class="form-control" name="skill1" placeholder="" value="<?php echo $row5['skill1']; ?>" required>
                              </div>
                          </div>
                           
                              <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 02</label>
                                <input type="text" class="form-control" name="skill2" placeholder="" value="<?php echo $row5['skill2']; ?>" required>
                                  </div>
                              </div>
                          
                           <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 03</label>
                                <input type="text" class="form-control" name="skill3" placeholder="" value="<?php echo $row5['skill3']; ?>" required>
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 04</label>
                                <input type="text" class="form-control" name="skill4" placeholder="" value="<?php echo $row5['skill4']; ?>" required>
                                  </div>
                              </div> 

                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Skill 05</label>
                                <input type="text" class="form-control" name="skill5" placeholder="" value="<?php echo $row5['skill5']; ?>" required>
                              </div>
                          </div>
                           
                              <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 06</label>
                                <input type="text" class="form-control" name="skill6" placeholder="" value="<?php echo $row5['skill6']; ?>" required>
                                  </div>
                              </div>
                          
                           <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 07</label>
                                <input type="text" class="form-control" name="skill7" placeholder="" value="<?php echo $row5['skill7']; ?>" required>
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Skill 08</label>
                                <input type="text" class="form-control" name="skill8" placeholder="" value="<?php echo $row5['skill8']; ?>" required>
                                  </div>
                              </div> 

                           
                      </div>
                    
                  </div>
              </div>
                  <div class="box box-primary">
                  <div class="box-header with-border">
                    <h5 class="box-title">other Information</h5>
                  </div>
                  <div class="box-body">
                    <div class="row showRenewalDates">
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">LinkedIn Link *</label>
                                <input type="text" class="form-control" name="linkin" value="<?php echo $row5['linkedIn']; ?>" required placeholder="Please Enter Your LinkedIn Account Information">
                              </div>
                          </div>
                           
                              <div class="col-md-4">
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Github Link *</label>
                                <input type="text" class="form-control" name="gitlink"  value="<?php echo $row5['github']; ?>" required placeholder="Please Enter Your Github Account Information" required>
                                  </div>
                              </div>
                          
                      </div>
                    
                  </div>
              </div>
                    <div class="box box-primary">
                  <div class="box-header with-border">
                    <h5 class="box-title">Upload Resume</h5>
                  </div>
                  <div class="box-body">
                    <div class="row showRenewalDates">
                          <div class="col-md-3">
                              <div class="form-group">

     
                                <label for="exampleInputEmail1">Please Upload Your Resume *</label>
                                    <td><?php if(empty($row5['resume'])){
                                     ?>
                                               <button type="button" class="btn btn-success" data-toggle="modal"  data-target="#imageModal">
          Upload Resume
        </button>
                                     <?php
                                      }
                                      else
                                        {
                                        ?>
                                         <button type="button" class="btn btn-success" data-toggle="modal"  data-target="#view_resume">
          View Resume
        </button>
                                        <?php  }?> </td>
                   
       
   
                              </div>
                          </div>
                           
                              <div class="col-md-9">
                                  <div class="form-group"  style="text-align-last: right;">

                                      <input type="submit" style="margin-top:30px" class="btn btn-warning btn-flat button_align" name="submit"  title="Click on this button to See Bill Details ">
                                      
                                
                                  </div>
                              </div>
                          
                      </div>
                    
                </div>
                  </div>
                  </form>  
              </div>
          <?php 
        }
        ?>
    
  </div>
  </style>
  </style>
  </div>
 

</body>
      <div class="modal fade" id="view_resume" tabindex="-1" role="dialog" aria-labelledby="imageModal" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submitModalLongTitle">My Resume.. !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
   <div id="image_data">

   </div>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
         </form>
   
    </div>
  </div>
</div>
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select document");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['pdf','docx','PDF','DOCX']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
       fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
       location.href = "myprofile.php"
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
   fetch_data();
  var profile_id = $(this).attr("id");
  console.log(profile_id);
  
  var action = "delete";

  if(confirm("Are you sure you want to this Document?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{profile_id:profile_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
     location.href = "myprofile.php"
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>

      <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModal" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submitModalLongTitle">My Resume.. !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    
    <input type="hidden" class="form-control" aria-describedby="emailHelp" id="user_id" name="user_id" required value="<?php echo $_SESSION['user_id'];?>">  
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
         </form>
   
    </div>
  </div>
</div>

</html>
