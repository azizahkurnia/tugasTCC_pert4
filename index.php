<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/logo.png"/>
  <title>Dota 2 Online Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="barang_tampil.php">Product <span class="sr-only">(current)</span></a></li>
        <li><a href="about.html">About</a></li>
        </li>
      </ul>
      <form class="navbar-form navbar-right" action="barang_tampil.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="nama_barang">
        </div>
        <button type="submit" class="btn btn-default" value="CARI"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="log-in/login1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/car/es1.jpg"  alt="Earthshaker">
	  <div class="carousel-caption">
          <h3>Earthshaker</h3>
          <p>Deep Magma</p>
        </div>      
    </div>

    <div class="item">
      <img src="img/car/sniper1.jpg" alt="Sniper">
	  <div class="carousel-caption">
          <h3>Sniper</h3>
          <p>Manchine Gun</p>
        </div>      
    </div>
	
	<div class="item">
      <img src="img/car/arclc.jpg" alt="Sniper">
	  <div class="carousel-caption">
          <h3>Legion Commander</h3>
          <p>Blades of Vormos</p>
        </div>      
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<div class="container text-center">    
  <h3>Hero Lore</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="jug.html"><img src="img/lore/jugger.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Juggernaut</p>
    </div>

    <div class="col-sm-4"> 
     <a href="es.html"> <img src="img/lore/es.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Earthsheaker</p>    
    </div>
    <div class="col-sm-4"> 
     <a href="sb.html"> <img src="img/lore/sb.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Sprint Breaker</p>    
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p><font color=white>&copy Dota 2 Online Store</color></p>
</footer>
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('service-worker.js')
    .then(function(registration) {
      console.log('Registered:', registration);
    })
    .catch(function(error) {
      console.log('Registration failed: ', error);
    });
  }
  </script>
</body>
</html>