<?php if(isset($_SESSION['user_id'])): ?>
<?php $this->view('pages/index'); ?>
<?php else: ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">


<form action="<?php echo URLROOT; ?>/users/login" id="login_form" class="form-control col-md-5 mx-auto p-5 login_form_margin" method="post">

<h3 class=""><i class="fa fa-address-card-o fa-1x"></i> Login</h3>

  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
    </div>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>

  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
    </div>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <div class="row mt-3">
    <div class="col">
  <button type="submit" class="btn btn-primary w-100">Login</button>
  </div>
   <div class="col">
  <button onclick="login_form_clear()" class="btn w-100">Clear</button>
  </div>
  </div>
</form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php endif; ?>