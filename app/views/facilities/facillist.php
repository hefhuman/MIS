<?php require APPROOT . '/views/inc/header.php'; ?>

List of Facilities

<table class="tbl">
  <tr>
    <th>Type</th>
    <th>Discription</th> 
    <th>Name</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  
  <?php foreach($data['facilities'] as $facil): ?>
    <tr>
      <td><?php echo $facil->type; ?></td>
      <td><?php echo $facil->description; ?></td>
      <td><?php echo $facil->facil_name; ?></td>
      <td><?php echo $facil->switch; ?></td>
      <td>
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
  
  <!-- if status is inactive then it change the text -->
  <?php if($facil->switch == 'Inactive'): ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/facilities/enable/<?php echo $facil->id ?>">Enable</a>


<!-- if status is inactive then it change the text -->
  <?php else: ?>

  <a class="dropdown-item" href="<?php echo URLROOT;?>/facilities/disable/<?php echo $facil->id ?>">Disable</a>

<!-- if status is inactive then it change the text -->
  <?php endif; ?>


   <a class="dropdown-item" href="<?php echo URLROOT;?>/facilities/update/<?php echo $facil->id ?>">Update</a>


  </div>
</div>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<script>
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>