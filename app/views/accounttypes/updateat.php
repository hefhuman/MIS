<?php require APPROOT . '/views/inc/header.php'; ?>

Update Account Types
<form method="post" action="<?php echo URLROOT; ?>/AccountTypes/update/<?php echo $data['id']; ?>">
<input type="text" value="<?php echo $data['account_type']->account_type; ?>" name="account_type" style="text-transform: capitalize;">
<button type="submit">Update</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>