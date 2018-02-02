<?php require APPROOT . '/views/inc/header.php'; ?>

Add Users
<form method="post" action="<?php echo URLROOT; ?>/users/add">
	    <input type="text" name="id" required placeholder="id">
		<input type="text" name="username" required placeholder="username">
		<input type="password" name="password" required placeholder="password">
		<input type="password" name="confirm_password" required placeholder="confirm password">
		<input type="text" name="account_type" required placeholder="Account type">
		<button type="submit">Add</button>
	</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>