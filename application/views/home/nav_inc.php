<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item">
			<h1>DashBoard</h1>
		</a>

		<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarBasicExample" class="navbar-menu">
		<div class="navbar-start">
			<a class="navbar-item" href="<?=base_url();?>">
				Home
			</a>

			<a class="navbar-item" href="<?=base_url();?>profile">
				Profile
			</a>

			<?php if(isset($this->session->userdata('user_info')['is_admin']) && $this->session->userdata('user_info')['is_admin'] == 1): ?>
				<a class="navbar-item" href="<?=base_url();?>admin">
					Admin
				</a>
			<?php endif; ?>

		</div>

		<div class="navbar-end">
			<div class="navbar-item">
				<div class="buttons">
					<a class="button is-primary" href="<?=base_url();?>signup">
						<strong>Sign up</strong>
					</a>

					<?php if(isset($this->session->userdata('user_info')['first_name'])): ?>
						<a class="button is-danger" href="<?=base_url();?>logout">
							Log out
						</a>
					<?php endif; ?>

					<?php if(!isset($this->session->userdata('user_info')['first_name'])): ?>
						<a class="button is-primary" href="<?=base_url();?>login">
							Log in
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</nav>


<script>
	document.addEventListener('DOMContentLoaded', () => {

		// Get all "navbar-burger" elements
		const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

		// Check if there are any navbar burgers
		if ($navbarBurgers.length > 0) {

			// Add a click event on each of them
			$navbarBurgers.forEach( el => {
				el.addEventListener('click', () => {

					// Get the target from the "data-target" attribute
					const target = el.dataset.target;
					const $target = document.getElementById(target);

					// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
					el.classList.toggle('is-active');
					$target.classList.toggle('is-active');

				});
			});
		}

	});
</script>
