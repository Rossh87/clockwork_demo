<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultify</title>
	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header>
		<nav class="
                    navbar
                    fixed-top
                    navbar-expand-sm 
                    navbar-dark
                    bg-transparent
                    container-fluid
                ">
			<div class="container">
				<a class="navbar-brand p-1 cd_focus-border--white" href="<?php echo home_url(); ?>">Navbar</a>
				<?php
				wp_nav_menu(array(
					'menu' => 'cd_nav',
					'container' => false,
					'menu_class' => "navbar-nav mb-2 mb-lg-0 flex-row"
				))
				?>

				<ul class="navbar-nav mb-2 mb-lg-0 flex-row">

					<li class="nav-item mx-1 visually-hidden-focusable">
						<a class="
                                        nav-link
                                        active
                                        p-1
                                        cd_focus-border--white
                                    " aria-current="page" href="#content">Skip to Content</a>
					</li>
					<li class="nav-item mx-1">
						<a class="
                                        nav-link
                                        active
                                        p-1
                                        cd_focus-border--white
                                    " aria-current="page" href="#about">About</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link p-1 cd_focus-border--white" href="#">Blog</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link p-1 cd_focus-border--white" href="#">Careers</a>
					</li>
				</ul>
			</div>
		</nav>
		<?php if (get_header_image()) : ?>
			<style>
				#hero:before {
					background-image: url('<?php header_image(); ?>');
				}
			</style>
		<?php endif; ?>
		<div id="hero" class="text-center bg-dark text-white cd_hero cd_jumbo-py-md">
			<h1 class="display-5 fw-bold">Build your business</h1>
			<div class="col-lg-6 col-sm-8 mx-auto hero_content">
				<p class="fs-5 mb-4">
					Leverage our consultants' best-in-class dynamism to
					drive your workflows to new heights of efficiency.
					Schedule a free consultation and unlock your true
					potential.
				</p>
				<form onsubmit="preventdefault()" class="form-floating col-lg-5 col-8 mx-auto">
					<input id="hero-email-input" type="email" class="form-control mb-4" placeholder="Your Email" />
					<label for="hero-email-input" class="text-dark">Your Email</label>
					<button class="
                                btn btn-outline-info btn-lg
                                px-4
                                me-sm-3
                                fw-bold
                            " type="submit">
						Schedule Now
					</button>
				</form>
			</div>
		</div>
	</header>