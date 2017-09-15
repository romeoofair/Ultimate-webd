
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Client Adress Book</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body style="padding-top: 60px;">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="clients.php">CLIENT<strong>MANAGER</strong></a>
        </div>
          
        <?php
            if( $_SESSION['loggedInUser'] ) { // if user is logged in 
        ?>
        <div id="navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="clients.php">My Clients</a></li>
                <li><a href="add.php">Add Client</a></li>
            </ul>
                
            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text">Aloha, shan!</p>

                <li><a href="logout.php">Log out</a></li>
            </ul>   
            
            <?php
              } else {
            ?>    
            
            <ul class="nav navbar-nav navbar-right "> 
                <li><a href="index.php">Log in</a></li>
            </ul>  
            
            <?php
            }
            ?>
            
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
     
    <div class="container">

 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
