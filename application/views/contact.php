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
                background: #006494;
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

.formbox{
    position: absolute;
    left: 24.4%;
    top: 15%;
    height: 800px;
    width: 1090px;
    background: #FFFFFF;
    border: 1px solid #E5E5E5;
    box-sizing: border-box;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
}
.get{
    margin-left: 15%;
    margin-top: 6%;
    font-size: 32px;
}
input {
    width: 90%;
    height: 70%;
}

.formcontrol{
    width: 600px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid grey;
    color: black;
    font-size: 18px;
    margin-left: 15%;
    margin-top: 7%;
    margin-bottom: 16px;
    
}

.submitbtn{
    position: absolute;
    left: 15%;
    top: 70%;
    width: 250px;
    height: 50px;
    background-color: #006494;
    color: white;
}
.sidebar{
    position: absolute;
    width: 350px;
    height: 800px;
    left: 0%;
    top: 15%;
    background: #006494;
    color: white;
    font-family: Poppins;
}
.icon{
    height: 45px;
    width: 45px;
}
.location{
    position: absolute;
    top: 15%;
    left: 17%;
}
.details{
    position: absolute;
    top: 35%;
    left: 17%;
}
.us{
    position: absolute;
    top: 55%;
    left: 17%;
}
.footer {
    position: absolute;
    width: 461px;
    height: 27px;
    left: 490px;
    top: 987px;
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 27px;
    color: #808080;
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

        <title>Contact Us | Thyia E-Learning Classroom</title>


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

        <div class="formbox">
            <h4 class="get">Get in Touch</h4>
            <?= $status ?>
            <?= form_open() ?>
                <input name="txtFname" type="text" class="formcontrol" placeholder="Full name" required><br>
                <input name="txtEmail" type="email" class="formcontrol" placeholder="Your Email" required><br>
                <textarea name="txtMsg" class="formcontrol" placeholder="Your Message" row="4" required></textarea><br>


                <input type="submit" class="submitbtn" name="" value="Send Message" class="submitbtn">

            </form>
        </div>
        <div class="sidebar">
            <div class="location">
                <i class="fa fa-map-marker fa-3x"></i>
                <h5>Our Location</h5>
                <p>hng6.slack.com</p>
            </div>
            <div class="details">
                <i class="fa fa-envelope fa-3x"></i>
                <h5>Contact Details</h5>
                <p class="sideemail">email: eiliethyia@hng6com</p>
            </div>
            <div class="us">
                <i class="fa fa-phone fa-3x"></i>
                <h5>Contact us</h5>
                <p class="tel1">Phone: 07065719564</p>
                <p class="tel2">Phone: 08096460341</p></div>
        </div>

        <div class="footer">
            <p>&copy; Thyia E-Learning. All Rights Reserved 2019.</p>  
        </div>


    </body>
</html>