<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">	
    <!-- Login Form Position -->
    <div class="border p-3 mb-3 rounded">
        <div class="form-group">
            <label for="login_form_position"> <?php esc_html_e( 'Login Form Position', 'advsign' ); ?></label>
            <select class="form-control" id="login_form_position" name="login_form_position">
                <option value="1"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
                <option value="2"> <?php esc_html_e( 'Floating', 'advsign' ); ?> </option>
                <option value="3"> <?php esc_html_e( 'Floating with Customization', 'advsign' ); ?> </option>
            </select>

        </div>
    </div> 
    <!-- Float Settings -->
    <div class="border p-3 mb-3 rounded float_settings_tab d-none">
        <label for="select-background"> <?php esc_html_e( 'Float Settings', 'advsign' ); ?>	</label>
        <?php 
            function float_settings_option( $val ){
                $float_settings= get_option('login_login')['float_settings'];
                return (trim(strtolower($float_settings))==trim(strtolower($val))) ? 'checked' : '';
            } 
        ?>
        <div>
            <input type="radio" name="float_settings" id="floatsettings1" value="left" <?php echo float_settings_option('left'); ?>>
            <label class="form-check-label" for="floatsettings1">
                <?php esc_html_e( 'Left', 'advsign' ); ?> 
            </label>
        </div>
        <div>
            <input type="radio" name="float_settings" id="floatsettings2" value="center" <?php echo float_settings_option('center'); ?>>
            <label class="form-check-label" for="floatsettings2">
                <?php esc_html_e( 'Center', 'advsign' ); ?> 
            </label>
        </div>
        <div>
            <input type="radio" name="float_settings" id="floatsettings3" value="right" <?php echo float_settings_option('right'); ?> >
            <label class="form-check-label" for="floatsettings3">
                <?php esc_html_e( 'Right', 'advsign' ); ?> 
            </label>
        </div>
    </div>
    <!-- Float with customization Settings -->
    <div class="border p-3 mb-3 rounded float_settings_customization d-none">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="left_margin"><?php esc_html_e( 'Left Margin', 'advsign' ); ?></label>
                <input type="range" value="<?php echo(get_option('login_login')['float_left_margin']); ?>" min="10" max="100" step="1" class="custom-range" name="float_left_margin" id="float_left_margin">
            </div>
            <div class="col-md-6 form-group">
                <label for="top_margin"><?php esc_html_e( 'Top Margin', 'advsign' ); ?></label>
                <input type="range" value="<?php echo(get_option('login_login')['float_top_margin']); ?>" min="10" max="100" step="1" class="custom-range" name="float_top_margin" id="float_top_margin">
            </div>
        </div>
    </div>
    <!-- Background -->
    <div class="border p-3 mb-3 rounded">
        <div class="form-group">
            <label for="select_background"> <?php esc_html_e( 'Select Background', 'advsign' ); ?>	</label>
            <select class="form-control" id="login_form_background" name="login_form_background">
            <option value="1"> <?php esc_html_e( 'Default', 'advsign' ); ?> </option>
            <option value="2"> <?php esc_html_e( 'Static Background Color', 'advsign' ); ?> </option>
            <option value="3"> <?php esc_html_e( 'Static Background Image', 'advsign' ); ?> </option>
            </select>
        </div>
    </div>
    <!-- Background Form Color -->
    <div class="border p-3 mb-3 rounded d-none bg_form_color_option">
        <label for="background_form_color">  <?php esc_html_e( 'Background Form Color', 'advsign' ); ?> </label>
        <input type="text" class="form-control" value="<?php echo(get_option('login_login')['background_form_color']); ?>" id="background_form_color" name="background_form_color" aria-describedby="bgcolorHelp">
        <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
    </div>
    <!-- Background Image Url -->
    <div class="form-group alert border fade show d-none bg_form_img">
        <label for="bg_img_url"> <?php esc_html_e( 'Background Image Url', 'advsign' ); ?>  </label>
        <div class="preview_bg_img mb-3">
            <?php 
                $bg_img_default_url = WP_CTL_DIR . 'assets/images/form-bg-img.png'; 
                $bg_img_url = wp_get_attachment_image_src ( $form_bg_img['login_form_bg_id'], [$form_bg_img['form_bg_img_width'],$form_bg_img['form_bg_img_height']] )[0];
            ?>
            <img src="<?php echo esc_url( $bg_img_url ? : $bg_img_default_url ); ?>" class="img-thumbnail mx-auto d-block uploaded_form_bg_img_img" data-id="0" alt="<?php esc_html_e( 'form background image', 'advsign' ); ?>" style="width: <?php echo $form_bg_img['form_bg_img_width'] ? :'184'; ?>px;height:<?php echo $form_bg_img['form_bg_img_height'] ? :'184'; ?>px;">
        </div>
        <input type="url" value="<?php echo esc_url( $bg_img_url ? : $bg_img_default_url ); ?>" class="form-control " id="form_bg_img" data-id='0' aria-describedby="form_bg_img_help" readonly>
        <input type="hidden" name="login_form_bg_id" id="login_form_bg_id" value="<?php echo $form_bg_img['login_form_bg_id'] ? : 0; ?>">
        <small id="form_bg_img_help" class="btn btn-dark mt-3"> <?php esc_html_e( 'Change Image', 'advsign' ); ?> </small>
    </div>
    <!-- Background Repeat -->
    <div class="border p-3 mb-3 rounded d-none bg_form_repeat d-none">
        <div class="form-group">
            <label for="login_bg_repeat"> <?php esc_html_e( 'Background Repeat', 'advsign' ); ?></label>
            <?php $options = array('No Repeat', 'Repeat', 'Repeat Horizontally', 'Repeat Vertically');
                echo "<select class=".'form-control'." name=".'login_bg_repeat'.">";
                $selected = get_option('login_login')['login_bg_repeat'];
                foreach($options as $option){
                    if($selected == $option) {
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else {
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo "</select>";
            ?>
        </div>
    </div>
    <!-- Background Position -->
    <div class="border p-3 mb-3 rounded d-none bg_form_position d-none">
        <div class="form-group">
            <label for="login_form_bg_position"> <?php esc_html_e( 'Background Position', 'advsign' ); ?>	</label>
            <?php $options = array('left top', 'left center', 'left bottom', 'right top', 'right center', 'right bottom', 'center top', 'center center', 'center bottom');
                echo "<select class=".'form-control'." name=".'login_form_bg_position'.">";
                $selected = get_option('login_login')['login_form_bg_position'];
                foreach($options as $option){
                    if($selected == $option) {
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else {
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo "</select>";
            ?>
        </div>
    </div>
    <!-- Background Effect and Width -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="login_bg_effect"> <?php esc_html_e( 'Background Effect', 'advsign' ); ?></label>
                <?php $options = array('No Overlay Effect', 'Overlay Effect 1', 'Overlay Effect 2', 'Overlay Effect 3');
                    echo "<select class=".'form-control'." name=".'login_bg_effect'.">";
                    $selected = get_option('login_login')['login_bg_effect'];
                    foreach($options as $option){
                        if($selected == $option) {
                            echo "<option selected='selected' value='$option'>$option</option>";
                        }
                        else {
                            echo "<option value='$option'>$option</option>";
                        }
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="login_form_width"><?php esc_html_e( 'Login Form Width', 'advsign' ); ?></label>
                <input type="range" value="<?php echo(get_option('login_login')['login_form_width']); ?>" min="200" max="500" step="1" class="custom-range" name="login_form_width" id="login_form_width">
                <span id="login_form_width_value"><?php echo(get_option('login_login')['login_form_width']); ?></span>
            </div>
        </div>
    </div>
    <!-- Border Color and Radius-->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="form_border_color">  <?php esc_html_e( 'Select Border Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo(get_option('login_login')['form_border_color']); ?>" id="form_border_color" name="form_border_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-6 form-group">
                <label for="login_border_radius"><?php esc_html_e( 'Border Radius', 'advsign' ); ?></label>
                <input type="range" value="<?php echo(get_option('login_login')['login_border_radius']); ?>" min="0" max="20" step="1" class="custom-range" id="login_border_radius" name="login_border_radius">
                <span id="login_border_radius_value"><?php echo(get_option('login_login')['login_border_radius']); ?></span>
            </div>
        </div>
    </div>
    <!-- Border Style -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="border_style"> <?php esc_html_e( 'Border Style', 'advsign' ); ?></label>
                <?php $options = array('Solid', 'None', 'Dotted', 'Dashed', 'Double');
                    echo "<select class=".'form-control'." name=".'border_style'.">";
                    $selected = get_option('login_login')['border_style'];
                    foreach($options as $option){
                        if($selected == $option) {
                            echo "<option selected='selected' value='$option'>$option</option>";
                        }
                        else {
                            echo "<option value='$option'>$option</option>";
                        }
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="form_border_width"><?php esc_html_e( 'Border Thickness', 'advsign' ); ?></label>
                <input type="range" value="<?php echo(get_option('login_login')['form_border_width']); ?>" min="0" max="20" step="1" class="custom-range" name="form_border_width" id="form_border_width">
                <span id="form_border_width_value"><?php echo(get_option('login_login')['form_border_width']); ?></span>
            </div>
        </div>
    </div>
    <!-- Form Shadow -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="border-style"> <?php esc_html_e( 'Enable Form Shadow', 'advsign' ); ?>	</label>
                <?php 
                    function form_shadow( $val ){
                        $form_shadow= get_option('login_login')['form_shadow'];
                        return ($form_shadow == $val) ? 'checked' : '';
                    } 
                ?>
                <div>
                    <input type="radio" name="form_shadow" id="yesRadios1" value="1" <?php echo form_shadow('1'); ?>>
                    <label class="form-check-label" for="yesRadios1">
                        <?php esc_html_e( 'Yes', 'advsign' ); ?> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="form_shadow" id="noRadios2" value="0" <?php echo form_shadow('0'); ?>>
                    <label class="form-check-label" for="noRadios2">
                        <?php esc_html_e( 'No', 'advsign' ); ?> 
                    </label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="form_shadow_color_picker">  <?php esc_html_e( 'Form Shadow Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo(get_option('login_login')['form_shadow_color_picker']); ?>" id="form_shadow_color_picker" name="form_shadow_color_picker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Username Field -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <div>
                    <label for="username_email"><?php esc_html_e( 'Username or Email Field Label Text', 'advsign' ); ?></label>
                    <input type="text" class="form-control" value="<?php echo(get_option('login_login')['username_email']); ?>" name="username_email" id="username_email" aria-describedby="username_email">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="username_placeholder"><?php esc_html_e( 'Username or Email Field Placeholder Text', 'advsign' ); ?></label>
                <input type="text" class="form-control" value="<?php echo(get_option('login_login')['username_placeholder']); ?>" name="username_placeholder" id="username_placeholder" aria-describedby="username_placeholder">
            </div>
        </div>
    </div>
    <!-- Login Button and Redirect Link -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <div>
                    <label for="login_button_text"><?php esc_html_e( 'Log In Button Text', 'advsign' ); ?></label>
                    <input type="text" class="form-control" id="login_button_text" value="<?php echo(get_option('login_login')['login_button_text']); ?>" name="login_button_text" aria-describedby="login_button_text">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="redirect_url"><?php esc_html_e( 'Forcefully Redirect', 'advsign' ); ?></label>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="redirect_url" id="redirect_url1" value="yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="redirect_url" id="redirect_url2" value="no">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <input type="text" class="form-control" id="redirect_url" name="redirect_url" aria-describedby="redirect_url" placeholder="Redirect URL">
            </div>
        </div>
    </div>
    <!-- Redirect after Login -->
    <!-- <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <div>
                    <label for="redirect_user"><?php esc_html_e( 'Redirect Users After Login (Not Work For Admin)', 'advsign' ); ?></label>
                    <input type="text" class="form-control" id="redirect_user" name="redirect_user" aria-describedby="redirect_user">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="display_text"><?php esc_html_e( 'Display Note To User Above Login Form', 'advsign' ); ?></label>
                <input type="text" class="form-control" id="display_text" name="display_text" aria-describedby="display_text">
            </div>
        </div>
    </div> -->
    <!-- Message Font Color -->
    <!-- <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="messageFontColorPicker">  <?php esc_html_e( 'Message Font Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" id="messageFontColorPicker" name="messageFontColorPicker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-6 form-group">
                <label for="message_font_size"><?php esc_html_e( 'Message Font Size', 'advsign' ); ?></label>
                <input type="range" class="custom-range" id="message_font_size" name="message_font_size">
            </div>
        </div>
    </div> -->
    <!-- Special field for security reason -->
    <input type="hidden" name="action" value="login_tab_form">
    <input type="hidden" name="advsignlogin" value="<?php echo md5(time()); ?>">
    <?php wp_nonce_field('login_advsign_form', 'login_advsign_nonce'); ?>
    <!-- Custom Css -->
    <div class="border p-3 mb-3 rounded">
        <div class="form-group">
            <label for="login_custom_css"><?php esc_html_e( 'Custom Css', 'advsign' ); ?></label>
            <textarea class="form-control" id="login_custom_css" rows="3" name="login_custom_css"></textarea>
            <small class="form-text text-muted"><?php esc_html_e( 'Enter any custom css you want to apply on login panel.Note: Please Do Not Use Style Tag With Custom CSS.', 'advsign' ); ?></small>
        </div>
    </div>
    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" name="login_submit" value="1" class="btn btn-primary mt-5"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
    </div>
</form>