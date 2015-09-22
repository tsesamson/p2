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
		
		.bs-callout-info {
		  color:#5cb85c;
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
	<h1 class="bs-callout-info"><?php echo getXkcdPassword(); ?></h1>
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
                <label class="col-xs-12 control-label">Number of Words (Max 7)</label>
                <div class="col-xs-12">
                  <input type="text" class="form-control" name="numOfWords" maxlength="1" placeholder="Enter a number, default is 4" value="<?php echo (isset($_GET['numOfWords']) ? $_GET['numOfWords']:null); ?>">
                </div>
              </div>
              <div class="col-xs-4">
                <label class="col-xs-12 control-label">Include a Special Character</label>
                <div class="col-xs-12">
                  <input type="text" class="form-control" name="addSpecialChar" maxlength="1" placeholder="i.e. %, ^, $, #, @" value="<?php echo (isset($_GET['addSpecialChar']) ? $_GET['addSpecialChar']:null); ?>">
                </div>
              </div>
              <div class="col-xs-4">
                <label class="col-xs-12 control-label">Delimiter between words</label>
                <div class="col-xs-12">
                  <input type="text" class="form-control" name="delimiter" maxlength="1" placeholder="Enter a character, default is '-'" value="<?php echo (isset($_GET['delimiter']) ? $_GET['delimiter']:null); ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="addNum" <?php echo (isset($_GET['addNum'])  ? 'checked':''); ?>> Add a random number (0-9)</label>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="addSym" <?php echo (isset($_GET['addSym'])  ? 'checked':''); ?>> Add a random special character</label>
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

    <!-- What is xkcd password? -->
    <div class="row">
      <div class="col-xs-12">
        <h2>What is xkcd password?</h2>
        We were taught traditionally that the harder it is for a password to be remembered by a human, the harder it will be for a machine to crack. However, that notion is simply not true. As you can see from the comic below, it showing you that the password "Tr0ub4dor&amp;3" is technically much easier for a machine to crack than the password "correcthorsebatterystaple". On top of that, the latter password has a much better chance for a human to remember successfully. This claim can be justify by running calcuations on the <a href="https://en.wikipedia.org/wiki/Entropy_(information_theory)">entropy</a> for each of the password stated. Our generator above challenges the idea that the harder it is to remember a password, the safer it will be against cracking software. It doesn't have to be that way and this xkcd password generator can help you create much stronger passwords that you can also remember.
        <br/><br/>
        For more information check out <a href="http://xkcd.com/936/">xkcd passworth strength</a>.
      </div>
    </div>

    <!-- Image from xkcd.com -->
    <div class="row" style="padding-top:25px;">
      <div class="col-xs-12">
        <a href="http://xkcd.com/936/"><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password comic" /></a>
      </div>
    </div>

	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</body>
</html>
