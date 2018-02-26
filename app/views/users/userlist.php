<?php require APPROOT . '/views/inc/header.php'; ?>

List of Users

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

<script>
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>