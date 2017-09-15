<?php
session_start();

include('includes/functions.php');

//if login form was submitted
if( isset( $_POST['login'] ) ) {
    
    //create variables
    //wrap data with validate function
    $formEmail = validateFormData( $_POST['email'] );
    $formPass  = validateFormData( $_POST['password'] );
    
    // connect to database
    include('includes/connection.php');
    
    //create query
    $query = "SELECT name, password FROM users WHERE email='$formEmail'";
    
    //store the result
    $result = mysqli_query( $conn, $query );
    
    //verify if result is returned
    if( mysqli_num_rows($result) > 0 ) {
        
        //store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $name   =$row['name'];
            $hashedPass =$row['password'];
        }
        
        //verify hashed password with submitted password
        if( password_verify( $formPass, $hashedPass ) ) {
            
            //correct login details!
            //store data in SESSION variables
            $_SESSION['loggedInUser'] = $name;
            
            //redirect user to clients page
            header( "Location:clients.php" );
        } else {
            
            //error message
            $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again</div>";
            
        }
        
     } else {
            $loginError = "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'&times;></a></div>";
        
    }
}

//close mysql connection
mysqli_close($conn);

include('includes/header.php');
    
//    $password = password_hash("abc123", PASSWORD_DEFAULT);
//    echo $password;
?>    

    <h1>Client Adress Book</h1>
    <p class="lead">Log in to your account.</p>

    <?php echo $loginError; ?>

    <form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        <div class="form-group">
            <label class="sr-only" for="login-email">Email</label>
            <input type="text" id="login-email" class="form-control" name="email" placeholder="email" value="<?php echo $formEmail; ?>">
        </div>

        <div class="form-group">
            <label class="sr-only" for="login-password">Password</label>
            <input type="password" id="login-password" class="form-control" name="password" placeholder="password"><br>
        </div>

        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>

<?php
include('includes/footer.php');
?>