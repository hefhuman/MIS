<?php require APPROOT . '/views/inc/header.php'; ?>

List of School Year

<table class="tbl">
  <tr>
    <th>Account Name</th>
    <th>Status</th> 
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['accountType'] as $at): ?>
    <tr>
      <td><?php echo $at->account_type; ?></td>
      <td><?php echo $at->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($at->switch == 'Inactive'): ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/accounttypes/enable/<?php echo $at->id ?>">Enable</a>


<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/accounttypes/disable/<?php echo $at->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/accounttypes/update/<?php echo $at->id ?>">Update</a>

  </div>
</div>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<script>
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>