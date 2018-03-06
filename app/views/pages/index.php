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

<?php require APPROOT . '/views/inc/footer.php'; ?>