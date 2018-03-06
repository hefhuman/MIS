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
<h3>Update School Year</h3>
<div class=" container form-control">


<form method="post" action="<?php echo URLROOT; ?>/sys/update/<?php echo $data['id']; ?>">
<!-- <select name="year_start" id="year_start" onclick="createYearEnd()">
	<?php //foreach ($data['sy'] as $sys): ?> 
				<option value="<?php// echo $sys->year_start; ?>"><?php //echo $sys->year_start; ?></option>
			<?php //endforeach; ?>
			
</select>
Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"> -->
  <select name="year_start" id="year_start" onclick="createYearEnd()">
  <?php for($i = 1;$i<=100;$i++): ?>

<?php if($data['syById']->year_start == $i+2000): ?>

  	<option selected value="<?php echo $i + 2000; ?>"><?php $ending=$i; echo $i + 2000; ?></option>

  <?php else: ?>

    <option value="<?php echo $i + 2000; ?>"><?php echo $i + 2000; ?></option>


  <?php endif; ?>


  <?php endfor; ?>
  </select>

  <input readonly type="text" name="year_end" id="year_end" value="<?php echo $ending + 2001; ?>">

  <select name="semester">

    <?php if($data['syById']->semester == 1): ?>

    <option selected value="1" name="First Semester">First Semester</option>
    <option value="2" name="Second Semester">Second Semester</option>
    <option value="3" name="Summer">Summer</option>


  <?php elseif($data['syById']->semester == 2): ?>

    <option value="1" name="First Semester">First Semester</option>
    <option selected value="2" name="Second Semester">Second Semester</option>
    <option value="3" name="Summer">Summer</option>

  <?php elseif($data['syById']->semester == 3): ?>

    <option value="1" name="First Semester">First Semester</option>
    <option value="2" name="Second Semester">Second Semester</option>
    <option selected value="3" name="Summer">Summer</option>

  <?php endif; ?>

  </select>




<button type="submit">Update</button>
</form>

<script type="text/javascript">
  alert('<?php echo $data['syById']->year_start; ?>');
</script>

</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>