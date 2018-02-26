<?php require APPROOT . '/views/inc/header.php'; ?>

Update Personnel
<form method="post" action="<?php echo URLROOT; ?>/personnels/update/<?php echo $data['id']; ?>">
		<input type="text" name="first_name" value="<?php echo $data['personnelById']->first_name; ?>" required placeholder="First Name" style="text-transform: capitalize;">
		<input type="text" name="middle_name" value="<?php echo $data['personnelById']->middle_name; ?>" required placeholder="Middle Name" maxlength="1" style="text-transform: capitalize;">
		<input type="text" name="last_name" value="<?php echo $data['personnelById']->last_name; ?>" required placeholder="Last Name" style="text-transform: capitalize;">
		<select name="account_type" id="">
			<?php foreach ($data['account_type'] as $accountType): ?>

				<?php if($data['personnelById']->account_type == $accountType->account_type): ?>

				<option selected value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>

			<?php else: ?>

				<option value="<?php echo $accountType->account_type; ?>"><?php echo $accountType->account_type; ?></option>

			<?php endif; ?>

			<?php endforeach; ?>
		</select>
		<button type="submit">Update</button>
	</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>