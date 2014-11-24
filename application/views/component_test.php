<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Broken?</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<h1>This is another test!</h1>


	<?php echo "this worked!"; 
	echo form_open('test/add_component'); 
	echo form_input('invoice_number', $invoice); 
	echo form_input('part_number', 'Part Number');
	echo form_input('price', 'Price');
	echo form_input('quantity', 'Quantity');
	echo form_submit('add', 'add')
		?>
	</form>

	<h3>Display Table</h3>
	<?php echo form_open('test/display_component'); ?>
	<button type="submit">Display</button>
	</form>

</body>
</html>



