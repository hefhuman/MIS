<?php require APPROOT . '/views/inc/header.php'; ?>

Add Users
<form method="post" action="<?php echo URLROOT; ?>/personnels/add">
	    <input type="text" name="id" required placeholder="id">
		<input type="text" name="first_name" required placeholder="First Name">
		<input type="text" name="middle_name" required placeholder="Middle Name">
		<input type="text" name="last_name" required placeholder="Last Name">
		<input type="text" name="account_type" required placeholder="Account type">
		<button type="submit">Add</button>
	</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>