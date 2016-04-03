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
	
		<!-- banner -->
		<div class="jumbotron banner">
			<div class="row more-top-padding">
				<div class="col-lg-8 col-centered text-center">
					<h1>About Company</h1>
					<hr class="hr hr-160">
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan. Mumblecore skateboard 
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

			<!-- approach -->
			<div class="row more-top-padding">
				<div class="col-lg-12 text-center">
					<h2>Our Approach</h2>
				</div>
			</div>

			<div class="row some-top-padding">
				<div class="col-lg-4 col-lg-offset-2 text-center">
					<i class="fa fa-list approach-icon"></i>
					<h4>A professional, well defined process</h4>
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.</p>
				</div>
				<div class="col-lg-4 text-center">
					<i class="fa fa-hourglass-start approach-icon"></i>
					<h4>Keep learning, stay agile</h4>
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.</p>
				</div>
			</div>

			<div class="row some-top-padding">
				<div class="col-lg-12 text-center">
					<h2>Data Meets Design</h2>
				</div>
			</div>

			<div class="row some-top-padding">
				<div class="col-lg-4 col-lg-offset-2 text-center">
					<i class="fa fa-bar-chart approach-icon"></i>
					<h4>Analytics-informed design</h4>
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.</p>
				</div>
				<div class="col-lg-4 text-center">
					<i class="fa fa-calendar-check-o approach-icon"></i>
					<h4>Lifetime value</h4>
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.</p>
				</div>
			</div>

				


			<div class="row more-top-padding">
				<div class="col-lg-3 leading-col stuff-img">
					<img src="http://placehold.it/250x150">
					<div class="img-caption">
						<a href="team.html"><h3 class="text-center">Meet the team</a></h3>
					</div>
				</div>
				<div class="col-lg-3 stuff">
					<h3>Meet the team</h3>
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
						<a href="work.html"><h3 class="text-center">Our Work</a></h3>
					</div>
				</div>
				<div class="col-lg-3 stuff">
					<h3>Our Work</h3>
					<p>Mumblecore skateboard 
					wolf portland, letterpress 
					butcher DIY messenger 
					bag squid schlitz 
					scenester church-key 
					seitan.</p>
				</div>
			</div>
		</div>

		<?php include("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
	  $(document).ready(function(){
	    $("page-scroll").click(function(){
	        $("page-scroll").addClass("active");
	    });
		});
	</script>
  </body>
</html>