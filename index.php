<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Company</title>

    <!-- Bootstrap core css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--font awesome css (for icons)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("navbar.php"); ?>

		<!-- carousel -->
	  <div class="container">
	    <div id="theCarousel" class="carousel slide" data-ride="carousel">
	    	<ol class="carousel-indicators">
	    		<li data-target="#theCarousel" data-slide-to="0" class="active"></li>
	    		<li data-target="#theCarousel" data-slide-to="1"></li>
	    		<li data-target="#theCarousel" data-slide-to="2"></li>
	    		<li data-target="#theCarousel" data-slide-to="3"></li>
	    	</ol>

	    	<div class="carousel-inner" role="listbox">
	    		<!-- game 1 -->
	    		<div class="item active">
	    			<img src="http://placehold.it/1200x600/777777/ffffff">
	    			<div class="carousel-caption">
	    				<h1>Game 1</h1>
	    				<p>This is some kind of description <br> another description</p>
	    				<button type="button" class="btn btn-default">Check it out</button>
	    			</div>
	    		</div>

	    		<!-- game 2 -->
	    		<div class="item">
	    			<img src="http://placehold.it/1200x600/777777/ffffff">
	    			<div class="carousel-caption">
	    				<h1>Game 2</h1>
	    				<p>This is some kind of description <br> another description</p>      				<button type="button" class="btn btn-default">Check it out</button>
	    			</div>
	    		</div>

	    		<!-- game 3 -->
	    		<div class="item">
	    			<img src="http://placehold.it/1200x600/777777/ffffff">
	    			<div class="carousel-caption">
	    				<h1>Game 3</h1>
	    				<p>This is some kind of description <br> another description</p>
	    				<button type="button" class="btn btn-default">Check it out</button>
	    			</div>
	    		</div>

	    		<!-- game 4 -->
	    		<div class="item">
	    			<img src="http://placehold.it/1200x600/777777/ffffff">
	    			<div class="carousel-caption">
	    				<h1>Game 4</h1>
	    				<p>This is some kind of description <br> another description</p>
	    				<button type="button" class="btn btn-default">Check it out</button>
	    			</div>
	    		</div>

	    		<!-- Left and right controls -->
			    <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
	    	</div>
	    </div><!-- carousel -->
		</div>

		<!-- banner -->
		<div class="jumbotron">
			<div class="row text-center">
				<div class="col-lg-8 col-centered">
					<h2>Vancouver based company</h2>
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.</p>
					</div>
			</div>
		</div>

		<!-- content -->
		<div class="container-fluid main-content">
			<div class="row more-padding">
				<div class="col-lg-3 leading-col stuff-img">
					<img src="http://placehold.it/250x150">
					<div class="img-caption">
						<a href="about.html"><h3 class="text-center">About Us</a></h3>
					</div>
				</div>
				<div class="col-lg-3 stuff">
					<h3>Get to know us</h3>
					<p>Mumblecore skateboard 
					wolf portland, letterpress 
					butcher DIY messenger 
					bag squid schlitz 
					scenester church-key 
					seitan.</p>
				</div>
				<div class="col-lg-3 stuff-img">
					<img src="http://placehold.it/250x150">
					<div class="img-caption">
						<a href="careers.html"><h3 class="text-center">Careers</a></h3>
					</div>
				</div>
				<div class="col-lg-3 stuff">
					<h3>We're hiring</h3>
					<p>Mumblecore skateboard 
					wolf portland, letterpress 
					butcher DIY messenger 
					bag squid schlitz 
					scenester church-key 
					seitan.</p>
				</div>
			</div>
		</div>
		</div>

		<?php include("footer.php"); ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>