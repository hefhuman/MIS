<?php require APPROOT . '/views/inc/header.php'; ?>

Update User
<form method="post" action="<?php echo URLROOT; ?>/users/update/<?php echo $data['id'] ?>">
		<input type="text" name="username" value="<?php echo $data['users']->username; ?>" required placeholder="username">
		<input type="password" name="password" required placeholder="password">
		<input type="password" name="confirm_password" required placeholder="confirm password">
		<select name="account_type" id="">
			<?php foreach ($data['account_type'] as $accountType): ?>

				<?php if($data['users']->account_type == $accountType->account_type): ?>

				<option selected value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>

			<?php else: ?>

				<option value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>

			<?php endif; ?>

			<?php endforeach; ?>
		</select>
		<button type="submit">Update</button>
	</form>

<script> alert('<?php echo $data['users']->account_type; ?>');</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>