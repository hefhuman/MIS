<?php require APPROOT . '/views/inc/header.php'; ?>

Update Department
<form method="post" action="<?php echo URLROOT; ?>/departments/update/<?php echo $data['id']; ?>">
<input type="text" name="department" value="<?php echo $data['dptById']->department; ?>" style="text-transform: capitalize;">
<button type="submit">Update</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>