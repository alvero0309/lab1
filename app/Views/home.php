<?= $this->extend('front/main') ?>

<?= $this->section('title') ?>
HOME
<?= $this->endSection() ?>


<?= $this->section('content') ?>






<section class="section">
	<div class="container">
		<h1 class="title">
			Laboratorio CentroGeo
		</h1>

		<p class="subtitle">
			Bienvenido al sistema de apartado de los equipos de laboratorio<strong>CentroGeo</strong>!
		</p>
	</div>
</section>
<div class="container">
	<div class="columns is-desktop">
		<div class="column">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="<?php echo ('http://localhost/v1/img/calendario.png') ?>" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="<?php echo ('http://localhost/v1/img/calendario.png') ?>" alt="Placeholder image">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Horarios de Clase del Laboratorio</p>
							<p class="subtitle is-6">Consulta los horarios de Clase</p>
						</div>
					</div>

					<div class="content">
						En esta sección consulta los horarios por
						clase en los cuales los equipos del laboratorio se encuentran ocupados. <a>Horarios</a>.
						<a href="#">#css</a> <a href="#">#responsive</a>
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Rglamento del laboratorio</p>
							<p class="subtitle is-6">Consulta el reglamento</p>
						</div>
					</div>

					<div class="content">
						El reglamento del laboratorio de Posgrado del Centro Geo, tiene como objetivo
						primordial normar el uso y el funcionamiento adecuado de éste, coadyuvando
						así al óptimo aprovechamiento y conservación de sus recursos e instalaciones.
						Todos los usuarios deberán comprometerse a respetar este reglamento y hacer
						que sea respetado.
						Leer aqui -> 
						<a href="http://localhost/v1/assets/REGLAMENTO.pdf">#Reglamento</a> 
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
					</div>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">¿Cómo conectarse al laboratorio de cómputo?</p>
							<p class="subtitle is-6">Manual de conexión al laboratio de Computo</p>
						</div>
					</div>

					<div class="content">
						Verfica el manual para conectarte con éxito a los equipos del laboratorio de Computo de CentroGeo
						<a href="http://localhost/v1/assets/ANYDESK.pdf">#Manual</a> 
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</div>

<?= $this->endSection() ?>