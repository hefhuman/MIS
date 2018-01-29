<?php require APPROOT . '/views/inc/header.php'; ?>

Add School Year
<form method="post" action="<?php echo URLROOT; ?>/sys/add">
<input type="text" name="year_start">
<input type="text" name="year_end">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>