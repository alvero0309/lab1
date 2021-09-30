
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$this->renderSection('Login')?></title>
	<link rel="stylesheet" href="<?php echo('http://localhost/v1/css/bulma.min.css')?>">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
<?= view_cell('App\Libraries\Components::getHeader'); ?>

<div class="container is-max-desktop">
<section class="section is-medium">



<?php if((session('msg'))): ?>
  <article  class="message is-<?= session('msg.type')?>">
  <div class="message-body">
    <?= session('msg.body')?>
  </div>

  <?php endif; ?>

<h3>Estas en Login</h3>
<form action="<?= base_url("Auth/sigin") ?>"  method="POST">
<div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input is-info" name="email" type="email"  value="<?=old('email')?>@centrogeo.edu.mx" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
  <p class="is-danger help"> <?= session('errors.email') ?> </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input is-info" name="password" type="password"   <?= session('errors.email') ?> placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
  <p class="is-danger help"> <?= session('errors.password') ?> </p>
</div>
<div class="field">
  <p class="control">
    <button  type="submit" class="button is-success">
      Ingresar
    </button>
  </p>
  
</div>
</form>
</section>

</div>


<?= view_cell('App\Libraries\Components::getFooter'); ?>

</body>
</html>