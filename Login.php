<?php 

$host="localhost";
$user="root";
$password="";
$db="Login";

mysql_connect($host,$user,$password);
mysql_select_db($mini project);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Login.css">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HDM</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
                
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="product.html">Product</a>
                </li>
                <li class="active">
                    <a href="Login.html">Login</a>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>

        </nav>
      </div>
     
     <div id="content">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
           
         <div class="container-fluid">
             
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="E:\hdm\images\logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a></li>
                        <li class="tytyu" ><a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a></li>
                        <li><a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a></li>

                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            </div>
        
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Authentication</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
<center>
   <br>
   <div class ="row">
       <div class="col-md-6 mx-auto p-0">
           <div class="card">
   <div class="login-box">
       <div class="login-snip">
           <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
           <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
           <div class="login-space">
               <div class="login">
                   <div class="group">
                       <label for="user" class="label">Username</label>
                       <input id="user" type="text" class="input"  placeholder="Enter your username">
                   </div>
                   <div class="group">
                       <label for="pass" class="label">Password</label>
                       <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password">
                   </div>
                   <div class="group">
                       <input id="check" type="checkbox" class="check" checked>
                       <label for="check"><span class="icon"></span> Keep me Signed in</label>
                   </div>
                   <div class="group">
                       <input type="submit" class="button" value="Sign In">
                   </div>
                   <div class="hr"></div>
                   <div class="foot">
                       <a href="#">Forgot Password?</a>
                   </div>
               </div>
               <div class="sign-up-form">
                   <div class="group">
                       <label for="user" class="label">Username</label>
                       <input id="user" type="text" class="input" placeholder="Create your Username">
                   </div>
                   <div class="group">
                       <label for="pass" class="label">Password</label>
                       <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password">
                   </div>
                   <div class="group">
                       <label for="pass" class="label">Repeat Password</label>
                       <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" >
                   </div>
                   <div class="group">
                       <label for="pass" class="label">Email Address</label>
                       <input id="pass" type="text" class="input" placeholder="Enter your email address">
                   </div>
                   <div class="group">
                       <input type="submit" class="button" value="Sign Up">
                   </div>
                   <div class="hr"></div>
                   <div class="foot">
                       <label for="tab-1">Already Member?</label>
                   </div>
               </div>
           </div>
       </div>
   </center>
   <br><br>

      <!--  footer --> 
      <footer>
         <div class="footer">
            <div class="container-fluid">
               <div class="border1">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  
                    <img class="logo1" src="images/logo.png"/>
                  </div>
            
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  
                    
                     <ul class="lik">
                        <li> <a href="index.html">Home</a></li>
                         <li> <a href="about.html">About</a></li>
                         <li> <a href="product.html">Product</a></li>
                         <li> <a href="Login.html">Login</a></li>
                        <li> <a href="contact.html">Contact us</a></li>
                     </ul>
                  </div>
            
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
            </div>
            
                
                
          </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="new">
                  
                    
                  </div>
               </div>
                <div class="col-md-12">
                  <div class="newtt">
                     <p>Thanks for visiting our HDM</p>
                  </div>
               </div>
            </div>

         </div>
            <div class="copyright">
               <p><a href="file:///D:/hdm/about.html">HDM</a></p>
            </div>
         </div>
   
     </footer>
    <!-- end footer -->
   </div>

</div>

   <div class="overlay"></div>

      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>