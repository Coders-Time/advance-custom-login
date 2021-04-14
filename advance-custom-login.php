<?php
/*
    Plugin Name: Advance Custom Login
    Plugin URI: 
    Description: Wordpress login page customization with Latest bootstrap
    Version: 1.0.0
    Author: coderstime
    Author URI: https://profiles.wordpress.org/coderstime/
    Domain Path: /languages
    License: GPLv2 or later
    Text Domain: advsign
 */


// don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


/**
 * AdvanceCustomLogin class
 *
 * The class that holds the entire AdvanceCustomLogin plugin
 *
 * @author Coders Time <coderstime@gmail.com>
 */

define( 'WP_CTL_FILE', __FILE__ );
define( 'WP_CTL_PLUGIN_PATH', __DIR__ );
define( 'WP_CTL_BASENAME', plugin_basename( WP_CTL_FILE ) );
define( 'WP_CTL_DIR', plugin_dir_url( WP_CTL_FILE ) );
define( 'WP_CTL_ASSET_FILE', plugins_url( '/assets/', WP_CTL_FILE ) );
define( 'WP_CTL_ASSET_DIR', WP_CTL_PLUGIN_PATH .'/assets/' );


class AdvanceCustomLogin {

    /**
     *
     * construct method description
     *
     */

    public function __construct ( ) 
    {
        register_activation_hook( WP_CTL_FILE, [ $this, 'activate' ] );
        register_deactivation_hook( WP_CTL_FILE, [ $this, 'deactivate' ] );

        /*Localize our plugin*/
        add_action( 'init', [ $this, 'localization_setup' ] );
        add_filter( 'plugin_action_links_' . WP_CTL_BASENAME, [ $this, 'action_links' ] );

        /*Create Dashboad menu*/
        add_action( 'admin_menu', [$this,'create_dashboard_menu']);
        add_action( 'login_head', [ $this,'gen_login_head' ] );
        add_filter( 'login_headerurl', [ $this,'gen_login_logo_url' ] );
        add_filter( 'login_headertext', [ $this,'gen_login_logo_url_title' ] );
        
       

        add_filter( 'wp_login_errors', [ $this, 'gen_registered_success_message' ], 10, 2 );
        add_filter( 'login_title', [ $this, 'custom_login_title' ], 99 );
        add_filter( 'admin_footer_text', [ $this, 'remove_footer_admin' ]);

        add_action( 'admin_post_logo_form',[$this,'admin_post_advsign_logo_func']);
        add_action( 'advsign_processing_complete',[$this,'advsign_processing_completed_func']);
        //This loads the function on the login page
        add_action( 'admin_post_bg_color_form', [$this,'advsign_bg_color_form'] );
        add_action( 'admin_post_bg_img_form', [$this,'advsign_bg_img_form'] );
        add_action( 'admin_default_bg_img', [$this,'advsign_default_bg_form'] );
        
        add_action( 'admin_post_login_tab_form', [$this,'advsign_login_tab_form'] );
        add_action( 'admin_post_font_tab_form', [$this,'advsign_font_tab_form'] );
        add_action( 'admin_post_social_tab_form', [$this,'advsign_social_tab_form'] );

        add_action( 'login_enqueue_scripts', [ $this, 'login_page_stylesheet' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'adv_login_dashboard_stylesheet' ] );
    }

    public function advsign_processing_completed_func( $saved_id ) 
    {
        $saved_info = get_option($saved_id);
        $message =  __("<div class='data'> <p>Saved data successfully</p><code>%s</code></div>", 'advsign');

        $msg = '{<br>';

        foreach ($saved_info as $key => $value) {
            $msg .= "<span> '{$key}'' : '{$value}'  </span><br>";
        }

        printf($message, $msg . '}' );
    }

    public function admin_post_advsign_logo_func ( ) 
    {
        if (isset($_POST['submit'])) {

            $data_list = [
                'login_logo_id',
                'logo_show',
                'logo_width',
                'logo_height',
                'logo_link',
                'logo_title',
            ];
            $saved_id =  $this->advsign_process_submission( 'logo', $data_list );
            wp_safe_redirect(
                esc_url_raw(
                    add_query_arg('saved_id', $saved_id, admin_url('admin.php?page=advance-login'))
                )
            );
        }
        die();
    }

    public function advsign_login_tab_form ( )
    {
        if (isset($_POST['login_submit'])) {

            $data_list = [
                'login_form_position',
                'float_settings',
                'float_left_margin',
                'background_form_color',
                'form_border_width',
                'float_top_margin',
                'login_form_background',
                'login_form_bg_id',
                'login_bg_repeat',
                'login_form_bg_position',
                'login_bg_effect',
                'login_form_width',
                'form_border_color',
                'login_border_radius',
                'border_style',
                'form_shadow',
                'form_shadow_color_picker',
                'username_email',
                'password_label_text',
                'login_button_text',
                'redirect_url',
                'redirect_user',
                'display_text',
                'messageFontColorPicker',
                'message_font_size',
                'login_custom_css'
            ];

            $saved_id =  $this->advsign_process_submission( 'login', $data_list );
            wp_safe_redirect(
                esc_url_raw(
                    add_query_arg('saved_id', $saved_id, admin_url('admin.php?page=advance-login'))
                )
            );
            
        }
    }

    public function advsign_font_tab_form()
    {
        if ( isset($_POST['font_submit']) ) 
        {
            $data_list = [
                "headline_font_color",
                "input_font_color",
                "link_color",
                "button_color",
                "button_font_color",
                "headline_font_size",
                "input_font_size",
                "link_font_size",
                "button_font_size",
                "show_remember_field",
                "back_to_site",
                "show_copyright_text",
                "link_shadow",
                "link_shadow_color",
                "headline_font_style",
                "input_font_style",
                "link_font_style",
                "button_font_style",
                "enable_input_icon",
                "icon_for_user_input",
                "icon_for_user_password",
                "action","advsignfont",
                "font_advsign_nonce",
                "_wp_http_referer",
                "font_submit"
            ];

            $saved_id =  $this->advsign_process_submission( 'font', $data_list );
            wp_safe_redirect(
                esc_url_raw(
                    add_query_arg('saved_id', $saved_id, admin_url('admin.php?page=advance-login'))
                )
            );            
        }
    }

    public function advsign_social_tab_form()
    {
        if (isset($_POST['social_submit'])) 
        {
            $data_list = [
                "social_icon_placement",
                "social_icon_size",
                "social_icon_layout",
                "social_icon_color_picker",
                "social_hover_color_picker",
                "social_icon_bg_color_picker",
                "social_hover_bg_color_picker",
                "social_icon_enable_tab",
                "facebook_link",
                "twitter_link",
                "linkedin_link",
                "g_plus_link",
                "pinterest_link",
                "digg_link",
                "youtube_link",
                "flickr_link",
                "tumblr_link",
                "skype_link",
                "insta_link",
                "telegram_link",
                "watsapp_link"
            ];

            $saved_id =  $this->advsign_process_submission( 'social', $data_list );
            wp_safe_redirect(
                esc_url_raw(
                    add_query_arg('saved_id', $saved_id, admin_url('admin.php?page=advance-login'))
                )
            );
            
        }
    }

    public function advsign_process_submission ( $nonce, $data_list ) 
    {
        $advsign = $_POST['advsign' . $nonce];
        $field = 'login_' . $nonce;

        $processed = get_transient("advsign{$advsign}");

        if ($processed) {
            wp_send_json( $processed, 200 );
            return $advsign;
        }

        if ( wp_verify_nonce( sanitize_text_field($_POST[ $nonce . '_advsign_nonce']), $nonce .'_advsign_form')  ) {

            $data = [];
            foreach ( $_POST as $key => $value ) {
                if ( in_array($key, $data_list )) {
                    $data[$key] = sanitize_text_field($value);
                }
            }
            update_option( $field, $data);
            set_transient("advsign{$advsign}", $data, 60);
            return $field;
            wp_send_json_success( $data, 200 );
            die();
        }
        die;
    }

    
    /**
     *
     * Create Advance Custom Login icon 
     *
     */
    public function create_dashboard_menu ( ) 
    {
        add_menu_page(
            __('Advance Custom Login', 'advsign'),
            __('Advance Login', 'advsign'),
            'administrator',
            'advance-login',
            [ $this,'advsign_settings_page'],
            'dashicons-share-alt2'
        );
    }

    /*Settings Page html*/

    public function advsign_settings_page ( ) 
    {
        $login_logo = get_option('login_logo') ?? '';
        include ( 'advance-settings.php' );
    }

    /**
     *
     * run when plugin install
     * install time store on option table
     */
    
    public function activate ( ) 
    {
        add_option('advsign_active', time());
    }

    /**
     *
     * run when deactivate the plugin
     * store deactivate time on database option table
     */

    public function deactivate ( ) 
    {
        update_option('advsign_deactive', time());
    }

    /**
     * Initialize plugin for localization
     *
     * @uses load_plugin_textdomain()
     */
    public function localization_setup() 
    {
        load_plugin_textdomain( 'advsign', false, dirname( WP_CTL_BASENAME ) . '/languages/' );
    }

    public function remove_footer_admin ( ) 
    {
        $developedbt = __( 'Developed by', 'advsign' );
        $coderstime = __( 'Coders Time', 'advsign' );        
        echo '<span id="footer-thankyou> '.$developedbt.' <a href="https://facebook.com/coderstime" target="_blank"> '. $coderstime.' </a> </span>';
    }

    /*
        * Change wordpress login page title content
    */

    public function custom_login_title ( $origtitle ) 
    {
        return 'Login Page - ' . get_bloginfo('name');
    }

    public function gen_registered_success_message( $errors, $redirect_to )
    {
       if( isset( $errors->errors['registered'] ) )
       {
         $tmp = $errors->errors;   

         $old = __('Registration complete. Please check your email.','advsign');
         $new = 'Registration successfully complete.';

         // Loop through the errors messages and modify the corresponding message:
         foreach( $tmp['registered'] as $index => $msg )
         {
           if( $msg === $old )
               $tmp['registered'][$index] = $new;        
         }
         // Use the magic __set method to override the errors property:
         $errors->errors = $tmp;

         unset( $tmp );
       }  
       return $errors;
    }

    public function gen_login_head ( )
    {
        add_filter( 'gettext', [ $this,'gen_gettext' ], 10, 3 );
    }

    public function gen_gettext ( $translated_text, $text_to_translate, $textdomain )
    {
        $login_info = get_option('login_login');
        if ( !isset( $login_info ) ) {
            return $translated_text;
        }

        if ( 'Username or Email Address' == $text_to_translate && isset($login_info['username_email']) ) {
            $translated_text = __( $login_info['username_email'], 'advsign' );
        } 

        if ( 'Password' == $text_to_translate && isset($login_info['password_label_text']) ) {
            $translated_text = __( $login_info['password_label_text'], 'advsign' );
        }

        return $translated_text;
    }


    public function gen_login_logo_url() 
    {
        return home_url();
    }

    public function gen_login_logo_url_title() 
    {
        return get_bloginfo('name');
    }

    public function login_page_stylesheet ( ) 
    {
        wp_enqueue_style( 'fontawesome', WP_CTL_ASSET_FILE . 'css/fontawesome.min.css', [], '5.15.3' );
        wp_enqueue_style( 'custom-login', WP_CTL_ASSET_FILE . 'css/style-login.css', [], filemtime( WP_CTL_ASSET_DIR .'css\style-login.css') );
        wp_enqueue_script( 'advance-login', WP_CTL_ASSET_FILE . 'js/advance-login.js',['jquery'],filemtime( WP_CTL_ASSET_DIR .'js/advance-login.js'), true );


        $advsignbgcolor = get_option('login_bg_color');
        if ( isset($advsignbgcolor) ) { ?>
            <style type="text/css">
                body.login {background-color:<?php echo $advsignbgcolor; ?> !important;}
            </style>
        <?php }

        $login_logo = get_option('login_logo');
        $default_logo = esc_url(WP_CTL_DIR . 'assets/images/logo.svg');
        $logo_width = null;
        $logo_height = null;
        $logo_url = null;

        if ( isset($login_logo) ) {
            if ( isset($login_logo['logo_show']) && !$login_logo['logo_show']) { ?>
                <style> body.login div#login h1{ display: none; } </style> 
            <?php }

            if ( isset($login_logo['logo_width']) ) {
                $logo_width =  $login_logo['logo_width'];
            }

            if ( isset($login_logo['logo_height']) ) {
                $logo_height = $login_logo['logo_height'];
            }
            
            if ( isset($login_logo['login_logo_id']) ) {
                $logo_url = wp_get_attachment_image_src ( $login_logo['login_logo_id'], 'thumbnail' )[0];
            }
            
        }     

        ?>
            <style type="text/css">
                #login h1 a, .login h1 a {
                    background-image: url( <?php echo $logo_url ? : $default_logo; ?>);
                    width:<?php echo $logo_width ? : 370;?>px;
                    height:<?php echo $logo_height ? : 84;?>px;
                    background-size:<?php echo $logo_width ? : 370;?>px <?php echo $logo_height ? : 84;?>px;
                    background-repeat: no-repeat;
                }
            </style>
        <?php


        $social_tab_info = get_option('login_social');
        $login_form_info = get_option('login_login');
        $font_tabs = get_option('login_font' );

        if ( !isset($social_tab_info) ) {
            return;
        }

        if ( isset($login_form_info) && isset( $login_form_info['login_form_position'] ) ) {
            /*Login Form Position*/
            switch( $login_form_info['login_form_position'] )
            {
                case '1':
                    ?>
                <style type="text/css"> 
                    body.login div#login {
                    float: center !important;
                }
                </style>
                <?php    
                break;
                case '2':
                    ?>
                <style type="text/css"> 
                    body.login div#login {
                    float: <?php echo $login_form_info['float_settings']; ?> !important;
                }
                </style>
                <?php    
                break;
                case '3':
                    ?>
                <style>
                    body.login div#login {
                    margin-left: <?php echo $login_form_info['float_left_margin']."px"; ?> !important;
                    margin-top: <?php echo $login_form_info['float_top_margin']."px"; ?> !important;
                }
                </style>
                <?php
                break;
            }
        }

        /*Copyright Text Show or Hide*/
        if ( isset($font_tabs ) && isset($font_tabs['show_copyright_text']) ) 
        {
            add_action( 'login_footer', [$this,'advsign_copyright_text'] );
        }

        /*Remember Field Show or Hide*/
        if ( isset($font_tabs) )
        {


            if ( isset($font_tabs['show_remember_field']) && !$font_tabs['show_remember_field'] ) 
            { ?>
                <style> body.login div#login form#loginform p.forgetmenot{ display: none; } </style> 
            <?php }

            if( isset($font_tabs['back_to_site']) && !$font_tabs['back_to_site'] )
            { ?>
                <style> body.login div#login p#backtoblog a{display:none !important;} </style> 
            <?php }


            /* Go Back to Link Shadow Enable and Disable*/
        if ( isset($font_tabs['link_shadow']) && $font_tabs['link_shadow'] ) 
        { 
            if( !isset($font_tabs['link_shadow']) ){?>
                <style> body.login div#login p#backtoblog a {text-shadow: ;}  
                </style> 
            <?php }?>
            <style> 
                body.login div#login p#backtoblog a { text-shadow: 1px 1px 3px <?php echo ($font_tabs['link_shadow_color']); ?> ;} 
            </style> 
        <?php } ?>

            <style type="text/css">
                /* input texts color and font size*/
                .login form .input, .login form input[type=checkbox], .login input[type=text]{
                    color: <?php echo $font_tabs['input_font_color']; ?> !important;
                    font-size: <?php echo $font_tabs['input_font_size']."px"; ?> !important;
                }
                /* links color and font size*/
                body.login div#login p#backtoblog a{
                    color: <?php echo $font_tabs['link_color']; ?> !important;
                    font-size: <?php echo $font_tabs['link_font_size']."px"; ?> !important;
                }
                /* button color */
                body.login div#login form#loginform p.submit input#wp-submit {
                    background-color: <?php echo $font_tabs['button_color']; ?>;
                    color: <?php echo $font_tabs['button_font_color']; ?>;
                    font-size: <?php echo $font_tabs['button_font_size']."px"; ?> !important;
                }
            </style>

        <?php 
        }

        if ( isset( $login_form_info ) ) {

            /*Login Form Shadow Enable and Disable*/
            if ( isset($login_form_info['form_shadow']) && $login_form_info['form_shadow'] ) { 
                if( !isset($login_form_info['form_shadow']) ){?>
                    <style> body.login div#login form#loginform { 
                        box-shadow: ;}  
                    </style> <?php }?>
                    <style> body.login div#login form#loginform { 
                        box-shadow: 3px 3px 5px <?php echo ($login_form_info['form_shadow_color_picker']); ?> ;
                 } </style> 
            <?php } ?>

            <style>
                /* login form css */
                body.login div#login{
                     width: <?php echo $login_form_info['login_form_width']; ?> !important;
                }
                body.login div#login form#loginform{
                    background-color: <?php echo $login_form_info['background_form_color'] ? $login_form_info['background_form_color'] : '#fff'; ?> !important;
                    background-repeat: <?php echo $login_form_info['login_bg_repeat'] ? $login_form_info['login_bg_repeat'] : 'no-repeat'; ?> !important;
                    background-position: <?php echo $login_form_info['login_form_bg_position'] ? $login_form_info['login_form_bg_position'] : '0% 0%'; ?> !important;               
                    border-color: <?php echo $login_form_info['form_border_color'] ? $login_form_info['form_border_color'] : '1px solid #c3c4c7'; ?> !important;
                    border-radius: <?php echo $login_form_info['login_border_radius'] ? $login_form_info['login_border_radius'].'px' : '5px'?> !important;
                    border-style: <?php echo $login_form_info['border_style'] ? $login_form_info['border_style'] : 'solid'; ?> !important;
                    border-width: <?php echo $login_form_info['form_border_width'] ? $login_form_info['form_border_width']."px" : '1px'; ?> !important;
                }
            </style>
            <?php            
        }

        // Social Icon Placement
        if ( isset($social_tab_info['social_icon_placement']) ) :
           
            switch( $social_tab_info['social_icon_placement'] )
            {
                case 'No Icon': 
                    break;
                case 'Outer':
                    add_action( 'login_footer', [$this,'advsign_social_icons'] );   
                    break;
                case 'Inner':
                    add_action( 'login_form', [$this,'advsign_social_icons'] );
                    break;
                case 'Both':
                    add_action( 'login_form', [$this,'advsign_social_icons'] );
                    add_action( 'login_footer', [$this,'advsign_social_icons'] );
                    break;
            }
        endif;
    }

    public function adv_login_dashboard_stylesheet ( $screen ) 
    {

        if( $screen != 'toplevel_page_advance-login') { return; }

        // var_dump( WP_CTL_ASSET_FILE . 'js/bootstrap.bundle.min.js');
        // die();

            wp_enqueue_style( 'select2', WP_CTL_ASSET_FILE . 'css/select2.css', [], '4.0');
            wp_enqueue_style( 'bootstrap', WP_CTL_ASSET_FILE . 'css/bootstrap.min.css', [], '4.6' );
            wp_enqueue_style( 'fontawesome', WP_CTL_ASSET_FILE . 'css/fontawesome.min.css', [], '5.15.3' );
            wp_enqueue_style( 'login_dashboard', WP_CTL_ASSET_FILE . 'css/login-settings.css', [], filemtime(WP_CTL_ASSET_DIR.'css/login-settings.css') ); 

            // wp_enqueue_style( 'wp-color-picker' );   

            wp_enqueue_script( 'bootstrap', WP_CTL_ASSET_FILE . 'js/bootstrap.bundle.min.js',['jquery'],'4.6.0', true );
            wp_enqueue_script( 'select2', WP_CTL_ASSET_FILE . 'js/select2.js', ['jquery'], '4.0.3', true);
            // wp_enqueue_media(); /*media upload*/
            // Add the color picker css file
            add_thickbox();
            wp_enqueue_script( 'login_dashboard_script', WP_CTL_ASSET_FILE . 'js/login-settings.js',['jquery','wp-color-picker'],filemtime( WP_CTL_ASSET_DIR.'js/login-settings.js'), true );

            
    }

    /**
     * Function that will check if value is a valid HEX color.
     */
    public function check_color( $value ) 
    {
        if ( preg_match( '/^#[a-f0-9]{6}$/i', $value ) ) { // if user insert a HEX color with #     
            return true;
        }
         
        return false;
    }

    /**
     * Show action links on the plugin screen
     *
     * @param mixed $links
     * @return array
     */
    public function action_links( $links ) 
    {
        return array_merge(
            [
                '<a href="' . admin_url( 'admin.php?page=advance-login' ) . '">' . __( 'Settings', 'advsign' ) . '</a>',
                '<a href="' . esc_url( 'https://www.facebook.com/coderstime' ) . '">' . __( 'Support', 'advsign' ) . '</a>',
                '<a href="' . esc_url( 'https://wordpress.org/support/plugin/advance-custom-login/reviews/#new-post' ) . '">' . __( 'Review', 'advsign' ) . '</a>',
            ], $links );
    }


    public function advsign_bg_color_form()
    {
        $advsignbgcolor = $_POST['login_bg_color'];
        if( strlen($advsignbgcolor) > 3 && ($advsignbgcolor != get_option('login_bg_color')) ){
            update_option('login_bg_color', $advsignbgcolor);
        }
        wp_redirect( admin_url('admin.php?page=advance-login') ); exit;
    }


    //Custom image that removes the backgroung image
    public function advsign_bg_img_form() 
    {
        $advsignbgcolor = get_option('login_bg_color');
        ?>
        <style type="text/css">
            /* login form background color */
            body.login {
                background-color: <?php echo $advsignbgcolor?> !important;
            }
        </style>
    <?php }



    // Copyright View Function
    public function advsign_copyright_text()
    {
        echo '<div style="text-align: center; position:absolute; bottom:50; width:100%;">
                &copy; Copyright 2021 <a href="'.get_home_url().'">'.get_bloginfo('name').'</a>
             </div>';
    }


    public function advsign_social_icons ()
    {
        $social_icons = get_option('login_social');

        if (!isset($social_icons)) {
            return;
        }

        $new_tab = ( strtolower(isset($social_icons['social_icon_enable_tab'])) == 'no' ) ? '_self':'_blank' ;

        echo '<div style="text-align: center;">';
        
        if( $social_icons['facebook_link'] ){
            echo ('<a href="'.$social_icons['facebook_link'].'" target="'.$new_tab.'" style="color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-facebook-f '.$social_icons['social_icon_size'].'"></i></a>');
        }

        if( $social_icons['twitter_link'] ) {
            echo ('<a href="'.$social_icons['twitter_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-twitter '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['linkedin_link']){
            echo ('<a href="'.$social_icons['linkedin_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-linkedin-in '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['g_plus_link']){
            echo ('<a href="'.$social_icons['g_plus_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-google-plus-g '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['pinterest_link']){
            echo ('<a href="'.$social_icons['pinterest_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-pinterest '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['digg_link']){
            echo ('<a href="'.$social_icons['digg_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-digg '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['youtube_link']){
            echo ('<a href="'.$social_icons['youtube_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-youtube '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['flickr_link']){
            echo ('<a href="'.$social_icons['flickr_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-flickr '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['tumblr_link']){
            echo ('<a href="'.$social_icons['tumblr_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-tumblr '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['skype_link']){
            echo ('<a href="'.$social_icons['skype_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-skype '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['insta_link']){
            echo ('<a href="'.$social_icons['insta_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-instagram '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['telegram_link']){
            echo ('<a href="'.$social_icons['telegram_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-telegram '.$social_icons['social_icon_size'].'" ></i></a>');
        }

        if( $social_icons['telegram_link']){
            echo ('<a href="'.$social_icons['telegram_link'].'" target="'.$new_tab.'" style="margin-left: 10px; color:'.$social_icons['social_icon_color_picker'].'"><i class="fab fa-whatsapp '.$social_icons['social_icon_size'].'" ></i></a>');
        }
        echo '</div>';
    }
}

new AdvanceCustomLogin();
