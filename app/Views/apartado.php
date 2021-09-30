<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('Login') ?></title>
  <link rel="stylesheet" href="<?php echo ('http://localhost/v1/css/bulma.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>


  <?= view_cell('App\Libraries\Components::getHeaderuser'); ?>






  <div class="container ">

    <div class="columns">
      <div class="column">
        <div class="columns is-mobile">

          <div class="column is-one-quarter">
            <p class="bd-notification is-info">Notificaciones o menú de acciones</p>
          </div>


          <div class="column">
            <h1 class="title">Bienvenid@ a la sección de registro</h1>
            <h2 class="subtitle">
              Solo ingresa algunos datos para iniciar con tu apartado.
            </h2>


            <section>
              <div class="field">
                <label class="label">Ingresa el número de AnyDesk del equipo desde donde te vas a conectar</label>
                <div class="control">
                  <input class="input" type="number" placeholder="Numero de 9 digitos Ej.109712019 ">
                </div>
              </div>



              <div class="field">
                <label class="label">Seleciona el equipo del Laboratorio</label>
                <div class="control">
                  <div class="select">
                    <select>
                      <option>Equipo</option>
                      <option>LAB 1</option>
                      <option>LAB 2</option>
                      <option>LAB 3</option>
                      <option>LAB 4</option>
                      <option>LAB 5</option>
                      <option>LAB 6</option>
                      <option>LAB 7</option>
                      <option>LAB 8</option>
                      <option>LAB 9</option>
                      <option>LAB 10</option>
                      <option>LAB 11</option>
                      <option>LAB 12</option>
                      <option>LAB 13</option>
                      <option>LAB 14</option>
                      <option>LAB 15</option>
                    </select>
                  </div>
                </div>
              </div>



              <div class="field is-grouped">
                
                <div class="control">
                <label class="label" for="start">Inicio de apartado:</label>
                  <input type="date" id="start" name="trip-start" min="2021-07-01" max="2021-12-31">
                </div>
                
                <div class="control">
                <label class="label" for="start">Fin de apartado:</label>
                  <input type="date" id="end" name="trip-start" min="2021-07-01" max="2021-12-31">
                </div>
              </div>

      


              <div class="field">
                <label class="label">Mensaje</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Mensaje"></textarea>
                </div>
              </div>


              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link">Enviar</button>
                </div>
                <div class="control">
                  <button class="button is-link is-light">Cancel</button>
                </div>
              </div>
            </section>

          </div>
          <div class="column is-one-quarter">
            <p class="bd-notification is-info">Calendario</p>
          </div>
        </div>
      </div>


    </div>


    <?= view_cell('App\Libraries\Components::getFooter'); ?>

</body>

</html>