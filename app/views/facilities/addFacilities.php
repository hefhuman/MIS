<?php require APPROOT . '/views/inc/header.php'; ?>

Add Facilities
<form method="post" action="<?php echo URLROOT; ?>/facilities/add">
<input type="text" name="type" required placeholder="ex. room, lab etc">
<input type="text" name="discription" required placeholder="Discription">
<input type="text" name="facil_name" required placeholder="ex. room#, lab#, faculty etc">
<button type="submit">Add</button>
</form>


<?php require APPROOT . '/views/inc/footer.php'; ?>