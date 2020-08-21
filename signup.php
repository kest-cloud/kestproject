<?php
session_start();

include('db.php');


date_default_timezone_set("Africa/Lagos");

$report = "";
if(isset($_POST['email']) && isset($_POST['reemail'])) 
{
    $email =  $_POST['email'];
    $reemail = $_POST['reemail'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $indiname = $_POST['indiname'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    if(isset($_POST['know']))
    {
        $knowyor = $_POST['know'];
    }else{$knowyor='';}
    if(isset($_POST['sex']))
    {
        $sex = $_POST['sex'];
    }else{$sex = '';}
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $natcountry = $_POST['natcountry'];
    if(isset($_POST['eyes']))
    {
        $eyes = 'Yes';
    }else{$eyes="";}

    if(isset($_POST['agree']))
    {
        $accept = 'Yes';
    }else{$eyes="";}

    if(isset($_POST['agree']))
    {
    $agree = 'Yes';
    }else{$agree = '';}
    if(isset($_POST['vow']))
    {
        $vow = 'Yes';
    }else{$vow = '';}


    global $db_handle;

    if($email != $reemail)
    {$report="<h6>Email does not match</h6>";}
    else if($password != $repassword)
    {$report .="<h6>Password does not match</h6>";}
    else if($password != $repassword)
    {$report .="<h6>Password does not match</h6>";}
    else if(!isset($_POST['know']))
    {$report .="<h6>You didnt tell us if you have indepth Yoruba knowledge</h6>";}
    else
    {
        $query = $db_handle->prepare("SELECT `username` FROM `user` WHERE `username` = ?");
        $query->bindparam(1,$email);
        $query->execute();
        $count = $query->rowCount();

        if($count > 0)
        {
            $report = 'Failed! email already exist.';
        }
        else
        {
            $dob = $year.'-'.$month.'-'.$day;
            $pos = "user";
            $query = $db_handle->prepare("INSERT INTO `user` (`username`,`password`,`fname`,`street`,`city`,`position`,`country`,`gender`,`birthday`,`nationality`,`eyesprob`,`depthknow`,`terms`,`confirm`,`willing`,`phone`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $query->bindparam(1,$email);
            $query->bindparam(2,md5($password));
            $query->bindparam(3,$indiname);
            $query->bindparam(4,$street);
            $query->bindparam(5,$city);
            $query->bindparam(6,$pos);
            $query->bindparam(7,$country);
            $query->bindparam(8,$sex);
            $query->bindparam(9,$dob);
            $query->bindparam(10,$natcountry);
            $query->bindparam(11,$eyes);
            $query->bindparam(12,$knowyor);
            $query->bindparam(13,$accept);
            $query->bindparam(14,$agree);
            $query->bindparam(15,$vow);
            $query->bindparam(16,$phone);
            $query->execute();
            if($query)
            {
                $report ='Sucessfully created the accouunt';
                $_SESSION['user'] = $indiname;
                if($pos == 'user')
                {
                ?>
                <script type="text/javascript">
                    window.location = "user.php";
                </script>

                <?php
                }
                else
                {
                    ?>
                        <script type="text/javascript">
                    window.location = "admin.php";
                </script>
                    <?php
                }

            }
            else
            {
                $report = 'Failed! Please retry creating account.';
            }
            
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <title>Sign Up</title    >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">
    
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
        
   </head>
   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">

  <div class="site-section testimonial-wrap custom-owl-carousel" id="testimonials-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
          <div class="col-lg-6 mb-5 text-center">
            <h2 class="section-title w-100 mx-auto">Sign Up</h2>
            <p>Volunteers who want to serve as operators should register. take note of the asteriks * fields on the
            form they are compulsory fields that you must fill.</p>
          </div>
        </div>

        <form action="signup.php" method="POST" class="register">
                <h1>Registration: </h1><?php echo $report;?>
                <fieldset class="row1">
                    <legend>Account Details
                    </legend>
                    <p>
                        <label>Email *
                        </label>
                        <input type="text" name="email" required />
                        <label>Repeat email *
                        </label>
                        <input type="text" name="reemail" required/>
                    </p>
                    <p>
                        <label>Password*
                        </label>
                        <input type="password" name="password" required />
                        <label>Repeat Password*
                        </label>
                        <input type="password" name="repassword" required />
                        <label class="obinfo">* obligatory fields
                        </label>
                    </p>
                </fieldset>
                <fieldset class="row2">
                    <legend>Personal Details
                    </legend>
                    <p>
                        <label>Name *
                        </label>
                        <input type="text" class="long" name="indiname"  required />
                    </p>
                    <p>
                        <label>Phone *
                        </label>
                        <input type="text" maxlength="10"  name="phone"  required />
                    </p>
                    <p>
                        <label class="optional">Street
                        </label>
                        <input type="text" class="long" name="street" />
                    </p>
                    <p>
                        <label>City *
                        </label>
                        <input type="text" class="long" name="city"  required/>
                    </p>
                    <p>
                        <label>Country *
                        </label>
                        <select  name="country"  required>
                            <option>
                            </option>
                            <option value="1">Nigeria
                            </option>
                        </select>
                    </p>
                    <p>
                        <label>Do you have in-depth knowlege of yourba lang? *</label>
                        <input type="radio" value="yes"  name="know"  />
                        <label class="gender">Yes</label>
                       <input type="radio" value="no" name="know" />
                       <label class="gender">No</label>
                        </p>
                    
                </fieldset>
                <fieldset class="row3">
                    <legend>Further Information
                    </legend>
                    <p>
                        <label>Gender *</label>
                        <input type="radio" value="male" name="sex" />
                        <label class="gender">Male</label>
                        <input type="radio" value="female" name="sex" />
                        <label class="gender">Female</label>
                    </p>
                    
                    <p>
                        <label>Birthdate *
                        </label>
                        <select class="date"  name="day"  required>
                            <option value="1">01
                            </option>
                            <option value="2">02
                            </option>
                            <option value="3">03
                            </option>
                            <option value="4">04
                            </option>
                            <option value="5">05
                            </option>
                            <option value="6">06
                            </option>
                            <option value="7">07
                            </option>
                            <option value="8">08
                            </option>
                            <option value="9">09
                            </option>
                            <option value="10">10
                            </option>
                            <option value="11">11
                            </option>
                            <option value="12">12
                            </option>
                            <option value="13">13
                            </option>
                            <option value="14">14
                            </option>
                            <option value="15">15
                            </option>
                            <option value="16">16
                            </option>
                            <option value="17">17
                            </option>
                            <option value="18">18
                            </option>
                            <option value="19">19
                            </option>
                            <option value="20">20
                            </option>
                            <option value="21">21
                            </option>
                            <option value="22">22
                            </option>
                            <option value="23">23
                            </option>
                            <option value="24">24
                            </option>
                            <option value="25">25
                            </option>
                            <option value="26">26
                            </option>
                            <option value="27">27
                            </option>
                            <option value="28">28
                            </option>
                            <option value="29">29
                            </option>
                            <option value="30">30
                            </option>
                            <option value="31">31
                            </option>
                        </select>
                        <select  name="month"  required>
                            <option value="1">January
                            </option>
                            <option value="2">February
                            </option>
                            <option value="3">March
                            </option>
                            <option value="4">April
                            </option>
                            <option value="5">May
                            </option>
                            <option value="6">June
                            </option>
                            <option value="7">July
                            </option>
                            <option value="8">August
                            </option>
                            <option value="9">September
                            </option>
                            <option value="10">October
                            </option>
                            <option value="11">November
                            </option>
                            <option value="12">December
                            </option>
                        </select>
                        <input class="year" type="text" name="year" size="4" maxlength="4"/>e.g 1976
                    </p>
                    <p>
                        <label>Nationality *
                        </label>
                        <select  name="natcountry"  required>
                            <option value="0">Select
                            </option>
                            <option value="1">Nigeria
                            </option>
                        </select>
                    </p>
                    <p>
                        <label>Eyes related problem? *</label>
                         <input type="radio" value="yes" name="eyes" />
                         <label class="gender">Yes</label>
                         <input type="radio" value="no" name="eyes" />
                        <label class="gender">No</label>
                    </p>
                    <div class="infobox"><h4>Helpful Information</h4>
                        <p>Please note that if you had any eyes problem before or you have currently, you 
                        will not be able to funcion as an operator.
                        </p>
                    </div>
                </fieldset>
                <fieldset class="row4">
                    <legend>Terms and Mailing
                    </legend>
                    <p class="agreement">
                        <input type="checkbox"  name="accept"  required/>
                        <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                    </p>
                    <p class="agreement">
                        <input type="checkbox"  name="agree" />
                        <label>I confirm that I do not have any problem what so ever with my site.</label>
                    </p>
                    <p class="agreement">
                        <input type="checkbox" name="vow" />
                        <label>I am willing to work diligently and be committed in doing this work effectively.</label>
                    </p>
                </fieldset>
                <div><button class="button">Register &raquo;</button></div>
            </form>
   
   
            <footer class="footerr">
          <div >
                    
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <div class="border-top pt-5">
                        <h3>Links</h3>
                        <ul class="list-unstyled footer-links">
                                <li><a href="index.html" class="smoothscroll">Home</a></li>
                                <li><a href="sign.html" class="smoothscroll">Sign In</a></li>
                                <li><a href="signup.html" class="smoothscroll">Sign Up</a></li>
                                <li><a href="services.html" class="smoothscroll">Services</a></li>
                              </ul>
                    <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> |with <i class="icon-heart text-danger" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" >Colorlib et Kest</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                  
                  </div>
                </div>
                
              </div>
            </div>
          </footer>

    </div> <!-- .site-wrap -->      

    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
</body>
</html>