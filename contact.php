<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Company</title>

    <!-- Bootstrap core css-->
    

    <!--font awesome css (for icons)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
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

		<!-- team description -->
		<div class="jumbotron">
			<div class="row more-top-padding some-bottom-padding">
				<div class="col-lg-8 col-centered text-center">
					<h1>We've love to hear from you</h1>
					<hr class="hr hr-dark hr-160">
					<p>Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag squid schlitz 
						scenester church-key 
						seitan.Mumblecore skateboard 
						wolf portland, letterpress 
						butcher DIY messenger 
						bag.</p>
					</div>
			</div>
		</div>

		<!-- call us -->
		<div class="jumbotron jumbotron-white">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-8 col-xs-12 little-top-padding text-center">
					<i class="fa fa-phone fa-3x"></i>
					<h2>Give us a call</h2>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
					<img class="round" src="http://placehold.it/150x150">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-left">
					<h3>Name</h3>
					<p>123-456-7890</p>	
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
					<img class="round" src="http://placehold.it/150x150">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-left">
					<h3>Name</h3>
					<p>123-456-7890</p>
				</div>
			</div>
		</div>

		<!-- content -->
		<div class="container-fluid main-content">

			<div class="row more-top-padding more-bottom-padding">
				<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-centered">
					<h2 class="text-center">Let's chat</h2>
				  <form role="form" action="formmail.php">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				    </div>
				    <div class="form-group">
				      <label for="phone">Phone number:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter phone number">
				    </div>
				    <div class="form-group">
						  <label for="sel1">Best time to reach you:</label>
						  <select class="form-control" id="sel1">
						    <option>Morning</option>
						    <option>Afternoon</option>
						    <option>Late Afternoon</option>
						    <option>Evening</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="msg">Message:</label>
						  <textarea class="form-control" rows="5" id="msg"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-default">Send Message</button>
						</div>
				  </form>
				</div>	
			</div> <!-- form -->				
			
		</div><!-- end content -->

		<!-- address -->
		<div class="jumbotron">
			<div class="row some-top-padding some-bottom-padding">
				<div class="col-lg-12 col-centered text-center address">
					<div class="col-lg-6">
						<img src="http://placehold.it/395x272/777777/ffffff">
					</div>
					<div class="col-lg-6 text-left">
						<h2>Where to find us?</h2><br>
						<p>1234 Example St.</p>
						<p>Vancouver, BC</p>
						<p>V1W XGY</p>
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