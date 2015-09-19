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
        <button type="submit" class="btn btn-info btn-lg btn-block">GENERATE PASSWORD</button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default" style="margin-top:25px;">
          <div class="panel-heading">
            <h2 class="panel-title">Options</h2>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-4">
                <label class="col-xs-12 control-label" for="formGroupInputLarge">Number of Words (Max 7)</label>
                <div class="col-xs-12">
                  <input type="text" class="form-control" name="numOfWords" value="<?php echo (isset($_GET['numOfWords']) ? $_GET['numOfWords']:'4'); ?>">
                </div>
              </div>
              <div class="col-xs-4">
                <label class="col-xs-12 control-label" for="formGroupInputLarge">Include a Special Character</label>
                <div class="col-xs-12">
                  <input <input type="text" class="form-control" name="addSpecialChar" value="<?php echo (isset($_GET['addSpecialChar']) ? $_GET['addSpecialChar']:null); ?>">
                </div>
              </div>
              <div class="col-xs-4">
                <label class="col-xs-12 control-label" for="formGroupInputLarge">Delimiter between words</label>
                <div class="col-xs-12">
                  <input <input type="text" class="form-control" name="delimiter" value="<?php echo (isset($_GET['delimiter']) ? $_GET['delimiter']:'-'); ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="addNum" <?php echo (isset($_GET['addNum'])  ? 'checked':''); ?>> Add a Number</label>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="addSym" <?php echo (isset($_GET['addSym'])  ? 'checked':''); ?>> Add a Symbol</label>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="isProperCase" <?php echo (isset($_GET['isProperCase'])  ? 'checked':''); ?>> Proper Case</label>
                </div>
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
