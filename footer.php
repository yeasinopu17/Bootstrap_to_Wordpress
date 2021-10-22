<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<!--  sign up
    ======================-->
<section id="signup">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 offset-sm-3">
				<h3 class="text-white fw-normal">
					Are you ready to take your code skill to the <strong class="border-2">next level</strong> ?
				</h3>
				<p class="wow animate__heartBeat mt-5" data-wow-duration="2s" data-wow-iteration="5">
					<a data-bs-toggle="modal" data-bs-target="#myModal" role="button" class="btn btn-lg btn-success d-block fs-6 btn-focus">Sign Up Now
					</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- OPT in section 
    ======================-->
<?php
$footer_price = get_fields(1064); //here 1064 is home page id
get_template_part('template-parts/content', 'optin', $footer_price); ?>


<!--  footer
======================-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<p>
					<a href="/"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>" alt="logo" /></a>
				</p>
			</div>
			<div class="col-sm-6 text-center">
				<ul class="list-unstyled list-inline">
					<li class="list-inline-item"><a href="">Home</a></li>
					<li class="list-inline-item"><a href="">Blog</a></li>
					<li class="list-inline-item"><a href="">Resource</a></li>
					<li class="list-inline-item"><a href="">Cantact</a></li>
					<li class="signup-link list-inline-item"><a href="">Sign up now</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<p class="text-end">&copy; 2021 yeasinopu</p>
			</div>
		</div>
	</div>
</footer>

<!--  modal
======================-->

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					<i class="fas fa-envelope icon-color"></i> Subscribe To Our Mailing List !
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label for="exampleInputText" class="form-label">First Name</label>
						<input type="text" class="form-control" id="exampleInputText" placeholder="Your Name Here" />
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your email here" />
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<button type="submit" class="btn btn-danger">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
</div>





<?php wp_footer(); ?>

<!-- Boostrap Core js 
    ======================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

<!-- jQuery
    ======================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- wow.js 
======================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom JS
======================-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>


</body>

</html>