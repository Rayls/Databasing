<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Suppliers</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<h1>Add Suppliers</h1>


	<?php
	echo form_open('test/add'); 
	echo form_input('supplier_name', 'name'); 
	echo form_input('address', 'address');
	echo form_input('tel_number', 'telephone');
	echo form_submit('add', 'add')
		?>
	</form>

	<?php echo form_open('test/display'); ?>
	<button type="submit">Display</button>
	</form>

</body>
</html>