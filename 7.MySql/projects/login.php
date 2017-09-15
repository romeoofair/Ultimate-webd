<?php 

    if( isset($_POST['login']) ) {
        
        //build a function to validate data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        
        }
        
        // create variables
        //wrap the data with our function
        $formUser = validateFormData( $_POST['username'] );
        $formPass = validateFormData( $_POST['password'] );
        
        // connect to database
        include('connection.php');
        
        //create SQL query
        $query = "SELECT username, email, password From users WHERE username='$formUser'";
        
        //store the result
        $result = mysqli_query( $conn, $query );
        
        // verify if result is returned
        if( mysqli_num_rows($result) > 0 ) {
            
            //store basic user data in variables
            while( $row = mysqli_fetch_assoc($result) ) {
                $user       =$row['username'];
                $email      =$row['email'];
                $hashedPass =$row['password'];
            }
            
            //verify hashed password with the typed password
            if( password_verify( $formPass, $hashedPass ) ) {
                
                //correct login details!
                //start the session
                session_start();
                
                //store data in SESSION variables
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;
                
                header("Location: profile.php");
                
              } else {   //hashed passowrd dint verify
                
                //error message
                $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
              }
            
        } else { // there are no results in database
            
            $loginError = "<div class='alert alert-danger'>No such user in database.<a class='close' data-dismiss='alert'>&times;</a></div>";
            
        } 
        
        //close the mysql connection
        mysqli_close($conn);
    }
        
?>

<!DOCTYPE html>

<html>
    
    <head>
                
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title>Login</title>

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
            <h1>Login</h1>
            <p class = "lead">Use this form to log in to your account</p><hr>
            
            <?php echo $loginError; ?>
            
            <form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                
                <div class="form-group">
                    <label class="sr-only" for="login-username">Username</label>
                    <input type="text" id="login-username" class="form-control" name="username" placeholder="username">
                </div>
                
                <div class="form-group">
                    <label class="sr-only" for="login-password">Password</label>
                    <input type="password" id="login-password" class="form-control" name="password" placeholder="password"><br>
                </div>
                
                <button type="submit" class="btn btn-default" name="login">Login</button>
            
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

