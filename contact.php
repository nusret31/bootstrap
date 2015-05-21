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
             <li><a href="#">Home</a></li>
             <li><a href="#">About</a></li>

             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pictures <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li><a href="#">1920</a></li>
                    <li><a href="#">1950</a></li>
                    <li><a href="#">1960</a></li>
                    <li><a href="#">1990</a></li>
                 </ul>
              </li>
             <li><a href="#">Contact</a></li>
            </ul>

 		</div>

	</div>

</div>



<!-- FORM -->

<br><br><br>

<div class="container">
<div class="row">
 
  <div class="col-md-12">

  <h1>Contact Form</h1>
   <br>
  <form class="form-horizontal">

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Enter Name..."/>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" placeholder="Enter email..."/>
    </div>
  </div>

  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Message:</label>
    <div class="col-sm-4">
      <textarea class="form-control" rows="3" placeholder="Enter message"></textarea>
    </div>
  </div>


   <div class="form-group">
    <label for="website" class="col-sm-2 control-label">Favorite Websites:</label>
    <div class="col-sm-4">
      <label class="checkbox-inline">
        <input type="checkbox" value="option1" /> Youtube
      </label>

      <label class="checkbox-inline">
        <input type="checkbox" value="option2" /> Google
      </label>

      <label class="checkbox-inline">
        <input type="checkbox" value="option3" /> Twitter
      </label>

    </div>
  </div>

    <div class="form-group">
    <label for="gender" class="col-sm-2 control-label">Gender:</label>
    <div class="col-sm-4">

      <label class="radio-inline">
        <input type="radio" name="genderRadio" value="option1" /> Male
      </label>

      <label class="radio-inline">
        <input type="radio" name="genderRadio" value="option2" /> Female
      </label>
      </div>
      </div>

<!-- -->

    <div class="form-group">
    <label for="city" class="col-sm-2 control-label">City:</label>
    <div class="col-sm-4">

      <select class="form-control">
        <option>London</option>
        <option>Birmingham</option>
        <option>Liverpool</option>
        <option>Manchester</option>
      </select>


    </div>
  </div>
<!-- -->

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">

      <button type="submit" class="btn btn-primary">
        Submit
      </button>

       <button type="reset" class="btn btn-default">
        Clear
      </button>

    </div>
  </div>
 

  </form>
 

  </div>

 </div>
</div>


<!-- FORM -->




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