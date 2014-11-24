
<body>
	<h1>Create New Invoice</h1>


	<?php
	echo form_open('test/add_invoice'); 
	echo form_input('invoice_number', 'Invoice Number'); 
	echo form_input('supplier_name', 'Supplier Name'); 
	echo form_submit('add', 'add')
		?>
	</form>

	<h3>Display Table</h3>
	<?php echo form_open('test/display_invoice'); ?>
	<button type="submit">Display</button>
	</form>

</body>
</html>