<!DOCTYPE html>
<html lang="en">
	
	<?php $page_title = "Contact Us"; ?>
	<?php require 'constant/head.php'; ?>

	<body>

		<div class="super_container">

			<?php require 'constant/navigation_bar.php'; ?>

			<main id="main_body">

				<?php $breadcrumb_title = "Contact Us"; $breadcrumb_slug = "Contact"; ?>
				<?php require 'constant/breadcrumbs.php'; ?>

				<div class="contact">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="contact_info">
									<div class="contact_title">contact us</div>
									<div class="contact_info_content">
										<ul>
											<li>
												<div><i class="fa fa-map-marker" aria-hidden="true"></i></div><span>8 Professor Awojobi Street, Onike, Yaba, Lagos.</span>
											</li>
											<li>
												<div><i class="fa fa-phone" aria-hidden="true"></i></div><span>08023416184, 08033508183, 08033062586</span>
											</li>
											<li>
												<div><i class="fa fa-phone" aria-hidden="true"></i></div><span>08062704913, 07065288261</span>
											</li>
											<li>
												<div><i class="fa fa-envelope" aria-hidden="true"></i></div><span>mfmteens@gmail.com</span>
											</li>
											<li>
												<div><i class="fa fa-globe" aria-hidden="true"></i></div><span>www.mfmteens.org</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 contact_form_col">
								<div class="contact_form">
									<div class="contact_title">Get In Touch</div>
									<div class="contact_form_container">
										<form action="javascript:void(0);" id="contact_form">
											<div class="row">
												<div class="col-lg-6">
													<input type="text" class="form_input" placeholder="Your Name" required>
												</div>
												<div class="col-lg-6">
													<input type="email" class="form_input email_input" placeholder="Your Email" required>
												</div>
												<div class="col-12">
													<textarea class="form_text" placeholder="Your Message" required></textarea>
													<button type="submit" class="form_submit_button">Send</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact_map">
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.095901803279!2d3.3826116141420433!3d6.5095440759237775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cf14658529f%3A0x4236dd2ec76c7b67!2sThe+Teenage+Church!5e0!3m2!1sen!2s!4v1476276801061" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>

			</main>

			<?php require 'constant/footer.php'; ?>

		</div>

		<?php require 'constant/footer_scripts.php'; ?>

	</body>
</html>