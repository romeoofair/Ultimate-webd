<?php
    define("TITLE","Honest Click Bait Headlines");
    include("functions.php");

     if( isset( $_POST["fix_submit"] ) ) {
         //call function
         checkForClickBait();
                      
     }
?>
<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title><?php echo TITLE ?></title>

        <!-- Bootstrap CSS -->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body>
        <div class=container>
            <h1><?php echo TITLE ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            
            <div class="row">
                
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest</button>
                    
                </form>
                
            </div>
            
            <?php
                if ( isset( $_POST["fix_submit"] ) ) {
                    
                    //get first value in array returned by checkForClickBait function
                    //store it in a variable
                    $clickBait = checkForClickBait()[0];
                    
                    //get second value in array returned by checkForClickBait function
                    //store it in a variable
                    $honestHeadline = checkForClickBait()[1];
                    
                    //call function
                    //pass two arguments in the function
                    displayHonestHeadline( $clickBait, $honestHeadline );
                    
                }
            ?>
            
            
        </div>
    
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </body>

</html>