<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        width:80%;
        background-color:rgb(250, 193, 234);
    }
</style>
<body>
    <div class="container">
       <?php
         function five(){
             echo "FIVE";
         }
         function printn($num){
             echo "<br>Your number is:";
             echo $num;
         }
         five();
         printn(45);
       ?>
    </div>
        </body>
        </html>