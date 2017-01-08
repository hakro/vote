<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Voting app</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.skale-5.com" style="padding-top: 6px;">
        <img alt="SK5" src="img/sk5.png">
      </a>
      <p class="navbar-text">Vote for your favorite Artist - We're now on the container : <strong><?php echo shell_exec("cat /etc/hostname");?></strong></p>
    </div>
  </div>
</nav>
<div class="container">
    <div class="jumbotron">
	<h2>Vote for your favorite</h2>
	<p>This is a small website to showcase Docker fondamentals with its clustering mode : Docker Swarm.
       Vote to show how Docker is cool</p>
    </div>
    <div class="col-md-3">&nbsp;</div>
	<div class="row">
	  <div class="col-md-2">
	    <div class="thumbnail">
	      <img src="img/mario.jpeg">
	      <div class="caption">
		<h3>Emily</h3>
		<p><a href="thanks.php" class="btn btn-success" role="button">Vote</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-2">
	    <div class="thumbnail">
	      <img src="img/mario.jpeg">
	      <div class="caption">
		<h3>Tori</h3>
		<p><a href="thanks.php" class="btn btn-primary" role="button">Vote</a></p>
	      </div>
	    </div>
	  </div>
<!--
	  <div class="col-md-2">
	    <div class="thumbnail">
	      <img src="img/mario.jpeg">
	      <div class="caption">
		<h3>Aletta</h3>
		<p><a href="thanks.php" class="btn btn-warning" role="button">Vote</a></p>
	      </div>
	    </div>
	  </div>
-->

    </div>
</div>
</body>
</html>
