<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once('logic.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>Samson Tse P2 - XKCD Password Genertor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	
	<style>
		h1 {
			text-align:center;
		}
	
		.container {
			width:80%;
			min-width:600px;
			margin-bottom:50px;
		}	
		
		img {
			display:block;
			margin:auto;
			width:50%;
		}
		
		.hero-unit {	
			padding:20px;
			margin-bottom:30px;
			font-size:18px;
			font-weight:200;
			line-height:30px;
			color:inherit;
			background-color:#eee;
			border-radius:6px;
		}
	</style>

</head>
<body>

  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>XKCD Password Generator</h1>
        </div>
      </div>
    </div>
		
    <div class="hero-unit">
	<h1><?php echo getXkcdPassword(); ?></h1>
    </div>


<form method="get" action="/">
    <div class="row">
      <div class="col-lg-12">
        <button type="button" class="btn btn-info btn-lg btn-block">GENERATE PASSWORD</button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default" style="margin-top:25px;">
          <div class="panel-heading">
            <h2 class="panel-title">Options</h2>
          </div>
          <div class="panel-body">
              <div class="form-group">
                <div class="checkbox">
                  <label><input type="checkbox"> Add a Number</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Add a Symbol</label>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
</form>

	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</body>
</html>
