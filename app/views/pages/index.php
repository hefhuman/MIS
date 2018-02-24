<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- Navigation bar -->

<!-- Add datas -->
<ul>
	<li class="menu">Add Datas
<ul class="item">
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/sys/add">Add SY</a></li>
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/AccountTypes/add">Add Account Type</a></li>
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/facilities/add">Add Facilities</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/users/add">Add Users</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/departments/add">Add Department</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/personnels/add">Add Personnel</a></li>
</ul>
	</li>
</ul>


<!-- View Datas -->
<ul>
	<li class="menu">View Datas
<ul class="item">
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/sys/sylist">View SY</a></li>
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/AccountTypes/add">View Account Types</a></li>
  <li class="menu1Item"><a href="<?php echo URLROOT; ?>/facilities/add">View Facilities</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/users/add">View Users</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/departments/add">View Departments</a></li>
   <li class="menu1Item"><a href="<?php echo URLROOT; ?>/personnels/add">View Personnels</a></li>
</ul>
	</li>
</ul>

<!-- Logout -->
<ul>
<li class="menu"><a href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
</ul>

<!-- Navigation bar -->


<?php require APPROOT . '/views/inc/footer.php'; ?>