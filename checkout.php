<?php
require 'buy.php';

$sql="SELECT * FROM `customer`";
$result=mysqli_query($conn,$sql);
?>
<html>
<style>

	
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		background-color:rgb(44, 43, 43);
		height:700px;
	}
	.frame{
		border-radius:5px;
		width:80%;
		height:500px;
		Background-color:white;
		margin:50px 0 0 100px;
		box-shadow:-5px -5px 5px;
	}
    .product,.deliver,.address,.total{
        border-bottom: 1px solid black;
    }
	.money{
	
margin:-42px 0 0 200px;
border-bottom:1px solid black;

	}
	.deliver{
		padding:10px 20px 10px 20px;
	}
	
	button{
		background-color: palevioletred;
		padding: 15px 25px 15px 25px;
		border-radius: 5px;
		font-size: larger;
		color: aliceblue;
		margin:5px 0 0 180px;
		
	}
	button:hover{
		background-color: rgb(226, 75, 125);
		cursor: pointer;
	}
	a{
		text-decoration: none;
		color: palevioletred;
		font-weight:bold;
		margin:0 0 40px 0;
		
	}
	.details{
		font-size:large;
		margin-top:-88px;
		margin-left:20px;
	}
	span{
		font-size:large;
		font-weight:bold;
	}
	img{
		height:100px;
		width:100px;
	}
	.money1{
		padding: 20px 0 20px 0;
		
	}
	div{
		margin:-110px 0 0 120px;
	}
	.main{
		color:White;
		border-bottom:1px solid black;
		padding:15px 0 15px 0;
		background-color: palevioletred;
	}
	.number{
		margin:-38px 0 0 80px;
		padding-left:20px;
	}
	.change{
		margin:-70px 0 0 100px;
		height:60px;
		width:60px;
		color:white;
		background-color:palevioletred;
		padding:10px 20px 10px 20px;
		border-radius:2px;
	}
	.change:hover{
		background-color: rgb(226, 75, 125);
		border:1px solid black;
	}
	.custom{
		background-color:grey;
		color:white;
		font-family:sans-serif;
		font-size:medium;
		font-weight:500;
		padding:5px 10px 5px 10px;
	}
	.custom:hover{
		cursor:pointer;
		background-color:rgb(41, 39, 39);
        border:2px solid purple;
	}
	option{
		border-bottom:1px solid white;
	}
	</style>
<body>
    <h2 class="main">REVIEW YOUR ORDER</h2>
	<div class="frame">
    <h4 class="deliver">Estimated delivery by Saturday,13th May</h4>
    <h4 class="product">
		<img src="product.jpg">
		<div><h3>Funky Cottom Blue Shirt.
		</h3>
		<h5>$46</h5>
		<h5>All issue easy to return </h5>
		<span>Quantity:<select class="custom">
			<option value="S">Small</option><option value="M">Medium</option><option value="L">Large</option><option value="Xl">Xl</option>
		</select></span>
		</div>
		
	</h4>
    <?php
    while($rows=$result->fetch_assoc())
	{
		?>
    <h3>
		Delivery Address:
		<a class="change" href="buy1.php">Change</a>
	</h3>
	
	<h3><?php echo $rows['first'];?></h3>
	<h4 class="number"><?php echo $rows['number']?></h4> 
	<h4 class="address"><?php echo $rows['address']?></h4>

	<h3>Price Details:</h3>
	<h4 class="total">Total Product Price:</h4>
	<h4 class="money">$46</h4>
	
	<button>Continue</button>
	<?php
	}
	?>
</div>
	</h4>
	
</body>
</html>