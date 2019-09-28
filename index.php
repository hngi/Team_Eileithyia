<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	


	.top-menu{
    background-color: rgb(21,17,92);
    font-family: 'Lato', sans-serif;


}

#navbarText ul li a{		

    color:white;
    padding: 20px;
}

.details button{

	width: 200px;
	height: 50px;
	border-radius: 10px;
	border: 0px;
	color: #650099;
	font-weight: bold;
	font-size: 1.3em;
}


.details button:hover{

	
	

	color: white;
	background-color: blue;
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


section {


      background:  linear-gradient(blue,purple);
	  /* Fallback for browsers that don't support gradients */
		background: blue;
		/* For Safari 5.1 to 6.0 */
		background: -webkit-linear-gradient(blue, purple);
		/* For Internet Explorer 10 */
		background: -ms-linear-gradient(blue, purple);
		/* Standard syntax */
		background: linear-gradient(blue, purple);

}


.footer .socialMedia a{
	padding: 20px;
	font-size: 20px;
}

.footer .socialMedia a i{
	padding-top: 10px;
	
}

.footer .copyRight{
	
	font-size: 1em;
	font-weight: bold;
	padding-top: 10px;
}

</style>

 

<!--ADDING THE CSS FOR BOOTSTRAP -->

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

	<title></title>
</head>
<body>

<!-- MENU STARTS FROM HERE -->

<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-menu">
				
				<nav class="navbar navbar-expand-lg navbar-light text-white">
				  <a class="navbar-brand" href="index.php" style="color: white;"><i class="fa fa-graduation-cap" style="font-size:30px; color: white;"></i><b>Thyia E-Learning Classroom</b></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarText">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Become a Student <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Become a Instructor</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Sign In</a>
				      </li>

				      <li class="nav-item">
				        <a class="nav-link" href="#">Sign Up</a>
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
	
	<div class="container-fluid">
		<div class="row">
				

				<div class="offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-4 details" style="height: 100%; margin-bottom: 18%;">

					
					<h2 style="padding-top: 40%;">
						Your favourite<br>
						e-learning platform
					</h2>

					<p>
						We make learning easier, accessible<br>
						across all platforms and give you <br>
						exercises to test yourself.
					</p>
					<a href="#"><button>Learn More</button></a>

					</div>
				

				<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4 study-image">
					<img src="images/undraw_studying_s3l7.png" class="rounded-circle">
				</div>


				
			
		</div>
		
	</div>


	<!--footer part-->


		<div class="container footer">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 copyRight">
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

</section>


<!--ADDING THE JS FOR BOOTSTRAP -->
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>




</body>
</html>