<?php
   require_once("process-student-forget-pw.php");
?>


<html>
<head>
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

    <title></title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        <nav class="navbar navbar-expand-lg  navbar-light" style=" background: #11102F; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25); color: white; ">
            <a class="navbar-brand" href="#" style="color: white;"><i class="fa fa-graduation-cap" style="font-size:30px"></i>Thyia E-Learning Classroom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav mr-auto"> 
                </ul>
                <span class="nav-link" >
                        <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                </span>
                <span class="nav-link" >
                    Become a Student?
                </span>
                <span class="nav-link" >
                        Become an Instructor?
                </span>
                <span class="nav-link"  >
                    Sign Up
                </span>
                <span class="nav-link">
                    Login
                </span>
                
            </div>
            
    </nav>


    <!-- THE INSTRUCTOR LOGIN FORM STARTS FROM HERE -->
    <section>

        <div class="container-fluid" style="margin-top: 150px;">
            <div class="row justify-content-around">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg bg-primary">
                    <h2 class="text-center text-light" style="margin-bottom: 2%">Student Forget Password</h2>
                    
                  <?php


                  if (isset($_GET['status']) && $_GET['status'] == 'success' ) {
                     echo "<div class='col-lg-7 col-md-7 col-sm-7 col-xs-7 alert alert-successful'>Successful, Mail sent to you email, click here to <a href='index.php' class='text-light'>login</a></div>";
                  }
                elseif (isset($studentErrMessForgetPw)) {
                    
                echo "<div class='col-lg-7 col-md-7 col-sm-7 col-xs-7 alert alert-danger'>$studentErrMessForgetPw</div>";
                }
                  ?>

                   <form method="POST" action="<?php ?>">
                       
                    <div class="form-group">
                        <input type="text" name="student_recoverName" placeholder="Fullname" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="email" name="student_recoverEmail" placeholder="Email address" class="form-control">
                    </div>
                    
                    
                    <div class="form-group">
                        <button type="submit" name="student_recoverPwButton" class="btn btn-primary form-control"> Recover </button>

                     <div class="form-group">
                         <a href="index.php"><button type="submit" name="" class="btn btn-primary form-control"> Cancel </button></a>   
                    </div>

                    
                    
                   </form>

                       

                </div>



            </div>

        </div>
        <!-- THE INSTRUCTOR LOGIN FORM STARTS FROM HERE -->



    <!--footer starts from this part-->


    <div class="container footer" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 copyRight" >
                <span>&copy Thyia E-Learning School 2019</span>

            </div>
            <!-- social media on footer starts here-->

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <ul class=" nav fa-pull-right socialMedia">

                    <li><a href="#facebook.com/thyiaelearn"><i class='fa fa-facebook'></i></a></li>
                    <li><a href="#facebook.com/thyiaelearn"><i class='fa fa-twitter'></i></a></li>
                    <li><a href="#facebook.com/thyiaelearn"><i class='fa fa-github'></i></a></li>
                </ul>

            </div>
        </div>

    </div>
    <!--footer starts from this part-->


    </section>

    <script type="text/javascript" src="../assets/bootstrap/js/jquery.js"></script>

     <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>



