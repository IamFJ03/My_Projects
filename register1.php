<?php


define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('Error:Cannot connect');
}
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
    
    $result=mysqli_query($conn,$sql);
       if($result){
        // Redirect the user to the dashboard
        echo "Table created successfully";
        
        header('Location: welcome.php');
       }
       else{
           echo "username has already been taken";
       }
    }
}
?>

<html>
<body>
        <h3>SIGN-IN PAGE</h3>
            <hr>
            <form action="" method="post">
                <div class="sign-in">
                <p>Username:</p>
                <input type="text" name="username" id="inputUsername" placeholder="Username">


                <p>E-Mail:</p>
                <input type="email" name="email" id="inputPassword" placeholder="Enter E-Mail">


                <p>Password:</p>
                <input type="Password" name="password" id="confirmPassword" placeholder="Enter Password">
                <button  type="submit" name="submit">Sign in</button>
</div>
                <h3 class="faheem">Already have an account?</h3>
                <a class="log-in" href="login.php">log in</a>
                

            </form>
        </body>
    </head>
</html> 