<?php

$bg_img_id = get_option('bg_img_id');
$bg_img_id = null;
$bg_image_path = WP_CTL_ASSET_FILE .'images/background-image.png';

if ( null !== $bg_img_id ) 
{
    $bg_image_path = wp_get_attachment_image_src($bg_img_id,'full')[0];
}

$login_bg_color = get_option('login_bg_color');

if ( null === $login_bg_color) {
    $login_bg_color = '#f0f0f1';
}

$login_bg_slider = get_option('login_bg_slider');
$bg_slider_type = 0;
$bg_sliders = [];

if ( null !== $login_bg_slider) {
    $bg_slider_type = $login_bg_slider['bg_slider_type'];
    $bg_sliders = $login_bg_slider['bg_sliders'];
    $bg_sliders = array_map(function($img_id){ return wp_get_attachment_image_src($img_id,'full')[0];}, $bg_sliders );

}


?>
					
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

<div class="bg_default form-group d-none">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <label for="default_img">  <?php esc_html_e( 'Default Image', 'advsign' ); ?></label>
        <div class="preview_image mb-3">
            <img src="<?php echo $bg_image_path; ?>" class="img-thumbnail" alt="<?php esc_html_e( 'Default image', 'advsign' ); ?>">
        </div>
    </form>
</div>

<div class="bg_color_change form-group d-none">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <label for="colorPicker">  <?php esc_html_e( 'Set Background Color', 'advsign' ); ?> </label>
        <input type="text" class="form-control" id="colorPicker" value="<?php echo(get_option('login_bg_color')); ?>" aria-describedby="bgcolorHelp" name="login_bg_color" data-default-color="#000000">
        <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
        <input type='hidden' name='action' value='bg_color_form' />
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-5" name="submit" value="Submit"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
        </div>								
    </form>
</div>

<div class="bg_img_change_area form-group mb-3 d-none">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <label for="background_img">  <?php esc_html_e( 'Set Background Image', 'advsign' ); ?> </label>
        <div class="preview_image mb-3">
            <img src="<?php echo $bg_image_path ?>" class="img-thumbnail uploaded_login_bg_img" data-id="0" alt="<?php esc_html_e( 'Background image', 'advsign' ); ?>">
            <input type="hidden" name="bg_img_id" id="bg_img_id">
        </div>
        <input type="hidden" name="action" value="bg_img_form">
        <input type="hidden" name="advsignbgimg" value="<?php echo md5(time()); ?>">
        <?php wp_nonce_field('bg_img_advsign_form', 'bg_img_advsign_nonce'); ?>
            <div class="button_area text-center">
            <button type="button" class="btn pl-3 pr-3 btn-primary upload_login_bg_img"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
            <button type="submit" name="bg_img_id_submit" class="btn pl-3 pr-3 btn-success ml-3 submit_login_bg_img d-none"><?php esc_html_e( 'Submit', 'advsign' ); ?></button>
            <button type="button" class="btn pl-3 pr-3 btn-danger ml-3 remove_login_bg_img d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
        </div>
    </form>
</div>


<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">

    <div class="bg_slider_change form_group mt-3 mb-5 d-none">
        <label for="lbgsa-type"> <?php esc_html_e( 'Slider animation type', 'advsign' ); ?> </label>
        <select class="form-control" name="slide-type" id="lbgsa-type">
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
            <div id="logincarousel" class="carousel slide <?php echo $bg_slider_type ==4 ? 'carousel-fade': ''; ?>" data-ride="carousel" >
                <ol class="carousel-indicators"> 
                    <?php 
                    if ( $bg_slider_type && $c = count($bg_sliders) ) {
                        for ( $i = 0; $i < $c; $i++ ) { 
                            $active_class = $i == 0 ? 'active' : '';
                        ?>
                            <li data-target="#logincarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active_class ?>"></li>
                        <?php }
                    }
                    ?>
                 </ol>
                <div class="carousel-inner">
                    <?php 
                    if ( $bg_slider_type && count($bg_sliders) ) {
                        foreach ( $bg_sliders as $key => $bg_slider ) { 
                            $active_class = $key == 0 ? 'active' : '';
                            // sliderChange( $bg_slider_type, null, $active_class);
                            ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                              <img src="<?php echo $bg_slider; ?>" class="img-fluid d-block w-100" alt="">
                        </div>
                        <?php }
                    }
                    ?>
                </div>
                <div class="control <?php echo $bg_slider_type ? '' : 'd-none'; ?>">
                <a class="carousel-control-prev" href="#logincarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"><?php esc_html_e( 'Previous', 'advsign' ); ?></span>
                    </a>
                    <a class="carousel-control-next" href="#logincarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"><?php esc_html_e( 'Next', 'advsign' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
        
        <input type="hidden" name="action" value="bg_slider_imgs">
        <?php wp_nonce_field( 'bg_slider_advsign_form', 'bg_slider_advsign_nonce' ); ?>

        <div class="button_area text-center">
            <button type="button" class="btn pl-3 pr-3 btn-primary upload_login_bg_gallery"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
            <button type="button" class="btn pl-3 pr-3 btn-danger ml-3 remove_login_bg_gallery d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
            <button type="submit" name="bg_slider" class="btn pl-3 pr-3 btn-success ml-3 submit_login_bg_gallery d-none"><?php esc_html_e( 'Submit', 'advsign' ); ?></button>
        </div>
    </div>

</form>

