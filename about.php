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


<!-- JUMBOTRON -->

<br><br><br><br>

 <div class="container">

 <div class="row">

 <div class="col-md-12">

 <div class="jumbotron">

 <h1>I am awesome.</h1>
   <p>You can type anything you want to </p>
   <a href="#" class="btn btn-success">You should want more</a>

 </div>

 </div>

 </div>

 </div>


<!-- Image Classes-->


<div class="container">

<div class="row">

 <div class="col-md-12">

  <h2>Image Classes</h2> <hr>

 </div>

</div>

<div class="row">

 <div class="col-md-4">

  <img class="img-rounded" src="img/img4.jpg" />

 </div>

  <div class="col-md-4">

  <img class="img-circle" src="img/img4.jpg" />

 </div>

  <div class="col-md-4">

  <img class="img-thumbnail" src="img/img4.jpg" />

 </div>

</div>


</div>


<!-- THUMBNAILS-->

<div class="container">

<div class="row">

 <div class="col-md-12">

  <h2>Thumbnails</h2> <hr>

 </div>

</div>

<div class="row">

 <div class="col-md-3">

   <a href="#" class="thumbnail">
     <img src="img/img4.jpg">
   </a>

 </div>

 <div class="col-md-3">

   <a href="#" class="thumbnail">
     <img src="img/img4.jpg">
   </a>

 </div>

 <div class="col-md-3">

   <a href="#" class="thumbnail">
     <img src="img/img4.jpg">
   </a>

 </div>

 <div class="col-md-3">

   <a href="#" class="thumbnail">
     <img src="img/img4.jpg">
   </a>

 </div>


</div>


</div>


<!-- Custom Thumbnail-->

<!-- THUMBNAILS-->

<div class="container">

<div class="row">

 <div class="col-md-12">

  <h2>Custom Thumbnails</h2> <hr>

 </div>

</div>

<div class="row">

 <div class="col-md-3">

   <a href="#" class="thumbnail">
     <img src="img/img4.jpg">
   </a>
   <div class="caption">

<h3>First heading.</h3>
<p>Fuck it.</p>
<a href="#" class="btn btn-success">Live</a>
   </div>
 </div>

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