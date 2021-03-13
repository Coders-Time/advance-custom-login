<?php 
defined( 'ABSPATH' ) || exit;
?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xl-8 m-auto">
				<div class="jumbotron text-center bg-dark clearfix py-2 mt-5 rounded">
                    <h1 class="bd-title text-white" id="content"> <?php _e('Advance Custom login', 'advsign'); ?> </h1>
                </div>
			</div>
			<div class="design_area my-5">
                	<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Dashboard</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Background</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Login Form</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="font_setting_tab" data-bs-toggle="tab" data-bs-target="#font_setting" type="button" role="tab" aria-controls="font_setting" aria-selected="false">Font</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="logo_setting_tab" data-bs-toggle="tab" data-bs-target="#logo_setting" type="button" role="tab" aria-controls="logo_setting" aria-selected="false">Logo</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="social_setting_tab" data-bs-toggle="tab" data-bs-target="#social_setting" type="button" role="tab" aria-controls="social_setting" aria-selected="false">Social</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="google_captcha_tab" data-bs-toggle="tab" data-bs-target="#google_captcha" type="button" role="tab" aria-controls="google_captcha" aria-selected="false">Google Captcha</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="export_import_tab" data-bs-toggle="tab" data-bs-target="#export_import" type="button" role="tab" aria-controls="export_import" aria-selected="false">Export/Import</button>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					<!-- Dashboard Starts -->
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="container my-5">
							<h3>Admin Custom Login Status</h3>

							<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Default radio
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								Default checked radio
							</label>
							</div>
						</div>
					  
					  </div><!-- Dashboard Ends -->
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Hi</div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Meow</div>
					  <div class="tab-pane fade" id="font_setting" role="tabpanel" aria-labelledby="font_setting">Font Setting</div>
					  <div class="tab-pane fade" id="logo_setting" role="tabpanel" aria-labelledby="logo_setting">Logo Setting</div>
					  <div class="tab-pane fade" id="social_setting" role="tabpanel" aria-labelledby="social_setting">Social Setting</div>
					  <div class="tab-pane fade" id="google_captcha" role="tabpanel" aria-labelledby="google_captcha">Google Captcha</div>
					  <div class="tab-pane fade" id="export_import" role="tabpanel" aria-labelledby="export_import">Export/Import</div>
					</div>
            </div>
		</div>
	</div>
</div>
