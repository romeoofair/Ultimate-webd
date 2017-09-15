<?php 

include('3.connection.php'); 

if( isset( $_POST["add"] ) ) {
        
        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
        
        $username = $email = $password = "";
    
        if ( !$_POST["username"] ) {
            $nameError = "Please enter your name <br>";
        } else {
            $username =validateFormData( $_POST["username"] );
        }
        
        if ( !$_POST["email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email =validateFormData( $_POST["email"] );
        }
    
        if ( !$_POST["password"] ) {
            $passwordError = "Please enter your password <br>";
        } else {
            $password =validateFormData( $_POST["password"] );
        }
        
        if( $username && $email && $password ) {
            
            $query = "INSERT INTO users (id, username, password, email, signup_date, biography)
            VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";

            if( mysqli_query( $conn,$query ) ) {
                        echo "<div class='alert alert-success'>New record in database!</div>";
            } else {
                        echo "Error: ".$query ."<br>" .mysqli_error($conn); 
            }
            
        }
        
        mysqli_close($conn);
            

    }


/*
MYSQL INSERT QUERY

INSERT INTO users (id, username, password, email, signup_date, biography)
VALUES (NULL, 'jacksonsmith', 'abc123', 'jack@son.com', CURRENT_TIMESTAMP, 'Hello! I'm Jackson. This is my bio.');

*/

?>

<!DOCTYPE html>

<html>
    
    <head>
                
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title>MySQL Insert</title>

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
            <h1>MySQL Insert</h1>
            
            
            
             <p class="text-danger">* Required fields</p>
             <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post"> 
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Username" name="username"><br><br>
                
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="email"><br><br>
                 
                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" placeholder="Password" name="password"><br><br>
                
                <input type="submit" name="add" value="Add Entry">
             </form>

        </div>
        
        <!--jQuery CDN-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    
    </body>

</html>

