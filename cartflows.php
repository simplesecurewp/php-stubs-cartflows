<?php

namespace {
    /**
     * Class Cartflows_Frontend.
     */
    class Cartflows_Frontend
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Redirect to thank page if upsell not exists
         *
         * @param string $order_recieve_url url.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function redirect_to_thankyou_page($order_recieve_url, $order)
        {
        }
        /**
         * Cancel and redirect to checkout
         *
         * @param string $return_url url.
         * @since 1.0.0
         */
        public function redirect_to_checkout_on_cancel($return_url)
        {
        }
        /**
         * Remove theme styles.
         *
         * @since 1.0.0
         */
        public function remove_theme_styles()
        {
        }
        /**
         * Update main order data in transient.
         *
         * @param array $woo_styles new styles array.
         * @since 1.0.0
         * @return array.
         */
        public function woo_default_css($woo_styles)
        {
        }
        /**
         * Init Actions.
         *
         * @since 1.0.0
         */
        public function init_actions()
        {
        }
        /**
         * Set flow session.
         *
         * @since 1.0.0
         */
        public function set_flow_session()
        {
        }
        /**
         * Delete checkout cookies.
         *
         * @since 1.0.0
         */
        public function delete_checkout_cookies()
        {
        }
        /**
         * Add noindex, nofollow.
         *
         * @since 1.0.0
         */
        public function noindex_flow()
        {
        }
        /**
         * WP Actions.
         *
         * @since 1.0.0
         */
        public function wp_actions()
        {
        }
        /**
         * Debug Data Setting Actions.
         *
         * @since 1.1.14
         */
        public function debug_data_setting_actions()
        {
        }
        /**
         * Get/Set the allow minify option.
         *
         * @since 1.1.14
         */
        public function allow_load_minify()
        {
        }
        /**
         * Global flow scripts.
         *
         * @since 1.0.0
         */
        public function global_flow_scripts()
        {
        }
        /**
         * Custom Script in head.
         *
         * @since 1.0.0
         */
        public function custom_script_option()
        {
        }
        /**
         * Override woo templates.
         *
         * @param string $template new  Template full path.
         * @param string $template_name Template name.
         * @param string $template_path Template Path.
         * @since 1.1.5
         * @return string.
         */
        public function override_woo_template($template, $template_name, $template_path)
        {
        }
        /**
         * Remove the action applied by the Flatsome theme.
         *
         * @since 1.1.5
         * @return void.
         */
        public function remove_flatsome_action()
        {
        }
        /**
         * Add version class to body in frontend.
         *
         * @since 1.1.5
         * @param array $classes classes.
         * @return array $classes classes.
         */
        public function add_cartflows_lite_version_to_body($classes)
        {
        }
        /**
         *  Get custom script data.
         *
         * @since 1.0.0
         */
        public function get_custom_script()
        {
        }
        /**
         * Replace the dynamic vars in the custom script.
         *
         * @param string $script custom script.
         * @return string $script modified custom script.
         *
         * @since 1.10.0
         */
        public function maybe_replace_vars($script)
        {
        }
        /**
         *  Get custom script data.
         *
         * @since 1.0.0
         */
        public function get_flow_custom_script()
        {
        }
        /**
         * Set appropriate filter sctions.
         *
         * @since 1.1.14
         */
        public function setup_optin_checkout_filter()
        {
        }
        /**
         * Redirect to thank page if upsell not exists
         *
         * @param string $order_recieve_url url.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function redirect_optin_to_next_step($order_recieve_url, $order)
        {
        }
    }
    /**
     * Step factory
     *
     * @since 1.0.0
     */
    class Cartflows_Step_Factory
    {
        /**
         *  Constructor
         *
         * @param int $id step id.
         */
        public function __construct($id = \null)
        {
        }
        /**
         * Is ab test enable
         */
        public function is_ab_test_enable()
        {
        }
        /**
         * Get flow id
         */
        public function get_flow_id()
        {
        }
        /**
         * Get step id
         */
        public function get_step_id()
        {
        }
        /**
         * Get step type
         */
        public function get_step_type()
        {
        }
        /**
         * Get control step id
         */
        public function get_current_step()
        {
        }
        /**
         * Get control step id
         */
        public function get_control_step()
        {
        }
        /**
         * Get flow steps
         */
        public function get_flow_steps()
        {
        }
        /**
         * Set flow steps map
         */
        public function set_flow_steps_map()
        {
        }
        /**
         * Check for thank you page
         *
         * @return bool
         */
        public function is_thankyou_page()
        {
        }
        /**
         * Check for checkout page
         *
         * @return bool
         */
        public function is_checkout_page()
        {
        }
        /**
         * Get direct next step id.
         *
         * @since 1.6.15
         *
         * @return bool|int
         */
        public function get_direct_next_step_id()
        {
        }
    }
    /**
     * Flow Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Flow_Frontend
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add a new admin bar menu to navigate to edit the flow.
         *
         * @param object $admin_bar The object of admin bar.
         * @return void
         */
        public function add_edit_flow_menu($admin_bar)
        {
        }
        /**
         *  Footer markup
         */
        public function footer_markup()
        {
        }
        /**
         * Check if flow test mode is enable.
         *
         * @since 1.0.0
         * @param int $flow_id flow ID.
         *
         * @return boolean
         */
        public function is_flow_testmode($flow_id = '')
        {
        }
        /**
         * Get steps data.
         *
         * @since 1.0.0
         * @param int $flow_id flow ID.
         *
         * @return array
         */
        public function get_steps($flow_id)
        {
        }
        /**
         * Check thank you page exists.
         *
         * @since 1.0.0
         * @param array $order order data.
         *
         * @return bool
         */
        public function is_thankyou_page_exists($order)
        {
        }
        /**
         * Check thank you page exists.
         *
         * @since 1.0.0
         * @param array $order order data.
         *
         * @return bool
         */
        public function get_thankyou_page_id($order)
        {
        }
    }
    /**
     * Font info class for System and Google fonts.
     */
    final class CartFlows_Font_Families
    {
        /**
         * System Fonts
         *
         * @since 1.0.0
         * @var array
         */
        public static $system_fonts = array();
        /**
         * Google Fonts
         *
         * @since 1.0.0
         * @var array
         */
        public static $google_fonts = array();
        /**
         * Get System Fonts
         *
         * @since 1.0.0
         *
         * @return Array All the system fonts in CartFlows
         */
        public static function get_system_fonts()
        {
        }
        /**
         * Custom Fonts
         *
         * @since 1.0.0
         *
         * @return Array All the custom fonts in CartFlows
         */
        public static function get_custom_fonts()
        {
        }
        /**
         * Google Fonts used in CartFlows.
         * Array is generated from the google-fonts.json file.
         *
         * @since 1.0.0
         *
         * @return Array Array of Google Fonts.
         */
        public static function get_google_fonts()
        {
        }
        /**
         * Render Fonts
         *
         * @param array $post_id  post ID.
         * @return void
         */
        public static function render_fonts($post_id)
        {
        }
        /**
         * Get string between
         *
         * @param  string $string Input string.
         * @param  string $start  First string.
         * @param  string $end    Last string.
         * @return string         string.
         */
        public static function get_string_between($string, $start, $end)
        {
        }
        /**
         * Google Font URL
         * Combine multiple google font in one URL
         *
         * @link https://shellcreeper.com/?p=1476
         * @param array $fonts      Google Fonts array.
         */
        public static function google_fonts_url($fonts)
        {
        }
        /**
         * Generate Google Font URL from the post meta.
         *
         * @param  integer $post_id Post ID.
         */
        public static function generate_google_url($post_id)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Default_Meta
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Show design meta options.
         *
         * @return string
         */
        public function get_show_design_meta_value()
        {
        }
        /**
         *  Checkout Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_checkout_fields($post_id)
        {
        }
        /**
         *  Flow Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_flow_fields($post_id)
        {
        }
        /**
         *  Get checkout meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @param mix    $default options default value.
         * @return string
         */
        public function get_flow_meta_value($post_id, $key, $default = \false)
        {
        }
        /**
         *  Get checkout meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @param mix    $default options default value.
         * @return string
         */
        public function get_checkout_meta_value($post_id = 0, $key = '', $default = \false)
        {
        }
        /**
         *  Get post meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @return string
         */
        public function get_save_meta($post_id, $key)
        {
        }
        /**
         *  Thank You Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_thankyou_fields($post_id)
        {
        }
        /**
         *  Get Thank you section meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @param mix    $default options default value.
         * @return string
         */
        public function get_thankyou_meta_value($post_id, $key, $default = \false)
        {
        }
        /**
         *  Get Landing section meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @param mix    $default options default value.
         * @return string
         */
        public function get_landing_meta_value($post_id, $key, $default = \false)
        {
        }
        /**
         *  Landing Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_landing_fields($post_id)
        {
        }
        /**
         *  Optin Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_optin_fields($post_id)
        {
        }
        /**
         *  Get optin meta.
         *
         * @param int    $post_id post id.
         * @param string $key options key.
         * @param mix    $default options default value.
         * @return string
         */
        public function get_optin_meta_value($post_id = 0, $key = '', $default = \false)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Logger
    {
        /**
         * Member Variable
         *
         * @var logger
         */
        public $logger;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Init Logger.
         *
         * @since 1.0.0
         */
        public function init_wc_logger()
        {
        }
        /**
         * Enable log.
         *
         * @since 1.7.2
         */
        public function is_log_enable()
        {
        }
        /**
         * Write log
         *
         * @param string $message log message.
         * @param string $level type of log.
         * @since 1.0.0
         */
        public function log($message, $level = 'info')
        {
        }
        /**
         * Write log
         *
         * @param string $message log message.
         * @param string $level type of log.
         * @since 1.0.0
         */
        public function import_log($message, $level = 'info')
        {
        }
        /**
         * Migration log
         *
         * @param string $message migration message.
         * @param string $level type of log.
         * @since 1.7.0
         */
        public function migration_log($message, $level = 'info')
        {
        }
        /**
         * Sync log
         *
         * @param string $message log message.
         * @param string $level type of log.
         * @since 1.0.0
         */
        public function sync_log($message, $level = 'info')
        {
        }
        /**
         * Schedule the action to delete the CartFlows log files on monthly basis.
         *
         * @return void
         */
        public function schedule_deletion_of_old_logs()
        {
        }
        /**
         * Delete the CartFlows logs files.
         * This action will be executed on first day of each month.
         */
        public function delete_old_logs_files()
        {
        }
    }
    /**
     * Class Cartflows_Utils.
     */
    class Cartflows_Utils
    {
        /**
         * Member Variable
         *
         * @var checkout_products
         */
        public $checkout_products = array();
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         *  Get current post type
         *
         * @param string $post_type post type.
         * @return string
         */
        public function current_post_type($post_type = '')
        {
        }
        /**
         * Check if post type is of step.
         *
         * @param string $post_type post type.
         * @return bool
         */
        public function is_step_post_type($post_type = '')
        {
        }
        /**
         * Check if post type is of flow.
         *
         * @param string $post_type post type.
         * @return bool
         */
        public function is_flow_post_type($post_type = '')
        {
        }
        /**
         * Get post type of step.
         *
         * @return string
         */
        public function get_step_post_type()
        {
        }
        /**
         * Get post type of flow.
         *
         * @return string
         */
        public function get_flow_post_type()
        {
        }
        /**
         * Get flow id
         *
         * @return int
         */
        public function get_flow_id()
        {
        }
        /**
         * Get flow id by step
         *
         * @param int $step_id step ID.
         * @return int
         */
        public function get_flow_id_from_step_id($step_id)
        {
        }
        /**
         * Get flow steps by id
         *
         * @param int $flow_id flow ID.
         * @return int
         */
        public function get_flow_steps($flow_id)
        {
        }
        /**
         * Get template type of step
         *
         * @param int $step_id step ID.
         * @return int
         */
        public function get_step_type($step_id)
        {
        }
        /**
         * Get next id for step
         *
         * @param int $flow_id flow ID.
         * @param int $step_id step ID.
         * @return bool
         */
        public function get_next_step_id($flow_id, $step_id)
        {
        }
        /**
         * Get next id for step
         *
         * @param object $order order object.
         * @return int
         */
        public function get_flow_id_from_order($order)
        {
        }
        /**
         * Get checkout id for order
         *
         * @param object $order order object.
         * @return int
         */
        public function get_checkout_id_from_order($order)
        {
        }
        /**
         * We are using this function mostly in ajax on checkout page
         *
         * @return bool
         */
        public function get_checkout_id_from_post_data()
        {
        }
        /**
         * We are using this function mostly in ajax on checkout page
         *
         * @return bool
         */
        public function get_flow_id_from_post_data()
        {
        }
        /**
         * Get optin id for order
         *
         * @param object $order order object.
         * @return int
         */
        public function get_optin_id_from_order($order)
        {
        }
        /**
         * We are using this function mostly in ajax on checkout page
         *
         * @return bool
         */
        public function get_optin_id_from_post_data()
        {
        }
        /**
         * Check for checkout page
         *
         * @param int $step_id step ID.
         * @return bool
         */
        public function check_is_checkout_page($step_id)
        {
        }
        /**
         * Check for thank you page
         *
         * @param int $step_id step ID.
         * @return bool
         */
        public function check_is_thankyou_page($step_id)
        {
        }
        /**
         * Check for offer page
         *
         * @param int $step_id step ID.
         * @return bool
         */
        public function check_is_offer_page($step_id)
        {
        }
        /**
         *  Check if loaded page requires woo.
         *
         * @return bool
         */
        public function check_is_woo_required_page()
        {
        }
        /**
         * Define constant for cache
         *
         * @return void
         */
        public function do_not_cache()
        {
        }
        /**
         * Get linking url
         *
         * @param array $args query args.
         * @return string
         */
        public function get_linking_url($args = array())
        {
        }
        /**
         * Get assets urls
         *
         * @return array
         * @since 1.1.6
         */
        public function get_assets_path()
        {
        }
        /**
         * Get assets css url
         *
         * @param string $file file name.
         * @return string
         * @since 1.1.6
         */
        public function get_css_url($file)
        {
        }
        /**
         * Get assets js url
         *
         * @param string $file file name.
         * @return string
         * @since 1.1.6
         */
        public function get_js_url($file)
        {
        }
        /**
         * Get unique id.
         *
         * @param int $length    Length.
         *
         * @return string
         */
        public function get_unique_id($length = 8)
        {
        }
        /**
         * Get selected checkout products and data
         *
         * @param int   $checkout_id    Checkout id..
         * @param array $saved_products Saved product.
         *
         * @return array
         */
        public function get_selected_checkout_products($checkout_id = '', $saved_products = array())
        {
        }
        /**
         * Update product add to cart option.
         *
         * @param array $products product data.
         */
        public function update_the_add_to_cart_param($products)
        {
        }
        /**
         * Get selected checkout products and data
         *
         * @param int   $checkout_id    Checkout id..
         * @param array $products_data  Saved product.
         *
         * @return array
         */
        public function set_selcted_checkout_products($checkout_id = '', $products_data = array())
        {
        }
        /**
         * Clear Installed Page Builder Cache
         */
        public function clear_cache()
        {
        }
    }
    /**
     * Class Cartflows_Loader.
     */
    final class Cartflows_Loader
    {
        /**
         * Member Variable
         *
         * @var utils
         */
        public $utils = \null;
        /**
         * Member Variable
         *
         * @var logger
         */
        public $logger = \null;
        /**
         * Member Variable
         *
         * @var options
         */
        public $options = \null;
        /**
         * Member Variable
         *
         * @var meta
         */
        public $meta = \null;
        /**
         * Member Variable
         *
         * @var Tracking_Data
         */
        public $alldata;
        /**
         * Member Variable
         *
         * @var flow
         */
        public $flow = \null;
        /**
         *  Member Variable
         *
         *  @var wcf_step_objs
         */
        public $wcf_step_objs = array();
        /**
         * Member Variable
         *
         * @var assets_vars
         */
        public $assets_vars = \null;
        /**
         *  Member Variable
         *
         *  @var assets_vars
         */
        public $is_woo_active = \true;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Defines all constants
         *
         * @since 1.0.0
         */
        public function define_constants()
        {
        }
        /**
         * Get site slug
         *
         * @since 1.6.15
         * @return string
         */
        public function get_site_slug()
        {
        }
        /**
         * Get site URL
         *
         * @since 1.6.15
         * @param  string $page_builder_slug Page builder slug.
         * @return string
         */
        public function get_site_url($page_builder_slug = '')
        {
        }
        /**
         * Loads plugin files.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function load_plugin()
        {
        }
        /**
         * After CartFlows Pro init.
         *
         * @since 1.1.19
         *
         * @return void
         */
        public function after_cartflows_pro_init()
        {
        }
        /**
         * Required CartFlows Pro Notice.
         *
         * @since 1.1.19
         *
         * @return void
         */
        public function required_cartflows_pro_notice()
        {
        }
        /**
         * Load Helper Files and Components.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function load_helper_files_components()
        {
        }
        /**
         * Init hooked function.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function initialize()
        {
        }
        /**
         * Load Core Files.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function load_core_files()
        {
        }
        /**
         * Load Core Components.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function load_core_components()
        {
        }
        /**
         * Create files/directories.
         */
        public function create_files()
        {
        }
        /**
         * Load CartFlows Pro Text Domain.
         * This will load the translation textdomain depending on the file priorities.
         *      1. Global Languages /wp-content/languages/cartflows/ folder
         *      2. Local dorectory /wp-content/plugins/cartflows/languages/ folder
         *
         * @since 1.0.3
         * @return void
         */
        public function load_cf_textdomain()
        {
        }
        /**
         * Fires admin notice when Elementor is not installed and activated.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function fails_to_load()
        {
        }
        /**
         * Activation Reset
         */
        public function activation_reset()
        {
        }
        /**
         * Deactivation Reset
         */
        public function deactivation_reset()
        {
        }
        /**
         * Logger Class Instance
         */
        public function logger()
        {
        }
    }
    /**
     * Class for elementor page builder compatibility
     */
    class Cartflows_Woo_Hooks
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        public static $ajax_data = array();
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Rgister wc hookes for elementor preview mode
         */
        public function register_wc_hooks()
        {
        }
        /**
         * Update order review hook
         *
         * @param string $post_raw_data post data.
         */
        public function update_order_review_hook($post_raw_data)
        {
        }
    }
    /**
     * WC Log Handler Interface
     *
     * Functions that must be defined to correctly fulfill log handler API.
     *
     * @version 3.3.0
     */
    interface Cartflows_Log_Handler_Interface
    {
        /**
         * Handle a log entry.
         *
         * @param int    $timestamp Log timestamp.
         * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
         * @param string $message Log message.
         * @param array  $context Additional information for log handlers.
         *
         * @return bool False if value was not handled and true if value was handled.
         */
        public function handle($timestamp, $level, $message, $context);
    }
    /**
     * Abstract WC Log Handler Class
     *
     * @version        1.0.0
     * @package        WooCommerce/Abstracts
     */
    abstract class Cartflows_Log_Handler implements \Cartflows_Log_Handler_Interface
    {
        /**
         * Formats a timestamp for use in log messages.
         *
         * @param int $timestamp Log timestamp.
         * @return string Formatted time for use in log entry.
         */
        protected static function format_time($timestamp)
        {
        }
        /**
         * Builds a log entry text from level, timestamp and message.
         *
         * @param int    $timestamp Log timestamp.
         * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
         * @param string $message Log message.
         * @param array  $context Additional information for log handlers.
         *
         * @return string Formatted log entry.
         */
        protected static function format_entry($timestamp, $level, $message, $context)
        {
        }
    }
    /**
     * Handles log entries by writing to a file.
     *
     * @class          Cartflows_Log_Handler_File
     * @version        1.0.0
     * @package        WooCommerce/Classes/Log_Handlers
     */
    class Cartflows_Log_Handler_File extends \Cartflows_Log_Handler
    {
        /**
         * Stores open file handles.
         *
         * @var array
         */
        protected $handles = array();
        /**
         * File size limit for log files in bytes.
         *
         * @var int
         */
        protected $log_size_limit;
        /**
         * Cache logs that could not be written.
         *
         * If a log is written too early in the request, pluggable functions may be unavailable. These
         * logs will be cached and written on 'plugins_loaded' action.
         *
         * @var array
         */
        protected $cached_logs = array();
        /**
         * Constructor for the logger.
         *
         * @param int $log_size_limit Optional. Size limit for log files. Default 5mb.
         */
        public function __construct($log_size_limit = \null)
        {
        }
        /**
         * Destructor.
         *
         * Cleans up open file handles.
         */
        public function __destruct()
        {
        }
        /**
         * Handle a log entry.
         *
         * @param int    $timestamp Log timestamp.
         * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
         * @param string $message Log message.
         * @param array  $context {
         *      Additional information for log handlers.
         *
         *     @type string $source Optional. Determines log file to write to. Default 'log'.
         *     @type bool $_legacy Optional. Default false. True to use outdated log format
         *         originally used in deprecated Cartflows_WC_Logger::add calls.
         * }
         *
         * @return bool False if value was not handled and true if value was handled.
         */
        public function handle($timestamp, $level, $message, $context)
        {
        }
        /**
         * Builds a log entry text from timestamp, level and message.
         *
         * @param int    $timestamp Log timestamp.
         * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
         * @param string $message Log message.
         * @param array  $context Additional information for log handlers.
         *
         * @return string Formatted log entry.
         */
        protected static function format_entry($timestamp, $level, $message, $context)
        {
        }
        /**
         * Open log file for writing.
         *
         * @param string $handle Log handle.
         * @param string $mode Optional. File mode. Default 'a'.
         * @return bool Success.
         */
        protected function open($handle, $mode = 'a')
        {
        }
        /**
         * Check if a handle is open.
         *
         * @param string $handle Log handle.
         * @return bool True if $handle is open.
         */
        protected function is_open($handle)
        {
        }
        /**
         * Close a handle.
         *
         * @param string $handle Log handle.
         * @return bool success
         */
        protected function close($handle)
        {
        }
        /**
         * Add a log entry to chosen file.
         *
         * @param string $entry Log entry text.
         * @param string $handle Log entry handle.
         *
         * @return bool True if write was successful.
         */
        protected function add($entry, $handle)
        {
        }
        /**
         * Clear entries from chosen file.
         *
         * @param string $handle Log handle.
         *
         * @return bool
         */
        public function clear($handle)
        {
        }
        /**
         * Remove/delete the chosen file.
         *
         * @param string $handle Log handle.
         *
         * @return bool
         */
        public function remove($handle)
        {
        }
        /**
         * Check if log file should be rotated.
         *
         * Compares the size of the log file to determine whether it is over the size limit.
         *
         * @param string $handle Log handle.
         * @return bool True if if should be rotated.
         */
        protected function should_rotate($handle)
        {
        }
        /**
         * Rotate log files.
         *
         * Logs are rotated by prepending '.x' to the '.log' suffix.
         * The current log plus 10 historical logs are maintained.
         * For example:
         *     base.9.log -> [ REMOVED ]
         *     base.8.log -> base.9.log
         *     ...
         *     base.0.log -> base.1.log
         *     base.log   -> base.0.log
         *
         * @param string $handle Log handle.
         */
        protected function log_rotate($handle)
        {
        }
        /**
         * Increment a log file suffix.
         *
         * @param string   $handle Log handle.
         * @param null|int $number Optional. Default null. Log suffix number to be incremented.
         * @return bool True if increment was successful, otherwise false.
         */
        protected function increment_log_infix($handle, $number = \null)
        {
        }
        /**
         * Get a log file path.
         *
         * @param string $handle Log name.
         * @return bool|string The log file path or false if path cannot be determined.
         */
        public static function get_log_file_path($handle)
        {
        }
        /**
         * Get a log file name.
         *
         * File names consist of the handle, followed by the date, followed by a hash, .log.
         *
         * @since 3.3
         * @param string $handle Log name.
         * @return bool|string The log file name or false if cannot be determined.
         */
        public static function get_log_file_name($handle)
        {
        }
        /**
         * Cache log to write later.
         *
         * @param string $entry Log entry text.
         * @param string $handle Log entry handle.
         */
        protected function cache_log($entry, $handle)
        {
        }
        /**
         * Write cached logs.
         */
        public function write_cached_logs()
        {
        }
        /**
         * Delete all logs older than a defined timestamp.
         *
         * @since 3.4.0
         * @param integer $timestamp Timestamp to delete logs before.
         */
        public static function delete_logs_before_timestamp($timestamp = 0)
        {
        }
        /**
         * Get all log files in the log directory.
         *
         * @since 3.4.0
         * @return array
         */
        public static function get_log_files()
        {
        }
    }
    /**
     * Log levels class.
     */
    abstract class Cartflows_Log_Levels
    {
        /**
         * Log Levels
         *
         * Description of levels:
         *     'emergency': System is unusable.
         *     'alert': Action must be taken immediately.
         *     'critical': Critical conditions.
         *     'error': Error conditions.
         *     'warning': Warning conditions.
         *     'notice': Normal but significant condition.
         *     'info': Informational messages.
         *     'debug': Debug-level messages.
         *
         * @see @link {https://tools.ietf.org/html/rfc5424}
         */
        const EMERGENCY = 'emergency';
        const ALERT = 'alert';
        const CRITICAL = 'critical';
        const ERROR = 'error';
        const WARNING = 'warning';
        const NOTICE = 'notice';
        const INFO = 'info';
        const DEBUG = 'debug';
        /**
         * Level strings mapped to integer severity.
         *
         * @var array
         */
        protected static $level_to_severity = array(self::EMERGENCY => 800, self::ALERT => 700, self::CRITICAL => 600, self::ERROR => 500, self::WARNING => 400, self::NOTICE => 300, self::INFO => 200, self::DEBUG => 100);
        /**
         * Severity integers mapped to level strings.
         *
         * This is the inverse of $level_severity.
         *
         * @var array
         */
        protected static $severity_to_level = array(800 => self::EMERGENCY, 700 => self::ALERT, 600 => self::CRITICAL, 500 => self::ERROR, 400 => self::WARNING, 300 => self::NOTICE, 200 => self::INFO, 100 => self::DEBUG);
        /**
         * Validate a level string.
         *
         * @param string $level Log level.
         * @return bool True if $level is a valid level.
         */
        public static function is_valid_level($level)
        {
        }
        /**
         * Translate level string to integer.
         *
         * @param string $level Log level, options: emergency|alert|critical|error|warning|notice|info|debug.
         * @return int 100 (debug) - 800 (emergency) or 0 if not recognized
         */
        public static function get_level_severity($level)
        {
        }
        /**
         * Translate severity integer to level string.
         *
         * @param int $severity Serevity level.
         * @return bool|string False if not recognized. Otherwise string representation of level.
         */
        public static function get_severity_level($severity)
        {
        }
    }
    /**
     * WC Logger Interface
     *
     * Functions that must be defined to correctly fulfill logger API.
     *
     * @version 3.0.0
     */
    interface Cartflows_WC_Logger_Interface
    {
        /**
         * Add a log entry.
         *
         * This is not the preferred method for adding log messages. Please use log() or any one of
         * the level methods (debug(), info(), etc.). This method may be deprecated in the future.
         *
         * @param string $handle File handle.
         * @param string $message Log message.
         * @param string $level Log level.
         *
         * @return bool True if log was added, otherwise false.
         */
        public function add($handle, $message, $level = \Cartflows_Log_Levels::NOTICE);
        /**
         * Add a log entry.
         *
         * @param string $level One of the following:
         *     'emergency': System is unusable.
         *     'alert': Action must be taken immediately.
         *     'critical': Critical conditions.
         *     'error': Error conditions.
         *     'warning': Warning conditions.
         *     'notice': Normal but significant condition.
         *     'info': Informational messages.
         *     'debug': Debug-level messages.
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function log($level, $message, $context = array());
        /**
         * Adds an emergency level message.
         *
         * System is unusable.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function emergency($message, $context = array());
        /**
         * Adds an alert level message.
         *
         * Action must be taken immediately.
         * Example: Entire website down, database unavailable, etc.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function alert($message, $context = array());
        /**
         * Adds a critical level message.
         *
         * Critical conditions.
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function critical($message, $context = array());
        /**
         * Adds an error level message.
         *
         * Runtime errors that do not require immediate action but should typically be logged
         * and monitored.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function error($message, $context = array());
        /**
         * Adds a warning level message.
         *
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things that are not
         * necessarily wrong.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function warning($message, $context = array());
        /**
         * Adds a notice level message.
         *
         * Normal but significant events.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function notice($message, $context = array());
        /**
         * Adds a info level message.
         *
         * Interesting events.
         * Example: User logs in, SQL logs.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function info($message, $context = array());
        /**
         * Adds a debug level message.
         *
         * Detailed debug information.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function debug($message, $context = array());
    }
    /**
     * Cartflows_WC_Logger class.
     */
    class Cartflows_WC_Logger implements \Cartflows_WC_Logger_Interface
    {
        /**
         * Stores registered log handlers.
         *
         * @var array
         */
        protected $handlers;
        /**
         * Minimum log level this handler will process.
         *
         * @var int Integer representation of minimum log level to handle.
         */
        protected $threshold;
        /**
         * Constructor for the logger.
         *
         * @param array  $handlers Optional. Array of log handlers. If $handlers is not provided, the filter 'woocommerce_register_log_handlers' will be used to define the handlers. If $handlers is provided, the filter will not be applied and the handlers will be used directly.
         * @param string $threshold Optional. Define an explicit threshold. May be configured via  WC_LOG_THRESHOLD. By default, all logs will be processed.
         */
        public function __construct($handlers = \null, $threshold = \null)
        {
        }
        /**
         * Determine whether to handle or ignore log.
         *
         * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
         * @return bool True if the log should be handled.
         */
        protected function should_handle($level)
        {
        }
        /**
         * Add a log entry.
         *
         * This is not the preferred method for adding log messages. Please use log() or any one of
         * the level methods (debug(), info(), etc.). This method may be deprecated in the future.
         *
         * @param string $handle File handle.
         * @param string $message Message to log.
         * @param string $level Logging level.
         * @return bool
         */
        public function add($handle, $message, $level = \Cartflows_Log_Levels::NOTICE)
        {
        }
        /**
         * Add a log entry.
         *
         * @param string $level One of the following:
         *     'emergency': System is unusable.
         *     'alert': Action must be taken immediately.
         *     'critical': Critical conditions.
         *     'error': Error conditions.
         *     'warning': Warning conditions.
         *     'notice': Normal but significant condition.
         *     'info': Informational messages.
         *     'debug': Debug-level messages.
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         */
        public function log($level, $message, $context = array())
        {
        }
        /**
         * Adds an emergency level message.
         *
         * System is unusable.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function emergency($message, $context = array())
        {
        }
        /**
         * Adds an alert level message.
         *
         * Action must be taken immediately.
         * Example: Entire website down, database unavailable, etc.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function alert($message, $context = array())
        {
        }
        /**
         * Adds a critical level message.
         *
         * Critical conditions.
         * Example: Application component unavailable, unexpected exception.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function critical($message, $context = array())
        {
        }
        /**
         * Adds an error level message.
         *
         * Runtime errors that do not require immediate action but should typically be logged
         * and monitored.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function error($message, $context = array())
        {
        }
        /**
         * Adds a warning level message.
         *
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things that are not
         * necessarily wrong.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function warning($message, $context = array())
        {
        }
        /**
         * Adds a notice level message.
         *
         * Normal but significant events.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function notice($message, $context = array())
        {
        }
        /**
         * Adds a info level message.
         *
         * Interesting events.
         * Example: User logs in, SQL logs.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function info($message, $context = array())
        {
        }
        /**
         * Adds a debug level message.
         *
         * Detailed debug information.
         *
         * @see Cartflows_WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public function debug($message, $context = array())
        {
        }
        /**
         * Clear entries for a chosen file/source.
         *
         * @param string $source Source/handle to clear.
         * @return bool
         */
        public function clear($source = '')
        {
        }
        /**
         * Clear all logs older than a defined number of days. Defaults to 30 days.
         *
         * @since 3.4.0
         */
        public function clear_expired_logs()
        {
        }
    }
    /**
     * CartFlows Import Divi
     *
     * @since 1.1.1
     */
    class CartFlows_Importer_Divi
    {
        /**
         * Initiator
         *
         * @since 1.1.1
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.1.1
         */
        public function __construct()
        {
        }
        /**
         * Allowed tags for the batch update process
         *
         * @since 1.6.15
         *
         * @param  array        $allowedposttags   Array of default allowable HTML tags.
         * @param  string|array $context    The context for which to retrieve tags. Allowed values are 'post',
         *                                  'strip', 'data', 'entities', or the name of a field filter such as
         *                                  'pre_user_description'.
         * @return array Array of allowed HTML tags and their allowed attributes.
         */
        public function allowed_tags_and_attributes($allowedposttags, $context)
        {
        }
        /**
         * Update post meta.
         *
         * @param  integer $post_id Post ID.
         * @return void
         */
        public function import_single_post($post_id = 0)
        {
        }
    }
    /**
     * Cartflows_Batch_Processing_Sync_Library
     *
     * @since 1.0.14
     */
    class Cartflows_Batch_Processing_Sync_Library
    {
        /**
         * Initiator
         *
         * @since 1.0.14
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.14
         */
        public function __construct()
        {
        }
        /**
         * Generate JSON file.
         *
         * @since 1.6.15
         *
         * @param  string $filename File name.
         * @param  array  $data     JSON file data.
         * @return void.
         */
        public function generate_file($filename = '', $data = array())
        {
        }
        /**
         * Import
         *
         * @since 1.0.14
         * @since 1.6.15 Added page no.
         *
         * @param  integer $page Page number.
         * @param string  $templates templates category to fetch.
         * @return array
         */
        public function import_sites($page = 1, $templates = '')
        {
        }
    }
    /**
     * CartFlows Import Beaver Builder
     *
     * @since 1.1.1
     */
    class CartFlows_Importer_Beaver_Builder
    {
        /**
         * Initiator
         *
         * @since 1.1.1
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.1.1
         */
        public function __construct()
        {
        }
        /**
         * Update post meta.
         *
         * @param  integer $post_id Post ID.
         * @return void
         */
        public function import_single_post($post_id = 0)
        {
        }
        /**
         * Update post meta.
         *
         * @param  array $data    Page builder data.
         * @return mixed
         */
        public function get_import_data($data)
        {
        }
        /**
         * Import Module Images.
         *
         * @param  object $settings Module settings object.
         * @return object
         */
        public static function import_module_images($settings)
        {
        }
        /**
         * Import Column Images.
         *
         * @param  object $settings Column settings object.
         * @return object
         */
        public static function import_column_images($settings)
        {
        }
        /**
         * Import Row Images.
         *
         * @param  object $settings Row settings object.
         * @return object
         */
        public static function import_row_images($settings)
        {
        }
        /**
         * Helper: Import BG Images.
         *
         * @param  object $settings Row settings object.
         * @return object
         */
        public static function import_bg_image($settings)
        {
        }
        /**
         * Helper: Import Photo.
         *
         * @param  object $settings Row settings object.
         * @return object
         */
        public static function import_photo($settings)
        {
        }
    }
    /**
     * CartFlows Import Gutenberg
     *
     * @since 1.6.15
     */
    class CartFlows_Importer_Gutenberg
    {
        /**
         * Initiator
         *
         * @since 1.6.15
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.6.15
         */
        public function __construct()
        {
        }
        /**
         * Update post meta.
         *
         * @param  integer $post_id Post ID.
         * @return void
         */
        public function import_single_post($post_id = 0)
        {
        }
    }
    /**
     * Abstract WP_Async_Request class.
     *
     * @abstract
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract WP_Background_Process class.
     *
     * @abstract
     * @extends WP_Async_Request
     */
    abstract class WP_Background_Process extends \WP_Async_Request
    {
        /**
         * Action
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Initiate new background process
         */
        public function __construct()
        {
        }
        /**
         * Dispatch
         *
         *  @return mixed dispatch event.
         */
        public function dispatch()
        {
        }
        /**
         * Push to queue
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @return $this
         */
        protected function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded.
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         */
        public function cancel_process()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
    }
    /**
     * Image Background Process
     *
     * @since 1.6.15
     */
    class Cartflows_Importer_Gutenberg_Batch extends \WP_Background_Process
    {
        /**
         * Image Process
         *
         * @var string
         */
        protected $action = 'cartflows_gutenberg_image_process';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 1.6.15
         *
         * @param integer $post_id Post Id.
         * @return mixed
         */
        protected function task($post_id)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 1.6.15
         */
        protected function complete()
        {
        }
    }
    /**
     * Image Background Process
     *
     * @since 1.6.15
     */
    class WP_Background_Process_Cartflows_Sync_Library extends \WP_Background_Process
    {
        /**
         * Image Process
         *
         * @var string
         */
        protected $action = 'cartflows_sync_library';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 1.6.15
         *
         * @param object $object Queue item object.
         * @return mixed
         */
        protected function task($object)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 1.6.15
         */
        protected function complete()
        {
        }
    }
    /**
     * CartFlows Importer
     *
     * @since 1.1.1
     */
    class CartFlows_Import_Image
    {
        /**
         * Initiator
         *
         * @since 1.1.1
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.1.1
         */
        public function __construct()
        {
        }
        /**
         * Process Image Download
         *
         * @since 1.1.1
         * @param  array $attachments Attachment array.
         * @return array              Attachment array.
         */
        public function process($attachments)
        {
        }
        /**
         * Import Image
         *
         * @since 1.1.1
         * @param  array $attachment Attachment array.
         * @return array              Attachment array.
         */
        public function import($attachment)
        {
        }
    }
    /**
     * Change Template Process
     *
     * @since 1.2.2
     */
    class Cartflows_Change_Template_Batch extends \WP_Background_Process
    {
        /**
         * Template Process
         *
         * @var string
         */
        protected $action = 'cartflows_change_template_process';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $post_id Queue item to iterate over.
         *
         * @return mixed
         */
        protected function task($post_id)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
    }
}
namespace Elementor\TemplateLibrary {
    /**
     * Elementor template library local source.
     *
     * Elementor template library local source handler class is responsible for
     * handling local Elementor templates saved by the user locally on his site.
     *
     * @since 1.0.0
     */
    class CartFlows_Importer_Elementor extends \Elementor\TemplateLibrary\Source_Local
    {
        /**
         *  Import single template
         *
         * @param int $post_id post ID.
         */
        public function import_single_template($post_id)
        {
        }
        /**
         * Clear Cache.
         *
         * @since 1.0.0
         */
        public function clear_cache()
        {
        }
    }
}
namespace {
    /**
     * Image Background Process
     *
     * @since 1.1.1
     */
    class Cartflows_Importer_Beaver_Builder_Batch extends \WP_Background_Process
    {
        /**
         * Image Process
         *
         * @var string
         */
        protected $action = 'cartflows_beaver_builder_image_process';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 1.1.1
         *
         * @param integer $post_id Post Id.
         * @return mixed
         */
        protected function task($post_id)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 1.1.1
         */
        protected function complete()
        {
        }
    }
    /**
     * CartFlows_Batch_Process
     *
     * @since 1.0.0
     */
    class CartFlows_Batch_Process
    {
        /**
         * Elementor Batch Instance
         *
         * @since 1.1.1 Updated instance name with elementor specific.
         *
         * @since 1.0.0
         * @var object Class object.
         * @access public
         */
        public static $batch_instance_elementor;
        /**
         * Beaver Builder Batch Instance
         *
         * @since 1.1.1
         * @var object Class object.
         * @access public
         */
        public static $batch_instance_bb;
        /**
         * Divi Batch Instance
         *
         * @since 1.1.1
         * @var object Class object.
         * @access public
         */
        public static $batch_instance_divi;
        /**
         * Gutenberg Batch Instance
         *
         * @since 1.5.9
         * @var object Class object.
         * @access public
         */
        public static $batch_instance_gb;
        /**
         * Sites Importer
         *
         * @since 1.6.15
         * @var object Class object.
         * @access public
         */
        public static $process_site_importer;
        /**
         * Last Export Checksums
         *
         * @since 1.6.15
         * @var object Class object.
         * @access public
         */
        public $last_export_checksums;
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Start Importer
         *
         * @since 1.6.15
         * @return void
         */
        public function start_importer()
        {
        }
        /**
         * Update Latest Checksums
         *
         * Store latest checksum after batch complete.
         *
         * @param string $templates templates category to fetch.
         * @since 1.6.15
         * @return void
         */
        public function update_latest_checksums($templates = '')
        {
        }
        /**
         * Added .svg files as supported format in the uploader.
         *
         * @since 1.1.4
         *
         * @param array $mimes Already supported mime types.
         */
        public function custom_upload_mimes($mimes)
        {
        }
        /**
         * Add SVG image support
         *
         * @since 1.1.4
         *
         * @param array  $response    Attachment response.
         * @param object $attachment Attachment object.
         * @param array  $meta        Attachment meta data.
         */
        public function add_svg_image_support($response, $attachment, $meta)
        {
        }
        /**
         * Get SVG Dimensions
         *
         * @since 1.1.4.
         *
         * @param  string $svg SVG file path.
         * @return array      Return SVG file height & width for valid SVG file.
         */
        public static function get_svg_dimensions($svg)
        {
        }
        /**
         * Batch Process Complete.
         *
         * @return void
         */
        public function complete_batch_import()
        {
        }
        /**
         * Start Image Import
         *
         * @param integer $post_id Post Id.
         *
         * @return void
         */
        public function start_batch_process($post_id = '')
        {
        }
        /**
         * Set Last Exported Checksum
         *
         * @param string $templates templates category to fetch.
         * @since 1.6.15
         * @return string Checksums Status.
         */
        public function set_last_export_checksums($templates = '')
        {
        }
        /**
         * Get Last Exported Checksum Status
         *
         * @param string $templates templates category to fetch.
         * @since 1.6.15
         * @return string Checksums Status.
         */
        public function get_last_export_checksums($templates = '')
        {
        }
        /**
         * Check Cron Status
         *
         * Gets the current cron status by performing a test spawn. Cached for one hour when all is well.
         *
         * @since 1.6.15
         *
         * @param bool $cache Whether to use the cached result from previous calls.
         * @return true|WP_Error Boolean true if the cron spawner is working as expected, or a WP_Error object if not.
         */
        public function test_cron($cache = \true)
        {
        }
        /**
         * Get Blocks Total Requests
         *
         * @since 1.6.15
         * @param  string $page_builder_slug  Page builder slug.
         * @param string $templates templates category to fetch.
         * @return integer
         */
        public function get_total_requests($page_builder_slug = '', $templates = '')
        {
        }
        /**
         * Process Batch
         *
         * @since 1.6.15
         * @param string $templates templates category to fetch.
         * @return mixed
         */
        public function process_batch($templates = '')
        {
        }
        /**
         * Enable the unfiltered upload of the elementor to upload the SVG files.
         *
         * @since 1.10.0
         */
        public function enable_unfiltered_upload_elementor()
        {
        }
    }
    /**
     * Image Background Process
     *
     * @since 1.1.1
     */
    class Cartflows_Importer_Divi_Batch extends \WP_Background_Process
    {
        /**
         * Image Process
         *
         * @var string
         */
        protected $action = 'cartflows_divi_image_process';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 1.1.1
         *
         * @param integer $post_id Post Id.
         * @return mixed
         */
        protected function task($post_id)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 1.1.1
         */
        protected function complete()
        {
        }
    }
    /**
     * Image Background Process
     *
     * @since 1.1.1 Updated class name with Elementor specific.
     *
     * @since 1.0.0
     */
    class Cartflows_Importer_Elementor_Batch extends \WP_Background_Process
    {
        /**
         * Image Process
         *
         * @var string
         */
        protected $action = 'cartflows_elementor_image_process';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 1.0.0
         *
         * @param integer $post_id Post Id.
         * @return mixed
         */
        protected function task($post_id)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 1.0.0
         */
        protected function complete()
        {
        }
    }
    /**
     * CartFlows Import
     *
     * @since 1.0.0
     */
    class CartFlows_Importer
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get flow export data
         *
         * @since 1.1.4
         *
         * @param  integer $flow_id Flow ID.
         * @return array
         */
        public function get_flow_export_data($flow_id)
        {
        }
        /**
         * Get all flow export data
         *
         * @since 1.1.4
         */
        public function get_all_flow_export_data()
        {
        }
        /**
         * Import flow from the JSON data
         *
         * @since 1.6.15
         * @param  array $flows JSON array.
         * @return void
         */
        public function import_from_json_data($flows)
        {
        }
        /**
         * Import Single Flow from JSON
         *
         * @param array $flow flow_data.
         * @param bool  $return return value.
         */
        public function import_single_flow_from_json($flow = array(), $return = \false)
        {
        }
        /**
         * Download and Replace hotlink images
         *
         * @since 1.6.15
         *
         * @param  string $content Mixed post content.
         * @return array           Hotlink image array.
         */
        public function get_content($content = '')
        {
        }
        /**
         * Clear Cache.
         *
         * @since 1.0.0
         */
        public function clear_cache()
        {
        }
        /**
         * Set steps to the flow
         *
         * @param integer $flow_id     Flow ID.
         * @param integer $new_step_id New step ID.
         * @param string  $step_title    Flow Type.
         * @param string  $step_slug Flow Type.
         */
        public function set_step_to_flow($flow_id, $new_step_id, $step_title, $step_slug)
        {
        }
        /**
         * Create step for given flow.
         *
         * @param int $flow_id flow ID.
         * @param int $step_type step type.
         * @param int $step_title step title.
         * @since 1.0.0
         *
         * @return int
         */
        public function create_step($flow_id, $step_type, $step_title)
        {
        }
    }
    /**
     * CartFlows Import
     *
     * @since 1.0.0
     */
    class CartFlows_Importer_Loader
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Setup importer classes
         */
        public function setup_classes()
        {
        }
    }
    /**
     * CartFlows API
     *
     * @since 1.0.0
     */
    class CartFlows_API
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get site URL.
         *
         * @since 1.0.0
         *
         * @return string Site URL.
         */
        public static function get_site_url()
        {
        }
        /**
         * Get Client Site Templates Rest API URL.
         *
         * @since 1.0.0
         *
         * @return string API site URL.
         */
        public static function get_flow_endpoint_url()
        {
        }
        /**
         * Get Client Site Templates Rest API URL.
         *
         * @since 1.0.0
         *
         * @return string API site URL.
         */
        public static function get_step_endpoint_url()
        {
        }
        /**
         * Get Client Site Category Rest API URL.
         *
         * @since 1.0.0
         *
         * @return string API site URL.
         */
        public static function get_category_endpoint_url()
        {
        }
        /**
         * Get API request URL.
         *
         * @since 1.0.0
         *
         * @param string $api_base base of api request.
         * @return string API site URL.
         */
        public static function get_request_api_url($api_base = '')
        {
        }
        /**
         * License Args.
         *
         * @return array License arguments.
         */
        public static function get_licence_args()
        {
        }
        /**
         * License Args.
         *
         * @param int $site_id  Site ID.
         * @return array License arguments.
         */
        public static function get_flow($site_id)
        {
        }
        /**
         * Get single demo.
         *
         * @since 1.0.0
         *
         * @param  string $site_id  Template ID of the site.
         * @return array            Template data.
         */
        public static function get_template($site_id)
        {
        }
        /**
         * Get Cloud Templates
         *
         * @since 1.0.0
         *
         * @param  array $args For selecting the demos (Search terms, pagination etc).
         * @return array        CartFlows list.
         */
        public static function get_templates($args = array())
        {
        }
        /**
         * Get categories.
         *
         * @since 1.0.0
         * @param  array $args Arguments.
         * @return array        Category data.
         */
        public static function get_categories($args = array())
        {
        }
        /**
         * Remote GET API Request
         *
         * @since 1.0.0
         *
         * @param  string $url      Target server API URL.
         * @param  array  $args    Array of arguments for the API request.
         * @return mixed            Return the API request result.
         */
        public static function remote_get($url = '', $args = array())
        {
        }
        /**
         * Remote POST API Request
         *
         * @since 1.0.0
         *
         * @param  string $url      Target server API URL.
         * @param  array  $args    Array of arguments for the API request.
         * @return mixed            Return the API request result.
         */
        public static function remote_post($url = '', $args = array())
        {
        }
        /**
         * Site API Request
         *
         * @since 1.0.0
         *
         * @param  boolean $api_base Target server API URL.
         * @param  array   $args    Array of arguments for the API request.
         * @return mixed           Return the API request result.
         */
        public static function site_request($api_base = '', $args = array())
        {
        }
        /**
         * API Request
         *
         * Handle the API request and return the result.
         *
         * @since 1.0.0
         *
         * @param  array $request    Array of arguments for the API request.
         * @return mixed           Return the API request result.
         */
        public static function request($request)
        {
        }
    }
    /**
     * CartFlows Importer
     *
     * @since 1.0.0
     */
    class CartFlows_Importer_Core
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Process Image Download
         *
         * @since 1.0.0
         * @param  array $attachments Attachment array.
         * @return array              Attachment array.
         */
        public function process($attachments)
        {
        }
        /**
         * Import Image
         *
         * @since 1.0.0
         * @param  array $attachment Attachment array.
         * @return array              Attachment array.
         */
        public function import($attachment)
        {
        }
        /**
         * Debugging Log.
         *
         * @since 1.0.0
         * @param  mixed $log Log data.
         * @return void
         */
        public static function log($log)
        {
        }
    }
    /**
     * CartFlows Update initial setup
     *
     * @since 1.0.0
     */
    class Cartflows_Update
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Init
         *
         * @since 1.0.0
         * @return void
         */
        public function init()
        {
        }
        /**
         * Loading logger files.
         *
         * @since 1.0.0
         * @return void
         */
        public function logger_files()
        {
        }
        /**
         * Init
         *
         * @since 1.0.0
         * @return void
         */
        public function changed_wp_templates()
        {
        }
    }
    /**
     * Class Cartflows_Admin.
     */
    class Cartflows_Admin
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function init_hooks()
        {
        }
        /**
         * Init dashboard widgets.
         */
        public function dashboard_widget()
        {
        }
        /**
         * Show status widget.
         */
        public function status_widget()
        {
        }
        /**
         * Add the clone link to action list for flows row actions
         *
         * @param array  $actions Actions array.
         * @param object $post Post object.
         *
         * @return array
         */
        public function remove_flow_actions($actions, $post)
        {
        }
        /**
         *  After save of permalinks.
         */
        public static function flush_rules_after_save_permalinks()
        {
        }
        /**
         * Show action on plugin page.
         *
         * @param  array $links links.
         * @return array
         */
        public function add_action_links($links)
        {
        }
        /**
         * Check is flow admin.
         *
         * @since 1.0.0
         * @return boolean
         */
        public static function is_flow_edit_admin()
        {
        }
        /**
         * Admin body classes.
         *
         * Body classes to be added to <body> tag in admin page
         *
         * @param String $classes body classes returned from the filter.
         * @return String body classes to be added to <body> tag in admin page
         */
        public function add_admin_body_class($classes)
        {
        }
        /**
         * Set up a div for the header embed to render into.
         * The initial contents here are meant as a place loader for when the PHP page initialy loads.
         */
        public function embed_page_header()
        {
        }
        /**
         * Show embed header.
         *
         * @since 1.0.0
         */
        public function show_embed_header()
        {
        }
        /**
         * Check allowed screen for notices.
         *
         * @since 1.0.0
         * @return bool
         */
        public function allowed_screen_for_notices()
        {
        }
    }
    /**
     * Class Cartflows_Helper.
     */
    class Cartflows_Helper
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Returns an option from the database for
         * the admin settings page.
         *
         * @param  string  $key     The option key.
         * @param  mixed   $default Option default value if option is not available.
         * @param  boolean $network_override Whether to allow the network admin setting to be overridden on subsites.
         * @return string           Return the option value
         */
        public static function get_admin_settings_option($key, $default = \false, $network_override = \false)
        {
        }
        /**
         * Updates an option from the admin settings page.
         *
         * @param string $key       The option key.
         * @param mixed  $value     The value to update.
         * @param bool   $network   Whether to allow the network admin setting to be overridden on subsites.
         * @return mixed
         */
        public static function update_admin_settings_option($key, $value, $network = \false)
        {
        }
        /**
         * Get single setting
         *
         * @since 1.1.4
         *
         * @param  string $key Option key.
         * @param  string $default Option default value if not exist.
         * @return mixed
         */
        public static function get_common_setting($key = '', $default = '')
        {
        }
        /**
         * This function retrieves global option from database
         *
         * @param string $key option meta_key.
         * @return mixed
         * @since X.X.X
         */
        public static function get_global_setting($key)
        {
        }
        /**
         * Get single debug options
         *
         * @since 1.1.4
         *
         * @param  string $key Option key.
         * @param  string $default Option default value if not exist.
         * @return mixed
         */
        public static function get_debug_setting($key = '', $default = '')
        {
        }
        /**
         * Get required plugins for page builder
         *
         * @since 1.1.4
         *
         * @param  string $page_builder_slug Page builder slug.
         * @param  string $default Default page builder.
         * @return array selected page builder required plugins list.
         */
        public static function get_required_plugins_for_page_builder($page_builder_slug = '', $default = 'elementor')
        {
        }
        /**
         * Get Plugins list by page builder.
         *
         * @since 1.1.4
         *
         * @return array Required Plugins list.
         */
        public static function get_plugins_groupby_page_builders()
        {
        }
        /**
         * Get plugin status
         *
         * @since 1.1.4
         *
         * @param  string $plugin_init_file Plguin init file.
         * @return mixed
         */
        public static function get_plugin_status($plugin_init_file)
        {
        }
        /**
         * Get zapier settings.
         *
         * @return  array.
         */
        public static function get_common_settings()
        {
        }
        /**
         * Get debug settings data.
         *
         * @return  array.
         */
        public static function get_debug_settings()
        {
        }
        /**
         * Get debug settings data.
         *
         * @return  array.
         */
        public static function get_permalink_settings()
        {
        }
        /**
         * Get debug settings data.
         *
         * @return  array.
         */
        public static function get_google_analytics_settings()
        {
        }
        /**
         * Get Checkout field.
         *
         * @param string $key Field key.
         * @param int    $post_id Post id.
         * @return array.
         */
        public static function get_checkout_fields($key, $post_id)
        {
        }
        /**
         * Get checkout fields settings.
         *
         * @return  array.
         */
        public static function get_checkout_fields_settings()
        {
        }
        /**
         * Get Optin fields.
         *
         * @return array.
         */
        public static function get_optin_default_fields()
        {
        }
        /**
         * Get Optin field.
         *
         * @param string $key Field key.
         * @param int    $post_id Post id.
         * @return array.
         */
        public static function get_optin_fields($key, $post_id)
        {
        }
        /**
         * Get meta options
         *
         * @since 1.0.0
         * @param  int    $post_id     Product ID.
         * @param  string $key      Meta Key.
         * @param  string $default      Default value.
         * @return string           Meta Value.
         */
        public static function get_meta_option($post_id, $key, $default = '')
        {
        }
        /**
         * Save meta option
         *
         * @since 1.0.0
         * @param  int   $post_id     Product ID.
         * @param  array $args      Arguments array.
         */
        public static function save_meta_option($post_id, $args = array())
        {
        }
        /**
         * Check if Elementor page builder is installed
         *
         * @since 1.0.0
         *
         * @access public
         */
        public static function is_elementor_installed()
        {
        }
        /**
         * Check if Step has product assigned.
         *
         * @since 1.0.0
         * @param int $step_id step ID.
         *
         * @access public
         */
        public static function has_product_assigned($step_id)
        {
        }
        /**
         * Get attributes for cartflows wrap.
         *
         * @since 1.1.4
         *
         * @access public
         */
        public static function get_cartflows_container_atts()
        {
        }
        /**
         * Get facebook pixel settings.
         *
         * @return  facebook array.
         */
        public static function get_facebook_settings()
        {
        }
        /**
         * Prepare response data for facebook.
         *
         * @todo Remove this function in 1.6.18 as it is added in cartflows-tracking file.
         * @param int   $order_id order_id.
         * @param array $offer_data offer data.
         */
        public static function send_fb_response_if_enabled($order_id, $offer_data = array())
        {
        }
        /**
         * Prepare purchase response for facebook purcase event.
         *
         * @todo Remove this function in 1.6.18 as it is added in cartflows-tracking file.
         *
         * @param integer $order_id order id.
         * @param array   $offer_data offer data.
         * @return mixed
         */
        public static function prepare_purchase_data_fb_response($order_id, $offer_data)
        {
        }
        /**
         * Prepare cart data for fb response.
         *
         * @todo Remove this function in 1.6.15 as it is added in cartflows-tracking file.
         * @todo Update the reference of this function in CartFlows Pro after removing this function.
         *
         * @return array
         */
        public static function prepare_cart_data_fb_response()
        {
        }
        /**
         * Get the image url of size.
         *
         * @param int    $post_id post id.
         * @param array  $key key.
         * @param string $size image size.
         *
         * @return array
         */
        public static function get_image_url($post_id, $key, $size = \false)
        {
        }
        /**
         * Download File Into Uploads Directory
         *
         * @since 1.6.15
         *
         * @param  string $file Download File URL.
         * @param  array  $overrides Upload file arguments.
         * @param  int    $timeout_seconds Timeout in downloading the XML file in seconds.
         * @return array        Downloaded file data.
         */
        public static function download_file($file = '', $overrides = array(), $timeout_seconds = 300)
        {
        }
        /**
         * Get an instance of WP_Filesystem_Direct.
         *
         * @since 1.6.15
         * @return object A WP_Filesystem_Direct instance.
         */
        public static function get_filesystem()
        {
        }
        /**
         * Get all flow and steps
         *
         * @since 1.6.15
         * @return array
         */
        public function get_all_flows_and_steps()
        {
        }
        /**
         * Get flow and steps
         *
         * @since 1.6.15
         *
         * @param  string $page_builder_slug Page builder slug.
         * @param string $templates templates category to fetch.
         *
         * @return array
         */
        public function get_flows_and_steps($page_builder_slug = '', $templates = '')
        {
        }
        /**
         * Get page builder name
         *
         * @since 1.1.4
         *
         * @param  string $page_builder Page builder slug.
         * @return mixed
         */
        public static function get_page_builder_name($page_builder = '')
        {
        }
        /**
         * Create Edit page link for the widgets.
         *
         * @since 1.6.15
         * @param string $tab The Tab which has to display.
         * @access public
         */
        public static function get_current_page_edit_url($tab)
        {
        }
        /**
         * Get product price.
         *
         * @param object $product product data.
         */
        public static function get_product_original_price($product)
        {
        }
        /**
         * Get flows from json files.
         *
         * @param string $page_builder_slug Selected page builder slug.
         */
        public function get_stored_page_builder_templates($page_builder_slug)
        {
        }
        /**
         * Get meta keys to exclude.
         *
         * @param int $step_id post id.
         */
        public function get_meta_keys_to_exclude_from_import($step_id = 0)
        {
        }
    }
    /**
     * Class Cartflows_Admin_Notices.
     */
    class Cartflows_Admin_Notices
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Show the weekly email Notice
         *
         * @return void
         */
        public function show_weekly_report_email_settings_notice()
        {
        }
        /**
         * Disable the weekly email Notice
         *
         * @return void
         */
        public function disable_weekly_report_email_notice()
        {
        }
        /**
         *  After save of permalinks.
         */
        public function notices_scripts()
        {
        }
        /**
         *  After save of permalinks.
         */
        public function show_admin_notices()
        {
        }
        /**
         * Deactivate gutenberg plugin.
         *
         * @since 1.1.19
         *
         * @return void
         */
        public function gutenberg_plugin_deactivate_notice()
        {
        }
        /**
         * Ignore admin notice.
         */
        public function ignore_gb_notice()
        {
        }
        /**
         * Check allowed screen for notices.
         *
         * @since 1.0.0
         * @return bool
         */
        public function allowed_screen_for_notices()
        {
        }
    }
    /**
     * Flow Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Tracking
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add the required nonce for tracking.
         *
         * @param array $vars localised vars.
         */
        public function add_localize_vars($vars)
        {
        }
        /**
         * Add the facebook pixel and google analytics code.
         */
        public function add_tracking_code()
        {
        }
        /**
         * Function for facebook pixel.
         */
        public function add_facebook_pixel_tracking_code()
        {
        }
        /**
         * Trigger the View Content events for facebook pixel.
         */
        public function trigger_viewcontent_events()
        {
        }
        /**
         * Trigger the other events for facebook pixel.
         */
        public function trigger_other_fb_events()
        {
        }
        /**
         * Prepare checkout purchase response for facebook purchase event.
         *
         * @param integer $order_id order id.
         */
        public function prepare_purchase_data_fb_response($order_id)
        {
        }
        /**
         * Prepare cart data for fb response.
         *
         * @param string $event event type.
         *
         * @return array
         */
        public function prepare_cart_data_fb_response($event = '')
        {
        }
        /**
         * Prepare view content data for fb response.
         *
         * @return array
         */
        public function prepare_viewcontent_data_fb_response()
        {
        }
        /**
         * Get product data for FB.
         *
         * @param object $items products data.
         */
        public function get_required_product_data_for_fb($items)
        {
        }
        /**
         * Render google tag framework.
         */
        public function add_google_analytics_tracking_code()
        {
        }
        /**
         * Trigger the other events for facebook pixel.
         */
        public function trigger_other_ga_events()
        {
        }
        /**
         * Set cookies to send ga data.
         *
         * @todo Need to remove this function in CartFlows 1.6.18 update.
         * @param int   $order_id order id.
         * @param array $offer_data offer product data.
         */
        public static function send_ga_data_if_enabled($order_id, $offer_data = array())
        {
        }
        /**
         * Prepare the offer purchase event data for the facebook pixel.
         *
         * @todo Remove this function after 3 update. Added for backword compatibility.
         * @since 1.6.15
         * @param integer $order_id order id.
         * @param array   $offer_data offer data.
         */
        public static function get_ga_offer_purchase_transactions_data($order_id, $offer_data)
        {
        }
        /**
         * Prepare cart data for GA response.
         *
         * @param int $order_id order id.
         * @return array
         */
        public function get_ga_purchase_transactions_data($order_id)
        {
        }
        /**
         * Prepare Ecommerce data for GA response.
         *
         * @return array
         */
        public function prepare_cart_data_ga_response()
        {
        }
        /**
         * Get product data.
         *
         * @param object $items products data.
         */
        public function get_required_product_data_for_ga($items)
        {
        }
        /**
         * Get decimal of price.
         *
         * @param integer $price price.
         */
        public static function format_number($price)
        {
        }
    }
    /**
     * BSF analytics
     */
    class BSF_Analytics
    {
        /**
         * Member Variable
         *
         * @var string Usage tracking document URL
         */
        public $usage_doc_link = 'https://store.brainstormforce.com/usage-tracking/?utm_source=wp_dashboard&utm_medium=general_settings&utm_campaign=usage_tracking';
        /**
         * Setup actions, load files.
         *
         * @param array  $args entity data for analytics.
         * @param string $analytics_path directory path to analytics library.
         * @param float  $analytics_version analytics library version.
         * @since 1.0.0
         */
        public function __construct($args, $analytics_path, $analytics_version)
        {
        }
        /**
         * Setup actions for admin notice style and analytics cron event.
         *
         * @since 1.0.4
         */
        public function set_actions()
        {
        }
        /**
         * BSF Analytics URL
         *
         * @param string $analytics_path directory path to analytics library.
         * @return String URL of bsf-analytics directory.
         * @since 1.0.0
         */
        public function get_analytics_url($analytics_path)
        {
        }
        /**
         * Enqueue Scripts.
         *
         * @since 1.0.0
         * @return void
         */
        public function enqueue_assets()
        {
        }
        /**
         * Send analytics API call.
         *
         * @since 1.0.0
         */
        public function send()
        {
        }
        /**
         * Check if usage tracking is enabled.
         *
         * @return bool
         * @since 1.0.0
         */
        public function is_tracking_enabled()
        {
        }
        /**
         * Check if WHITE label is enabled for BSF products.
         *
         * @param string $source source of analytics.
         * @return bool
         * @since 1.0.0
         */
        public function is_white_label_enabled($source)
        {
        }
        /**
         * Display admin notice for usage tracking.
         *
         * @since 1.0.0
         */
        public function option_notice()
        {
        }
        /**
         * Process usage tracking opt out.
         *
         * @since 1.0.0
         */
        public function handle_optin_optout()
        {
        }
        /**
         * Register usage tracking option in General settings page.
         *
         * @since 1.0.0
         */
        public function register_usage_tracking_setting()
        {
        }
        /**
         * Sanitize Callback Function
         *
         * @param bool $input Option value.
         * @since 1.0.0
         */
        public function sanitize_option($input)
        {
        }
        /**
         * Print settings field HTML.
         *
         * @param array $args arguments to field.
         * @since 1.0.0
         */
        public function render_settings_field_html($args)
        {
        }
        /**
         * Schedule/unschedule cron event on updation of option.
         *
         * @param string $old_value old value of option.
         * @param string $value value of option.
         * @param string $option Option name.
         * @since 1.0.0
         */
        public function update_analytics_option_callback($old_value, $value, $option)
        {
        }
        /**
         * Analytics option add callback.
         *
         * @param string $option Option name.
         * @param string $value value of option.
         * @since 1.0.0
         */
        public function add_analytics_option_callback($option, $value)
        {
        }
        /**
         * Send analaytics track event if tracking is enabled.
         *
         * @since 1.0.0
         */
        public function maybe_track_analytics()
        {
        }
        /**
         * Save analytics option to network.
         *
         * @param string $option name of option.
         * @param string $value value of option.
         * @since 1.0.0
         */
        public function add_option_to_network($option, $value)
        {
        }
    }
    /**
     * BSF analytics stat class.
     */
    class BSF_Analytics_Stats
    {
        /**
         * Create only once instance of a class.
         *
         * @return object
         * @since 1.0.0
         */
        public static function instance()
        {
        }
        /**
         * Get stats.
         *
         * @return array stats data.
         * @since 1.0.0
         */
        public function get_stats()
        {
        }
        /**
         * Format plugin data.
         *
         * @param string $plugin plugin.
         * @return array formatted plugin data.
         * @since 1.0.0
         */
        public function format_plugin($plugin)
        {
        }
    }
    /**
     * Class BSF_Analytics_Loader.
     */
    class BSF_Analytics_Loader
    {
        /**
         * Get instace of class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Set entity for analytics.
         *
         * @param string $data Entity attributes data.
         * @return void
         */
        public function set_entity($data)
        {
        }
        /**
         * Load Analytics library.
         *
         * @return void
         */
        public function load_analytics()
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Ajax {
    /**
     * Class Admin_Menu.
     */
    abstract class AjaxBase
    {
        /**
         * Erros class instance.
         *
         * @var object
         */
        public $errors = null;
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Register ajax events.
         *
         * @param array $ajax_events Ajax events.
         */
        public function init_ajax_events($ajax_events)
        {
        }
        /**
         * Localize nonce for ajax call.
         *
         * @param string $action Action name.
         * @return void
         */
        public function localize_ajax_action_nonce($action)
        {
        }
        /**
         * Get ajax error message.
         *
         * @param string $type Message type.
         * @return string
         */
        public function get_error_msg($type)
        {
        }
    }
    /**
     * Class Steps.
     */
    class AbSteps extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function hide_archive_ab_test_variation()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function permanent_delete_archive_ab_test_variation()
        {
        }
        /**
         * Save Ab test settings.
         *
         * @since 1.0.0
         * @return void
         */
        public function save_ab_test_setting()
        {
        }
    }
    /**
     * Class Flows.
     */
    class HomePage extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register_ajax_events.
         *
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function get_welcome_box_option()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function hide_welcome_page_boxes()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function hide_show_home_boxes()
        {
        }
        /**
         * Update admin settings.
         *
         * @param string $key key.
         * @param bool   $value key.
         * @param bool   $network network.
         */
        public function update_admin_settings_option($key, $value, $network = false)
        {
        }
        /**
         * Save settings.
         *
         * @param array $input_settings settimg data.
         */
        public function sanitize_form_inputs($input_settings = array())
        {
        }
    }
    /**
     * Class Flows.
     */
    class SetupPage extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register_ajax_events.
         *
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function dismiss_setup_page()
        {
        }
    }
    /**
     * Class AjaxErrors
     */
    class AjaxErrors
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get error message.
         *
         * @param string $type Message type.
         * @return string
         */
        public function get_error_msg($type)
        {
        }
    }
    /**
     * Importer.
     */
    class Importer extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register AJAX Events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Export Flows.
         *
         * @since 1.0.0
         * @return void
         */
        public function export_all_flows()
        {
        }
        /**
         * Import the Flow.
         *
         * @since 1.0.0
         * @return void
         */
        public function import_json_flow()
        {
        }
        /**
         * Import Wrapper.
         *
         * @since 1.0.0
         * @return void
         */
        public function json_importer_popup_wrapper()
        {
        }
        /**
         * Export Step
         */
        public function export_flow()
        {
        }
        /**
         * Update library complete
         */
        public function update_library_complete()
        {
        }
        /**
         * Import Sites
         */
        public function import_sites()
        {
        }
        /**
         * Sync Library
         */
        public function sync_library()
        {
        }
        /**
         * Request Count
         */
        public function request_count()
        {
        }
        /**
         * Create Step
         */
        public function create_step()
        {
        }
        /**
         * Active Plugin
         */
        public function activate_plugin()
        {
        }
        /**
         * Create the Flow.
         */
        public function create_flow()
        {
        }
        /**
         * Create the Flow.
         */
        public function import_flow()
        {
        }
        /**
         * Import Step
         *
         * @return void
         */
        public function import_step()
        {
        }
        /**
         * Updates post content of chosen template.
         * working only for Store Checkout.
         *
         * @return void
         * @since X.X.X
         */
        public function update_step()
        {
        }
        /**
         * Update Sinple Step
         *
         * @param array $args Rest API Arguments.
         * @return void
         */
        public function update_single_step($args = array())
        {
        }
        /**
         * Create Simple Step
         *
         * @param array $args Rest API Arguments.
         * @return void
         */
        public function import_single_step($args = array())
        {
        }
        /**
         * Import Post Meta
         *
         * @since 1.0.0
         *
         * @param  integer $post_id  Post ID.
         * @param  array   $response  Post meta.
         * @return void
         */
        public function import_post_meta($post_id, $response)
        {
        }
        /**
         * Find the Checkout block and set the Primary color and site logo provided by the user.
         *
         * @since 1.10.0
         *
         * @param int   $post_id newly created steps ID.
         * @param array $response data received from from the imported step.
         *
         * @return void
         */
        public function update_store_checkout_template_data($post_id, $response)
        {
        }
        /**
         * Get flows list for preview
         *
         * @return void
         */
        public function get_flows_list()
        {
        }
        /**
         * Get the elementor widget data.
         *
         * @param array $elements elements data.
         * @param array $posted_data posted data.
         */
        public function elementor_find_and_replace_template_data(&$elements, $posted_data)
        {
        }
        /**
         * Get the block data.
         *
         * @param array $elements elements data.
         * @param array $posted_data posted data.
         */
        public function gutenberg_find_and_replace_template_data(&$elements, $posted_data)
        {
        }
        /**
         * Replace the logo and color in the BB template while importing.
         *
         * @param array $elements elements data.
         * @param array $posted_data posted data.
         */
        public function beaver_builder_find_and_replace_template_data(&$elements, $posted_data)
        {
        }
    }
    /**
     * Class Flows.
     */
    class FlowsStats extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Get all Flows Stats.
         */
        public function get_all_flows_stats()
        {
        }
    }
    /**
     * Class Flows.
     */
    class Flows extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Export the flows and it's data.
         */
        public function export_flows_in_bulk()
        {
        }
        /**
         * Save flow meta data.
         */
        public function save_flow_meta_settings()
        {
        }
        /**
         * Delete the flow and it's data.
         */
        public function delete_flows_permanently()
        {
        }
        /**
         * Update flow status.
         */
        public function update_flow_post_status()
        {
        }
        /**
         * Trash the flows and it's data.
         */
        public function trash_flows_in_bulk()
        {
        }
        /**
         * Update flow title.
         */
        public function update_flow_title()
        {
        }
        /**
         * Clone the Flow.
         */
        public function clone_flow()
        {
        }
        /**
         * Restore the flow and it's data.
         */
        public function restore_flow()
        {
        }
        /**
         * Trash the flow and it's data.
         */
        public function trash_flow()
        {
        }
        /**
         * Delete the flow and it's data.
         */
        public function delete_flow()
        {
        }
        /**
         * Update status.
         */
        public function update_status()
        {
        }
        /**
         * Enables / Disables Store Checkout on toggle click
         *
         * @return void
         * @since X.X.X
         */
        public function update_store_checkout_status()
        {
        }
        /**
         * Prepare where items for query.
         */
        public function reorder_flow_steps()
        {
        }
    }
    /**
     * Class Steps.
     */
    class MetaData extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Clone step with its meta.
         */
        public function json_search_products()
        {
        }
        /**
         * Function to search coupons
         */
        public function json_search_coupons()
        {
        }
        /**
         * Function to sanitize the product type data attribute.
         *
         * @param array $product_types product types.
         */
        public function sanitize_data_attributes($product_types = array())
        {
        }
    }
    /**
     * Class Admin_Init.
     */
    class AjaxInit
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Register API routes.
         */
        public function register_all_ajax_events()
        {
        }
    }
    /**
     * Class Flows.
     */
    class CommonSettings extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register_ajax_events.
         *
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Delete the post meta key for dynamic css to regenerate the it.
         */
        public function regenerate_css_for_steps()
        {
        }
        /**
         * Shift to old UI call.
         *
         * @return void
         */
        public function switch_to_old_ui()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_global_settings()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_other_settings()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_general_settings()
        {
        }
        /**
         * Remove cf caps.
         *
         * @param object $user_role_obj user role object.
         *
         * @return void
         */
        public function remove_all_cf_cap($user_role_obj)
        {
        }
        /**
         * Add cf caps.
         *
         * @param object $user_role_obj user role object.
         * @param string $access_key access key.
         *
         * @return void
         */
        public function add_selected_cf_cap($user_role_obj, $access_key)
        {
        }
        /**
         * Add / Remove custom capability to the user role.
         *
         * @param array $new_settings Array of user role capability settings.
         * @param array $old_settings Array of old user role capability settings.
         *
         * @return void
         */
        public function user_role_management($new_settings, $old_settings)
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_fb_pixel_settings()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_user_roles_management_settings()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_google_analytics_settings()
        {
        }
        /**
         * Save Auto Fields settings.
         *
         * @return void
         */
        public function save_address_autocomplete_setting()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         */
        public function save_permalink_settings()
        {
        }
        /**
         * Update admin settings.
         *
         * @param string $key key.
         * @param bool   $value key.
         * @param bool   $network network.
         */
        public function update_admin_settings_option($key, $value, $network = false)
        {
        }
        /**
         * Save settings.
         *
         * @param array $input_settings settimg data.
         */
        public function sanitize_form_inputs($input_settings = array())
        {
        }
    }
    /**
     * Class Steps.
     */
    class Steps extends \CartflowsAdmin\AdminCore\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Update step title.
         *
         * @since 1.0.0
         * @return void
         */
        public function update_step_title()
        {
        }
        /**
         * Clone step with its meta.
         */
        public function clone_step()
        {
        }
        /**
         * Clear Page Builder Cache
         */
        public function clear_cache()
        {
        }
        /**
         * Delete step for flow
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function delete_step()
        {
        }
        /**
         * Save meta settings for steps.
         */
        public function save_meta_settings()
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Inc {
    /**
     * Class LogStatus.
     */
    class LogStatus
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * User action like download or delete log files.
         */
        public function user_actions()
        {
        }
        /**
         * Show the log page contents for file log handler.
         */
        public function display_logs()
        {
        }
        /**
         * Get all log files in the log directory.
         *
         * @return array
         */
        public function get_log_files()
        {
        }
        /**
         * Delete Provided log file
         */
        public function delete_log_file()
        {
        }
        /**
         * Download the selected log file.
         */
        public function download_log_file()
        {
        }
    }
    /**
     * Class Admin_Menu.
     */
    class AdminMenu
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Display admin notices.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function back_to_new_step_ui_for_classic_editor()
        {
        }
        /**
         * Set status true for gutenberg.
         *
         * @return void
         */
        public function set_block_editor_status()
        {
        }
        /**
         * Back to flow button gutenberg template
         *
         * @return void
         */
        public function back_to_new_step_ui_for_gutenberg()
        {
        }
        /**
         * Back to flow button
         *
         * @param array $meta meta data.
         *
         * @return void
         */
        public function new_admin_flow_setting_redirection($meta)
        {
        }
        /**
         *  Initialize after Cartflows pro get loaded.
         */
        public function settings_admin_scripts()
        {
        }
        /**
         * Add submenu to admin menu.
         *
         * @since 1.0.0
         */
        public function setup_menu()
        {
        }
        /**
         * Add custom capabilities to Admin user.
         */
        public function maybe_skip_setup_menu()
        {
        }
        /**
         * Add custom capabilities to Admin user.
         */
        public function add_capabilities_to_admin()
        {
        }
        /**
         * Renders the admin settings.
         *
         * @since 1.0.0
         * @return void
         */
        public function render()
        {
        }
        /**
         * Renders the admin settings content.
         *
         * @since 1.0.0
         * @param sting $menu_page_slug current page name.
         * @param sting $page_action current page action.
         *
         * @return void
         */
        public function render_content($menu_page_slug, $page_action)
        {
        }
        /**
         * Enqueues the needed CSS/JS for the builder's admin settings page.
         *
         * @since 1.0.0
         */
        public function styles_scripts()
        {
        }
        /**
         * Get required plugin status.
         */
        public function get_required_plugins_data()
        {
        }
        /**
         * Get required plugin status
         */
        public function get_any_required_plugins_status()
        {
        }
        /**
         * Get CartFlows plugin status
         *
         * @since 1.11.8
         *
         * @return string
         */
        public function get_cartflows_pro_plugin_status()
        {
        }
        /**
         * Get plugin status
         *
         * @since 1.1.4
         *
         * @param  string $plugin_init_file Plguin init file.
         * @return mixed
         */
        public function get_plugin_status($plugin_init_file)
        {
        }
        /**
         * Settings app scripts
         *
         * @param array $localize Variable names.
         */
        public function settings_app_scripts($localize)
        {
        }
        /**
         * Settings app scripts
         *
         * @param array $localize Variable names.
         */
        public function editor_app_scripts($localize)
        {
        }
        /**
         * CHeck if it is current page by parameters
         *
         * @param string $page_slug Menu name.
         * @param string $action Menu name.
         *
         * @return  string page url
         */
        public function is_current_page($page_slug = '', $action = '')
        {
        }
        /**
         *  Add footer link.
         */
        public function add_footer_link()
        {
        }
    }
}
namespace {
    /**
     * Cartflows WP CLI
     */
    class Cartflows_WP_CLI extends \WP_CLI_Command
    {
        /**
         *  Get All Flows & Steps
         *
         *  Example: wp cartflows list
         *
         * @param  array $args       Arguments.
         * @param  array $assoc_args Associated Arguments.
         * @alias  list
         * @return void
         */
        public function flow_list($args, $assoc_args)
        {
        }
        /**
         * Sync Library.
         *
         * Sync the library and create the .json files.
         *
         * Use: `wp cartflows sync`
         *
         * @since 1.6.15
         * @param  array $args       Arguments.
         * @param  array $assoc_args Associated Arguments.
         * @return void.
         */
        public function sync($args = array(), $assoc_args = array())
        {
        }
        /**
         * Sync Library.
         *
         * Sync the library and create the .json files.
         *
         * Use: `wp cartflows sync_all elementor`
         * Use: `wp cartflows sync_all beaver-builder`
         * Use: `wp cartflows sync_all gutenberg`
         * Use: `wp cartflows sync_all divi`
         *
         * @since 1.6.15
         * @param  array $args       Arguments.
         * @param  array $assoc_args Associated Arguments.
         * @return void.
         */
        public function sync_all($args = array(), $assoc_args = array())
        {
        }
        /**
         *  Import flows
         *
         *  Example: wp cartflows import_flows
         *
         * @since 1.6.15
         * @param  array $args       Arguments.
         * @param  array $assoc_args Associated Arguments.
         * @return void
         */
        public function import_flows($args = array(), $assoc_args = array())
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Inc {
    /**
     * Class StepMeta.
     */
    class MetaOps
    {
        /**
         *  Save Meta fields - Common Function.
         *
         * @param int   $post_id post id.
         * @param array $post_meta options to store.
         * @return void
         */
        public static function save_meta_fields($post_id, $post_meta)
        {
        }
    }
    /**
     * Class StepMeta.
     */
    class StepMeta
    {
        /**
         * Get flow meta options.
         *
         * @param int    $step_id step id.
         * @param string $step_type type.
         */
        public static function get_meta_settings($step_id, $step_type)
        {
        }
    }
    /**
     * Class flowMeta.
     */
    class FlowMeta
    {
        /**
         * Get flow meta options.
         *
         * @param int $flow_id flow id.
         */
        public static function get_meta_settings($flow_id)
        {
        }
        /**
         * Page Header Tabs.
         *
         * @param int $flow_id id.
         */
        public static function get_settings_fields($flow_id)
        {
        }
    }
    /**
     * Class StoreCheckout.
     */
    class StoreCheckout
    {
        /**
         * Initiator
         *
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function
         *
         * @since X.X.X
         */
        public function __construct()
        {
        }
        /**
         * Steps for store checkout when created from scratch
         *
         * @param array $steps existing steps.
         * @return array
         * @since X.X.X
         */
        public function store_checkout_import_steps($steps)
        {
        }
        /**
         * Returns action array for store checkout flow
         *
         * @param array $actions current actions.
         * @param int   $flow_id flow id.
         * @param int   $step_id step id.
         * @return array
         * @since X.X.X
         */
        public static function store_checkout_get_step_actions($actions, $flow_id, $step_id)
        {
        }
        /**
         * Updates steps order in flow
         *
         * @param array $flows array of updated flow.
         * @param int   $flow_id flow id.
         * @return array
         * @since X.X.X
         */
        public function update_flow_order($flows, $flow_id)
        {
        }
        /**
         * Deletes Store Checkout metadata when store checkout is deleted
         *
         * @param int $flow_id flow id.
         * @return void
         * @since X.X.X
         */
        public function delete_store_checkout_meta($flow_id)
        {
        }
        /**
         * Provides correct action slug for flows / Store Checkout
         *
         * @param string $slug actual flow slug 'wcf-edit-flow'.
         * @param int    $flow_id current flow id.
         * @return string
         * @since X.X.X
         */
        public function store_action_slug($slug, $flow_id)
        {
        }
        /**
         * Removing fields not required for store checkout
         *
         * @param array $flow_data current $flow_data array.
         * @param int   $flow_id Current flow id.
         * @return array
         * @since X.X.X
         */
        public function modify_store_checkout_flow_data($flow_data, $flow_id)
        {
        }
    }
    /**
     * Class flowMeta.
     */
    class GlobalSettings
    {
        /**
         * Get flow meta options.
         */
        public static function get_global_settings_fields()
        {
        }
    }
    /**
     * Class AdminHelper.
     */
    class AdminHelper
    {
        /**
         * Meta_options.
         *
         * @var object instance
         */
        public static $meta_options = array();
        /**
         * Common.
         *
         * @var object instance
         */
        public static $common = null;
        /**
         * Permalink setting.
         *
         * @var object instance
         */
        public static $permalink_setting = null;
        /**
         * Facebook.
         *
         * @var object instance
         */
        public static $facebook = null;
        /**
         * Google_analytics_settings.
         *
         * @var object instance
         */
        public static $google_analytics_settings = null;
        /**
         * Options.
         *
         * @var object instance
         */
        public static $options = null;
        /**
         * Get flow meta options.
         *
         * @param int $post_id post id.
         * @return array.
         */
        public static function get_flow_meta_options($post_id)
        {
        }
        /**
         * Get step meta options.
         *
         * @param int $step_id step id.
         * @return array.
         */
        public static function get_step_meta_options($step_id)
        {
        }
        /**
         * Merge default and saved meta options.
         *
         * @param array $default_meta Default meta.
         * @param array $stored_meta Saved meta.
         * @return array.
         */
        public static function get_prepared_meta_options($default_meta, $stored_meta)
        {
        }
        /**
         * Get Common settings.
         *
         * @return array.
         */
        public static function get_common_settings()
        {
        }
        /**
         * Get admin settings.
         *
         * @param string $key key.
         * @param bool   $default key.
         * @param bool   $network_override key.
         *
         * @return array.
         */
        public static function get_admin_settings_option($key, $default = false, $network_override = false)
        {
        }
        /**
         * Get Common settings.
         *
         * @return array.
         */
        public static function get_permalink_settings()
        {
        }
        /**
         * Get Common settings.
         *
         * @return array.
         */
        public static function get_facebook_settings()
        {
        }
        /**
         * Get Common settings.
         *
         * @return array.
         */
        public static function get_google_analytics_settings()
        {
        }
        /**
         * Get User role settings.
         *
         * @return array.
         */
        public static function get_user_role_management_settings()
        {
        }
        /**
         * Get Google Auto-Address Fields settings.
         *
         * @return array.
         */
        public static function get_google_auto_fields_settings()
        {
        }
        /**
         * Checkout Selection Field
         *
         * @return string
         */
        public static function flow_checkout_selection_field()
        {
        }
        /**
         * Clear Page Builder Cache
         */
        public static function clear_cache()
        {
        }
        /**
         * Get Flows count.
         */
        public static function get_flows_count()
        {
        }
        /**
         * Font family field.
         *
         * @return array field.
         */
        public static function get_font_family()
        {
        }
        /**
         * Get step default meta.
         *
         * @param string $step_type type.
         * @param int    $step_id id.
         */
        public static function get_step_default_meta($step_type, $step_id)
        {
        }
        /**
         * Get options.
         */
        public static function get_options()
        {
        }
        /**
         * Prepare step data.
         *
         * @param  int   $flow_id Flow id.
         * @param  array $meta_options Meta data.
         *
         * @return array
         */
        public static function prepare_step_data($flow_id, $meta_options)
        {
        }
        /**
         * Get step edit link.
         *
         * @param int $step_id Step id.
         */
        public static function get_page_builder_edit_link($step_id)
        {
        }
        /**
         * Get step actions.
         *
         * @param  int    $flow_id Flow id.
         * @param  int    $step_id Step id.
         * @param  string $type type.
         *
         * @return array
         */
        public static function get_step_actions($flow_id, $step_id, $type = 'inline')
        {
        }
        /**
         * Get step actions.
         *
         * @param  int    $flow_id Flow id.
         * @param  int    $step_id Step id.
         * @param  string $type type.
         *
         * @return array
         */
        public static function get_ab_test_step_actions($flow_id, $step_id, $type = 'inline')
        {
        }
        /**
         * Get ab test step action.
         *
         * @param  int  $flow_id Flow id.
         * @param  int  $step_id Step id.
         * @param  bool $deleted Step deleted or archived.
         * @return array
         */
        public static function get_ab_test_step_archived_actions($flow_id, $step_id, $deleted)
        {
        }
        /**
         * Calculate earning.
         *
         * @param string $start_date start date.
         * @param string $end_date end date.
         *
         * @return array
         */
        public static function get_earnings($start_date, $end_date)
        {
        }
        /**
         * Get orders data for flow.
         *
         * @since 1.6.15
         *
         * @param string $start_date start date.
         * @param string $end_date end date.
         * @return int
         */
        public static function get_orders_by_flow($start_date, $end_date)
        {
        }
        /**
         * Prepare where items for query.
         *
         * @param array $conditions conditions to prepare WHERE query.
         * @return string
         */
        public static function get_items_query_where($conditions)
        {
        }
        /**
         * Check is error in the received response.
         *
         * @param object $response Received API Response.
         * @return array $result Error result.
         * @since 1.11.8
         */
        public static function has_api_error($response)
        {
        }
        /**
         * Convert the array format in the WooCommerce's expected format for display.
         * Received array format is array( 0=>key, 1=>Key_value ) expected is array( key=>key_value )
         * This is because of the core rules structure which we have created.
         *
         * @param array $options Array of key & value in the array format.
         * @return array $options
         */
        public static function sanitize_array_values($options)
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Api {
    /**
     * Class Admin_Menu.
     */
    abstract class ApiBase extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'cartflows/v1';
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Register API routes.
         */
        public function get_api_namespace()
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Api\Product {
    /**
     * Class ProductData.
     */
    class ProductData extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/product-data/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get step data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
    }
}
namespace CartflowsAdmin\AdminCore\Api {
    /**
     * Class Admin_Query.
     */
    class HomePage extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/homepage/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get common settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         */
        public function get_home_page_settings($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
    }
    /**
     * Class Admin_Menu.
     */
    class ApiInit
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Register API routes.
         */
        public function register_routes()
        {
        }
    }
    /**
     * Class StepData.
     */
    class StepData extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/step-data/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get step data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
    }
    /**
     * Class Admin_Query.
     */
    class Flows extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/flows/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get items
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
    }
    /**
     * Class Admin_Query.
     */
    class FlowData extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/flow-data/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get flow data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
    }
    /**
     * Class Admin_Query.
     */
    class CommonSettings extends \CartflowsAdmin\AdminCore\Api\ApiBase
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/commonsettings/';
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add flow meta options.
         *
         * @param array $options options.
         * @return array.
         */
        public function add_other_option_data($options)
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get common settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         */
        public function get_common_settings($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
    }
}
namespace CartflowsAdmin {
    /**
     * Class Admin_Loader.
     */
    class Admin_Loader
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Autoload classes.
         *
         * @param string $class class name.
         */
        public function autoload($class)
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Include required classes.
         */
        public function define_constants()
        {
        }
        /**
         * Include required classes.
         */
        public function setup_classes()
        {
        }
    }
}
namespace {
    /**
     * Astra_Notices
     *
     * @since 1.0.0
     */
    class Astra_Notices
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Filters and Returns a list of allowed tags and attributes for a given context.
         *
         * @param array  $allowedposttags array of allowed tags.
         * @param string $context Context type (explicit).
         * @since 1.0.0
         * @return array
         */
        public function add_data_attributes($allowedposttags, $context)
        {
        }
        /**
         * Add Notice.
         *
         * @since 1.0.0
         * @param array $args Notice arguments.
         * @return void
         */
        public static function add_notice($args = array())
        {
        }
        /**
         * Dismiss Notice.
         *
         * @since 1.0.0
         * @return void
         */
        public function dismiss_notice()
        {
        }
        /**
         * Enqueue Scripts.
         *
         * @since 1.0.0
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Sort the notices based on the given priority of the notice.
         * This function is called from usort()
         *
         * @since 1.5.2
         * @param array $notice_1 First notice.
         * @param array $notice_2 Second Notice.
         * @return array
         */
        public function sort_notices($notice_1, $notice_2)
        {
        }
        /**
         * Display the notices in the WordPress admin.
         *
         * @since 1.0.0
         * @return void
         */
        public function show_notices()
        {
        }
        /**
         * Render a notice.
         *
         * @since 1.0.0
         * @param  array $notice Notice markup.
         * @return void
         */
        public static function markup($notice = array())
        {
        }
        /**
         * Get base URL for the astra-notices.
         *
         * @return mixed URL.
         */
        public static function get_url()
        {
        }
    }
    /**
     * ActionScheduler Exception Interface.
     *
     * Facilitates catching Exceptions unique to Action Scheduler.
     *
     * @package ActionScheduler
     * @since %VERSION%
     */
    interface ActionScheduler_Exception
    {
    }
    /**
     * InvalidAction Exception.
     *
     * Used for identifying actions that are invalid in some way.
     *
     * @package ActionScheduler
     */
    class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements \ActionScheduler_Exception
    {
        /**
         * Create a new exception when the action's schedule cannot be fetched.
         *
         * @param string $action_id The action ID with bad args.
         * @return static
         */
        public static function from_schedule($action_id, $schedule)
        {
        }
        /**
         * Create a new exception when the action's args cannot be decoded to an array.
         *
         * @author Jeremy Pry
         *
         * @param string $action_id The action ID with bad args.
         * @return static
         */
        public static function from_decoding_args($action_id, $args = array())
        {
        }
    }
    /**
     * Class ActionScheduler_WPCommentCleaner
     *
     * @since 3.0.0
     */
    class ActionScheduler_WPCommentCleaner
    {
        /**
         * Post migration hook used to cleanup the WP comment table.
         *
         * @var string
         */
        protected static $cleanup_hook = 'action_scheduler/cleanup_wp_comment_logs';
        /**
         * An instance of the ActionScheduler_wpCommentLogger class to interact with the comments table.
         *
         * This instance should only be used as an interface. It should not be initialized.
         *
         * @var ActionScheduler_wpCommentLogger
         */
        protected static $wp_comment_logger = \null;
        /**
         * The key used to store the cached value of whether there are logs in the WP comment table.
         *
         * @var string
         */
        protected static $has_logs_option_key = 'as_has_wp_comment_logs';
        /**
         * Initialize the class and attach callbacks.
         */
        public static function init()
        {
        }
        /**
         * Determines if there are log entries in the wp comments table.
         *
         * Uses the flag set on migration completion set by @see self::maybe_schedule_cleanup().
         *
         * @return boolean Whether there are scheduled action comments in the comments table.
         */
        public static function has_logs()
        {
        }
        /**
         * Schedules the WP Post comment table cleanup to run in 6 months if it's not already scheduled.
         * Attached to the migration complete hook 'action_scheduler/migration_complete'.
         */
        public static function maybe_schedule_cleanup()
        {
        }
        /**
         * Delete all action comments from the WP Comments table.
         */
        public static function delete_all_action_comments()
        {
        }
        /**
         * Registers admin notices about the orphaned action logs.
         */
        public static function register_admin_notice()
        {
        }
        /**
         * Prints details about the orphaned action logs and includes information on where to learn more.
         */
        public static function print_admin_notice()
        {
        }
    }
    /**
     * ActionScheduler_AsyncRequest_QueueRunner class.
     */
    class ActionScheduler_AsyncRequest_QueueRunner extends \WP_Async_Request
    {
        /**
         * Data store for querying actions
         *
         * @var ActionScheduler_Store
         * @access protected
         */
        protected $store;
        /**
         * Prefix for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'as';
        /**
         * Action for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request_queue_runner';
        /**
         * Initiate new async request
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Handle async requests
         *
         * Run a queue, and maybe dispatch another async request to run another queue
         * if there are still pending actions after completing a queue in this request.
         */
        protected function handle()
        {
        }
        /**
         * If the async request runner is needed and allowed to run, dispatch a request.
         */
        public function maybe_dispatch()
        {
        }
        /**
         * Only allow async requests when needed.
         *
         * Also allow 3rd party code to disable running actions via async requests.
         */
        protected function allow()
        {
        }
        /**
         * Chaining async requests can crash MySQL. A brief sleep call in PHP prevents that.
         */
        protected function get_sleep_seconds()
        {
        }
    }
    /**
     * Class ActionScheduler_Logger
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Logger
    {
        /**
         * @return ActionScheduler_Logger
         */
        public static function instance()
        {
        }
        /**
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public abstract function log($action_id, $message, \DateTime $date = \NULL);
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public abstract function get_entry($entry_id);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public abstract function get_logs($action_id);
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function hook_stored_action()
        {
        }
        public function unhook_stored_action()
        {
        }
        public function log_stored_action($action_id)
        {
        }
        public function log_canceled_action($action_id)
        {
        }
        public function log_started_action($action_id, $context = '')
        {
        }
        public function log_completed_action($action_id, $action = \NULL, $context = '')
        {
        }
        public function log_failed_action($action_id, \Exception $exception, $context = '')
        {
        }
        public function log_timed_out_action($action_id, $timeout)
        {
        }
        public function log_unexpected_shutdown($action_id, $error)
        {
        }
        public function log_reset_action($action_id)
        {
        }
        public function log_ignored_action($action_id, $context = '')
        {
        }
        /**
         * @param string $action_id
         * @param Exception|NULL $exception The exception which occured when fetching the action. NULL by default for backward compatibility.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function log_failed_fetch_action($action_id, \Exception $exception = \NULL)
        {
        }
        public function log_failed_schedule_next_instance($action_id, \Exception $exception)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * Implemented here for backward compatibility. Should be implemented in parent loggers
         * for more performant bulk logging.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_wpCommentLogger
     */
    class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
    {
        const AGENT = 'ActionScheduler';
        const TYPE = 'action_log';
        /**
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public function log($action_id, $message, \DateTime $date = \NULL)
        {
        }
        protected function create_wp_comment($action_id, $message, \DateTime $date)
        {
        }
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        protected function get_comment($comment_id)
        {
        }
        /**
         * @param WP_Comment_Query $query
         */
        public function filter_comment_queries($query)
        {
        }
        /**
         * @param array $clauses
         * @param WP_Comment_Query $query
         *
         * @return array
         */
        public function filter_comment_query_clauses($clauses, $query)
        {
        }
        /**
         * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
         * the WP_Comment_Query class handled by @see self::filter_comment_queries().
         *
         * @param string $where
         * @param WP_Query $query
         *
         * @return string
         */
        public function filter_comment_feed($where, $query)
        {
        }
        /**
         * Return a SQL clause to exclude Action Scheduler comments.
         *
         * @return string
         */
        protected function get_where_clause()
        {
        }
        /**
         * Remove action log entries from wp_count_comments()
         *
         * @param array $stats
         * @param int $post_id
         *
         * @return object
         */
        public function filter_comment_count($stats, $post_id)
        {
        }
        /**
         * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
         *
         * @return object
         */
        protected function get_comment_count()
        {
        }
        /**
         * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
         * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
         */
        public function delete_comment_count_cache()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function disable_comment_counting()
        {
        }
        public function enable_comment_counting()
        {
        }
    }
    /**
     * Class ActionScheduler_Store_Deprecated
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store_Deprecated
    {
        /**
         * Mark an action that failed to fetch correctly as failed.
         *
         * @since 2.2.6
         *
         * @param int $action_id The ID of the action.
         */
        public function mark_failed_fetch_action($action_id)
        {
        }
        /**
         * Add base hooks
         *
         * @since 2.2.6
         */
        protected static function hook()
        {
        }
        /**
         * Remove base hooks
         *
         * @since 2.2.6
         */
        protected static function unhook()
        {
        }
        /**
         * Get the site's local time.
         *
         * @deprecated 2.1.0
         * @return DateTimeZone
         */
        protected function get_local_timezone()
        {
        }
    }
    /**
     * Class ActionScheduler_Store
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
    {
        const STATUS_COMPLETE = 'complete';
        const STATUS_PENDING = 'pending';
        const STATUS_RUNNING = 'in-progress';
        const STATUS_FAILED = 'failed';
        const STATUS_CANCELED = 'canceled';
        const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';
        /** @var int */
        protected static $max_args_length = 191;
        /**
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date Optional Date of the first instance
         *        to store. Otherwise uses the first date of the action's
         *        schedule.
         *
         * @return int The action ID
         */
        public abstract function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_Action
         */
        public abstract function fetch_action($action_id);
        /**
         * Find an action.
         *
         * Note: the query ordering changes based on the passed 'status' value.
         *
         * @param string $hook Action hook.
         * @param array  $params Parameters of the action to find.
         *
         * @return string|null ID of the next action matching the criteria or NULL if not found.
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since x.x.x $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query {
         *      Query filtering options.
         *
         *      @type string       $hook             The name of the actions. Optional.
         *      @type string|array $status           The status or statuses of the actions. Optional.
         *      @type array        $args             The args array of the actions. Optional.
         *      @type DateTime     $date             The scheduled date of the action. Used in UTC timezone. Optional.
         *      @type string       $date_compare     Operator for selecting by $date param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type DateTime     $modified         The last modified date of the action. Used in UTC timezone. Optional.
         *      @type string       $modified_compare Operator for comparing $modified param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type string       $group            The group the action belongs to. Optional.
         *      @type bool|int     $claimed          TRUE to find claimed actions, FALSE to find unclaimed actions, an int to find a specific claim ID. Optional.
         *      @type int          $per_page         Number of results to return. Defaults to 5.
         *      @type int          $offset           The query pagination offset. Defaults to 0.
         *      @type int          $orderby          Accepted values are 'hook', 'group', 'modified', 'date' or 'none'. Defaults to 'date'.
         *      @type string       $order            Accepted values are 'ASC' or 'DESC'. Defaults to 'ASC'.
         * }
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public abstract function query_actions($query = array(), $query_type = 'select');
        /**
         * Run query to get a single action ID.
         *
         * @since x.x.x
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage but 'per_page' and 'offset' can't be used.
         *
         * @param array $query Query parameters.
         *
         * @return int|null
         */
        public function query_action($query)
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public abstract function action_counts();
        /**
         * @param string $action_id
         */
        public abstract function cancel_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function delete_action($action_id);
        /**
         * @param string $action_id
         *
         * @return DateTime The date the action is schedule to run, or the date that it ran.
         */
        public abstract function get_date($action_id);
        /**
         * @param int      $max_actions
         * @param DateTime $before_date Claim only actions schedule before the given date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         */
        public abstract function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '');
        /**
         * @return int
         */
        public abstract function get_claim_count();
        /**
         * @param ActionScheduler_ActionClaim $claim
         */
        public abstract function release_claim(\ActionScheduler_ActionClaim $claim);
        /**
         * @param string $action_id
         */
        public abstract function unclaim_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_failure($action_id);
        /**
         * @param string $action_id
         */
        public abstract function log_execution($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_complete($action_id);
        /**
         * @param string $action_id
         *
         * @return string
         */
        public abstract function get_status($action_id);
        /**
         * @param string $action_id
         * @return mixed
         */
        public abstract function get_claim_id($action_id);
        /**
         * @param string $claim_id
         * @return array
         */
        public abstract function find_actions_by_claim_id($claim_id);
        /**
         * @param string $comparison_operator
         * @return string
         */
        protected function validate_sql_comparator($comparison_operator)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        /**
         * Validate that we could decode action arguments.
         *
         * @param mixed $args      The decoded arguments.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
         */
        protected function validate_args($args, $action_id)
        {
        }
        /**
         * Validate a ActionScheduler_Schedule object.
         *
         * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
         */
        protected function validate_schedule($schedule, $action_id)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * with custom tables, we use an indexed VARCHAR column instead.
         *
         * @param  ActionScheduler_Action $action Action to be validated.
         * @throws InvalidArgumentException When json encoded args is too long.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @since 3.0.0
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * @return array
         */
        public function get_status_labels()
        {
        }
        /**
         * Check if there are any pending scheduled actions due to run.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        public function has_pending_actions_due()
        {
        }
        /**
         * Callable initialization function optionally overridden in derived classes.
         */
        public function init()
        {
        }
        /**
         * Callable function to mark an action as migrated optionally overridden in derived classes.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * @return ActionScheduler_Store
         */
        public static function instance()
        {
        }
    }
    /**
     * Class ActionScheduler_HybridStore
     *
     * A wrapper around multiple stores that fetches data from both.
     *
     * @since 3.0.0
     */
    class ActionScheduler_HybridStore extends \ActionScheduler_Store
    {
        const DEMARKATION_OPTION = 'action_scheduler_hybrid_store_demarkation';
        /**
         * ActionScheduler_HybridStore constructor.
         *
         * @param Config $config Migration config object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config = \null)
        {
        }
        /**
         * Initialize the table data store tables.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * When the actions table is created, set its autoincrement
         * value to be one higher than the posts table to ensure that
         * there are no ID collisions.
         *
         * @param string $table_name
         * @param string $table_suffix
         *
         * @return void
         * @codeCoverageIgnore
         */
        public function set_autoincrement($table_name, $table_suffix)
        {
        }
        /**
         * Find the first matching action from the secondary store.
         * If it exists, migrate it to the primary store immediately.
         * After it migrates, the secondary store will logically contain
         * the next matching action, so return the result thence.
         *
         * @param string $hook
         * @param array  $params
         *
         * @return string
         */
        public function find_action($hook, $params = [])
        {
        }
        /**
         * Find actions matching the query in the secondary source first.
         * If any are found, migrate them immediately. Then the secondary
         * store will contain the canonical results.
         *
         * @param array $query
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return int[]
         */
        public function query_actions($query = [], $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * If any actions would have been claimed by the secondary store,
         * migrate them immediately, then ask the primary store for the
         * canonical claim.
         *
         * @param int           $max_actions
         * @param DateTime|null $before_date
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Save an action to the primary store.
         *
         * @param ActionScheduler_Action $action Action object to be saved.
         * @param DateTime               $date Optional. Schedule date. Default null.
         *
         * @return int The action ID
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
        {
        }
        /**
         * Retrieve an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Cancel an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Mark an existing action as failed whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Log the execution of an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an existing action complete whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an existing action status whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Return which store an action is stored in.
         *
         * @param int  $action_id ID of the action.
         * @param bool $primary_first Optional flag indicating search the primary store first.
         * @return ActionScheduler_Store
         */
        protected function get_store_from_action_id($action_id, $primary_first = \false)
        {
        }
        /* * * * * * * * * * * * * * * * * * * * * * * * * * *
         * All claim-related functions should operate solely
         * on the primary store.
         * * * * * * * * * * * * * * * * * * * * * * * * * * */
        /**
         * Get the claim count from the table data store.
         */
        public function get_claim_count()
        {
        }
        /**
         * Retrieve the claim ID for an action from the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Release a claim in the table data store.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Release claims on an action in the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Retrieve a list of action IDs by claim.
         *
         * @param int $claim_id Claim ID.
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostStatusRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostStatusRegistrar
    {
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_args()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_failed_labels()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_running_labels()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostTypeRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostTypeRegistrar
    {
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_type_args()
        {
        }
    }
    /**
     * Class ActionScheduler_DBLogger
     *
     * Action logs data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBLogger extends \ActionScheduler_Logger
    {
        /**
         * Add a record to an action log.
         *
         * @param int      $action_id Action ID.
         * @param string   $message Message to be saved in the log entry.
         * @param DateTime $date Timestamp of the log entry.
         *
         * @return int     The log entry ID.
         */
        public function log($action_id, $message, \DateTime $date = \null)
        {
        }
        /**
         * Retrieve an action log entry.
         *
         * @param int $entry_id Log entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Retrieve the an action's log entries from the database.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Initialize the data store.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Delete the action logs for an action.
         *
         * @param int $action_id Action ID.
         */
        public function clear_deleted_action_logs($action_id)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_TaxonomyRegistrar
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_TaxonomyRegistrar
    {
        public function register()
        {
        }
        protected function taxonomy_args()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore
     */
    class ActionScheduler_wpPostStore extends \ActionScheduler_Store
    {
        const POST_TYPE = 'scheduled-action';
        const GROUP_TAXONOMY = 'action-group';
        const SCHEDULE_META_KEY = '_action_manager_schedule';
        const DEPENDENCIES_MET = 'as-post-store-dependencies-met';
        /** @var DateTimeZone */
        protected $local_timezone = \NULL;
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        protected function save_post_array($post_array)
        {
        }
        public function filter_insert_post_data($postdata)
        {
        }
        /**
         * Create a (probably unique) post name for scheduled actions in a more performant manner than wp_unique_post_slug().
         *
         * When an action's post status is transitioned to something other than 'draft', 'pending' or 'auto-draft, like 'publish'
         * or 'failed' or 'trash', WordPress will find a unique slug (stored in post_name column) using the wp_unique_post_slug()
         * function. This is done to ensure URL uniqueness. The approach taken by wp_unique_post_slug() is to iterate over existing
         * post_name values that match, and append a number 1 greater than the largest. This makes sense when manually creating a
         * post from the Edit Post screen. It becomes a bottleneck when automatically processing thousands of actions, with a
         * database containing thousands of related post_name values.
         *
         * WordPress 5.1 introduces the 'pre_wp_unique_post_slug' filter for plugins to address this issue.
         *
         * We can short-circuit WordPress's wp_unique_post_slug() approach using the 'pre_wp_unique_post_slug' filter. This
         * method is available to be used as a callback on that filter. It provides a more scalable approach to generating a
         * post_name/slug that is probably unique. Because Action Scheduler never actually uses the post_name field, or an
         * action's slug, being probably unique is good enough.
         *
         * For more backstory on this issue, see:
         * - https://github.com/woocommerce/action-scheduler/issues/44 and
         * - https://core.trac.wordpress.org/ticket/21112
         *
         * @param string $override_slug Short-circuit return value.
         * @param string $slug          The desired slug (post_name).
         * @param int    $post_ID       Post ID.
         * @param string $post_status   The post status.
         * @param string $post_type     Post type.
         * @return string
         */
        public function set_unique_post_slug($override_slug, $slug, $post_ID, $post_status, $post_type)
        {
        }
        protected function save_post_schedule($post_id, $schedule)
        {
        }
        protected function save_action_group($post_id, $group)
        {
        }
        public function fetch_action($action_id)
        {
        }
        protected function get_post($action_id)
        {
        }
        protected function get_null_action()
        {
        }
        protected function make_action_from_post($post)
        {
        }
        /**
         * @param string $post_status
         *
         * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
         * @return string
         */
        protected function get_action_status_by_post_status($post_status)
        {
        }
        /**
         * @param string $action_status
         * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
         * @return string
         */
        protected function get_post_status_by_action_status($action_status)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array $query Filtering options
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count
         * @throws InvalidArgumentException if $select_or_count not count or select
         * @return string SQL statement. The returned SQL is already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since x.x.x $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public function action_counts()
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         */
        public function cancel_action($action_id)
        {
        }
        public function delete_action($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @throws InvalidArgumentException
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date_gmt($action_id)
        {
        }
        /**
         * @param int      $max_actions
         * @param DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         * @throws RuntimeException When there is an error staking a claim.
         * @throws InvalidArgumentException When the given group is not valid.
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * @return int
         */
        public function get_claim_count()
        {
        }
        protected function generate_claim_id()
        {
        }
        /**
         * @param string   $claim_id
         * @param int      $limit
         * @param DateTime $before_date Should use UTC timezone.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return int The number of actions that were claimed
         * @throws RuntimeException When there is a database error.
         * @throws InvalidArgumentException When the group is invalid.
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get IDs of actions within a certain group and up to a certain date/time.
         *
         * @param string   $group The group to use in finding actions.
         * @param int      $limit The number of actions to retrieve.
         * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
         *                        up to and including this DateTime.
         *
         * @return array IDs of actions in the appropriate group and before the appropriate time.
         * @throws InvalidArgumentException When the group does not exist.
         */
        protected function get_actions_by_group($group, $limit, \DateTime $date)
        {
        }
        /**
         * @param string $claim_id
         * @return array
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * @param string $action_id
         */
        public function unclaim_action($action_id)
        {
        }
        public function mark_failure($action_id)
        {
        }
        /**
         * Return an action's claim ID, as stored in the post password column
         *
         * @param string $action_id
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Return an action's status, as stored in the post status column
         *
         * @param string $action_id
         * @return mixed
         */
        public function get_status($action_id)
        {
        }
        /**
         * @param string $action_id
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Record that an action was completed.
         *
         * @param int $action_id ID of the completed action.
         * @throws InvalidArgumentException|RuntimeException
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Mark action as migrated when there is an error deleting the action.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Determine whether the post store can be migrated.
         *
         * @return bool
         */
        public function migration_dependencies_met($setting)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
         * developers of this impending requirement.
         *
         * @param ActionScheduler_Action $action
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
    }
    /**
     * Class ActionScheduler_DBStore
     *
     * Action data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStore extends \ActionScheduler_Store
    {
        /** @var int */
        protected static $max_args_length = 8000;
        /** @var int */
        protected static $max_index_length = 191;
        /**
         * Initialize the data store
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Save an action.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param DateTime               $date Optional schedule date. Default null.
         *
         * @return int Action ID.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
        {
        }
        /**
         * Generate a hash from json_encoded $args using MD5 as this isn't for security.
         *
         * @param string $args JSON encoded action args.
         * @return string
         */
        protected function hash_args($args)
        {
        }
        /**
         * Get action args query param value from action args.
         *
         * @param array $args Action args.
         * @return string
         */
        protected function get_args_for_query($args)
        {
        }
        /**
         * Get a group's ID based on its name/slug.
         *
         * @param string $slug The string name of a group.
         * @param bool $create_if_not_exists Whether to create the group if it does not already exist. Default, true - create the group.
         *
         * @return int The group's ID, if it exists or is created, or 0 if it does not exist and is not created.
         */
        protected function get_group_id($slug, $create_if_not_exists = \true)
        {
        }
        /**
         * Create an action group.
         *
         * @param string $slug Group slug.
         *
         * @return int Group ID.
         */
        protected function create_group($slug)
        {
        }
        /**
         * Retrieve an action.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Create a null action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Create an action from a database record.
         *
         * @param object $data Action database record.
         *
         * @return ActionScheduler_Action|ActionScheduler_CanceledAction|ActionScheduler_FinishedAction
         */
        protected function make_action_from_db_record($data)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @since x.x.x $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query Filtering options.
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count.
         *
         * @return string SQL statement already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since x.x.x $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = [], $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status.
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * Cancel an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Bulk cancel actions.
         *
         * @since 3.0.0
         *
         * @param array $query_args Query parameters.
         */
        protected function bulk_cancel_actions($query_args)
        {
        }
        /**
         * Delete an action.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date for an action.
         *
         * @param string $action_id Action ID.
         *
         * @throws \InvalidArgumentException
         * @return \DateTime The local date the action is scheduled to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get the GMT schedule date for an action.
         *
         * @param int $action_id Action ID.
         *
         * @throws \InvalidArgumentException
         * @return \DateTime The GMT date the action is scheduled to run, or the date that it ran.
         */
        protected function get_date_gmt($action_id)
        {
        }
        /**
         * Stake a claim on actions.
         *
         * @param int       $max_actions Maximum number of action to include in claim.
         * @param \DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Generate a new action claim.
         *
         * @return int Claim ID.
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Mark actions claimed.
         *
         * @param string    $claim_id Claim Id.
         * @param int       $limit Number of action to include in claim.
         * @param \DateTime $before_date Should use UTC timezone.
         *
         * @return int The number of actions that were claimed.
         * @throws \RuntimeException
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get the number of active claims.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Return an action's claim ID, as stored in the claim_id column.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Retrieve the action IDs of action in a claim.
         *
         * @return int[]
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release actions from a claim and delete the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Remove the claim from an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark an action as failed.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Add execution message to action log.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an action as complete.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an action's status.
         *
         * @param int $action_id Action ID.
         *
         * @return string
         */
        public function get_status($action_id)
        {
        }
    }
    /**
     * Class ActionScheduler_LogEntry
     */
    class ActionScheduler_LogEntry
    {
        /**
         * @var int $action_id
         */
        protected $action_id = '';
        /**
         * @var string $message
         */
        protected $message = '';
        /**
         * @var Datetime $date
         */
        protected $date;
        /**
         * Constructor
         *
         * @param mixed  $action_id Action ID
         * @param string $message   Message
         * @param Datetime $date    Datetime object with the time when this log entry was created. If this parameter is
         *                          not provided a new Datetime object (with current time) will be created.
         */
        public function __construct($action_id, $message, $date = \null)
        {
        }
        /**
         * Returns the date when this log entry was created
         *
         * @return Datetime
         */
        public function get_date()
        {
        }
        public function get_action_id()
        {
        }
        public function get_message()
        {
        }
    }
    /**
     * Abstract class for setting a basic lock to throttle some action.
     *
     * Class ActionScheduler_Lock
     */
    abstract class ActionScheduler_Lock
    {
        /** @var int */
        protected static $lock_duration = \MINUTE_IN_SECONDS;
        /**
         * Check if a lock is set for a given lock type.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public function is_locked($lock_type)
        {
        }
        /**
         * Set a lock.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public abstract function set($lock_type);
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public abstract function get_expiration($lock_type);
        /**
         * Get the amount of time to set for a given lock. 60 seconds by default.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return int
         */
        protected function get_duration($lock_type)
        {
        }
        /**
         * @return ActionScheduler_Lock
         */
        public static function instance()
        {
        }
    }
    /**
     * Provide a way to set simple transient locks to block behaviour
     * for up-to a given duration.
     *
     * Class ActionScheduler_OptionLock
     * @since 3.0.0
     */
    class ActionScheduler_OptionLock extends \ActionScheduler_Lock
    {
        /**
         * Set a lock using options for a given amount of time (60 seconds by default).
         *
         * Using an autoloaded option avoids running database queries or other resource intensive tasks
         * on frequently triggered hooks, like 'init' or 'shutdown'.
         *
         * For example, ActionScheduler_QueueRunner->maybe_dispatch_async_request() uses a lock to avoid
         * calling ActionScheduler_QueueRunner->has_maximum_concurrent_batches() every time the 'shutdown',
         * hook is triggered, because that method calls ActionScheduler_QueueRunner->store->get_claim_count()
         * to find the current number of claims in the database.
         *
         * @param string $lock_type A string to identify different lock types.
         * @bool True if lock value has changed, false if not or if set failed.
         */
        public function set($lock_type)
        {
        }
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public function get_expiration($lock_type)
        {
        }
        /**
         * Get the key to use for storing the lock in the transient
         *
         * @param string $lock_type A string to identify different lock types.
         * @return string
         */
        protected function get_key($lock_type)
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @deprecated 2.1.1
         * @return int The number of seconds.
         */
        protected function get_maximum_execution_time()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /** @var ActionScheduler_QueueCleaner */
        protected $cleaner;
        /** @var ActionScheduler_FatalErrorMonitor */
        protected $monitor;
        /** @var ActionScheduler_Store */
        protected $store;
        /**
         * ActionScheduler_Abstract_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Process an individual action.
         *
         * @param int $action_id The action ID to process.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         */
        public function process_action($action_id, $context = '')
        {
        }
        /**
         * Schedule the next instance of the action if necessary.
         *
         * @param ActionScheduler_Action $action
         * @param int $action_id
         */
        protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Run the queue cleaner.
         *
         * @author Jeremy Pry
         */
        protected function run_cleanup()
        {
        }
        /**
         * Get the number of concurrent batches a runner allows.
         *
         * @return int
         */
        public function get_allowed_concurrent_batches()
        {
        }
        /**
         * Check if the number of allowed concurrent batches is met or exceeded.
         *
         * @return bool
         */
        public function has_maximum_concurrent_batches()
        {
        }
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @return int The number of seconds.
         */
        protected function get_time_limit()
        {
        }
        /**
         * Get the number of seconds the process has been running.
         *
         * @return int The number of seconds.
         */
        protected function get_execution_time()
        {
        }
        /**
         * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
         * @return bool
         */
        protected function time_likely_to_be_exceeded($processed_actions)
        {
        }
        /**
         * Get memory limit
         *
         * Based on WP_Background_Process::get_memory_limit()
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
         *
         * Based on WP_Background_Process::memory_exceeded()
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * See if the batch limits have been exceeded, which is when memory usage is almost at
         * the maximum limit, or the time to process more actions will exceed the max time limit.
         *
         * Based on WC_Background_Process::batch_limits_exceeded()
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
         * @return bool
         */
        protected function batch_limits_exceeded($processed_actions)
        {
        }
        /**
         * Process actions in the queue.
         *
         * @author Jeremy Pry
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public abstract function run($context = '');
    }
    /**
     * Class ActionScheduler_QueueRunner
     */
    class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        const WP_CRON_HOOK = 'action_scheduler_run_queue';
        const WP_CRON_SCHEDULE = 'every_minute';
        /** @var ActionScheduler_AsyncRequest_QueueRunner */
        protected $async_request;
        /**
         * @return ActionScheduler_QueueRunner
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * ActionScheduler_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null, \ActionScheduler_AsyncRequest_QueueRunner $async_request = \null)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Hook check for dispatching an async request.
         */
        public function hook_dispatch_async_request()
        {
        }
        /**
         * Unhook check for dispatching an async request.
         */
        public function unhook_dispatch_async_request()
        {
        }
        /**
         * Check if we should dispatch an async request to process actions.
         *
         * This method is attached to 'shutdown', so is called frequently. To avoid slowing down
         * the site, it mitigates the work performed in each request by:
         * 1. checking if it's in the admin context and then
         * 2. haven't run on the 'shutdown' hook within the lock time (60 seconds by default)
         * 3. haven't exceeded the number of allowed batches.
         *
         * The order of these checks is important, because they run from a check on a value:
         * 1. in memory - is_admin() maps to $GLOBALS or the WP_ADMIN constant
         * 2. in memory - transients use autoloaded options by default
         * 3. from a database query - has_maximum_concurrent_batches() run the query
         *    $this->store->get_claim_count() to find the current number of claims in the DB.
         *
         * If all of these conditions are met, then we request an async runner check whether it
         * should dispatch a request to process pending actions.
         */
        public function maybe_dispatch_async_request()
        {
        }
        /**
         * Process actions in the queue. Attached to self::WP_CRON_HOOK i.e. 'action_scheduler_run_queue'
         *
         * The $context param of this method defaults to 'WP Cron', because prior to Action Scheduler 3.0.0
         * that was the only context in which this method was run, and the self::WP_CRON_HOOK hook had no context
         * passed along with it. New code calling this method directly, or by triggering the self::WP_CRON_HOOK,
         * should set a context as the first parameter. For an example of this, refer to the code seen in
         * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
         *
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public function run($context = 'WP Cron')
        {
        }
        /**
         * Process a batch of actions pending in the queue.
         *
         * Actions are processed by claiming a set of pending actions then processing each one until either the batch
         * size is completed, or memory or time limits are reached, defined by @see $this->batch_limits_exceeded().
         *
         * @param int $size The maximum number of actions to process in the batch.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        protected function do_batch($size = 100, $context = '')
        {
        }
        /**
         * Running large batches can eat up memory, as WP adds data to its object cache.
         *
         * If using a persistent object store, this has the side effect of flushing that
         * as well, so this is disabled by default. To enable:
         *
         * add_filter( 'action_scheduler_queue_runner_flush_cache', '__return_true' );
         */
        protected function clear_caches()
        {
        }
        public function add_wp_cron_schedule($schedules)
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schema
     *
     * @package Action_Scheduler
     *
     * @codeCoverageIgnore
     *
     * Utility class for creating/updating custom tables
     */
    abstract class ActionScheduler_Abstract_Schema
    {
        /**
         * @var int Increment this value in derived class to trigger a schema update.
         */
        protected $schema_version = 1;
        /**
         * @var string Schema version stored in database.
         */
        protected $db_version;
        /**
         * @var array Names of tables that will be registered by this class.
         */
        protected $tables = [];
        /**
         * Can optionally be used by concrete classes to carry out additional initialization work
         * as needed.
         */
        public function init()
        {
        }
        /**
         * Register tables with WordPress, and create them if needed.
         *
         * @param bool $force_update Optional. Default false. Use true to always run the schema update.
         *
         * @return void
         */
        public function register_tables($force_update = \false)
        {
        }
        /**
         * @param string $table The name of the table
         *
         * @return string The CREATE TABLE statement, suitable for passing to dbDelta
         */
        protected abstract function get_table_definition($table);
        /**
         * @param string $table
         *
         * @return string The full name of the table, including the
         *                table prefix for the current blog
         */
        protected function get_full_table_name($table)
        {
        }
        /**
         * Confirms that all of the tables registered by this schema class have been created.
         *
         * @return bool
         */
        public function tables_exist()
        {
        }
    }
    /**
     * Class ActionScheduler_StoreSchema
     *
     * @codeCoverageIgnore
     *
     * Creates custom tables for storing scheduled actions
     */
    class ActionScheduler_StoreSchema extends \ActionScheduler_Abstract_Schema
    {
        const ACTIONS_TABLE = 'actionscheduler_actions';
        const CLAIMS_TABLE = 'actionscheduler_claims';
        const GROUPS_TABLE = 'actionscheduler_groups';
        const DEFAULT_DATE = '0000-00-00 00:00:00';
        /**
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 5;
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the actions table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_5_0($table, $db_version)
        {
        }
    }
    /**
     * Class ActionScheduler_LoggerSchema
     *
     * @codeCoverageIgnore
     *
     * Creates a custom table for storing action logs
     */
    class ActionScheduler_LoggerSchema extends \ActionScheduler_Abstract_Schema
    {
        const LOG_TABLE = 'actionscheduler_logs';
        /**
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 3;
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the logs table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_3_0($table, $db_version)
        {
        }
    }
    /**
     * Class ActionScheduler_FatalErrorMonitor
     */
    class ActionScheduler_FatalErrorMonitor
    {
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        public function attach(\ActionScheduler_ActionClaim $claim)
        {
        }
        public function detach()
        {
        }
        public function track_current_action($action_id)
        {
        }
        public function untrack_action()
        {
        }
        public function handle_unexpected_shutdown()
        {
        }
    }
    /**
     * Class ActionScheduler_Action
     */
    class ActionScheduler_Action
    {
        protected $hook = '';
        protected $args = array();
        /** @var ActionScheduler_Schedule */
        protected $schedule = \NULL;
        protected $group = '';
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \NULL, $group = '')
        {
        }
        public function execute()
        {
        }
        /**
         * @param string $hook
         */
        protected function set_hook($hook)
        {
        }
        public function get_hook()
        {
        }
        protected function set_schedule(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * @return ActionScheduler_Schedule
         */
        public function get_schedule()
        {
        }
        protected function set_args(array $args)
        {
        }
        public function get_args()
        {
        }
        /**
         * @param string $group
         */
        protected function set_group($group)
        {
        }
        /**
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * @return bool If the action has been finished
         */
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_NullAction
     */
    class ActionScheduler_NullAction extends \ActionScheduler_Action
    {
        public function __construct($hook = '', array $args = array(), \ActionScheduler_Schedule $schedule = \NULL)
        {
        }
        public function execute()
        {
        }
    }
    /**
     * Class ActionScheduler_FinishedAction
     */
    class ActionScheduler_FinishedAction extends \ActionScheduler_Action
    {
        public function execute()
        {
        }
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_CanceledAction
     *
     * Stored action which was canceled and therefore acts like a finished action but should always return a null schedule,
     * regardless of schedule passed to its constructor.
     */
    class ActionScheduler_CanceledAction extends \ActionScheduler_FinishedAction
    {
        /**
         * @param string $hook
         * @param array $args
         * @param ActionScheduler_Schedule $schedule
         * @param string $group
         */
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
    }
    /**
     * Class ActionScheduler_Versions
     */
    class ActionScheduler_Versions
    {
        public function register($version_string, $initialization_callback)
        {
        }
        public function get_versions()
        {
        }
        public function latest_version()
        {
        }
        public function latest_version_callback()
        {
        }
        /**
         * @return ActionScheduler_Versions
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public static function initialize_latest_version()
        {
        }
    }
    /**
     * Class ActionScheduler_DataController
     *
     * The main plugin/initialization class for the data stores.
     *
     * Responsible for hooking everything up with WordPress.
     *
     * @package Action_Scheduler
     *
     * @since 3.0.0
     */
    class ActionScheduler_DataController
    {
        /** Action data store class name. */
        const DATASTORE_CLASS = 'ActionScheduler_DBStore';
        /** Logger data store class name. */
        const LOGGER_CLASS = 'ActionScheduler_DBLogger';
        /** Migration status option name. */
        const STATUS_FLAG = 'action_scheduler_migration_status';
        /** Migration status option value. */
        const STATUS_COMPLETE = 'complete';
        /** Migration minimum required PHP version. */
        const MIN_PHP_VERSION = '5.5';
        /**
         * Get a flag indicating whether the migration environment dependencies are met.
         *
         * @return bool
         */
        public static function dependencies_met()
        {
        }
        /**
         * Get a flag indicating whether the migration is complete.
         *
         * @return bool Whether the flag has been set marking the migration as complete
         */
        public static function is_migration_complete()
        {
        }
        /**
         * Mark the migration as complete.
         */
        public static function mark_migration_complete()
        {
        }
        /**
         * Unmark migration when a plugin is de-activated. Will not work in case of silent activation, for example in an update.
         * We do this to mitigate the bug of lost actions which happens if there was an AS 2.x to AS 3.x migration in the past, but that plugin is now
         * deactivated and the site was running on AS 2.x again.
         */
        public static function mark_migration_incomplete()
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public static function set_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public static function set_logger_class($class)
        {
        }
        /**
         * Set the sleep time in seconds.
         *
         * @param integer $sleep_time The number of seconds to pause before resuming operation.
         */
        public static function set_sleep_time($sleep_time)
        {
        }
        /**
         * Set the tick count required for freeing memory.
         *
         * @param integer $free_ticks The number of ticks to free memory on.
         */
        public static function set_free_ticks($free_ticks)
        {
        }
        /**
         * Free memory if conditions are met.
         *
         * @param int $ticks Current tick count.
         */
        public static function maybe_free_memory($ticks)
        {
        }
        /**
         * Reduce memory footprint by clearing the database query and object caches.
         */
        public static function free_memory()
        {
        }
        /**
         * Connect to table datastores if migration is complete.
         * Otherwise, proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView_Deprecated
     *
     * Store deprecated public functions previously found in the ActionScheduler_AdminView class.
     * Keeps them out of the way of the main class.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView_Deprecated
    {
        public function action_scheduler_post_type_args($args)
        {
        }
        /**
         * Customise the post status related views displayed on the Scheduled Actions administration screen.
         *
         * @param array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         * @return array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         */
        public function list_table_views($views)
        {
        }
        /**
         * Do not include the "Edit" action for the Scheduled Actions administration screen.
         *
         * Hooked to the 'bulk_actions-edit-action-scheduler' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public function bulk_actions($actions)
        {
        }
        /**
         * Completely customer the columns displayed on the Scheduled Actions administration screen.
         *
         * Because we can't filter the content of the default title and date columns, we need to recreate our own
         * custom columns for displaying those post fields. For the column content, @see self::list_table_column_content().
         *
         * @param array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         */
        public function list_table_columns($columns)
        {
        }
        /**
         * Make our custom title & date columns use defaulting title & date sorting.
         *
         * @param array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         */
        public static function list_table_sortable_columns($columns)
        {
        }
        /**
         * Print the content for our custom columns.
         *
         * @param string $column_name The key for the column for which we should output our content.
         * @param int $post_id The ID of the 'scheduled-action' post for which this row relates.
         */
        public static function list_table_column_content($column_name, $post_id)
        {
        }
        /**
         * Hide the inline "Edit" action for all 'scheduled-action' posts.
         *
         * Hooked to the 'post_row_actions' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public static function row_actions($actions, $post)
        {
        }
        /**
         * Run an action when triggered from the Action Scheduler administration screen.
         *
         * @codeCoverageIgnore
         */
        public static function maybe_execute_action()
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This funciton goes one step
         * further to display two degrees of accuracy.
         *
         * Based on Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @return string A human friendly string representation of the interval.
         */
        public static function admin_notices()
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $orderby MySQL orderby string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL orderby string.
         */
        public function custom_orderby($orderby, $query)
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $search MySQL search string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL search string.
         */
        public function search_post_password($search, $query)
        {
        }
        /**
         * Change messages when a scheduled action is updated.
         *
         * @param  array $messages
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
    {
        /** @var ActionScheduler_ListTable */
        protected $list_table;
        /**
         * @return ActionScheduler_AdminView
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function system_status_report()
        {
        }
        /**
         * Registers action-scheduler into WooCommerce > System status.
         *
         * @param array $tabs An associative array of tab key => label.
         * @return array $tabs An associative array of tab key => label, including Action Scheduler's tabs
         */
        public function register_system_status_tab(array $tabs)
        {
        }
        /**
         * Include Action Scheduler's administration under the Tools menu.
         *
         * A menu under the Tools menu is important for backward compatibility (as that's
         * where it started), and also provides more convenient access than the WooCommerce
         * System Status page, and for sites where WooCommerce isn't active.
         */
        public function register_menu()
        {
        }
        /**
         * Triggers processing of any pending actions.
         */
        public function process_admin_ui()
        {
        }
        /**
         * Renders the Admin UI
         */
        public function render_admin_ui()
        {
        }
        /**
         * Get the admin UI object and process any requested actions.
         *
         * @return ActionScheduler_ListTable
         */
        protected function get_list_table()
        {
        }
        /**
         * Provide more information about the screen and its data in the help tab.
         */
        public function add_help_tabs()
        {
        }
    }
    /**
     * Class ActionScheduler_Schedule
     */
    interface ActionScheduler_Schedule
    {
        /**
         * @param DateTime $after
         * @return DateTime|null
         */
        public function next(\DateTime $after = \NULL);
        /**
         * @return bool
         */
        public function is_recurring();
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Schedule_Deprecated implements \ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function next(\DateTime $after = \NULL)
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Abstract_Schedule extends \ActionScheduler_Schedule_Deprecated
    {
        /**
         * Timestamp equivalent of @see $this->scheduled_date
         *
         * @var int
         */
        protected $scheduled_timestamp = \NULL;
        /**
         * @param DateTime $date The date & time to run the action.
         */
        public function __construct(\DateTime $date)
        {
        }
        /**
         * Check if a schedule should recur.
         *
         * @return bool
         */
        public abstract function is_recurring();
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected abstract function calculate_next(\DateTime $after);
        /**
         * Get the next date & time when this schedule should run after a given date & time.
         *
         * @param DateTime $after
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Get the date & time the schedule is set to run.
         *
         * @return DateTime|null
         */
        public function get_date()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         * @return array
         */
        public function __sleep()
        {
        }
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_SimpleSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Serialize schedule with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * scheduled date for single actions always being seen as "now" if downgrading to
         * Action Scheduler < 3.0.0, we need to also store the data with the old property names
         * so if it's unserialized in AS < 3.0, the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_RecurringSchedule
     */
    abstract class ActionScheduler_Abstract_RecurringSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * Timestamp equivalent of @see $this->first_date
         *
         * @var int
         */
        protected $first_timestamp = \NULL;
        /**
         * The recurrance between each time an action is run using this schedule.
         * Used to calculate the start date & time. Can be a number of seconds, in the
         * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
         * case of ActionScheduler_CronSchedule. Or something else.
         *
         * @var mixed
         */
        protected $recurrence;
        /**
         * @param DateTime $date The date & time to run the action.
         * @param mixed $recurrence The data used to determine the schedule's recurrance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $date, $recurrence, \DateTime $first = \null)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Get the date & time of the first schedule in this recurring series.
         *
         * @return DateTime|null
         */
        public function get_first_date()
        {
        }
        /**
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. This was addressed in
         * Action Scheduler 3.0.0, where properties and property names were aligned for better
         * inheritance. To maintain backward compatibility with scheduled serialized and stored
         * prior to 3.0, we need to correctly map the old property names.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_CronSchedule
     */
    class ActionScheduler_CronSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
         * objects $recurrence property.
         *
         * @param DateTime $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
         * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $start, $recurrence, \DateTime $first = \null)
        {
        }
        /**
         * Calculate when an instance of this schedule would start based on a given
         * date & time using its the CronExpression.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * Serialize cron schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize cron schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_NullSchedule
     */
    class ActionScheduler_NullSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * Make the $date param optional and default to null.
         *
         * @param null $date The date & time to run the action.
         */
        public function __construct(\DateTime $date = \null)
        {
        }
        /**
         * This schedule has no scheduled DateTime, so we need to override the parent __sleep()
         * @return array
         */
        public function __sleep()
        {
        }
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_CanceledSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Cancelled actions should never have a next schedule, even if get_next()
         * is called with $after < $this->scheduled_date.
         *
         * @param DateTime $after
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_IntervalSchedule
     */
    class ActionScheduler_IntervalSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return int
         */
        public function interval_in_seconds()
        {
        }
        /**
         * Serialize interval schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null/false/0 recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize interval schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_wcSystemStatus
     */
    class ActionScheduler_wcSystemStatus
    {
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        function __construct($store)
        {
        }
        /**
         * Display action data, including number of actions grouped by status and the oldest & newest action in each status.
         *
         * Helpful to identify issues, like a clogged queue.
         */
        public function render()
        {
        }
        /**
         * Get oldest and newest scheduled dates for a given set of statuses.
         *
         * @param array $status_keys Set of statuses to find oldest & newest action for.
         * @return array
         */
        protected function get_oldest_and_newest($status_keys)
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param string $status Action status label/name string.
         * @param string $date_type Oldest or Newest.
         * @return DateTime
         */
        protected function get_action_status_date($status, $date_type = 'oldest')
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param array $status_labels Set of statuses to find oldest & newest action for.
         * @param array $action_counts Number of actions grouped by status.
         * @param array $oldest_and_newest Date of the oldest and newest action with each status.
         */
        protected function get_template($status_labels, $action_counts, $oldest_and_newest)
        {
        }
        /**
         * is triggered when invoking inaccessible methods in an object context.
         *
         * @param string $name
         * @param array  $arguments
         *
         * @return mixed
         * @link https://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
         */
        public function __call($name, $arguments)
        {
        }
    }
    /**
     * Class ActionScheduler_ActionFactory
     */
    class ActionScheduler_ActionFactory
    {
        /**
         * @param string $status The action's status in the data store
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass to callbacks when the hook is triggered
         * @param ActionScheduler_Schedule $schedule The action's schedule
         * @param string $group A group to put the action in
         *
         * @return ActionScheduler_Action An instance of the stored action
         */
        public function get_stored_action($status, $hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
         *
         * This method creates a new action with the NULLSchedule. This schedule maps to a MySQL datetime string of
         * 0000-00-00 00:00:00. This is done to create a psuedo "async action" type that is fully backward compatible.
         * Existing queries to claim actions claim by date, meaning actions scheduled for 0000-00-00 00:00:00 will
         * always be claimed prior to actions scheduled for a specific date. This makes sure that any async action is
         * given priority in queue processing. This has the added advantage of making sure async actions can be
         * claimed by both the existing WP Cron and WP CLI runners, as well as a new async request runner.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function async($hook, $args = array(), $group = '')
        {
        }
        /**
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $when Unix timestamp when the action will run
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function single($hook, $args = array(), $when = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $first Unix timestamp for the first run
         * @param int $interval Seconds between runs
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule.
         *
         * @param string $hook The hook to trigger when this action runs
         * @param array $args Args to pass when the hook is triggered
         * @param int $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int $schedule A cron definition string
         * @param string $group A group to put the action in
         *
         * @return int The ID of the stored action
         */
        public function cron($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '')
        {
        }
        /**
         * Create a successive instance of a recurring or cron action.
         *
         * Importantly, the action will be rescheduled to run based on the current date/time.
         * That means when the action is scheduled to run in the past, the next scheduled date
         * will be pushed forward. For example, if a recurring action set to run every hour
         * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
         * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
         *
         * Alternatively, if the action is scheduled to run in the future, and is run early,
         * likely via manual intervention, then its schedule will change based on the time now.
         * For example, if a recurring action set to run every day, and is run 12 hours early,
         * it will run again in 24 hours, not 36 hours.
         *
         * This slippage is less of an issue with Cron actions, as the specific run time can
         * be set for them to run, e.g. 1am each day. In those cases, and entire period would
         * need to be missed before there was any change is scheduled, e.g. in the case of an
         * action scheduled for 1am each day, the action would need to run an entire day late.
         *
         * @param ActionScheduler_Action $action The existing action.
         *
         * @return string The ID of the stored action
         * @throws InvalidArgumentException If $action is not a recurring action.
         */
        public function repeat($action)
        {
        }
        /**
         * @param ActionScheduler_Action $action
         *
         * @return int The ID of the stored action
         */
        protected function store(\ActionScheduler_Action $action)
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class LogMigrator
    {
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Logger $source_logger Source logger object.
         * @param ActionScheduler_Logger $destination_Logger Destination logger object.
         */
        public function __construct(\ActionScheduler_Logger $source_logger, \ActionScheduler_Logger $destination_Logger)
        {
        }
        /**
         * Migrate an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class DryRun_LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @codeCoverageIgnore
     */
    class DryRun_LogMigrator extends \Action_Scheduler\Migration\LogMigrator
    {
        /**
         * Simulate migrating an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class Config
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * A config builder for the ActionScheduler\Migration\Runner class
     */
    class Config
    {
        /**
         * Config constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the configured source store.
         *
         * @return ActionScheduler_Store
         */
        public function get_source_store()
        {
        }
        /**
         * Set the configured source store.
         *
         * @param ActionScheduler_Store $store Source store object.
         */
        public function set_source_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured source loger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_source_logger()
        {
        }
        /**
         * Set the configured source logger.
         *
         * @param ActionScheduler_Logger $logger
         */
        public function set_source_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get the configured destination store.
         *
         * @return ActionScheduler_Store
         */
        public function get_destination_store()
        {
        }
        /**
         * Set the configured destination store.
         *
         * @param ActionScheduler_Store $store
         */
        public function set_destination_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured destination logger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_destination_logger()
        {
        }
        /**
         * Set the configured destination logger.
         *
         * @param ActionScheduler_Logger $logger
         */
        public function set_destination_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get flag indicating whether it's a dry run.
         *
         * @return bool
         */
        public function get_dry_run()
        {
        }
        /**
         * Set flag indicating whether it's a dry run.
         *
         * @param bool $dry_run
         */
        public function set_dry_run($dry_run)
        {
        }
        /**
         * Get progress bar object.
         *
         * @return ActionScheduler\WPCLI\ProgressBar
         */
        public function get_progress_bar()
        {
        }
        /**
         * Set progress bar object.
         *
         * @param ActionScheduler\WPCLI\ProgressBar $progress_bar
         */
        public function set_progress_bar(\Action_Scheduler\WP_CLI\ProgressBar $progress_bar)
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_DBStoreMigrator
     *
     * A  class for direct saving of actions to the table data store during migration.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStoreMigrator extends \ActionScheduler_DBStore
    {
        /**
         * Save an action with optional last attempt date.
         *
         * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
         * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
         * that when first saving the action.
         *
         * @param ActionScheduler_Action $action
         * @param \DateTime $scheduled_date Optional date of the first instance to store.
         * @param \DateTime $last_attempt_date Optional date the action was last attempted.
         *
         * @return string The action ID
         * @throws \RuntimeException When the action is not saved.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null, \DateTime $last_attempt_date = \null)
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ActionMigrator
    {
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         * @param ActionScheduler_Store $destination_store Destination store object.
         * @param LogMigrator           $log_migrator Log migrator object.
         */
        public function __construct(\ActionScheduler_Store $source_store, \ActionScheduler_Store $destination_store, \Action_Scheduler\Migration\LogMigrator $log_migrator)
        {
        }
        /**
         * Migrate an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int 0|new action ID
         */
        public function migrate($source_action_id)
        {
        }
    }
    /**
     * Class BatchFetcher
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class BatchFetcher
    {
        /**
         * BatchFetcher constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         */
        public function __construct(\ActionScheduler_Store $source_store)
        {
        }
        /**
         * Retrieve a list of actions.
         *
         * @param int $count The number of actions to retrieve
         *
         * @return int[] A list of action IDs
         */
        public function fetch($count = 10)
        {
        }
    }
    /**
     * Class Runner
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Runner
    {
        /**
         * Runner constructor.
         *
         * @param Config $config Migration configuration object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config)
        {
        }
        /**
         * Run migration batch.
         *
         * @param int $batch_size Optional batch size. Default 10.
         *
         * @return int Size of batch processed.
         */
        public function run($batch_size = 10)
        {
        }
        /**
         * Migration a batch of actions.
         *
         * @param array $action_ids List of action IDs to migrate.
         */
        public function migrate_actions(array $action_ids)
        {
        }
        /**
         * Initialize destination store and logger.
         */
        public function init_destination()
        {
        }
    }
    /**
     * Class DryRun_ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class DryRun_ActionMigrator extends \Action_Scheduler\Migration\ActionMigrator
    {
        /**
         * Simulate migrating an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int
         */
        public function migrate($source_action_id)
        {
        }
    }
    /**
     * Class Controller
     *
     * The main plugin/initialization class for migration to custom tables.
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Controller
    {
        /**
         * Controller constructor.
         *
         * @param Scheduler $migration_scheduler Migration scheduler object.
         */
        protected function __construct(\Action_Scheduler\Migration\Scheduler $migration_scheduler)
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public function get_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public function get_logger_class($class)
        {
        }
        /**
         * Get flag indicating whether a custom datastore is in use.
         *
         * @return bool
         */
        public function has_custom_datastore()
        {
        }
        /**
         * Set up the background migration process.
         *
         * @return void
         */
        public function schedule_migration()
        {
        }
        /**
         * Get the default migration config object
         *
         * @return ActionScheduler\Migration\Config
         */
        public function get_migration_config_object()
        {
        }
        /**
         * Hook dashboard migration notice.
         */
        public function hook_admin_notices()
        {
        }
        /**
         * Show a dashboard notice that migration is in progress.
         */
        public function display_migration_notice()
        {
        }
        /**
         * Possibly hook the migration scheduler action.
         *
         * @author Jeremy Pry
         */
        public function maybe_hook_migration()
        {
        }
        /**
         * Allow datastores to enable migration to AS tables.
         */
        public function allow_migration()
        {
        }
        /**
         * Proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * Class Scheduler
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Scheduler
    {
        /** Migration action hook. */
        const HOOK = 'action_scheduler/migration_hook';
        /** Migration action group. */
        const GROUP = 'action-scheduler-migration';
        /**
         * Set up the callback for the scheduled job.
         */
        public function hook()
        {
        }
        /**
         * Remove the callback for the scheduled job.
         */
        public function unhook()
        {
        }
        /**
         * The migration callback.
         */
        public function run_migration()
        {
        }
        /**
         * Mark the migration complete.
         */
        public function mark_complete()
        {
        }
        /**
         * Get a flag indicating whether the migration is scheduled.
         *
         * @return bool Whether there is a pending action in the store to handle the migration
         */
        public function is_migration_scheduled()
        {
        }
        /**
         * Schedule the migration.
         *
         * @param int $when Optional timestamp to run the next migration batch. Defaults to now.
         *
         * @return string The action ID
         */
        public function schedule_migration($when = 0)
        {
        }
        /**
         * Remove the scheduled migration action.
         */
        public function unschedule_migration()
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_NullLogEntry
     */
    class ActionScheduler_NullLogEntry extends \ActionScheduler_LogEntry
    {
        public function __construct($action_id = '', $message = '')
        {
        }
    }
    /**
     * Class ActionScheduler_Compatibility
     */
    class ActionScheduler_Compatibility
    {
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        /**
         * Attempts to raise the PHP memory limit for memory intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it.
         *
         * Wrapper for wp_raise_memory_limit(), added in WordPress v4.6.0
         *
         * @return bool|int|string The limit that was set or false on failure.
         */
        public static function raise_memory_limit()
        {
        }
        /**
         * Attempts to raise the PHP timeout for time intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it. Wrapper for wc_set_time_limit(), when available.
         *
         * @param int $limit The time limit in seconds.
         */
        public static function raise_time_limit($limit = 0)
        {
        }
    }
    /**
     * Class ActionScheduler
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler
    {
        public static function factory()
        {
        }
        public static function store()
        {
        }
        public static function lock()
        {
        }
        public static function logger()
        {
        }
        public static function runner()
        {
        }
        public static function admin_view()
        {
        }
        /**
         * Get the absolute system path to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_path($path)
        {
        }
        /**
         * Get the absolute URL to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_url($path)
        {
        }
        public static function autoload($class)
        {
        }
        /**
         * Initialize the plugin
         *
         * @static
         * @param string $plugin_file
         */
        public static function init($plugin_file)
        {
        }
        /**
         * Check whether the AS data store has been initialized.
         *
         * @param string $function_name The name of the function being called. Optional. Default `null`.
         * @return bool
         */
        public static function is_initialized($function_name = \null)
        {
        }
        /**
         * Determine if the class is one of our abstract classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_abstract($class)
        {
        }
        /**
         * Determine if the class is one of our migration classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_migration($class)
        {
        }
        /**
         * Determine if the class is one of our WP CLI classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_cli($class)
        {
        }
        public final function __clone()
        {
        }
        public final function __wakeup()
        {
        }
        /** Deprecated **/
        public static function get_datetime_object($when = \null, $timezone = 'UTC')
        {
        }
        /**
         * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
         *
         * @param string $function_name The name of the function being called.
         * @deprecated 3.1.6.
         */
        public static function check_shutdown_hook($function_name)
        {
        }
    }
    /**
     * Action Scheduler Abstract List Table class
     *
     * This abstract class enhances WP_List_Table making it ready to use.
     *
     * By extending this class we can focus on describing how our table looks like,
     * which columns needs to be shown, filter, ordered by and more and forget about the details.
     *
     * This class supports:
     *	- Bulk actions
     *	- Search
     *  - Sortable columns
     *  - Automatic translations of the columns
     *
     * @codeCoverageIgnore
     * @since  2.0.0
     */
    abstract class ActionScheduler_Abstract_ListTable extends \WP_List_Table
    {
        /**
         * The table name
         */
        protected $table_name;
        /**
         * Package name, used to get options from WP_List_Table::get_items_per_page.
         */
        protected $package;
        /**
         * How many items do we render per page?
         */
        protected $items_per_page = 10;
        /**
         * Enables search in this table listing. If this array
         * is empty it means the listing is not searchable.
         */
        protected $search_by = array();
        /**
         * Columns to show in the table listing. It is a key => value pair. The
         * key must much the table column name and the value is the label, which is
         * automatically translated.
         */
        protected $columns = array();
        /**
         * Defines the row-actions. It expects an array where the key
         * is the column name and the value is an array of actions.
         *
         * The array of actions are key => value, where key is the method name
         * (with the prefix row_action_<key>) and the value is the label
         * and title.
         */
        protected $row_actions = array();
        /**
         * The Primary key of our table
         */
        protected $ID = 'ID';
        /**
         * Enables sorting, it expects an array
         * of columns (the column names are the values)
         */
        protected $sort_by = array();
        protected $filter_by = array();
        /**
         * @var array The status name => count combinations for this table's items. Used to display status filters.
         */
        protected $status_counts = array();
        /**
         * @var array Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
         */
        protected $admin_notices = array();
        /**
         * @var string Localised string displayed in the <h1> element above the able.
         */
        protected $table_header;
        /**
         * Enables bulk actions. It must be an array where the key is the action name
         * and the value is the label (which is translated automatically). It is important
         * to notice that it will check that the method exists (`bulk_$name`) and will throw
         * an exception if it does not exists.
         *
         * This class will automatically check if the current request has a bulk action, will do the
         * validations and afterwards will execute the bulk method, with two arguments. The first argument
         * is the array with primary keys, the second argument is a string with a list of the primary keys,
         * escaped and ready to use (with `IN`).
         */
        protected $bulk_actions = array();
        /**
         * Makes translation easier, it basically just wraps
         * `_x` with some default (the package name).
         *
         * @deprecated 3.0.0
         */
        protected function translate($text, $context = '')
        {
        }
        /**
         * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
         * also validates that the bulk method handler exists. It throws an exception because
         * this is a library meant for developers and missing a bulk method is a development-time error.
         */
        protected function get_bulk_actions()
        {
        }
        /**
         * Checks if the current request has a bulk action. If that is the case it will validate and will
         * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
         * the previous page removing the current arguments that makes this request a bulk action.
         */
        protected function process_bulk_action()
        {
        }
        /**
         * Default code for deleting entries.
         * validated already by process_bulk_action()
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Prepares the _column_headers property which is used by WP_Table_List at rendering.
         * It merges the columns and the sortable columns.
         */
        protected function prepare_column_headers()
        {
        }
        /**
         * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
         * expects
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Returns the columns names for rendering. It adds a checkbox for selecting everything
         * as the first column
         */
        public function get_columns()
        {
        }
        /**
         * Get prepared LIMIT clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared LIMIT clause for items query.
         */
        protected function get_items_query_limit()
        {
        }
        /**
         * Returns the number of items to offset/skip for this current view.
         *
         * @return int
         */
        protected function get_items_offset()
        {
        }
        /**
         * Get prepared OFFSET clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared OFFSET clause for items query.
         */
        protected function get_items_query_offset()
        {
        }
        /**
         * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
         * columns are sortable. This requests validates the orderby $_GET parameter is a valid
         * column and sortable. It will also use order (ASC|DESC) using DESC by default.
         */
        protected function get_items_query_order()
        {
        }
        /**
         * Return the sortable column specified for this request to order the results by, if any.
         *
         * @return string
         */
        protected function get_request_orderby()
        {
        }
        /**
         * Return the sortable column order specified for this request.
         *
         * @return string
         */
        protected function get_request_order()
        {
        }
        /**
         * Return the status filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_status()
        {
        }
        /**
         * Return the search filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_search_query()
        {
        }
        /**
         * Process and return the columns name. This is meant for using with SQL, this means it
         * always includes the primary key.
         *
         * @return array
         */
        protected function get_table_columns()
        {
        }
        /**
         * Check if the current request is doing a "full text" search. If that is the case
         * prepares the SQL to search texts using LIKE.
         *
         * If the current request does not have any search or if this list table does not support
         * that feature it will return an empty string.
         *
         * TODO:
         *   - Improve search doing LIKE by word rather than by phrases.
         *
         * @return string
         */
        protected function get_items_query_search()
        {
        }
        /**
         * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
         * any data sent by the user it validates that it is a valid option.
         */
        protected function get_items_query_filters()
        {
        }
        /**
         * Prepares the data to feed WP_Table_List.
         *
         * This has the core for selecting, sorting and filting data. To keep the code simple
         * its logic is split among many methods (get_items_query_*).
         *
         * Beside populating the items this function will also count all the records that matches
         * the filtering criteria and will do fill the pagination variables.
         */
        public function prepare_items()
        {
        }
        public function extra_tablenav($which)
        {
        }
        /**
         * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
         * are serialized). This can be override in child classes for futher data transformation.
         */
        protected function set_items(array $items)
        {
        }
        /**
         * Renders the checkbox for each row, this is the first column and it is named ID regardless
         * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
         * name transformation though using `$this->ID`.
         */
        public function column_cb($row)
        {
        }
        /**
         * Renders the row-actions.
         *
         * This method renders the action menu, it reads the definition from the $row_actions property,
         * and it checks that the row action method exists before rendering it.
         *
         * @param array $row     Row to render
         * @param $column_name   Current row
         * @return
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        protected function process_row_actions()
        {
        }
        /**
         * Default column formatting, it will escape everythig for security.
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_header()
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_admin_notices()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Renders the table list, we override the original class to render the table inside a form
         * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
         * forget about any extra HTML.
         */
        protected function display_table()
        {
        }
        /**
         * Process any pending actions.
         */
        public function process_actions()
        {
        }
        /**
         * Render the list table page, including header, notices, status filters and table.
         */
        public function display_page()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_placeholder()
        {
        }
    }
    /**
     * Class ActionScheduler_TimezoneHelper
     */
    abstract class ActionScheduler_TimezoneHelper
    {
        /**
         * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
         * if no timezone string is available.
         *
         * @since  2.1.0
         *
         * @param DateTime $date
         * @return ActionScheduler_DateTime
         */
        public static function set_local_timezone(\DateTime $date)
        {
        }
        /**
         * Helper to retrieve the timezone string for a site until a WP core method exists
         * (see https://core.trac.wordpress.org/ticket/24730).
         *
         * Adapted from wc_timezone_string() and https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
         *
         * If no timezone string is set, and its not possible to match the UTC offset set for the site to a timezone
         * string, then an empty string will be returned, and the UTC offset should be used to set a DateTime's
         * timezone.
         *
         * @since 2.1.0
         * @return string PHP timezone string for the site or empty if no timezone string is available.
         */
        protected static function get_local_timezone_string($reset = \false)
        {
        }
        /**
         * Get timezone offset in seconds.
         *
         * @since  2.1.0
         * @return float
         */
        protected static function get_local_timezone_offset()
        {
        }
        /**
         * @deprecated 2.1.0
         */
        public static function get_local_timezone($reset = \FALSE)
        {
        }
    }
    /**
     * Commands for Action Scheduler.
     */
    class ActionScheduler_WPCLI_Scheduler_command extends \WP_CLI_Command
    {
        /**
         * Run the Action Scheduler
         *
         * ## OPTIONS
         *
         * [--batch-size=<size>]
         * : The maximum number of actions to run. Defaults to 100.
         *
         * [--batches=<size>]
         * : Limit execution to a number of batches. Defaults to 0, meaning batches will continue being executed until all actions are complete.
         *
         * [--cleanup-batch-size=<size>]
         * : The maximum number of actions to clean up. Defaults to the value of --batch-size.
         *
         * [--hooks=<hooks>]
         * : Only run actions with the specified hook. Omitting this option runs actions with any hook. Define multiple hooks as a comma separated string (without spaces), e.g. `--hooks=hook_one,hook_two,hook_three`
         *
         * [--group=<group>]
         * : Only run actions from the specified group. Omitting this option runs actions from all groups.
         *
         * [--free-memory-on=<count>]
         * : The number of actions to process between freeing memory. 0 disables freeing memory. Default 50.
         *
         * [--pause=<seconds>]
         * : The number of seconds to pause when freeing memory. Default no pause.
         *
         * [--force]
         * : Whether to force execution despite the maximum number of concurrent processes being exceeded.
         *
         * @param array $args Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @throws \WP_CLI\ExitException When an error occurs.
         *
         * @subcommand run
         */
        public function run($args, $assoc_args)
        {
        }
        /**
         * Print WP CLI message about how many actions are about to be processed.
         *
         * @author Jeremy Pry
         *
         * @param int $total
         */
        protected function print_total_actions($total)
        {
        }
        /**
         * Print WP CLI message about how many batches of actions were processed.
         *
         * @author Jeremy Pry
         *
         * @param int $batches_completed
         */
        protected function print_total_batches($batches_completed)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @author Jeremy Pry
         *
         * @param Exception $e The error object.
         *
         * @throws \WP_CLI\ExitException
         */
        protected function print_error(\Exception $e)
        {
        }
        /**
         * Print a success message with the number of completed actions.
         *
         * @author Jeremy Pry
         *
         * @param int $actions_completed
         */
        protected function print_success($actions_completed)
        {
        }
    }
}
namespace Action_Scheduler\WP_CLI {
    /**
     * Class Migration_Command
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Migration_Command extends \WP_CLI_Command
    {
        /**
         * Register the command with WP-CLI
         */
        public function register()
        {
        }
        /**
         * Process the data migration.
         *
         * @param array $positional_args Required for WP CLI. Not used in migration.
         * @param array $assoc_args Optional arguments.
         *
         * @return void
         */
        public function migrate($positional_args, $assoc_args)
        {
        }
    }
    /**
     * WP_CLI progress bar for Action Scheduler.
     */
    /**
     * Class ProgressBar
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ProgressBar
    {
        /** @var integer */
        protected $total_ticks;
        /** @var integer */
        protected $count;
        /** @var integer */
        protected $interval;
        /** @var string */
        protected $message;
        /** @var \cli\progress\Bar */
        protected $progress_bar;
        /**
         * ProgressBar constructor.
         *
         * @param string  $message    Text to display before the progress bar.
         * @param integer $count      Total number of ticks to be performed.
         * @param integer $interval   Optional. The interval in milliseconds between updates. Default 100.
         *
         * @throws Exception When this is not run within WP CLI
         */
        public function __construct($message, $count, $interval = 100)
        {
        }
        /**
         * Increment the progress bar ticks.
         */
        public function tick()
        {
        }
        /**
         * Get the progress bar tick count.
         *
         * @return int
         */
        public function current()
        {
        }
        /**
         * Finish the current progress bar.
         */
        public function finish()
        {
        }
        /**
         * Set the message used when creating the progress bar.
         *
         * @param string $message The message to be used when the next progress bar is created.
         */
        public function set_message($message)
        {
        }
        /**
         * Set the count for a new progress bar.
         *
         * @param integer $count The total number of ticks expected to complete.
         */
        public function set_count($count)
        {
        }
        /**
         * Set up the progress bar.
         */
        protected function setup_progress_bar()
        {
        }
    }
}
namespace {
    /**
     * WP CLI Queue runner.
     *
     * This class can only be called from within a WP CLI instance.
     */
    class ActionScheduler_WPCLI_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        /** @var array */
        protected $actions;
        /** @var  ActionScheduler_ActionClaim */
        protected $claim;
        /** @var \cli\progress\Bar */
        protected $progress_bar;
        /**
         * ActionScheduler_WPCLI_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         *
         * @throws Exception When this is not run within WP CLI
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Set up the Queue before processing.
         *
         * @author Jeremy Pry
         *
         * @param int    $batch_size The batch size to process.
         * @param array  $hooks      The hooks being used to filter the actions claimed in this batch.
         * @param string $group      The group of actions to claim with this batch.
         * @param bool   $force      Whether to force running even with too many concurrent processes.
         *
         * @return int The number of actions that will be run.
         * @throws \WP_CLI\ExitException When there are too many concurrent batches.
         */
        public function setup($batch_size, $hooks = array(), $group = '', $force = \false)
        {
        }
        /**
         * Add our hooks to the appropriate actions.
         *
         * @author Jeremy Pry
         */
        protected function add_hooks()
        {
        }
        /**
         * Set up the WP CLI progress bar.
         *
         * @author Jeremy Pry
         */
        protected function setup_progress_bar()
        {
        }
        /**
         * Process actions in the queue.
         *
         * @author Jeremy Pry
         *
         * @param string $context Optional runner context. Default 'WP CLI'.
         *
         * @return int The number of actions processed.
         */
        public function run($context = 'WP CLI')
        {
        }
        /**
         * Handle WP CLI message when the action is starting.
         *
         * @author Jeremy Pry
         *
         * @param $action_id
         */
        public function before_execute($action_id)
        {
        }
        /**
         * Handle WP CLI message when the action has completed.
         *
         * @author Jeremy Pry
         *
         * @param int $action_id
         * @param null|ActionScheduler_Action $action The instance of the action. Default to null for backward compatibility.
         */
        public function after_execute($action_id, $action = \null)
        {
        }
        /**
         * Handle WP CLI message when the action has failed.
         *
         * @author Jeremy Pry
         *
         * @param int       $action_id
         * @param Exception $exception
         * @throws \WP_CLI\ExitException With failure message.
         */
        public function action_failed($action_id, $exception)
        {
        }
        /**
         * Sleep and help avoid hitting memory limit
         *
         * @param int $sleep_time Amount of seconds to sleep
         * @deprecated 3.0.0
         */
        protected function stop_the_insanity($sleep_time = 0)
        {
        }
        /**
         * Maybe trigger the stop_the_insanity() method to free up memory.
         */
        protected function maybe_stop_the_insanity()
        {
        }
    }
    /**
     * Implements the admin view of the actions.
     * @codeCoverageIgnore
     */
    class ActionScheduler_ListTable extends \ActionScheduler_Abstract_ListTable
    {
        /**
         * The package name.
         *
         * @var string
         */
        protected $package = 'action-scheduler';
        /**
         * Columns to show (name => label).
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Actions (name => label).
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * A logger to use for getting action logs to display
         *
         * @var ActionScheduler_Logger
         */
        protected $logger;
        /**
         * A ActionScheduler_QueueRunner runner instance (or child class)
         *
         * @var ActionScheduler_QueueRunner
         */
        protected $runner;
        /**
         * Bulk actions. The key of the array is the method name of the implementation:
         *
         *     bulk_<key>(array $ids, string $sql_in).
         *
         * See the comments in the parent class for further details
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Flag variable to render our notifications, if any, once.
         *
         * @var bool
         */
        protected static $did_notification = \false;
        /**
         * Sets the current data store object into `store->action` and initialises the object.
         *
         * @param ActionScheduler_Store $store
         * @param ActionScheduler_Logger $logger
         * @param ActionScheduler_QueueRunner $runner
         */
        public function __construct(\ActionScheduler_Store $store, \ActionScheduler_Logger $logger, \ActionScheduler_QueueRunner $runner)
        {
        }
        /**
         * Returns the recurrence of an action or 'Non-repeating'. The output is human readable.
         *
         * @param ActionScheduler_Action $action
         *
         * @return string
         */
        protected function get_recurrence($action)
        {
        }
        /**
         * Serializes the argument of an action to render it in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table
         *
         * @return string
         */
        public function column_args(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param array $row Action array.
         * @return string
         */
        public function column_log_entries(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param ActionScheduler_LogEntry $log_entry
         * @param DateTimezone $timezone
         * @return string
         */
        protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
        {
        }
        /**
         * Only display row actions for pending actions.
         *
         * @param array  $row         Row to render
         * @param string $column_name Current row
         *
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Renders admin notifications
         *
         * Notifications:
         *  1. When the maximum number of tasks are being executed simultaneously.
         *  2. Notifications when a task is manually executed.
         *  3. Tables are missing.
         */
        public function display_admin_notices()
        {
        }
        /**
         * Prints the scheduled date in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table
         *
         * @return string
         */
        public function column_schedule($row)
        {
        }
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @param ActionScheduler_Schedule $schedule
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Bulk delete
         *
         * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
         * properly validated by the callee and it will delete the actions without any extra validation.
         *
         * @param array $ids
         * @param string $ids_sql Inherited and unused
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
         */
        protected function row_action_cancel($action_id)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
         */
        protected function row_action_run($action_id)
        {
        }
        /**
         * Force the data store schema updates.
         */
        protected function recreate_tables()
        {
        }
        /**
         * Implements the logic behind processing an action once an action link is clicked on the list table.
         *
         * @param int $action_id
         * @param string $row_action_type The type of action to perform on the action.
         */
        protected function process_row_action($action_id, $row_action_type)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function prepare_items()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_button_text()
        {
        }
    }
    /**
     * ActionScheduler DateTime class.
     *
     * This is a custom extension to DateTime that
     */
    class ActionScheduler_DateTime extends \DateTime
    {
        /**
         * UTC offset.
         *
         * Only used when a timezone is not set. When a timezone string is
         * used, this will be set to 0.
         *
         * @var int
         */
        protected $utcOffset = 0;
        /**
         * Get the unix timestamp of the current object.
         *
         * Missing in PHP 5.2 so just here so it can be supported consistently.
         *
         * @return int
         */
        public function getTimestamp()
        {
        }
        /**
         * Set the UTC offset.
         *
         * This represents a fixed offset instead of a timezone setting.
         *
         * @param $offset
         */
        public function setUtcOffset($offset)
        {
        }
        /**
         * Returns the timezone offset.
         *
         * @return int
         * @link http://php.net/manual/en/datetime.getoffset.php
         */
        public function getOffset()
        {
        }
        /**
         * Set the TimeZone associated with the DateTime
         *
         * @param DateTimeZone $timezone
         *
         * @return static
         * @link http://php.net/manual/en/datetime.settimezone.php
         */
        public function setTimezone($timezone)
        {
        }
        /**
         * Get the timestamp with the WordPress timezone offset added or subtracted.
         *
         * @since  3.0.0
         * @return int
         */
        public function getOffsetTimestamp()
        {
        }
    }
    /**
     * Class ActionScheduler_ActionClaim
     */
    class ActionScheduler_ActionClaim
    {
        public function __construct($id, array $action_ids)
        {
        }
        public function get_id()
        {
        }
        public function get_actions()
        {
        }
    }
    /**
     * Class ActionScheduler_QueueCleaner
     */
    class ActionScheduler_QueueCleaner
    {
        /** @var int */
        protected $batch_size;
        /**
         * ActionScheduler_QueueCleaner constructor.
         *
         * @param ActionScheduler_Store $store      The store instance.
         * @param int                   $batch_size The batch size.
         */
        public function __construct(\ActionScheduler_Store $store = \null, $batch_size = 20)
        {
        }
        public function delete_old_actions()
        {
        }
        /**
         * Unclaim pending actions that have not been run within a given time limit.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
         */
        public function reset_timeouts($time_limit = 300)
        {
        }
        /**
         * Mark actions that have been running for more than a given time limit as failed, based on
         * the assumption some uncatachable and unloggable fatal error occurred during processing.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
         */
        public function mark_failures($time_limit = 300)
        {
        }
        /**
         * Do all of the cleaning actions.
         *
         * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
         * @author Jeremy Pry
         */
        public function clean($time_limit = 300)
        {
        }
        /**
         * Get the batch size for cleaning the queue.
         *
         * @author Jeremy Pry
         * @return int
         */
        protected function get_batch_size()
        {
        }
    }
    /**
     * CRON expression parser that can determine whether or not a CRON expression is
     * due to run, the next run date and previous run date of a CRON expression.
     * The determinations made by this class are accurate if checked run once per
     * minute (seconds are dropped from date time comparisons).
     *
     * Schedule parts must map to:
     * minute [0-59], hour [0-23], day of month, month [1-12|JAN-DEC], day of week
     * [1-7|MON-SUN], and an optional year.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     * @link http://en.wikipedia.org/wiki/Cron
     */
    class CronExpression
    {
        const MINUTE = 0;
        const HOUR = 1;
        const DAY = 2;
        const MONTH = 3;
        const WEEKDAY = 4;
        const YEAR = 5;
        /**
        * Factory method to create a new CronExpression.
        *
        * @param string $expression The CRON expression to create.  There are
        *      several special predefined values which can be used to substitute the
        *      CRON expression:
        *
        *      @yearly, @annually) - Run once a year, midnight, Jan. 1 - 0 0 1 1 *
        *      @monthly - Run once a month, midnight, first of month - 0 0 1 * *
        *      @weekly - Run once a week, midnight on Sun - 0 0 * * 0
        *      @daily - Run once a day, midnight - 0 0 * * *
        *      @hourly - Run once an hour, first minute - 0 * * * *
        *
        *@param CronExpression_FieldFactory $fieldFactory (optional) Field factory to use
        *
        * @return CronExpression
        */
        public static function factory($expression, \CronExpression_FieldFactory $fieldFactory = \null)
        {
        }
        /**
         * Parse a CRON expression
         *
         * @param string       $expression   CRON expression (e.g. '8 * * * *')
         * @param CronExpression_FieldFactory $fieldFactory Factory to create cron fields
         */
        public function __construct($expression, \CronExpression_FieldFactory $fieldFactory)
        {
        }
        /**
         * Set or change the CRON expression
         *
         * @param string $value CRON expression (e.g. 8 * * * *)
         *
         * @return CronExpression
         * @throws InvalidArgumentException if not a valid CRON expression
         */
        public function setExpression($value)
        {
        }
        /**
         * Set part of the CRON expression
         *
         * @param int    $position The position of the CRON expression to set
         * @param string $value    The value to set
         *
         * @return CronExpression
         * @throws InvalidArgumentException if the value is not valid for the part
         */
        public function setPart($position, $value)
        {
        }
        /**
         * Get a next run date relative to the current date or a specific date
         *
         * @param string|DateTime $currentTime (optional) Relative calculation date
         * @param int             $nth         (optional) Number of matches to skip before returning a
         *     matching next run date.  0, the default, will return the current
         *     date and time if the next run date falls on the current date and
         *     time.  Setting this value to 1 will skip the first match and go to
         *     the second match.  Setting this value to 2 will skip the first 2
         *     matches and so on.
         * @param bool $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         */
        public function getNextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = \false)
        {
        }
        /**
         * Get a previous run date relative to the current date or a specific date
         *
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param int             $nth              (optional) Number of matches to skip before returning
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         * @see CronExpression::getNextRunDate
         */
        public function getPreviousRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = \false)
        {
        }
        /**
         * Get multiple run dates starting at the current date or a specific date
         *
         * @param int             $total            Set the total number of dates to calculate
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param bool            $invert           (optional) Set to TRUE to retrieve previous dates
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return array Returns an array of run dates
         */
        public function getMultipleRunDates($total, $currentTime = 'now', $invert = \false, $allowCurrentDate = \false)
        {
        }
        /**
         * Get all or part of the CRON expression
         *
         * @param string $part (optional) Specify the part to retrieve or NULL to
         *      get the full cron schedule string.
         *
         * @return string|null Returns the CRON expression, a part of the
         *      CRON expression, or NULL if the part was specified but not found
         */
        public function getExpression($part = \null)
        {
        }
        /**
         * Helper method to output the full expression.
         *
         * @return string Full CRON expression
         */
        public function __toString()
        {
        }
        /**
         * Determine if the cron is due to run based on the current date or a
         * specific date.  This method assumes that the current number of
         * seconds are irrelevant, and should be called once per minute.
         *
         * @param string|DateTime $currentTime (optional) Relative calculation date
         *
         * @return bool Returns TRUE if the cron is due to run or FALSE if not
         */
        public function isDue($currentTime = 'now')
        {
        }
        /**
         * Get the next or previous run date of the expression relative to a date
         *
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param int             $nth              (optional) Number of matches to skip before returning
         * @param bool            $invert           (optional) Set to TRUE to go backwards in time
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         */
        protected function getRunDate($currentTime = \null, $nth = 0, $invert = \false, $allowCurrentDate = \false)
        {
        }
    }
    /**
     * CRON field interface
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    interface CronExpression_FieldInterface
    {
        /**
         * Check if the respective value of a DateTime field satisfies a CRON exp
         *
         * @param DateTime $date  DateTime object to check
         * @param string   $value CRON expression to test against
         *
         * @return bool Returns TRUE if satisfied, FALSE otherwise
         */
        public function isSatisfiedBy(\DateTime $date, $value);
        /**
         * When a CRON expression is not satisfied, this method is used to increment
         * or decrement a DateTime object by the unit of the cron field
         *
         * @param DateTime $date   DateTime object to change
         * @param bool     $invert (optional) Set to TRUE to decrement
         *
         * @return CronExpression_FieldInterface
         */
        public function increment(\DateTime $date, $invert = \false);
        /**
         * Validates a CRON expression for a given field
         *
         * @param string $value CRON expression value to validate
         *
         * @return bool Returns TRUE if valid, FALSE otherwise
         */
        public function validate($value);
    }
    /**
     * Abstract CRON expression field
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    abstract class CronExpression_AbstractField implements \CronExpression_FieldInterface
    {
        /**
         * Check to see if a field is satisfied by a value
         *
         * @param string $dateValue Date value to check
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isSatisfied($dateValue, $value)
        {
        }
        /**
         * Check if a value is a range
         *
         * @param string $value Value to test
         *
         * @return bool
         */
        public function isRange($value)
        {
        }
        /**
         * Check if a value is an increments of ranges
         *
         * @param string $value Value to test
         *
         * @return bool
         */
        public function isIncrementsOfRanges($value)
        {
        }
        /**
         * Test if a value is within a range
         *
         * @param string $dateValue Set date value
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isInRange($dateValue, $value)
        {
        }
        /**
         * Test if a value is within an increments of ranges (offset[-to]/step size)
         *
         * @param string $dateValue Set date value
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isInIncrementsOfRanges($dateValue, $value)
        {
        }
    }
    /**
     * Minutes field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_MinutesField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * CRON field factory implementing a flyweight factory
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     * @link http://en.wikipedia.org/wiki/Cron
     */
    class CronExpression_FieldFactory
    {
        /**
         * Get an instance of a field object for a cron expression position
         *
         * @param int $position CRON expression position value to retrieve
         *
         * @return CronExpression_FieldInterface
         * @throws InvalidArgumentException if a position is not valid
         */
        public function getField($position)
        {
        }
    }
    /**
     * Hours field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_HoursField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Day of week field.  Allows: * / , - ? L #
     *
     * Days of the week can be represented as a number 0-7 (0|7 = Sunday)
     * or as a three letter string: SUN, MON, TUE, WED, THU, FRI, SAT.
     *
     * 'L' stands for "last". It allows you to specify constructs such as
     * "the last Friday" of a given month.
     *
     * '#' is allowed for the day-of-week field, and must be followed by a
     * number between one and five. It allows you to specify constructs such as
     * "the second Friday" of a given month.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_DayOfWeekField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Day of month field.  Allows: * , / - ? L W
     *
     * 'L' stands for "last" and specifies the last day of the month.
     *
     * The 'W' character is used to specify the weekday (Monday-Friday) nearest the
     * given day. As an example, if you were to specify "15W" as the value for the
     * day-of-month field, the meaning is: "the nearest weekday to the 15th of the
     * month". So if the 15th is a Saturday, the trigger will fire on Friday the
     * 14th. If the 15th is a Sunday, the trigger will fire on Monday the 16th. If
     * the 15th is a Tuesday, then it will fire on Tuesday the 15th. However if you
     * specify "1W" as the value for day-of-month, and the 1st is a Saturday, the
     * trigger will fire on Monday the 3rd, as it will not 'jump' over the boundary
     * of a month's days. The 'W' character can only be specified when the
     * day-of-month is a single day, not a range or list of days.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_DayOfMonthField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Year field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_YearField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Month field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_MonthField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * CartFlows_Plugin_Update_Notifications
     *
     * @since 1.11.8
     */
    class Cartflows_Plugin_Update_Notifications
    {
        /**
         * Initiator
         *
         * @since 1.11.8
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.11.8
         */
        public function __construct()
        {
        }
        /**
         * Show customized plugin update notification message.
         *
         * @since 1.11.8
         *
         * @param array $data plugin data.
         * @param array $response response.
         *
         * @return void
         */
        public function dynamic_plugin_update_notification($data, $response)
        {
        }
        /**
         * Enqueue Scripts.
         *
         * @since 1.11.8
         * @return void
         */
        public function enqueue_styles()
        {
        }
    }
}
namespace CartflowsAdmin\Wizard\Ajax {
    /**
     * Class AjaxErrors
     */
    class AjaxErrors
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get error message.
         *
         * @param string $type Message type.
         * @return string
         */
        public function get_error_msg($type)
        {
        }
    }
    /**
     * Class Admin_Init.
     */
    class WizardAjaxInit
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Register API routes.
         */
        public function register_all_ajax_events()
        {
        }
    }
    /**
     * Class Admin_Menu.
     */
    abstract class AjaxBase
    {
        /**
         * Erros class instance.
         *
         * @var object
         */
        public $errors = null;
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Register ajax events.
         *
         * @param array $ajax_events Ajax events.
         */
        public function init_ajax_events($ajax_events)
        {
        }
        /**
         * Localize nonce for ajax call.
         *
         * @param string $action Action name.
         * @return void
         */
        public function localize_ajax_action_nonce($action)
        {
        }
        /**
         * Get ajax error message.
         *
         * @param string $type Message type.
         * @return string
         */
        public function get_error_msg($type)
        {
        }
    }
    /**
     * Class Steps.
     */
    class Wizard extends \CartflowsAdmin\Wizard\Ajax\AjaxBase
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Register ajax events.
         *
         * @since 1.0.0
         * @return void
         */
        public function register_ajax_events()
        {
        }
        /**
         * Update option.
         *
         * @since 1.0.0
         * @return void
         */
        public function onboarding_exit()
        {
        }
        /**
         * Update option.
         *
         * @since 1.0.0
         * @return void
         */
        public function onboarding_completed()
        {
        }
        /**
         * Save page builder.
         *
         * @since 1.0.0
         * @return void
         */
        public function page_builder_save_option()
        {
        }
        /**
         * Optin step.
         *
         * @since 1.0.0
         * @return void
         */
        public function user_onboarding()
        {
        }
        /**
         * Check is error in the received response.
         *
         * @param object $response Received API Response.
         * @return array $result Error result.
         */
        public function is_api_error($response)
        {
        }
        /**
         * Update step title.
         *
         * @since 1.0.0
         * @return void
         */
        public function wizard_activate_plugin()
        {
        }
        /**
         * Fetch all the available flows for global checkout.
         *
         * @since 1.10.0
         */
        public function get_global_flow_list()
        {
        }
        /**
         * Import
         *
         * @since 1.0.14
         * @since 1.6.15 Added page no.
         * @param  string  $page_builder page builder slug.
         * @param  integer $page Page number.
         * @return array
         */
        public function import_templates($page_builder, $page = 1)
        {
        }
        /**
         * Get store flow.
         */
        public function get_single_store_checkout_flow()
        {
        }
        /**
         * Import the flow template for the store checkout.
         * Once the import is done, then set it's checkout page as a Global Checkout.
         *
         * @since 1.10.0
         * @return void
         */
        public function import_store_checkout()
        {
        }
    }
}
namespace CartflowsAdmin\Wizard\Inc {
    /**
     * Class Admin_Menu.
     */
    class WizardCore
    {
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Load styles.
         */
        public function load_admin_media_styles()
        {
        }
        /**
         * Load media.
         */
        public function load_scripts()
        {
        }
        /**
         * Load WP media script on init.
         */
        public function load_media_script()
        {
        }
        /**
         * Hide a notice if the GET variable is set.
         */
        public function hide_notices()
        {
        }
        /**
         *  Disable the woo redirect for new setup.
         */
        public function disable_woo_setup_redirect()
        {
        }
        /**
         * Show action links on the plugin screen.
         *
         * @since 1.0.0
         * @return void
         */
        public function show_setup_wizard()
        {
        }
        /**
         * Add admin menus/screens.
         */
        public function admin_menus()
        {
        }
        /**
         * Show the setup wizard.
         */
        public function setup_wizard()
        {
        }
        /**
         * Load scripts.
         */
        public function load_required_scripts()
        {
        }
        /**
         * Save usage tracking Settings.
         */
        public function save_usage_tracking_option()
        {
        }
        /**
         * Redirect the user to create his first flow depending on which UI he is using.
         */
        public function get_final_page_link()
        {
        }
        /**
         * Localize variables in admin.
         */
        public function localize_vars()
        {
        }
        /**
         * Get customizer/site logo URL.
         *
         * @since 1.10.0
         *
         * @return $image_url Site logo URL
         */
        public function get_site_logo_url()
        {
        }
        /**
         * Get plugin status
         *
         * @since 1.1.4
         *
         * @param  string $plugin_init_file Plguin init file.
         * @return mixed
         */
        public function get_plugin_status($plugin_init_file)
        {
        }
    }
    /**
     * Class AdminHelper.
     */
    class WizardHelper
    {
        /**
         * Update admin settings.
         *
         * @param string $key key.
         * @param bool   $value key.
         * @param bool   $network network.
         */
        public static function update_settings_options($key, $value, $network = false)
        {
        }
    }
}
namespace {
    /**
     * Class for divi page builder compatibility
     */
    class Cartflows_Divi_Compatibility
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add id attribute to cartflows container which is needed to apply style to divi elements.
         *
         * @param array $atts container HTML attributes.
         * @return array
         */
        public function add_id_for_cartflows_container($atts)
        {
        }
    }
}
namespace Elementor\Modules\PageTemplates {
    /**
     * Class for elementor page builder compatibility
     */
    class Cartflows_Elementor_Compatibility
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Get page template fiter callback for elementor preview mode
         *
         * @param string $template page template.
         * @return string
         */
        public function get_page_template($template)
        {
        }
        /**
         * Rgister wc hookes for elementor preview mode
         */
        public function register_wc_hooks()
        {
        }
        /**
         * Init cart in elementor preview mode
         */
        public function maybe_init_cart()
        {
        }
    }
}
namespace {
    /**
     * Class for Thrive Visual Editor Compatibility
     */
    class Cartflows_Thrive_Compatibility
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Return step post type for Thrive Architect.
         *
         * @since 1.0.0
         * @param array $post_type_pt the current step post type.
         * @return array $post_type_pt current step post type.
         */
        public function send_post_type_to_thrive($post_type_pt)
        {
        }
        /**
         * Return true/false to show change template option.
         *
         * @since 1.0.0
         * @param array $bool true/false.
         * @return array $bool true/false.
         */
        public function display_change_template_option($bool)
        {
        }
    }
    /**
     * Class for LearnDash compatibility
     */
    class Cartflows_Learndash_Compatibility
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Override course cartflows template.
         *
         * @return bool
         */
        public function cartflows_override_course_template()
        {
        }
        /**
         * Add settings inside learndash settings.
         *
         * @param array $fields fields.
         * @return mixed
         */
        public function cartflows_course_setting_fields($fields)
        {
        }
    }
    /**
     * Class for Beaver Builder page builder compatibility
     */
    class Cartflows_BB_Compatibility
    {
        /**
         * Initiator
         *
         * @since 1.1.4
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.1.4
         */
        public function __construct()
        {
        }
        /**
         * Disable Beaver Builder Redirection after plugin install.
         *
         * @since 1.1.4
         *
         * @return void
         */
        public function disable_rediraction()
        {
        }
        /**
         * Add beaver builder support for step post type.
         *
         * @since 1.1.4
         *
         * @param array $post_types container Post types.
         * @return array
         */
        public function post_types($post_types)
        {
        }
    }
    /**
     * Class for page builder compatibility
     */
    class Cartflows_Compatibility
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Load popular theme fallback files.
         *
         * @since X.X.X
         *
         * @return void
         */
        public function load_cartflows_theme_support()
        {
        }
        /**
         *  Declare the woo HPOS compatibility.
         */
        public function declare_woo_hpos_compatibility()
        {
        }
        /**
         *  Load page builder compatibility files
         */
        public function load_files()
        {
        }
        /**
         * Check if it is beaver builder enabled.
         *
         * @since 1.1.4
         */
        public function is_bb_enabled()
        {
        }
        /**
         *  Check if elementor preview mode is on.
         */
        public function is_elementor_preview_mode()
        {
        }
        /**
         *  Get Current Theme.
         */
        public function get_current_theme()
        {
        }
        /**
         *  Check if it is beaver builder preview mode
         */
        public function is_bb_preview_mode()
        {
        }
        /**
         *  Check for page builder preview mode.
         */
        public function is_page_builder_preview()
        {
        }
        /**
         *  Check if divi builder enabled.
         */
        public function is_divi_builder_preview()
        {
        }
        /**
         *  Check if divi builder enabled for post id.
         *
         * @param int $post_id post id.
         */
        public function is_divi_builder_enabled($post_id)
        {
        }
        /**
         * Check if compatibility theme enabled.
         */
        public function is_compatibility_theme_enabled()
        {
        }
        /**
         * Check if pro theme enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_pro_enabled($theme = \false)
        {
        }
        /**
         * Check if kallyas theme enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_kallyas_enabled($theme = \false)
        {
        }
        /**
         * Check if divi builder enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_divi_enabled($theme = \false)
        {
        }
        /**
         * Check if Divi theme is install status.
         *
         * @return boolean
         */
        public function is_divi_theme_installed()
        {
        }
        /**
         * Check if Flatsome enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_flatsome_enabled($theme = \false)
        {
        }
        /**
         * Check if The7 enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_the_seven_enabled($theme = \false)
        {
        }
        /**
         * Check if OceanWp enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_oceanwp_enabled($theme = \false)
        {
        }
        /**
         * Check if Astra enabled.
         *
         * @param object $theme theme data.
         * @return boolean
         */
        public function is_astra_enabled($theme = \false)
        {
        }
        /**
         *  Check for thrive architect edit page.
         *
         * @param int $post_id post id.
         */
        public function is_thrive_edit_page($post_id)
        {
        }
        /**
         *  Overwrite meta for page
         */
        public function override_meta()
        {
        }
        /**
         *  Assign cartflow canvas template to page.
         *
         * @param int $post_id post ID.
         */
        public function overwrite_template($post_id)
        {
        }
        /**
         * Load font awesome style from oceanwp on checkout page.
         */
        public function load_fontawesome()
        {
        }
    }
    /**
     * Class for Astra theme compatibility
     */
    class Cartflows_Astra_Compatibility
    {
        /**
         * Initiator
         *
         * @since 1.5.7
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.5.7
         */
        public function __construct()
        {
        }
        /**
         * Clear theme cached CSS if required.
         */
        public function clear_astra_woo_css_cache()
        {
        }
        /**
         * Override the Astra's actions only for the CF Checkout page to display.
         * Stripe/smart Payment buttons.
         *
         * @since 1.10.0
         *
         * @param bool $bool true/false to override actions or not.
         *
         * @return bool
         */
        public function override_product_structure_on_checkout($bool)
        {
        }
        /**
         * Function to remove the astra hooks.
         *
         * @since 1.5.7
         *
         * @return void
         */
        public function cartflows_theme_compatibility_astra()
        {
        }
        /**
         * Function to remove page template specific actions.
         * Used to remove undesigned menu from the footer of the CartFlows pages only.
         *
         * @since 1.6.6
         *
         * @return void
         */
        public function cartflows_page_template_specific_action()
        {
        }
        /**
         * Function to add/remove the actions/hooks on wp action.
         *
         * @since 1.5.7
         *
         * @return void
         */
        public function cartflows_load_wp_actions_for_astra()
        {
        }
        /**
         * Function to add theme color on frontend.
         *
         * @since 1.10.0
         *
         * @return void
         */
        public function gutenberg_block_color_support()
        {
        }
        /**
         * Load the CSS
         *
         * @since 1.5.7
         *
         * @return void
         */
        public function astra_compatibility_external_css()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Flow
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Step_Post_Type
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Trys to load page.php for a header, footer or part theme layout.
         *
         * @since 1.0.0
         * @param string $template The current template to be loaded.
         * @return string
         */
        public function load_page_template($template)
        {
        }
        /**
         * Body classes.
         *
         * @since 1.0.0
         * @param array $classes Body classes.
         * @return array
         */
        public function body_class($classes = array())
        {
        }
        /**
         * Create custom post type
         */
        public function step_post_type()
        {
        }
        /**
         * Add WordPress templates.
         *
         * Adds Cartflows templates to steps
         *
         * @since 1.0.0
         * @access public
         */
        public function add_wp_templates_support()
        {
        }
        /**
         * Add page templates.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array  $page_templates Array of page templates.
         *
         * @param object $wp_theme wp theme.
         * @param object $post post.
         *
         * @return array Page templates.
         */
        public function add_page_templates($page_templates, $wp_theme, $post)
        {
        }
        /**
         * Query fixe throwing error on 404 page due our post type changes.
         * We are setting post_type as empty array to fix the issue.
         * Ther error was throwing due to redirect_canonical function
         * This fix is apply for 404 page only
         */
        public function query_fix()
        {
        }
        /**
         * Prevent slug duplicated
         *
         * @param string $slug post slug.
         * @param int    $post_ID post id.
         * @param string $post_status post status.
         * @param string $post_type post type.
         * @param int    $post_parent post parent id.
         * @param string $original_slug original slug.
         * @return string
         */
        public function prevent_slug_duplicates($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
        {
        }
        /**
         * Add Update messages for any custom post type
         *
         * @param array $messages Array of default messages.
         */
        public function post_update_messages($messages)
        {
        }
        /**
         * Add Terms for Taxonomy.
         *
         * => Example.
         *
         *  $taxonomy = '{taxonomy}';
         *  $terms    = array(
         *                  array(
         *                      'name'  => 'Landing',
         *                      'slug'  => 'landing',
         *                  ),
         *                  array(
         *                      'name'  => 'Checkout',
         *                      'slug'  => 'checkout',
         *                  ),
         *              );
         *
         *  self::add_terms( $taxonomy, $terms );
         *
         * @since 1.0.0
         * @param string $taxonomy Taxonomy Name.
         * @param array  $terms    Terms list.
         * @return void
         */
        public function add_terms($taxonomy = '', $terms = array())
        {
        }
        /**
         * Redirect admin pages.
         *
         * @return void
         */
        public function disallowed_admin_all_steps_view()
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Flow_Loader
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Load classes.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function include_files()
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Permalink
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Modify permalink
         *
         * @param string $post_link post link.
         * @param array  $post post data.
         * @param string $leavename leave name.
         * @return string
         */
        public function post_type_permalinks($post_link, $post, $leavename)
        {
        }
        /**
         * Reqrite rules for acrtflows step.
         */
        public function rewrite_step_rule()
        {
        }
        /**
         * Have WordPress match post name to any of our public post types.
         * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
         * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
         *
         * @param WP_Query $query query statement.
         */
        public function add_cpt_post_names_to_main_query($query)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Flow_Post_Type
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add CartFlows post status.
         *
         * @param array $post_states post data.
         * @return array
         */
        public function add_cartflows_post_state($post_states)
        {
        }
        /**
         * Display slugdiv.
         *
         * @param array $hidden metaboxes.
         * @param obj   $screen screen.
         * @return array
         */
        public function display_flow_slug_meta_box($hidden, $screen)
        {
        }
        /**
         * Create custom post type
         */
        public function flow_post_type()
        {
        }
        /**
         * Show custom add new button.
         */
        public function add_new_notice_button()
        {
        }
        /**
         * Upgrade to pro notice popup.
         *
         * @since 1.3.4
         *
         * @return void
         */
        public function upgrade_to_pro_notice_popup()
        {
        }
        /**
         * Change metabox position.
         */
        public function wcf_change_metabox_position()
        {
        }
        /**
         * Add post raw actions
         *
         * @param array $actions actions.
         * @param array $post post data.
         * @return array
         */
        public function post_row_actions($actions, $post)
        {
        }
        /**
         * Returns previous post link
         *
         * @param string $prev_link previous link.
         * @param array  $post post data.
         * @return string
         */
        public function preview_post_link($prev_link, $post)
        {
        }
        /**
         * Check if post type is flow
         *
         * @param array $post post data.
         * @return bool
         */
        public function is_flow_post_type($post)
        {
        }
        /**
         * Redirect to first step
         *
         * @return void
         */
        public function redirect_to_step()
        {
        }
        /**
         * Return first step URL
         *
         * @param array $post post data.
         * @return bool
         */
        public function get_first_step_url($post)
        {
        }
        /**
         * Add Update messages for any custom post type
         *
         * @param array $messages Array of default messages.
         */
        public function custom_post_type_post_update_messages($messages)
        {
        }
    }
    /**
     * CartFlows_Meta
     *
     * @since 1.0.0
     */
    abstract class Cartflows_Step_Meta_Base
    {
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get step settings
         *
         * @param int   $step_id post ID.
         * @param array $options options.
         */
        public abstract function get_settings($step_id, $options = array());
        /**
         * Get Common Tabs.
         */
        public function common_tabs()
        {
        }
        /**
         * Script Settings
         *
         * @param array $options options.
         * @param int   $post_id post ID.
         */
        public function custom_script($options, $post_id)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Flow_Shortcodes
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         *  Returns next step link
         *
         * @param array $atts attributes.
         * @return string
         */
        public function next_step_link($atts)
        {
        }
        /**
         *  Navigation shortcode callback
         *
         * @param array $atts attributes for shortcode.
         * @return string
         */
        public function navigation_shortcode($atts)
        {
        }
    }
    /**
     * Class Cartflows_Admin_Report_Emails.
     */
    class Cartflows_Admin_Report_Emails
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Schedule the weekly email.
         */
        public function schedule_weekly_report_email()
        {
        }
        /**
         * Send weekly report email.
         */
        public function send_weekly_report_email()
        {
        }
        /**
         *  Unsubscribe the user from the mailing list.
         */
        public function unsubscribe_cartflows_weekly_emails()
        {
        }
        /**
         *  Get the stats mention in to email.
         */
        public function get_last_week_stats()
        {
        }
        /**
         *  Get the stats mention in to email.
         */
        public function get_last_month_stats()
        {
        }
        /**
         * Get admin report email subject.
         */
        public function get_email_subject()
        {
        }
        /**
         *  Get admin report email content.
         *
         * @param array  $stats reports details.
         * @param string $user_name user name.
         * @param string $email_id email id.
         */
        public function get_email_content($stats, $user_name, $email_id)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Optin_Markup
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Elementor editor compatibility.
         */
        public function elementor_editor_compatibility()
        {
        }
        /**
         * Beaver Builder editor compatibility.
         */
        public function bb_editor_compatibility()
        {
        }
        /**
         * Gutenburg editor compatibility.
         */
        public function gutenberg_editor_compatibility()
        {
        }
        /**
         * Remove login and registration actions.
         */
        public function remove_woo_actions()
        {
        }
        /**
         * Filter or remove woo data on update order review ajax call.
         *
         * @param string $post_data post data woo.
         * @return void
         */
        public function filter_remove_woo_data($post_data)
        {
        }
        /**
         * Change order button text .
         *
         * @param string $button_text place order.
         * @return string
         */
        public function place_order_button_text($button_text)
        {
        }
        /**
         * Display all WooCommerce notices.
         *
         * @since 1.1.5
         */
        public function display_woo_notices()
        {
        }
        /**
         * Check for checkout flag
         *
         * @param bool $is_checkout is checkout.
         *
         * @return bool
         */
        public function woo_checkout_flag($is_checkout)
        {
        }
        /**
         * Render checkout shortcode markup.
         *
         * @param array $atts attributes.
         * @return string
         */
        public function optin_shortcode_markup($atts)
        {
        }
        /**
         * Configure Cart Data.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function preconfigured_cart_data()
        {
        }
        /**
         * Load shortcode data.
         *
         * @return void
         */
        public function shortcode_load_data()
        {
        }
        /**
         * Before option shortcode actions.
         */
        public function before_optin_shortcode_actions()
        {
        }
        /**
         * Disable payment gateways.
         *
         * @param array $available_gateways gateways.
         * @return array
         */
        public function disable_payment_gateways($available_gateways)
        {
        }
        /**
         * Render checkout ID hidden field.
         *
         * @param array $checkout checkout session data.
         * @return void
         */
        public function checkout_shortcode_post_id($checkout)
        {
        }
        /**
         * Load shortcode scripts.
         *
         * @return void
         */
        public function shortcode_scripts()
        {
        }
        /**
         * Load compatibility scripts.
         *
         * @return void
         */
        public function compatibility_scripts()
        {
        }
        /**
         * Generate styles.
         *
         * @return string
         */
        public function generate_style()
        {
        }
        /**
         * Get ajax end points.
         *
         * @param string $endpoint_url end point URL.
         * @param string $request end point request.
         * @return string
         */
        public function get_ajax_endpoint($endpoint_url, $request)
        {
        }
        /**
         * Save checkout fields.
         *
         * @param int   $order_id order id.
         * @param array $posted posted data.
         * @return void
         */
        public function save_optin_fields($order_id, $posted)
        {
        }
        /**
         * Redirect users to our checkout if hidden param
         *
         * @param string $redirect redirect url.
         * @param object $user user.
         * @return string
         */
        public function after_login_redirect($redirect, $user)
        {
        }
        /**
         * Add custom class to the fields to change the UI to three column.
         *
         * @param array $fields fields.
         */
        public function set_optin_default_fields($fields)
        {
        }
        /**
         * Add custom class to the fields to change the UI to three column.
         *
         * @param array $fields fields.
         */
        public function set_optin_fields($fields)
        {
        }
        /**
         * Billing field customization.
         *
         * @param array  $fields fields data.
         * @param string $country country name.
         * @return array
         */
        public function billing_optin_fields($fields, $country)
        {
        }
        /**
         * Replace billing label.
         *
         * @param string $notice Notice.
         * @param string $field_label Field name.
         * @return string
         */
        public function change_field_label_in_required_notice($notice, $field_label)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Optin_Meta_Data extends \Cartflows_Step_Meta_Base
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add required data to api.
         *
         * @param  array $api_data data.
         * @param  int   $step_id step id.
         * @since 1.10.0
         */
        public function add_optin_step_api_data($api_data, $step_id)
        {
        }
        /**
         * Add custom meta fields
         *
         * @param array $post_id post id.
         */
        public function custom_fields_data($post_id)
        {
        }
        /**
         * Add custom meta fields
         *
         * @param string $post_id post id.
         * @param array  $fields fields.
         * @param array  $new_fields new fields.
         */
        public function get_field_settings($post_id, $fields, $new_fields)
        {
        }
        /**
         * Filter checkout values
         *
         * @param  array $options options.
         * @param  int   $step_id post id.
         */
        public function filter_values($options, $step_id)
        {
        }
        /**
         * Page Header Tabs
         *
         * @param  int   $step_id Post meta.
         * @param  array $options options.
         */
        public function get_settings($step_id, $options = array())
        {
        }
        /**
         * Get Page Settings Options
         *
         * @param int $step_id Step ID.
         */
        public function get_page_settings($step_id)
        {
        }
        /**
         * Get design settings data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_design_fields($step_id)
        {
        }
        /**
         * Get settings data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_settings_fields($step_id)
        {
        }
        /**
         * Fetch default width of checkout fields by key.
         *
         * @param string $field_key field key.
         * @return int
         */
        public function get_default_optin_field_width($field_key)
        {
        }
        /**
         * Prepare HTML data for billing and shipping fields.
         *
         * @param string  $field checkout field key.
         * @param array   $field_data checkout field object.
         * @param integer $post_id chcekout post id.
         * @param string  $type checkout field type.
         * @return array
         */
        public function prepare_field_arguments($field, $field_data, $post_id, $type)
        {
        }
        /**
         * Get data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_data($step_id)
        {
        }
        /**
         * Get meta.
         *
         * @param int $post_id Post ID.
         */
        public static function get_meta_option($post_id)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Optin_Fields
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Is custom optin?
         *
         * @param int $optin_id optin ID.
         * @since 1.0.0
         */
        public function is_wcf_optin_custom_fields($optin_id)
        {
        }
        /**
         * Billing field customization.
         *
         * @param array  $fields fields data.
         * @param string $country country name.
         * @param int    $optin_id checkout id.
         * @return array
         */
        public function optin_billing_fields_customization($fields, $country, $optin_id)
        {
        }
        /**
         * Prepare custom fields.
         *
         * @param array  $fieldset fieldset data.
         * @param string $country country name.
         * @param int    $optin_id checkout ID.
         * @param bool   $original_fieldset is original fieldset.
         * @param string $type address type.
         * @return array
         */
        public function prepare_custom_fields($fieldset, $country, $optin_id, $original_fieldset = \false, $type = 'billing')
        {
        }
        /**
         * Prepare checkout fields.
         *
         * @param array $fields fields data.
         * @param bool  $original_fields is original fields.
         * @param int   $optin_id checkout ID.
         * @return array
         */
        public function prepare_custom_fields_data($fields, $original_fields, $optin_id)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Optin
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Widgets
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Register widgets
         */
        public function register_widgets()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Next_Step extends \WP_Widget
    {
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Creating widget front-end
         *
         * @param array $args arguments array.
         * @param array $instance widget instance.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Creating widget back-end
         *
         * @param array $instance widget instance.
         */
        public function form($instance)
        {
        }
        /**
         * Updating widget replacing old instances with new
         *
         * @param array $new_instance new widget instance.
         * @param array $old_instance old widget instance.
         * @return array
         */
        public function update($new_instance, $old_instance)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Landing_Markup
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         *  Add landing pages in WordPress reading section.
         *
         * @param array $output output.
         */
        public function wp_dropdown_pages($output)
        {
        }
        /**
         * Set post query.
         *
         * @param WP_Query $query post query.
         */
        public function wcf_pre_get_posts($query)
        {
        }
        /**
         * Redirect to homepage if landing page set as home page.
         */
        public function template_redirect()
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Landing_Meta_Data extends \Cartflows_Step_Meta_Base
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Page Header Tabs.
         *
         * @param  int   $step_id Post ID.
         * @param  array $options Post meta.
         */
        public function get_settings($step_id, $options = array())
        {
        }
        /**
         * Page Header Tabs.
         *
         * @param int $step_id Step ID.
         */
        public function get_settings_fields($step_id)
        {
        }
        /**
         * Get data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_data($step_id)
        {
        }
        /**
         * Get meta.
         *
         * @param int $post_id Post ID.
         */
        public static function get_meta_option($post_id)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Landing
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Checkout Form Widget
     *
     * @since 1.6.15
     */
    class Cartflows_Checkout_Form extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since 1.6.15
         * @access public
         * @param string $step_type Current step type.
         *
         * @return bool true|false.
         */
        public static function is_enable($step_type)
        {
        }
        /**
         * Retrieve the widget name.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget title.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Retrieve the list of categories the widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * Note that currently Elementor supports only one category.
         * When multiple categories passed, Elementor uses the first one.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.15
         * @var object $settings
         */
        public static $settings;
        /**
         * Retrieve Widget Keywords.
         *
         * @since 1.6.15
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register cart controls controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Function to get layout types.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function get_layout_types()
        {
        }
        /**
         * Function to get skin types.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function get_skin_types()
        {
        }
        /**
         * Register General Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_general_content_controls()
        {
        }
        /**
         * Register General Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_global_style_controls()
        {
        }
        /**
         * Register Heading Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_heading_style_controls()
        {
        }
        /**
         * Register Input Fields Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_input_style_controls()
        {
        }
        /**
         * Register Button Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_button_style_controls()
        {
        }
        /**
         * Register Sections Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_payment_section_style_controls()
        {
        }
        /**
         * Register Sections error Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_error_style_controls()
        {
        }
        /**
         * Register order review column style controls
         */
        protected function register_order_review_style_controls()
        {
        }
        /**
         * Cartflows Checkout Form Styler.
         *
         * @since 1.6.15
         * @access public
         */
        public function is_reload_preview_required()
        {
        }
        /**
         * Render Checkout Form output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Dynamic options of elementor and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
    }
    /**
     * Next Step Button Widget
     *
     * @since 1.11.8
     */
    class CartFlows_Next_Step_Button extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since 1.11.8
         * @access public
         * @param string $step_type Current step type.
         *
         * @return bool true|false.
         */
        public static function is_enable($step_type)
        {
        }
        /**
         * Retrieve the widget name.
         *
         * @since 1.11.8
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget title.
         *
         * @since 1.11.8
         *
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since 1.11.8
         *
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Retrieve the list of categories the widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * Note that currently Elementor supports only one category.
         * When multiple categories passed, Elementor uses the first one.
         *
         * @since 1.11.8
         *
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Retrieve Widget Keywords.
         *
         * @since 1.11.8
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Retrieve Next Step Button sizes.
         *
         * @since 1.11.8
         * @access public
         *
         * @return array Next Step Button Sizes.
         */
        public static function get_button_sizes()
        {
        }
        /**
         * Register Next Step Button controls.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Next Step Button General Controls.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function register_button_content_controls()
        {
        }
        /**
         * Register Next Step Button Styling Controls.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function register_button_style_controls()
        {
        }
        /**
         * Register Button Content Styling Controls.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function register_button_content_style_controls()
        {
        }
        /**
         * Render Next Step Button icon.
         *
         * @since 1.11.8
         * @param string $position Icon positin.
         * @param array  $settings settings.
         * @access protected
         */
        protected function render_button_icon($position, $settings)
        {
        }
        /**
         * Render Next Step Button output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Next Step Button output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 1.11.8
         * @access protected
         */
        protected function render_next_step_button()
        {
        }
        /**
         * Render Next Step Button output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since 1.11.8
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Optin Form Widget
     *
     * @since 1.6.15
     */
    class CartFlows_Optin_Form extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since 1.6.15
         * @access public
         * @param string $step_type Current step type.
         *
         * @return bool true|false.
         */
        public static function is_enable($step_type)
        {
        }
        /**
         * Retrieve the widget name.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget title.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Retrieve the list of categories the widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * Note that currently Elementor supports only one category.
         * When multiple categories passed, Elementor uses the first one.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.15
         * @var object $settings
         */
        public static $settings;
        /**
         * Retrieve Widget Keywords.
         *
         * @since 1.6.15
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register cart controls controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Function to get skin types.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function get_skin_types()
        {
        }
        /**
         * Register General Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_general_style_controls()
        {
        }
        /**
         * Register Input Fields Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_input_style_controls()
        {
        }
        /**
         * Register Button Style Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_button_style_controls()
        {
        }
        /**
         * Cartflows Optin Form Styler.
         *
         * @since 1.6.15
         * @access public
         */
        public function is_reload_preview_required()
        {
        }
        /**
         * Render Optin Form output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Dynamic options of elementor and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
    }
    /**
     * Order Details Form Widget
     *
     * @since 1.6.15
     */
    class Cartflows_Order_Details_Form extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since 1.6.15
         * @access public
         * @param string $step_type Current step type.
         *
         * @return bool true|false.
         */
        public static function is_enable($step_type)
        {
        }
        /**
         * Retrieve the widget name.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget title.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Retrieve the list of categories the widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * Note that currently Elementor supports only one category.
         * When multiple categories passed, Elementor uses the first one.
         *
         * @since 1.6.15
         *
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.15
         * @var object $settings
         */
        public static $settings;
        /**
         * Retrieve Widget Keywords.
         *
         * @since 1.6.15
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Order Details Form controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Thank you page Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_thankyou_controls()
        {
        }
        /**
         * Register spacing Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_spacing_controls()
        {
        }
        /**
         * Register heading Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_heading_style_controls()
        {
        }
        /**
         * Register General Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_general_style_controls()
        {
        }
        /**
         * Register Section Order Review Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_section_order_review_style_controls()
        {
        }
        /**
         * Register Section Order downloads Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_section_downloads_style_controls()
        {
        }
        /**
         * Register Section Order Details Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_section_order_details_style_controls()
        {
        }
        /**
         * Register Section Customer Details Styling Controls.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function register_section_customer_details_style_controls()
        {
        }
        /**
         * Render Order Details Form output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.6.15
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Dynamic options of elementor and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
        /**
         * Render Order Details Form output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since 1.6.15
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Elementor_Editor
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int   $step_id checkout id.
         * @param array $editor_data editor data.
         */
        public function update_required_step_meta_data($step_id, $editor_data)
        {
        }
        /**
         * Get the elementor widget data.
         *
         * @param array  $elements elements data.
         * @param string $slug widget name.
         */
        public function elementor_find_element_recursive($elements, $slug = 'checkout-form')
        {
        }
        /**
         * Elementor editor compatibility.
         */
        public function elementor_editor_compatibility()
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int $checkout_id checkout id.
         */
        public function before_checkout_shortcode_actions($checkout_id)
        {
        }
        /**
         * Before optin shortcode actions.
         *
         * @param int $checkout_id checkout id.
         */
        public function before_optin_shortcode_actions($checkout_id)
        {
        }
    }
    /**
     * Set up Widgets Loader class
     */
    class Cartflows_Widgets_Loader
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Enqueue admin scripts
         *
         * @since 1.6.15
         * @param string $hook Current page hook.
         * @access public
         */
        public function admin_enqueue_styles($hook)
        {
        }
        /**
         * Returns Script array.
         *
         * @return array()
         * @since 1.6.15
         */
        public static function get_widget_list()
        {
        }
        /**
         * Include Widgets files
         *
         * Load widgets files
         *
         * @since 1.6.15
         * @access public
         */
        public function include_widgets_files()
        {
        }
        /**
         * Register Category
         *
         * @since 1.6.15
         * @param object $this_cat class.
         */
        public function register_widget_category($this_cat)
        {
        }
        /**
         * Register Widgets
         *
         * Register new Elementor widgets.
         *
         * @since 1.6.15
         * @access public
         */
        public function register_widgets()
        {
        }
    }
    /**
     * Dynamic Flow shortcodes
     *
     * @package CartFlows
     */
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Wd_Flow_Shortcodes
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Get all selected products
         *
         * @param int $id product id.
         */
        public function get_product_obj($id = \false)
        {
        }
        /**
         * Product title.
         *
         * @param array $atts attributes.
         */
        public function product_title($atts)
        {
        }
        /**
         * Show a single product add to card.
         *
         * @param array $atts Attributes.
         */
        public function add_to_cart($atts)
        {
        }
        /**
         * Show a single product add to card.
         *
         * @param string $add_to_cart_text Button text.
         * @param obj    $product Product object.
         *
         * @return string Add to cart button text.
         */
        public function replace_add_to_cart_text($add_to_cart_text, $product)
        {
        }
    }
    /**
     * Dyanamic Flow Actions
     *
     * @package CartFlows
     */
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Wd_Flow_Actions
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Skip Configure Cart Data.
         *
         * @param bool $skip_cart is skip cart.
         * @param int  $checkout_id checkout id..
         */
        public function skip_cf_cart_configuration($skip_cart, $checkout_id)
        {
        }
        /**
         * Add hidden fields.
         */
        public function add_cf_hidden_fields()
        {
        }
        /**
         * Redirect to flow next step.
         *
         * @param string $redirect_url next step URL.
         * @param string $product Product adding in cart.
         */
        public function redirect_to_next_flow_step($redirect_url, $product)
        {
        }
    }
    /**
     * Dynamic flow product actions.
     *
     * @package CartFlows
     */
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Wd_Flow_Product_Actions
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Redirect to flow step.
         *
         * @param string $redirect_url Flow URL.
         * @param object $product Product.
         */
        public function redirect_to_next_flow_step($redirect_url, $product)
        {
        }
        /**
         * Change Add to cart text.
         *
         * @param string $add_to_cart_text Default text.
         * @param object $product Product.
         */
        public function change_add_to_cart_button_text($add_to_cart_text, $product)
        {
        }
    }
    /**
     * Dynamic Flow loader
     *
     * @package CartFlows
     */
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Wd_Flow_Loader
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Load classes.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function include_files()
        {
        }
    }
    /**
     * Dynamic flow product meta.
     *
     * @package CartFlows
     */
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Wd_Flow_Product_Meta
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add Script.
         */
        public function add_cartflows_scipt()
        {
        }
        /**
         * Add CartFlows tab.
         *
         * @param array $tabs tabs.
         */
        public function add_tab($tabs)
        {
        }
        /**
         * Function to search coupons.
         */
        public function json_search_flows()
        {
        }
        /**
         * Tab content.
         */
        public function add_tab_content()
        {
        }
        /**
         * Woocommerce Select2 field.
         *
         * @param array $field field data.
         */
        public function woocommerce_select2($field)
        {
        }
        /**
         * Save product meta.
         *
         * @param int $post_id product id.
         */
        public function save_product_meta($post_id)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Woo_Dynamic_Flow
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Checkout_Meta_Data extends \Cartflows_Step_Meta_Base
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add required data to api.
         *
         * @param  array $api_data data.
         * @param  int   $step_id step id.
         */
        public function add_checkout_step_api_data($api_data, $step_id)
        {
        }
        /**
         * Removes settings tab checkout_product for store checkout
         *
         * @param array $settings prepared settings array.
         * @param int   $step_id current step id.
         * @return array
         * @since X.X.X
         */
        public function remove_store_checkout_product($settings, $step_id)
        {
        }
        /**
         * Filter checkout values
         *
         * @param  array $options options.
         * @param  int   $step_id post id.
         */
        public function filter_values($options, $step_id)
        {
        }
        /**
         * Page Header Tabs
         *
         * @param  int   $step_id Post meta.
         * @param  array $options options.
         */
        public function get_settings($step_id, $options = array())
        {
        }
        /**
         * Get design settings data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_design_fields($step_id)
        {
        }
        /**
         * Get dummy settings for product options.
         */
        public function get_dummy_settings_for_product_options()
        {
        }
        /**
         * Get dummy settings for product options.
         */
        public function get_dummy_settings_for_coupon()
        {
        }
        /**
         * Get page settings.
         *
         * @param int $step_id Step ID.
         */
        public function get_page_settings($step_id)
        {
        }
        /**
         * Get settings data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_settings_fields($step_id)
        {
        }
        /**
         * Get data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_data($step_id)
        {
        }
        /**
         * Get meta.
         *
         * @param int $post_id Post ID.
         */
        public static function get_meta_option($post_id)
        {
        }
        /**
         * Get name.
         *
         * @param int $id Product ID.
         */
        public static function get_name($id)
        {
        }
        /**
         * Add custom meta fields
         *
         * @param int $post_id post id.
         */
        public function custom_fields_data($post_id)
        {
        }
        /**
         * Add custom meta fields
         *
         * @param string $post_id post id.
         * @param array  $fields fields.
         * @param array  $new_fields new fields.
         */
        public function get_field_settings($post_id, $fields, $new_fields)
        {
        }
        /**
         * Fetch default width of checkout fields by key.
         *
         * @param string $checkout_field_key field key.
         * @return int
         */
        public function get_default_checkout_field_width($checkout_field_key)
        {
        }
        /**
         * Prepare HTML data for billing and shipping fields.
         *
         * @param string  $field checkout field key.
         * @param array   $field_data checkout field object.
         * @param integer $post_id chcekout post id.
         * @param string  $type checkout field type.
         * @return array
         */
        public function prepare_field_arguments($field, $field_data, $post_id, $type)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Checkout_Markup
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue Google Maps API js.
         */
        public function load_google_places_library()
        {
        }
        /**
         * Restore the cart data on the checkout page.
         */
        public function restore_cart_data()
        {
        }
        /**
         * Prepare the cart data on the checkout page.
         *
         * @param array $fragments woo ajax fragments.
         */
        public function prepare_required_cart_data($fragments)
        {
        }
        /**
         * Remove login and registration actions.
         */
        public function update_woo_actions_ajax()
        {
        }
        /**
         * Call the actions after order review ajax call.
         *
         * @param string $post_data post data woo.
         */
        public function after_the_order_review_ajax_call($post_data)
        {
        }
        /**
         * Modify WooCommerce paypal arguments.
         *
         * @param array    $args argumenets for payment.
         * @param WC_Order $order order data.
         * @return array
         */
        public function modify_paypal_args($args, $order)
        {
        }
        /**
         * Elementor editor compatibility.
         */
        public function elementor_editor_compatibility()
        {
        }
        /**
         * Gutenburg editor compatibility.
         */
        public function gutenberg_editor_compatibility()
        {
        }
        /**
         * Function for bb editor compatibility.
         */
        public function bb_editor_compatibility()
        {
        }
        /**
         * Change PayPal Express cancel URL.
         *
         * @param array  $data button data.
         * @param string $page current page.
         * @return array $data modified button data with new cancel url.
         */
        public function change_return_cancel_url($data, $page)
        {
        }
        /**
         * Modify order review section.
         *
         * @param string $product_name product name.
         * @param object $cart_item cart item.
         * @param string $cart_item_key cart item key.
         * @return string
         */
        public function modify_order_review_item_summary($product_name, $cart_item, $cart_item_key)
        {
        }
        /**
         * Change order button text .
         *
         * @param string $button_text place order.
         * @return string
         */
        public function place_order_button_text($button_text)
        {
        }
        /**
         * Display all WooCommerce notices.
         *
         * @since 1.1.5
         */
        public function display_woo_notices()
        {
        }
        /**
         * Check for checkout flag
         *
         * @param bool $is_checkout is checkout.
         *
         * @return bool
         */
        public function woo_checkout_flag($is_checkout)
        {
        }
        /**
         * Render checkout shortcode markup.
         *
         * @param array $atts attributes.
         * @return string
         */
        public function checkout_shortcode_markup($atts)
        {
        }
        /**
         * Configure Cart Data.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function preconfigured_cart_data()
        {
        }
        /**
         * Set the cookie to identify the active checkout.
         *
         * @param int $checkout_id Current page ID.
         *
         * @return void
         */
        public function set_active_checkout_cookie_data($checkout_id)
        {
        }
        /**
         * Load shortcode data.
         *
         * @return void
         */
        public function shortcode_load_data()
        {
        }
        /**
         * Render checkout ID hidden field.
         *
         * @return void
         */
        public function before_checkout_shortcode_actions()
        {
        }
        /**
         * Change checkout text.
         */
        public function update_the_checkout_strings()
        {
        }
        /**
         * Change Payment text .
         *
         * @param string $text Payment.
         * @return string
         */
        public function update_payment_text($text)
        {
        }
        /**
         * Change Your order text.
         *
         * @param string $text Your order.
         * @return string
         */
        public function update_your_order_text($text)
        {
        }
        /**
         * Change ship to diff address text .
         *
         * @param string $text ship to diff address.
         * @return string
         */
        public function update_shipping_text($text)
        {
        }
        /**
         * Change billing details text .
         *
         * @param string $text billing details.
         * @return string
         */
        public function update_billing_text($text)
        {
        }
        /**
         * Change customer information text .
         *
         * @param string $text customer information.
         * @return string
         */
        public function update_customer_info_text($text)
        {
        }
        /**
         * Get checkout id.
         */
        public function get_checkout_id()
        {
        }
        /**
         * Checkout fields actions.
         *
         * @param array $checkout_fields checkout fields.
         * @since 1.10.0
         */
        public function checkout_fields_actions($checkout_fields)
        {
        }
        /**
         * Prefill the checkout fields if available in url.
         *
         * @param array $checkout_fields checkout fields array.
         */
        public function prefill_checkout_fields($checkout_fields)
        {
        }
        /**
         * Render checkout ID hidden field.
         *
         * @param array $checkout checkout session data.
         * @return void
         */
        public function checkout_shortcode_post_id($checkout)
        {
        }
        /**
         * Load shortcode scripts.
         *
         * @return void
         */
        public function shortcode_scripts()
        {
        }
        /**
         * Load compatibility scripts.
         *
         * @return void
         */
        public function compatibility_scripts()
        {
        }
        /**
         * Generate styles.
         *
         * @return string
         */
        public function generate_style()
        {
        }
        /**
         * Save checkout fields.
         *
         * @param int   $order_id order id.
         * @param array $posted posted data.
         * @return void
         */
        public function save_checkout_fields($order_id, $posted)
        {
        }
        /**
         * Enable Logo In Header Of Checkout Page
         *
         * @return void
         */
        public function enable_logo_in_header()
        {
        }
        /**
         * Add text to the bootom of the checkout page.
         *
         * @return void
         */
        public function show_cartflows_copyright_message()
        {
        }
        /**
         * Redirect users to our checkout if hidden param
         *
         * @param string $redirect redirect url.
         * @param object $user user.
         * @return string
         */
        public function after_login_redirect($redirect, $user)
        {
        }
        /**
         * Display coupon code field after review order fields.
         */
        public function display_custom_coupon_field()
        {
        }
        /**
         * Apply filter to change class of remove coupon field.
         *
         * @param string $coupon coupon.
         * @return string
         */
        public function remove_coupon_text($coupon)
        {
        }
        /**
         * Apply filter to change the placeholder text of coupon field.
         *
         * @return string
         */
        public function coupon_field_placeholder()
        {
        }
        /**
         * Apply filter to change the button text of coupon field.
         *
         * @return string
         */
        public function coupon_button_text()
        {
        }
        /**
         * Added ajax nonce to localize variable.
         *
         * @param array $vars localize variables.
         */
        public function add_localize_vars($vars)
        {
        }
        /**
         * Calculate discount for product.
         *
         * @param string $discount_coupon discount coupon.
         * @param string $discount_type discount type.
         * @param int    $discount_value discount value.
         * @param int    $_product_price product price.
         * @return int
         * @since 1.1.5
         */
        public function calculate_discount($discount_coupon, $discount_type, $discount_value, $_product_price)
        {
        }
        /**
         * Preserve the custom item price added by Variations & Quantity feature
         *
         * @param array $cart_object cart object.
         * @since 1.0.0
         */
        public function custom_price_to_cart_item($cart_object)
        {
        }
        /**
         * Get random product for test mode.
         */
        public function get_random_products()
        {
        }
        /**
         * Change the Shipping error messages HTML
         *
         * @param string $message shipping message.
         *
         * @return string
         */
        public function change_shipping_message_html($message)
        {
        }
        /**
         * Update cart total on button and order review mobile sction.
         *
         * @param string $fragments shipping message.
         *
         * @return array $fragments updated Woo fragments.
         */
        public function add_updated_cart_price($fragments)
        {
        }
        /**
         * Array of order review toggler text.
         *
         * @param string $text array key to get specific value.
         *
         * @return string
         */
        public function get_order_review_toggle_texts($text = 'show_text')
        {
        }
        /**
         * Get WC shipping methods HTML for modern Checkout.
         */
        public function wcf_cart_totals_shipping_html()
        {
        }
        /**
         * Get WC order review table HTML for modern Checkout.
         */
        public function wcf_order_review()
        {
        }
        /**
         * Check for the CartFlows coupon field is enabled or disabled.
         */
        public function is_custom_coupon_field_enabled()
        {
        }
    }
    /**
     * Modern Checkout
     */
    class Cartflows_Modern_Checkout
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Modern Checkout Layout Actions.
         *
         * @param int $checkout_id checkout ID.
         * @since 1.10.0
         */
        public function modern_checkout_layout_actions($checkout_id)
        {
        }
        /**
         * Return true if checkout layout skin is conditional checkout.
         *
         * @param int $checkout_id Checkout ID.
         *
         * @return bool
         */
        public function is_modern_checkout_layout($checkout_id = '')
        {
        }
        /**
         * Add Customer Information Section.
         *
         * @param int $checkout_id checkout ID.
         *
         * @return void
         */
        public function customer_info_parent_wrapper_start($checkout_id)
        {
        }
        /**
         * Add Custom Email Field.
         *
         * @return void
         */
        public function add_custom_billing_email_field()
        {
        }
        /**
         * Display Payment heading field after coupon code fields.
         */
        public function display_custom_payment_heading()
        {
        }
        /**
         * Add closing wrapper to customer info and shipping section.
         *
         * @param int $checkout_id Checkout ID.
         *
         * @return void
         */
        public function customer_info_parent_wrapper_close($checkout_id)
        {
        }
        /**
         * Customized order review section used to display in modern checkout responsive devices.
         *
         * @return void
         */
        public function add_custom_collapsed_order_review_table()
        {
        }
        /**
         * Prefill the checkout fields if available in url.
         *
         * @param array $checkout_fields checkout fields array.
         */
        public function unset_fields_for_modern_checkout($checkout_fields)
        {
        }
    }
    /**
     * Global Checkout
     *
     * @since 1.0.0
     */
    class Cartflows_Checkout_Ajax
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Get ajax end points.
         *
         * @param string $endpoint_url end point URL.
         * @param string $request end point request.
         * @return string
         */
        public function get_ajax_endpoint($endpoint_url, $request)
        {
        }
        /**
         * Apply coupon on submit of custom coupon form.
         */
        public function apply_coupon()
        {
        }
        /**
         * Remove coupon.
         */
        public function remove_coupon()
        {
        }
        /**
         * Remove cart item.
         */
        public function wcf_woo_remove_cart_product()
        {
        }
        /**
         * Check email exist.
         */
        public function check_email_exists()
        {
        }
        /**
         * Check email exist.
         */
        public function woocommerce_user_login()
        {
        }
    }
    /**
     * Class Cartflows_Checkout_Fields.
     */
    class Cartflows_Checkout_Fields
    {
        /**
         * Checkout ID
         *
         * @var checkout_id
         */
        public static $cached_checkout_id = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Trigger action on init.
         */
        public function init_actions()
        {
        }
        /**
         * Trigger action on wp.
         */
        public function wp_actions()
        {
        }
        /**
         *  Add frontend scripts.
         */
        public function add_frontend_scripts()
        {
        }
        /**
         * Add localize variables.
         *
         * @param int $checkout_id Checkout id.
         */
        public function add_frontend_localize_optimized_scripts($checkout_id)
        {
        }
        /**
         * Trigger actions.
         */
        public function checkout_field_actions()
        {
        }
        /**
         * Prepare default country locale.
         *
         * @param array $fields country locale fields.
         * @return array
         */
        public function woo_default_address_fields($fields)
        {
        }
        /**
         * Set locale fields.
         *
         * @param string $field_name field name.
         * @return bool
         */
        public function is_locale_field($field_name)
        {
        }
        /**
         * Additional fields customization.
         *
         * @param array $fields fields.
         *
         * @return array fields
         */
        public function additional_fields_customization($fields)
        {
        }
        /**
         * Prepare country locale.
         *
         * @param array $fields country locale fields.
         * @return array
         */
        public function prepare_country_locale($fields)
        {
        }
        /**
         * Billing field customization.
         *
         * @param array  $fields fields data.
         * @param string $country country name.
         * @return array
         */
        public function billing_fields_customization($fields, $country)
        {
        }
        /**
         * Shipping field customization.
         *
         * @param array  $fields fields data.
         * @param string $country country name.
         * @return array
         */
        public function shipping_fields_customization($fields, $country)
        {
        }
        /**
         * Prepare address fields.
         *
         * @param array  $fieldset fieldset data.
         * @param string $country country name.
         * @param int    $checkout_id checkout ID.
         * @param bool   $original_fieldset is original fieldset.
         * @param string $type address type.
         *
         * @return array
         */
        public function prepare_address_fields($fieldset, $country, $checkout_id, $original_fieldset = \false, $type = 'billing')
        {
        }
        /**
         * Prepare checkout fields.
         *
         * @param array $fields fields data.
         * @param bool  $original_fields is original fields.
         * @param int   $checkout_id checkout ID.
         * @return array
         */
        public function prepare_checkout_fields_lite($fields, $original_fields, $checkout_id)
        {
        }
        /**
         * Get checkout id based on condition.
         *
         * @return int|bool
         */
        public function get_conditional_checkout_id()
        {
        }
        /**
         * Change order comments placeholder and label, and set billing phone number to not required.
         *
         * @param array $fields checkout fields.
         * @return array
         */
        public function label_skins_fields_customization($fields)
        {
        }
        /**
         * Add custom class to the fields to change the UI to three column.
         *
         * @param array $fields fields.
         *
         * @return array
         */
        public function add_three_column_layout_fields($fields)
        {
        }
        /**
         * Optimize coupon field.
         *
         * @param array $coupon_field coupon fields.
         * @return mixed
         */
        public function optimize_coupon_field($coupon_field)
        {
        }
        /**
         * Show/Hide coupon field on checkout page
         *
         * @param bool $is_field true.
         *
         * @return bool
         */
        public function show_hide_coupon_field_on_checkout($is_field)
        {
        }
    }
    /**
     * Global Checkout
     *
     * @since 1.0.0
     */
    class Cartflows_Global_Checkout
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Update the checkout page link for global checkout.
         *
         * @since 1.10.0
         */
        public function update_checkout_link_for_global_checkout()
        {
        }
        /**
         * Override global checkout page
         *
         * @since 1.10.0
         */
        public function override_global_checkout()
        {
        }
        /**
         * Redirect from default to the global checkout page
         *
         * @since 1.10.0
         */
        public function global_checkout_template_redirect()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Checkout
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Class Cartflows_Gb_Helper.
     */
    final class Cartflows_Gb_Helper
    {
        /**
         * Member Variable
         *
         * @since 1.6.15
         * @var instance
         */
        public static $block_list;
        /**
         * Current Block List
         *
         * @since 1.6.15
         * @var current_block_list
         */
        public static $current_block_list = array();
        /**
         * Page Blocks Variable
         *
         * @since 1.6.15
         * @var instance
         */
        public static $page_blocks;
        /**
         * Stylesheet
         *
         * @since 1.6.15
         * @var stylesheet
         */
        public static $stylesheet;
        /**
         * Script
         *
         * @since 1.6.15
         * @var script
         */
        public static $script;
        /**
         * Cartflows Block Flag
         *
         * @since 1.6.15
         * @var cf_flag
         */
        public static $cf_flag = \false;
        /**
         * Google fonts to enqueue
         *
         * @var array
         */
        public static $gfonts = array();
        /**
         *  Initiator
         *
         * @since 1.6.15
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * WP Actions.
         */
        public function wp_actions()
        {
        }
        /**
         * Load the front end Google Fonts.
         */
        public function frontend_gfonts()
        {
        }
        /**
         * Print the Script in footer.
         */
        public function print_script()
        {
        }
        /**
         * Print the Stylesheet in header.
         */
        public function print_stylesheet()
        {
        }
        /**
         * Generates stylesheet and appends in head tag.
         *
         * @since 1.6.15
         */
        public function generate_assets()
        {
        }
        /**
         * Generates stylesheet in loop.
         *
         * @param object $this_post Current Post Object.
         * @since 1.6.15
         */
        public function get_generated_stylesheet($this_post)
        {
        }
        /**
         * Enqueue Gutenberg block assets for both frontend + backend.
         *
         * @since 1.6.15
         */
        public function block_assets()
        {
        }
        /**
         * Parse Guten Block.
         *
         * @param string $content the content string.
         * @since 1.6.15
         */
        public function parse($content)
        {
        }
        /**
         * Generates stylesheet for reusable blocks.
         *
         * @param array $blocks Blocks array.
         * @since 1.6.15
         */
        public function get_assets($blocks)
        {
        }
        /**
         * Get Typography Dynamic CSS.
         *
         * @param  array  $attr The Attribute array.
         * @param  string $slug The field slug.
         * @param  string $selector The selector array.
         * @param  array  $combined_selectors The combined selector array.
         * @since  1.6.15
         * @return bool|string
         */
        public static function get_typography_css($attr, $slug, $selector, $combined_selectors)
        {
        }
        /**
         * Get CSS value
         *
         * Syntax:
         *
         *  get_css_value( VALUE, UNIT );
         *
         * E.g.
         *
         *  get_css_value( VALUE, 'em' );
         *
         * @param string $value  CSS value.
         * @param string $unit  CSS unit.
         * @since 1.6.15
         */
        public static function get_css_value($value = '', $unit = '')
        {
        }
        /**
         * Parse CSS into correct CSS syntax.
         *
         * @param array  $combined_selectors The combined selector array.
         * @param string $id The selector ID.
         * @since 1.6.15
         */
        public static function generate_all_css($combined_selectors, $id)
        {
        }
        /**
         * Parse CSS into correct CSS syntax.
         *
         * @param array  $selectors The block selectors.
         * @param string $id The selector ID.
         * @since 1.6.15
         */
        public static function generate_css($selectors, $id)
        {
        }
        /**
         * Adds Google fonts all blocks.
         *
         * @param array $load_google_font the blocks attr.
         * @param array $font_family the blocks attr.
         * @param array $font_weight the blocks attr.
         * @param array $font_subset the blocks attr.
         */
        public static function blocks_google_font($load_google_font, $font_family, $font_weight, $font_subset)
        {
        }
        /**
         * Generates CSS recurrsively.
         *
         * @param object $block The block object.
         * @since 1.6.15
         */
        public function get_block_css_and_js($block)
        {
        }
        /**
         * Border attribute generation Function.
         *
         * @since 2.0.0-beta.3
         * @param  array $prefix   Attribute Prefix.
         * @param array $default_args  default attributes args.
         * @return array
         */
        public function generate_php_border_attribute($prefix, $default_args = array())
        {
        }
        /**
         * Generate advanced settings clsses.
         *
         * @param  array $attributes Blocks Attribute.
         * @return array
         */
        public function generate_advanced_setting_classes($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Block_Loader.
     */
    final class Cartflows_Block_Loader
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Loads plugin files.
         *
         * @since 1.6.15
         *
         * @return void
         */
        public function load_plugin()
        {
        }
    }
    /**
     * Cartflows_Init_Blocks.
     *
     * @package Cartflows
     */
    class Cartflows_Init_Blocks
    {
        /**
         * Store Json variable
         *
         * @since 1.8.1
         * @var instance
         */
        public static $icon_json;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Renders the Order Detail Form shortcode.
         *
         * @since 1.6.15
         */
        public function order_detail_form_shortcode()
        {
        }
        /**
         * Renders the Order Checkout Form shortcode.
         *
         * @since 1.6.15
         */
        public function order_checkout_form_shortcode()
        {
        }
        /**
         * Renders the Optin Form shortcode.
         *
         * @since 1.6.15
         */
        public function optin_form_shortcode()
        {
        }
        /**
         * Enqueue Gutenberg block assets for both frontend + backend.
         *
         * @since 1.6.15
         */
        public function block_assets()
        {
        }
        /**
         * Enqueue assets for both backend.
         *
         * @since 1.6.15
         */
        public function editor_assets()
        {
        }
        /**
         * Maybe show product options.
         *
         * @param int $step_id step id.
         * @return bool
         */
        public function maybe_show_product_options_for_store_checkout($step_id)
        {
        }
        /**
         * Get Json Data.
         *
         * @since 1.8.1
         * @return Array
         */
        public function backend_load_font_awesome_icons()
        {
        }
        /**
         * Gutenberg block category for WCFB.
         *
         * @param array  $categories Block categories.
         * @param object $post Post object.
         * @since 1.6.15
         */
        public function register_block_category($categories, $post)
        {
        }
    }
    /**
     * Class Cartflows_Block_Config.
     */
    class Cartflows_Block_Config
    {
        /**
         * Block Attributes
         *
         * @var block_attributes
         */
        public static $block_attributes = \null;
        /**
         * Block Assets
         *
         * @var block_attributes
         */
        public static $block_assets = \null;
        /**
         * Get Widget List.
         *
         * @since 1.6.15
         *
         * @return array The Widget List.
         */
        public static function get_block_attributes()
        {
        }
        /**
         * Get Block Assets.
         *
         * @since 1.6.15
         *
         * @return array The Asset List.
         */
        public static function get_block_assets()
        {
        }
        /**
         * Border attribute generation Function.
         *
         * @since 2.0.0-beta.3
         * @param  array $prefix   Attribute Prefix.
         * @param array $default_args  default attributes args.
         * @return array
         */
        public static function generate_border_attribute($prefix, $default_args = array())
        {
        }
    }
    /**
     * Class for Spectra compatibility
     */
    class Cartflows_Spectra_Compatibility
    {
        /**
         * Initiator
         *
         * @since 1.5.7
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.5.7
         */
        public function __construct()
        {
        }
        /**
         * Clear theme cached CSS if required.
         */
        public function spectra_editor_assets()
        {
        }
    }
    /**
     * Class Cartflows_Block_Helper.
     */
    class Cartflows_Block_Helper
    {
        /**
         * Get Next Step Button CSS
         *
         * @since 1.6.15
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_next_step_button_css($attr, $id)
        {
        }
        /**
         * Get Order Detail Form Block CSS
         *
         * @since 1.6.15
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_order_detail_form_css($attr, $id)
        {
        }
        /**
         * Get Checkout form CSS
         *
         * @since 1.6.15
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_checkout_form_css($attr, $id)
        {
        }
        /**
         * Get Optin Form Block CSS
         *
         * @since 1.6.15
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_optin_form_css($attr, $id)
        {
        }
        /**
         * Border CSS generation Function.
         *
         * @since 2.0.0-beta.3
         * @param  array  $attr   Attribute List.
         * @param  string $prefix Attribuate prefix .
         * @param  string $device Responsive.
         * @return array         border css array.
         */
        public static function generate_border_css($attr, $prefix, $device = 'desktop')
        {
        }
        /**
         * Get CSS value
         *
         * Syntax:
         *
         *  get_css_value( VALUE, UNIT );
         *
         * E.g.
         *
         *  get_css_value( VALUE, 'em' );
         *
         * @param string $value  CSS value.
         * @param string $unit  CSS unit.
         * @since 1.13.4
         */
        public static function get_css_value($value = '', $unit = '')
        {
        }
        /**
         * Deprecated Border CSS generation Function.
         *
         * @since 2.0.0-beta.3
         * @param  array  $current_css   Current style list.
         * @param  string $border_width   Border Width.
         * @param  string $border_radius Border Radius.
         * @param  string $border_color Border Color.
         * @param string $border_style Border Style.
         */
        public static function generate_deprecated_border_css($current_css, $border_width, $border_radius, $border_color = '', $border_style = '')
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.6.15
     */
    class Cartflows_Gutenberg_Editor
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int    $post_ID step id.
         * @param object $post post data.
         * @param bool   $update is updated.
         */
        public function update_required_step_meta_data($post_ID, $post, $update)
        {
        }
        /**
         * Get the block data.
         *
         * @param array  $elements elements data.
         * @param string $slug widget name.
         */
        public function gutenberg_find_block_recursive($elements, $slug = 'wcfb/checkout-form')
        {
        }
        /**
         * Gutenburg editor compatibility.
         */
        public function gutenberg_editor_compatibility()
        {
        }
        /**
         * Before checkout shortcode actions.
         */
        public function maybe_init_cart()
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int $checkout_id checkout id.
         */
        public function before_gb_checkout_shortcode_actions($checkout_id)
        {
        }
        /**
         * Before optin shortcode actions.
         *
         * @param int $checkout_id checkout id.
         */
        public function before_gb_optin_shortcode_actions($checkout_id)
        {
        }
    }
    /**
     * Class Cartflows_Block_JS.
     */
    class Cartflows_Block_JS
    {
        /**
         * Adds Google fonts for Next Step Button.
         *
         * @since 1.6.15
         * @param array $attr the blocks attr.
         */
        public static function blocks_next_step_button_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Order Detail Form block.
         *
         * @since 1.6.15
         * @param array $attr the blocks attr.
         */
        public static function blocks_order_detail_form_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for checkout form.
         *
         * @since 1.6.15
         * @param array $attr the blocks attr.
         */
        public static function blocks_checkout_form_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Optin Form block.
         *
         * @since 1.6.15
         * @param array $attr the blocks attr.
         */
        public static function blocks_optin_form_gfont($attr)
        {
        }
    }
    /**
     * Class WCFB_Order_Detail_Form.
     */
    class WCFB_Order_Detail_Form
    {
        /**
         * Settings
         *
         * @since 1.6.15
         * @var object $settings
         */
        public static $settings;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Registers the `core/latest-posts` block on server.
         *
         * @since 1.6.15
         */
        public function register_blocks()
        {
        }
        /**
         * Render Order Detail Form HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.15
         */
        public function render_html($attributes)
        {
        }
        /**
         * Dynamic options of elementor and add filters.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters($attributes)
        {
        }
    }
    /**
     * Class WCFB_Checkout_Form.
     */
    class WCFB_Checkout_Form
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Registers the `core/latest-posts` block on server.
         *
         * @since 0.0.1
         */
        public function register_blocks()
        {
        }
        /**
         * Render CF HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.15
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class WCFB_Optin_Form.
     */
    class WCFB_Optin_Form
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Registers the `core/latest-posts` block on server.
         *
         * @since 1.6.15
         */
        public function register_blocks()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.15
         * @var object $settings
         */
        public static $settings;
        /**
         * Render Optin Detail Form HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.15
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Optin Form Module for Beaver Builder
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Optin_Form extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         *
         * @method __construct
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @method get_icons
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Dynamic options of module and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
        /**
         * Function to get skin types.
         *
         * @since 1.6.15
         * @access public
         */
        public static function get_skin_types()
        {
        }
    }
    /**
     * This class initializes BB Ultiamte Addon Helper
     *
     * @class Cartflows_BB_Helper
     */
    class Cartflows_BB_Helper
    {
        /**
         * Current step type var
         *
         * @since 1.6.15
         * @var object $step_type
         */
        public static $step_type;
        /**
         * Get current post step type
         *
         * @since 1.6.15
         * @var function cartflows_bb_step_type
         */
        public static function cartflows_bb_step_type()
        {
        }
        /**
         * Initializes an array to replace recursive function
         *
         * @param var   $color returns the bas values.
         *
         * @param array $opacity returns the replacements values.
         * @param array $is_array returns the replacements values.
         */
        public static function cartflows_bb_hex2rgba($color, $opacity = \false, $is_array = \false)
        {
        }
        /**
         * Initializes an array to replace recursive function
         *
         * @param var   $settings returns the bas values.
         *
         * @param array $name returns the replacements values.
         * @param array $opc returns the replacements values.
         */
        public static function cartflows_bb_colorpicker($settings, $name = '', $opc = \false)
        {
        }
        /**
         * Provide option to parse a color code.
         *
         * @param var $code Returns a hex value for color from rgba or #hex color.
         * @return string - hex value for the color
         */
        public static function cartflows_bb_parse_color_to_hex($code = '')
        {
        }
        /**
         * Check for the Beaver Builder's setting page.
         *
         * @since 1.6.x
         * @var function wcf_is_bb_setting_page
         */
        public static function wcf_is_bb_setting_page()
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Editor
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Beaver Builder editor compatibility.
         */
        public function bb_editor_compatibility()
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int    $post_id step id.
         * @param bool   $publish is published.
         * @param object $layout_data post data.
         * @param object $settings settings data.
         */
        public function update_required_step_meta_data($post_id, $publish, $layout_data, $settings)
        {
        }
        /**
         * Before checkout shortcode actions.
         *
         * @param int $checkout_id checkout id.
         */
        public function before_checkout_shortcode_actions($checkout_id)
        {
        }
    }
    /**
     * Checkout Form Module for Beaver Builder
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Checkout_Form extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         *
         * @method __construct
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @method get_icons
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Dynamic options of module and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
        /**
         * Function to get layout types.
         *
         * @since 1.6.15
         * @access public
         */
        public static function get_layout_types()
        {
        }
        /**
         * Function to get skin types.
         *
         * @since 1.6.15
         * @access public
         */
        public static function get_skin_types()
        {
        }
    }
    /**
     * Next Step button Module for Beaver Builder
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Next_Step extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         *
         * @method __construct
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @method get_icons
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Function that gets the class names.
         *
         * @method get_classname
         */
        public function get_classname()
        {
        }
        /**
         * Function that gets the button styling.
         *
         * @method get_button_style
         */
        public function get_button_style()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Modules_Loader
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Function that initializes init function
         *
         * @since 1.6.15
         */
        public function init()
        {
        }
        /**
         * Returns Script array.
         *
         * @return array()
         * @since 1.6.15
         */
        public static function get_module_list()
        {
        }
        /**
         * Include Widgets files
         *
         * Load widgets files
         *
         * @since 1.6.15
         * @access public
         */
        public function include_modules_files()
        {
        }
        /**
         * Register the modules.
         *
         * Register modules early to disply them on options page
         *
         * @since 1.6.15
         * @access public
         */
        public function register_modules()
        {
        }
        /**
         * Get Module files
         *
         * @since 1.6.15
         * @access public
         */
        public function get_module_files()
        {
        }
    }
    /**
     * Order details Form Module for Beaver Builder
     *
     * @since 1.6.15
     */
    class Cartflows_BB_Order_Details_Form extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         *
         * @method __construct
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @method get_icons
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Dynamic options of module and add filters.
         *
         * @since 1.6.15
         */
        public function dynamic_option_filters()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Thankyou
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Thankyou_Meta_Data extends \Cartflows_Step_Meta_Base
    {
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Page Header Tabs
         *
         * @param  int   $step_id Post ID.
         * @param  array $options Post meta.
         */
        public function get_settings($step_id, $options = array())
        {
        }
        /**
         * Get design settings data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_design_fields($step_id)
        {
        }
        /**
         * Get settings fields.
         *
         * @param  int $step_id Post ID.
         */
        public function get_settings_fields($step_id)
        {
        }
        /**
         * Get data.
         *
         * @param  int $step_id Post ID.
         */
        public function get_data($step_id)
        {
        }
        /**
         * Get meta.
         *
         * @param int $post_id Post ID.
         */
        public static function get_meta_option($post_id)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Thankyou_Markup
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Restrict users to access the thank you page directly.
         */
        public function secure_thank_you_page()
        {
        }
        /**
         *  Redirect to custom url instead of thank you page.
         */
        public function redirect_tq_page_to_custom_url()
        {
        }
        /**
         * Order shortcode markup
         *
         * @param array $atts attributes.
         * @since 1.0.0
         */
        public function cartflows_order_details_shortcode_markup($atts)
        {
        }
        /**
         * Load Thank You scripts.
         *
         * @return void
         */
        public function thank_you_scripts()
        {
        }
        /**
         * Load DIVI compatibility Thank You style.
         *
         * @return void
         */
        public function add_divi_compatibility_css()
        {
        }
        /**
         * Set thank you as a order received page.
         *
         * @param boolean $is_order_page order page.
         * @return boolean
         */
        public function set_order_received_page($is_order_page)
        {
        }
        /**
         * Generate Thank You Styles.
         *
         * @return string
         */
        public function generate_thank_you_style()
        {
        }
        /**
         * Generate CSS for hide/show the order sections on the thank you page.
         *
         * @param string $output Already generated CSS.
         * @param array  $hide_show_settings Enable/disable sections setting of thank page.
         *
         * @return string $output Modified CSS
         */
        public function get_section_hide_show_css($output, $hide_show_settings)
        {
        }
        /**
         * Set as a checkout page if it is thank you page.
         * Thank you page need to be set as a checkout page.
         * Becauye ayment gateways will not load if it is not checkout.
         *
         * @param bool $is_checkout is checkout.
         *
         * @return bool
         */
        public function woo_checkout_flag($is_checkout)
        {
        }
        /**
         *  Add custom text on thank you page.
         *
         * @param string $woo_text Default text.
         * @param int    $order order.
         */
        public function custom_tq_text($woo_text, $order)
        {
        }
    }
}
namespace {
    /**
     * Fatal error mb_strpos fallback.
     *
     * @param string $string string where to find.
     * @param string $search string to search.
     * @since 1.0.0
     */
    function wcf_mb_strpos($string, $search)
    {
    }
    /**
     * Check if cartflows pro activated.
     *
     * @since 1.0.0
     */
    function _is_cartflows_pro()
    {
    }
    /**
     * Check if cartflows pro's license is been activated.
     *
     * @since 1.11.8
     */
    function _is_cartflows_pro_license_activated()
    {
    }
    /**
     * Returns pro version number.
     *
     * @param int $version version number.
     * @since 1.0.0
     */
    function _is_cartflows_pro_ver_less_than($version)
    {
    }
    /**
     * Returns step id.
     *
     * @since 1.0.0
     */
    function _get_wcf_post_id()
    {
    }
    /**
     * Returns step id.
     *
     * @since 1.0.0
     */
    function _get_wcf_step_id()
    {
    }
    /**
     * Check if it is a landing page?
     *
     * @since 1.0.0
     */
    function _is_wcf_landing_type()
    {
    }
    /**
     * Returns landing id.
     *
     * @since 1.0.0
     */
    function _get_wcf_landing_id()
    {
    }
    /**
     * Is custom checkout?
     *
     * @param int $checkout_id checkout ID.
     * @since 1.0.0
     */
    function _is_wcf_meta_custom_checkout($checkout_id)
    {
    }
    /**
     * Check if page is cartflow checkout.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_checkout_type()
    {
    }
    /**
     * Check if AJAX call is in progress.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_doing_checkout_ajax()
    {
    }
    /**
     * Check if optin AJAX call is in progress.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_doing_optin_ajax()
    {
    }
    /**
     * Returns checkout ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_checkout_id()
    {
    }
    /**
     * Check if it is checkout shortcode.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_checkout_shortcode()
    {
    }
    /**
     * Check if it is checkout shortcode.
     *
     * @since 1.0.0
     * @param string $content shortcode content.
     * @return bool
     */
    function _get_wcf_checkout_id_from_shortcode($content = '')
    {
    }
    /**
     * Check if post type is upsell.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_upsell_type()
    {
    }
    /**
     * Returns upsell ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_upsell_id()
    {
    }
    /**
     * Check if post is of type downsell.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _is_wcf_downsell_type()
    {
    }
    /**
     * Get downsell page ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_downsell_id()
    {
    }
    /**
     * Check if page is of thank you type.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _is_wcf_thankyou_type()
    {
    }
    /**
     * Get thank you page ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_thankyou_id()
    {
    }
    /**
     * Check if post type is upsell.
     *
     * @since 1.0.0
     * @return bool
     */
    function _is_wcf_base_offer_type()
    {
    }
    /**
     * Returns upsell ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_base_offer_id()
    {
    }
    /**
     * Check if page is of optin type.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _is_wcf_optin_type()
    {
    }
    /**
     * Get optin page ID.
     *
     * @since 1.0.0
     * @return int/bool
     */
    function _get_wcf_optin_id()
    {
    }
    /**
     * Define a constant if it is not already defined.
     *
     * @since 3.0.0
     * @param string $name  Constant name.
     * @param mixed  $value Value.
     */
    function wcf_maybe_define_constant($name, $value)
    {
    }
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
     */
    function wp_body_open()
    {
    }
    /**
     * Check if type is optin by id.
     *
     * @param int $post_id post id.
     *
     * @return int/bool
     * @since 1.0.0
     */
    function _wcf_check_is_optin_by_id($post_id)
    {
    }
    /**
     * Supported Page Template
     *
     * @param string $page_template current page template.
     *
     * @return int/bool
     * @since 1.5.7
     */
    function _wcf_supported_template($page_template)
    {
    }
    /**
     * Display design Metabox Notice.
     *
     * @return string
     * @since 1.6.15
     */
    function wcf_get_page_builder_notice()
    {
    }
    /**
     * Get step type.
     *
     * @param int $post_id post id.
     *
     * @return bool|string
     * @since 1.0.0
     */
    function wcf_get_step_type($post_id)
    {
    }
    /**
     * Get get step object.
     *
     * @param int $step_id current step ID.
     * @since 1.5.9
     */
    function wcf_get_step($step_id)
    {
    }
    /**
     * Check auto-prefill checkout fields feature is enabled or not.
     *
     * @return boolean
     */
    function is_auto_prefill_checkout_fields_enabled()
    {
    }
    /**
     * Is starter plan.
     *
     * @return boolean
     */
    function is_wcf_starter_plan()
    {
    }
    /**
     * Is PRO plan.
     *
     * @return boolean
     */
    function is_wcf_pro_plan()
    {
    }
    /**
     * Show notice.
     *
     * @param string $title title.
     * @param string $message description.
     * @param string $classes classes.
     */
    function wcf_feature_notice($title, $message, $classes)
    {
    }
    /**
     * Get a specific property of an array without needing to check if that property exists.
     *
     * Provide a default value if you want to return a specific value if the property is not set.
     *
     * @param array  $array   Array from which the property's value should be retrieved.
     * @param string $prop    Name of the property to be retrieved.
     * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
     *
     * @return null|string|mixed The value
     */
    function wcf_get_prop($array, $prop, $default = \null)
    {
    }
    /**
     * Get global class.
     *
     * @return object
     */
    function wcf()
    {
    }
    /**
     * Is woocommerce plugin installed.
     *
     * @since 1.0.0
     *
     * @access public
     */
    function _is_woo_installed()
    {
    }
    /**
     * Cartlows Action Deprecated
     *
     * @since 1.1.1
     * @param string $tag         The name of the Action hook.
     * @param array  $args        Array of additional function arguments to be passed to apply_filters().
     * @param string $version     The version of WordPress that deprecated the hook.
     * @param string $replacement Optional. The hook that should have been used. Default false.
     * @param string $message     Optional. A message regarding the change. Default null.
     */
    function wcf_do_action_deprecated($tag, $args, $version, $replacement = \false, $message = \null)
    {
    }
    /**
     * Cartlows Apply Filters Deprecated
     *
     * @since 1.6.0
     * @param string $tag         The name of the Action hook.
     * @param array  $args        Array of additional function arguments to be passed to apply_filters().
     * @param string $version     The version of WordPress that deprecated the hook.
     * @param string $replacement Optional. The hook that should have been used. Default false.
     * @param string $message     Optional. A message regarding the change. Default null.
     */
    function wcf_apply_filters_deprecated($tag, $args, $version, $replacement = \false, $message = \null)
    {
    }
    /**
     * Get timezone string.
     *
     * @return string timezone string.
     * @since 1.0.0
     */
    function wp_timezone_string()
    {
    }
    /**
     * Registers this version of Action Scheduler.
     */
    function action_scheduler_register_3_dot_3_dot_0()
    {
    }
    /**
     * Initializes this version of Action Scheduler.
     */
    function action_scheduler_initialize_3_dot_3_dot_0()
    {
    }
    /**
     * Deprecated API functions for scheduling actions
     *
     * Functions with the wc prefix were deprecated to avoid confusion with
     * Action Scheduler being included in WooCommerce core, and it providing
     * a different set of APIs for working with the action queue.
     */
    /**
     * Schedule an action to run one time
     *
     * @param int $timestamp When the job will run
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @return string The job ID
     */
    function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int $timestamp When the first instance of the job will run
     * @param int $interval_in_seconds How long to wait between runs
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int $timestamp The schedule will start on or after this time
     * @param string $schedule A cron-link schedule string
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a job.
     *
     * @param string $hook The hook that the job will trigger
     * @param array $args Args that would have been passed to the job
     * @param string $group
     *
     * @deprecated 2.1.0
     */
    function wc_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * @param string $hook
     * @param array $args
     * @param string $group
     *
     * @deprecated 2.1.0
     *
     * @return int|bool The timestamp for the next occurrence, or false if nothing was found
     */
    function wc_next_scheduled_action($hook, $args = \NULL, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', or 'date'
     *        'order' => 'ASC'
     * @param string $return_format OBJECT, ARRAY_A, or ids
     *
     * @deprecated 2.1.0
     *
     * @return array
     */
    function wc_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * General API functions for scheduling actions
     */
    /**
     * Enqueue an action to run one time, as soon as possible
     *
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @return int The action ID.
     */
    function as_enqueue_async_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action to run one time
     *
     * @param int $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int $timestamp When the first instance of the job will run.
     * @param int $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int $base_timestamp The first instance of the action will be scheduled
     *        to run at a time calculated after this timestamp matching the cron
     *        expression. This can be used to delay the first instance of the action.
     * @param string $schedule A cron-link schedule string
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return int The action ID.
     */
    function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a scheduled action.
     *
     * While only the next instance of a recurring or cron action is unscheduled by this method, that will also prevent
     * all future instances of that recurring or cron action from being run. Recurring and cron actions are scheduled in
     * a sequence instead of all being scheduled at once. Each successive occurrence of a recurring action is scheduled
     * only after the former action is run. If the next instance is never run, because it's unscheduled by this function,
     * then the following instance will never be scheduled (or exist), which is effectively the same as being unscheduled
     * by this method also.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     *
     * @return string|null The scheduled action ID if a scheduled action was found, or null if no matching action found.
     */
    function as_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel all occurrences of a scheduled action.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     */
    function as_unschedule_all_actions($hook, $args = array(), $group = '')
    {
    }
    /**
     * Check if there is an existing action in the queue with a given hook, args and group combination.
     *
     * An action in the queue could be pending, in-progress or async. If the is pending for a time in
     * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
     * async action sitting in the queue waiting to be processed, in which case boolean true will be
     * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
     * boolean false will be the return value.
     *
     * @param string $hook
     * @param array $args
     * @param string $group
     *
     * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
     */
    function as_next_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Check if there is a scheduled action in the queue but more efficiently than as_next_scheduled_action().
     *
     * It's recommended to use this function when you need to know whether a specific action is currently scheduled
     * (pending or in-progress).
     *
     * @since x.x.x
     *
     * @param string $hook  The hook of the action.
     * @param array  $args  Args that have been passed to the action. Null will matches any args.
     * @param string $group The group the job is assigned to.
     *
     * @return bool True if a matching action is pending or in-progress, false otherwise.
     */
    function as_has_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', 'date' or 'none'
     *        'order' => 'ASC'
     *
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @return array
     */
    function as_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * Helper function to create an instance of DateTime based on a given
     * string and timezone. By default, will return the current date/time
     * in the UTC timezone.
     *
     * Needed because new DateTime() called without an explicit timezone
     * will create a date/time in PHP's timezone, but we need to have
     * assurance that a date/time uses the right timezone (which we almost
     * always want to be UTC), which means we need to always include the
     * timezone when instantiating datetimes rather than leaving it up to
     * the PHP default.
     *
     * @param mixed $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php.
     * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php.
     *
     * @return ActionScheduler_DateTime
     */
    function as_get_datetime_object($date_string = \null, $timezone = 'UTC')
    {
    }
    /**
     * Plugin Name: CartFlows
     * Plugin URI: https://cartflows.com/
     * Description: Create beautiful checkout pages & sales flows for WooCommerce.
     * Version: 1.11.9
     * Author: CartFlows Inc
     * Author URI: https://cartflows.com/
     * Text Domain: cartflows
     * WC requires at least: 3.0
     * WC tested up to: 7.3.0
     * Elementor tested up to: 3.10.0
     *
     * @package CartFlows
     */
    /**
     * Set constants.
     */
    \define('CARTFLOWS_FILE', __FILE__);
    \define('CARTFLOWS_FLOW_DIR', \CARTFLOWS_DIR . 'modules/flow/');
    \define('CARTFLOWS_FLOW_URL', \CARTFLOWS_URL . 'modules/flow/');
    \define('CARTFLOWS_OPTIN_DIR', \CARTFLOWS_DIR . 'modules/optin/');
    \define('CARTFLOWS_OPTIN_URL', \CARTFLOWS_URL . 'modules/optin/');
    \define('CARTFLOWS_WIDGETS_DIR', \CARTFLOWS_DIR . 'modules/widgets/');
    \define('CARTFLOWS_WIDGETS_URL', \CARTFLOWS_URL . 'modules/widgets/');
    \define('CARTFLOWS_LANDING_DIR', \CARTFLOWS_DIR . 'modules/landing/');
    \define('CARTFLOWS_LANDING_URL', \CARTFLOWS_URL . 'modules/landing/');
    /**
     * Flow
     *
     * @package CartFlows
     */
    \define('CARTFLOWS_WD_FLOW_DIR', \CARTFLOWS_DIR . 'modules/woo-dynamic-flow/');
    \define('CARTFLOWS_WD_FLOW_URL', \CARTFLOWS_URL . 'modules/woo-dynamic-flow/');
    \define('CARTFLOWS_CHECKOUT_DIR', \CARTFLOWS_DIR . 'modules/checkout/');
    \define('CARTFLOWS_CHECKOUT_URL', \CARTFLOWS_URL . 'modules/checkout/');
    /**
     * Frontend view
     *
     * @package cartflows
     */
    $data_settings = array();
    /**
     * Frontend view
     *
     * @package cartflows
     */
    $order_overview = $settings->show_order_overview ? $settings->show_order_overview : 'no';
    \define('CARTFLOWS_THANKYOU_DIR', \CARTFLOWS_DIR . 'modules/thankyou/');
    \define('CARTFLOWS_THANKYOU_URL', \CARTFLOWS_URL . 'modules/thankyou/');
}