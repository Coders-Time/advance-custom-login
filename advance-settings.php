<?php 
defined( 'ABSPATH' ) || exit;
?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xl-8 m-auto">

				<div class="text-center bg-secondary clearfix py-2 mt-5  rounded">
                    <h1 class="bd-title text-white" id="content"> <?php _e('Advance Custom login', 'advsign'); ?> </h1>
                </div>


                <div class="design_area">
                	<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
					</div>


                </div>

				
			</div>
		</div>
	</div>
</div>
