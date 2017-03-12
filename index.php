<?php
  $host="sql207.byethost7.com"
  $dbuser="b7_19688008"
  $pass="MLAwoeho4d."
  $dbname="b7_19688008_user_db"
$conn=msqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
  die("Connection Failed" . mysqli_connect_error());
}
else
{
  echo "Connected to database {$dbname}"
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width-device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="https://maxcdn
.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">


<title>Project</title>

</head>
<body>


  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top nav-tabs">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive logo">
      </div>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="article.html">Article</a></li>
        <li><a href="#">Contact</a></li>

      </ul>
      <form class=" navbar-form navbar-left" role="search">
      <div class="form-group form-group-sm">
        <input type="text" class="form-control" placeholder="Tutorials" />
      </div>
      <button type="submit" class="btn btn-default btn-sm">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="rightal" data-target="#" data-toggle=""><a href="#">Sign up </a></li>
        <li class="login" data-target="#loginmodal" data-toggle="modal"><a href="#">Login</a></li>

      </ul>
    </div>
  </div>
  </nav>
  <div class="modal" id="loginmodal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="model-header">
          <button class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="inputUserName">Username</label>
              <input class="form-control" placeholder="Login username" type="text" id="inputUserName">

              </input>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" placeholder="Login Password" id="inputPassword">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Login</button>
          <button class="btn btn-primary" data-dismiss="modal">close</button>

        </div>
      </div>
    </div>

  </div>

  <div class="container">

    <div class="content">
      <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
<div class="hide"></div>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-12 ">
            <div class="first">
              <h3> Introduction.</h3>
              <p>This is a presentation page about my hork.</p>
            </div>

          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="second">
              <img src="img/news.png" class="img-responsive" id="up" alt="news immage" />
              <br />
              <h3>New projects</h3>
              <p>New projects are waiting to complete and I am happy to share my work with you.</p>
            </div>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="col-md-12 third">



              <div class="carouselsize pull-right">
                <div id="slidew" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="slidew" data-slide-to="0" class="active"></li>
                    <li data-target="slidew" data-slide-to="1"></li>
                    <li data-target="slidew" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="img/1.png" alt="1" class="img-responsive">
                      <div class="carousel-caption">
                        <h3>Text 1</h3>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/2.png" alt="1" class="img-responsive">
                      <div class="carousel-caption">
                        <h3>Text 2</h3>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/3.png" alt="1" class="img-responsive">
                      <div class="carousel-caption">
                        <h3>Text 3</h3>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#slidew" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#slidew" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
                </div>



                <h3>Abraham</h3>



                  <p>This is first job i've done on freecampcode.com.</p>
                  <p>This is a trubite page for Abraham Lincoln and i used html, css and little bootstrap.
                    <button class="btn btn-danger btn-sm">
                      <a href="projects.html">more..</a>
                    </button>
                  </p>

                  <hr>
                  <h3>Tricks and tips</h3>
                <p>This is first job i've done on google blogger.com.
                    </p>
                    <p>This is a blogger page where i present a lot of trick, tips and tutorials about software, internet, life and more.
                      <button class="btn btn-danger btn-sm">
                        <a href="projects.html">more..</a>
                      </button>
                    </p><hr>
                    <h3>Portofolio</h3>

                    <p>The second project on freecampcode.com
                    </p>
                    <p>This is a blogger page where i present a lot of trick, tips and tutorials about software, internet, life and more.
                      <button class="btn btn-danger btn-sm">
                        <a href="projects.html">more..</a>
                      </button>
                    </p>



            </div><!--Closing bodyr -->
          </div><!--closing md-5-->


    </div> <!--Close content -->
  </div>
<div class="footer">

    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-8">
      <p class="text-right"><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2017</p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
      <p class="text-center">Design by <span>O</span>G.</p>
      </div>
   </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
