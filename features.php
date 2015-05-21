<html>
<head>
	<title>Twitter Bootstrap III</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    
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



<!-- ACCORDION -->

<br><br>

<div class="container">

 <div class="row">

 <div class="col-md-12">

 <h2>Accordion<h2>
  <hr/>

  <div class="panel-group" id="accordion">

    <div class="panel panel-primary">

    <div class="panel-heading">

    <h4 class="panel-title">

    <a data-toggle="collapse" data-parent="#accordion" href="#section1">
        Question 1
    </a>
    </h4>
    </div>

     <div class="panel-collapse collapse" id="section1">
 
     <div class="panel-body">
     This will contain some text.
     </div>    

  </div>

  <div class="panel panel-success">

    <div class="panel-heading">

    <h4 class="panel-title">

    <a data-toggle="collapse" data-parent="#accordion" href="#section2">
        Question 2
    </a>
    </h4>
    </div>

     <div class="panel-collapse collapse" id="section2">
 
     <div class="panel-body">
     This will contain some text.
     </div>    

  </div>


<div class="panel panel-danger">

    <div class="panel-heading">

    <h4 class="panel-title">

    <a data-toggle="collapse" data-parent="#accordion" href="#section3">
        Question 3
    </a>
    </h4>
    </div>

     <div class="panel-collapse collapse in" id="section3">
 
     <div class="panel-body">
     This will contain some text.
     </div>    

  </div>




 </div>

 </div>

</div>



<!-- TABS -->


<div class="container">

<div class="row">

 <div class="col-md-12">

<h2>Tabs</h2>
<hr/>

<ul class="nav nav-tabs">

<li class="active"><a href="#tab1" data-toggle="tab">Section</a></li>
<li><a href="#tab2" data-toggle="tab">Section 2</a></li>
<li><a href="#tab3" data-toggle="tab">Section 3</a></li>


</ul>

<!--TAB SECTIONS -->


<div class="tab-content">

 <div class="tab-pane active" id="tab1">

 This is the first tab..This is the first tab.
 This is the first tab...This is the first tab.
 This is the first tab...This is the first tab.

 </div>

 <div class="tab-pane " id="tab2">
   This is the second tab..This is the second tab.
 This is the second tab...This is the second tab.
 This is the second tab...This is the second tab.
 </div>
  <div class="tab-pane " id="tab3">
     This is the third tab..This is the third tab.
 This is the third tab...This is the third tab.
 This is the third tab...This is the third tab.
</div>


 </div>

 </div>

</div>


</div>

 </div>

</div>

<!--TOOLTIPS AND POPOVERS-->

  <div class="container">

  <div class="row">

  <div class="col-md-12">

  <h2>Tooltips</h2>

   <hr/>

    <a class="btn btn-primary" id="myToolTip" href="#" data-toggle="tooltip" title="My Tooltip Text" data-placement="right"> Tooltip</a>

  </div>

  </div>

  <div class="row">

  <div class="col-md-12">

  <h2>Popover</h2>

   <hr/>

  <button id= "myPopOver" class="btn btn-danger" data-toggle="popover" title="My Title" data-content="this will be the body text">
    Popover
  </button>    

  </div>

  </div>


   </div>

<hr/>

<!--CONTENT HOVER-->

 <div class="container">

 <div class="row">

 <div class="col-md-3">

 <img id="d1" src="img/img4.jpg"/>
  <div class="contenthover">
    <h3>Lorem ipsum dolor</h3>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pulvinar ante quis augue lobortis volutpat. </p>
    <p><a href="#" class="mybutton">Lorem ipsum</a></p>
</div>
 </div>

 <div class="col-md-3 col-md-offset-1">

 <img id="d2" src="img/img4.jpg"/>
  <div class="contenthover">
    <h3>Lorem ipsum dolor</h3>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pulvinar ante quis augue lobortis volutpat. </p>
    <p><a href="#" class="mybutton">Lorem ipsum</a></p>
</div>
 </div>


<div class="col-md-3 col-md-offset-1">

 <img id="d3" src="img/img4.jpg"/>
  <div class="contenthover">
    <h3>Lorem ipsum dolor</h3>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pulvinar ante quis augue lobortis volutpat. </p>
    <p><a href="#" class="mybutton">Lorem ipsum</a></p>
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
<script src="js/contentHover.js"></script>



<script type="text/javascript">

  $('document').ready(function(){

    $('#myToolTip').tooltip();


    $('#myPopOver').popover();

    $('#d1').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
    });

    $('#d2').contenthover({
    effect:'slide',
    slide_speed:300,
    overlay_background:'#000',
    overlay_opacity:0.8
});

$('#d3').contenthover({
    overlay_width:270,
    overlay_height:180,
    effect:'slide',
    slide_direction:'right',
    overlay_x_position:'right',
    overlay_y_position:'center',
    overlay_background:'#000',
    overlay_opacity:0.8
});

  });

</script>

</body>
</html>