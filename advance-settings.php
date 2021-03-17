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
				  <!-- dashboard tab ends -->
				  <!-- background tab starts -->
				  <div class="tab-pane fade" id="nav-background" role="tabpanel" aria-labelledby="nav-background-tab">

				  	<form> 
					  <div class="form-group mb-5">
					    <label for="select-background"> <?php esc_html_e( 'Select Background', 'advsign' ); ?>	</label>
					    <select class="form-control" id="select-background" name="select-background">
					      <option value="0"> <?php esc_html_e( 'Select Background', 'advsign' ); ?> </option>
					      <option value="1"> <?php esc_html_e( 'Default Background', 'advsign' ); ?> </option>
					      <option value="2"> <?php esc_html_e( 'Image Background', 'advsign' ); ?> </option>
					      <option value="3"> <?php esc_html_e( 'Color Background', 'advsign' ); ?> </option>
					      <option value="4"> <?php esc_html_e( 'Slider Background', 'advsign' ); ?> </option>
					    </select>
					  </div>


					  	<div class="bg_color_change form-group d-none">
						    <label for="colorPicker">  <?php esc_html_e( 'Set Background Color', 'advsign' ); ?> </label>
						    <input type="text" class="form-control" id="colorPicker" value="#dd3333" aria-describedby="bgcolorHelp" name="login-background-color" data-default-color="#000000">
						    <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
						</div>


						<div class="bg_img_change_area form-group mb-3 d-none">
							<label for="background_img">  <?php esc_html_e( 'Set Background Image', 'advsign' ); ?> </label>
							<div class="preview_image mb-3">
								<img src="http://localhost/wordpress/wp-content/plugins/admin-custom-login//images/background-image.png" class="img-fluid uploaded_login_bg_img" data-id="0" alt="<?php esc_html_e( 'Background image', 'advsign' ); ?>">
							</div>
							<div class="button_area ml-5">
								<button type="button" class="btn pl-5 pr-5 btn-lg btn-primary upload_login_bg_img"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
								<button type="button" class="btn pl-5 pr-5 btn-lg btn-warning ml-3 remove_login_bg_img d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
							</div>
						</div>


						<div class="bg_slider_change form_group mt-3 mb-5 d-none">
							<label for="lbgsa-type"> <?php esc_html_e( 'Slider animation type', 'advsign' ); ?> </label>
						    <select class="form-control" name="lbgsa-type" id="lbgsa-type">
						      <option value="1"> <?php esc_html_e( 'Slides only', 'advsign' ); ?> </option>
						      <option value="2"> <?php esc_html_e( 'Slider with control', 'advsign' ); ?> </option>
						      <option value="3"> <?php esc_html_e( 'Slider with indicator', 'advsign' ); ?> </option>
						      <option value="4"> <?php esc_html_e( 'Slider fade effect', 'advsign' ); ?> </option>
						      <option value="5"> <?php esc_html_e( 'Slider Disable Touch', 'advsign' ); ?> </option>
						    </select>
						</div>


						<div class="bg_slider_change form-group d-none">
							<label for="gallery">  <?php esc_html_e( 'Set Background Gallery', 'advsign' ); ?> </label>
							<div class="preview_gallery mb-3">

								<div id="logincarousel" class="carousel slide" data-ride="carousel">
								  <ol class="carousel-indicators"> </ol>
								  <div class="carousel-inner"> </div>
								  <div class="control d-none">
								  	<a class="carousel-control-prev" href="#logincarousel" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#logincarousel" role="button" data-slide="next">
									    <span class="carousel-control-next-icon" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
								  </div>
								  
								</div>

							</div>
							<div class="button_area ml-5">
								<button type="button" class="btn pl-5 pr-5 btn-lg btn-primary upload_login_bg_gallery"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
								<button type="button" class="btn pl-5 pr-5 btn-lg btn-warning ml-3 remove_login_bg_gallery d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
							</div>
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
				  	<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="form-group">
								<label for="select-background"> <?php esc_html_e( 'Select Background', 'advsign' ); ?>	</label>
								<select class="form-control" id="select_background_login" name="select-background">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
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
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<div>
										<label for="username_email"><?php esc_html_e( 'Username or Email Field Label Text', 'advsign' ); ?></label>
    									<input type="text" class="form-control" id="username_email" aria-describedby="username_email">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="username_placeholder"><?php esc_html_e( 'Username or Email Field Placeholder Text', 'advsign' ); ?></label>
    								<input type="text" class="form-control" id="username_placeholder" aria-describedby="username_placeholder">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<div>
										<label for="login_button_text"><?php esc_html_e( 'Log In Button Text', 'advsign' ); ?></label>
    									<input type="text" class="form-control" id="login_button_text" aria-describedby="login_button_text">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="username_placeholder"><?php esc_html_e( 'Forcefully Redirect', 'advsign' ); ?></label>
									<div class="form-check form-check-inline ml-3">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-check-label" for="inlineRadio1">Yes</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">No</label>
									</div>
    								<input type="text" class="form-control" id="username_placeholder" aria-describedby="username_placeholder" placeholder="Redirect URL">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<div>
										<label for="redirect_user"><?php esc_html_e( 'Redirect Users After Login (Not Work For Admin)', 'advsign' ); ?></label>
    									<input type="text" class="form-control" id="redirect_user" aria-describedby="redirect_user">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="display_text"><?php esc_html_e( 'Display Note To User Above Login Form', 'advsign' ); ?></label>
    								<input type="text" class="form-control" id="display_text" aria-describedby="display_text">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Message Font Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="messageFontColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
								<div class="col-md-6 form-group">
									<label for="customRange2"><?php esc_html_e( 'Message Font Size', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="customRange2">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="form-group">
								<label for="exampleFormControlTextarea1"><?php esc_html_e( 'Custom Css', 'advsign' ); ?></label>
    							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								<small class="form-text text-muted"><?php esc_html_e( 'Enter any custom css you want to apply on login panel.Note: Please Do Not Use Style Tag With Custom CSS.', 'advsign' ); ?></small>
							</div>
						</form>
					</div>

					<div class="text-center">
						<button type="submit" class="btn btn-primary mt-5"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
					</div>
				  </div>
				  <!-- login tab ends -->
				  <!-- font tab starts -->
				  <div class="tab-pane fade" id="nav-font" role="tabpanel" aria-labelledby="nav-font-tab">
				 	<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Headline Font Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="headlineFontColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
								<div class="col-md-4 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Input Font Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="inputFontColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
								<div class="col-md-4 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Link Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="linkColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
							</div>
						</form>
					</div>
				 	<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Button Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="buttonColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
								<div class="col-md-4 form-group">
									<label for="colorPicker">  <?php esc_html_e( 'Login Button font Color', 'advsign' ); ?> </label>
									<input type="text" class="form-control" id="loginButtonColorPicker" aria-describedby="bgcolorHelp">
									<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
								</div>
							</div>
						</form>
					</div>
				 	<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="headlineRange"><?php esc_html_e( 'Headline Font size', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="headlineRange">
								</div>
								<div class="col-md-6 form-group">
									<label for="inputFontRange"><?php esc_html_e( 'Input Font Size', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="inputFontRange">
								</div>
							</div>
						</form>
					</div>
				 	<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="linkfontRange"><?php esc_html_e( 'Link Font Size', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="linkfontRange">
								</div>
								<div class="col-md-6 form-group">
									<label for="buttonFontRange"><?php esc_html_e( 'Button Font Size', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="buttonFontRange">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<div class="row">
							<div class="col-md-3 form-group">
								<label for="showRememberField"><?php esc_html_e( 'Show Remember Me Field', 'advsign' ); ?></label>
							</div>
							<div class="col-md-6 form-group">
								<div class="form-check form-check-inline ml-5">
									<input class="form-check-input" type="radio" name="showRememberRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="showRememberRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 form-group">
								<label for="showRememberField"><?php esc_html_e( 'Show Back To Site Link', 'advsign' ); ?></label>
							</div>
							<div class="col-md-6 form-group">
								<div class="form-check form-check-inline ml-5">
									<input class="form-check-input" type="radio" name="showBackSiteRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="showBackSiteRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 form-group">
								<label for="showRememberField"><?php esc_html_e( 'Show Copyright link text', 'advsign' ); ?></label>
							</div>
							<div class="col-md-6 form-group">
								<div class="form-check form-check-inline ml-5">
									<input class="form-check-input" type="radio" name="showCopurightedRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="showCopurightedRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 form-group">
								<label for="showRememberField"><?php esc_html_e( 'Enable Link shadow', 'advsign' ); ?></label>
							</div>
							<div class="col-md-6 form-group">
								<div class="form-check form-check-inline ml-5">
									<input class="form-check-input" type="radio" name="EnableLinkRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="EnableLinkRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<label for="colorPicker">  <?php esc_html_e( 'Link Shadow Color', 'advsign' ); ?> </label>
						<input type="text" class="form-control" id="linkShadowColorPicker" aria-describedby="bgcolorHelp">
						<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="headline-font-style"> <?php esc_html_e( 'Headline Font Style', 'advsign' ); ?>	</label>
									<select class="form-control" id="headline-font-style" name="headline-font-style">
									<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
									<option value="1"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
									<option value="2"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
									</select>
								</div>
								<div class="col-md-6 form-group">
									<label for="input-font-style"> <?php esc_html_e( 'Input Font Style', 'advsign' ); ?>	</label>
									<select class="form-control" id="input-font-style" name="input-font-style">
									<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
									<option value="1"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
									<option value="2"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="headline-font-style"> <?php esc_html_e( 'Link Font Style', 'advsign' ); ?>	</label>
								<select class="form-control" id="headline-font-style" name="headline-font-style">
								<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label for="headline-font-style"> <?php esc_html_e( 'Button Font Style', 'advsign' ); ?>	</label>
								<select class="form-control" id="headline-font-style" name="headline-font-style">
								<option value="0"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
								<option value="1"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
								<option value="2"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
								</select>
							</div>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<div class="row">
							<div class="col-md-3 form-group">
								<label for="enableInputField"><?php esc_html_e( 'Enable Input Box Icon', 'advsign' ); ?></label>
							</div>
							<div class="col-md-6 form-group">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="enableInputRadioOptions" id="enableInput1" value="option1">
									<label class="form-check-label" for="enableInput1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="enableInputRadioOptions" id="enableInput2" value="option2">
									<label class="form-check-label" for="enableInput2">No</label>
								</div>
							</div>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="icon_for_user_input"><?php esc_html_e( 'Icon For user Input Box', 'advsign' ); ?></label>
									<input type="text" class="form-control" id="icon_for_user_input" aria-describedby="icon_for_user_input">
								</div>
								<div class="col-md-6 form-group">
									<label for="icon_for_user_password"><?php esc_html_e( 'Icon For Password Input Box', 'advsign' ); ?></label>
									<input type="text" class="form-control" id="icon_for_user_password" aria-describedby="icon_for_user_password">
								</div>
							</div>
						</form>
					</div>
				  </div>
				  <!-- font tab ends -->
				  <!-- logo tab starts -->
				  <div class="tab-pane fade" id="nav-logo" role="tabpanel" aria-labelledby="nav-logo-tab">
				  	<div class="form-group alert border fade show">
						<label for="login_logo"> <?php esc_html_e( 'Logo Image', 'advsign' ); ?>  </label>
						<input type="url" value="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" class="form-control " id="login_logo" aria-describedby="login_logoHelp" readonly>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="login_logoHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </small></a>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" target="blank"><small id="login_logoHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Preview', 'advsign' ); ?> </small></a>
					</div>
					<div class="border p-3 mb-3 rounded">
						<label for="select-background"> <?php esc_html_e( 'Show Logo', 'advsign' ); ?>	</label>
						<div>
							<input type="radio" name="showLogo" id="showLogo1" value="option1" checked>
							<label class="form-check-label" for="showLogo1">
								<?php esc_html_e( 'Yes', 'advsign' ); ?> 
							</label>
						</div>
						<div>
							<input type="radio" name="showLogo" id="showLogo2" value="option2">
							<label class="form-check-label" for="showLogo2">
								<?php esc_html_e( 'No', 'advsign' ); ?> 
							</label>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="logo_width"><?php esc_html_e( 'Logo Image Width', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="logo_width">
								</div>
								<div class="col-md-6 form-group">
									<label for="logo_height"><?php esc_html_e( 'Logo Image Height', 'advsign' ); ?></label>
									<input type="range" class="custom-range" id="logo_height">
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="logo_link_url"><?php esc_html_e( 'Logo Link URL', 'advsign' ); ?></label>
									<input type="text" class="form-control" id="logo_link_url" aria-describedby="logo_link_url">
								</div>
								<div class="col-md-6 form-group">
									<label for="logo_title"><?php esc_html_e( 'Logo Image Title', 'advsign' ); ?></label>
									<input type="text" class="form-control" id="logo_title" aria-describedby="logo_title">
								</div>
							</div>
						</form>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary mt-5"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
					</div>
				  </div>
				  <!-- logo tab ends -->
				  <!-- social tab starts -->
				  <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
				  	<div class="form-group border p-3 mb-3 rounded">
						<label for="social_icon_placement"> <?php esc_html_e( 'Social Icon Placement', 'advsign' ); ?>	</label>
						<select class="form-control" id="social_icon_placement" name="social_icon_placement">
							<option value="0"> <?php esc_html_e( 'No Icon', 'advsign' ); ?> </option>
							<option value="1"> <?php esc_html_e( 'Outer', 'advsign' ); ?> </option>
							<option value="2"> <?php esc_html_e( 'Inner', 'advsign' ); ?> </option>
							<option value="3"> <?php esc_html_e( 'Both', 'advsign' ); ?> </option>
						</select>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="select-background"> <?php esc_html_e( 'Social Media Icon Size', 'advsign' ); ?>	</label>
									<div>
										<input type="radio" name="social_icon_size" id="social_icon_size1" value="option1" checked>
										<label class="form-check-label" for="social_icon_size1">
											<?php esc_html_e( 'Small', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="social_icon_size" id="social_icon_size2" value="option2">
										<label class="form-check-label" for="social_icon_size2">
											<?php esc_html_e( 'Medium', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="social_icon_size" id="social_icon_size3" value="option2">
										<label class="form-check-label" for="social_icon_size3">
											<?php esc_html_e( 'Rectangle', 'advsign' ); ?> 
										</label>
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="select-background"> <?php esc_html_e( 'Social Media Icon Layout', 'advsign' ); ?>	</label>
									<div>
										<input type="radio" name="social_icon_layout" id="social_icon_layout1" value="option1" checked>
										<label class="form-check-label" for="social_icon_layout1">
											<?php esc_html_e( 'Rectangle', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="social_icon_layout" id="social_icon_layout2" value="option2">
										<label class="form-check-label" for="social_icon_layout2">
											<?php esc_html_e( 'Circle', 'advsign' ); ?> 
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Color', 'advsign' ); ?> </label>
								<input type="text" class="form-control" id="socialIconColorPicker" aria-describedby="bgcolorHelp">
								<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
							</div>
							<div class="col-md-6 form-group">
								<label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Color On Hover', 'advsign' ); ?> </label>
								<input type="text" class="form-control" id="socialHoverColorPicker" aria-describedby="bgcolorHelp">
								<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
							</div>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Background Color', 'advsign' ); ?> </label>
								<input type="text" class="form-control" id="socialIconbgColorPicker" aria-describedby="bgcolorHelp">
								<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
							</div>
							<div class="col-md-6 form-group">
								<label for="colorPicker">  <?php esc_html_e( 'Social Media Background Color On Hover', 'advsign' ); ?> </label>
								<input type="text" class="form-control" id="socialHoverbgColorPicker" aria-describedby="bgcolorHelp">
								<small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
							</div>
						</div>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="select-background"> <?php esc_html_e( 'Enable To Open Social Link In New Window', 'advsign' ); ?>	</label>
									<div>
										<input type="radio" name="social_icon_new_tab" id="social_icon_new1" value="option1" checked>
										<label class="form-check-label" for="social_icon_size1">
											<?php esc_html_e( 'Yes', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="social_icon_new_tab" id="social_icon_new2" value="option2">
										<label class="form-check-label" for="social_icon_size2">
											<?php esc_html_e( 'No', 'advsign' ); ?> 
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
						<label for="logo_link_url"><?php esc_html_e( 'Social Links', 'advsign' ); ?></label>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="facebook_link"><?php esc_html_e( 'Facebook', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
										</div>
										<input type="text" class="form-control" id="facebook_link" placeholder="facebook account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="twitter_link"><?php esc_html_e( 'Twitter', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-twitter"></i></div>
										</div>
										<input type="text" class="form-control" id="twitter_link" placeholder="twiiter account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="linkedin_link"><?php esc_html_e( 'Linkedin', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-linkedin-in"></i></div>
										</div>
										<input type="text" class="form-control" id="linkedin_link" placeholder="linkedin account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="g+_link"><?php esc_html_e( 'Google Plus', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-google-plus-g"></i></div>
										</div>
										<input type="text" class="form-control" id="g+_link" placeholder="G+ account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="pinterest_link"><?php esc_html_e( 'Pinterest', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-pinterest-p"></i></div>
										</div>
										<input type="text" class="form-control" id="pinterest_link" placeholder="pinterest account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="digg_link"><?php esc_html_e( 'Digg', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-digg"></i></div>
										</div>
										<input type="text" class="form-control" id="digg_link" placeholder="digg account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="youtube_link"><?php esc_html_e( 'YouTube', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-youtube"></i></div>
										</div>
										<input type="text" class="form-control" id="youtube_link" placeholder="youtube account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="flickr_link"><?php esc_html_e( 'Flickr', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-flickr"></i></div>
										</div>
										<input type="text" class="form-control" id="flickr_link" placeholder="flickr account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="tumblr_link"><?php esc_html_e( 'Tumblr', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-tumblr"></i></div>
										</div>
										<input type="text" class="form-control" id="tumblr_link" placeholder="tumblr account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="skype_link"><?php esc_html_e( 'Skype', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-skype"></i></div>
										</div>
										<input type="text" class="form-control" id="skype_link" placeholder="skype account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="insta_link"><?php esc_html_e( 'Instagram', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-instagram"></i></div>
										</div>
										<input type="text" class="form-control" id="insta_link" placeholder="instagram account url">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only" for="telegram_link"><?php esc_html_e( 'Telegram', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-telegram-plane"></i></div>
										</div>
										<input type="text" class="form-control" id="telegram_link" placeholder="telegram account url">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only" for="watsapp_link"><?php esc_html_e( 'Watsapp', 'advsign' ); ?></label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										<div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
										</div>
										<input type="text" class="form-control" id="watsapp_link" placeholder="watsapp account url">
									</div>
								</div>
							</div>
						</form>
					</div>
				  </div>
				  <!-- social tab ends -->
				  <!-- google captcha tab starts -->
				  <div class="tab-pane fade" id="nav-google" role="tabpanel" aria-labelledby="nav-google-tab">
				 	 <div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="captcha"> <?php esc_html_e( 'Captcha Display', 'advsign' ); ?>	</label>
									<div>
										<input type="radio" name="google_captcha" id="google_captcha1" value="option1" checked>
										<label class="form-check-label" for="social_icon_size1">
											<?php esc_html_e( 'Yes', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="google_captcha" id="google_captcha2" value="option2">
										<label class="form-check-label" for="social_icon_size2">
											<?php esc_html_e( 'No', 'advsign' ); ?> 
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
				 	 <div class="border p-3 mb-3 rounded">
						<form> 
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="captcha_version"> <?php esc_html_e( 'Choose Google Captcha Version', 'advsign' ); ?></label>
									<div>
										<input type="radio" name="captcha_version" id="captcha_version1" value="option1" checked>
										<label class="form-check-label" for="captcha_version2">
											<?php esc_html_e( 'v2', 'advsign' ); ?> 
										</label>
									</div>
									<div>
										<input type="radio" name="captcha_version" id="captcha_version2" value="option2">
										<label class="form-check-label" for="captcha_version3">
											<?php esc_html_e( 'v3', 'advsign' ); ?> 
										</label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="form-group">
								<label for="site_key"><?php esc_html_e( 'Site Key', 'advsign' ); ?></label>
								<input type="text" class="form-control" id="site_key" aria-describedby="logo_link_url">
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<div class="form-group">
								<label for="secret_key"><?php esc_html_e( 'Secret Key', 'advsign' ); ?></label>
								<input type="text" class="form-control" id="secret_key" aria-describedby="logo_link_url">
							</div>
						</form>
					</div>
				  </div>
				  <!-- google captcha tab ends -->
				  <!-- export/import tab starts -->
				  <div class="tab-pane fade" id="nav-expi" role="tabpanel" aria-labelledby="nav-expi-tab">
				  	<div class="border p-3 mb-3 rounded">
						<form> 
							<label for="captcha"> <?php esc_html_e( 'Export File', 'advsign' ); ?>	</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Export File" aria-label="export-file" aria-describedby="basic-addon2" readonly>
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button"><?php esc_html_e( 'Export', 'advsign' ); ?></button>
								</div>
							</div>
						</form>
					</div>
					<div class="border p-3 mb-3 rounded">
						<form> 
							<label for="captcha"> <?php esc_html_e( 'Import File', 'advsign' ); ?>	</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Import File" aria-label="import-file" aria-describedby="basic-addon2" readonly>
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button"><?php esc_html_e( 'Import', 'advsign' ); ?></button>
								</div>
							</div>
						</form>
					</div>
				  </div>
				  <!-- export/import tab ends -->
				</div>
            </div>
		</div>
	</div>
</div>
