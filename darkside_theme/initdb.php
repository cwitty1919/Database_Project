<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Database Project Chris Wittenberg, Michael Asnes</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Boardgame Database</a>
    	</div>
       </div>
    </div>
      
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="initdb.html">Initialize the database</a></li>
              <li><a href="#section2">Queries 2</a></li>
              <li><a href="#section3">Queries 3</a></li>              
            </ul>
           </div>
        </div>
  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
          <h1 id="section1">Database Project</h1>
          <?php include 'initdb_instructions.php'; ?>
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->


<div id="footer"><!--footer-->
  <div class="container">
      	<div class="row">
          <ul class="list-unstyled">
            <li class="col-sm-4 col-xs-6">
              <a href="#">About</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Contact</a>
            </li>
          </ul>
		</div><!--/row-->

  </div><!--/container-->
</div><!--/footer-->

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>