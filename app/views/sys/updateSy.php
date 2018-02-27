<?php require APPROOT . '/views/inc/header.php'; ?>

Add School Year
<form method="post" action="<?php echo URLROOT; ?>/sys/update/<?php echo $data['id']; ?>">
<!-- <select name="year_start" id="year_start" onclick="createYearEnd()">
	<?php //foreach ($data['sy'] as $sys): ?> 
				<option value="<?php// echo $sys->year_start; ?>"><?php //echo $sys->year_start; ?></option>
			<?php //endforeach; ?>
			
</select>
Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"> -->
  <select name="year_start" id="year_start" onclick="createYearEnd()">
  <?php for($i = 1;$i<=100;$i++): ?>

<?php if($data['syById']->year_start == $i+2000): ?>

  	<option selected value="<?php echo $i + 2000; ?>"><?php $ending=$i; echo $i + 2000; ?></option>

  <?php else: ?>

    <option value="<?php echo $i + 2000; ?>"><?php echo $i + 2000; ?></option>


  <?php endif; ?>


  <?php endfor; ?>
  </select>

  <input readonly type="text" name="year_end" id="year_end" value="<?php echo $ending + 2001; ?>">

  <select name="semester">

    <?php if($data['syById']->semester == 1): ?>

    <option selected value="1" name="First Semester">First Semester</option>
    <option value="2" name="Second Semester">Second Semester</option>
    <option value="3" name="Summer">Summer</option>


  <?php elseif($data['syById']->semester == 2): ?>

    <option value="1" name="First Semester">First Semester</option>
    <option selected value="2" name="Second Semester">Second Semester</option>
    <option value="3" name="Summer">Summer</option>

  <?php elseif($data['syById']->semester == 3): ?>

    <option value="1" name="First Semester">First Semester</option>
    <option value="2" name="Second Semester">Second Semester</option>
    <option selected value="3" name="Summer">Summer</option>

  <?php endif; ?>

  </select>




<button type="submit">Update</button>
</form>

<script type="text/javascript">
  alert('<?php echo $data['syById']->year_start; ?>');
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>