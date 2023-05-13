<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<style>
.first{
     margin:0 20px 20px 20px;
	
	}	
	.second{
     margin:0 20px 20px 20px;
	
	}	
	.third{
     margin:0 20px 20px 20px;
	
	}	
	.four{
     margin:0 20px 20px 20px;
	
	}	
	.five{
     margin:0 20px 20px 20px;
	
	}	
	input{
		padding:5px 10px 5px 10px;
	}
	.frame{
		padding:20px 0 20px 50px;
		width:70%;
		height:85%;
		background-color:black;
		color:white;
		border-radius:3px;
		margin-left:50px;
	}
	</style>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
				<div class="frame">
					<div class="first">
					<label>Flight_ID:</label>
					<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "FLI_" . rand(100,999)?>">
</div>
							<br>
					<div class="second">
					<label>PASSENGER_ID :</label>
					<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
</div>
				<br>
					<div class="third">
					<label>INDUSTRY_TYPE_ID :</label>
					<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="on" value="Booking">
</div>
				
					<br>
					<div classs="five">
					<label>txnAmount*</label>
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
</div>
						<br>
				<input value="CheckOut" type="submit"	onclick="">
</div>
		* - Mandatory Fields
	</form>
</body>
</html>