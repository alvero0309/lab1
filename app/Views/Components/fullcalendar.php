<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('title') ?></title>
  <link rel="stylesheet" href="<?php echo ('http://localhost/v1/css/bulma.min.css') ?>">
  <link rel="stylesheet" href="<?php echo ('http://localhost/v1/css/fullcalendar/main.min.css') ?>">
  <!--Descargar JS, multimple select -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


  <script src='<?php echo ('http://localhost/v1/js/main.min.js') ?>'></script>
  <script src='<?php echo ('http://localhost/v1/js/locales-all.min.js') ?>'></script>

  <script>
    //Programar botón para que muestre los eventos del usuario y los eventos generales
    document.addEventListener('DOMContentLoaded', function() {
      const modal = document.querySelector('.modal');
      const signupButton = document.querySelector('.delete')
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        selectable: true,
        headerToolbar: {
          left: 'dayGridMonth,timeGridWeek,timeGridDay custom1',
          center: 'title',
          right: ' prev,next'
        },
        dateClick: function(info) {
          alert('clicked ' + info.dateStr);
          //Variable fecha seleccionada
          var date = info.dateStr;
          modal.classList.add('is-active');
          document.getElementById("date_start").value = date;
          document.getElementById("date_end").value = date;

        },
        select: function(info) {
          alert('Días selecconados: ' + info.startStr + ' a ' + info.endStr);

          modal.classList.add('is-active');
          document.getElementById("date_start").value = info.startStr;

         var endDate = date (info.endStr);

        console.log (document.getElementById("date_end").value = endDate);
        },
        locale: 'es',
        initialView: 'dayGridMonth',

        events: [{
            title: 'Long Event',
            start: '2021-07-07',
            end: '2021-07-10',
            color: 'purple' // override!
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: '2021-07-09T16:00:00'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: '2021-07-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2021-07-11',
            end: '2021-07-13',
            color: 'purple' // override!
          },
          {
            title: 'Maestría CG',
            descripcion: 'Maestría en Computo Geospacial',
            start: '2021-07-12T10:30:00',
            end: '2021-07-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2021-07-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2021-07-12T14:30:00'
          },
          {
            title: 'Birthday Party',
            start: '2021-07-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2021-07-28'
          }
        ],
        eventClick: function(calEvent, jsEvent, view) {
          const modal = document.querySelector('.modal');
          const signupButton = document.querySelector('.delete')
          $('#titulo').html(calEvent, title);
          $('#descrpion').html(calEvent, descripcion);
          modal.classList.add('is-active')
        },

        eventClick: function(info) {
          var eventObj = info.event;

          if (eventObj.url) {
            alert(
              'Clicked ' + eventObj.title + '.\n' + eventObj.descripcion + '.\n' +
              'Se Abrirá  ' + eventObj.url + ' en una nueva ventana'
            );

            window.open(eventObj.url);

            info.jsEvent.preventDefault(); // Previene que se dirigio a otra ventana
          } else {
            //muestra el evento por alertas
            alert(eventObj.title + '.\n' + 'Inicio' + eventObj.start + '.\n' + 'final' + eventObj.end);
          }
        }

      });

      signupButton.addEventListener('click', () => {
        modal.classList.remove('is-active');


      });



      calendar.render();
    });
  </script>

</head>

<?= view_cell('App\Libraries\Components::getHeaderuser'); ?>


<body>
  <div class="container">
    <div id='calendar' class="section"> </div>
  </div>







  <div class="modal  <?php if (session('errors')) {
                        echo ("is-active");
                      } ?>">

    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Aparta tu equipo: </p>
        <a href="<?php echo base_url(route_to('calendar')); ?>"><button class="delete" aria-label="close"></button></a>
      </header>
      <section class="modal-card-body">


        <form action="<?= base_url('dashboard/store_apart'); ?>" method="POST">

          <div class="field">
            <label class="label">Ingresa el título del apartado</label>
            <div class="control">
              <input class="input is-info" name="title" type="text" placeholder="Trabajando en tarea de investigación">
            </div>
            <p class="is-danger help"> <?= session('errors.title') ?> </p>
          </div>



          <div class="field">
            <label class="label">Ingresa el número de AnyDesk del equipo desde donde te vas a conectar</label>
            <div class="control">
              <input class="input" name="idanydesk" type="number" placeholder="Numero de 9 digitos Ej.109712019 ">
            </div>
            <p class="is-danger help"> <?= session('errors.idanydesk') ?> </p>
          </div>


          <div class="field">
            <label class="label">Selecciona el equipo del Laboratorio</label>
            <div class="control">

              <!-- Si el selector es multiple agregar la linea selector = "multimple" -->
              <select class="selector" name="LabPc">
                <option value="1">PROFESOR</option>
                <option value="2">LAB 1</option>
                <option value="3">LAB 2</option>
                <option value="4">LAB 3</option>
                <option value="5">LAB 4</option>
                <option value="6">LAB 5</option>
                <option value="7">LAB 6</option>
                <option value="8">LAB 7</option>
                <option value="9">LAB 8</option>
                <option value="10">LAB 9</option>
                <option value="11">LAB 10</option>
                <option value="12">LAB 11</option>
                <option value="13">LAB 12</option>
                <option value="14">LAB 13</option>
                <option value="15">LAB 14</option>
                <option value="16">LAB 15</option>
              </select>

            </div>
            <p class="is-danger help"> <?= session('errors.LabPc') ?> </p>
          </div>

          <div class="field is-grouped">

            <div class="control">
              <label class="label" for="start">Fecha de inicio seleccionada:</label>
              <input type="date" id="date_start" name="date_start">
            </div>

            <div class="control">
              <label class="label" for="start">Fecha final seleccionada:</label>
              <input type="date" id="date_end" name="date_end">
            </div>
          </div>


          <div class="field is-grouped">

            <div class="control">
              <label class="label" for="start">Inicio de apartado:</label>
              <input type="time" id="start" name="time-begin" min="08:00:00" max="24:00:00">
            </div>

            <div class="control">
              <label class="label" for="start">Fin de apartado:</label>
              <input type="time" id="end" name="time-end" min="08:00:00" max="24:00:00">
            </div>
          </div>




          <div class="field">
            <label class="label">Mensaje</label>
            <div class="control">
              <textarea class="textarea" placeholder="Mensaje"></textarea>
            </div>
          </div>




          <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
        <button class="button is-link">Enviar</button>
        <button class="button is-link is-light">Cancelar</button>
      </footer>
    </div>
    </form>
  </div>



  <div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p id="titulo" class="modal-card-title"> </p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <div id="DescripcionEvento"></div>
        <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
        <button class="button is-link">Enviar</button>
        <button class="button is-link is-light">Cancelar</button>
      </footer>
    </div>
  </div>




  <!-- Selector Multiple -->
  <script>
    jQuery(document).ready(function($) {
      $(document).ready(function() {
        $('.selector').select2();
        width: 'resolve'
      });
    });
  </script>
  <?= view_cell('App\Libraries\Components::getFooter'); ?>


</body>

</html>