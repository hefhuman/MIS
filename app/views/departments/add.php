<?php require APPROOT . '/views/inc/header.php'; ?>

Add Department
<form method="post" action="<?php echo URLROOT; ?>/departments/add">
<input type="text" name="department_code" style="text-transform:uppercase;" placeholder="Department Code">
<input type="text" name="department_name" style="text-transform:capitalize;" placeholder="Department Name">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>