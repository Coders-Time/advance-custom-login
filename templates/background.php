
					
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
        <label for="default_img">  <?php esc_html_e( 'Set Default Image', 'advsign' ); ?> </label>
        <div class="preview_image mb-3">
            <img src="<?php echo plugin_dir_url( __DIR__ )?>/assets/images/default-image.png" class="img-thumbnail" data-id="0" alt="<?php esc_html_e( 'Default image', 'advsign' ); ?>">
        </div>
        <input type="hidden" name="action" value="default_bg_form">
        <input type="hidden" name="advsigndefaultbgimg" value="<?php echo md5(time()); ?>">
        <?php wp_nonce_field('default_bg_img_advsign_form', 'default_bg_img_advsign_nonce'); ?>
        <div class="button_area text-center">
            <button type="submit" class="btn btn-primary "><?php esc_html_e( 'Submit', 'advsign' ); ?></button>
        </div>
    </form>
</div>

<div class="bg_color_change form-group d-none">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>?action=bg_color_form" method="post">
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
            <img src="<?php echo plugin_dir_url( __DIR__ )?>/assets/images/background-image.png" class="img-thumbnail uploaded_login_bg_img" data-id="0" alt="<?php esc_html_e( 'Background image', 'advsign' ); ?>">
            <input type="hidden" name="bg_img_id" id="bg_img_id">
        </div>
        <input type="hidden" name="action" value="bg_img_form">
        <input type="hidden" name="advsignbgimg" value="<?php echo md5(time()); ?>">
        <?php wp_nonce_field('bg_img_advsign_form', 'bg_img_advsign_nonce'); ?>
            <div class="button_area text-center">
            <button type="button" class="btn pl-3 pr-3 btn-primary upload_login_bg_img"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
            <button type="submit" class="btn pl-3 pr-3 btn-success ml-3 submit_login_bg_img d-none"><?php esc_html_e( 'Submit', 'advsign' ); ?></button>
            <button type="button" class="btn pl-3 pr-3 btn-danger ml-3 remove_login_bg_img d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
        </div>
    </form>
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
                <span class="sr-only"><?php esc_html_e( 'Previous', 'advsign' ); ?></span>
                </a>
                <a class="carousel-control-next" href="#logincarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php esc_html_e( 'Next', 'advsign' ); ?></span>
                </a>
            </div>
        </div>

    </div>
    <div class="button_area text-center">
        <button type="button" class="btn pl-3 pr-3 btn-primary upload_login_bg_gallery"> <?php esc_html_e( 'Upload', 'advsign' ); ?> </button>
        <button type="button" class="btn pl-3 pr-3 btn-danger ml-3 remove_login_bg_gallery d-none"><?php esc_html_e( 'Remove', 'advsign' ); ?></button>
        <button type="button" class="btn pl-3 pr-3 btn-success ml-3 submit_login_bg_gallery d-none"><?php esc_html_e( 'Submit', 'advsign' ); ?></button>
    </div>
</div>

<!-- <div class="form-group">
<label for="exampleFormControlTextarea1">Example textarea</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div> -->

