<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Parts</title>
	<link rel="stylesheet" type="text/css" href= <?php echo base_url("styles/styles.css"); ?> >
</head>
<body>
	<h1>Add Parts to Inventory</h1>


	<?php  
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