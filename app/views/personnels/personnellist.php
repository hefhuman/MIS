<?php require APPROOT . '/views/inc/header.php'; ?>

List of Personnel

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
      <td><?php echo $prsnnl->id; ?></td>
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


   <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/enable/<?php echo $prsnnl->id ?>">Enable</a>

<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/disable/<?php echo $prsnnl->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>


<!-- if status is active then update will be disabled -->
  <?php if($prsnnl->switch == "Active"): ?>

    <a style="pointer-events: none;" class="dropdown-item" href="<?php echo URLROOT;?>/personnels/update/<?php echo $prsnnl->id ?>">Update</a>

<!-- if status is active then update will be disabled -->
  <?php else : ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/personnels/update/<?php echo $prsnnl->id ?>">Update</a>

<!-- if status is active then update will be disabled -->
 <?php endif; ?>

    <a class="dropdown-item" href="<?php echo URLROOT;?>/users/add/<?php echo $prsnnl->id ?>">Create MIS Account</a>


  </div>
</div>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<script>
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>