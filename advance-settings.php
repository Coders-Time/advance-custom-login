<?php 
defined( 'ABSPATH' ) || exit;

?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xl-10 m-auto">
				<div class="text-center bg-dark clearfix py-2 mt-5 rounded">
                    <h1 class="bd-title text-white" id="content"> <?php _e('Advance Custom login', 'advsign'); ?> </h1>
                </div>			

			<div class="design_area my-5">
				<nav>
				  <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
				    <a class="nav-link text-dark active" id="nav-dashboard-tab" data-toggle="tab" href="#nav-dashboard" role="tab" aria-controls="nav-dashboard" aria-selected="true"><?php esc_html_e( 'Dashboard', 'advsign' ); ?></a>
				    <a class="nav-link text-dark" id="nav-background-tab" data-toggle="tab" href="#nav-background" role="tab" aria-controls="nav-background" aria-selected="false"><?php esc_html_e( 'Background', 'advsign' ); ?></a>
				    <a class="nav-link text-dark" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="false"> <?php esc_html_e( 'Login', 'advsign' ); ?> </a>
				    <a class="nav-link text-dark" id="nav-font-tab" data-toggle="tab" href="#nav-font" role="tab" aria-controls="nav-font" aria-selected="false"> <?php esc_html_e( 'Font', 'advsign' ); ?> </a>
				    <a class="nav-link text-dark" id="nav-logo-tab" data-toggle="tab" href="#nav-logo" role="tab" aria-controls="nav-logo" aria-selected="false"> <?php esc_html_e( 'Logo', 'advsign' ); ?> </a>
				    <a class="nav-link text-dark" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false"> <?php esc_html_e( 'Social', 'advsign' ); ?> </a>
				    <a class="nav-link text-dark" id="nav-google-tab" data-toggle="tab" href="#nav-google" role="tab" aria-controls="nav-google" aria-selected="false"> <?php esc_html_e( 'Google Captcha', 'advsign' ); ?> </a>
				    <a class="nav-link text-dark" id="nav-expi-tab" data-toggle="tab" href="#nav-expi" role="tab" aria-controls="nav-expi" aria-selected="false"> <?php esc_html_e( 'Export/Import', 'advsign' ); ?> </a>
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">

				  <!-- Dashboard tab starts -->
				  <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">

				  	<form>
						<!-- <div class="custom-control custom-switch my-5">
						  <input type="checkbox" value="0" class="custom-control-input" id="enableplugin">
						  <label class="custom-control-label" for="enableplugin"> <?php esc_html_e( 'Enable the plugin', 'advsign' ); ?> </label>
						</div> -->
						<div class="border rounded p-3 mb-3">
							<div class="custom-control custom-switch my-3">
								<input type="checkbox" class="custom-control-input" id="customSwitch1">
								<label class="custom-control-label" for="customSwitch1"><?php esc_html_e( 'Enable the plugin', 'advsign' ); ?></label>
							</div>
						</div>
						
						<div class="form-group alert border fade show">
					    	<label for="loginurl"> <?php esc_html_e( 'Copy the link to view Login Page', 'advsign' ); ?>  </label>
					    	<input type="url" value="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="form-control " id="loginurl" aria-describedby="loginurlHelp" readonly>
					    	<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="loginurlHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Go to login page', 'advsign' ); ?> </small></a>
					  	</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary mt-5"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
						</div>
					</form>

				  </div>
				  <!-- Dashboard tab ends -->

				  <!-- Background tab starts -->
				  <div class="tab-pane fade" id="nav-background" role="tabpanel" aria-labelledby="nav-background-tab">
				  	<?php include_once('templates/background.php'); ?>
				  </div>
				  <!-- Background tab ends -->

				  <!-- Login tab starts -->
				  <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
				  	<?php include_once('templates/login.php'); ?>
				  </div>
				  <!-- login tab ends -->

				  <!-- font tab starts -->
				  <div class="tab-pane fade" id="nav-font" role="tabpanel" aria-labelledby="nav-font-tab">
				  	<?php include_once('templates/font.php'); ?>
				  </div>
				  <!-- font tab ends -->

				  <!-- logo tab starts -->
				  <div class="tab-pane fade" id="nav-logo" role="tabpanel" aria-labelledby="nav-logo-tab">
				  	<?php include_once('templates/logo.php'); ?>
				  </div>
				  <!-- logo tab ends -->

				  <!-- social tab starts -->
				  <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
				  	<?php include_once('templates/social.php'); ?>
				  </div>
				  <!-- social tab ends -->

				  <!-- google captcha tab starts -->
				  <div class="tab-pane fade" id="nav-google" role="tabpanel" aria-labelledby="nav-google-tab">
				  	<?php include_once('templates/google_captcha.php'); ?>
				  </div>
				  <!-- google captcha tab ends -->
				  <!-- export/import tab starts -->
				  <div class="tab-pane fade" id="nav-expi" role="tabpanel" aria-labelledby="nav-expi-tab">
				  	<?php include_once('templates/export_import.php'); ?>
				  </div>
				  <!-- export/import tab ends -->
				</div>
            </div>
		</div>
	</div>
</div>


<div id="advsign-modal">
    <div class="advsign-modal-content">
        <?php
        if (isset($_GET['saved_id'])) {
            do_action('advsign_processing_complete', sanitize_text_field($_GET['saved_id']));
        }
        ?>
    </div>
</div>



