<?php require APPROOT . '/views/inc/header.php'; ?>

Add School Year
<form method="post" action="<?php echo URLROOT; ?>/sys/add">
<!-- <select name="year_start" id="year_start" onclick="createYearEnd()">
	<?php //foreach ($data['sy'] as $sys): ?> 
				<option value="<?php// echo $sys->year_start; ?>"><?php //echo $sys->year_start; ?></option>
			<?php //endforeach; ?>
			
</select>
Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"> -->
  <select name="year_start" id="year_start" onclick="createYearEnd()">
  <?php for($i = 1;$i<=100;$i++): ?>
  	<option value="<?php echo $i + 2000; ?>"><?php echo $i + 2000; ?></option>
  <?php endfor; ?>
  </select>

<input readonly type="text" name="year_end" id="year_end">

  <select name="semester">

    <option value="1" name="First Semester">First Semester</option>
    <option value="2" name="Second Semester">Second Semester</option>
    <option value="3" name="Summer">Summer</option>

  </select>

<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>