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
         <script src="jquery-2.1.1.min.js"></script>
            <script>
            $(function(){
               $("#sidebar").load("sidebar.html");
            });
            </script>
         <div id="sidebar"></div>

        <!-- main area -->
        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
          <h1 id="section1">Database Project</h1>
          <h3>SELECT FROM WHERE</h3>
            <?php
            include_once 'src/execute_query.php';
            $query = "SELECT * FROM Board_Games WHERE number_of_players >= 6;";
            execute_and_print_query($query, $conn);
            ?>
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->

   <!--footer-->
   <script src="jquery-2.1.1.min.js"></script>
      <script>
      $(function(){
         $("#footer").load("footer.html");
      });
      </script>
   <div id="footer">
   </div><!--/footer-->

  </div><!--/container-->
</div><!--/footer-->

   <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>
