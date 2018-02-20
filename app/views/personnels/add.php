<?php require APPROOT . '/views/inc/header.php'; ?>

Add Users
<form method="post" action="<?php echo URLROOT; ?>/personnels/add">
	    <input type="text" name="id" required placeholder="id">
		<input type="text" name="first_name" required placeholder="First Name">
		<input type="text" name="middle_name" required placeholder="Middle Name">
		<input type="text" name="last_name" required placeholder="Last Name">
		<select name="account_type" id="">
			<?php foreach ($data['account_type'] as $accountType): ?> 
				<option value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>
			<?php endforeach; ?>
		</select>
		<button type="submit">Add</button>
	</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>