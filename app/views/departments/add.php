<?php require APPROOT . '/views/inc/header.php'; ?>

Add Department
<form method="post" action="<?php echo URLROOT; ?>/departments/add">
<input type="text" name="department" style="text-transform: capitalize;">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>