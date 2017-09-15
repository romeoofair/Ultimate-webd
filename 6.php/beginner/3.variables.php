<?php
    define( "TITLE", "PHP Variables & Constants" );
?>

<!DOCTYPE html>

<html>
    
    <head>
        <title><?php echo TITLE; ?></title>
    </head>

    <body>
        
        <?php
        
            //VARIABLES    
        
            // BOOLEAN: A boolean variable specifies a value of true or false
            $loggedIn = true;
        
            //INTEGER: An integer variable is any whole number
            $myAge =21;
            
            // FLOATING POINT: Usually a fractional number, with a decimal
            $totalPrice = 146.28;
        
            // STRING: Simple text that must be enclosed within double quotations " " or single quotations ' '
            $fullName = "Daniel Joe";
        
            // DISPLAY VARIABLES ON SCREEN
            echo "Hello, my name is $fullName and i m $myAge years old!";
        
            //CONSTANTS
                
            echo TITLE;
        ?>
    
    </body>

</html>