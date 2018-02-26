<?php require APPROOT . '/views/inc/header.php'; ?>

Add Users
<form method="post" action="<?php echo URLROOT; ?>/users/add/<?php echo $data['id']; ?>">
	    <input type="text" readonly name="id" required value="<?php echo $data['id']; ?>">
		<input type="text" name="username" required placeholder="username">
		<input type="password" name="password" required placeholder="password">
		<input type="password" name="confirm_password" required placeholder="confirm password">
		<select name="account_type" id="">
			<?php foreach ($data['account_type'] as $accountType): ?> 
				<option value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>
			<?php endforeach; ?>
		</select>
		<button type="submit">Add</button>
	</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>