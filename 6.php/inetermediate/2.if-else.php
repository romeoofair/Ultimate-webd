<?php
    define( "TITLE","If, Else &amp; Elseif Statements" );           
?>

<!DOCTYPE html>

<html>
    
    <head>
                
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title><?php echo TITLE; ?></title>

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
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            
            <?php
                //IF expression is TRUE, do something
                //IF expression is FALSE, don't do anything
            
                $foo =99;
                $bar =79;
            
                if ( $foo > $bar ) {
                //code to execute if true
                echo "$foo is greater than $bar <br>"; 
                    
                //in case of single quotes
                //echo $foo .'is greater than '. $bar"; 
                }
            
                //ELSE
                    
                $currentlyListeningTo = "Barenaked Ladies";
                    
                if ( $currentlyListeningTo == "The Tragically Hip" ) {
                    
                    echo "You are listening to $currentlyListeningTo<br>";
                    
                } else {
                    
                    echo "taking a wild guess here, you're listening to $currentlyListeningTo <br>";
                    
                }
                    
                //ELSEIF
                    
                $favProgrammingLang = "PHP";
                    
                if ( $favProgrammingLang == "C++") {
                    
                    echo "Your favourite programming lang is $favProgrammingLang <br>";
                    
                } elseif ( $favProgrammingLang == "PHP" ) {
                    
                    echo "Good one! You dig $favProgrammingLang <br>";
                    
                } else {
                    
                    echo "Guess you don't like PHP or C++. Oh well... <br>";
                    
                } 
                
            ?>
            
        </div>
        
        <!--jQuery CDN-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    
    </body>

</html>