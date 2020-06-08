<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Css Stylesheet-->
	<link href="css/style.css"  rel="stylesheet">
	
	<!--font awesome-->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>HomePage</title>
  </head>
  <body>
<!--HEADER SECTION -->
<?php include 'header.php' ?> 
 


<!--HomePage Section -->
<div class="container-fluid">
 <div class="row" style="background-color:#035aa6; padding:15px;">
     <div class="col-lg-8 col-md-12 col-sm-12">
        <div id="carouselExampleIndicators"class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="actve"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="0" ></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="0" ></li>
				</ol>
	
			<div class="carousel-inner">
					<div class="carousel-item active" data-interval="2500">
					<img src="slide1.jpg " class="d-block w-100" alt="slide1">
					</div>
		  
					<div class="carousel-item" data-interval="2500">
					<img src="slide2.jpg " class="d-block w-100" alt="slide1">
					</div>
		  
					<div class="carousel-item" data-interval="2500">
					<img src="slide3.jfif" class="d-block w-100" alt="slide1">
					</div>
			</div> 
	   		<a class="carousel-control-prev" title="Previous Slide" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon"  aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
	  
			<a class="carousel-control-next" title="Next Slide" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	
	<!--NORTICE BOARD -->
	
	<div class="col-lg-4 col-md-12 col-sm-12">
		<div class="card" style="height:265px;background-color:#f7f7f7;">
			<div class="card-body">
				<h1 class="card-title">NOTICE BOARD</h1>
				  <marquee direction="up" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
				    <ul> 
					   <li id="card-text1" class="card-text"><a href="">Holiday Notice</a></li>
					   <li id="card-text1" class="card-text"><a href=""> Summer Vacation 2020</li>
					   <li id="card-text1" class="card-text"><a href=""> Holiday Notice</li>
					   <li id="card-text1" class="card-text"><a href=""> Summer Vacation 2020</li>
					   <li id="card-text1" class="card-text"><a href=""> Holiday Notice</li>
					   <li id="card-text1" class="card-text"><a href=""> Summer Vacation 2020</li>
					</ul>
				</marquee>
			</div>
		</div>
	</div>
	
 </div>
</div> 

<div class="container-fluid">
	<div class="row"  style="background-color:#c3edea;padding-top:15px">
		<div class="col-lg-8  col-sm-12">
		   <div class="row"> <!--ROW 1 -->
		      <div class="col-lg-6 col-sm-12">
					<div class="card" style="wdth:18 rem; background-color:#f7f7f7;"">
					    <img src="chairman.png" class="card-img-top" alt="chairmain">
						 <div class="card-body">
						  <p style="text-align:center;"><b>CHAIRMAN MESSAGE</b></p>
						  <p style="color:green;">" The real Education is a bridge between soul & mind "</p>
						  <p> Founder and Chairman Mr. Balaram Bishi is a young entrepreneur <a class="btn-primary-outline" href="chairman.php">Read More..</a></p>
						
						</div>
					</div>
					</div>
				<div class="col-lg-6 col-sm-12">
					<div class="card" style="height:524px; background-color:#f7f7f7;"">
						<img height="280" src="images/noimage.png" class="card-img-top" alt="md">
						 <div class="card-body">
						  <p style="text-align:center;"><b>MD MESSAGE</b></p>
						  <p style="color:green;">" Journey of thousand miles starts with on step"</p>
						  <p> Founder and Chairman Mr. Balaram Bishi is a young entrepreneur <a class="btn-primary-outline" href="md-message.php">Read More..</a></p>			
						
					</div>
				</div>
			</div>
        </div>			
			
		<div class="row"> 	<!--ROW 2 -->		
         	<div class="col-lg-6  col-sm-12">
					<div class="card" style="wdth:18 rem;  background-color:#f7f7f7;"">
						<img src="md.png" class="card-img-top" alt="principal">
						 <div class="card-body">
						  <p style="text-align:center;"><b>PRINCIPAL MESSAGE</b></p>
						  <p style="color:green;">"Education is a bridge between soul & mind "</p>
						  <p> Once Mahatma Gandhi said,  "If boys and girls do  <a class="btn-primary-outline" href="pri-message.php">Read More..</a></p>
						
					</div>
				</div>
			</div>
			<div class="col-lg-6  col-sm-12">
					<div class="card" style="height:524px;; background-color:#f7f7f7;"">
						<img src="ad.png" class="card-img-top" alt="academic director">
						 <div class="card-body">
						  <p style="text-align:center;"><b>ACADEMIC DIRECTOR MESSAGE</b></p>
						  <p style="color:green;">"The true test of An Educational Procedure is the Happiness of a child."</p>
						  <p> "The true test of An Educational Procedure is the Happiness of a child." <a class="btn-primary-outline" href="ad-message.php">Read More..</a></p>
						
					</div>
				</div>
			</div>
		</div>   
	</div> <!--PART 1 ENDS -->
	
   <div class="col-lg-4  col-sm-12">
     <div class="card" style="height:1050px; background-color:#f7f7f7;">
	 <br>
	    <center><h3>Welcome to  Vidyasagar Academy, Bargarh</h3></center>
		<br>
		
		<div class="card-body">
		 <p>Vidyasagar Academy(VSA) English Medium school, Bargarh, Odisha is a CBSE affliated Day boarding cum Residential 
		 school in bargarh currently offers education from pre-school to senior secondary Level.</p>
		 <p>Established in the year 
		 2006 with a mission to provide quality education,
		 VSA put a strong step tp ensure a whole new approach to learning atomosphere for the generation. 
		 The sublime blend of modern technology and Indian culture provides VS a unique and distinctive ambiance <a class="btn-primary-outline" href="pri-message.php">Read More..</a> </p>
			
			<center><br><br><img src="images/noimage.png" alt="e">
			<br><br><img src="images/noimage.png" alt="e"></center>
	
	</div>
	
	
   </div>
</div>   

</div>

</div>	


<?php  include 'footer.php' ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>