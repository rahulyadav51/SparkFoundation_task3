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
<body>
<div align="center" style="background-color:pink;height=1200px;" class="main" >
	<h1></h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
	  
					<input type="hidden" ORDER_ID: ><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" type="hidden">
					
						<input type="hidden" CUSTID :><input id="CUST_ID" tabindex="2" maxlength="12"
					  size="12" name="CUST_ID" autocomplete="off" value="CUST001" type="hidden">
				
					  <input type="hidden" INDUSTRY_TYPE_ID :><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12"
				     size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" type="hidden">
				
				
					 <input type="hidden" Channel :> <input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" type="hidden"> 
				
		
          
		<div class="form"><br>
		Name : <input type="text" name="NAME" id="NAME" class="form-control" placeholder="Enter Your Name" required>
		</div>
        <br>
	<div class="form">
         <label>Email : </label>
		<input type="email" name="EMAIL" id="EMAIL" class="form-control" placeholder="Enter Your Email" required>
		</div><br>
		<div class="form">
         <label>Phone : </label>
		<input  tabindex="10" type="text" name="MSISDN" class="form-control" value="" placeholder="Enter Your Phone" required>
		</div><br>
		<div class="form">
         <label>Amount : </label>
		 <input  tabindex="10" type="text" name="TXN_AMOUNT" value="" placeholder="Enter Amoount" required>
		</div><br>
		<div class="form">
		<tr>
					<td></td>
					<td></td>
					<td><input  type="submit" value="Donate!"	onclick=""></td>
				</tr>
		
		</div>
		

	</form>
	</div>
</body>
</html>