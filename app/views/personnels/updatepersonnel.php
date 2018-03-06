<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="row">

<div class="col-md-3">

  <ul class="accordion-menu">
  <li>
    <div class="dropdownlink"><i class="fa fa-plus" aria-hidden="true"></i> Add Entries
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="<?php echo URLROOT; ?>/sys/add">Add School Year</a></li>
      <li><a href="<?php echo URLROOT; ?>/AccountTypes/add">Add Account Type</a></li>
      <li><a href="<?php echo URLROOT; ?>/facilities/add">Add Facilities</a></li>
      <li><a href="<?php echo URLROOT; ?>/departments/add">Add Department</a></li>
      <li><a href="<?php echo URLROOT; ?>/personnels/add">Add Personnel</a></li>
    </ul>
  </li>
  <li>
    <div class="dropdownlink"><i class="fa fa-paper-plane" aria-hidden="true"></i> View Entries
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="<?php echo URLROOT; ?>/sys/sylist">View School Year</a></li>
      <li><a href="<?php echo URLROOT; ?>/AccountTypes/atlist">View Account Types</a></li>
      <li><a href="<?php echo URLROOT; ?>/facilities/facillist">View Facilities</a></li>
      <li><a href="<?php echo URLROOT; ?>/users/userlist">View Users</a></li>
      <li><a href="<?php echo URLROOT; ?>/departments/deptlist">View Departments</a></li>
      <li><a href="<?php echo URLROOT; ?>/personnels/personnellist">View Personnels</a></li>
      <li><a href="<?php echo URLROOT; ?>/collegecourses/collegecourselist">View College Courses</a></li>
    </ul>
  </li>
  <li>
    <div class="dropdownlink"><i class="fa fa-quote-left" aria-hidden="true"></i><a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </li>
</ul>

</div>


<div class="col mt-3 mr-5">
<h3>Update Personnel</h3>
<div class=" container form-control">

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

</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>