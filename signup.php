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
   <link rel="stylesheet" href="assets_footer/fonts/material-icon/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="assets_footer/css/animate.css">
           <link rel="stylesheet" href="assets_footer/css/style1.css">
      
        <link rel="stylesheet" href="assets_footer/css/media-queries.css"> 
</head>

<body>
    <div class="container-fluid" id="con1" style="padding-bottom:0px;width:100%;background-color:#f9f9f8">
        <style>
        @font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}
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
    border-bottom: 1px solid #2196F3
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
        </style>

        <!--<div class="row">-->
            <div class="container-fluid" id="con1" style="margin-top:10px;padding-bottom:10px;width:100%;text-align:center;padding-right: 0px">
     <img src="assets\images\logo.png"/ style="height: 50px;
    padding-top: 10px; float:left;">   <h2 style="font-weight:bold">Welcome to DLithe!</h2>
        <style>
            #con1 {
                box-shadow: 5px 5px 5px grey;
                padding-right: 0px!important;
            }
        </style>
    </div>

            <nav class="navbar navbar-expand-md navbar-light bg-light" style="display:none;">
    <a href="#" class="navbar-brand"><img src="assets\images\logo.png"/ style="height: 60px;
    padding-top: 10px;"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="display:none;">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <a href="#" class="nav-item nav-link">Messages</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
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

     <section class="signup">
            <div class="container1">
                <div class="signup-content">
                    <div class="signup-form">
                      <div class="row d-flex justify-content-between" style="    margin: 7px;">
                       <div class="tabs" id="tab01">
                            <h6 class="text-muted">Student</h6>
                        </div>
                        <div class="tabs active" id="tab02">
                            <h6 class="font-weight-bold">Employer</h6>
                        </div>
                        </div>
                   
                        
                          <fieldset id="tab021"  class="show">
                               <h4 class=""><b>Are You an Employer ?</b></h4>
                        <form method="POST" class="register-form" id="register-form" action="addemp.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                              <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="number" name="phone" id="phone" placeholder="Phone Number" required/>
                            </div>
                                <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="company" id="company" placeholder="Company " required/>
                               <input type="hidden" name="employee" id="employee" value="employee" required/>
                       
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>

                            </div>
                        </form>
                        </fieldset>
                         <fieldset id="tab011">
                                    <h4 class=""><b>Are You a Student ?</b></h4>
                     
                        <form method="POST" class="register-form" id="register-form"  action="addstd.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                                      <input type="hidden" name="employee" id="employee" value="student" required/>
                       
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" required/>
                            </div>
                               <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="collegename" id="collegename" placeholder="College Name" required/>
                            </div>
                               <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="usnno" id="usnno" placeholder="USN No." required/>
                            </div>
                            <div class="form-group">
                                
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        </fieldset>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/signup-image.jpg" alt="sing up image"></figure>
                        <a href="internship.php" class="signup-image-link"><h5 style="color:blue;">I am already member</h5></a>
                    </div>
                </div>
            </div>
        </section>
 

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