<!DOCTYPE html>
<html lang="en">
	
	<?php $page_title = "Sermon"; ?>
	<?php require 'constant/head.php'; ?>

	<?php
		if ( isset($_GET['li']) ) {

			$li = $_GET['li'];

			$filename = 'sermons/'.$li.'.pdf';

			if ( file_exists($filename) ) {
				
				$li = $li;
			} else {
				$li = "mfm_teens_error_publication";
			}
		} else {
			$li = "mfm_teens_error_publication";
		}
	?>

	<body>

		<div class="super_container">

			<?php require 'constant/navigation_bar.php'; ?>

			<main id="main_body">

				<?php $breadcrumb_title = urldecode($li); $breadcrumb_slug = "View"; ?>
				<?php require 'constant/breadcrumbs.php'; ?>

				<div class="about">
					<div class="container">
						<iframe src="ViewerJS/?title=<?php echo urldecode($li); ?>#../sermons/<?php echo $li; ?>.pdf" width='100%' height='700' allowfullscreen webkitallowfullscreen></iframe>
					</div>
				</div>

			</main>

			<?php require 'constant/footer.php'; ?>

		</div>

		<?php require 'constant/footer_scripts.php'; ?>

	</body>
</html>