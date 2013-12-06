<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="web/css/bootstrap.css">
        
        <link rel="stylesheet" href="web/css/main.css">

        <script src="web/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">MyOpenList</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a  onclick="getLoginForm()" href="#home">Profile</a></li>
                        <li><a href="#">all The Top </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Lists <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Movies</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Musics</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Books</a></li>
                              
                       
                           
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#contact" onclick="getContactForm()">Contact</a></li>
                    </ul>
                    <form class="navbar-form navbar-right hidden-sm " role="search">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    

                </div><!--/.navbar-collapse -->

            </div><!--/.navbar-collapse -->
        </div>
    </div>


  <div class="container">
      <!-- Example row of columns -->

        <div class="row">
        
       
                 <form class="navbar-form navbar-right visible-sm " role="search">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                    </form>
        </div>
  <div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Genre</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </tbody>
</table>
    </div>
</div>
    <!-- /container -->        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="web/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="web/js/vendor/bootstrap.min.js"></script>
    <script src="web/js/main.js"></script>
</body>
</html>