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


class AdvanceCustomLogin {

    /**
     *
     * construct method description
     *
     */

    public function __construct ( ) {

        register_activation_hook( __FILE__, [ $this, 'activate' ] );
        register_deactivation_hook( __FILE__, [ $this, 'deactivate' ] );

        /*Localize our plugin*/
        add_action( 'init', [ $this, 'localization_setup' ] );
        add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), [ $this, 'action_links' ] );

        /*Create Dashboad menu*/
        add_action('admin_menu', [$this,'create_dashboard_menu']);

        add_action( 'login_enqueue_scripts', [ $this, 'gen_login_logo' ] );
        add_action( 'login_head', [ $this,'gen_login_head' ] );
        add_filter( 'login_headerurl', [ $this,'gen_login_logo_url' ] );
        add_filter( 'login_headertext', [ $this,'gen_login_logo_url_title' ] );
        add_action( 'login_enqueue_scripts', [ $this, 'login_page_stylesheet' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'adv_login_dashboard_stylesheet' ] );

        add_filter( 'wp_login_errors', [ $this, 'gen_registered_success_message' ], 10, 2 );
        add_filter( 'login_title', [ $this, 'custom_login_title' ], 99 );
        add_filter( 'admin_footer_text', [ $this, 'remove_footer_admin' ]);

        add_action('admin_post_logo_form',[$this,'admin_post_advsign_logo_func']);
        add_action('advsign_processing_complete',[$this,'advsign_processing_completed_func']);
    }

    public function advsign_processing_completed_func( $saved_id ) {

        $saved_info = get_option($saved_id);
        $message =  __("<div class='data'> <p>Saved data successfully</p><code>%s</code></div>", 'advsign');

        $msg = '{<br>';

        foreach ($saved_info as $key => $value) {
            $msg .= "<span> '{$key}'' : '{$value}'  </span><br>";
        }

        // printf($message, '' );
        printf($message, $msg . '}' );

    }

    public function admin_post_advsign_logo_func ( ) {
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

    public function advsign_process_submission ( $nonce, $data_list ) {
        $advsignlogo = $_POST['advsignlogo'];

        $processed = get_transient("advsign{$advsignlogo}");

        if ($processed) {
            wp_send_json( $processed, 200 );
            return 'login_logo';
        }

        if ( wp_verify_nonce( sanitize_text_field($_POST[ $nonce . '_advsign_nonce']), $nonce .'_advsign_form')  ) {

            $data = [];
            foreach ( $_POST as $key => $value ) {
                if ( in_array($key, $data_list )) {
                    $data[$key] = $value;
                }
            }
            update_option('login_logo', $data);
            set_transient("advsign{$advsignlogo}", $data, 60);
            return 'login_logo';
            wp_send_json_success( $data, 200 );
            die();
        }
        die;
    }

    
    /**
     *
     * Create Manual order menu with cart icon
     *
     */
    public function create_dashboard_menu ( ) {
        add_menu_page(
            __('Advance Custom Login', 'mofw'),
            __('Advance Login', 'mofw'),
            'administrator',
            'advance-login',
            [ $this,'advsign_settings_page'],
            'dashicons-share-alt2'
        );
    }

    /*Settings Page html*/

    public function advsign_settings_page ( ) {
        $login_logo = get_option('login_logo') ?? '';
        include ( 'advance-settings.php' );
    }



    /**
     *
     * run when plugin install
     * install time store on option table
     */
    
    public function activate ( ) {
        add_option('mofw_active',time());
    }

    /**
     *
     * run when deactivate the plugin
     * store deactivate time on database option table
     */

    public function deactivate ( ) {
        add_option('mofw_deactive',time());
    }

    /**
     * Initialize plugin for localization
     *
     * @uses load_plugin_textdomain()
     */
    public function localization_setup() {
        load_plugin_textdomain( 'mofw', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    public function remove_footer_admin ( ) {
        $developedbt = __( 'Developed by', 'advsign' );
        $coderstime = __( 'Coders Time', 'advsign' );        
        echo '<span id="footer-thankyou"> '.$developedbt.' <a href="https://facebook.com/coderstime" target="_blank"> '. $coderstime.' </a> </span>';
    }

    /*
        * Change wordpress login page title content
    */

    public function custom_login_title ( $origtitle ) {
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

    public function gen_login_logo() {
        $login_logo = get_option('login_logo');
        $default_logo = esc_url(WP_CTL_DIR . 'assets/images/logo.svg');
        if ($login_logo) {
            if (!$login_logo['logo_show']) { ?>
                <style> body.login div#login h1{ display: none; } </style> 
            <?php }

            $logo_width = $login_logo['logo_width'];
            $logo_height = $login_logo['logo_height'];
            $logo_url = wp_get_attachment_image_src ( $login_logo['login_logo_id'], 'thumbnail' )[0];
        }       

        ?>
            <style type="text/css">
                #login h1 a, .login h1 a {
                    background-image: url( <?=$logo_url ? : $default_logo; ?>);
                    height:<?php echo $logo_height ? : 84;?>px;
                    width:<?php echo $logo_width ? : 370;?>px;
                    background-size:<?php echo $logo_width ? : 370;?>px <?php echo $logo_height ? : 84;?>px;
                    background-repeat: no-repeat;
                }
            </style>
        <?php 
    }

    public function gen_login_head(){
        add_filter( 'gettext', [ $this,'gen_gettext' ], 10, 3 );
    }

    public function gen_gettext( $translated_text, $text_to_translate, $textdomain )
    {
        if ( 'Username or Email Address' == $text_to_translate ) {
            $translated_text = __( 'Username or Email', 'advsign' );
        } elseif ( 'Password' == $text_to_translate ) {
            $translated_text = __( 'Your Password', 'advsign' );
        }
        return $translated_text;
    }

    public function gen_login_logo_url() {
        return home_url();
    }

    public function gen_login_logo_url_title() 
    {
        return get_bloginfo('name');
    }

    public function login_page_stylesheet ( ) {
        $asset_file_link = plugins_url( '/assets/', __FILE__ );
        $folder_path= __DIR__ .'/assets/';

        wp_enqueue_style( 'custom-login', $asset_file_link . 'css/style-login.css', [], filemtime($folder_path.'css/style-login.css') );
        wp_enqueue_script( 'advance-login', $asset_file_link . 'js/advance-login.js',['jquery'],filemtime($folder_path.'js/advance-login.js'), true );
    }

    public function adv_login_dashboard_stylesheet ( $screen ) {

        if( $screen != 'toplevel_page_advance-login') { return; }


            $asset_file_link = plugins_url( '/assets/', __FILE__ );
            $folder_path= __DIR__ .'/assets/';

            wp_enqueue_style('select2', $asset_file_link . 'css/select2.css', [], '4.0');
            wp_enqueue_style( 'bootstrap', $asset_file_link . 'css/bootstrap.min.css', [], '4.6' );
            wp_enqueue_style( 'fontawesome', $asset_file_link . 'css/fontawesome.min.css', [], '5.15.2' );
            wp_enqueue_style( 'login_dashboard', $asset_file_link . 'css/login-settings.css', [], filemtime($folder_path.'css/login-settings.css') );            
            wp_enqueue_script( 'bootstrap', $asset_file_link . 'js/bootstrap.bundle.min.js',['jquery'],filemtime($folder_path.'js/bootstrap.bundle.min.js'), true );
            wp_enqueue_script('select2', $asset_file_link . 'js/select2.js', ['jquery'], '4.0', true);
            wp_enqueue_media(); /*media upload*/
            // Add the color picker css file       
            // wp_enqueue_style( 'wp-color-picker' ); 
            add_thickbox();
            wp_enqueue_script( 'login_dashboard', $asset_file_link . 'js/login-settings.js',['jquery','wp-color-picker'],filemtime($folder_path.'js/login-settings.js'), true );
            
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
    public function action_links( $links ) {
        return array_merge(
            [
                '<a href="' . admin_url( 'admin.php?page=advance-login' ) . '">' . __( 'Settings', 'advsign' ) . '</a>',
                '<a href="' . esc_url( 'https://www.facebook.com/coderstime' ) . '">' . __( 'Support', 'advsign' ) . '</a>',
                '<a href="' . esc_url( 'https://wordpress.org/support/plugin/manual-order/reviews/#new-post' ) . '">' . __( 'Review', 'advsign' ) . '</a>',
            ], $links );
    }

}

new AdvanceCustomLogin();
