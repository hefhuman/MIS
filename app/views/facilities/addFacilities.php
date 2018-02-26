<?php require APPROOT . '/views/inc/header.php'; ?>

Add Facilities
<form method="post" action="<?php echo URLROOT; ?>/facilities/add">
<input type="text" name="type" required placeholder="ex. room, lab etc" style="text-transform: capitalize;">
<textarea type="text" placeholder="Discription" name="discription" required style="text-transform: capitalize;"></textarea>
<input type="text" name="facil_name" required placeholder="ex. room#, lab#, faculty etc" style="text-transform: capitalize;">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>