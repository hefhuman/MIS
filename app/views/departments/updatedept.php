<?php require APPROOT . '/views/inc/header.php'; ?>

Update Department
<form method="post" action="<?php echo URLROOT; ?>/departments/update/<?php echo $data['id']; ?>">
<input type="text" name="department_code" value="<?php echo $data['dptById']->DepartmentCode; ?>" style="text-transform:uppercase">
<input type="text" name="department_name" value="<?php echo $data['dptById']->DepartmentName; ?>" style="text-transform:capitalize;">
<button type="submit">Update</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>