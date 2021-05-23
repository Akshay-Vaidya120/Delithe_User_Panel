<?php

session_start();

require_once("db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dlithe | Internship</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/dfavicon.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="assets_footer/css/animate.css">
       
   <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
        <link rel="stylesheet" href="assets_footer/css/media-queries.css"> 
</head>

<body>
    <div class="container-fluid" id="con1" style="padding-bottom:0px;width:100%;background-color:#f9f9f8">
        <style>
            #con1 {
                box-shadow: 5px 5px 5px grey;
            }  
            .container {
    margin: 200px auto
}

fieldset {
    display: none
}

fieldset.show {
    display: block
}

select:focus,
input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #2196F3 !important;
    outline-width: 0 !important;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.tabs {
    margin: 2px 5px 0px 5px;
    padding-bottom: 10px;
    cursor: pointer
}

.tabs:hover,
.tabs.active {
    border-bottom: 2px solid #2196F3
}

a:hover {
    text-decoration: none;
    color: #1565C0
}

.box {
    margin-bottom: 10px;
    border-radius: 5px;
    padding: 10px
}

.modal-backdrop {
    background-color: white;
}

.line {
    background-color: #CFD8DC;
    height: 1px;
    width: 100%
}

@media screen and (max-width: 768px) {
    .tabs h6 {
        font-size: 12px
    }
}

.footer-top { padding: 60px 0; background: black!important; text-align: left; color: #aaa; }
.footer-top h3 { padding-bottom: 10px; color: #fff; }

.footer-about img.logo-footer { max-width: 74px; margin-top: 0; margin-bottom: 18px; }
.footer-about p a { color: #aaa; border-bottom: 1px dashed #666; }
.footer-about p a:hover, .footer-about p a:focus { color: #fff; border-color: #aaa; }

.footer-contact p { word-wrap: break-word; }
.footer-contact i { padding-right: 10px; font-size: 18px; color: #666; }
.footer-contact p a { color: #aaa; border-bottom: 1px dashed #666; }
.footer-contact p a:hover, .footer-contact p a:focus { color: #fff; border-color: #aaa; }

.footer-social a { display: inline-block; margin-right: 20px; margin-bottom: 8px; color: #777; border: 0; }
.footer-social a:hover, .footer-social a:focus { color: #aaa; border: 0; }
.footer-social i { font-size: 24px; vertical-align: middle; }

.footer-bottom { padding: 15px 0; background: #444; text-align: left; color: #aaa; }

.footer-copyright p { margin: 0; padding: 0.5rem 0; }
.footer-copyright a { color: #fff; border: 0; }
.footer-copyright a:hover, .footer-copyright a:focus { color: #aaa; border: 0; }
input {
    width: 100%;
    display: block;
    border: none;
    border-bottom: 1px solid #999;
    padding: 6px 30px;
    font-family: Poppins;
    box-sizing: border-box;
}
.text-muted {
    color: black!important;
    font-weight: 700!important;
}
input, select, textarea {
    outline: none;
    appearance: unset !important;
    -moz-appearance: unset !important;
    -webkit-appearance: unset !important;
    -o-appearance: unset !important;
    -ms-appearance: unset !important;
}
        </style>

        <!--<div class="row">-->
            <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand"><img src="assets\images\logo.png"/ style="height: 60px;
    padding-top: 10px;"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
<style type="text/css">
 /*   .tab button.active {
  background-color: #ccc;
}*/
 tabs:hover, .tabs.active {
    border-bottom: 2px solid #2196F3!important;
    background-color: #337ab7!important;
    color: white!important;
    border-radius: 4px!important;
    color: #fff!important;
     border-color: #007bff!important;
    display: inline-block!important;
    font-weight: 400!important;
    text-align: center!important;
    white-space: nowrap!important;
    vertical-align: middle!important;
    -webkit-user-select: none!important;
    -moz-user-select: none!important;
    -ms-user-select: none!important;
    user-select: none!important;
    border: 1px solid transparent!important;
    padding: .375rem .75rem!important;
    font-size: 1rem!important;
    line-height: 1.5!important;
    border-radius: .25rem!important;
}

.tabs {
    border-bottom: 2px solid #2196F3!important;
    color: white!important;
    border-radius: 4px!important;
   color: black!important;
   width: 45%!important;
     border-color: #007bff!important;
    display: inline-block!important;
    font-weight: 400!important;
    text-align: center!important;
    white-space: nowrap!important;
    vertical-align: middle!important;
    -webkit-user-select: none!important;
    -moz-user-select: none!important;
    -ms-user-select: none!important;
    user-select: none!important;
    border: 1px solid transparent!important;
    padding: .375rem .75rem!important;
    font-size: 1rem!important;
    line-height: 1.5!important;
    border-radius: .25rem!important;
}
.text-muted {
    color: inherit!important;
    font-weight: 700!important;
}
 
</style>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="display:none;">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <a href="#" class="nav-item nav-link">Messages</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
        </div>
        <div class="navbar-nav ml-auto">
               <button type="button" data-toggle="modal" data-target="#myModal" style="background-color:#fff;height:46px;width:150px;border-radius:25px;border:3px solid maroon;font-weight:bold">Sign-in</button>
            <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
                        <div class="tabs" id="tab01">
                            <h5 class="text-muted">Student</h5>
                        </div>
                        <div class="tabs active" id="tab02">
                            <h5 class="font-weight-bold">Employer</h5>
                        </div>
                       
                    </div>
                    <div class="line"></div>
                    <div class="modal-body p-0">
                        <fieldset id="tab011">
                                                        <form style="margin-top:30px" method="post" action="checklogin1.php">

                                                       
                                 <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"  required/>
                            </div>
                                                        
                                                         <div class="button" style="text-align:center">
                                                       
                                                        <input type="submit" value="Sign-in" class="btn btn-primary" style="background-color:maroon;width:150px;margin-left:0px" name="btn-save">
                                                        <button type="button" class="btn btn-secondary" style="background-color:#fff;color:maroon;width:150px" data-dismiss="modal">Close</button><br><br>
                                                        </div> 
                                                        <div class="text" style="text-align:center">
                                                            
                                                        <p style="font-size:18px">New to Dlithe? <a href="signup.php" style="font-size:17px;color:maroon;text-decoration:underline">Sign-up</a></p>
                                                        </div>
                                                    </form>
                                                    <div class="text-center" style="text-align:center;font-weight:bold;">OR</div><br>
                                                    <div class="button" style="text-align:center">
                                                        <button class="btn btn-primary" style="height:60px;width:80%;">Google OAuth</button>
                                                    </div>
                                                    <br>
                        </fieldset>
                        <fieldset class="show" id="tab021">
                           <form style="margin-top:30px" method="post" action="checkemployer.php">

                                                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"  required/>
                            </div>
                                            <br>
                                                        <div class="button" style="text-align:center">
                                                        <input type="submit" value="Sign-in" style="background-color:maroon;width:150px;" class="btn btn-primary" name="btn-save">
                                                        <button type="button" class="btn btn-secondary" style="background-color:#fff;color:maroon;width:150px" data-dismiss="modal">Close</button><br>
                                                        </div>
                                                          <div class="p" style="text-align:center">
                                                            <p style="font-size:18px">New to Dlithe? <a href="signup.php" style="font-size:20px">Sign-up</a></h3>
                                                                </h4>
                                                        </div>
                                                        <div class="text-center" style="text-align:center;font-weight:bold;">OR</div><br>
                                                        <div class="button" style="text-align:center">
                                                            <button class="btn btn-primary" style="height:60px;width:80%;">Google OAuth</button>
                                                        </div>




                                                    </form>
                                                    <br>
                        </fieldset>
                       
                     
                    </div>
                    <div class="line"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



            </div>
        </div>
    
</nav>
  <!--  </div>-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid" style="margin-top:20px">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner wow fadeInUp">
                            <div class="carousel-item active" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b1.png" alt="First slide"> -->
                    <div class="row">

                        <div class="col" style="margin-left:3%;margin-top:10%;padding-bottom:10%;">

                            <h1 ><strong>Technology is driving our life!</strong></h1>
                            <h3>Surprised! Customer needs and priorities are changing in the disruptive world. <br>Explore how you can contribute to the transformation</h3><br>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="height:50px;width:150px;background-color:maroon;font-size:22px;border-radius:25px;border-color:maroon">Join Us</button>
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/1copy.png" style="height:550px;width:630px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b2.png" alt="Second slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:3%;margin-top:10%">
                            <h1><strong>Internship is about Implementation, results matter!</strong></h1>
                            <h3>Corporate looks for day one productivity. Your work can redefine your career opportunities</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="height:50px;width:150px;background-color:maroon;font-size:22px;border-radius:25px;border-color:maroon">Join Us</button>
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/2copy.png" style="height:550px;width:630px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:3%;margin-top:10%">
                            <h1><strong>The 4P’s - Passion, Pro active, Preparation, Practice can transform your career</strong></h1>
                            <h3>Small piece of work every day will result in a great work when you finish academics. You are no more novice then but a practitioner now!</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="height:50px;width:150px;background-color:maroon;font-size:22px;border-radius:25px;border-color:maroon">Join Us</button>
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/3copy.png" style="height:550px;width:630px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:3%;margin-top:10%">
                            <h1><strong>Internship on Cyber Security</strong></h1>
                            <h3>Do you know? Industry 5.0 connected devices will need to have high security standards! After all its our data being used..</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="height:50px;width:150px;background-color:maroon;font-size:22px;border-radius:25px;border-color:maroon">Join Us</button>
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/4copy.png" style="height:550px;width:630px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:5%;margin-top:10%">
                            <h1><strong>Internship on Blockchain</strong></h1>
                            <h3>Internal systems breach can damage business reputation and result into losses. Learn how preventive measures can stop such issues</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                        </div>

                        <div class="col" style="margin-top:3%;margin-left:5%">
                            <img src="assets/images/5copy.png" style="height:550px;width:570px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:5%;margin-top:10%">
                            <h1><strong>Internship on Machine Learning</strong></h1>
                            <h3>We are in Machine age, we will have robots as assistance. Do you want to build virtual bot’s, train systems?</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                        </div>

                        <div class="col" style="margin-top:3%;margin-left:5%">
                            <img src="assets/images/6copy.png" style="height:550px;width:570px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:5%;margin-top:10%">
                            <h1><strong>Internship on Internet of Things</strong></h1>
                            <h3>Connected devices will make our homes, cities smarter. Join the new age transformation to develop proof of concepts</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/7copy.png" style="height:550px;width:570px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:5%;margin-top:10%">
                            <h1><strong>Interested in Ideathon</strong></h1>
                            <h3>We help you to visualize and realize your dreams</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                        </div>

                        <div class="col" style="margin-top:3%;">
                            <img src="assets/images/8copy.png" style="height:550px;width:570px">
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-interval="1000">
                    <!-- <img class="d-block w-100" src="assets/images/b3.png" alt="Third slide"> -->

                    <div class="row">

                        <div class="col" style="margin-left:5%;margin-top:10%">
                            <h1><strong>The resource good with learning attitude can make a difference to execution</strong></h1>
                            <h3>Are you looking for good interns! You are at the right place</h3><br>
                            <!-- <button class="btn btn-primary" style="height:50px;width:150px">Join-Us!</button> -->
                        </div>

                        <div class="col" style="margin-top:3%;margin-left:5%">
                            <img src="assets/images/2copy.png" style="height:550px;width:570px">
                        </div>
                    </div>

                </div>
               
                    </div>
                    </div>
                    </div>


 

      <footer>
            <div class="footer-top">
                <div class="container" style="margin: auto;">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
                            <h3>Address</h3>
                            <p>
                              <p style="color:#fff">Address: No.3, 1st floor, 6th block, BSK 3rd stage, Kathriguppe Main Road, Bangalore-560085</p>
  </p>
                         
                        </div>
                        <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
                            <h3>Contact Us</h3>
                            <p style="display:none;"><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                            <p><i class="fas fa-phone"></i>+91-9008815252</p>
                            <p><i class="fas fa-envelope"></i> <a href="mailto:info@dlithe.com">info@dlithe.com</a></p>
                              <p><i class="fas fa-globe"></i> <a href="mailto:info@dlithe.com">info@dlithe.com</a></p>
                            <p style="display:none;"><i class="fab fa-skype"></i> Skype: you_online</p>
                        </div>
                        <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                            <h3>Follow us</h3>
                            <p>
                                <a href="#"><i class="fab fa-facebook"></i></a> 
                                <a href="#"><i class="fab fa-twitter"></i></a> 
                                <a href="#"><i class="fab fa-google-plus-g"></i></a> 
                                <a href="#"><i class="fab fa-instagram"></i></a> 
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </p> 
                       <!--          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.729575420368!2d77.54775941477011!3d12.92509449088639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fdfd6391453%3A0x4662827b839e02e8!2sDLithe%20Consultancy%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1612279598479!5m2!1sen!2sin" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                           -->
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
   <!--  <script src="assets_footer/js/jquery-3.2.1.min.js"></script>
        <script src="assets_footer/js/jquery-migrate-3.0.0.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
        <script src="assets_footer/js/jquery.backstretch.min.js"></script>
        <script src="assets_footer/js/wow.min.js"></script>
         <script src="assets_footer/js/scripts.js"></script>

 <script>
    $(document).ready(function(){

$(".tabs").click(function(){

$(".tabs").removeClass("active");
$(".tabs h6").removeClass("font-weight-bold");
$(".tabs h6").addClass("text-muted");
$(this).children("h6").removeClass("text-muted");
$(this).children("h6").addClass("font-weight-bold");
$(this).addClass("active");

current_fs = $(".active");

next_fs = $(this).attr('id');
next_fs = "#" + next_fs + "1";

$("fieldset").removeClass("show");
$(next_fs).addClass("show");

current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});

});
</script>
</body>

</html>