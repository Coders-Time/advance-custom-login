
<?php 

function get_social_link ( $name ) {
    $login_social = get_option('login_social');

    if ( $login_social && isset($login_social[$name]) ) {
       return $login_social[$name];
    }
    return '';
}


?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <!-- Social Icon Size -->
    <div class="form-group border p-3 mb-3 rounded">
        <label for="social_icon_placement"> <?php esc_html_e( 'Social Icon Placement', 'advsign' ); ?>	</label>
        <?php $options = array('No Icon', 'Outer', 'Inner', 'Both');
            echo "<select class=".'form-control'." name=".'social_icon_placement'.">";
            $selected = get_option('login_social')['social_icon_placement'];
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
    <!-- Social Icon Placement -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="select-background"> <?php esc_html_e( 'Social Media Icon Size', 'advsign' ); ?>	</label>
                <?php 
                    function social_icon_size( $val ) {
                        $login_social = get_option('login_social');

                        if ( !isset($login_social) ) {
                            return '';
                        }

                        if ( isset($login_social['social_icon_size']) ) {
                            return (trim(strtolower($login_social['social_icon_size'])) == trim(strtolower($val))) ? 'checked' : '';
                        }
                        
                        return '';
                    } 
                ?>
                <div>
                    <input type="radio" name="social_icon_size" id="social_icon_size1" value="fa-2x" <?php echo social_icon_size('fa-2x'); ?>>
                    <label class="form-check-label" for="social_icon_size1">
                        <?php esc_html_e( 'Small', 'advsign' ); ?> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="social_icon_size" id="social_icon_size2" value="fa-3x" <?php echo social_icon_size('fa-3x'); ?>>
                    <label class="form-check-label" for="social_icon_size2">
                        <?php esc_html_e( 'Medium', 'advsign' ); ?> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="social_icon_size" id="social_icon_size3" value="fa-5x" <?php echo social_icon_size('fa-5x'); ?>>
                    <label class="form-check-label" for="social_icon_size3">
                        <?php esc_html_e( 'Large', 'advsign' ); ?> 
                    </label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="select-background"> <?php esc_html_e( 'Social Media Icon Layout', 'advsign' ); ?>	</label>
                <?php 
                    function social_icon_layout( $val ){
                        $login_social = get_option('login_social');
                        if (!isset($login_social)) {
                            return;
                        }
                        if ( isset($login_social['social_icon_layout']) ) {
                            return (trim(strtolower($login_social['social_icon_layout'])) == trim(strtolower($val))) ? 'checked' : '';
                        }
                        return '';
                    } 
                ?>
                <div>
                    <input type="radio" name="social_icon_layout" id="social_icon_layout1" value="-square" <?php echo social_icon_layout('-square'); ?>>
                    <label class="form-check-label" for="social_icon_layout1">
                        <?php esc_html_e( 'Rectangle', 'advsign' ); ?> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="social_icon_layout" id="social_icon_layout2" value="-" <?php echo social_icon_layout('-'); ?>>
                    <label class="form-check-label" for="social_icon_layout2">
                        <?php esc_html_e( 'Circle', 'advsign' ); ?> 
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- Social Icon Color -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo get_social_link('social_icon_color_picker'); ?>" name="social_icon_color_picker" id="socialIconColorPicker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-6 form-group">
                <label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Color On Hover', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo get_social_link('social_hover_color_picker'); ?>" name="social_hover_color_picker" id="socialHoverColorPicker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Social Icon background Color -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="colorPicker">  <?php esc_html_e( 'Social Media Icon Background Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo get_social_link('social_icon_bg_color_picker'); ?>" name="social_icon_bg_color_picker" id="socialIconbgColorPicker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-6 form-group">
                <label for="colorPicker">  <?php esc_html_e( 'Social Media Background Color On Hover', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo get_social_link('social_hover_bg_color_picker'); ?>" name="social_hover_bg_color_picker" id="socialHoverbgColorPicker" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Social Icon Enable -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="select-background"> <?php esc_html_e( 'Enable To Open Social Link In New Tab', 'advsign' ); ?></label>
                <?php 
                    function social_icon_enable_tab ( $val ) {
                        $login_social = get_option('login_social');
                        if (!isset($login_social)) {
                            return;
                        }

                        if (isset($login_social['social_icon_enable_tab'])) {
                           return (trim(strtolower($login_social['social_icon_enable_tab']))==trim(strtolower($val))) ? 'checked' : '';
                        }
                        
                        return '';
                    } 
                ?>
                <div>
                    <input type="radio" name="social_icon_enable_tab" id="social_icon_new1" value="Yes" <?php echo social_icon_enable_tab('Yes'); ?>>
                    <label class="form-check-label" for="social_icon_size1">
                        <?php esc_html_e( 'Yes', 'advsign' ); ?> 
                    </label>
                </div>
                <div>
                    <input type="radio" name="social_icon_enable_tab" id="social_icon_new2" value="No" <?php echo social_icon_enable_tab('No'); ?>>
                    <label class="form-check-label" for="social_icon_size2">
                        <?php esc_html_e( 'No', 'advsign' ); ?> 
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- List of Social Icons  -->
    <div class="border p-3 mb-3 rounded">
        <label for="logo_link_url"><?php esc_html_e( 'Social Links', 'advsign' ); ?></label>
        <div class="row">
            <div class="col-md-6 form-group">
                <label class="sr-only" for="facebook_link"><?php esc_html_e( 'Facebook', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('facebook_link'); ?>" name="facebook_link" id="facebook_link" placeholder="facebook account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="twitter_link"><?php esc_html_e( 'Twitter', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('twitter_link'); ?>" name="twitter_link" id="twitter_link" placeholder="twitter account url">
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
                    <input type="text" class="form-control" value="<?php echo get_social_link('linkedin_link'); ?>" name="linkedin_link" id="linkedin_link" placeholder="linkedin account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="watsapp_link"><?php esc_html_e( 'Watsapp', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('watsapp_link'); ?>" name="watsapp_link" id="watsapp_link" placeholder="watsapp account url">
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
                    <input type="text" class="form-control" value="<?php echo get_social_link('pinterest_link'); ?>" name="pinterest_link" id="pinterest_link" placeholder="pinterest account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="digg_link"><?php esc_html_e( 'Digg', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-digg"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('digg_link'); ?>" name="digg_link" id="digg_link" placeholder="digg account url">
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
                    <input type="text" class="form-control" value="<?php echo get_social_link('youtube_link'); ?>" name="youtube_link" id="youtube_link" placeholder="youtube account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="flickr_link"><?php esc_html_e( 'Flickr', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-flickr"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('flickr_link'); ?>" name="flickr_link" id="flickr_link" placeholder="flickr account url">
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
                    <input type="text" class="form-control" value="<?php echo get_social_link('tumblr_link'); ?>" name="tumblr_link" id="tumblr_link" placeholder="tumblr account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="skype_link"><?php esc_html_e( 'Skype', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-skype"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('skype_link'); ?>" name="skype_link" id="skype_link" placeholder="skype account url">
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
                    <input type="text" class="form-control" value="<?php echo get_social_link('insta_link'); ?>" name="insta_link" id="insta_link" placeholder="instagram account url">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="sr-only" for="telegram_link"><?php esc_html_e( 'Telegram', 'advsign' ); ?></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fab fa-telegram-plane"></i></div>
                    </div>
                    <input type="text" class="form-control" value="<?php echo get_social_link('telegram_link'); ?>" name="telegram_link" id="telegram_link" placeholder="telegram account url">
                </div>
            </div>
        </div>
    </div>
    <!-- special field for security reason -->
    <input type="hidden" name="action" value="social_tab_form">
    <input type="hidden" name="advsignsocial" value="<?php echo md5(time()); ?>">
    <?php wp_nonce_field('social_advsign_form', 'social_advsign_nonce'); ?>
    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary mt-5 col-md-6" name="social_submit" value="1"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
    </div>
</form>