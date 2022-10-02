<?php 

// Define a tax rate:
$tax = 8.75;

// This function performs the calculations.
function calculate_total ($quantity, $price){

	global $tax;

	$total = $quantity * $price; // Calculation
	$taxrate = ($tax / 100) + 1;
	$total = $total * $taxrate; // Add the tax.
	$total = number_format ($total, 2); // Formatting

	return $total; // Return the value.

} // End of function.

// Check for a form submission:
if (isset($_POST['submitted'])){

	// Check for values:
	if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ){

		// Call the function and print the results:
		$total = calculate_total($_POST['quantity'], $_POST['price']);
		print "<p>Your total comes to R<span style=\"font-weught:bold;\">$total</span>,including the $tax percent tax rate.</p>";

	} else { // Inappropriate values entered.
		print '<p style="color; red;">Please enter a valid number and price!</p>';
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculation</title>
	<link rel="stylesheet" href="css/pricestyle.css">
</head>
<body>
	
<form action="pricecheck.php" method="post">
	<p>Night's: <input type="text" name="quantity" size="3" /></p>
	<br>
	<p>Price: <input type="text" name="price" size="5" /></p>
	<br>
	<input type="submit" name="submit" value="Calculate!" />
	<input type="hidden" name="submitted" value="true" />
    <div id="click_here">
   <a href="home.php">Click Here to Return</a>
     </div>
</form>

</body>
</html>