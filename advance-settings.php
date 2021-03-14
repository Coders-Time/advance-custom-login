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
				  <!-- dashboard tab starts -->
				  <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">

				  	<form>
						<!-- <div class="custom-control custom-switch my-5">
						  <input type="checkbox" value="0" class="custom-control-input" id="enableplugin">
						  <label class="custom-control-label" for="enableplugin"> <?php esc_html_e( 'Enable the plugin', 'advsign' ); ?> </label>
						</div> -->
						<div class="custom-control custom-switch my-5">
							<input type="checkbox" class="custom-control-input" id="customSwitch1">
							<label class="custom-control-label" for="customSwitch1"><?php esc_html_e( 'Enable the plugin', 'advsign' ); ?></label>
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
				  <!-- dashboard tab ends -->
				  <!-- background tab starts -->
				  <div class="tab-pane fade" id="nav-background" role="tabpanel" aria-labelledby="nav-background-tab">

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
						    <label for="colorPicker">  <?php esc_html_e( 'Select Background Color', 'advsign' ); ?> </label>
						    <input type="text" class="form-control" id="colorPicker" aria-describedby="bgcolorHelp">
						    <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
						</div>
					   
					  <!-- <div class="form-group">
					    <label for="exampleFormControlTextarea1">Example textarea</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div> -->
					</form>

				  </div>
				  <!-- background tab ends -->
				  <!-- login tab starts -->
				  <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
				  	<div class="border p-3 mb-3">
						<form> 
							<div class="form-group">
								<label for="login-form"> <?php esc_html_e( 'Login Form Position', 'advsign' ); ?>	</label>
								<select class="form-control" id="login-form" name="login-form">
								<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
								</select>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<label for="select-background"> <?php esc_html_e( 'Float Settings', 'advsign' ); ?>	</label>
						<div>
							<input type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
								<?php esc_html_e( 'Left', 'advsign' ); ?> 
							</label>
						</div>
						<div>
							<input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								<?php esc_html_e( 'Center', 'advsign' ); ?> 
							</label>
						</div>
						<div>
							<input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								<?php esc_html_e( 'Right', 'advsign' ); ?> 
							</label>
						</div>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="form-group">
								<label for="select-background"> <?php esc_html_e( 'Select Background', 'advsign' ); ?>	</label>
								<select class="form-control" id="select-background" name="select-background">
								<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Static Background Color', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Static Background Image', 'advsign' ); ?> </option>
								</select>
							</div>
						</form>
					</div>
					<div class="form-group alert border fade show">
						<label for="bg_img"> <?php esc_html_e( 'Background Image', 'advsign' ); ?>  </label>
						<input type="url" value="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="form-control " id="bg_img" aria-describedby="bg_img" readonly>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="uploadHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </small></a>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="previewHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Preview', 'advsign' ); ?> </small></a>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="removeHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Remove', 'advsign' ); ?> </small></a>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="form-group">
								<label for="background-repeat"> <?php esc_html_e( 'Background Repeat', 'advsign' ); ?>	</label>
								<select class="form-control" id="background-repeat" name="background-repeat">
								<option value="0"> <?php esc_html_e( 'No Repeat', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Repeat', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Repeat Horizontally', 'advsign' ); ?> </option>
								<option value="3"> <?php esc_html_e( 'Repeat Vertically', 'advsign' ); ?> </option>
								</select>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="form-group">
								<label for="background-position"> <?php esc_html_e( 'Background Position', 'advsign' ); ?>	</label>
								<select class="form-control" id="background-position" name="background-position">
								<option value="0"> <?php esc_html_e( 'Left Top', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Left Center', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Left Bottom', 'advsign' ); ?> </option>
								<option value="3"> <?php esc_html_e( 'Right Top', 'advsign' ); ?> </option>
								<option value="4"> <?php esc_html_e( 'Right Center', 'advsign' ); ?> </option>
								<option value="5"> <?php esc_html_e( 'Right Bottom', 'advsign' ); ?> </option>
								<option value="6"> <?php esc_html_e( 'Center Top', 'advsign' ); ?> </option>
								<option value="7"> <?php esc_html_e( 'Center Center', 'advsign' ); ?> </option>
								<option value="8"> <?php esc_html_e( 'Center Bottom', 'advsign' ); ?> </option>
								</select>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="background-effect"> <?php esc_html_e( 'Background Effect', 'advsign' ); ?>	</label>
									<select class="form-control" id="background-effect" name="background-effect">
									<option value="0"> <?php esc_html_e( 'No Overlay Effect', 'advsign' ); ?> </option>
									<option value="1"> <?php esc_html_e( 'Overlay Effect 1', 'advsign' ); ?> </option>
									<option value="2"> <?php esc_html_e( 'Overlay Effect 2', 'advsign' ); ?> </option>
									<option value="3"> <?php esc_html_e( 'Overlay Effect 3', 'advsign' ); ?> </option>
									</select>
								</div>
								<div class="col-md-6 form-group">
									<label for="customRange1"><?php esc_html_e( 'Login Form Width', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="customRange1">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Select Border Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="borderColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
								<div class="col-md-6 form-group">
									<label for="customRange2"><?php esc_html_e( 'Border Radius', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="customRange2">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="border-style"> <?php esc_html_e( 'Border Style', 'advsign' ); ?>	</label>
									<select class="form-control" id="border-style" name="border-style">
									<option value="0"> <?php esc_html_e( 'None', 'advsign' ); ?> </option>
									<option value="1"> <?php esc_html_e( 'Solid', 'advsign' ); ?> </option>
									<option value="2"> <?php esc_html_e( 'Dotted', 'advsign' ); ?> </option>
									<option value="3"> <?php esc_html_e( 'Dashed', 'advsign' ); ?> </option>
									<option value="4"> <?php esc_html_e( 'Double', 'advsign' ); ?> </option>
									</select>
								</div>
								<div class="col-md-6 form-group">
									<label for="customRange3"><?php esc_html_e( 'Border Thickness', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="customRange3">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="border-style"> <?php esc_html_e( 'Enable Form Shadow', 'advsign' ); ?>	</label>
									<div>
										<input type="radio" name="formRadios" id="yesRadios1" value="option1" checked>
										<label class="form-check-label" for="yesRadios1">
											<?php esc_html_e( 'Yes', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="formRadios" id="noRadios2" value="option2">
										<label class="form-check-label" for="noRadios2">
											<?php esc_html_e( 'No', 'advsign' ); ?> 
										</label>
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="formShadowColorPicker">  <?php esc_html_e( 'Form Shadow Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="formShadowColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
							</div>
						</form>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary mt-5"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
					</div>
					

				  </div>
				  <!-- login tab ends -->
				  <!-- font tab starts -->
				  <div class="tab-pane fade" id="nav-font" role="tabpanel" aria-labelledby="nav-font-tab">Font
				  </div>
				  <!-- font tab ends -->
				  <!-- logo tab starts -->
				  <div class="tab-pane fade" id="nav-logo" role="tabpanel" aria-labelledby="nav-logo-tab">Logo
				  </div>
				  <!-- logo tab ends -->
				  <!-- social tab starts -->
				  <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">Social
				  </div>
				  <!-- social tab ends -->
				  <!-- google captcha tab starts -->
				  <div class="tab-pane fade" id="nav-google" role="tabpanel" aria-labelledby="nav-google-tab">Google Captcha
				  </div>
				  <!-- google captcha tab ends -->
				  <!-- export/import tab starts -->
				  <div class="tab-pane fade" id="nav-expi" role="tabpanel" aria-labelledby="nav-expi-tab">Export/Import
				  </div>
				  <!-- export/import tab ends -->
				</div>
            </div>
		</div>
	</div>
</div>
