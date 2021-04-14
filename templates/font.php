<?php 

$login_font = get_option('login_font');
$headline_font_color = null;
$input_font_color = null;
$link_color = null;
$button_font_color = null;
$button_color = null;
$headline_font_size = null;
$input_font_size = null;
$login_font = null;
$button_font_size = null;
$show_remember_field = null;
$show_copyright_text = null;
$link_shadow = null;
$enable_input_icon = null;
$icon_for_user_input = null;
$icon_for_user_password = null;
$back_to_site = null;


if ( isset($login_font) ) {

    if ( isset($login_font['headline_font_color']) ) {
        $headline_font_color = $login_font['headline_font_color'];
    }
    
    if ( isset($login_font['input_font_color']) ) {
        $input_font_color = $login_font['input_font_color'];
    }
    
    if ( isset($login_font['link_color']) ) {
        $link_color = $login_font['link_color'];
    }
    
    if ( isset($login_font['button_font_color']) ) {
        $button_font_color = $login_font['button_font_color'];
    }
    
    if ( isset($login_font['button_color']) ) {
        $button_color = $login_font['button_color'];
    }
    
    if ( isset($login_font['headline_font_size']) ) {
        $headline_font_size = $login_font['headline_font_size'];
    }
    
    if ( isset($login_font['input_font_size']) ) {
        $input_font_size = $login_font['input_font_size'];
    }
    
    if ( isset($login_font['login_font']) ) {
        $login_font = $login_font['login_font'];
    }
    
    if ( isset($login_font['button_font_size']) ) {
        $button_font_size = $login_font['button_font_size'];
    }
    
    if ( isset($login_font['show_remember_field']) ) {
        $show_remember_field = $login_font['show_remember_field'];
    }
    
    if ( isset($login_font['show_copyright_text']) ) {
        $show_copyright_text = $login_font['show_copyright_text'];
    }
    
    if ( isset($login_font['link_shadow']) ) {
        $link_shadow = $login_font['link_shadow'];
    }
    
    if ( isset($login_font['enable_input_icon']) ) {
        $enable_input_icon = $login_font['enable_input_icon'];
    }
    
    if ( isset($login_font['icon_for_user_input']) ) {
        $icon_for_user_input = $login_font['icon_for_user_input'];
    }
    
    if ( isset($login_font['icon_for_user_password']) ) {
        $icon_for_user_password = $login_font['icon_for_user_password'];
    }
    
    if ( isset($login_font['back_to_site']) ) {
        $back_to_site = $login_font['back_to_site'];
    }
    
}


?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">	
    <!-- Headline Colors  -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="headline_font_color">  <?php esc_html_e( 'Headline Font Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $headline_font_color; ?>" id="headline_font_color" name="headline_font_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-4 form-group">
                <label for="input_font_color">  <?php esc_html_e( 'Input Font Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $input_font_color; ?>" id="input_font_color" name="input_font_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-4 form-group">
                <label for="link_color">  <?php esc_html_e( 'Link Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $link_color; ?>" id="link_color" name="link_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Button Colors -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="button_color">  <?php esc_html_e( 'Button Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $button_color; ?>" id="button_color" name="button_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
            <div class="col-md-4 form-group">
                <label for="button_font_color">  <?php esc_html_e( 'Login Button font Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $button_font_color; ?>" id="button_font_color" name="button_font_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Headline Font size -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="headline_font_size"><?php esc_html_e( 'Headline Font size', 'advsign' ); ?></label>
                <input type="range" value="<?php echo $headline_font_size; ?>" class="custom-range" name="headline_font_size" id="headline_font_size">
                <span id="headline_font_size_value"><?php echo $headline_font_size; ?></span>
            </div>
            <div class="col-md-6 form-group">
                <label for="input_font_size"><?php esc_html_e( 'Input Font Size', 'advsign' ); ?></label>
                <input type="range" value="<?php echo $input_font_size; ?>" class="custom-range" name="input_font_size" id="input_font_size">
                <span id="input_font_size_value"><?php echo $input_font_size; ?></span>
            </div>
        </div>
    </div>
    <!-- Link and Button Font Size -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="link_font_size"><?php esc_html_e( 'Link Font Size', 'advsign' ); ?></label>
                <input type="range" value="<?php echo $login_font; ?>" class="custom-range"  id="link_font_size" name="link_font_size">
                <span id="link_font_size_value"><?php echo $login_font; ?></span>
            </div>
            <div class="col-md-6 form-group">
                <label for="button_font_size"><?php esc_html_e( 'Button Font Size', 'advsign' ); ?></label>
                <input type="range" value="<?php echo $button_font_size; ?>" class="custom-range" id="button_font_size" name="button_font_size">
                <span id="button_font_size_value"><?php echo $button_font_size; ?></span>
            </div>
        </div>
    </div>
    <!-- Show Remember Field -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="show_remember_field"><?php esc_html_e( 'Show Remember Me Field', 'advsign' ); ?></label>
            </div>
            <?php 
                function show_remember_field( $val ) {
                    global $show_remember_field;
                    return ($show_remember_field == $val) ? 'checked' : '';
                } 
            ?>
            <div class="col-md-6 form-group">
                <div class="form-check form-check-inline ml-5">
                    <input class="form-check-input" type="radio" name="show_remember_field" id="inlineRadio1" value="1" <?php echo show_remember_field('1'); ?>>
                    <label class="form-check-label" for="inlineRadio1"><?php esc_html_e( 'Yes', 'advsign' ); ?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show_remember_field" id="inlineRadio2" value="0" <?php echo show_remember_field('0'); ?>>
                    <label class="form-check-label" for="inlineRadio2"><?php esc_html_e( 'No', 'advsign' ); ?></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="back_to_site"><?php esc_html_e( 'Show Back To Site Link', 'advsign' ); ?></label>
            </div>
            <?php 
                function back_to_site( $val ){
                    global $back_to_site;
                    return ($back_to_site == $val) ? 'checked' : '';
                } 
            ?>
            <div class="col-md-6 form-group">
                <div class="form-check form-check-inline ml-5">
                    <input class="form-check-input" type="radio" name="back_to_site" id="inlineRadio1" value="1" <?php echo back_to_site('1'); ?>>
                    <label class="form-check-label" for="inlineRadio1"><?php esc_html_e( 'Yes', 'advsign' ); ?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="back_to_site" id="inlineRadio2" value="0" <?php echo back_to_site('0'); ?>>
                    <label class="form-check-label" for="inlineRadio2"><?php esc_html_e( 'No', 'advsign' ); ?></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="show_copyright_text"><?php esc_html_e( 'Show Copyright link text', 'advsign' ); ?></label>
            </div>
            <?php 
                function show_copyright_text( $val ){
                    global $show_copyright_text;
                    return ($show_copyright_text ==  $val) ? 'checked' : '';
                } 
            ?>
            <div class="col-md-6 form-group">
                <div class="form-check form-check-inline ml-5">
                    <input class="form-check-input" type="radio" name="show_copyright_text" id="inlineRadio1" value="1"  <?php echo show_copyright_text('1'); ?>>
                    <label class="form-check-label" for="inlineRadio1"><?php esc_html_e( 'Yes', 'advsign' ); ?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="show_copyright_text" id="inlineRadio2" value="0" <?php echo show_copyright_text('0'); ?>>
                    <label class="form-check-label" for="inlineRadio2"><?php esc_html_e( 'No', 'advsign' ); ?></label>
                </div>
            </div>
        </div>
    </div>
    <!-- Link Shadow Color -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group mt-5">
                <label for="link_shadow"><?php esc_html_e( 'Enable Link shadow', 'advsign' ); ?></label>
                <?php 
                    function link_shadow( $val ){
                        global $link_shadow;
                        return ($link_shadow == $val) ? 'checked' : '';
                    } 
                ?>
                <div class="form-check form-check-inline ml-5">
                    <input class="form-check-input" type="radio" name="link_shadow" id="inlineRadio1" value="1"  <?php echo link_shadow('1'); ?>>
                    <label class="form-check-label" for="inlineRadio1"><?php esc_html_e( 'Yes', 'advsign' ); ?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="link_shadow" id="inlineRadio2" value="0" <?php echo link_shadow('0'); ?>>
                    <label class="form-check-label" for="inlineRadio2"><?php esc_html_e( 'No', 'advsign' ); ?></label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label for="link_shadow_color">  <?php esc_html_e( 'Link Shadow Color', 'advsign' ); ?> </label>
                <input type="text" class="form-control" value="<?php echo $link_shadow_color; ?>" id="link_shadow_color" name="link_shadow_color" aria-describedby="bgcolorHelp">
                <small id="bgcolorHelp" class="form-text text-muted"> <?php esc_html_e( 'Pick a color', 'advsign' ); ?> </small>
            </div>
        </div>
    </div>
    <!-- Headline Font Style -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="headline_font_style"> <?php esc_html_e( 'Headline Font Style', 'advsign' ); ?>	</label>
                <select class="form-control" id="headline_font_style" name="headline_font_style">
                    <optgroup label="Google Fonts">
                        <?php
                            // fetch the Google font list
                            $google_api_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDVBuDznbRvMf7ckomKRcsbgHuJ1Elf0LI';
                            $response_font_api = wp_remote_retrieve_body( wp_remote_get($google_api_url, array('sslverify' => false )));
                            if(!is_wp_error( $response_font_api ) ) {
                                $fonts_list = json_decode($response_font_api,  true);
                                // that's it
                                if(is_array($fonts_list)) {
                                    if(isset($fonts_list['items'])){
                                        $g_fonts = $fonts_list['items'];
                                        foreach( $g_fonts as $g_font) { 
                                            $font_name = $g_font['family']; 
                                        ?>
                                            <option value="<?php echo esc_attr($font_name); ?>"><?php echo esc_html($font_name); ?>
                                                
                                            </option>
                                        <?php }
                                    }
                                    
                                } else {
                                    echo esc_html(esc_html("<option disabled>Error to fetch Google fonts.</option>"));
                                    echo esc_html("<option disabled>Google font will not available in offline mode.</option>");
                                }
                                    
                            } 
                        ?>
                        <option value="ntf-grandregular"><?php esc_html_e('NTF Grand Regular', 'advsign')?></option>
                        <option value="jameel_noori_nastaleeqregular"><?php esc_html_e('Jameel Noori Nastaleeq', 'advsign')?></option>
                    </optgroup>	
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="input_font_style"> <?php esc_html_e( 'Input Font Style', 'advsign' ); ?>	</label>
                <select class="form-control" id="input_font_style" name="input_font_style">
                    <optgroup label="Google Fonts">
                        <?php
                            // fetch the Google font list
                            $google_api_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDVBuDznbRvMf7ckomKRcsbgHuJ1Elf0LI';
                            $response_font_api = wp_remote_retrieve_body( wp_remote_get($google_api_url, array('sslverify' => false )));
                            if(!is_wp_error( $response_font_api ) ) {
                                $fonts_list = json_decode($response_font_api,  true);
                                // that's it
                                if(is_array($fonts_list)) {
                                    if(isset($fonts_list['items'])){
                                        $g_fonts = $fonts_list['items'];
                                        foreach( $g_fonts as $g_font) { $font_name = $g_font['family']; ?>
                                            <option value="<?php echo esc_attr($font_name); ?>"><?php echo esc_html($font_name); ?></option><?php 
                                        }
                                    }
                                    
                                } else {
                                    echo esc_html(esc_html("<option disabled>Error to fetch Google fonts.</option>"));
                                    echo esc_html("<option disabled>Google font will not available in offline mode.</option>");
                                }
                                    
                            } 
                        ?>
                        <option value="ntf-grandregular"><?php esc_html_e('NTF Grand Regular', 'advsign')?></option>
                        <option value="jameel_noori_nastaleeqregular"><?php esc_html_e('Jameel Noori Nastaleeq', 'advsign')?></option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <!-- Link and Button Font Style -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="link_font_style"> <?php esc_html_e( 'Link Font Style', 'advsign' ); ?>	</label>
                <select class="form-control" id="link_font_style" name="link_font_style">
                    <optgroup label="Google Fonts">
                        <?php
                            // fetch the Google font list
                            $google_api_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDVBuDznbRvMf7ckomKRcsbgHuJ1Elf0LI';
                            $response_font_api = wp_remote_retrieve_body( wp_remote_get($google_api_url, array('sslverify' => false )));
                            if(!is_wp_error( $response_font_api ) ) {
                                $fonts_list = json_decode($response_font_api,  true);
                                // that's it
                                if(is_array($fonts_list)) {
                                    if(isset($fonts_list['items'])){
                                        $g_fonts = $fonts_list['items'];
                                        foreach( $g_fonts as $g_font) { $font_name = $g_font['family']; ?>
                                            <option value="<?php echo esc_attr($font_name); ?>"><?php echo esc_html($font_name); ?></option><?php 
                                        }
                                    }
                                    
                                } else {
                                    echo esc_html(esc_html("<option disabled>Error to fetch Google fonts.</option>"));
                                    echo esc_html("<option disabled>Google font will not available in offline mode.</option>");
                                }
                                    
                            } 
                        ?>
                        <option value="ntf-grandregular"><?php esc_html_e('NTF Grand Regular', 'advsign')?></option>
                        <option value="jameel_noori_nastaleeqregular"><?php esc_html_e('Jameel Noori Nastaleeq', 'advsign')?></option>
                    </optgroup>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="button_font_style"> <?php esc_html_e( 'Button Font Style', 'advsign' ); ?>	</label>
                <select class="form-control" id="button_font_style" name="button_font_style">
                    <optgroup label="Google Fonts">
                        <?php
                            // fetch the Google font list
                            $google_api_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDVBuDznbRvMf7ckomKRcsbgHuJ1Elf0LI';
                            $response_font_api = wp_remote_retrieve_body( wp_remote_get($google_api_url, array('sslverify' => false )));
                            if(!is_wp_error( $response_font_api ) ) {
                                $fonts_list = json_decode($response_font_api,  true);
                                // that's it
                                if(is_array($fonts_list)) {
                                    if(isset($fonts_list['items'])){
                                        $g_fonts = $fonts_list['items'];
                                        foreach( $g_fonts as $g_font) { $font_name = $g_font['family']; ?>
                                            <option value="<?php echo esc_attr($font_name); ?>"><?php echo esc_html($font_name); ?></option><?php 
                                        }
                                    }
                                    
                                } else {
                                    echo esc_html(esc_html("<option disabled>Error to fetch Google fonts.</option>"));
                                    echo esc_html("<option disabled>Google font will not available in offline mode.</option>");
                                }
                                    
                            } 
                        ?>
                        <option value="ntf-grandregular"><?php esc_html_e('NTF Grand Regular', 'advsign')?></option>
                        <option value="jameel_noori_nastaleeqregular"><?php esc_html_e('Jameel Noori Nastaleeq', 'advsign')?></option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <!-- Enable Input Box Icon -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="enableInputField"><?php esc_html_e( 'Enable Input Box Icon', 'advsign' ); ?></label>
            </div>
            <?php 
                function enable_input_icon( $val ){
                    global $enable_input_icon;                    
                    return (trim(strtolower($enable_input_icon))==trim(strtolower($val))) ? 'checked' : '';
                } 
            ?>
            <div class="col-md-6 form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="enable_input_icon" id="enableInput1" value="Yes" <?php echo enable_input_icon('Yes'); ?>>
                    <label class="form-check-label" for="enableInput1"><?php esc_html_e( 'Yes', 'advsign' ); ?></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="enable_input_icon" id="enableInput2" value="No" <?php echo enable_input_icon('No'); ?>>
                    <label class="form-check-label" for="enableInput2"><?php esc_html_e( 'No', 'advsign' ); ?></label>
                </div>
            </div>
        </div>
    </div>
    <!-- Icon For User Input Box -->
    <div class="border p-3 mb-3 rounded">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="icon_for_user_input"><?php esc_html_e( 'Icon For user Input Box', 'advsign' ); ?></label>
                <input type="text" class="form-control" value="<?php echo $icon_for_user_input; ?>" id="icon_for_user_input" name="icon_for_user_input" aria-describedby="icon_for_user_input">
            </div>
            <div class="col-md-6 form-group">
                <label for="icon_for_user_password"><?php esc_html_e( 'Icon For Password Input Box', 'advsign' ); ?></label>
                <input type="text" class="form-control" value="<?php echo $icon_for_user_password; ?>" id="icon_for_user_password" name="icon_for_user_password" aria-describedby="icon_for_user_password">
            </div>
        </div>
    </div>
    <!-- special field for security reason -->
    <input type="hidden" name="action" value="font_tab_form">
    <input type="hidden" name="advsignfont" value="<?php echo md5(time()); ?>">
    <?php wp_nonce_field('font_advsign_form', 'font_advsign_nonce'); ?>
    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary mt-5 col-md-6" name="font_submit" value="1"> <?php esc_html_e( 'Submit', 'advsign' ); ?> </button>
    </div>
</form>