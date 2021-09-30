<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="#">
			<img src="<?php echo ('http://localhost/v1/img/CentroGeo.png') ?>" width="78" height="100">
		</a>

		<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarBasicExample" class="navbar-menu">
		<div class="navbar-start">
			<a class="navbar-item">
				LabCentroGeo
			</a>

			<a class="navbar-item" href="<?php echo base_url (route_to('home')); ?>">
				INICIO
			</a>

			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
					RECURSOS
				</a>

				<div class="navbar-dropdown">
					<a class="navbar-item">
						REGLAMENTO
					</a>
					<a class="navbar-item">
						CONECTATE A UN EQUPO
					</a>
					<a class="navbar-item">
						HORARIOS
					</a>
					<hr class="navbar-divider">
					<a class="navbar-item">
						REPORTA ALGÚN ISSUE
					</a>
				</div>
			</div>
		</div>

		<div class="navbar-end">
			<div class="navbar-item">
				<div class="buttons">
					<a class="button is-primary" href="<?php echo base_url (route_to('register')); ?>">
						<strong>REGÍSTRATE</strong>
					</a>
					<a class="button is-light" href="<?php echo base_url (route_to('login')); ?>">
						INICIA SESIÓN
					</a>
				</div>
			</div>
		</div>
	</div>
</nav>

