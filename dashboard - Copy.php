<?php

session_start();

require_once("db.php");
// $id = session_id();
// print("Session Id: ".$id);
 
?>
<!doctype html>
<html lang="en">

<head>
  <title>Dlithe | Dashboard</title>
  <link rel="shortcut icon" type="image/jpg" href="assets/dfavicon.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
  <!-- <div class="container-fluid" id="con1" style="padding-bottom:10px;width:100%;background-color:whitesmoke">
    <style>
      #con1 {
        box-shadow: 5px 5px 5px grey;
      }
    </style> -->

    <!-- <div class="row">
      <div class="col">
        <img src="assets/images/dlogo.png" style="height:60px;width:150px;margin-left:10px">
      </div>

      <div class="col-2" style="margin-top:15px">
       <button class="btn" style="background-color:maroon;width:120px;"><a href="logout.php" style="color:#fff;text-decoration:none">Sign-out</a></button>
      </div>
    </div>
  </div>
 -->


  <div class="sidebar" style="text-align:center;padding-top:10px">
  <!-- 
  // $name = $_SESSION['name'];
  // print_r($_SESSION);
  ?> -->
  <img src="assets/images/logo.png" style="height:60px;width:150px;margin-left:5px;margin-bottom:10px">
    <!-- <a class="active" href="#home">Dashboard</a>
    <a href="#jobs">Jobs</a>
    <a href="#profile">Profile</a>
    <a href="#about">About</a>
    <a href="logout.php" id="signout">Signout</a> -->
        <!--  <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" id="signout">Signout</a>
            </li>
      </ul>-->
      <div class="sidebar">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
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
        height: 1000px;
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
      
      <h3>Available Programmes</h3>
    
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
    </style>
    <div class="row">
      <div class="col" style="margin-top:10px">
        <div class="card" style="height:350px;width:250px;background-color:#4169e1">
          <div class="container">
            <h4 class="text-uppercase" style="color:#fff"><b>Python</b></h4>
            
            <div class="line">
              <style>
                .line {
                  background-color: #dcdcdc;
                  height: 4px;
                  width: 100%
                }
              </style>
            </div>
            <p style="margin-top:10px;color:#fff">Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation.</p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModalLong" style="margin-top:20%">
              Read More!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-long" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Python Programming</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation.
                    Python consistently ranks as one of the most popular programming languages.</p>
                    <h5><u>Highlights</u></h5>
                     <ul>
                     <li>100% coding</li>
                     <li>Proof of concept development</li>
                     <li>Git repository</li>
                     <li>Technical blog</li>
                     <li>Requirements, Design thinking</li>
                     <li>Testing concepts</li>
                     <li>Linkedin profile & branding</li>
                     <li>Placement assistance</li>
                     <!-- <li>Industry Certificates</li>
                     <li>Industry collabration</li>
                     <li>Online report submission</li>
                     <li>Online certificate download</li> -->

                     </ul>
                    <!-- <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <P style="margin-left:5px">Overview : </P>
                    </div><br> -->
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Agenda : </p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Start Date : 1<sup>st</sup>April-2021</p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:60px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Mode : 15 days online live sessions from the experts, followed by self offline working on use cases, proof of concept development.</p>
                    </div>
                    
                  </div>
                   <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <h3>Hurry Up !</h3>
                    <form method="POST" action="post.php">
                    <input type="submit" class="btn btn-primary" name="btn-apply" value="Apply Now!">
                    </form>
                    
                  </div> 
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="height:350px;width:250px;background-color:#2e8b57;margin-top:10px">
          <div class="container">

            <h4 class="text-uppercase" style="color:#fff"><b>IOT</b></h4>
            <div class="line">
              <style>
                .line {
                  background-color: #dcdcdc;
                  height: 4px;
                  width: 100%
                }
              </style>
            </div>
            <p style="margin-top:10px;color:#fff">The Internet of things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the Internet.</p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2Long">
              Read More!
            </button>

            <div class="modal fade" id="myModal2Long" tabindex="-1" role="dialog" aria-labelledby="myModal2LongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-long" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModal2LongTitle">Internet of Things(IOT)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>The Internet of things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the Internet.</p><br>
                    <h5><u>Highlights</u></h5>
                     <ul>
                     <li>100% coding</li>
                     <li>Proof of concept development</li>
                     <li>Git repository</li>
                     <li>Technical blog</li>
                     <li>Requirements, Design thinking</li>
                     <li>Testing concepts</li>
                     <li>Linkedin profile & branding</li>
                     <li>Placement assistance</li>
                     </ul>
                   
                     <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Agenda : </p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Start Date : 1<sup>st</sup>April-2021</p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:60px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Mode : 15 days online live sessions from the experts, followed by self offline working on use cases, proof of concept development.</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <h3>Hurry Up !</h3>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary">Apply Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="height:350px;width:250px;background-color:#4682b4;margin-top:10px">
          <div class="container">

            <h4 class="text-uppercase" style="color:#fff"><b>FLUTTER</b></h4>
            <div class="line">
              <style>
                .line {
                  background-color: #dcdcdc;
                  height: 4px;
                  width: 100%
                }
              </style>
            </div>
            <p style="margin-top:10px;color:#fff">Flutter is a free and open-source mobile UI framework created by Google and released in May 2017. In a few words, it allows you to create a native mobile application with only one codebase.</p>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal3Long" style="margin-top:20%">
              Read More!
            </button>

            <div class="modal fade" id="myModal3Long" tabindex="-1" role="dialog" aria-labelledby="myModal3LongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-long" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModal3LongTitle">Flutter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Flutter is a free and open-source mobile UI framework created by Google and released in May 2017. In a few words, it allows you to create a native mobile application with only one codebase.</p>
                    <h5><u>What is it in for me</u></h5>
                     <ul>
                     <!-- <li>Flutter is in action.. Build native IOS & Android apps with Flutter. Learn Flutter and Dart from the ground, step by step</li>
                     <li>Use features like Charts, Navigation Google maps, Device camera, Authentication and many more!</li> -->
                     <li>100% coding</li>
                     <li>Proof of concept development</li>
                     <li>Git repository</li>
                     <li>Technical blog</li>
                     <li>Requirements, Design thinking</li>
                     <li>Testing concepts</li>
                     <li>Linkedin profile & branding</li>
                     <li>Placement assistance</li>
                     </ul>
                     <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Agenda : </p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Start Date : 1<sup>st</sup>April-2021</p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:60px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Mode : 15 days online live sessions from the experts, followed by self offline working on use cases, proof of concept development.</p>
                    </div>
                  </div>
                  
                  <div class="modal-footer">
                   <h3>Hurry Up !</h3>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <form method="POST">
                    <input type="submit" class="btn btn-primary" name="btn-apply1" value="Apply Now!">
                    </form>
                                     </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="height:350px;width:250px;background-color:#b22222;margin-top:10px">
          <div class="container">

            <h4 class="text-uppercase" style="color:#fff"><b>WEB DEVELOPMENT</b></h4>
            <div class="line">
              <style>
                .line {
                  background-color: #dcdcdc;
                  height: 4px;
                  width: 100%
                }
              </style>
            </div>
            <p style="margin-top:10px;color:#fff">Web development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal4Long">
              Read More!
            </button>
            <div class="modal fade" id="myModal4Long" tabindex="-1" role="dialog" aria-labelledby="myModal4LongTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-long" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModal4LongTitle">Web Development</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Web development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.</p>
                    <h5><u>what is it in for me</u></h5>
                     <ul>
                     <li>100% coding</li>
                     <li>Proof of concept development</li>
                     <li>Git repository</li>
                     <li>Technical blog</li>
                     <li>Requirements, Design thinking</li>
                     <li>Testing concepts</li>
                     <li>Linkedin profile & branding</li>
                     <li>Placement assistance</li>
                     </ul>
                     <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Agenda : </p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:35px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Start Date : 1<sup>st</sup>April-2021</p>
                    </div><br>
                    <div class="jumbtron" style="background-color:#add8e6;height:60px;border-radius:5px;padding-top:5px">
                     <p style="margin-left:5px">Mode : 15 days online live sessions from the experts, followed by self offline working on use cases, proof of concept development.</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                  <h3>Hurry Up !</h3>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-success">Apply Now</button> -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#applyModalCenter">
                      Apply Now !
                    </button>
                    
                    <div class="modal" id="applyModalCenter" tabindex="-1" role="dialog" aria-labelledby="applyModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="submitModalLongTitle">Drop Your Assignments Here !</h5> -->
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- <h2>Thank you !!</h2> -->
                          <?php
                            
 
  
              
                          ?>
        <!-- <form method="post"> -->
        <!-- <div class="form-group"> -->
    <!-- <label for="exampleInputEmail" style="color:#fff;">Email address</label> -->
    <!-- <input type="email" class="form-control" aria-describedby="emailHelp" name="link" required placeholder="Drop Your Github/Google drive link">
    </div> -->


      <!-- </form> -->
      </div>
      <!-- <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Submit</button>
      </div> -->
    </div>
  </div>
</div>
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="line" id="divider"></div>
    <style>
        .line {
            background-color: #CFD8DC;
            height: 4px;
            width: 100%;
          
        }
        #divider{
          margin-top:30px;
        }
    </style> -->
    <div class="header" style="margin-top:20px;margin-left:5px">
      <h3>My Internships</h3>
    </div>
    <div class="container">
    
    </div>
  
</div>
<!--content-->
<!--jobs-->
  <!-- <div class="content" id="jobs">
    <div class="header" style="margin-top:20px;margin-left:5px">
      <h3>Jobs</h3>
    </div>
  </div> -->


<!--Content-->
<!--profile-->
<!-- <div class="content" id="profile">
    <div class="header" style="margin-top:20px;margin-left:5px">
      <h3>profile</h3>
    </div>
  </div> -->

<!--content-->
<!--about-->
<!-- <div class="content" id="about">
    <div class="header" style="margin-top:20px;margin-left:5px">
      <h3>About Us</h3>
    </div>
  </div> -->

</body>

</html>