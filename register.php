<?php
    require 'dbconfig/config.php';
?>

<html>
<head>
    <title>Register Form</title>
        <link rel = "stylesheet" href = "style.css">
</head>
<body>
    
    <h1><center>Welcome new user!!!!</center></h1>

    <div id="main-wrapper">   
            
                    <h2>Register-Page</h2>
            
                    <form action = "register.php" method = "post">
                        <div class = "inputData">
                            User Name:<input name = "username" type = "text" placeholder="User Name" required></br>
                            Full Name:<input name = "fullname" type = "text" placeholder = "Full Name" required></br>
                            Gender: <select name = "gender">
                                        <option value = "Male">MALE</option>
                                        <option value = "Female">FEMALE</option>
                                    </select></br>
                            Email ID: <input name = "email" type = "text" placeholder = "Enter Email" required ></br>
                            Password: <input name = "password" type = "password" placeholder="Password" required></br>
                            Confirm Password:<input name = "cpassword" type = "password" placeholder = "Confirm password" required></br>
                        </div>    
                        <input name = "register" type= "submit" id="button_register" value = "Register" ></br>
                        <a href = "index.php"><input name = "back" type = "button" id = "button_cancel" value = "Back"  ></a>             
                    
                    </form>


                    <?php
                        if(isset($_POST['register']))
                        {
                            //echo '<script type = "text/javascript"> alert ("Register button is clicked")</script>';
                            $username = $_POST['username'] ;
                            $fullname = $_POST['fullname'];
                            $gender = $_POST['gender'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $cpassword = $_POST['cpassword'];

                            if($password == $cpassword)
                            {
                                $query = "select * from userinfo where Email = '$email'";

                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run)>0)                                
                                {
                                    echo '<script type = "text/javascript"> alert("User exists. Login in to the account")</script>';
                                }
                                else
                                {
                                    $query = "insert into userinfo values('$username','$fullname','$gender','$email','$password')";
                                    $query_run = mysqli_query($con,$query);

                                    if($query_run)
                                    {
                                        echo '<script type = "text/javascript"> alert("User registered")</script>';
                                    }
                                    else 
                                    {
                                        echo '<script type = "text/javascript"> alert("Error")</script>';
                                    }
                                }
                            }
                            else 
                            {
                                echo '<script type = "text/javascript"> alert("password and confirm password doesnt match.")</script>';
                            }
                        }
                    ?>
    </div> 
           
        

</body>

</html>