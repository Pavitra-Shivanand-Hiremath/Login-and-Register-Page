<?php
    session_start();
    require 'dbconfig/config.php'; 
?>

<html>
<head>
    <title>Sign Up Login Form</title>
        <link rel = "stylesheet" href = "style.css" />
</head>
<body>
    
    <h1><center>Welcome </center></h1>

    <div id="main-wrapper">   
            
                    <h2>Login-Page</h2>
            
                    <form action = "index.php" method = "post">
                        <div class = "inputData">
                            Email: <input name = "email" type = "text" placeholder="Email" required></br>
                            Password: <input name = "password" type = "password" placeholder="Password" required></br>
                        </div>    
                        <input name = "log" type= "submit" id="button_login" value = "Login" ></br>
                        <a href = "register.php"><input name = "button_reg" type = "button" id = "button_register" value = "Register" >  </a>           
                    
                    </form>


                    <?php
                        if(isset($_POST['log']))
                        {
                           // echo '<script type = "text/javascript"> alert ("Sign up button is clicked")</script>';
                           $email = $_POST['email'];
                           $password = $_POST['password']; 
                           $query = "select * from userinfo where Email = '$email'";

                           $query_run = mysqli_query($con,$query);
                           if(mysqli_num_rows($query_run) == 0)                                
                           {
                               echo '<script type = "text/javascript"> alert("User does not exist. Register an account")</script>';
                           }
                           else
                           {
                                $query = "select * from userinfo where Email = '$email' AND Password = '$password'";
                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run) == 1)
                                {
                                    //echo '<script type = "text/javascript"> alert("User exists and successfully go to the page")</script>';
                                    $_SESSION['email'] = $email;
                                    header('location: homepage.php');
                                }
                                else{
                                    echo '<script type = "text/javascript"> alert("The password is wrong.")</script>';
                                }

                           }
                        }

                    ?>
    </div> 
           
        

</body>

</html>