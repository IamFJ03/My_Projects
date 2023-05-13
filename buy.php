<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','e-commerce');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('error:cannot connect');
}


if(isset($_POST['submit'])){
	
    if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['number'])){
 
    
    $first=$_POST['first'];
    $last=$_POST['last'];
   
    $number=$_POST['number'];
    $email=$_POST['email'];

    $postal=$_POST['postal_code'];
    $city=$_POST['city'];

    $address=$_POST['address'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address';
    } else {
        $sql="UPDATE `customer` SET first='$first',last='$last',number='$number',email='$email',postal='$postal',city='$city',address='$address';";
       
        $result=mysqli_query($conn,$sql);
         
        if($result){
            // Redirect the user to the dashboard
            echo "Table created successfully";
            $_SESSION['logged_in'] = true;
            header('Location: checkout.php');
           }
           else{
               echo mysqli_error($conn);
           }
            exit;
		}
  }
}

?>
