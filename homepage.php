<?php
    session_start();
    require 'dbconfig/config.php'; 
?>

<html>
<head>
    <title>homepage</title>
        <link rel = "stylesheet" href = "style.css">
</head>
<body>
    
    <h1><center>Home - Page</center></h1>

    <div id="main-wrapper1">   
            
                    <h2>Welcome <?php echo $_SESSION['email']?> </h2>
                    <div style="float:right">
                        <form align="right" method="post" action="logout.php">
                        <label class="logout">
                         <input name="logout" type="button" id="button_logout" value="log out">
                        </label>
                        </form>
                    </div>
                    <a href = "info.php"><name = "User Info" id = "userinfo" value = "userinfo">User Info</a></br></br>
                    <a href = "#"><name = "Edit Info" id = "editinfo" value = "editinfo">Edit Info </a>

                    <form action = "homepage.php" method = "post">
                        <div class = "inputData">
                            Wanna Write something?? <textarea name = "feedback" type = "text" width = "200" placeholder="" required ></textarea></br>
                            
                        </div>    
                        
                                
                    
                    </form>
                    
    </div> 
           
        

</body>

</html>