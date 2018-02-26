<?php require APPROOT . '/views/inc/header.php'; ?>

List of Account Type
<form method="post" action="<?php echo URLROOT; ?>/AccountTypes/add">
<input type="text" name="account_type" style="text-transform: capitalize;">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>