<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('title') ?></title>
  <link rel="stylesheet" href="<?php echo ('http://localhost/v1/css/bulma.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <?= view_cell('App\Libraries\Components::getHeader'); ?>
  <?= $this->renderSection('content') ?>


  <div class="container is-max-desktop">

    <section class="section">
      <h1 class="title">Bienvenid@ a la sección de registro</h1>
      <h2 class="subtitle">
        Solo ingresa algunos datos para iniciar con tu apartado.
      </h2>

      <form action="<?= base_url('Auth/store'); ?>" method="POST">

        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input name="name" value="<?= old('name') ?>" class="input is-info" type="text" placeholder="Nombre">
          </div>
          <p class="is-danger help"> <?= session('errors.name') ?> </p>
        </div>

        <div class="field">
          <label class="label">Apellido</label>
          <div class="control">
            <input name="surname" value="<?= old('surname') ?>" class="input is-info" type="text" placeholder="Apellido">
          </div>
          <p class="is-danger help"> <?= session('errors.surname') ?> </p>
        </div>


        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input name="email" class="input is-danger" type="email" placeholder="Email input" value="@centrogeo.edu.mx">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-exclamation-triangle"></i>
            </span>
          </div>
          <p class="is-danger help"> <?= session('errors.email') ?> </p>
        </div>

        <!--<div class="field">
  <label class="label">Contraseña</label>
  <div class="control">
    <input name='password' value=" <?= old('password') ?>" class="input is-info" type="password" placeholder="*******">
  </div>
  <p class="is-danger help"> <?= session('errors.password') ?> </p>
</div>

<div class="field">
  <label class="label">Confirmación de Contraseña</label>
  <div class="control">
    <input name='c-password' class="input is-info" type="password" placeholder="*******">
  </div>
  <p class="is-danger help"> <?= session('errors.password') ?> </p>
</div> -->


        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-link">Regístrate</button>
          </div>
        </div>

      </form>

    </section>

  </div>


  <?= view_cell('App\Libraries\Components::getFooter'); ?>


</body>

</html>