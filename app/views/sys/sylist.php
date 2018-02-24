<?php require APPROOT . '/views/inc/header.php'; ?>

List of School Year

<table class="tbl">
  <tr>
    <th>School Year</th>
    <th>Status</th> 
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['sys'] as $sy): ?>
    <tr>
      <td><?php echo $sy->year_start . '-' . $sy->year_end; ?></td>
      <td><?php echo $sy->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($sy->switch == 'Inactive'): ?>

<!-- disable the enable if someone is active -->
  <?php if($data['hasActive'] == 1): ?>

  <a style="pointer-events: none;" class="dropdown-item" href="<?php echo URLROOT;?>/sys/enable/<?php echo $sy->id ?>">Enable</a>

<!-- disable the enable if someone is active -->
  <?php else: ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/sys/enable/<?php echo $sy->id ?>">Enable</a>


<!-- disable the enable if someone is active -->
  <?php endif; ?>

<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/sys/disable/<?php echo $sy->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>

  <?php if($sy->switch == "Active"): ?>

    <a style="pointer-events: none;" class="dropdown-item" href="<?php echo URLROOT;?>/sys/update/<?php echo $sy->id ?>">Update</a>

  <?php else : ?>

   <a class="dropdown-item" href="<?php echo URLROOT;?>/sys/update/<?php echo $sy->id ?>">Update</a>

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