<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="<?php echo base_url (route_to('home')); ?> ">
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
			
					<article class="message is-<?= session('msg.type') ?>">
						
							<?= session('username'); ?>
						

					
			</a>


		</div>

		<div class="navbar-end">
			<div class="navbar-item">
				<div class="buttons">
					<a class="button is-primary" href="<?php echo base_url (route_to('logout')); ?>">
						<strong>Salir</strong>
					</a>

				</div>
			</div>
		</div>
	</div>
</nav>