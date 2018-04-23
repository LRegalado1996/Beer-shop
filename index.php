<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="...">
  <meta name="author" content="Lucas Regalado">
  <link rel="shortcut icon" href="img/favicon.ico">

  <title>Craft beer</title>

  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- My css -->
  <link rel="stylesheet" href="css\style.css">
</head>
<body>

  <!-- top bar -->
  <nav id="top-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> <i class="fas fa-beer"></i><strong> </strong>Craft beer</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Tipos de cerveza</a></li>
          <li><a href="#">Contáctenos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingresa</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Registrate</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- End of the top bar -->

  <!-- carrusel -->
  <div id="top-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#top-carousel" data-slide-to="1"></li>
      <li data-target="#top-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/cover-1.jpg" alt="cover-1">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="img/cover-2" alt="cover-2">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="img/cover-3" alt="cover-3">
        <div class="carousel-caption">

        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#top-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#top-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end of carrusel -->


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- JS de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- fontawesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!-- my js -->
  <script type="text/javascript" src="js/app.js"></script>

</script>
</body>
</html>
