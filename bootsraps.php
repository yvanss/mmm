<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico">-->


    <link rel="apple-touch-icon" sizes="180x180" href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\favicon\favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\favicon\favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\favicon\manifest.json">
    <link rel="mask-icon" href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\favicon\safari-pinned-tab.svg" color="#101012">
    <meta name="theme-color" content="#ffffff">


    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\css\ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR

   <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
================================================== -->
  <body>

    <?php
            echo '<p>Hello World</p>';
    ?>


    <div style="background-color:black;">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Nko'o</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
   
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide center-block" src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\proverb3.jpg" alt="First slide" align="center;">
            <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide center-block" src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\proverb3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <p>ߓߍ߯ ߦߋ߫ ߣߛߌ߬ߓߊ߫ ߓߙߊߣߍ߲߫ ߜߍ߲߬ߜߍ߲߬ ߠߴߊ߬ ߞߣߐߘߐ߫ ߟߋ߬ ߞߊ߲߬</p>      
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">



      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\marketing.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">


      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\marketing.jpg">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\js\bootstrap.min.js"><\/script>')</script>
    <script src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! 
    <script src="../../assets/js/vendor/holder.min.js"></script> this line -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="C:\Users\Yvan Ngassa\Documents\0 projects\websites\bootstrap-3.3.7-dist\js\ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
