<?php require APPROOT . '/views/inc/header.php'; ?>

Add Facilities
<form method="post" action="<?php echo URLROOT; ?>/facilities/update/<?php echo $data['id']; ?>">
<input type="text" name="type" value="<?php echo $data['facilities']->type; ?>" required placeholder="ex. room, lab etc" style="text-transform: capitalize;">
<textarea type="text" name="discription" required placeholder="Discription"><?php echo $data['facilities']->discription; style="text-transform: capitalize;"?></textarea>
<input type="text" name="facil_name" value="<?php echo $data['facilities']->facil_name; ?>" required placeholder="ex. room#, lab#, faculty etc" style="text-transform: capitalize;">
<button type="submit">Update</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>