
<body>
	<h1>Add Items to Invoice</h1>


	<?php 
	echo form_open('test/add_component'); 

	 if(isset($invoice)){echo form_input('invoice_number', $invoice);}
	 else{echo form_input('invoice_number', 'Invoice Number');}

	# echo form_input('invoice_number', $invoice); 
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



