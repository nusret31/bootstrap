<html>
<head>
	<title>Twitter Bootstrap III</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>


<body>

<!--Fixes with nav bar with dropdown menu -->

<div class="navbar navbar-default navbar-fixed-top">

	<div class="container">
       <div class="navbar-header">
  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  		</button>

  		<a href="#" class="navbar-brand">Pogosoft</a>

        </div>

 		<div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="features.php">Features</a></li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pictures <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li><a href="#">1920</a></li>
                    <li><a href="#">1950</a></li>
                    <li><a href="#">1960</a></li>
                    <li><a href="#">1990</a></li>
                 </ul>
              </li>
             <li><a href="contact.php">Contact</a></li>
            </ul>

 		</div>

	</div>

</div>



<!------------------CAROUSEL------------------ -->

  <div id="myCarousel" class="carousel slide">

  <ol class="carousel-indicators">
  	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"> </li>
  	<li data-target="#myCarousel" data-slide-to="2"> </li>
  </ol>

   <div class="carousel-inner">

   <div class="item active">

   <img src="img/img1.jpg"/>
   <div class="container">
    <div class="carousel-caption">
      <h1>Black + White Cinematography</h1>
      <p>Satantango</p>
      <p><a class="btn btn-large btn-primary">Sign Up</a></p>
   </div>
   </div>
   </div>

   <div class="item">

   <img src="img/img2.jpg"/>
   <div class="container">
    <div class="carousel-caption">
      <h1>Black + White Cinematography</h1>
      <p>The Better Angels.</p>
      <p><a class="btn btn-large btn-primary">Sign Up</a></p>
   </div>
   </div>
   </div>

   <div class="item">

   <img src="img/img3.jpg"/>
   <div class="container">
    <div class="carousel-caption">
      <h1>Black + White Cinematography</h1>
      <p>Frances Ha.</p>
      <p><a class="btn btn-large btn-primary">Sign Up</a></p>
   </div>
   </div>
   </div>

  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

 </div>


<!--GRID -->


  <div class="container">

   <div class="row">

     <div class="col-md-4">
     <h1>First Heading</h1>
     <p>The text will go here.</p>
      </div>

       <div class="col-md-4">
     <h1>Second Heading</h1>
     <p>The text will go here.</p>
      </div>

       <div class="col-md-4">
     <h1>Third Heading</h1>
     <p>The text will go here.</p>
      </div>

   </div>

  </div>


  </div>


<!--FONT AWESOME ICONS-->

<div class = "container">

 <div class="row">
   <div class="col-md-12">


   <div class="well">
   	 <a href="#"> <i class="largeIcon fa fa-facebook fa-2x"></i> </a>

   	  <a href="#"> <i class="largeIcon fa fa-twitter fa-2x"></i> </a>

   	  <a href="#"> <i class="largeIcon fa fa-android fa-2x"></i> </a>
   	  <a href="#"> <i class="largeIcon fa fa-skype fa-2x"></i> </a>
   	  <a href="#"> <i class="largeIcon fa fa-instagram fa-2x"></i> </a>
   	  <a href="#"> <i class="largeIcon fa fa-youtube fa-2x"></i> </a> 
   </div>

</div>
</div>
</div>


<!-- FOOTER AND MODAL-->

 	<div class="container">
 	  <div class="row">
 	   	<div class="col-md-12">

 	   	 <hr/>

 	   	 <p> Copyright &copy; Pogosoft.
 	   	   <a data-toggle="modal" href="#myModal">Terms and Conditions</a>
 	   	  </p>

 	   	  <!-- MODAL -->
 	   	    <div class= "modal fade" id="myModal" tabinex="-1" role="dialog" aria-hidden="true">
 	   	    	<div class="modal-dialog">
 					<div class="modal-content">
 					<div class="modal-header">
 						<h2>Terms and conditions</h2>
 					</div>
 					<div class="modal-body">
 						<p>The text will go here</p>
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
 					</div>
 					</div>
 	   	    	</div>
 	   	    </div>

 	</div>
  </div>
 </div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>