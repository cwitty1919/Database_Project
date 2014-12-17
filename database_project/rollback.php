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
         <h3>Start Transaction then Rollback</h3>
            <?php
            include_once 'src/php/execute_query.php';
            $query = "START TRANSACTION;";
            execute_query($query, $conn);
            $query = "INSERT INTO Sales_Record(board_game_id, store_id, date, purchaser_name) VALUES (1, 1, '2016-11-11', 'James Baxter');";
            execute_query($query, $conn);
            echo "Showing transaction before rollback: <br>";
            $query = "SELECT * FROM Sales_Record;";
            $table = "Sales_Record";
            execute_and_print_query_with_tablename($query, $conn, $table);
            $query = "ROLLBACK;";
            execute_query($query, $conn);
            echo "Showing transaction after rollback: <br>";
            $query = "SELECT * FROM Sales_Record;";
            execute_and_print_query_with_tablename($query, $conn, $table);
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
