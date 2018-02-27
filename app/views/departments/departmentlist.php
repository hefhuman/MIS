<?php require APPROOT . '/views/inc/header.php'; ?>

List of Departments

<table class="tbl">
  <tr>
    <th>Department Code</th>
    <th>Department Name</th>
    <th>Status</th> 
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['department'] as $dept): ?>
    <tr>
      <td><?php echo $dept->DepartmentCode; ?></td>
      <td><?php echo $dept->DepartmentName; ?></td>
      <td><?php echo $dept->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($dept->switch == 'Inactive'): ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/departments/enable/<?php echo $dept->id ?>">Enable</a>


<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/departments/disable/<?php echo $dept->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/departments/update/<?php echo $dept->id ?>">Update</a>

  </div>
</div>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<script>
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>