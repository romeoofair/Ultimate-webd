<?php
    define( "TITLE","PHP Arrays" );           
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
            
            //PLAIN VARIABLES
            $username   = "johndoe";
            $fullname   = "John Doe";
            $age        = 32;
            $gender     = "male";
            $country    = "Mexico";
            
            //SIMPLE ARRAY
            $user   = array(
                
                        "johndoe",  //0
                        "John Doe", //1
                        32,         //2
                        "male",     //3
                        "Mexico"    //4
                    );
            
            //ECHO THE VALUES OF THE ARRAY
            echo $user[0] ."<br>";
            echo $user[1] ."<br>";
            echo $user[2] ."<br>";
            echo $user[3] ."<br>";
            echo $user[4] ."<br>";
        
            //ASSOCIALTIVE ARRAYS
            $people = array(
                        
                        "username" => "johndoe",
                        "fullname" => "John Doe",
                        "age"      => 32,
                        "gender"   => "male",
                        "country"  => "Mexico"
                
                    );
              
            //ECHO THE VALUES OF THE ARRAY
            echo $people["username"] . "<br>";    
            echo $people["fullname"] . "<br>";    
            echo $people["age"] . "<br>";    
            echo $people["gender"] . "<br>";    
            echo $people["country"] . "<br>";    
        
            //MULTI-DIMENSIONAL ARRAY
            $employees = array (
                
                            array( //index of 0
                            
                                "username" => "johndoe",
                                "fullname" => "John Doe",
                                "age"      => 32,
                                "gender"   => "male",
                                "country"  => "Mexico"
                                
                            ),
                
                            array( //index of 1
                            
                                "username" => "janedoe",
                                "fullname" => "Jane Doe",
                                "age"      => 27,
                                "gender"   => "female",
                                "country"  => "Canada"
                                
                            )
                    
                    );
            
            //ECHO THE VALUES OF THE MULTI_DIMENSIONAL ARRAY
            
            echo "<hr><br>";
            echo $employees[0]["username"] . "<br>";    
            echo $employees[1]["fullname"] . "<br>";    
            echo $employees[0]["age"] . "<br>";    
            echo $employees[1]["gender"] . "<br>";    
            echo $employees[1]["country"] . "<br>";   
            
            ?>
        </div>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    
    </body>

</html>