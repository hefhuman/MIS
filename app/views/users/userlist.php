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
<h3>List Of Users</h3>
<div class=" container form-control">

<table class="tbl">
  <tr>
    <th>ID</th>
    <th>Username</th> 
    <th>Account Type</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['users'] as $user): ?>
    <tr>
      <td><?php echo $user->id; ?></td>
      <td><?php echo $user->username; ?></td>
      <td><?php echo $user->account_type; ?></td>
      <td><?php echo $user->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($user->switch == 'Inactive'): ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/users/enable/<?php echo $user->id ?>">Enable</a>

<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/users/disable/<?php echo $user->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>

  <?php if($user->switch == "Active"): ?>

    <a style="pointer-events: none;" class="dropdown-item" href="<?php echo URLROOT;?>/users/update/<?php echo $user->id ?>">Update</a>

  <?php else : ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/users/update/<?php echo $user->id ?>">Update</a>

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