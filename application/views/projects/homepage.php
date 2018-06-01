<!DOCTYPE html>
<html>
<head>
	<title>Shiny Lohani</title>
	<script type="text/javascript" src="js/scripts.js"></script>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#clockDisplay{
			border: 1px solid #000000;
			float: left;
			padding:10px;
			border-radius: 10px;
			margin: 7px 20px 0px 20px;
		}
		.headingg{
			clear: left;
			border-radius: 10px;
			border: 1px;
		}
		#one{
			text-align: center;
			font-family: Times New Roman; 
			font-size: 70px;
			color: #006a4e;
			
		}
		#two{
			font-size: 30px;
			text-align: center;
			font-family: Monotype Corsiva;
		}
		.pics{
			margin: 5px;
			padding: 10px;
		}
		.poll{
			font-size: 12px;
		}
		.copyrightt{
  background-color: black;
  text-align: center;
  color: white;
}
.affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
	</style>
</head>
<body onLoad="renderTime();">
	<hr>
	<div class="container">
		<div class="headingg">
			<div class="row">
				<div class="col-md-12 col-xs-12">
				<div class="col-md-9 col-xs-9">
					<div id="one"><b>Shiny Lohani</b></div>
					<p id="two"><b>Imparting and exchanging Information!</b></p>
				</div>
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive img-circle" src="Images/new.jpg">
				</div>
			</div>
		</div>
		</div><hr>
	</div>
	<div id="clockDisplay"></div>
	<div class="container">
	<div class="row">
		<nav class="navbar" data-spy="affix" data-offset-top="197">
 			<div class="container-fluid">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">&#9776;</button>
      				</div>
 						<div class="collapse navbar-collapse" id="myNavbar2">
 							<ul class="nav navbar-nav">
      						<li><a href="Article.html"><b>Home</b></a></li>
      						<li><a href="Article.html"><b>Issues</b></a></li>
      						<li><a href="Article.html"><b>Contact</b></a></li>
      						<li><a href="Article.html"><b>About</b></a></li>
      						<li class="glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal">Sign Up
      							<div class="modal fade" id="myModal" role="dialog">
   									<div class="modal-dialog">
    									<div class="modal-content">
        									<div class="modal-header">
          										<button type="button" class="close" data-dismiss="modal">&times;</button>
          										<h4 class="modal-title">Modal Header</h4>
        									</div>
        									<div class="modal-body">
          										<p>Some text in the modal.</p>
        									</div>
        									<div class="modal-footer">
          										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        									</div>
      									</div>
      								</div>
								</div></li>
      						<li><a href="Article.html"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>
      						<li><a href="Article.html"><span class="glyphicon glyphicon-thumbs-up"></span><b> Like</b></a></li>
      						<li><form class="form-inline" action="/action_page.php">
    							<div class="input-group">
      								<input type="text" class="form-control" placeholder="Search" name="search">
      									<div class="input-group-btn">
        									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      									</div>
    							</div>
  								</form></li>
    					</ul>
    				</div>
  					</div>
				</nav><hr>
			</div>
		</div>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    					<ol class="carousel-indicators">
      							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      							<li data-target="#myCarousel" data-slide-to="1"></li>
     						 	<li data-target="#myCarousel" data-slide-to="2"></li>
    					</ol>
    					<div class="carousel-inner">
							<div class="item active">
        						<img class="img-responsive" href="Article.html" src="Images/bioplastics.jpg" alt="Bioplastics">
       							<div class="carousel-caption">
          							<a href="#">Bioplastics</a>
          							<p>An Amazing Strategy</p>
        						</div>
      						</div>
							<div class="item">
        						<img class="img-responsive" href="Article.html" src="Images/driverless car.jpg" alt="Car">
        						<div class="carousel-caption">
          							<a href="#">Driverless Car</a>
          							<p>Ohh God!</p>
        						</div>
      						</div>
   							<div class="item">
        						<img class="img-responsive" href="Article.html" src="Images/cooking oil car.jpg" alt="Car">
        						<div class="carousel-caption">
          							<a href="#">Cooking oil car</a>
          							<p>An Eco-friendly one !</p>
        						</div>
      						</div>
  						</div>
   			 			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      						<span class="glyphicon glyphicon-chevron-left"></span>
      						<span class="sr-only">Previous</span>
    					</a>
    					<a class="right carousel-control" href="#myCarousel" data-slide="next">
      						<span class="glyphicon glyphicon-chevron-right"></span>
      						<span class="sr-only">Next</span>
    					</a>
  					</div>
		</div>
		<div class="col-md-4">
			 <div class="media">
    			<div class="media-left">
      				<img src="Images/bacteria.jpg" class="media-object" style="width:120px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Bacteria Discovered</a></h4>
      				<p>Discovery of some new useful bacteria</p>
    			</div>
  			</div><hr>
  			<div class="media">
    			<div class="media-left">
      				<img src="Images/solar roadways.jpg" class="media-object" style="width:120px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Solar Roadways</a></h4>
      				<p>Roads converted into solar power houses</p>
    			</div>
  			</div><hr>
  			<div class="media">
    			<div class="media-left">
      				<img src="Images/Ants.jpg" class="media-object" style="width:120px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Ants</a></h4>
      				<p>Better than Google !</p>
    			</div>
  			</div>
		</div>
		<div class="col-md-3">
			<img class="img-responsive" src="Images/planet.jpg" height="345" width="300">
		</div>
	</div>
</div><br>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-6">
					<img class="pics img-responsive" src="Images/solar plane.jpg" height="300" width="400">
				</div>
				<div class="col-md-6">
					<img class="pics img-responsive" src="Images/shoes.jpg"  height="300" width="400">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img class="pics img-responsive" src="Images/solar roadways.jpg"  height="300" width="400">
				</div>
				<div class="col-md-6">
					<img class="pics img-responsive" src="Images/solar roadways.jpg"  height="300" width="400">
				</div>
			</div><hr>
		</div>
		<div class="col-md-3">
			<img class="img-responsive" src="Images/new.jpg" height="180" width="300"><br>
			<br>
			<div class="card" style="width:300px">
    					<div class="card-body">
      						<h4 class="card-title"><b>Poll</b></h4>
      						<p> These are a few lines about what exactly the poll is about. For more details 
      						<a href="#">Click Here</a></p>
      						<form class="poll">
      						<input type="radio" name="poll" value="">You want to vote for Option 1. These are a few lines regarding this particular choice.
      						<br><br>
      						<input type="radio" name="poll" value="">You want to vote for Option 2. These are a few lines regarding this particular choice.
      						<br><br>
      						<input type="radio" name="poll" value="">You want to vote for Option 3. These are a few lines regarding this particular choice.
      						<br><br>
      						<input type="button" class="btn btn-success" value="Vote">
      						</form>
						</div><br>
  					</div>
  <div class="progress">
  	Option 1
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
  </div>
  <div class="progress">
  	Option 2
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50%
    </div>
  </div>
  <div class="progress">
  	Option 3
    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
  </div>
</div>

		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div id="myCarousel2" class="carousel slide" data-ride="carousel">
    					<ol class="carousel-indicators">
      							<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      							<li data-target="#myCarousel2" data-slide-to="1"></li>
     						 	<li data-target="#myCarousel2" data-slide-to="2"></li>
    					</ol>
    					<div class="carousel-inner">
							<div class="item active">
        						<img class="img-responsive" href="Article.html" src="Images/bioplastics.jpg" alt="Bioplastics">
       							<div class="carousel-caption">
          							<a href="#">Bioplastics</a>
          							<p>An Amazing Strategy</p>
        						</div>
      						</div>
							<div class="item">
        						<img class="img-responsive" href="Article.html" src="Images/driverless car.jpg" alt="Car">
        						<div class="carousel-caption">
          							<a href="#">Driverless Car</a>
          							<p>Ohh God!</p>
        						</div>
      						</div>
   							<div class="item">
        						<img class="img-responsive" href="Article.html" src="Images/cooking oil car.jpg" alt="Car">
        						<div class="carousel-caption">
          							<a href="#">Cooking oil car</a>
          							<p>An Eco-friendly one !</p>
        						</div>
      						</div>
  						</div>
   			 			<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      						<span class="glyphicon glyphicon-chevron-left"></span>
      						<span class="sr-only">Previous</span>
    					</a>
    					<a class="right carousel-control" href="#myCarousel2" data-slide="next">
      						<span class="glyphicon glyphicon-chevron-right"></span>
      						<span class="sr-only">Next</span>
    					</a>
  					</div>
		</div>
		<div class="col-md-6">
			<div class="media">
    			<div class="media-left">
      				<img src="Images/bacteria.jpg" class="media-object" style="width:150px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Bacteria Discovered</a></h4>
      				<p>Discovery of some new useful bacteria</p>
    			</div>
  			</div><hr>
  			<div class="media">
    			<div class="media-left">
      				<img src="Images/solar roadways.jpg" class="media-object" style="width:150px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Solar Roadways</a></h4>
      				<p>Roads converted into solar power houses</p>
    			</div>
  			</div><hr>
  			<div class="media">
    			<div class="media-left">
      				<img src="Images/Ants.jpg" class="media-object" style="width:150px">
    			</div>
    			<div class="media-body">
      				<h4 class="media-heading"><a href="Article.html">Ants</a></h4>
      				<p>Better than Google !</p>
    			</div>
  			</div>
		</div>
		
	</div>
	<hr>
</div>
<div class="container">
	<div class="row">
		<h2>Have a look on the latest scientific Videos!</h2><br>
		<div class="col-md-4">
			<video width="350" height="300" controls>
  				<source src="Images/video.mp4" type="video/mp4">
  			</video>
  			<h4>Like our fb page!</h4>
  			<button class="btn btn-primary"><a href="Article.html"><span class="glyphicon glyphicon-thumbs-up" style="color: white"><b> Like</b></span></a></button><br><br>
  			<h4>Download the App for latest notifications</h4>
  			<button class="btn btn-default"><a href="Article.html"><span><b>Google Play</b></span></a></button>

		</div>
		<div class="col-md-4">
			<video width="350" height="300" controls>
  				<source src="Images/video.mp4" type="video/mp4">
  			</video>
  			<h2>About</h2>
  			<p>This Website deals with all sorts of news related to the Scientific world. All the discoveries and inventions across the world are collected by us and presented here. Branch-wise classification of the research work has also been done keeping in mind the needs of the Users. </p>
		</div>
		<div class="col-md-4">
			<b>Index</b><hr>
			<div class="table-responsive">
			<table class="table">
				<tr><th>Branches</th><th>Branches</th></tr>
				<tr><td><a href="#">Physics</a></td><td><a href="#">Chemistry</a></td></tr>
				<tr><td><a href="#">Ecology</a></td><td><a href="#">Earth Science</a></td></tr>
				<tr><td><a href="#">Oceonography</a></td><td><a href="#">Geology</a></td></tr>
				<tr><td><a href="#">Astronomy</a></td><td><a href="#">Meteorology</a></td></tr>
				<tr><td><a href="#">Biology</a></td><td><a href="#">Zoology</a></td></tr>
				<tr><td><a href="#">Botany</a></td><td><a href="#">Human Biology</a></td></tr>
				<tr><td><a href="#">Social Science</a></td><td><a href="#">Applied Science</a></td></tr>
				<tr><td><a href="#">Mathematics</a></td><td><a href="#">Statistics</a></td></tr>
				<tr><td><a href="#">Logic</a></td><td><a href="#">Computer Science</a></td></tr>
			</table>
			</div>
		</div>
		
	</div><hr>
	
</div>
<div class="copyrightt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<p>© Shiny Lohani
                    	<br>
						This Website deals with all the latest scientific news - Developments, Discoveries and Inventions.
						<br><a href="http://mondaymorning.nitrkl.ac.in/">'Project by Monday Morning'</a>                   
                    </div>
                </div>
            </div>
        </div>
        <hr>
</body>
</html>