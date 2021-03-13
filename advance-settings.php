<?php 
defined( 'ABSPATH' ) || exit;

?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xl-10 m-auto">
				<div class="jumbotron text-center bg-dark clearfix py-2 mt-5 rounded">
                    <h1 class="bd-title text-white" id="content"> <?php _e('Advance Custom login', 'advsign'); ?> </h1>
                </div>			

			<div class="design_area my-5">

				<nav>
				  <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
				    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php esc_html_e( 'Dashboard', 'advsign' ); ?></a>
				    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e( 'Background', 'advsign' ); ?></a>
				    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> <?php esc_html_e( 'Login form', 'advsign' ); ?> </a>
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

				  	<form>
						<div class="custom-control custom-switch my-5">
						  <input type="checkbox" value="0" class="custom-control-input" id="enableplugin">
						  <label class="custom-control-label" for="enableplugin"> <?php esc_html_e( 'Enable the plugin', 'advsign' ); ?> </label>
						</div>
						<div class="form-group alert alert-info fade show">
					    	<label for="loginurl"> <?php esc_html_e( 'View Login Page', 'advsign' ); ?>  </label>
					    	<input type="url" value="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="form-control " id="loginurl" aria-describedby="loginurlHelp" readonly>
					    	<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="loginurlHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Go to login page', 'advsign' ); ?> </small></a>
					  	</div>
						<!-- <div class="form-control"> -->
							<button type="submit" class="btn btn-primary btn-block mt-5"> <?php esc_html_e( 'Submit form', 'advsign' ); ?> </button>
						<!-- </div> -->
					</form>

				  </div>
				  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

				  	<form> 
					  <div class="form-group">
					    <label for="select-background"> <?php esc_html_e( 'Select Background', 'advsign' ); ?>	</label>
					    <select class="form-control" id="select-background" name="select-background">
					      <option value="0"> <?php esc_html_e( 'Select Background', 'advsign' ); ?> </option>
					      <option value="1"> <?php esc_html_e( 'Default Background', 'advsign' ); ?> </option>
					      <option value="2"> <?php esc_html_e( 'Image Background', 'advsign' ); ?> </option>
					      <option value="3"> <?php esc_html_e( 'Color Background', 'advsign' ); ?> </option>
					      <option value="4"> <?php esc_html_e( 'Slider Background', 'advsign' ); ?> </option>
					    </select>
					  </div>
					   
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Example textarea</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					</form>

				  </div>
				  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
				</div>

            </div>
		</div>
	</div>
</div>
