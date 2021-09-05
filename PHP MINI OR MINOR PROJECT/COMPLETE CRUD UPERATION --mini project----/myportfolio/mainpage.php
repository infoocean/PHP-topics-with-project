<?php
session_start();

if (!isset($_SESSION['user'])) {
  # code...
  header('location:../login.php');

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <title>shubhamjaiswal.com</title>
    <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font awesome -->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <!--css link-->
     <link rel="stylesheet" type="text/css" href="css folder\style.css">
     <style type="text/css">
       .img{
    background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(images/shubham.png);
    width: 100%;
    height: 100vh;
   }
     </style>

  </head>
  <body>
    <!--heqader part start-->
      <header class="container-fluid">
        <div class=" bg-primary text-center">
          <span style="font-size: 20px; color: yellow;"> Welcome : </span>
          <a href="../All Employ data/update.php?user=<?php echo $_SESSION['user']; ?>" class="text-white" style="font-size: 20px; font-weight: bold;"><i class="fas fa-user-tie"></i>
                                                          <?php
                                                          if (isset($_SESSION['user'])) {
                                                            # code...
                                                            echo $_SESSION['user'];
                                                        }
                                                         ?>
         </a>

          <a href="logout.php" style="color: yellow;">Logout</a>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
         <div class="container">
          <a href="shubham.html" class="navbar-brand" style="font-size: 25px; font-weight: bold;">Shubham Kumar Jaiswal
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
          <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarid">
              <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item">
                  <a href="shubham.html" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link" data-target="#mymodal" data-toggle="modal">Contact Me</a>
                    <div class="container">
                      <!--contact us body start-->
                      <div class="modal fade " id="mymodal">
                        <div class="modal-dialog ">
                          <div class="modal-content">
                            <div class="modal-header">
                             <h4 class="text-danger">Send Me a Message</h4>
                             <button type="button " class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                          <!--contact us form start-->    
                            <form action="#" method="post">
                                <div class="form-group">
                                  <label for="name" style="font-size: 18px; font-weight: bold;">Name:</label>
                                  <input type="text" name="name" value="" required="name" placeholder="name" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="Email" style="font-size: 18px; font-weight: bold;">Email:
                                  </label>
                                  <input type="text" name="Email" value="" required="Email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="Mobile" style="font-size: 18px; font-weight: bold;">Mobile Number:
                                  </label>
                                  <input type="text" name="Mobile Number" value="" required="Mobile Number" placeholder="+91" class="form-control">
                                </div>
                                 <div class="form-group">
                                  <label for="Message" style="font-size: 18px; font-weight: bold;">Message:
                                  </label>
                                  <input type="Message" name="Message" value="" required="Message" placeholder="Message" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="Depc" style="font-size: 18px; font-weight: bold;">Description:
                                  </label>
                                  <input type="text" name="Mobile Number" value="" placeholder="optopnal" class="form-control">
                                </div>
                                <div>
                                  <button type="submit" name="submit" class="btn badge-danger p-2 " style="width: 200px;">Submit
                                  </button>
                                </div>
                             </form>
                            <!--contact us form end--> 
                            </div>  
                           </div>       
                          </div>
                        </div>
                      </div>
                    <!--contact form body end-->
                    </li>
                    <li class="nav-item dropdown"> 
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services
                     </a>
                     <div class="dropdown">
                      <ul class="dropdown-menu text-left" style="line-height: 30px;">
                        <li class="dropdown-item"><a href="#"> Adobe Photoshop</a></li>
                        <li class="dropdown-item"><a href="#"> Illustrator</a></li>
                        <li class="dropdown-item"><a href="#"> Adobe Dreamweaver</a></li>
                        <li class="dropdown-item"><a href="#"> UX/UI Design</a></li>
                        <li class="dropdown-item"><a href="#"> Web Development</a></li>
                        <li class="dropdown-item"><a href="#"> Website Builder</a></li>
                        <li class="dropdown-item"><a href="#"> Website Management</a></li>
                      </ul>
                     </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Education
                      </a>
                      <div class="dropdown">
                        <ul class="dropdown-menu text-left" style="line-height: 30px;">
                         <li class="dropdown-item"><a href="#"> 10TH</a></li>
                         <li class="dropdown-item"><a href="#"> 12TH</a></li>
                         <li class="dropdown-item"><a href="#"> B.TECH</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Certification
                      </a>
                        <div>
                          <ul class="dropdown-menu text-left" style="line-height: 30px; font-size: 15px;">
                            <li class="dropdown-item"><a href="#"> Photoshop Certified</a></li>
                              <li class="dropdown-item"><a href="#"> Illustrator Certified</a></li>
                              <li class="dropdown-item"><a href="#"> UX/UI Certified</a></li>
                               <li class="dropdown-item"><a href="#"> C/C++,PHP Certified</a></li>
                               <li class="dropdown-item"><a href="#"> HTML,CSS Certified</a></li>
                                <li class="dropdown-item"><a href="#"> JAVASCRIPT Certified</a></li>
                               <li class="dropdown-item"><a href="#"> Bootstrap4</a></li>
                              <li class="dropdown-item"><a href="#"> Jquery Certified</a></li>
                              <li class="dropdown-item"><a href="#"> AWS Certified</a></li>
                             <li class="dropdown-item"><a href="#">SEO  Certified</a></li>
                           </ul>
                         </div>
                    </li>
                  </ul>
              </div>
            </div>
         </div>
       </div>
      </nav>
   </header>
   <!--header part end-->

   <!--main header part start-->
    <div class="container-fluid">
     <div class="container">
      <div class="row">
        <div class=" col-sm-12 col-lg-6 col-md-6 col-xl-6">
           <h3 class="text-center p-3 text-danger">Welcome, I'm Shubham</h3>
             <h1 class="text-center" style="font-weight: bold;">I Design & Build Website</h1>
             <p><b>Hello,</b></p>
             <p style="font-size: 18px;">I am Shubham Kumar Jaiswal From Bhopal (Madhya Pradesh). I have completed B.TECH at Computer Science Engineering (CSE) From Sagar Institute of Research Technology & Science Bhopal (MP).</p>
             <p style="font-size: 18px;">I have a good Knowledge of Website Designing , Web Development and Website management Feields.</p>
             <p style="font-size: 18px;">I can’t accept all projects anymore since I’m also spending a lot of time to learning new things. But I’m always curious to work on exciting projects.</p>
            <div class="text-center">
            <a href="#"><button class="btn btn-primary" style="width: 220px; height: 40px; font-size: 20px;">Hire Me</button>
            </a>
            <a href="pdf file/Resume2.pdf"><button class="btn btn-danger" style="width: 220px; height: 40px; font-size: 20px;"><i class="fas fa-download"></i> Resume</button>
            </a>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6 col-md-6 col-xl-6 text-center">
           <img style="width: 80%; height: 80%;" src="images/shub.jpg" class="img-fluid img-thumbnail m-3">   
        </div>
        </div>
          </div>
        </div>
     <!-- main header part end--> 

      <!--about me part start-->
          <div class="container-fluid bg-primary">
            <h1 class="text-center p-5 text-white"><b><u>About Me.</u></b></h1>
            <div class="row">
             <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 ">
              <div class=" text-center p-3">
              <img src="images/about.jpg" class="img-fluid" style="width: 70%; height:50%;">
              </div>
             </div>
             <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 ">
              <div class="text-center">
               <p style="font-size: 20px; line-height: 25px; font-family:century gothic" class="p-3 text-white">
               I started my web developer career in College. Where I studied: Computer Programming and Application at the University of Applied Computer Sciences. I loved programming, website Building and Website developing so I started a web developing to improve my skills. i am study in B.Tech Computer Science Engineering(CSE) From Sagar Institute of research Technology & Science Bhopal(Madhya Pradesh).
              </p>
              </div>
              <div class="p-3 text-center">
               <a href="#" class="p-3"> <button class="btn btn-warning">Learn More</button></a>
               <a href="pdf file/Resume2.pdf" class="p-3"> <button class="btn btn-danger">Download CV</button></a>
             </div>
           </div>
          </div>
        </div>
        <!--about me part end-->

        <!--my skills part srart-->
        <div class="container-fluid bg-secondary" >
           <h2 class="text-center text-white p-5" style="font-weight: bold;"><u>My Skills / Key Expertise</u></h2>
            <p class="text-center text-warning p-2" style="font-size: 23px;">
              My skills is a My strength and my Knowledge. i attech great importance to skills. here below i am presenting my skills:
            </p>
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class=" text-center p-3">
                 <img src="images/work.jpg" class="img-fluid" style="width:70%; height: 50%;">
              </div>
             </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="p-1">
                <h5 class="text-white"><b>HTML</b></h5>
                </div>
                <div class="progress">
                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 80%;"><span style="font-size:15px; font-weight: bold;" class="text-white">80%</span>
                 </div>
                </div>
               <div class="p-1">
                <h5 class="text-white"><b>CSS</b></h5>
              </div>
                 <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 70%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">70%</span>
                 </div>
                </div>
                <div>
                 <h5 class=" text-white p-1"><b>BOOTSTRAP 5</b></h5>
                </div>  
                 <div class="progress">
                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 60%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">60%</span>
                 </div>
               </div>
                <div>
                  <h5 class=" text-white p-1"><b>JAVASCRIPT</b></h5>
                  </div>
                    <div class="progress">
                   <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">50%</span>
                  </div>
                </div>
                <div>
                 <h5 class="text-white p-1"><b>JQUERY</b></h5>
                 </div>
                <div class="progress">
                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">50%</span>
                 </div>
                </div>
                <div>
                  <h5 class=" text-white p-1"><b>MYSQL (DATABASE)</b></h5>
                  </div>
                    <div class="progress">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 60%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">60%</span>
                    </div>
                  </div>
                  <div>
                    <h5 class=" text-white p-1"><b>ORACLE (DATABASE)</b></h5>
                     </div>
                      <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%;"><span style="font-size: 15px; font-weight: bold;" class="text-white">50%</span>
                     </div>
                   </div>
                    <div>
                    <h5 class=" text-white p-1"><b>C/C++</b></h4>
                     </div>
                       <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 60%;"><span style="font-size: 16px; font-weight: bold;" class="text-white">60%</span>
                    </div>
                   </div>
                   <div>
                   <h5 class=" text-white p-1"><b>PHP</b></h5>
                   </div>
                  <div class="progress">
                   <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:40%;"><span style="font-size: 16px; font-weight: bold;" class="text-white">40%</span>
                  </div>
                 </div> 
                 <br><br>
            </div>
           </div>
           </div>
         </div>
         <!--skills part end-->

         <!--services part start-->
        <div class="container-fluid" style="background-color: #f2f2f2">
              <div class="text-center">
                <h2 class="p-5"><u><b> Services / More Skills</b></u></h2>
                 <p class="text-center" style="font-size: 20px;">
                  A web skills equivalent to an digital agency. Indispensable mastery of WordPress<br> CMS for the design and creation of your web both for security and for the maintenance.
                 </p>
               </div>
              <div class="row">
                <div class="col-sm-12 col-lg-4 col-xl-4 col-md-4 ">
                  <div>
                    <img src="images/ps.jpg" class="img-fluid img-thumbnail image">
                   </div>
                </div>
                    <div class="col-sm-12 col-lg-4  col-xl-4 col-md-4 ">
                      <div>
                        <img src="images/msoffice.jpg" class="img-fluid img-thumbnail image">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4  col-xl-4 col-md-4">
                      <div>
                        <img src="images/webdesign.jpg" class="img-fluid img-thumbnail image">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-12 col-lg-4 col-xl-4 col-md-4 ">
                      <div>
                        <img src="images/uxui.jpg" class="img-fluid img-thumbnail image">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4  col-xl-4 col-md-4 ">
                      <div>
                        <img src="images/devlo.jpg" class="img-fluid img-thumbnail image">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-4  col-xl-4 col-md-4 ">
                      <div>
                        <img src="images/management.jpg" class="img-fluid img-thumbnail image">
                      </div>
                    </div>
                 </div>
                 </div>
               </div>
               <!--services part end-->
      
                 <!--my works part start-->
              <div class="container-fluid" style="background-color: #f2f2f2">
                <div class="text-center">
                 <h2 class="p-5"><u><b>My Works / Projects</b></u></h2>
                 <p class="text-center" style="font-size: 20px;">
                   I always follow specific steps when I’m working on a web project. In this way I can keep<br> everything organised and it creates moments to talk about the project with my clients.
                 </p>
                 <p style="font-size:18px;"><u>Here Below I am presenting some my Project working:</u></p>
                 </div>
                 </div>
                  <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6 col-md-6 ">
                      <div class="text-center">
                        <img src="images/webtech.jpg" class="img-fluid img-thumbnail image rounded">
                      </div>
                    </div>
                    <div class="col-sm-12 col-lg-6  col-xl-6 col-md-6 ">
                      <div class="text-center">
                        <img src="images/portfolio.jpg.jpg" class="img-thumbnail img-fluid image"><br>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                      <div class="text-center">
                        <img src="images/web.jpg" class="img-fluid img-thumbnail image rounded">
                      </div>
                    </div>
                    <div class="col-lg-6  col-xl-6 col-md-6 col-sm-12">
                      <div class="text-center">
                        <img src="images/develop.jpg" class="img-thumbnail img-fluid image">
                      </div>
                    </div>
                  </div>
                 </div>
                 </div>
                <!--my works part end-->
 
                <!--portfolio part start-->
                 <div class="container-fluid" style="background-color: #f2f2f2">
                   <div class="container" >
                      <div class="text-center">
                        <h3 class="p-3 mywork"><u><b>Website Templates (Personal Portfolio)</b></u></h3>
                      </div>
                    </div>
                  </div>
             </div>
             <!--portfolio part end-->


      <!--contact me part start-->
          <div class="container-fluid bg-primary">
            <h1 class="text-center p-5 text-white"><b><u>Contact Me.</u></b></h1>
            <div class="row">
             <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 ">
              <div class=" text-center p-5">
              <img src="images/cycle.gif" class="img-fluid" style="width: 80%; height:90%;">
              </div>
             </div>
             <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 ">
              <div class="">
                <form>
                  <p class="text-center text-light" style="font-size: 25px;" > Send me a message</p>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                       <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                      </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Enter Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Mobile Number</label>
                       <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Mobile Number">
                      </div>
                      <div class="form-group">
                    <label for="exampleInputEmail1">Enter Website</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Website" >
                      </div>
                      <div class="form-group">
                         <label for="exampleFormControlTextarea1">Message</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Message"></textarea>
                       </div>
                       <div class="p-3">
                      <button type="submit" class="btn btn-danger" style=" font-size: 20px; width:250px; height: 50px;">Submit</button>
                      </div>
              </form>
              </div>
           </div>
          </div>
        </div>
        <!--contact me part end-->
      </div>
      </div>
    </div>

          </div>
        </div>

                <footer class=" container-fluid bg-dark">
                  <div class="text-center p-5 ">
                    <img src="images/shubham.png" class="img-fluid rounded-circle" style="width: 40%; height:40%;">
                     <p style="color: white;" class="p-2">I can’t accept all projects anymore since I’m also spending a lot of time to learning new things. But I’m always curious to work on exciting projects.</p>
                  <div class="text-center">
                    <p class="text-warning">Follow Me</p>
                  <a href="#"> <i class="fab fa-linkedin fa-2x"></i></a>
                  <a href="#"> <i class="fab fa-twitter-square fa-2x"></i></a>
                  <a href="#"> <i class="fab fa-github fa-2x"></i></a>
                  <a href="#"> <i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"> <i class="fab fa-pinterest-square fa-2x" ></i></a>
                 </div>
                </div>
        
                  <div class="text-center">
                    <p class="text-light" style="font-size: 25px;"><u>My websites</u>:</p>
                  </div>
                  <div class="text-center">
                  <p><a href="#" class="text-white" style="font-size: 15px;">www.webtechinfo.com</a></p>
                  <p> <a href="#"  class="text-white" style="font-size: 15px;">www.shubhamjaiswal.com</a></p>
                   <p><a href="https://wordpress.com/view/alltecnologyinformation.wordpress.com"  class="text-white" style="font-size: 15px;">www.alltechnologyinformation.com</a></p>
                  <p> <a href="#"  class="text-white" style="font-size: 15px;">www.personalportfolio.com</a></p>
                  </div>

                   <div class="text-center">
                    <p class="text-primary">Only For Website Management Worker Login Here</p>
                    <a href="../mainworkerlogin.php" class="btn btn-primary" style="width: 100px;">login</a>
                  </div>
                
                  <p class="p-2 text-white">copyright @2020 <span class="text-danger">shubhamjaiswal</span></p>

                  </footer>


            


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>