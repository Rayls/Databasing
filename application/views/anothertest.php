<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Broken?</title>
</head>
<body>
	<h1>This is another test!</h1>


	<?php echo "this worked!"; 
	echo form_open('test/insert'); 
		?>
		<input type="text"  value="Hello!">
	</form>

	<?php echo form_open('test/display'); ?>
	<button type="submit">Display</button>

</body>
</html>