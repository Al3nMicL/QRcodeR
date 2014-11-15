<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">

    <title>QRcode generator</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/twbs_tron_template/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/twbs_tron_template/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">QRcodeR</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input placeholder="Username" class="form-control" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Password" class="form-control" type="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-4">
          <h2 class="lead">Scan code</h2>
          
          <img src="<?php echo 'incl/qrcode.php?'.'input='.$_GET['input'] ?>" alt="generated code" width="240px" height="240px"/>
          <p><a class="btn btn-xs btn-info" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-sm-8">
          <br />
          <div id="input" class="panel panel-default col-md-8">
      		 <div class="panel-heading" style="text-align: center"> 
      		   <b class="panel-title">Input parameters</b>
      		 </div>
      		  <div class="panel-body">	    		
		  		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
		  			<fieldset>
		  			<small>type text or url below, then click generate</small>
		  			<label for="input">
		  				<textarea style="resize: none" name="input" maxlength=140 rows="3" cols="40" required></textarea>
		  			</label>
		  			<br />
		  			
		  			</fieldset>
		  			<br />
		  			<div style="text-align: center">
		  				<input class="btn btn-sm btn-primary" type="submit" value="Generate" />
		  				<input class="btn btn-sm btn-default" type="reset" value="reset" />
		  			</div>
		  		</form>
		  	 </div> 	
          </div id="input">
        </div class="col-sm-8">
        
      </div>

      <hr>

      <footer>
       <!-- <p>© Company 2014</p> -->
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="asset/twbs_tron_template/jquery.js"></script>
    <script src="asset/twbs_tron_template/bootstrap.js"></script>
  

</body></html>
