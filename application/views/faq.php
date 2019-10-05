<!DOCTYPE html>
<html>
    <head>

        <style type="text/css">
            .top-menu{
                background-color: white;
                font-family: 'Lato', sans-serif;
            }

            #navbarText ul li a{		
                color:black;
                padding: 20px;
            }

            .details button{
                width: 200px;
                height: 50px;
                border-radius: 10px;
                border: 0px;
                color: white;
                font-weight: bold;
                font-size: 1.3em;
            }


            .details button:hover{




                color: white;
                background-color: white;
            }


            .details h2{


                color: white;

            }


            .details p{


                color: white;
                font-size: 1.2em;
            }

            .study-image img{

                width: 90%;
                height: 60%;
                margin-top: 20%;
            }

            .footer{

                border-top: 2px solid white;
                color: white;
            }

            .footer i{

                color: white;
            }

            
            body {
    /*background-color: rgb(255, 251, 251);*/
    color: black !important;
    font-family: Poppins; 
}

.intro {
    height: 100% !important;
    width: 100% !important;
    background: white !important;
    box-shadow: 0px 4px 100px rgba(44, 32, 32, 0.25) !important;
    overflow: hidden !important;
    margin: auto !important;
}

.container-top {
    position: absolute !important ;
    width: 1600px !important;
    height: 60px !important;
    left: 0% !important;
    top: 0% !important;
    margin: auto !important;
    background-color: white;
    box-sizing: border-box !important;
    box-shadow: 0 2px 25px 0 rgba(110, 130, 214, .20);
    overflow: hidden !important ;
}


h1{
    text-align: center;
    margin: 50px 0 !important;
    font-family: sans-serif;
    padding-top: 4%;
    font-weight: bold !important ;
}

h2 {
    font-size: 20px;
    margin-left: 25px;
    color: black
}

h3 {
    font-size: 30px;
    margin-top: 100px;
    margin-left: 35%;
    color: #111;
    padding-top: 3%;
    
}
#copyright {
    color: black ;
    padding-left: 40%;
    font-size: 20px;
}
.footer {
    border-top: 2px solid white;
    color: black !important;
}
.card,.card-header{
    background-color: transparent!important;
    border: none;
    padding: 0 !important;
    margin-bottom: 20px;
}
.card{
    box-shadow: 0 2px 25px 0 rgba(110, 130, 208, .18);
}
.btn-link{
    width: 100%;
    height: 80px;
    color: white !important;
    font-weight: bold !important;
    text-align: left !important;
    font-size: 20px !important;
    font-weight: bold !important;
    text-decoration: none !important;
    font-family: Poppins, sans-serif !important;
    background-color: #006494!important;
    
}

.card-body{
    background: #eee;
    font-size: 19px !important;

}

.btn-link:after{
    content: '\2212';
    width: 35px;
    font-size: 25px;
    text-align: center;
    border-radius:5px;
    right: 15px;
    top: 11px;
    color: #111;
    position: absolute;
    background: #eee;
}
.btn-link.collapsed:after{
    content: '\002B';
}

.btn-link:before{
    content: '';
    height: 25px;
    width: 25px;
    position: absolute;
    background:white;
    z-index: 1;
    transform: rotate(45deg);
    left: 30px;
    top: 70px;

}


        </style>



        <!--ADDING THE CSS FOR BOOTSTRAP -->

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

        <link href="https://fonts.googleapis.com/css?family=Acme|Be+Vietnam|Lato|Righteous&display=swap" rel="stylesheet">

        <title>FAQ | Thyia E-Learning Classroom</title>
    </head>
    <body>

        <!-- MENU STARTS FROM HERE -->

        <header style="border-bottom: 1px solid #c0c0c0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-menu">
                        <nav class="navbar navbar-expand-lg navbar-light text-white">
                            <a class="navbar-brand" href="<?= base_url() ?>" style="color: black;"><i class="fa fa-graduation-cap" style="font-size:30px; color: black;"></i><b>Thyia E-Learning Classroom</b></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav ml-auto">
                                     <li class="nav-item active">
                                      <a class="nav-link" href="<?= base_url() ?>about_us" style="color: black; font-weight: bold;">About Us<span class="sr-only">(current)</span></a>
                                  </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= base_url() ?>student/signup" style="color: black; font-weight: bold;">Student Enroll<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>teacher/signup" style="color: black; font-weight: bold;">Become a Teacher</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>teacher/signin" style="color: black; font-weight: bold;">Login as Teacher</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>student/signin" style="color: black; font-weight: bold;">Login as Student</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>faq" style="color: black; font-weight: bold;">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url() ?>terms" style="color: black; font-weight: bold;">Terms & Condition</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- MENU ENDS FROM HERE -->

        
<section>


<h1>Frequently Asked Questions</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="accordion" id="accordionExample">

                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Thyia e-learning Classroom?
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    We are an e-learning platform that makes learning easier, accessible across all platforms and gives you exercises to test yourself.
                                    We are very different, unique and spectacular from different cities, times, race and even origin.
                                    But we have something that unites us and that is solving human problems and making life easy for humans using technology. We are more than a team, we are Family 
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can i become a Teacher?
                                  </button>
                                </h2>
                              </div>

                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                  You can become a teacher by easily clicking on the "Become a Teacher" link on the general dashboard, and filling the form with your correct informations as stated in the form. And the goodnews is, anyone can become a teacher so far you sign-up as a teacher
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can i enroll as a student?
                                  </button>
                                </h2>
                              </div>

                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  You can easily enroll as a student by clicking on the "Student Enroll" link on the general dashboard. Fill in the form with your correct details and make sure to sign-up for a class of your choice then immediately  you become a student of Thyia E-learning Classroom.
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                    <div class="card-header" id="headingFour">
                                      <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          How can i login as a student?
                                        </button>
                                      </h2>
                                    </div>
      
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                      <div class="card-body">
                                        You can login as a student by clicking on the "Login as Student" link on the general dashboard. <b> Remember, you can only login after you've signed up as a student.</b>
                                      </div>
                                    </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingFive">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                              How can i login as a teacher?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                          <div class="card-body">
                                            You can always login as a teacher by clicking on the "Login as Teacher" link on the general dashboard. <b> Remember, you can only login after you've signed up as a teacher.</b>
                                          </div>
                                        </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingSix">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                               How can i add items as a Teacher?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                          <div class="card-body">
                                            After loggining into your account, you have to click the "All items" icon on the sidebar and click the "Add Items" button to add all your items. <b>Always remember to save your edits</b>. 
                                          </div>
                                        </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingTen">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                               How can i view items as a Teacher?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                          <div class="card-body">
                                            You can only view items as a teacher after you've logged in your account and you've added items to your list on the teacher's dashboard.
                                          </div>
                                        </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingSeven">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                              Can i download files posted by my teacher?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                          <div class="card-body">
                                                Yes you can, to make a download for an item uploaded by a teacher, you will have login into your account.
                                                On your dashboard, you will see the download icon on the list of items shown or when reading the article posted by the teacher, there's also a download icon to download the item attached to that article, click on the download icon to make a download.
                                          </div>
                                        </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingEight">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                              How can i edit my profile?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                          <div class="card-body">
                                            Editing of your profile can be done after you've logged into your account, check your sidebar on the left and click on the "Edit profile" icon and make your edits, and update it, <b>Remember, to always update all your edits</b> 
                                          </div>
                                        </div>
                                </div>

                                <div class="card">
                                        <div class="card-header" id="headingNine">
                                          <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                              Do i need to make any payments?
                                            </button>
                                          </h2>
                                        </div>
          
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                          <div class="card-body">
                                            No, you don't need to make any payments of any sorts. Thyia e-learning classroom is totally free, all of it's resources are made for free to enhance and facilitate e-learning.
                                          </div>
                                        </div>
                                </div>
                        </div>




                    </div>
                </div>
            </div>

<!--footer part-->






	<!--footer part-->


<!--		<div class="container footer">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 copyRight">
                   <span>&copy Thyia E-Learning School 2019</span>

				</div>
  social media on footer starts here

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					<ul class=" nav fa-pull-right socialMedia">
						
						<li><a href="#facebook.com/thyiaelearn"><i class='fa fa-facebook'></i></a></li>
						<li><a href="#facebook.com/thyiaelearn"><i class='fa fa-twitter'></i></a></li>
						<li><a href="#facebook.com/thyiaelearn"><i class='fa fa-github'></i></a></li>
					</ul>

				</div>
			</div>
			
		</div>-->

<br> <br>
<div class="footer">

    <hr style="color: black !important;">

    <p id="copyright">&#169 Thyia E -Learning School 2019</p>
</div>

</section>


        <!--ADDING THE JS FOR BOOTSTRAP -->
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>




    </body>
</html>