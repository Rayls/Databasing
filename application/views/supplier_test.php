<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Broken?</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>This is another test!</h1>


	<?php echo "this worked!"; 
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