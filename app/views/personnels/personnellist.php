<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="row">

<div class="col-md-3">

  <ul class="accordion-menu no-print">
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
<h3>List Of Personnels</h3>
<div class=" container form-control">

<table class="tbl">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Account Type</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['personnel'] as $prsnnl): ?>
    <tr>
      <td><?php echo $prsnnl->PersonnelID; ?></td>
      <td><?php echo $prsnnl->last_name . ', ' . $prsnnl->first_name . ' ' . $prsnnl->middle_name; ?></td>
      <td><?php echo $prsnnl->account_type; ?></td>
      <td><?php echo $prsnnl->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($prsnnl->switch == 'Inactive'): ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/enable/<?php echo $prsnnl->PersonnelID ?>">Enable</a>

<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/disable/<?php echo $prsnnl->PersonnelID ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>


<!-- if status is active then update will be disabled -->
  <?php if($prsnnl->switch == "Active"): ?>

    <a style="pointer-events: none;" class="dropdown-item" href="<?php echo URLROOT;?>/personnels/update/<?php echo $prsnnl->PersonnelID ?>">Update</a>

<!-- if status is active then update will be disabled -->
  <?php else : ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/update/<?php echo $prsnnl->PersonnelID ?>">Update</a>

<!-- if status is active then update will be disabled -->
 <?php endif; ?>

 <?php if($prsnnl->hasAccount != 'Yes'): ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/users/add/<?php echo $prsnnl->PersonnelID ?>">Create MIS Account</a>

<?php endif; ?>

  </div>
</div>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<a style="color:black" class="btn bg-primary" style="margin: 50px;" href="<?php echo URLROOT; ?>">Return to Main Panel</a>

</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>