<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>part test?</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>This is yet another test!</h1>


	<?php echo "this worked!"; 
	echo form_open('test/add_part'); 
	echo form_input('price', 'price'); 
	echo form_textarea('description', 'description');
	echo form_input('quantity', 'quantity');
	echo form_submit('add', 'add')
		?>
	</form>

	<?php echo form_open('test/display_part'); ?>
	<button type="submit">Display</button>
	</form>

</body>
</html>