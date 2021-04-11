<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <div class="form-group alert border fade show">
        <label for="login_logo"> <?php esc_html_e( 'Logo Image', 'advsign' ); ?>  </label>
        <div class="preview_logo mb-3">

            <?php 
                $logo_default_url = WP_CTL_DIR . 'assets/images/logo.svg'; 
                $logo_url = wp_get_attachment_image_src ( $login_logo['login_logo_id'], [$login_logo['logo_width'],$login_logo['logo_height']] )[0];
            ?>

            <img src="<?php echo esc_url( $logo_url ? : $logo_default_url ); ?>" class="img-thumbnail mx-auto d-block uploaded_login_logo_img" data-id="0" alt="<?php esc_html_e( 'logo image', 'advsign' ); ?>" style="width: <?php echo $login_logo['logo_width'] ? :'84'; ?>px;height:<?php echo $login_logo['logo_height'] ? :'84'; ?>px;">
            
        </div>
        <input type="url" value="<?php echo esc_url( $logo_url ? : $logo_default_url ); ?>" class="form-control " id="login_logo" data-id='0' aria-describedby="login_logoHelp" readonly>
        <input type="hidden" name="login_logo_id" id="login_logo_id" value="<?php echo $login_logo['login_logo_id'] ? : 0; ?>">
        <small id="login_logoHelp" class="btn btn-dark mt-3"> <?php esc_html_e( 'Change Image', 'advsign' ); ?> </small>
    </div>
    <!-- Logo Show  -->
    <div class="border p-3 mb-3 rounded">
        <label for="select-background"> <?php esc_html_e( 'Show Logo', 'advsign' ); ?></label>
        <?php 
            function logo_show( $val ){
                $logo_show= get_option('login_logo')['logo_show'];
                return ($logo_show == $val) ? 'checked' : '';
            } 
        ?>
        <div>
            <input type="radio" name="logo_show" id="showLogo1" value="1" <?php echo logo_show('1'); ?>>
            <label class="form-check-label" for="showLogo1">
                <?php esc_html_e( 'Yes', 'advsign' ); ?> 
            </label>
        </div>
        <div>
            <input type="radio" name="logo_show" id="showLogo2" value="0" <?php echo logo_show('0'); ?>>
            <label class="form-check-label" for="showLogo2">
                <?php esc_html_e( 'No', 'advsign' ); ?> 
            </label>
        </div>
    </div>
    <div class="border p-3 mb-3 rounded">
        
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="logo_width"><?php esc_html_e( 'Logo Image Width', 'advsign' ); ?></label>
                    <input name="logo_width" type="range" value="<?php echo(get_option('login_logo')['logo_width']); ?>" min="10" max="400" step="1" class="custom-range" id="logo_width">
                    <span id="logo_width_value"><?php echo(get_option('login_logo')['logo_width']); ?></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="logo_height"><?php esc_html_e( 'Logo Image Height', 'advsign' ); ?></label>
                    <input name="logo_height" value="<?php echo(get_option('login_logo')['logo_height']); ?>" min="10" max="200" step="1" type="range" class="custom-range" id="logo_height">
                    <span id="logo_height_value"><?php echo(get_option('login_logo')['logo_height']); ?></span>
                </div>
            </div>
        
    </div>
    <div class="border p-3 mb-3 rounded">
        
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="logo_link_url"><?php esc_html_e( 'Logo Link URL', 'advsign' ); ?></label>
                    <input name="logo_link" type="url" value="<?php echo get_home_url(); ?>" class="form-control" id="logo_link_url" aria-describedby="logo_link_url">
                </div>
                <div class="col-md-6 form-group">
                    <label for="logo_title"><?php esc_html_e( 'Logo Image Title', 'advsign' ); ?></label>
                    <input name="logo_title" type="text" value="<?php echo get_bloginfo('name'); ?>" class="form-control" id="logo_title" aria-describedby="logo_title">
                </div>
            </div>						
    </div>
    <input type="hidden" name="action" value="logo_form">
    <input type="hidden" name="advsignlogo" value="<?php echo md5(time()); ?>">
    <?php wp_nonce_field('logo_advsign_form', 'logo_advsign_nonce'); ?>

    <div class="text-center">
        <button type="submit" class="btn btn-primary mt-5" name="submit" value="1"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
    </div>
</form>