<!DOCTYPE html>
<html lang="en">
<head><title>Admin</title>
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

         <link rel="stylesheet" href="user.css">        
    <script type="text/javascript">
     function myFunction(yt)
      {
        var confirm = window.confirm("Click ok to continue the download");
        if(confirm == false){
                return false;
              }               
              else {

                
              
           $.ajax({
            url : "uploadmaterial.php",
            method  : "POST",
            data  : {Products:yt},
            success : function(data){
            //alert(data);
            }
            });
          
          }
        //alert(yt);
      }

      function deleteFunction(dt)
      {
        var confirm = window.confirm("Click OK to delete this file?");
        if(confirm == false){
                return false;
              }               
              else {

                
              
           $.ajax({
            url : "uploadmaterial.php",
            method  : "POST",
            data  : {Delete:dt},
            success : function(data){
            alert(data);
            }
            });
          
          }
        //alert(yt);
      }
    </script>    
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
       
    <div class="site-wrap">

    <div class="site-section section-2" id="work-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h3 class="section-title">Admin </h3>
            <p>Upload and Download Jobs</p>
          </div>
        </div>

      </div>
         

    <div class="site-section section-2 bg-light" id="process-section" data-aos="fade">
      <div class="container">
        <div class="row">
          Download Completed Jobs
               <table>
                   <thead>
                       <th>ID</th>
                       <th>Filename</th>
                       <!--<th>size (in mb)</th>-->
                       <th>Downloads</th>
                       <th>Delete</th>
                       <th>Action</th>
                  </thead>
                    <tbody>
                <?php include('db.php');
      
      global $db_handle;
  $query = $db_handle->prepare("SELECT * FROM `docspool` WHERE (`delMindset` <> 1) ORDER BY `id` ASC");
  $result = $query->execute();
  if($result) 
  {   
  $rows = $query->fetchAll();
  $courses = "";
  $kount = 1;
  foreach ($rows as $file) { $kid = $file['id']; ?>
                       <tr>
                           <td><?php echo $kount; ?></td>
                           <td><?php echo $file['docname']; ?></td>
                           <!--<td><?php //echo floor($file['size'] / 1000) . ' KB'; ?></td>-->
                           <td><?php echo $file['downloads']; ?></td>
                           <td><a onclick="deleteFunction('<?php echo $kid;?>')"  href="#">Delete</a></td>
                           <td><a  onclick="myFunction('<?php echo $kid;?>')" href="<?php echo $file['relpath'] ?>" id="kount<?php echo $kid; ?>" download="<?php echo $file['relpath'] ?>" target="_blank" > Download </a></td>
                        </tr>
                        

  
                <?php $kount++;  } }?>

                </tbody>
                </table>        
          
       

         <div class="container">Upload New Jobs
           <div class="row">
             <form action="uploadmaterial.php" method="post" enctype="multipart/form-data" >
                 <h3> Upload files</h3>
                 <input type="file" name="myfile"> <br>
                 <button type="submit" name="save">upload</button>
             </form>
              </div>
            <div class="row">
               <form action="uploadmaterial.php" method="post" enctype="multipart/form-data" >
                 <h3> Upload Text To Be Corrected</h3>
                 <input type="file" name="updatefile"> <br>
                 <button type="submit" name="save">upload</button>
           </form>
            </div>
        </div>

       </div>
      </div>
    </div>




    <footer class="footer-section bg-light">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                 <h3>About Us</h3>
                 <p>We are all about digitizing hard copy books for effective distribution of knowlegde materials.
                 and making it more accessible also solving the problem of People with Print-related Problems</p>
                </div>
      
                <div class="col-md-3 ml-auto">
                    <h3>Links</h3>
                    <ul class="list-unstyled footer-links">
                       <li><a href="index.html" class="smoothscroll">Home</a></li>
                       <li><a href="sign.html" class="smoothscroll">Sign In</a></li>
                       <li><a href="signup.html" class="smoothscroll">Sign Up</a></li>
                       <li><a href="services.html" class="smoothscroll">Services</a></li>
                     </ul>

                </div>
      
                <div class="col-md-4">
                  <h3>Hear From Us</h3>
                   <p>Hear from us about job openings, both free and payable ones.</p>
                  <form action="#">
                  <div class="d-flex mb-5">
                  <input type="text" class="form-control rounded-0" placeholder="Email">
                  <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                  </div>        
                  </form>
                </div>
      
              </div>
      
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <div class="border-top pt-5">
                    <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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