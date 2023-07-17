<?php

namespace {
    /**
     * Class Cartflows_Pro_Tracking.
     */
    class Cartflows_Pro_Tracking
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
         * Update the cart data for add payment info event when order bump product is removed from cart.
         */
        public function update_cart_data_for_fb_event()
        {
        }
        /**
         * Add updated cart and product in Ajax response.
         *
         * @param integer $product_id product id.
         */
        public function trigger_fb_event($product_id)
        {
        }
        /**
         * Save the offer details in transient to use for facebook pixel.
         *
         * @param object $parent_order parent order id.
         * @param array  $offer_data offer product data.
         * @param object $child_order child order.
         */
        public function save_offer_data_for_fb($parent_order, $offer_data, $child_order = \null)
        {
        }
        /**
         * Save the offer details in transient to use for Google Analytics.
         *
         * @param object $parent_order parent order id.
         * @param array  $offer_data offer product data.
         * @param object $child_order child order.
         */
        public function save_offer_data_for_ga($parent_order, $offer_data, $child_order = \null)
        {
        }
        /**
         * Trigger the purchase event for the upsell/downsell offer.
         */
        public function trigger_offer_purchase_event()
        {
        }
        /**
         * Trigger the view content event for the upsell/downsell offer.
         *
         * @param array $params Facebook event parameters array.
         * @param int   $step_id current step ID.
         *
         * @return array
         */
        public function trigger_offer_viewcontent_event($params, $step_id)
        {
        }
        /**
         * Prepare view content data for fb response.
         *
         * @param array $params Facebook event parameters array.
         * @param int   $step_id current step id.
         *
         * @return array
         */
        public function prepare_viewcontent_data_fb_response($params, $step_id)
        {
        }
        /**
         * Trigger the purchase event for the upsell/downsell offer.
         */
        public function trigger_offer_purchase_event_for_ga()
        {
        }
        /**
         * Prepare the purchase event data for the facebook pixel.
         *
         * @param integer $order_id order id.
         * @param array   $offer_data offer data.
         */
        public function prepare_offer_purchase_data_fb_response($order_id, $offer_data)
        {
        }
        /**
         * Prepare the purchase event data for the google analytics.
         *
         * @param integer $order_id order id.
         * @param array   $offer_data offer data.
         */
        public function prepare_offer_purchase_data_ga_response($order_id, $offer_data)
        {
        }
        /**
         * Add updated cart and product in Ajax response.
         *
         * @param integer $product_id product id.
         */
        public function trigger_ga_add_to_cart_event($product_id)
        {
        }
        /**
         * Add updated cart and product in Ajax response.
         *
         * @param integer $product_id product id.
         */
        public function trigger_ga_remove_from_cart_event($product_id)
        {
        }
        /**
         * Prepare response for facebook.
         *
         * @param integer $product_id product id.
         * @return array
         */
        public function prepare_fb_response($product_id)
        {
        }
        /**
         * Prepare response for Google Analytics for Bump Order.
         *
         * @param integer $product_id product id.
         * @param array   $product_data product data.
         */
        public function prepare_ga_response($product_id, $product_data = array())
        {
        }
        /**
         * Get decimal of price.
         *
         * @param integer $price price.
         */
        public function format_number($price)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Utils.
     */
    class Cartflows_Pro_Utils
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Clone step by ID
         *
         * @param int $post_id    Step id.
         *
         * @return int|bool
         */
        public function clone_step($post_id)
        {
        }
        /**
         * We are using this function mostly in ajax on checkout page
         *
         * @param array $post_data post data.
         * @return bool
         */
        public function get_checkout_id_from_data($post_data)
        {
        }
        /**
         * We are using this function mostly in ajax on checkout page
         *
         * @param array $post_data post data.
         * @return bool
         */
        public function get_flow_id_from_data($post_data)
        {
        }
        /**
         * Fetch updated fragments after cart update.
         *
         * @param string $new_key product key.
         * @param array  $data extra data.
         * @return array.
         */
        public function get_fragments($new_key, $data = array())
        {
        }
        /**
         * Output the place order button on the checkout.
         */
        public function woocommerce_checkout_place_order_button()
        {
        }
        /**
         * Get offer data
         *
         * @param int $step_id step ID.
         * @param int $selected_product_id product ID.
         * @param int $input_qty qty.
         * @param int $order_id parent order id.
         * @return array
         */
        public function get_offer_data($step_id, $selected_product_id = '', $input_qty = '', $order_id = 0)
        {
        }
        /**
         * Get product price with tax.
         *
         * @param array $product product data.
         * @param int   $display_price product price.
         * @param int   $original_price original product price.
         */
        public function get_taxable_offer_product_price($product, $display_price, $original_price)
        {
        }
        /**
         * Check if reference transaction for paypal is enabled.
         *
         * @return bool
         */
        public function is_reference_transaction()
        {
        }
        /**
         * Check if offered product has zero value.
         *
         * @return bool
         */
        public function is_zero_value_offered_product()
        {
        }
        /**
         * Check if separate order.
         *
         * @return bool
         */
        public function is_separate_offer_order()
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
         * Apply coupon.
         *
         * @param string $discount_type discount type.
         * @param string $discount_coupon discount coupon.
         * @return int
         * @since 1.1.5
         */
        public function apply_discount_coupon($discount_type, $discount_coupon)
        {
        }
        /**
         * Calculate discount for product.
         *
         * @param string $discount_type discount type.
         * @param int    $discount_value discount value.
         * @param int    $product_price product price.
         * @return int
         * @since 1.1.5
         */
        public function get_calculated_discount($discount_type, $discount_value, $product_price)
        {
        }
        /**
         * Get selected product options.
         *
         * @param int   $checkout_id    Checkout id..
         * @param array $saved_product_options Saved product options.
         *
         * @return array
         */
        public function get_selected_product_options_data($checkout_id = '', $saved_product_options = array())
        {
        }
        /**
         * Get selected options, here get default variable variation product id based on default logic.
         *
         * @param int $product_id product id.
         *
         * @return array
         */
        public function get_variable_variation_product_id($product_id)
        {
        }
    }
    // Ignoring below rule as we need to find out the best to replace the already build cookie logic.
    //phpcs:disable WordPressVIPMinimum.Variables.RestrictedVariables.cache_constraints___COOKIE
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Session
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
         *  Get cookie path
         *
         * @return string cookiepath.
         */
        public function get_cookiepath()
        {
        }
        /**
         *  Set session
         *
         * @param int   $flow_id flow ID.
         * @param array $data trasient data.
         */
        public function set_session($flow_id, $data = array())
        {
        }
        /**
         *  Get session expiry time ( in minutes )
         *
         * @return int
         */
        public function get_session_expire_time()
        {
        }
        /**
         *  Update session
         *
         * @param int   $flow_id flow ID.
         * @param array $data trasient data.
         */
        public function update_session($flow_id, $data = array())
        {
        }
        /**
         *  Destroy session
         *
         * @param int $flow_id flow ID.
         */
        public function destroy_session($flow_id)
        {
        }
        /**
         *  Get session
         */
        public function get_session()
        {
        }
        /**
         *  Update transient data for cart flows.
         *
         * @param int   $flow_id flow ID.
         * @param array $data data.
         */
        public function update_data($flow_id, $data = array())
        {
        }
        /**
         *  Update transient data for cart flows.
         *
         * @param int $flow_id flow ID.
         * @return bool
         */
        public function get_data($flow_id)
        {
        }
        /**
         *  Check if session is active.
         *
         * @param int $flow_id flow ID.
         * @return bool
         */
        public function is_active_session($flow_id)
        {
        }
        /**
         * Get session key for flow
         *
         * @param int $flow_id flow ID.
         * @return bool
         */
        public function get_session_key($flow_id)
        {
        }
    }
    /**
     * Flow Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Flow_Frontend
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
         *  Footer markup
         */
        public function footer_markup()
        {
        }
        /**
         * Get next step URL.
         *
         * @since 1.0.0
         * @param int   $step_id step ID.
         * @param array $data order data.
         *
         * @return string
         */
        public function get_next_step_url($step_id, $data)
        {
        }
        /**
         * Normalize status if template is of type thank you page.
         *
         * @since 1.0.0
         * @param int $next_step_id next step ID.
         * @param int $order_id order id.
         *
         * @return void
         */
        public function may_be_complete_order($next_step_id, $order_id)
        {
        }
        /**
         * Get next step id for upsell.
         *
         * @since 1.0.0
         * @param object $wcf_step_obj step object.
         * @param array  $steps        flow steps.
         * @param int    $step_id      step ID.
         * @param int    $control_step control step ID.
         *
         * @return int
         */
        public function get_next_step_id_for_upsell_accepted($wcf_step_obj, $steps, $step_id, $control_step)
        {
        }
        /**
         * Get next step id for upsell rejected.
         *
         * @since 1.0.0
         * @param object $wcf_step_obj step object.
         * @param array  $steps        flow steps.
         * @param int    $step_id      step ID.
         * @param int    $control_step control step ID.
         *
         * @return int
         */
        public function get_next_step_id_for_upsell_rejected($wcf_step_obj, $steps, $step_id, $control_step)
        {
        }
        /**
         * Get next step id for downsell accepted.
         *
         * @since 1.0.0
         * @param object $wcf_step_obj step object.
         * @param array  $steps        flow steps.
         * @param int    $step_id      step ID.
         * @param int    $control_step control step ID.
         *
         * @return int
         */
        public function get_next_step_id_for_downsell_accepted($wcf_step_obj, $steps, $step_id, $control_step)
        {
        }
        /**
         * Get next step id for downsell rejected.
         *
         * @since 1.0.0
         * @param object $wcf_step_obj step object.
         * @param array  $steps        flow steps.
         * @param int    $step_id      step ID.
         * @param int    $control_step control step ID.
         *
         * @return int
         */
        public function get_next_step_id_for_downsell_rejected($wcf_step_obj, $steps, $step_id, $control_step)
        {
        }
        /**
         * Get thank you page URL.
         *
         * @since 1.0.0
         * @param int   $step_id step ID.
         * @param array $data order data.
         *
         * @return string
         */
        public function get_thankyou_page_url($step_id, $data)
        {
        }
        /**
         * Check if upsell exists.
         *
         * @since 1.0.0
         * @param object $order order data.
         * @param int    $flow_id Flow Id.
         * @param int    $step_id Step Id.
         *
         * @return bool
         */
        public function check_if_next_step_is_offer($order, $flow_id = 0, $step_id = 0)
        {
        }
        /**
         * Check if upsell exists in flow.
         *
         * @since x.x.x
         * @param int $flow_id Flow Id.
         * @param int $step_id Step Id.
         *
         * @return bool
         */
        public function is_upsell_exist_in_flow($flow_id, $step_id)
        {
        }
        /**
         * Actions after offer charge completes.
         *
         * @since 1.0.0
         * @param array $step_id step id.
         * @param array $order_id order id.
         * @param array $order_key order key.
         * @param array $is_charge_success is charge successful.
         * @param int   $variation_id variation id.
         * @param int   $input_qty input qty.
         *
         * @return array
         */
        public function after_offer_charge($step_id, $order_id, $order_key, $is_charge_success = \false, $variation_id = '', $input_qty = '')
        {
        }
    }
    /**
     * Cartflows WP CLI
     */
    class Cartflows_Pro_WP_CLI extends \WP_CLI_Command
    {
        /**
         * License operations
         *
         *  Example: wp cartflows license activate <license_key>
         *
         * @since x.x.x
         * @param  array $args       Arguments.
         * @param  array $assoc_args Associated Arguments.
         * @return void
         */
        public function license($args = array(), $assoc_args = array())
        {
        }
    }
    /**
     * Step factory
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Step_Factory extends \Cartflows_Step_Factory
    {
        /**
         * Check for offer page
         *
         * @return bool
         */
        public function is_offer_page()
        {
        }
        /**
         * Get next step id according to condition.
         *
         * @since 1.6.13
         *
         * @return bool|int
         */
        public function get_next_step_id()
        {
        }
        /**
         * Get thank you page ID.
         *
         * @since 1.0.0
         *
         * @return bool|int
         */
        public function get_thankyou_page_id()
        {
        }
        /**
         * Get prev control id according to condition.
         *
         * @since 1.6.13
         *
         * @return bool|int
         */
        public function get_prev_control_id()
        {
        }
        /**
         * Get prev control id according to condition.
         *
         * @param int   $current_flow flow id.
         * @param array $flow_cookie_data cookie data.
         * @since x.x.x
         *
         * @return bool|int
         */
        public function get_prev_control_id_for_analytics($current_flow, $flow_cookie_data)
        {
        }
        /**
         * Get prev control id according to condition.
         *
         * @param int   $index flow id.
         * @param array $flow_steps flow steps.
         * @param array $flow_cookie_data cookie data.
         * @since x.x.x
         *   */
        public function find_step_id_recursively($index, $flow_steps, $flow_cookie_data)
        {
        }
    }
    /**
     * CartFlows Update initial setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Update
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
        public static function init()
        {
        }
        /**
         * Offer orders option.
         *
         * @since 1.5.5
         * @return void
         */
        public static function v_1_5_5()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Refund.
     */
    class Cartflows_Pro_Refund
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
         * Process the refund of offer product.
         *
         * @hook wp_ajax_wcf_admin_refund_offer
         * @return void
         */
        public function process_cancellation()
        {
        }
        /**
         * Metabox to display the Upsell Offer refund settings.
         *
         * @return void
         */
        public function add_offer_refund_meta_box()
        {
        }
        /**
         * Check if required class and custom order is enabled.
         *
         * @return bool
         */
        public function is_custom_order_table_controller_available()
        {
        }
        /**
         * Maybe show refund meta box.
         *
         * @return bool
         */
        public function is_show_refund_metabox()
        {
        }
        /**
         * Include HTML view of the refund metabox.
         *
         * @return void
         */
        public function refund_offer_metabox_callback()
        {
        }
        /**
         * Include HTML view of the refund metabox.
         *
         * @return void
         */
        public function add_refund_offer_script()
        {
        }
        /**
         * Show refund box only for valid orders.
         *
         * @param  WC_Order $order The order object.
         * @return bool     $show true/false.
         */
        public function is_valid_order_for_refund($order)
        {
        }
        /**
         * Check for the offer is present.
         *
         * @param  WC_Order $order The order object.
         * @return bool     $offer_exists true/false.
         */
        public function is_offer_present_in_order($order)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Wc_Common.
     */
    class Cartflows_Pro_Wc_Common
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Get Currency
         *
         * @param obj $order Order.
         * @return string
         */
        public function get_currency($order)
        {
        }
        /**
         * Get Order ID
         *
         * @param obj $order Order.
         * @return string
         */
        public function get_order_id($order)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Helper.
     */
    class Cartflows_Pro_Helper
    {
        /**
         * Get zapier settings.
         *
         * @return  array.
         */
        public static function get_offer_global_settings()
        {
        }
        /**
         * Get AB Test settings.
         *
         * @return  array.
         */
        public static function get_abtest_settings()
        {
        }
        /**
         * Create Edit page link for the widgets.
         *
         * @since 1.6.13
         * @param string $tab The Tab which has to display.
         * @access public
         */
        public static function get_current_page_edit_url($tab)
        {
        }
        /**
         * Create setting page URL.
         *
         * @since 1.6.13
         * @access public
         */
        public static function get_setting_page_url()
        {
        }
        /**
         * Add Checkout field.
         *
         * @param string $type Field type.
         * @param string $field_key Field key.
         * @param int    $post_id Post id.
         * @param array  $field_data Field data.
         * @return  boolean.
         */
        public static function add_checkout_field($type, $field_key, $post_id, $field_data = array())
        {
        }
        /**
         * Delete checkout field.
         *
         * @param string $type Field type.
         * @param string $field_key Field key.
         * @param int    $post_id Post id.
         * @return  array.
         */
        public static function delete_checkout_field($type, $field_key, $post_id)
        {
        }
        /**
         * Check is error in the received response.
         *
         * @param object $response Received API Response.
         * @return array $result Error result.
         * @since x.x.x
         */
        public static function is_api_errors($response)
        {
        }
        /**
         * Show product option settings based on consitions.
         *
         * @param int $checkout_id checkout id.
         */
        public static function is_show_product_options_settings($checkout_id)
        {
        }
        /**
         * Confirm if custom price is valid.
         *
         * @param int $custom_price custom price.
         */
        public static function is_valid_custom_price($custom_price)
        {
        }
    }
    class WC_AM_Client_25
    {
        /**
         * Class args
         *
         * @var string
         */
        public $api_url = '';
        public $data_key = '';
        public $file = '';
        public $plugin_name = '';
        public $plugin_or_theme = '';
        public $product_id = '';
        public $slug = '';
        public $software_title = '';
        public $software_version = '';
        public $text_domain = '';
        // For language translation.
        /**
         * Class properties.
         *
         * @var string
         */
        public $data = array();
        public $identifier = '';
        public $no_product_id = \false;
        public $product_id_chosen = 0;
        public $wc_am_activated_key = '';
        public $wc_am_activation_tab_key = '';
        public $wc_am_api_key_key = '';
        public $wc_am_deactivate_checkbox_key = '';
        public $wc_am_deactivation_tab_key = '';
        public $wc_am_domain = '';
        public $wc_am_instance_id = '';
        public $wc_am_instance_key = '';
        public $wc_am_menu_tab_activation_title = '';
        public $wc_am_menu_tab_deactivation_title = '';
        public $wc_am_plugin_name = '';
        public $wc_am_product_id = '';
        public $wc_am_renew_license_url = '';
        public $wc_am_settings_menu_title = '';
        public $wc_am_settings_title = '';
        public $wc_am_software_version = '';
        public function __construct($file, $product_id, $software_version, $plugin_or_theme, $api_url, $software_title = '', $text_domain = '')
        {
        }
        /**
         * Migrates pre 2.0 data to prevent breaking old software activations.
         *
         * @since 2.0
         *
         * @param int    $product_id
         * @param string $software_title
         */
        public function migrate_pre_2_0_data($product_id, $software_title)
        {
        }
        /**
         * Provides one-time instructions for customer to reactivate the API Key if the migration fails.
         *
         * @since 2.0
         */
        public function migrate_error_notice()
        {
        }
        /**
         * Register submenu specific to this product.
         */
        public function register_menu()
        {
        }
        /**
         * Generate the default data arrays
         */
        public function activation()
        {
        }
        /**
         * Deletes all data if plugin deactivated
         */
        public function uninstall()
        {
        }
        /**
         * Deactivates the license on the API server
         */
        public function license_key_deactivation()
        {
        }
        /**
         * Displays an inactive notice when the software is inactive.
         */
        public function inactive_notice()
        {
        }
        /**
         * Check for external blocking contstant.
         */
        public function check_external_blocking()
        {
        }
        // Draw option page
        public function config_page()
        {
        }
        // Register settings
        public function load_settings()
        {
        }
        // Provides text for api key section
        public function wc_am_api_key_text()
        {
        }
        // Returns the API Key status from the WooCommerce API Manager on the server
        public function wc_am_api_key_status()
        {
        }
        /**
         * Returns true if the API Key status is Activated in the database.
         *
         * @since 2.1
         *
         * @param bool $live Do not set to true if using to activate software. True is for status checks after activation.
         *
         * @return bool
         */
        public function get_api_key_status($live = \false)
        {
        }
        // Returns API Key text field
        public function wc_am_api_key_field()
        {
        }
        /**
         * @since 2.3
         */
        public function wc_am_product_id_field()
        {
        }
        /**
         * Sanitizes and validates all input and output for Dashboard
         *
         * @since 2.0
         *
         * @param $input
         *
         * @return mixed|string
         */
        public function validate_options($input)
        {
        }
        // Deactivates the API Key to allow key to be used on another blog
        public function wc_am_license_key_deactivation($input)
        {
        }
        /**
         * Returns the API Key status from the WooCommerce API Manager on the server.
         *
         * @return array|mixed|object
         */
        public function license_key_status()
        {
        }
        /**
         * Deactivate the current API Key before activating the new API Key
         *
         * @param string $current_api_key
         *
         * @return bool
         */
        public function replace_license_key($current_api_key)
        {
        }
        public function wc_am_deactivate_text()
        {
        }
        public function wc_am_deactivate_textarea()
        {
        }
        /**
         * Builds the URL containing the API query string for activation, deactivation, and status requests.
         *
         * @param array $args
         *
         * @return string
         */
        public function create_software_api_url($args)
        {
        }
        /**
         * Sends the request to activate to the API Manager.
         *
         * @param array $args
         *
         * @return bool|string
         */
        public function activate($args)
        {
        }
        /**
         * Sends the request to deactivate to the API Manager.
         *
         * @param array $args
         *
         * @return bool|string
         */
        public function deactivate($args)
        {
        }
        /**
         * Sends the status check request to the API Manager.
         *
         * @param array $args
         *
         * @return bool|string
         */
        public function status($args)
        {
        }
        /**
         * Check for software updates.
         */
        public function check_for_update()
        {
        }
        /**
         * Sends and receives data to and from the server API
         *
         * @since  2.0
         *
         * @param array $args
         *
         * @return bool|string $response
         */
        public function send_query($args)
        {
        }
        /**
         * Check for updates against the remote server.
         *
         * @since  2.0
         *
         * @param  object $transient
         *
         * @return object $transient
         */
        public function update_check($transient)
        {
        }
        /**
         * API request for informatin.
         *
         * If `$action` is 'query_plugins' or 'plugin_information', an object MUST be passed.
         * If `$action` is 'hot_tags` or 'hot_categories', an array should be passed.
         *
         * @param false|object|array $result The result object or array. Default false.
         * @param string             $action The type of information being requested from the Plugin Install API.
         * @param object             $args
         *
         * @return object
         */
        public function information_request($result, $action, $args)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Admin_Helper.
     */
    class Cartflows_Pro_Admin_Helper
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Get steps.
         *
         * @param int $step_id Step ID.
         */
        public static function get_opt_steps($step_id)
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
         * Loop through the input and sanitize each of the values.
         *
         * @param array $input_settings input settings.
         * @return array
         */
        public static function sanitize_form_inputs($input_settings = array())
        {
        }
        /**
         * Update admin settings.
         *
         * @param string $key key.
         * @param bool   $value key.
         * @param bool   $network network.
         */
        public static function update_admin_settings_option($key, $value, $network = \false)
        {
        }
        /**
         * Get productss labels.
         *
         * @param array $product_ids values.
         */
        public static function get_products_label($product_ids)
        {
        }
        /**
         * Get coupons labels.
         *
         * @param array $coupons_ids id.
         */
        public static function get_coupons_label($coupons_ids)
        {
        }
        /**
         * Get labels.
         *
         * @param array $payment_gateways values.
         */
        public static function get_payment_methods_label($payment_gateways)
        {
        }
        /**
         * Get terms labels.
         *
         * @param array $terms values.
         */
        public static function get_products_tag_label($terms)
        {
        }
        /**
         * Get category labels.
         *
         * @param array $categories values.
         */
        public static function get_products_cat_label($categories)
        {
        }
        /**
         * Get labels.
         *
         * @param array $data_array values.
         */
        public static function get_labels($data_array)
        {
        }
        /**
         * Get country labels.
         *
         * @param array $countries_ids values.
         */
        public static function get_country_label($countries_ids)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Frontend.
     */
    class Cartflows_Pro_Frontend
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
         * Set next step url.
         *
         * @param object $order order object.
         * @since 1.0.0
         */
        public function set_next_step_url($order)
        {
        }
        /**
         * Show offer step.
         *
         * @param string $order_recieve_url recieve url.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function show_offer_step($order_recieve_url, $order)
        {
        }
        /**
         * Register Cron.
         *
         * @param string $new_status new status.
         * @param string $normal_status normal status.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function register_cron_for_order_success($new_status, $normal_status, $order)
        {
        }
        /**
         * Update main order data in transient.
         *
         * @param string $new_status new status.
         * @param string $normal_status normal status.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function update_main_order_data_in_transient($new_status, $normal_status, $order)
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
         * Setup upsell common. Used for paypal standard.
         *
         * @param int $order_id Order id.
         * @since 1.0.0
         *
         * @return void
         */
        public function setup_upsell($order_id = '')
        {
        }
        /**
         * Maybe setup upsell.
         *
         * @param int $order_id Order id.
         * @since 1.0.0
         *
         * @return void
         */
        public function maybe_setup_upsell($order_id = '')
        {
        }
        /**
         * Ignore Gateways checkout processed.
         *
         * @param int    $order_id order id.
         * @param array  $posted_data post data.
         * @param object $order order object.
         * @since 1.0.0
         */
        public function maybe_setup_upsell_ignore_gateways($order_id, $posted_data, $order)
        {
        }
        /**
         * Start the upsell flow.
         *
         * @param object $order Order object.
         * @since 1.0.0
         *
         * @return void
         */
        public function start_the_upsell_flow($order)
        {
        }
        /**
         * Set upsell and return new status based on condition.
         *
         * @since 1.5.5
         * @param string $order_status order status.
         * @param object $order order data.
         * @return string
         */
        public function set_upsell_return_new_order_status($order_status, $order)
        {
        }
        /**
         * Render offer accepted/rejected script on upsell/downsell pages.
         */
        public function render_offer_accept_reject_scripts()
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
         * Global flow scripts.
         *
         * @since 1.0.0
         */
        public function global_flow_scripts()
        {
        }
        /**
         * Replace JS vars for offer pages.
         *
         * @param string $script custom script.
         * @return string $script modified custom script.
         *
         * @since x.x.x
         */
        public function maybe_replace_pro_vars($script)
        {
        }
        /**
         * Add pro version class to body in frontend.
         *
         * @since 1.1.5
         * @param array $classes classes.
         * @return array $classes classes.
         */
        public function pro_body_class($classes)
        {
        }
        /**
         * Function to replace the shortcode available in the offer accept/reject script.
         *
         * @param string $script Offer accept/reject script.
         *
         * @return string $script Modified string of script.
         */
        public function may_be_replace_shortcodes($script)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Default_Meta
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
         * Get flow data.
         *
         * @param array $flow_meta flow data.
         */
        public function fetch_flow_meta_value($flow_meta)
        {
        }
        /**
         * Get checkout editor meta data.
         *
         * @param string  $meta_value defaulkt meta value.
         * @param integer $post_id post id.
         * @param string  $key meta key.
         * @param string  $filter_type filter type.
         * @return array
         */
        public function fetch_meta_value($meta_value, $post_id, $key, $filter_type)
        {
        }
        /**
         * Sanitize rules.
         *
         * @param array $rules rules.
         */
        public function sanitize_rules($rules)
        {
        }
        /**
         * Sanitize rule data.
         *
         * @param array $rule_data rule data.
         */
        public static function sanitize_rule_data($rule_data)
        {
        }
        /**
         *  Offer Default fields.
         *
         * @param int $post_id post id.
         * @return array
         */
        public function get_offer_fields($post_id)
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
        public function get_offers_meta_value($post_id, $key, $default = \false)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Admin.
     */
    class Cartflows_Pro_Admin
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
         * Remove ob product id from meta data.
         *
         * @param array $pre_post_data step data.
         *
         * @return array
         */
        public function update_meta_before_import_json($pre_post_data)
        {
        }
        /**
         * Remove ob product id from meta data.
         *
         * @param array $step_meta_data step meta data.
         *
         * @return array.
         */
        public function update_meta_before_import_template($step_meta_data)
        {
        }
        /**
         *  After save of permalinks.
         */
        public function show_admin_notices()
        {
        }
        /**
         *  Show flow analytics notice.
         */
        public function experimental_flow_analytics_notice()
        {
        }
        /**
         * Disable the weekly email Notice
         *
         * @return void
         */
        public function dismiss_flow_analytics_notice()
        {
        }
        /**
         *  Declare the woo HPOS compatibility.
         */
        public function declare_woo_hpos_compatibility()
        {
        }
        /**
         * Exclude meta keys for pro.
         *
         * @param array $meta_keys meta keys.
         */
        public function add_meta_keys_to_exclude_from_import($meta_keys)
        {
        }
        /**
         * Show notice before downgrading to lower plan.
         *
         * @param string $table_html table html.
         * @param array  $current_plugin current plugin data.
         * @param array  $new_plugin new plugin data.
         *
         * @since x.x.x
         */
        public function update_override_comparison_html($table_html, $current_plugin, $new_plugin)
        {
        }
        /**
         * Show migration in process notice.
         *
         * @since 1.7.0
         */
        public function order_bump_migration_processing_notice()
        {
        }
        /**
         * Show conditional migration notices.
         *
         * @since 1.7.0
         */
        public function migration_conditional_notices()
        {
        }
        /**
         * Show migration complete notice.
         *
         * @since 1.7.0
         */
        public function migration_complete_notice()
        {
        }
        /**
         * Migrate order bump ajax call.
         *
         * @since 1.7.0
         */
        public function migrate_order_bump()
        {
        }
        /**
         * New UI notice.
         *
         * @since 1.7.0
         */
        public function load_notice_script()
        {
        }
        /**
         * Migrate Order Bump notice.
         *
         * @since 1.7.0
         */
        public function migrate_order_bump_notice()
        {
        }
        /**
         * Migrate Order Bump notice.
         *
         * @since 1.7.0
         */
        public function migrate_pre_checkout_styles_notice()
        {
        }
        /**
         * Show migration complete notice.
         *
         * @since 1.7.0
         */
        public function pre_checkout_offer_migration_complete_notice()
        {
        }
        /**
         * Show migration in process notice.
         *
         * @since 1.7.0
         */
        public function pre_checkout_offer_style_migration_processing_notice()
        {
        }
        /**
         * Migrate order bump ajax call.
         *
         * @since 1.7.0
         */
        public function migrate_pre_checkout_styles()
        {
        }
        /**
         * Check allowed screen for notices.
         *
         * @since 1.7.0
         * @return bool
         */
        public function allowed_screen_for_notices()
        {
        }
        /**
         * Metabox fixed orders.
         *
         * @param  array $pro_metabox_order Metabox orders.
         * @return array
         */
        public function metabox_order($pro_metabox_order)
        {
        }
        /**
         * License arguments for Rest API Request.
         *
         * @param  array $defaults License arguments.
         * @return array           License arguments.
         */
        public function licence_args($defaults)
        {
        }
        /**
         * Set default options for settings.
         *
         * @param array $settings settings data.
         * @since 1.0.0
         */
        public function set_default_settings($settings)
        {
        }
        /**
         * Hide order meta-data from order list backend.
         *
         * @param array $arr order meta data.
         * @return array
         * @since 1.0.0
         */
        public function custom_woocommerce_hidden_order_itemmeta($arr)
        {
        }
        /**
         * Changing a meta title
         *
         * @param  string        $key  The meta key.
         * @param  WC_Meta_Data  $meta The meta object.
         * @param  WC_Order_Item $item The order item object.
         * @return string        The title.
         */
        public function change_order_item_meta_title($key, $meta, $item)
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
        public static function add_admin_pro_body_class($classes)
        {
        }
        /**
         * Google anytics settings.
         *
         * @param array $google_analytics_settings_data settings.
         */
        public function add_google_analytics_pro_events($google_analytics_settings_data)
        {
        }
        /**
         * License Debug Log.
         */
        public function add_license_debug_metabox()
        {
        }
        /**
         * Offer refund.
         */
        public function include_refund_order_section()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Action_Schedular.
     */
    class Cartflows_Pro_Action_Schedular
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
         * Update beta order bump saving format.
         */
        public function beta_order_bump_migration()
        {
        }
        /**
         * Update order bump process.
         *
         * @since 1.0.0
         * @return void
         */
        public function old_order_bump_migration()
        {
        }
        /**
         * Update order bump process.
         *
         * @param int   $checkout_id checkout id.
         * @param array $ob_default_meta default ob meta.
         *
         * @return void
         */
        public function migrate_order_bump_data($checkout_id, $ob_default_meta)
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
         * Get the block data.
         *
         * @param array  $elements elements data.
         * @param string $slug widget name.
         */
        public function gutenberg_find_block_recursive($elements, $slug = 'wcfb/checkout-form')
        {
        }
        /**
         * Get checkout steps & migrate the pre checkout offer styles.
         */
        public function pre_checkout_offer_style_migration()
        {
        }
        /**
         * Update pre checkout offer process.
         *
         * @param int $checkout_id checkout id.
         */
        public function migrate_pre_checkout_offer_styles($checkout_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateways.
     */
    class Cartflows_Pro_Gateways
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        public $gateway_obj = array();
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
         * Load required gateways.
         *
         * @since 1.0.0
         * @return array.
         */
        public function load_required_integrations()
        {
        }
        /**
         * Load Gateway.
         *
         * @param string $type gateway type.
         * @since 1.0.0
         * @return array.
         */
        public function load_gateway($type)
        {
        }
        /**
         * Generates express checkout token
         *
         * @since 1.0.0
         * @return void.
         */
        public function generate_express_checkout_token()
        {
        }
        /**
         * Generates express checkout token
         *
         * @since 1.0.0
         * @return void.
         */
        public function generate_ppec_paypal_checkout_token()
        {
        }
        /**
         * Get Supported Gateways.
         *
         * @since 1.0.0
         * @return array.
         */
        public function get_supported_gateways()
        {
        }
        /**
         * Handles paypal API call
         *
         * @since 1.0.0
         * @return void.
         */
        public function maybe_handle_paypal_api_call()
        {
        }
        /**
         * Handles ppec_paypal API call
         *
         * @since 1.0.0
         * @return void.
         */
        public function maybe_handle_ppec_paypal_api_call()
        {
        }
    }
    /**
     * CartFlows License
     *
     * @since 1.0.0
     */
    class CartFlows_Pro_Licence
    {
        /**
         * Wc_am_instance_id
         *
         * @since 1.0.0
         * @access public
         * @var string wc_am_instance_id.
         */
        public $wc_am_instance_id;
        /**
         * Wc_am_domain
         *
         * @since 1.0.0
         * @access public
         * @var string wc_am_domain.
         */
        public $wc_am_domain;
        /**
         * Wc_am_software_version
         *
         * @since 1.0.0
         * @access public
         * @var string wc_am_software_version.
         */
        public $wc_am_software_version;
        /**
         * Product ID.
         *
         * @since x.x.x
         * @access public
         * @var string product_id.
         */
        public $product_id;
        /**
         * Activate Status.
         *
         * @since x.x.x
         * @access public
         * @var string activate_status.
         */
        public $activate_status;
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
         * Disable the Activate License Notice
         *
         * @return void
         */
        public function disable_activate_licence_notice()
        {
        }
        /**
         * License Inactive Notice
         *
         * @since 1.0.0
         */
        public function inactive_notice()
        {
        }
        /**
         * Reset License Info
         *
         * @since 1.0.0
         */
        public function reset_license_info()
        {
        }
        /**
         * Export popup.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function export_popup()
        {
        }
        /**
         * Show action links on the plugin screen.
         *
         * @param   mixed $links Plugin Action links.
         * @return  array
         */
        public function license_popup_link($links)
        {
        }
        /**
         * Enqueues the needed CSS/JS for Backend.
         *
         * @param  string $hook Current hook.
         *
         * @since 1.0.0
         */
        public function admin_scripts($hook = '')
        {
        }
        /**
         * Deactivate license.
         *
         * @since 1.0.0
         */
        public function deactivate_license()
        {
        }
        /**
         * Sends the request to deactivate to the API Manager.
         *
         * @param array $args args.
         *
         * @return bool|string
         */
        public function deactivate_request($args)
        {
        }
        /**
         * Save All admin settings here
         *
         * @hook cartflows_activate_license
         */
        public function activate_license()
        {
        }
        /**
         * Sends the request to activate to the API Manager.
         *
         * @param array $args args.
         *
         * @return bool|string
         */
        public function activation_request($args)
        {
        }
        /**
         * Check is error in the received response.
         *
         * @param object $response Received API Response.
         * @return array $result Error result.
         * @since x.x.x
         */
        public function has_activation_api_error($response)
        {
        }
        /**
         * Prepare product id in lower case. Database Keys should be in lowercase.
         *
         * @since 1.11.1
         */
        public function get_clean_product_id()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Loader.
     */
    final class Cartflows_Pro_Loader
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
         * @var wc_common
         */
        public $wc_common = \null;
        /**
         * Member Variable
         *
         * @var session
         */
        public $session = \null;
        /**
         * Member Variable
         *
         * @var order
         */
        public $order = \null;
        /**
         * Member Variable
         *
         * @var options
         */
        public $options = \null;
        /**
         * Member Variable
         *
         * @var assets_vars
         */
        public $assets_vars = \null;
        /**
         * Member Variable
         *
         * @var front
         */
        public $front = \null;
        /**
         * Member Variable
         *
         * @var flow
         */
        public $flow = \null;
        /**
         * Member Variable
         *
         * @var offer
         */
        public $offer = \null;
        /**
         * Member Variable
         *
         * @var is_woo_active
         */
        public $is_woo_active = \true;
        /**
         *  Member Variable
         *
         *  @var wcf_step_objs
         */
        public $wcf_step_objs = array();
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
         * Show action on plugin page.
         *
         * @param  array $links links.
         * @return array
         */
        public function add_action_links($links)
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
         * License Setup
         *
         * @since 1.1.16 Updated API manager library.
         *
         * @return void
         */
        public function licence_setup()
        {
        }
        /**
         * Fires admin notice when CartFlows is not installed and activated.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function fails_to_load()
        {
        }
        /**
         * Fires admin notice when CartFlows version is not up to data.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function fail_load_out_of_date()
        {
        }
        /**
         * Load CartFlows Pro Text Domain.
         * This will load the translation textdomain depending on the file priorities.
         *      1. Global Languages /wp-content/languages/cartflows-pro/ folder
         *      2. Local dorectory /wp-content/plugins/cartflows-pro/languages/ folder
         *
         * @since  1.0.0
         * @return void
         */
        public function load_textdomain()
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
    }
}
namespace CartflowsProAdmin {
    /**
     * Class Admin_Loader.
     */
    class Pro_Admin_Loader
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
        public function setup_classes()
        {
        }
    }
}
namespace CartflowsProAdmin\AdminCore\Ajax {
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
     * Class Flows.
     */
    class MultipleOrderBump extends \CartflowsProAdmin\AdminCore\Ajax\AjaxBase
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
         * Save order bump settings.
         *
         * @return void
         */
        public function save_order_bump_settings()
        {
        }
        /**
         * Sanitixe order bump values.
         *
         * @param string $data_value meta value.
         * @param string $filter filter type.
         * @param int    $step_id checkout id.
         * @param array  $order_bumps order bumps.
         * @param int    $index order bump index.
         * @param int    $new_data order bump data.
         */
        public function sanitize_multiple_order_bump_values($data_value, $filter, $step_id, $order_bumps, $index, $new_data)
        {
        }
        /**
         * Sanitize rules.
         *
         * @param array $rules rules.
         */
        public function sanitize_rules($rules)
        {
        }
        /**
         * Sanitize rule data.
         *
         * @param array $rule_data rule data.
         */
        public static function sanitize_rule_data($rule_data)
        {
        }
        /**
         * Get order bump.
         *
         * @return void
         */
        public function get_current_order_bump()
        {
        }
        /**
         * Get ob data.
         *
         * @param int $step_id step id.
         * @param int $ob_id ob id.
         */
        public function get_ob_data($step_id, $ob_id)
        {
        }
        /**
         * Add product data.
         *
         * @param int   $product_id product id.
         * @param array $ob_data order bump data.
         */
        public function add_ob_product_data($product_id, $ob_data)
        {
        }
        /**
         * Filter ob rules.
         *
         * @param array $conditions conditions data.
         */
        public function filter_ob_rules($conditions)
        {
        }
        /**
         * Filter rule options.
         *
         * @param array $rules rule.
         */
        public function filter_rules_data($rules)
        {
        }
        /**
         * Delete order bump.
         *
         * @return void
         */
        public function update_order_bump_status()
        {
        }
        /**
         * Delete order bump.
         *
         * @return void
         */
        public function delete_order_bump()
        {
        }
        /**
         * Add Order Bump.
         *
         * @return void
         */
        public function add_order_bump()
        {
        }
        /**
         * Clone Order Bump
         *
         * @return void
         */
        public function clone_order_bump()
        {
        }
        /**
         * Update order bump title.
         */
        public function update_order_bump_title()
        {
        }
        /**
         * Reorder order bumps.
         */
        public function reorder_order_bumps()
        {
        }
        /**
         * Get order bump.
         *
         * @param int    $checkout_id checkout id.
         * @param string $ob_id order bump id.
         */
        public function get_order_bump_data_by_id($checkout_id, $ob_id)
        {
        }
    }
    /**
     * Class Flows.
     */
    class FormFields extends \CartflowsProAdmin\AdminCore\Ajax\AjaxBase
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
         * Prepare custom field.
         *
         * @return void
         */
        public function prepare_custom_field()
        {
        }
        /**
         * Delete Field.
         *
         * @return void
         */
        public function delete_custom_field()
        {
        }
        /**
         * Get_checkout_fields
         *
         * @param string $key key.
         * @param string $post_id post_id.
         */
        public function get_checkout_fields($key, $post_id)
        {
        }
    }
    /**
     * Class Flows.
     */
    class FlowAnalytics extends \CartflowsProAdmin\AdminCore\Ajax\AjaxBase
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
         * Visits map.
         */
        public function set_visit_data()
        {
        }
        /**
         * Reset_flow_analytics
         */
        public function reset_flow_analytics()
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
    class OfferSettings extends \CartflowsProAdmin\AdminCore\Ajax\AjaxBase
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
        public function save_miscellaneous_settings()
        {
        }
    }
}
namespace {
    /**
     * Class CartFlows_Licence_Log.
     */
    class CartFlows_Licence_Log
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
         * Show the log page contents for file log handler.
         */
        public function get_license_log()
        {
        }
    }
}
namespace CartflowsProAdmin\AdminCore\Inc {
    /**
     * Class flowMeta.
     */
    class GlobalSettingsPro
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
         * @since 1.6.13
         */
        public function __construct()
        {
        }
        /**
         * Get_pro_gloabl_options
         *
         * @param string $options options.
         */
        public static function get_pro_gloabl_options($options)
        {
        }
        /**
         * Page Header Tabs.
         *
         * @param string $settings settings.
         */
        public static function get_pro_global_settings($settings)
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
         * @since 1.10.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.10.0
         */
        public function __construct()
        {
        }
        /**
         * Sets strore checkout control step ( type = checkout ) to global checkout
         *
         * @param int   $flow_id current flow id.
         * @param array $variant control variant array.
         * @return void
         * @since 1.10.0
         */
        public function set_control_global_checkout($flow_id, $variant)
        {
        }
    }
    /**
     * Class AdminHelper.
     */
    class AdminHelper
    {
        /**
         * Get flow meta options.
         *
         * @param int    $ob_id post id.
         * @param string $title order bump title.
         * @param array  $order_bumps all order bumps.
         *
         * @return array.
         */
        public static function add_default_order_bump_data($ob_id, $title, $order_bumps)
        {
        }
        /**
         * Regenerate CSS for speicfic step.
         *
         * @param int $step_id step id.
         */
        public static function clear_current_step_css($step_id)
        {
        }
        /**
         * Prepare new custom meta fields
         *
         * @param array  $new_field new field.
         * @param string $post_id post id.
         * @param string $type type.
         */
        public static function prepare_checkout_field_settings($new_field, $post_id, $type)
        {
        }
        /**
         * Prepare new custom meta fields
         *
         * @param array  $new_field new field.
         * @param string $post_id post id.
         * @param string $type post id.
         */
        public static function prepare_optin_field_settings($new_field, $post_id, $type)
        {
        }
    }
    /**
     * Class Admin_Menu.
     */
    class AdminHooks
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
         * Show pro log.
         *
         * @param string $log_name log name.
         */
        public function show_pro_log($log_name)
        {
        }
        /**
         * Add pro flows step data.
         *
         * @param array $steps flow steps.
         */
        public function add_flow_steps_data($steps)
        {
        }
        /**
         * Save step pro action.
         *
         * @param int $step_id step id.
         */
        public function save_step_actions($step_id)
        {
        }
        /**
         * Get payment gateways.
         *
         * @param array $localize localized variables.
         */
        public function localize_required_vars($localize)
        {
        }
    }
}
namespace CartflowsProAdmin\AdminCore\Api {
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
    }
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
        protected $namespace = 'cartflows-pro/v1';
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
namespace {
    /**
     * Class Cartflows_Pro_Utils.
     */
    class Cartflows_Pro_Woo_Multicurrency
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
         * Price Converter
         *
         * @param int    $product_price product price.
         * @param int    $product_id current product ID.
         * @param string $context The context of the action.
         *
         * @return int
         */
        public function wcf_modify_product_price($product_price, $product_id, $context)
        {
        }
        /**
         * Fetches selected currency price if set from multi currency plugin product setting.
         *
         * @param int $product_id current product ID.
         * @param int $converted_price already converted price.
         * @return int
         */
        public function get_converted_fixed_product_prices($product_id, $converted_price)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Utils.
     */
    class Cartflows_Pro_Affiliate_Wp
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
         * Add upsell/downsell affiliate to order
         *
         * @param object $order order data.
         * @param object $offer_product offer product data.
         * @return void
         */
        public function add_offer_affiliate($order, $offer_product)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Paypal_Express.
     */
    class Cartflows_Pro_Gateway_Paypal_Express extends \Cartflows_Pro_Paypal_Gateway_helper
    {
        /**
         * Key name variable.
         *
         * @var key
         */
        public $key = 'ppec_paypal';
        /**
         * Refund Supported variable.
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
        /**
         *  Initiator.
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
         * Load paypal object payment JS.
         *
         * @return void
         */
        public function payment_scripts()
        {
        }
        /**
         * Check if current order has paypal gatway
         *
         * @return bool
         */
        public function has_paypal_gateway()
        {
        }
        /**
         * Generate script for paypal payment popup.
         *
         * @return string
         */
        public function generate_script()
        {
        }
        /**
         * Get Payer ID from option value.
         *
         * @return bool
         */
        public function get_woo_payer_id()
        {
        }
        /**
         * Get Payer details from option value.
         *
         * @return bool
         */
        public function get_woo_pal_details()
        {
        }
        /**
         * Generates express checkout token
         *
         * @return void
         */
        public function generate_express_checkout_token()
        {
        }
        /**
         * Initiates express checkout request
         *
         * @param array $args arguments.
         * @param bool  $is_upsell is upsell.
         * @return array
         */
        public function initiate_express_checkout_request($args, $is_upsell = \false)
        {
        }
        /**
         * Adds express checkout parameters
         *
         * @param array $args arguments.
         * @param bool  $is_upsell is upsell.
         * @return void
         */
        public function add_express_checkout_params($args, $is_upsell = \false)
        {
        }
        /**
         * Get callback URL for paypal payment API request.
         *
         * @param array $args arguments.
         * @return string
         */
        public function get_callback_url($args)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function wc_gateway()
        {
        }
        /**
         * Clean params.
         *
         * @return void
         */
        public function clean_params()
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @since 1.0.0
         *
         * @param string $raw_response_body response body.
         *
         * @return object
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Modify paypal arguements to set paramters before checkout express.
         *
         * @param array $data parameters array.
         * @return array
         */
        public function modify_paypal_arguments($data)
        {
        }
        /**
         * Create billing agreement for future reference transaction.
         *
         * @throws Exception Billing agreement errors.
         */
        public function create_billing_agreement()
        {
        }
        /**
         * Performs express checkout request
         *
         * @param string $token token string.
         * @param array  $order Order data.
         * @param array  $args arguments data.
         *
         * @return object
         */
        public function perform_express_checkout_request($token, $order, $args)
        {
        }
        /**
         * Sets up DoExpressCheckoutPayment API Call arguments
         *
         * @param string   $token Unique token of the payment initiated.
         * @param WC_Order $order order data.
         * @param array    $args arguments data.
         */
        public function add_do_express_checkout_params($token, $order, $args)
        {
        }
        /**
         * Request to get express checkout details.
         *
         * @param string $token token.
         *
         * @return object
         */
        public function perform_express_checkout_details_request($token)
        {
        }
        /**
         * Set methods and token paramter.
         *
         * @param string $token Token string.
         */
        public function set_express_checkout_method($token)
        {
        }
        /**
         * Processes API calls.
         *
         * @return void
         */
        public function process_api_calls()
        {
        }
        /**
         * Processes offer payment.
         * This will be executed if the reference transaction setting is disabled.
         *
         * @param array $order order details.
         * @param array $product product details.
         * @return bool
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  Product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Charge a payment against a reference token.
         *
         * @param string   $reference_id the ID of a reference object, e.g. billing agreement ID.
         * @param WC_Order $order order object.
         * @param array    $offer_product offer product data.
         * @param array    $args arguments data.
         * @since 1.0.0
         */
        public function add_reference_trans_args($reference_id, $order, $offer_product, $args = array())
        {
        }
        /**
         * Get billing agreement ID for paypal express.
         *
         * @since 1.0.0
         *
         * @param object $order order data.
         *
         * @return string
         */
        public function get_token($order)
        {
        }
        /**
         * Remove line items
         *
         * @since 1.0.0
         *
         * @param array $array object.
         *
         * @return array
         */
        public function remove_previous_line_items($array)
        {
        }
        /**
         * Is gateway support offer refund?
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Process offer refund.
         *
         * @param object $order the order object.
         * @param array  $offer_data offer data.
         *
         * @return bool
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * Setup the Payment data for Paypal Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_ppec($subscription, $order, $offer_product)
        {
        }
        /**
         * Modify offer refund data.
         *
         * @param array  $request request.
         * @param object $order the order object.
         * @param float  $amount refund amount.
         *
         * @return object
         */
        public function offer_refund_request_data($request, $order, $amount)
        {
        }
        /**
         * Save required meta keys to refund seperate order.
         *
         * @param object $parent_order Parent order Object.
         * @param object $child_order Child order Object.
         * @param string $transaction_id id.
         */
        public function store_required_meta_keys_for_refund($parent_order, $child_order, $transaction_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Bacs.
     */
    class Cartflows_Pro_Gateway_Bacs
    {
        /**
         * Key name variable.
         *
         * @var key
         */
        public $key = 'bacs';
        /**
         * Refund supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \false;
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
         * Add Bank Detail content to the WC emails as it received from the order.
         *
         * @param WC_Order $order Order object.
         * @param bool     $sent_to_admin Sent to admin.
         * @param bool     $plain_text Email format: plain text or HTML.
         */
        public function add_bank_details_in_email($order, $sent_to_admin, $plain_text = \false)
        {
        }
        /**
         * Pass Bank Details to the WC emails as it received from the order.
         *
         * @param array $bank_details Bank Details.
         * @return array Bank Details.
         */
        public function modify_bank_details($bank_details)
        {
        }
        /**
         * Setup upsell bacs.
         *
         * @since 1.0.0
         * @param string $order_status order status.
         * @param array  $order order data.
         * @return string
         */
        public function maybe_setup_upsell_bacs($order_status, $order)
        {
        }
        /**
         * Process offer payment
         *
         * @since 1.0.0
         * @param array $order order data.
         * @param array $product product data.
         * @return bool
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Is gateway support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
    }
    /**
     * Class Cartflows_Pro_mollie_Gateway_Helper .
     */
    class Cartflows_Pro_Mollie_Gateway_Helper
    {
        /**
         * Plugin id variable
         *
         * @var plugin_id
         */
        public $plugin_id = 'mollie-payments-for-woocommerce';
        /**
         * Create payment api variable.
         *
         * @var create_payment_api
         */
        public $create_payment_api = 'https://api.mollie.com/v2/payments';
        /**
         * Create customer api variable
         *
         * @var create_customer_api
         */
        public $create_customer_api = 'https://api.mollie.com/v2/customers';
        /**
         * Get payment api variable
         *
         * @var get_payment_api
         */
        public $get_payment_api = 'https://api.mollie.com/v2/payments/';
        /**
         * Get user mollie customer id from order.
         *
         * @param object $order order object.
         * @return null|string
         */
        public function get_user_mollie_customer_id($order)
        {
        }
        /**
         * Get api key.
         *
         * @return string
         */
        public function get_mollie_api_key()
        {
        }
        /**
         * Get return url.
         *
         * @param int    $step_id step id.
         * @param int    $order_id order id.
         * @param string $order_key order key.
         * @param string $session_key session key.
         *
         * @return string
         */
        public function get_return_url($step_id, $order_id, $order_key, $session_key)
        {
        }
        /**
         * Redirect location after successfully completing process_payment
         *
         * @param object $payment_object payment object.
         *
         * @return string
         */
        public function get_process_payment_redirect($payment_object)
        {
        }
        /**
         * Get api response body
         *
         * @param string $url api url.
         * @param array  $args api arguments.
         */
        public function get_mollie_api_response_body($url, $args)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * Save mollie customer id for order.
         *
         * @param object $order order data.
         * @param string $customer_id customer id.
         */
        public function set_mollie_customer_id($order, $customer_id)
        {
        }
        /**
         * Maybe get mollie customer id from prev order for non logged-in user.
         *
         * @param string $billing_email user email.
         *
         * @return null|string
         */
        public function maybe_get_mollie_customer_id_from_order($billing_email)
        {
        }
        /**
         * Format currency value according to mollie.
         *
         * @param string $value Order value.
         * @param string $currency currency.
         */
        public function format_currency_value($value, $currency)
        {
        }
        /**
         * Set response code.
         *
         * @param int $status_code Status code.
         */
        public function set_http_response_code($status_code)
        {
        }
        /**
         * Save required meta keys to refund seperate order.
         *
         * @param object $parent_order Parent order Object.
         * @param object $child_order Child order Object.
         * @param string $transaction_id id.
         */
        public function store_mollie_meta_keys_for_refund($parent_order, $child_order, $transaction_id)
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Setup the Payment data for mollie Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_mollie($subscription, $order, $offer_product)
        {
        }
        /**
         * Create mollie customer id for non logged-in user.
         *
         * @param array  $data payment args.
         * @param object $order order data.
         * @return array
         */
        public function maybe_create_mollie_customer_id($data, $order)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Mollie_Credit_Card.
     */
    class Cartflows_Pro_Gateway_Mollie_Credit_Card extends \Cartflows_Pro_Mollie_Gateway_Helper
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'mollie_wc_gateway_creditcard';
        /**
         * Refund Supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * May be setup upsell.
         *
         * @param object $order Order object.
         *
         * @return void
         */
        public function maybe_setup_upsell($order)
        {
        }
        /**
         * Get webhook url.
         *
         * @param int    $step_id step id.
         * @param int    $order_id order id.
         * @param string $order_key order key.
         *
         * @return string
         */
        public function get_webhook_url($step_id, $order_id, $order_key)
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order            The order that is being paid for.
         * @param Object   $response           The response that is send from the payment gateway.
         * @param array    $product             The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Process credit card upsell payment.
         *
         * @return bool
         */
        public function process_credit_card()
        {
        }
        /**
         * Handle mollie payment webhook.
         *
         * @return void
         */
        public function maybe_handle_mollie_cc_webhook()
        {
        }
        /**
         * Is gateway support offer refund?
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Admin.
     */
    class Cartflows_Pro_Gateway_Admin
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
         * Get payment gateways.
         *
         * @param array $localize localized variables.
         */
        public function localize_required_vars($localize)
        {
        }
    }
    /**
     * # WooCommerce Plugin Framework API Base Class
     *
     * This class provides a standardized framework for constructing an API wrapper
     * to external services. It is designed to be extremely flexible.
     *
     * @version 2.2.0
     */
    class Cartflows_Pro_Api_Base
    {
        /** @var string request method, defaults to POST */
        protected $request_method = 'POST';
        /** @var string URI used for the request */
        protected $request_uri;
        /** @var array request headers */
        protected $request_headers = array();
        /** @var string request user-agent */
        protected $request_user_agent;
        /** @var string request HTTP version, defaults to 1.0 */
        protected $request_http_version = '1.0';
        /** @var string request duration */
        protected $request_duration;
        /** @var object request */
        protected $request;
        /** @var string response code */
        protected $response_code;
        /** @var string response message */
        protected $response_message;
        /** @var array response headers */
        protected $response_headers;
        /** @var string raw response body */
        protected $raw_response_body;
        /** @var string response handler class name */
        protected $response_handler;
        /** @var object response */
        protected $response;
        /**
         * Perform the request and return the parsed response
         *
         * @since 2.2.0
         *
         * @param object $request class instance which implements \SV_WC_API_Request
         *
         * @throws Exception
         * @return object class instance which implements \SV_WC_API_Response
         */
        protected function perform_request($request)
        {
        }
        /**
         * Simple wrapper for wp_remote_request() so child classes can override this
         * and provide their own transport mechanism if needed, e.g. a custom
         * cURL implementation
         *
         * @since 2.2.0
         *
         * @param string $request_uri
         * @param string $request_args
         *
         * @return array|WP_Error
         */
        protected function do_remote_request($request_uri, $request_args)
        {
        }
        /**
         * Handle and parse the response
         *
         * @since 2.2.0
         *
         * @param array|WP_Error $response response data
         *
         * @throws Exception network issues, timeouts, API errors, etc
         * @return object request class instance that implements SV_WC_API_Request
         */
        protected function handle_response($response)
        {
        }
        /**
         * Allow child classes to validate a response prior to instantiating the
         * response object. Useful for checking response codes or messages, e.g.
         * throw an exception if the response code is not 200.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw a \SV_WC_API_Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Child classes *must* sanitize the raw response body before throwing
         * an exception, as it will be included in the broadcast_request() method
         * which is typically used to log requests.
         *
         * @since 2.2.0
         */
        protected function do_pre_parse_response_validation()
        {
        }
        /**
         * Allow child classes to validate a response after it has been parsed
         * and instantiated. This is useful for check error codes or messages that
         * exist in the parsed response.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw an Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Response body sanitization is handled automatically
         *
         * @since 2.2.0
         */
        protected function do_post_parse_response_validation()
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @since 2.2.0
         *
         * @param string $raw_response_body
         *
         * @return object response class instance which implements SV_WC_API_Request
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Alert other actors that a request has been performed. This is primarily used
         * for request logging.
         *
         * @since 2.2.0
         */
        protected function broadcast_request()
        {
        }
        /**
         * Reset the API response members to their
         *
         * @since 1.0.0
         */
        protected function reset_response()
        {
        }
        /** Request Getters *******************************************************/
        /**
         * Get the request URI
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_uri()
        {
        }
        /**
         * Get the request arguments in the format required by wp_remote_request()
         *
         * @since 2.2.0
         * @return mixed|void
         */
        protected function get_request_args()
        {
        }
        /**
         * Get the request method, POST by default
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_method()
        {
        }
        /**
         * Get the request HTTP version, 1.1 by default
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_http_version()
        {
        }
        /**
         * Get the request headers
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_request_headers()
        {
        }
        /**
         * Get sanitized request headers suitable for logging, stripped of any
         * confidential information
         *
         * The `Authorization` header is sanitized automatically.
         *
         * Child classes that implement any custom authorization headers should
         * override this method to perform sanitization.
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_sanitized_request_headers()
        {
        }
        /**
         * Get the request user agent, defaults to:
         *
         * Dasherized-Plugin-Name/Plugin-Version (WooCommerce/WC-Version; WordPress/WP-Version)
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_user_agent()
        {
        }
        /**
         * Get the request duration in seconds, rounded to the 5th decimal place
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_duration()
        {
        }
        /** Response Getters ******************************************************/
        /**
         * Get the response handler class name
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_handler()
        {
        }
        /**
         * Get the response code
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_code()
        {
        }
        /**
         * Get the response message
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_message()
        {
        }
        /**
         * Get the response headers
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_response_headers()
        {
        }
        /**
         * Get the raw response body, prior to any parsing or sanitization
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_raw_response_body()
        {
        }
        /**
         * Get the sanitized response body, provided by the response class
         * to_string_safe() method
         *
         * @since 2.2.0
         * @return string|null
         */
        protected function get_sanitized_response_body()
        {
        }
        /** Misc Getters ******************************************************/
        /**
         * Returns the most recent request object
         *
         * @since 2.2.0
         * @see \SV_WC_API_Request
         * @return object the most recent request object
         */
        public function get_request()
        {
        }
        /**
         * Returns the most recent response object
         *
         * @since 2.2.0
         * @see \SV_WC_API_Response
         * @return object the most recent response object
         */
        public function get_response()
        {
        }
        /**
         * Get the ID for the API, used primarily to namespace the action name
         * for broadcasting requests
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_api_id()
        {
        }
        /** Setters ***************************************************************/
        /**
         * Set a header request
         *
         * @since 2.2.0
         *
         * @param string $name header name
         * @param string $value header value
         *
         * @return string
         */
        protected function set_request_header($name, $value)
        {
        }
        /**
         * Set HTTP basic auth for the request
         *
         * Since 2.2.0
         *
         * @param string $username
         * @param string $password
         */
        protected function set_http_basic_auth($username, $password)
        {
        }
        /**
         * Set the Content-Type request header
         *
         * @since 2.2.0
         *
         * @param string $content_type
         */
        protected function set_request_content_type_header($content_type)
        {
        }
        /**
         * Set the Accept request header
         *
         * @since 2.2.0
         *
         * @param string $type the request accept type
         */
        protected function set_request_accept_header($type)
        {
        }
        /**
         * Set the response handler class name. This class will be instantiated
         * to parse the response for the request.
         *
         * Note the class should implement SV_WC_API
         *
         * @since 2.2.0
         *
         * @param string $handler handle class name
         *
         * @return array
         */
        protected function set_response_handler($handler)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Cpsw_Stripe.
     */
    class Cartflows_Pro_Gateway_Cpsw_Stripe
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'cpsw_stripe';
        /**
         * Refund supported variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Verify 3DS and create intent accordingly.
         *
         * @return bool
         */
        public function create_payment_intent()
        {
        }
        /**
         * Tokenize to save source of payment if required
         *
         * @param bool $save_source force save source.
         */
        public function tokenize_if_required($save_source)
        {
        }
        /**
         * Redirection to order received URL.
         *
         * @param array  $url response data.
         * @param object $order order data.
         */
        public function redirect_using_wc_function($url, $order)
        {
        }
        /**
         * Check if token is present.
         *
         * @param object $order order data.
         */
        public function has_token($order)
        {
        }
        /**
         * Get WooCommerce payment geteway.
         *
         * @return object
         */
        public function get_wc_gateway()
        {
        }
        /**
         * Create payment intent args.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param array    $product  The product data.
         */
        public function create_payment_intent_request_args($order, $product)
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Setup the Payment data for Stripe's Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta($subscription, $order, $offer_product)
        {
        }
        /**
         * Save the parent payment meta to child order.
         *
         * @param object $parent_order Object of order.
         * @param object $child_order Object of order.
         * @param int    $transaction_id transaction id.
         */
        public function add_required_meta_to_child_order($parent_order, $child_order, $transaction_id)
        {
        }
        /**
         * Save the parent payment meta to child order.
         *
         * @param object $order Object of order.
         * @param string $intent_id id.
         * @param bool   $initiate is intent initiate call.
         */
        public function update_payout_details($order, $intent_id, $initiate = \false)
        {
        }
        /**
         * Allow scripts on offer pages.
         *
         * @param bool $is_exclude is allowed scripts.
         */
        public function allow_cpsw_scripts_on_offer_pages($is_exclude)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Square.
     */
    class Cartflows_Pro_Gateway_Square
    {
        /**
         * Member Variable: Square gateway api_client.
         *
         * @var instance
         */
        public $api_client;
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'square_credit_card';
        /**
         * Refund supported variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Forces tokenization for upsell/downsells.
         *
         * @since 1.5.0
         *
         * @param bool $force_tokenization whether tokenization should be forced.
         * @return bool
         */
        public function maybe_force_tokenization($force_tokenization)
        {
        }
        /**
         * Add token to order.
         *
         * @param object $order order data.
         * @param object $gateway class instance.
         */
        public function square_get_order_to_add_token($order, $gateway)
        {
        }
        /**
         * Create token.
         *
         * @since 1.5.0
         *
         * @param array  $process_payment gateway data.
         * @param int    $order_id order id.
         * @param object $gateway class instance.
         * @return array
         */
        public function create_token_process_payment($process_payment, $order_id, $gateway)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return object
         */
        public function get_wc_gateway()
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Prepare data for payment.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function prepare_order_data($order, $product)
        {
        }
        /**
         * Process amount to be passed to Square payment API.
         *
         * @param int    $total order total.
         * @param string $currency currancy.
         */
        public function format_amount($total, $currency = '')
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Set up the required configuration for payment.
         */
        public function set_square_gateway_config()
        {
        }
        /**
         * Save required meta keys to refund seperate order.
         *
         * @param object $parent_order Parent order Object.
         * @param object $child_order Child order Object.
         * @param string $transaction_id id.
         */
        public function store_square_meta_keys_for_refund($parent_order, $child_order, $transaction_id)
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Setup the Payment data for Square's Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_square($subscription, $order, $offer_product)
        {
        }
        /**
         * Reduce the offer product stock.
         *
         * @param object $order Object of order.
         * @param array  $offer_product array of offer product.
         */
        public function may_reduce_the_offer_product_stock($order, $offer_product)
        {
        }
        /**
         * Return order information for creating customer response
         *
         * @param object $order Object of current order.
         *
         * @return object|\WC_Order
         * @since 1.6.4
         */
        public function update_order_with_payment_info($order)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Stripe.
     */
    class Cartflows_Pro_Gateway_Stripe
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'stripe';
        /**
         * Refund supported variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Verify 3DS and create intent accordingly.
         *
         * @return bool
         */
        public function check_stripe_sca()
        {
        }
        /**
         * Tokenize to save source of payment if required
         *
         * @param bool $save_source force save source.
         */
        public function tokenize_if_required($save_source)
        {
        }
        /**
         * Save 3d source.
         *
         * @param array $post_data Threads data.
         * @param array $order order data.
         */
        public function save_3ds_source_for_later($post_data, $order)
        {
        }
        /**
         * Redirection to order received URL.
         *
         * @param array $response response data.
         * @param array $order order data.
         */
        public function redirect_using_wc_function($response, $order)
        {
        }
        /**
         * Check if token is present.
         *
         * @param object $order order data.
         */
        public function has_token($order)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Update Stripe Payout for the Offers.
         *
         * @param WC_Order $order           The order that is being paid for.
         * @param object   $response        The response that is send from the payment gateway.
         */
        public function update_stripe_payout_details($order, $response)
        {
        }
        /**
         * Create a new PaymentIntent.
         *
         * @param WC_Order $order           The order that is being paid for.
         * @param object   $prepared_source The source that is used for the payment.
         * @param object   $product offer product.
         * @return object                   An intent or an error.
         */
        public function create_intent($order, $prepared_source, $product)
        {
        }
        /**
         * Generate payment request.
         *
         * @param object $order order data.
         * @param object $order_source order source.
         * @param array  $product product data.
         * @return array
         */
        protected function generate_payment_request($order, $order_source, $product)
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Setup the Payment data for Stripe's Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta($subscription, $order, $offer_product)
        {
        }
        /**
         * Setup the Payment data for Stripe's Automatic Subscription.
         *
         * @param object $parent_order Object of order.
         */
        public function remove_the_stripe_refund_action($parent_order)
        {
        }
        /**
         * Save the parent payment meta to child order.
         *
         * @param object $parent_order Object of order.
         * @param object $child_order Object of order.
         * @param int    $transaction_id transaction id.
         */
        public function add_required_meta_to_child_order($parent_order, $child_order, $transaction_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Woocommerce_Payments.
     */
    class Cartflows_Pro_Gateway_Woocommerce_Payments
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'woocommerce_payments';
        /**
         * Refund supported variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
        /**
         * Refund supported variable
         *
         * @var gateway_service_objects
         */
        public $gateway_service_objects = array();
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
         * Prepare the array of all the required classes of payment gateway to use it.
         *
         * @return void
         */
        public function prepare_gateway_objects()
        {
        }
        /**
         * Create intent for the offer order.
         */
        public function create_payment_intent()
        {
        }
        /**
         * Store the payment meta in the parent order to use it in the child order.
         *
         * @param object $order Parent object.
         * @param object $payment_information Object of payment information with all data.
         * @param array  $extra_data Any extra data that may require.
         */
        public function store_order_payment_meta($order, $payment_information, $extra_data)
        {
        }
        /**
         * Retrieve the token from the main order.
         *
         * @param object $order Object of current order.
         * @param bool   $has_token Separator used to log the logs.
         *
         * @return $token The retrieved order token on success & false otherwise.
         */
        public function retrieve_token_from_order($order, $has_token = \false)
        {
        }
        /**
         * Tokenize to save source of payment if required
         *
         * @param bool $save_source force save source.
         * @return bool $save_source modified save value.
         */
        public function tokenize_if_required($save_source)
        {
        }
        /**
         * Save 3d source.
         *
         * @param int $order_id current order ID.
         * @return void
         */
        public function save_3ds_source_for_later($order_id)
        {
        }
        /**
         * Render checkout ID hidden field.
         *
         * @param array $checkout checkout session data.
         * @return void
         */
        public function add_payment_gateway_option_hidden_field($checkout)
        {
        }
        /**
         * Check if token is present.
         *
         * @param object $order order data.
         */
        public function has_token($order)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return object
         */
        public function get_wc_gateway()
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Create a new PaymentIntent against the new order.
         *
         * @param object $order                The order that is being paid for.
         * @param array  $offer_product        Offer product.
         * @param object $payment_information  The source that is used for the payment.
         * @return object $intent               An intent or an error.
         */
        public function process_payment_against_intent($order, $offer_product, $payment_information)
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Setup the Payment data for Stripe's Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta($subscription, $order, $offer_product)
        {
        }
        /**
         * Save the parent payment meta to child order.
         *
         * @param object $parent_order Object of order.
         * @param object $child_order Object of order.
         * @param int    $transaction_id transaction id.
         */
        public function add_required_meta_to_child_order($parent_order, $child_order, $transaction_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Authorize_Net.
     */
    class Cartflows_Pro_Gateway_Authorize_Net
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'authorize_net_cim_credit_card';
        /**
         * Extra data required in other functions
         *
         * @var extra_data
         */
        public $extra_data = array();
        /**
         * Opaque value variable
         *
         * @var unset_opaque_value
         */
        public $unset_opaque_value = \false;
        /**
         * Characterset encoding type
         *
         * @var mb_encoding
         */
        public $mb_encoding = 'UTF-8';
        /**
         * Offer product
         *
         * @var offer_product
         */
        public $offer_product = array();
        /**
         * Refund Supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Forces tokenization for upsell/downsells.
         *
         * @since 1.5.0
         *
         * @param bool $force_tokenization whether tokenization should be forced.
         * @return bool
         */
        public function maybe_force_tokenization($force_tokenization)
        {
        }
        /**
         * Create token for non logged-in user and authorize version greater than 3.0.0
         * Forces guest tokenization for upsell/downsells.
         *
         * @since 1.5.0
         *
         * @param array  $result gateway data.
         * @param int    $order_id order id.
         * @param object $anet_obj class instance.
         * @return array
         */
        public function create_token_process_payment($result, $order_id, $anet_obj)
        {
        }
        /**
         * Get current site name.
         *
         * @return string
         */
        public function get_current_site_name()
        {
        }
        /**
         * Get order.
         *
         * @param object $order order object.
         * @return object.
         */
        public function get_order($order)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /********************************** Helper Function Start *********************************/
        /**
         * Truncates a given string. The total length of return string will not exceed the given length.
         * The given length will include omission string
         *
         * @param string $string text to truncate.
         * @param int    $length total desired length of string, including omission.
         * @param string $omission omission text, defaults to '...'.
         *
         * @return string
         * @since 1.5.0
         */
        public function string_truncate($string, $length, $omission = '...')
        {
        }
        /********************************** Helper Function End *********************************/
        /**
         * Get the token from order if availble.
         *
         * @param object $order order object.
         * @return bool
         */
        public function has_token($order)
        {
        }
        /**
         * Get the token from order if availble.
         *
         * @param object $order order object.
         * @return string
         */
        public function get_token($order)
        {
        }
        /**
         * Get customer id by order
         *
         * @param object $order order object.
         *
         * @return string customer id
         */
        public function get_customer_id($order)
        {
        }
        /**
         * Order items.
         *
         * @return array
         * @since 1.5.0
         */
        protected function get_line_items()
        {
        }
        /**
         * Request attributes.
         *
         * @param array $request request data.
         * @return array
         * @since 1.5.0
         */
        public function get_request_attributes($request)
        {
        }
        /**
         * After payment process.
         *
         * @param array $order order data.
         * @param array $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Set upsell/downsell offer order.
         *
         * @param object $order order data.
         * @return object
         */
        public function get_update_order($order)
        {
        }
        /**
         * Set upsell/downsell offer order.
         *
         * @param string $type transactin type.
         * @param object $new_order order data.
         * @return object
         */
        protected function create_transaction_request($type, $new_order)
        {
        }
        /**
         * Creating refund request data.
         *
         * @param array  $request_data request data.
         * @param object $order order object.
         * @param string $gateway gateway.
         *
         * @return array
         */
        public function offer_refund_request_data($request_data, $order, $gateway)
        {
        }
        /**
         * Process offer refund.
         *
         * @param object $order the order object.
         * @param array  $offer_data offer data.
         *
         * @return bool
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Is gateway support offer refund?
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order            The order that is being paid for.
         * @param Object   $response           The response that is send from the payment gateway.
         * @param array    $product             The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Setup the Payment data for Authorize.net Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_authorize_net($subscription, $order, $offer_product)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Paypal_Payments.
     */
    class Cartflows_Pro_Gateway_Paypal_Payments extends \Cartflows_Pro_Paypal_Gateway_helper
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'ppcp-gateway';
        /**
         * Refund supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Retrieves token for payment.
         *
         * @param object $order order details.
         *
         * @return string
         */
        public function get_token($order)
        {
        }
        /**
         * Checks the paypal payment mode.
         *
         * @param object $order WC Order.
         *
         * @return string Payment mode.
         */
        public function get_ppcp_meta($order)
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return bool
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Capture PayPal Order for PayPal Payments Gateway.
         *
         * @return json
         */
        public function create_paypal_order()
        {
        }
        /**
         * Capture PayPal Order for PayPal Payments Gateway.
         *
         * @return json
         */
        public function capture_paypal_order()
        {
        }
        /**
         * Create purchase unite for create order.
         *
         * @param object $order WC Order.
         * @param array  $offer_product upsell/downsell product.
         * @param object $args Posted and payment gateway setting data.
         *
         * @return array $purchase_unit.
         */
        public function get_purchase_units($order, $offer_product, $args)
        {
        }
        /**
         * Create breakdown for item amount.
         *
         * @param object $order WC Order.
         * @param array  $offer_product upsell/downsell product.
         *
         * @return array $breakdown item amount breakdown.
         */
        public function get_item_breakdown($order, $offer_product)
        {
        }
        /**
         * Add product's item data.
         *
         * @param object $order WC Order.
         * @param array  $offer_product upsell/downsell product.
         *
         * @return array $offer_items item data.
         */
        public function add_offer_item_data($order, $offer_product)
        {
        }
        /**
         * Get return url.
         *
         * @param array  $args required arguments.
         * @param string $session_key session key.
         * @param bool   $cancel key for action.
         *
         * @return string
         */
        public function get_return_or_cancel_url($args, $session_key, $cancel = \false)
        {
        }
        /**
         * Is gateway support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  Product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Modify argument for offer refund
         *
         * @param array  $request request.
         * @param object $order the order object.
         * @param string $amount refund amount.
         * @param string $reason refund reason.
         *
         * @return object
         */
        public function offer_refund_request_data($request, $order, $amount, $reason)
        {
        }
        /**
         * Process offer refund.
         *
         * @param WC_Order $order order data.
         * @param array    $offer_data offer data.
         *
         * @return bool
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * Setup the Payment data for Paypal Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_paypal($subscription, $order, $offer_product)
        {
        }
        /**
         * Save required keys in child order for refund purpose.
         *
         * @param object $parent_order parent order object.
         * @param object $child_order child order object.
         * @param string $transaction_id child order trandaction id.
         */
        public function store_required_meta_keys_for_refund($parent_order, $child_order, $transaction_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway.
     */
    class Cartflows_Pro_Gateway extends \Cartflows_Pro_Api_Base
    {
        /**
         * Member Variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \false;
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
         * Get value from response variable by key.
         *
         * @since 1.0.0
         *
         * @param array  $response response data.
         * @param string $key array key item.
         *
         * @return string
         */
        public function get_value_from_response($response, $key)
        {
        }
        /**
         * Format prices.
         *
         * @since 1.0.0
         *
         * @param float|int $price product price.
         * @param int       $decimals The number of decimal points.
         *
         * @return string
         */
        public function price_format($price, $decimals = 2)
        {
        }
        /**
         * Round a float
         *
         * @since 1.0.0
         *
         * @param float $number number to round.
         * @param int   $precision Optional. The number of decimal digits to round to.
         */
        public function round($number, $precision = 2)
        {
        }
        /**
         * Helper method to get item description by replacing all tags and limiting to 127 characters
         *
         * @param array       $item cart or order item.
         * @param \WC_Product $product product data.
         * @param bool        $is_offer has offer?.
         *
         * @return string
         * @since 1.0.0
         */
        public function get_item_description($item, $product, $is_offer = \false)
        {
        }
        /**
         * Load helper files
         */
        public function load_files()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Paypal_Gateway_Helper .
     */
    class Cartflows_Pro_Paypal_Gateway_Helper extends \Cartflows_Pro_Gateway
    {
        /**
         * Live API URL.
         *
         * @var live_api
         */
        public $live_api = 'https://api-3t.paypal.com/nvp';
        /**
         * Test API URL.
         *
         * @var test_api
         */
        public $test_api = 'https://api-3t.sandbox.paypal.com/nvp';
        /**
         * Gateway parameters.
         *
         * @var parameters
         */
        public $parameters = array();
        /**
         * Add single parameter.
         *
         * @param string $key key.
         * @param string $value value.
         */
        public function add_parameter($key, $value)
        {
        }
        /**
         * Add multiple parameters.
         *
         * @param array $params parameters.
         */
        public function add_parameters(array $params)
        {
        }
        /**
         * Set the method for request
         *
         * @param string $method request method param.
         *
         * @since 1.0.0
         */
        public function set_method($method)
        {
        }
        /**
         * Update payment params
         *
         * @since 1.0.0
         *
         * @param WC_Order $order order object.
         * @param int      $step_id step ID.
         * @param string   $type transaction type.
         * @param bool     $use_deprecated_params whether to use deprecated PayPal?.
         * @param bool     $is_offer_charge is offer charge.
         * @param int      $variation_id variation id.
         * @param int      $input_qty input qty.
         */
        public function add_payment_params(\WC_Order $order, $step_id, $type, $use_deprecated_params = \false, $is_offer_charge = \false, $variation_id = '', $input_qty = '')
        {
        }
        /**
         * Adds a line item parameters to the request
         *
         * @param array $params paramters.
         * @param int   $item_count current item count.
         * @param bool  $use_deprecated_params whether to use deprecated PayPal?.
         * @since 1.0.0
         */
        public function add_litem_params(array $params, $item_count, $use_deprecated_params = \false)
        {
        }
        /**
         * Skip line items and send as single item
         *
         * @since 1.0.0
         *
         * @param WC_Order $order Optional. The WC_Order object. Default null.
         * @param array    $order_items Order items.
         *
         * @return bool true if line items should be skipped, false otherwise
         */
        public function skip_line_items($order = \null, $order_items = \null)
        {
        }
        /**
         * Convert parameter array to HTTP build string
         *
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get payment parameters.
         *
         * @return array
         * @throws Exception Paramter errors.
         */
        public function get_parameters()
        {
        }
        /**
         * Check if api response has error
         *
         * @param array $response response object array.
         * @return bool
         */
        public function has_error_api_response($response)
        {
        }
        /**
         * Set variables for API calls
         *
         * @param int    $gateway_id gateway ID.
         * @param string $api_env Api enviornment.
         * @param string $api_usr API username.
         * @param string $api_pass API password.
         * @param string $api_sign API signature.
         */
        public function setup_api_vars($gateway_id, $api_env, $api_usr, $api_pass, $api_sign)
        {
        }
        /**
         * Add api credentials parameters
         *
         * @param string $api_username API username.
         * @param string $api_password API password.
         * @param string $api_signature API signature.
         * @param string $api_version API version.
         * @return void
         */
        public function add_credentials_param($api_username, $api_password, $api_signature, $api_version)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Cod.
     */
    class Cartflows_Pro_Gateway_Cod
    {
        /**
         * Refund supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \false;
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
         * Loads module files.
         *
         * @since 1.0.0
         * @param string $order_status order status.
         * @param array  $order order data.
         * @return string
         */
        public function maybe_setup_upsell_cod($order_status, $order)
        {
        }
        /**
         * Process offer payment
         *
         * @since 1.0.0
         * @param array $order order data.
         * @param array $product product data.
         * @return bool
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Is gateway support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Mollie_ideal.
     */
    class Cartflows_Pro_Gateway_Mollie_Ideal extends \Cartflows_Pro_Mollie_Gateway_Helper
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'mollie_wc_gateway_ideal';
        /**
         * Refund Supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * May be setup upsell.
         *
         * @param object $order Order object.
         *
         * @return void
         */
        public function maybe_setup_upsell($order)
        {
        }
        /**
         * Get webhook url.
         *
         * @param int    $step_id step id.
         * @param int    $order_id order id.
         * @param string $order_key order key.
         *
         * @return string
         */
        public function get_webhook_url($step_id, $order_id, $order_key)
        {
        }
        /**
         * After payment process.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order            The order that is being paid for.
         * @param Object   $response           The response that is send from the payment gateway.
         * @param array    $product             The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Process credit card upsell payment.
         *
         * @return bool
         */
        public function process_ideal_payment()
        {
        }
        /**
         * Handle mollie payment webhook.
         *
         * @return void
         */
        public function maybe_handle_mollie_ideal_webhook()
        {
        }
        /**
         * Is gateway support offer refund?
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Paypal_Standard.
     */
    class Cartflows_Pro_Gateway_Paypal_Standard extends \Cartflows_Pro_Paypal_Gateway_helper
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'paypal';
        /**
         * Token variable
         *
         * @var token
         */
        public $token = \null;
        /**
         * Refund supported
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Handles ipn response and save it to order meta.
         *
         * @param array $posted Post data after wp_unslash.
         */
        public function update_ipn_status($posted)
        {
        }
        /**
         * Modify order status from ipn status retrieved from order meta.
         *
         * @param string   $status order status.
         * @param WC_Order $order order data.
         */
        public function modify_order_status($status, $order)
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
         * Check if gateway has API details.
         *
         * @return bool
         */
        public function has_api_details()
        {
        }
        /**
         * Get Payer ID from option value.
         *
         * @return bool
         */
        public function get_woo_payer_id()
        {
        }
        /**
         * Get Payer details from option value.
         *
         * @return bool
         */
        public function get_woo_pal_details()
        {
        }
        /**
         * Load paypal object payment JS.
         *
         * @return void
         */
        public function payment_scripts()
        {
        }
        /**
         * Check if current order has paypal gatway
         *
         * @return bool
         */
        public function has_paypal_gateway()
        {
        }
        /**
         * Generate script for paypal payment popup.
         *
         * @return string
         */
        public function generate_script()
        {
        }
        /**
         * Generates express checkout token
         *
         * @return void
         */
        public function generate_express_checkout_token()
        {
        }
        /**
         * Initiates express checkout request
         *
         * @param array $args arguments.
         * @param bool  $is_upsell is upsell.
         * @return array
         */
        public function initiate_express_checkout_request($args, $is_upsell = \false)
        {
        }
        /**
         * Adds express checkout parameters
         *
         * @param array $args arguments.
         * @param bool  $is_upsell is upsell.
         * @return void
         */
        public function add_express_checkout_params($args, $is_upsell = \false)
        {
        }
        /**
         * Get callback URL for paypal payment API request.
         *
         * @param array $args arguments.
         * @return string
         */
        public function get_callback_url($args)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function wc_gateway()
        {
        }
        /**
         * Clean params.
         *
         * @return void
         */
        public function clean_params()
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @since 1.0.0
         *
         * @param string $raw_response_body response body.
         *
         * @return object
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Set methods and token paramter.
         *
         * @param string $token Token string.
         */
        public function set_express_checkout_method($token)
        {
        }
        /**
         * Request to get express checkout details.
         *
         * @param string $token token.
         *
         * @return object
         */
        public function perform_express_checkout_details_request($token)
        {
        }
        /**
         * Retrieves token for payment.
         *
         * @param object $order order details.
         *
         * @return string
         */
        public function get_token($order)
        {
        }
        /**
         * After payment process.
         *
         * @param array $order order data.
         * @param array $product product data.
         * @return bool
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  Product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Sets up arguments and performs DoReferenceTransaction call
         *
         * @param int   $billing_agreement_id agreement ID.
         * @param array $order order data.
         * @param array $args arguments.
         * @param array $product product details.
         *
         * @return object
         */
        public function process_reference_transaction($billing_agreement_id, $order, $args, $product)
        {
        }
        /**
         * Charge a payment against a reference token
         *
         * @param string   $reference_id the ID of a reference object, e.g. billing agreement ID.
         * @param WC_Order $order order object.
         * @param array    $offer_product offer product data.
         * @param array    $args arguments.
         *
         * @since 1.0.0
         */
        public function add_reference_trans_args($reference_id, $order, $offer_product, $args = array())
        {
        }
        /**
         * Processes API calls.
         * This function will be executed if reference Trasaction is disabled.
         *
         * @return void
         */
        public function process_api_calls()
        {
        }
        /**
         * Performs express checkout request
         *
         * @param string $token token string.
         * @param array  $order Order data.
         * @param array  $args arguments data.
         *
         * @return object
         */
        public function perform_express_checkout_request($token, $order, $args)
        {
        }
        /**
         * Sets up DoExpressCheckoutPayment API Call arguments
         *
         * @param string   $token Unique token of the payment initiated.
         * @param WC_Order $order order data.
         * @param array    $args arguments data.
         */
        public function add_do_express_checkout_params($token, $order, $args)
        {
        }
        /**
         * Create billing agreement for future reference transaction.
         *
         * @throws Exception Billing agreement errors.
         */
        public function create_billing_agreement()
        {
        }
        /**
         * Is gateway support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Modify argument for offer refund
         *
         * @param array  $request request.
         * @param object $order the order object.
         * @param string $amount refund amount.
         * @param string $reason refund reason.
         *
         * @return object
         */
        public function offer_refund_request_data($request, $order, $amount, $reason)
        {
        }
        /**
         * Process offer refund.
         *
         * @param WC_Order $order order data.
         * @param array    $offer_data offer data.
         *
         * @return bool
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * Setup the Payment data for Paypal Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_paypal($subscription, $order, $offer_product)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gateway_Square_Old.
     */
    class Cartflows_Pro_Gateway_Square_Old
    {
        /**
         * Key name variable
         *
         * @var key
         */
        public $key = 'square_credit_card';
        /**
         * Refund supported variable
         *
         * @var is_api_refund
         */
        public $is_api_refund = \true;
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
         * Forces tokenization for upsell/downsells.
         *
         * @since 1.5.0
         *
         * @param bool $force_tokenization whether tokenization should be forced.
         * @return bool
         */
        public function maybe_force_tokenization($force_tokenization)
        {
        }
        /**
         * Add token to order.
         *
         * @param object $order order data.
         * @param object $gateway class instance.
         */
        public function square_get_order_to_add_token($order, $gateway)
        {
        }
        /**
         * Create token.
         *
         * @since 1.5.0
         *
         * @param array  $process_payment gateway data.
         * @param int    $order_id order id.
         * @param object $gateway class instance.
         * @return array
         */
        public function create_token_process_payment($process_payment, $order_id, $gateway)
        {
        }
        /**
         * Get WooCommerce payment geteways.
         *
         * @return array
         */
        public function get_wc_gateway()
        {
        }
        /**
         * After payment process.
         *
         * @param array $order order data.
         * @param array $product product data.
         * @return array
         */
        public function process_offer_payment($order, $product)
        {
        }
        /**
         * Prepare data for payment.
         *
         * @param object $order order data.
         * @param array  $product product data.
         * @return array
         */
        public function prepare_order_data($order, $product)
        {
        }
        /**
         * Process amount to be passed to Square payment API.
         *
         * @param int    $total order total.
         * @param string $currency currancy.
         */
        public function format_amount($total, $currency = '')
        {
        }
        /**
         * Store Offer Trxn Charge.
         *
         * @param WC_Order $order    The order that is being paid for.
         * @param Object   $response The response that is send from the payment gateway.
         * @param array    $product  The product data.
         */
        public function store_offer_transaction($order, $response, $product)
        {
        }
        /**
         * Set up the required configuration for payment.
         */
        public function set_square_gateway_config()
        {
        }
        /**
         * Save required meta keys to refund seperate order.
         *
         * @param object $parent_order Parent order Object.
         * @param object $child_order Child order Object.
         * @param string $transaction_id id.
         */
        public function store_square_meta_keys_for_refund($parent_order, $child_order, $transaction_id)
        {
        }
        /**
         * Process offer refund
         *
         * @param object $order Order Object.
         * @param array  $offer_data offer data.
         *
         * @return string/bool.
         */
        public function process_offer_refund($order, $offer_data)
        {
        }
        /**
         * Allow gateways to declare whether they support offer refund
         *
         * @return bool
         */
        public function is_api_refund()
        {
        }
        /**
         * Setup the Payment data for Square's Automatic Subscription.
         *
         * @param WC_Subscription $subscription An instance of a subscription object.
         * @param object          $order Object of order.
         * @param array           $offer_product array of offer product.
         */
        public function add_subscription_payment_meta_for_square($subscription, $order, $offer_product)
        {
        }
        /**
         * Reduce the offer product stock.
         *
         * @param object $order Object of order.
         * @param array  $offer_product array of offer product.
         */
        public function may_reduce_the_offer_product_stock($order, $offer_product)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Orders
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
         * Get order status slug.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_order_status_slug()
        {
        }
        /**
         * Get order status title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_order_status_title()
        {
        }
        /**
         * Register new order status.
         *
         * @since 1.0.0
         * @param string $order_status order status.
         *
         * @return array
         */
        public function register_new_order_status($order_status)
        {
        }
        /**
         * Update native statuses.
         *
         * @since 1.0.0
         * @param string $order_status Order status.
         *
         * @return array
         */
        public function update_to_native_stauses($order_status)
        {
        }
        /**
         * Add upsell product and order meta.
         *
         * @since 1.0.0
         * @param array $order order.
         * @param array $upsell_product upsell product.
         * @return void
         */
        public function add_upsell_product($order, $upsell_product)
        {
        }
        /**
         * Add downsell product.
         *
         * @since 1.0.0
         * @param array $order order.
         * @param array $downsell_product downsell product.
         * @return void
         */
        public function add_downsell_product($order, $downsell_product)
        {
        }
        /**
         * Add shipping to order.
         *
         * @param array $product_data offer product.
         * @param array $order parent order.
         * @return void
         */
        public function add_shipping_charges_to_order($product_data, $order)
        {
        }
        /**
         * Add offer product.
         *
         * @since 1.0.0
         * @param array  $order order.
         * @param array  $product_data offer product.
         * @param string $type offer product type.
         * @return void
         */
        public function add_offer_product($order, $product_data, $type = 'upsell')
        {
        }
        /**
         * Normalize order status.
         *
         * @since 1.0.0
         * @param object $order order.
         * @return void
         */
        public function may_be_normalize_status($order)
        {
        }
        /**
         * Normalize order status.
         *
         * @since 1.0.0
         * @param array  $order order.
         * @param string $before_normal before status.
         * @param string $normal_status normal status.
         * @return void
         */
        public function do_normalize_status($order, $before_normal = 'pending', $normal_status = 'processing')
        {
        }
        /**
         * Check if order is active.
         *
         * @since 1.0.0
         * @return bool
         */
        public function is_main_order_active()
        {
        }
        /**
         * Schedule normalize order status.
         *
         * @since 1.0.0
         * @param int    $order_id order id.
         * @param string $before_normal before status.
         * @param string $normal_status normal status.
         * @return void
         */
        public function schedule_normalize_order_status($order_id, $before_normal, $normal_status)
        {
        }
        /**
         * Register order status to main order.
         *
         * @since 1.0.0
         * @param array $order order data.
         * @return void
         */
        public function register_order_status_to_main_order($order)
        {
        }
        /**
         * Set order status to complete.
         *
         * @since 1.0.0
         * @param string $order_status order status.
         * @param int    $id order id.
         * @param array  $order order data.
         * @return string
         */
        public function maybe_set_completed_order_status($order_status, $id, $order)
        {
        }
        /**
         * Create child offer order.
         *
         * @since 1.0.0
         * @param object $parent_order order.
         * @param array  $product_data offer product.
         * @param string $type         offer product type.
         */
        public function create_child_order($parent_order, $product_data, $type = 'upsell')
        {
        }
        /**
         * Cancel the parent order.
         *
         * @param object $parent_order order.
         * @param array  $product_data offer data.
         * @param string $type offer type.
         * @param object $order child order.
         */
        public function cancel_parent_order($parent_order, $product_data, $type, $order)
        {
        }
        /**
         * Complete payment of child order offer.
         *
         * @since 1.0.0
         * @param object $order          order.
         * @param string $transaction_id Transaction id.
         */
        public function payment_complete($order, $transaction_id = '')
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Order_Fields_Shortcode
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
         * Order details shortcode markup.
         *
         * @param array $atts attributes ( $atts['key'] can be first_name, last_name, email, phone, city ).
         * @return string
         */
        public function order_fields_markup($atts)
        {
        }
        /**
         * Optin details shortcode markup.
         *
         * @param array $atts attributes ( $atts['key'] can be first_name, last_name, email ).
         * @return string
         */
        public function url_fields_markup($atts)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Shortcodes
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
    class Cartflows_Pro_Optin
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
    class Cartflows_Pro_Optin_Default_Meta
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
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Optin_Markup
    {
        /**
         * Member Variable
         *
         * @var is_divi_enabled
         */
        public $divi_status = \false;
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
         * Send custom fields in the order email.
         *
         * @param array  $fields of fields.
         * @param string $sent_to_admin domain name to send.
         * @param object $order of order details.
         */
        public function send_custom_fields_in_woo_email($fields, $sent_to_admin, $order)
        {
        }
        /**
         * Display billing custom field data on order page
         *
         * @param obj $order Order object.
         * @return void
         */
        public function display_billing_custom_fields_in_order_meta($order)
        {
        }
        /**
         * Load shortcode scripts.
         *
         * @return void
         */
        public function optin_style_scripts()
        {
        }
        /**
         * Prepare default country locale.
         *
         * @param array $fields country locale fields.
         * @param int   $optin_id checkout id.
         * @return array
         */
        public function optin_default_fields($fields, $optin_id)
        {
        }
        /**
         * Prepare default country locale.
         *
         * @param array $fields country locale fields.
         * @param int   $optin_id checkout id.
         * @return array
         */
        public function optin_fields($fields, $optin_id)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Pro_Optin_Meta_Data
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
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Ab_Test
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
    class Cartflows_Pro_Ab_Test_Meta
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
         * Localize variables in admin
         *
         * @param array $vars variables.
         */
        public function localize_vars($vars)
        {
        }
        /**
         * Delete variation and archive it.
         *
         * @param int  $flow_id Flow id.
         * @param int  $step_id Step id.
         * @param bool $delete_data Delete step and it's meta.
         */
        public function delete_variation($flow_id, $step_id, $delete_data = \false)
        {
        }
        /**
         * Delete ab test delete.
         *
         * @return void
         */
        public function delete_ab_test_variation()
        {
        }
        /**
         * Delete ab test delete.
         *
         * @return void
         */
        public function archive_ab_test_variation()
        {
        }
        /**
         * Create variation for current step
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function create_ab_test_variation()
        {
        }
        /**
         * Start split test for current variation
         *
         * @since 1.6.13
         *
         * @return void
         */
        public function start_ab_test()
        {
        }
        /**
         * Declare ab test winner
         *
         * @since 1.6.13
         *
         * @return void
         */
        public function declare_ab_test_winner()
        {
        }
        /**
         * Create variation for current step
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function clone_ab_test_variation()
        {
        }
        /**
         * Restore archived variation.
         *
         * @return void
         */
        public function restore_archive_ab_test_variation()
        {
        }
        /**
         * Delete archived variation.
         *
         * @return void
         */
        public function delete_archive_ab_test_variation()
        {
        }
    }
    /**
     * AB test Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Ab_Test_Markup
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
         * Process ab test
         *
         * @param int $step_id Step id.
         */
        public function process_ab_test($step_id)
        {
        }
    }
    /**
     * AB test factory
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Ab_Test_Factory
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
         * Get flow steps
         */
        public function get_flow_steps()
        {
        }
        /**
         * Set flow steps map
         */
        public function check_step_cookie()
        {
        }
        /**
         * Set flow steps map
         */
        public function get_step_cookie()
        {
        }
        /**
         * Set visited cookie
         */
        public function set_step_cookie()
        {
        }
        /**
         *  Get cookie path
         *
         * @return string cookiepath.
         */
        public function get_cookiepath()
        {
        }
        /**
         * Set ab test
         */
        public function set_ab_test()
        {
        }
        /**
         * Run ab test
         *
         * @return string redirect.
         */
        public function run_ab_test()
        {
        }
        /**
         * Handle redirection to given step.
         *
         * @param int $step_id step id.
         */
        public function redirect_to_step($step_id)
        {
        }
        /**
         * Redirect to winner step.
         *
         * @param int $step_id step id.
         */
        public function maybe_redirect_winner_step($step_id)
        {
        }
        /**
         * Choose variation based on current traffic.
         *
         * @return int variation id.
         */
        public function choose_display_variation()
        {
        }
        /**
         * Overrides variation content to control url
         *
         * @param int $variation_id chosen variation id.
         * @return void
         * @since X.X.X
         */
        public function override_variation_content_to_control($variation_id)
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Email
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
    }
    /**
     * Offer Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Base_Offer_Markup
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
         *  Offer script
         */
        public function offer_scripts()
        {
        }
        /**
         * Offer accepeted
         *
         * @param int   $step_id Flow step id.
         * @param array $extra_data extra data.
         * @param array $result process result.
         * @since 1.0.0
         */
        public function offer_accepted($step_id, $extra_data, $result)
        {
        }
        /**
         * Offer rejected
         *
         * @param int   $step_id Flow step id.
         * @param array $extra_data extra data.
         * @param array $result process result.
         * @since 1.0.0
         */
        public function offer_rejected($step_id, $extra_data, $result)
        {
        }
        /**
         * Offer rejected
         *
         * @param int    $step_id Flow step id.
         * @param object $order order data.
         */
        public function maybe_skip_offer($step_id, $order)
        {
        }
        /**
         * Get next step id for skipped offers.
         *
         * @param int $current_step_id step id.
         * @param int $step_to_redirect default step id.
         */
        public function get_next_step_id_for_skip_offer($current_step_id, $step_to_redirect)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Pro_Base_Offer_Meta_Data
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
         * Filter checkout values
         *
         * @param  array $options options.
         */
        public function filter_values($options)
        {
        }
        /**
         * Gget_offer_step_default_fields
         *
         * @param  array $step_default_fields step default fields.
         * @param  int   $step_id Post meta.
         */
        public function get_offer_step_default_fields($step_default_fields, $step_id)
        {
        }
        /**
         * Page Header Tabs
         *
         * @param  array $settings settings.
         * @param  int   $step_id Post meta.
         */
        public function get_settings($settings, $step_id)
        {
        }
        /**
         * Get_page_settings
         *
         * @param string $step_id step id.
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
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Base_Offer_Shortcodes
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
         * Product selection options
         */
        public function product_title()
        {
        }
        /**
         * Product selection options
         */
        public function product_desc()
        {
        }
        /**
         * Product selection options
         */
        public function product_short_desc()
        {
        }
        /**
         * Product selection options
         */
        public function product_price()
        {
        }
        /**
         * Product selection options
         */
        public function product_diff_price()
        {
        }
        /**
         * Product selection options
         */
        public function product_image()
        {
        }
        /**
         * Product selection options
         */
        public function variation_selector()
        {
        }
        /**
         * Product selection options
         */
        public function quantity_selector()
        {
        }
        /**
         * Get all selected products
         *
         * @param string $context context of data.
         */
        public function get_offer_product($context = 'data')
        {
        }
        /**
         * Offer shortcode markup
         *
         * @param array $atts attributes.
         * @return string
         */
        public function offer_button_shortcode_markup($atts)
        {
        }
        /**
         * Offer shortcode markup
         *
         * @param array $atts attributes.
         * @return string
         */
        public function offer_link_yes_markup($atts)
        {
        }
        /**
         * Offer shortcode markup
         *
         * @param array $atts attributes.
         * @return string
         */
        public function offer_link_no_markup($atts)
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
        public function override_woo_variable_template($template, $template_name, $template_path)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Pro_Offer_Order_Meta
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
         * Show order type in price column.
         *
         * @param html   $formatted_total order total.
         * @param object $order order object.
         * @return html $formatted_total order total.
         */
        public function add_order_type($formatted_total, $order)
        {
        }
        /**
         *  Display child orders in order detail page.
         *
         * @param object $order order object.
         * @return void
         */
        public function offer_linked_orders($order)
        {
        }
    }
    /**
     * CartFlows offer subscriptions
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Offer_Subscriptions
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
         * Create Add to main order subscription
         *
         * @since 1.0.0
         * @param object $order order data.
         * @param array  $offer_product offer product data.
         * @return void
         */
        public function add_to_main_order_subcription($order, $offer_product)
        {
        }
        /**
         * Create separate order order subscription
         *
         * @since 1.0.0
         * @param object $order child order data. Product to be subscribed.
         * @param array  $offer_product offer product data.
         * @param object $parent_order Parent order data.
         * @return void
         */
        public function separate_order_subcription($order, $offer_product, $parent_order)
        {
        }
        /**
         *  Create WooCommerce subscription
         *
         * @since 1.0.0
         * @param object $order order data.
         * @param array  $offer_product offer product data.
         * @return bool|object
         */
        public function maybe_create_subscription($order, $offer_product)
        {
        }
        /**
         *  Create new customer.
         *
         * @since 1.0.0
         * @param string $email user email.
         * @return int
         */
        public function create_new_customer($email)
        {
        }
        /**
         *  Cancel full subscription while cancelling.
         *
         * @since 1.6.13
         * @param object $parent_order Order object.
         * @return void
         */
        public function full_subscription_cancellation($parent_order)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Base_Offer
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
     * Offer Product Price Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Price extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget price.
         *
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget price.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Price controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Price Style Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_price_style_controls()
        {
        }
        /**
         * Render Offer Product Price output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Price output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_price()
        {
        }
        /**
         * Render Offer Product Price output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Checkout Form Widget
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_Checkout_Form_Extend
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.13
         * @var object $settings
         */
        public static $settings;
        /**
         * Checkout Settings
         *
         * @since 1.6.13
         * @var object $checkout_settings
         */
        public static $checkout_settings;
        /**
         * Register Two Step Navigation Button Controls.
         *
         * @param array $elementor element data.
         * @param array $args data.
         *
         * @since 1.6.13
         * @access protected
         */
        public function register_two_step_section_controls($elementor, $args)
        {
        }
        /**
         * Register Two Step style Controls.
         *
         * @param array $elementor element data.
         * @param array $args data.
         *
         * @since 1.6.13
         * @access protected
         */
        public function register_two_step_style_controls($elementor, $args)
        {
        }
        /**
         * Register product option section Controls.
         *
         * @param object $elementor element data.
         * @param array  $args data.
         *
         * @since 1.6.13
         * @access protected
         */
        public function register_product_option_section_controls($elementor, $args)
        {
        }
        /**
         * Register product options Style Controls.
         *
         * @param object $elementor element data.
         * @param array  $args data.
         *
         * @since 1.6.13
         */
        public function register_product_options_style_controls($elementor, $args)
        {
        }
        /**
         * Added dynamic filter.
         *
         * @param array $settings settings data.
         *
         * @since 1.6.13
         */
        public function dynamic_filters($settings)
        {
        }
    }
    /**
     * Offer Product Variation Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Variation extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget Variation.
         *
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget Variation.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Variation controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Variation Style Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_variation_style_controls()
        {
        }
        /**
         * Render Offer Product Variation output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Variation output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_variation()
        {
        }
        /**
         * Render Offer Product Variation output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Offer Product Image Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Image extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget Image.
         *
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget Image.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Image controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Image Style Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_image_style_controls()
        {
        }
        /**
         * Register Offer Product Image Style Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_thumbnails_style_controls()
        {
        }
        /**
         * Render Offer Product Image output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Image output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_image()
        {
        }
        /**
         * Render Offer Product Image output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Offer Product Quantity Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Quantity extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget Quantity.
         *
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget Quantity.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Quantity controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Quantity Style Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_quantity_style_controls()
        {
        }
        /**
         * Render Offer Product Quantity output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Quantity output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_quantity()
        {
        }
        /**
         * Render Offer Product Quantity output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Checkout Form Widget
     *
     * @since 1.6.13
     */
    class CartFlows_Pro_Optin_Form_Extend
    {
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Settings
         *
         * @since 1.6.13
         * @var object $settings
         */
        public static $settings;
    }
    /**
     * Offer Product Description Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Description extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Retrieve the widget description.
         *
         * @since x.x.x
         *
         * @access public
         *
         * @return string Widget description.
         */
        public function get_title()
        {
        }
        /**
         * Retrieve the widget icon.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Description controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Description Styling Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_description_style_controls()
        {
        }
        /**
         * Render Offer Product Description output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Description output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_description()
        {
        }
        /**
         * Render Offer Product Description output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Offer Yes No Button Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Action_Button extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Retrieve Offer Yes/No Button sizes.
         *
         * @since x.x.x
         * @access public
         *
         * @return array Offer Yes/No Button Sizes.
         */
        public static function get_button_sizes()
        {
        }
        /**
         * Register Offer Yes/No Button controls controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Yes/No Button General Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_button_content_controls()
        {
        }
        /**
         * Register Offer Yes/No Button Styling Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_button_style_controls()
        {
        }
        /**
         * Register Button Content Styling Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_button_content_style_controls()
        {
        }
        /**
         * Render Offer Yes/No Button icon.
         *
         * @since x.x.x
         * @param string $position Icon position.
         * @param array  $settings settings.
         * @access protected
         */
        protected function render_button_icon($position, $settings)
        {
        }
        /**
         * Render Yes No Button output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Menu Offer Yes No Button output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_action_button()
        {
        }
        /**
         * Render Offer Yes No Button output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Offer Product Title Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Product_Title extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Product Title controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Product Title Styling Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_product_title_style_controls()
        {
        }
        /**
         * Render Offer Product Title output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Offer Product Title output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_product_title()
        {
        }
        /**
         * Render Offer Product Title output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Offer Yes No Button Widget
     *
     * @since x.x.x
     */
    class Cartflows_Pro_Offer_Action_Link extends \Elementor\Widget_Base
    {
        /**
         * Module should load or not.
         *
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
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
         * @since x.x.x
         * @access public
         *
         * @return string Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register Offer Yes/No Link controls controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Register Offer Yes/No Link General Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_link_content_controls()
        {
        }
        /**
         * Register Offer Yes/No Link Styling Controls.
         *
         * @since x.x.x
         * @access protected
         */
        protected function register_link_style_controls()
        {
        }
        /**
         * Render Offer Yes/No Link icon.
         *
         * @since x.x.x
         * @param string $position Icon position.
         * @param array  $settings settings.
         * @access protected
         */
        protected function render_link_icon($position, $settings)
        {
        }
        /**
         * Render Yes No Link output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Menu Offer Yes No Link output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since x.x.x
         * @access protected
         */
        protected function render_offer_action_link()
        {
        }
        /**
         * Render Offer Yes No Link output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * Remove this after Elementor v3.3.0
         *
         * @since x.x.x
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Set up Widgets Loader class
     */
    class Cartflows_Pro_Widgets_Loader
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
         * @since 1.6.13
         * @param string $hook Current page hook.
         * @access public
         */
        public function admin_enqueue_styles($hook)
        {
        }
        /**
         * Extend widget with pro functionality.
         *
         * @since 1.6.13
         */
        public function widget_extend_files()
        {
        }
        /**
         * Returns Script array.
         *
         * @return array()
         * @since 1.6.13
         */
        public static function get_widget_list()
        {
        }
        /**
         * Include Widgets files
         *
         * Load widgets files
         *
         * @since 1.6.13
         * @access public
         */
        public function include_widgets_files()
        {
        }
        /**
         * Register Widgets
         *
         * Register new Elementor widgets.
         *
         * @since 1.6.13
         * @access public
         */
        public function register_widgets()
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Upsell_Markup extends \Cartflows_Pro_Base_Offer_Markup
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
         *  Process upsell acceptance
         *
         * @param boolean $verify_nonce nonce check.
         * @return void
         */
        public function process_upsell_accepted($verify_nonce = \true)
        {
        }
        /**
         *  Process upsell rejection
         *
         * @return void
         */
        public function process_upsell_rejected()
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Upsell
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
     * Multistep Checkout
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Multistep_Checkout
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
         * Add localize variables.
         *
         * @since 1.1.5
         * @param array $localize settings.
         * @return array $localize settings.
         */
        public function localize_vars_for_multistep_layout($localize)
        {
        }
        /**
         * Include custom class for multistep checkout.
         *
         * @param string $checkout_layout layout type.
         */
        public function add_class_for_multistep_checkout($checkout_layout)
        {
        }
        /**
         * Add order review template path for multistep checkout.
         *
         * @param string $path template path.
         * @param string $checkout_layout layout type.
         */
        public function update_path_for_order_review_template($path, $checkout_layout)
        {
        }
        /**
         * Multistep Checkout Layout Actions.
         *
         * @param int $checkout_id checkout ID.
         */
        public function multistep_checkout_layout_actions($checkout_id)
        {
        }
        /**
         * Update cart total on button and order review mobile sction.
         *
         * @param string $fragments shipping message.
         *
         * @return array $fragments updated Woo fragments.
         */
        public function update_order_review_template($fragments)
        {
        }
        /**
         * Return true if checkout layout skin is conditional checkout.
         *
         * @param int $checkout_id Checkout ID.
         *
         * @return bool
         */
        public function is_multistep_checkout_layout($checkout_id = '')
        {
        }
        /**
         * Include custom order review template.
         */
        public function custom_order_review_template()
        {
        }
        /**
         * Add custom shipping method secition.
         */
        public function add_shipping_section()
        {
        }
        /**
         * Add custom contact section for shipping step.
         */
        public function custom_contact_section()
        {
        }
        /**
         * Add Customer Information Section.
         *
         * @param int $checkout_id checkout ID.
         *
         * @return void
         */
        public function multistep_customer_info_parent_wrapper_start($checkout_id)
        {
        }
        /**
         * Add Customer Information Section.
         *
         * @param int $checkout_id checkout ID.
         *
         * @return void
         */
        public function add_multistep_checkout_breadcrumb($checkout_id)
        {
        }
        /**
         * Add back button for payment step.
         *
         * @param string $html Button HTML.
         */
        public function add_back_nav_button_for_payment($html)
        {
        }
        /**
         * Add bottom navigation buttons.
         *
         * @param int $checkout_id checkout ID.
         */
        public function add_navigation_buttons($checkout_id)
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
         * Display Payment heading field after coupon code fields.
         */
        public function custom_address_section()
        {
        }
        /**
         * Prefill the checkout fields if available in url.
         *
         * @param array $checkout_fields checkout fields array.
         */
        public function unset_fields_for_multistep_checkout($checkout_fields)
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
    }
    /**
     * Class Cartflows_Pro_Checkout_Rules.
     */
    class Cartflows_Pro_Checkout_Rules
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
         * Conditional redirection.
         *
         * @param string $next_step_id next step.
         * @param object $order order data.
         * @param int    $checkout_id id.
         */
        public function conditional_redirection_after_checkout($next_step_id, $order, $checkout_id)
        {
        }
        /**
         * Set order data.
         *
         * @param object $order order data.
         */
        public function set_order_data($order)
        {
        }
        /**
         * Get Group result.
         *
         * @param array $rules rules.
         */
        public function get_group_rules_result($rules)
        {
        }
        /**
         * Get order item categories.
         */
        public function get_order_items_categories()
        {
        }
        /**
         * Get order item tags.
         */
        public function get_order_items_tags()
        {
        }
        /**
         * Get order shipping method.
         */
        public function get_order_shipping_method()
        {
        }
        /**
         * Get order coupons.
         */
        public function get_order_coupons()
        {
        }
        /**
         * Get order total.
         */
        public function get_order_total()
        {
        }
        /**
         * Get order billing country.
         */
        public function get_order_billing_country()
        {
        }
        /**
         * Get order shipping country.
         */
        public function get_order_shipping_country()
        {
        }
        /**
         * Get order payment method.
         */
        public function get_order_payment_method()
        {
        }
        /**
         * Get custom field value from the order.
         *
         * @param array $value array of values.
         */
        public function get_order_custom_meta_key_value($value)
        {
        }
        /**
         * Compare string values.
         *
         * @param array  $order_values order values.
         * @param array  $rule_values rules values.
         * @param object $operator rule operator.
         */
        public function compare_string_values($order_values, $rule_values, $operator)
        {
        }
        /**
         * Compare string values.
         *
         * @param string $order_value order values.
         * @param array  $rule_value rules values.
         * @param string $operator rule operator.
         */
        public function compare_number_values($order_value, $rule_value, $operator)
        {
        }
    }
    /**
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Checkout_Markup
    {
        /**
         * Member Variable
         *
         * @var is_divi_enabled
         */
        public $divi_status = \false;
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
         * Skip the cart configuration when product is added from URL.
         *
         * @param bool $skip_cart is skip cart.
         * @param int  $checkout_id checkout id.
         */
        public function skip_cart_configuration($skip_cart, $checkout_id)
        {
        }
        /**
         * Add the product in cart through URL.
         */
        public function add_proudcts_using_url()
        {
        }
        /**
         * Merge product options array with checkout products.
         *
         * @param array $products products.
         * @param int   $checkout_id checkout id.
         */
        public function update_the_checkout_products_data($products, $checkout_id)
        {
        }
        /**
         * Apply the coupon if available in url.
         */
        public function apply_url_coupon()
        {
        }
        /**
         * Two Step Layout Actions.
         *
         * @param int $checkout_id checkout id.
         * @since 1.1.9
         */
        public function two_step_actions($checkout_id)
        {
        }
        /**
         * Hidden Field Actions.
         *
         * @param string $field field.
         * @param string $key key.
         * @param array  $args args.
         * @param string $value value.
         *
         * @since 1.1.9
         */
        public function wcf_form_field_hidden($field = '', $key = '', $args = array(), $value = '')
        {
        }
        /**
         * Send custom fields in the order email.
         *
         * @param array  $fields of fields.
         * @param string $sent_to_admin domain name to send.
         * @param object $order of order details.
         */
        public function custom_woo_email_order_meta_fields($fields, $sent_to_admin, $order)
        {
        }
        /**
         * After configure cart.
         *
         * @param int $checkout_id checkout id.
         */
        public function after_configure_cart($checkout_id)
        {
        }
        /**
         *  Add markup classes
         *
         * @return void
         */
        public function include_required_class()
        {
        }
        /**
         * Load shortcode scripts.
         *
         * @return void
         */
        public function checkout_order_scripts()
        {
        }
        /**
         * Load compatibility scripts.
         *
         * @return void
         */
        public function load_compatibility_scripts_for_pro()
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
         * To generate the dynamic css for multiple order bumps.
         *
         * @param  int $checkout_id checkout id.
         */
        public function order_bump_dynamic_css($checkout_id)
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
         * Save checkout fields.
         *
         * @param string $layout_style layout style.
         * @return link
         */
        public function include_checkout_template($layout_style)
        {
        }
        /**
         * Display Two Step Nav Menu.
         *
         * @param string $layout_style layout style.
         * @return markup
         */
        public function add_two_step_nav_menu($layout_style)
        {
        }
        /**
         * Display Two Step note box.
         *
         * @param string $layout_style layout style.
         * @return void
         */
        public function get_checkout_form_note($layout_style)
        {
        }
        /**
         * Display Two Step Nav Next Button.
         */
        public function add_two_step_next_btn()
        {
        }
        /**
         * Display billing custom field data on order page
         *
         * @param obj $order Order object.
         * @return void
         */
        public function display_billing_custom_order_meta($order)
        {
        }
        /**
         * Display shipping custom field data on order page
         *
         * @param obj $order Order object.
         * @return void
         */
        public function display_shipping_custom_order_meta($order)
        {
        }
        /**
         * Add second step opening dev
         *
         * @since 1.1.9
         */
        public function add_two_step_second_step_wrapper()
        {
        }
        /**
         * Add first step opening dev
         *
         * @since X.X.X
         */
        public function add_two_step_first_step_wrapper()
        {
        }
        /**
         * Add Startng & closing dev
         *
         * @since 1.1.9
         */
        public function add_two_step_closing_div()
        {
        }
        /**
         * Add localize variables.
         *
         * @since 1.1.5
         * @param array $localize settings.
         * @return array $localize settings.
         */
        public function add_frontend_localize_scripts($localize)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Pro_Checkout_Default_Meta
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
         * Pro all meta fields
         *
         * @param array $fields checkout fields.
         * @param int   $post_id post ID.
         */
        public function meta_fields($fields, $post_id)
        {
        }
        /**
         * Multiple order bump default meta.
         */
        public function order_bump_default_meta()
        {
        }
    }
    /**
     * Order Bump Product
     *
     * @since 1.0.0
     */
    class Cartflows_Pre_Checkout_Offer_Product
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        protected static $instance;
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
         * Add localize variables.
         *
         * @param array $localize localize array.
         *
         * @since 1.0.0
         */
        public function add_localize_vars($localize)
        {
        }
        /**
         *  Validate form
         */
        public function wcf_precheckout_validate_form()
        {
        }
        /**
         * Validates that the checkout has enough info to proceed.
         *
         * @since  3.0.0
         * @param  array    $data   An array of posted data.
         * @param  WP_Error $errors Validation errors.
         */
        protected function validate_checkout(&$data, &$errors)
        {
        }
        /**
         * See if a fieldset should be skipped.
         *
         * @since 3.0.0
         * @param string $fieldset_key Fieldset key.
         * @param array  $data         Posted data.
         * @return bool
         */
        protected function maybe_skip_fieldset($fieldset_key, $data)
        {
        }
        /**
         * Validates the posted checkout data based on field properties.
         *
         * @since  3.0.0
         * @param  array    $data   An array of posted data.
         * @param  WP_Error $errors Validation error.
         */
        protected function validate_posted_data(&$data, &$errors)
        {
        }
        /**
         * If checkout failed during an AJAX call, send failure response.
         */
        protected function send_ajax_failure_response()
        {
        }
        /**
         *  Add to cart.
         */
        public function wcf_add_pre_checkout_product()
        {
        }
        /**
         * Calculate discount for product.
         *
         * @param string $discount_type discount type.
         * @param int    $discount_value discount value.
         * @param int    $_product_price product price.
         * @return int
         * @since 1.1.5
         */
        public function calculate_pre_checkout_discount($discount_type, $discount_value, $_product_price)
        {
        }
        /**
         * Preserve the custom item price added by Variations & Quantity feature
         *
         * @param array $cart_object cart object.
         * @since 1.0.0
         */
        public function wcf_precheckout_offer_price_to_cart_item($cart_object)
        {
        }
        /**
         *  Pre checkout Offer Modal.
         *
         * @param type $checkout object.
         */
        public function wcf_add_pre_checkout_offer_modal($checkout)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Checkout_Tab_Animation.
     */
    class Cartflows_Pro_Checkout_Tab_Animation
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
         *  Add frontend scripts.
         */
        public function add_frontend_scripts()
        {
        }
        /**
         * Add localize script for animate title.
         *
         * @param int $checkout_id Checkout id.
         */
        public function add_frontend_localize_animate_scripts($checkout_id)
        {
        }
    }
    /**
     * Order Bump Product
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Order_Bump_Product
    {
        /**
         * Default options values
         *
         * @var object ob_default_meta
         */
        public static $ob_default_meta = \null;
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
         * Dynamic events on checkout. Setup compatibility.
         */
        public function setup_events_conditional_order_bumps()
        {
        }
        /**
         * Trigger after product option change to prepare order bump fragment.
         *
         * Works only when the product options is modified.
         *
         * @param array $product_id Product ID.
         */
        public function order_bump_fragments_actions($product_id)
        {
        }
        /**
         * Update fragments based on conditions.
         *
         * @param array $fragments Fragments.
         *
         * @return array $fragments Updated Fragments.
         */
        public function add_order_bump_fragments($fragments)
        {
        }
        /**
         * To show order bump dynamically after update order review.
         *
         * @param array $post_data Post data.
         */
        public function dynamic_order_bump($post_data)
        {
        }
        /**
         * Get all order bumps.
         *
         * @param int $checkout_id checkout id.
         */
        public function get_all_order_bumps($checkout_id)
        {
        }
        /**
         * Get sorted order bumps.
         *
         * @param int $checkout_id checkout id.
         */
        public function get_sorted_order_bumps($checkout_id)
        {
        }
        /**
         * Load Actions
         *
         * @param int $checkout_id checkout id.
         */
        public function load_actions($checkout_id)
        {
        }
        /**
         * Render order bump.
         *
         * @param array $order_bumps order bumps.
         */
        public function render_before_checkout_order_bumps($order_bumps)
        {
        }
        /**
         * Render order bump.
         *
         * @param array $order_bumps order bumps.
         */
        public function render_after_customer_order_bumps($order_bumps)
        {
        }
        /**
         * Render order bump.
         *
         * @param array $order_bumps order bumps.
         */
        public function render_after_order_order_bumps($order_bumps)
        {
        }
        /**
         * Render order bump.
         *
         * @param array $order_bumps order bumps.
         */
        public function render_after_payment_order_bumps($order_bumps)
        {
        }
        /**
         *  Display bump offer box html.
         */
        public function add_order_bump_hidden_fields()
        {
        }
        /**
         * Get order bump hidden data.
         *
         * @param int     $product_id product id.
         * @param boolean $order_bump_checked checked value.
         */
        public function get_order_bump_hidden_data($product_id, $order_bump_checked)
        {
        }
        /**
         * Get default values of options.
         *
         * @return array
         */
        public function get_order_bump_default_meta()
        {
        }
        /**
         * Display bump offer box html.
         *
         * @param array  $order_bumps order bump values.
         * @param string $position order bump position.
         */
        public function print_order_bumps($order_bumps, $position)
        {
        }
        /**
         * Ger all order bumps markup.
         *
         * @param int    $checkout_id Checkout id.
         * @param array  $order_bumps Order bumps.
         * @param string $position Position.
         *
         * @return string Order bump markup.
         */
        public function get_order_bumps_markup($checkout_id, $order_bumps, $position)
        {
        }
        /**
         * Ger an order bump markup.
         *
         * @param int   $checkout_id Checkout id.
         * @param array $order_bump_data Order bump data.
         *
         * @return string Order bump markup.
         */
        public function get_single_order_bump_markup($checkout_id, $order_bump_data)
        {
        }
        /**
         * Get product image.
         *
         * @param array $order_bump_data order bump data.
         * @param int   $product_id product id.
         */
        public function get_order_bump_image($order_bump_data, $product_id)
        {
        }
        /**
         * Get product price with tax.
         *
         * @param object $product_object product data.
         * @param int    $product_price product price.
         * @param int    $custom_price custom price.
         */
        public function get_taxable_product_price($product_object, $product_price, $custom_price)
        {
        }
        /**
         * Process bump order.
         *
         * @param object $bump_image_obj image object.
         * @param string $original_url image url.
         */
        public function get_order_bump_image_url($bump_image_obj, $original_url)
        {
        }
        /**
         * Process bump order.
         */
        public function order_bump_process()
        {
        }
        /**
         * Process quantity update for the order bump.
         *
         * @since x.x.x
         * @return void
         */
        public function update_order_bump_quantity()
        {
        }
        /**
         * Order bump remove or reduce.
         *
         * @param array  $ob_data order bump data.
         * @param string $found_item_key cart key.
         * @param array  $found_item item data.
         */
        public function order_bump_remove_or_reduce($ob_data, $found_item_key, $found_item)
        {
        }
        /**
         * Add order bump data in fragment.
         *
         * @param array $ob_data order bump data.
         */
        public function add_order_bump_data_in_fragment($ob_data)
        {
        }
        /**
         * If order bump not found in cart.
         *
         * @param array $ob_data order bump data.
         */
        public function add_order_bump_product($ob_data)
        {
        }
        /**
         * If order bump found in cart..
         *
         * @param array  $ob_data order bump data.
         * @param string $found_item_key key.
         * @param array  $found_item item data.
         */
        public function order_bump_found_in_cart($ob_data, $found_item_key, $found_item)
        {
        }
        /**
         * Get the item keu for order bump.
         *
         * @param array $ob_data order bump data.
         */
        public function get_item_key_for_order_bump($ob_data)
        {
        }
        /**
         * Replace the main product with order bump.
         *
         * @param array $ob_data order bump data.
         */
        public function replace_main_product_with_order_bump($ob_data)
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
         * Bump order product title shortcode.
         *
         * @param array $atts shortcode atts.
         * @return string shortcode output.
         * @since 1.0.0
         */
        public function bump_product_title($atts)
        {
        }
        /**
         * Bump order product title shortcode.
         *
         * @param int $step_id step id.
         * @return array bump order product.
         * @since 1.0.0
         */
        public function get_bump_test_product($step_id)
        {
        }
        /**
         * Check in Cart if product exists.
         *
         * @since 1.1.5
         * @param int  $product_id product_id.
         * @param bool $is_bump is bump product.
         * @return bool.
         * */
        public function cart_has_product($product_id, $is_bump = \false)
        {
        }
        /**
         * Get order bump data by ob id.
         *
         * @param int    $checkout_id checkout_id.
         * @param string $ob_id order bump id.
         * */
        public function get_order_bump_by_id($checkout_id, $ob_id)
        {
        }
        /**
         * Get order bump data by ob id.
         *
         * @param int   $checkout_id checkout_id.
         * @param array $ob_id order bump ID.
         *
         * @return array $ob_id Prepared Order bump data.
         * */
        public function prepare_ob_data($checkout_id, $ob_id)
        {
        }
        /**
         * Add order bump in the cart if it is pre-checked from setting.
         *
         * @param int $checkout_id checkout_id.
         * @return void
         * */
        public function add_prechecked_order_bumps($checkout_id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Order_Bump_Rules.
     */
    class Cartflows_Pro_Order_Bump_Rules
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
         * Conditional redirection.
         *
         * @param array $ob_data order bump data.
         */
        public function is_order_bump_visble($ob_data)
        {
        }
        /**
         * Get Group result.
         *
         * @param array $rules rules.
         */
        public function get_group_rules_result($rules)
        {
        }
        /**
         * Get cart item categories.
         */
        public function get_cart_items()
        {
        }
        /**
         * Get cart item categories.
         */
        public function get_cart_items_categories()
        {
        }
        /**
         * Get cart item tags.
         */
        public function get_cart_items_tags()
        {
        }
        /**
         * Get cart shipping method.
         */
        public function get_cart_shipping_method()
        {
        }
        /**
         * Get cart coupons.
         */
        public function get_cart_coupons()
        {
        }
        /**
         * Get cart total.
         */
        public function get_cart_total()
        {
        }
        /**
         * Get cart billing country.
         */
        public function get_cart_billing_country()
        {
        }
        /**
         * Get cart shipping country.
         */
        public function get_cart_shipping_country()
        {
        }
        /**
         * Compare string values.
         *
         * @param array  $cart_values cart values.
         * @param array  $rule_values rules values.
         * @param object $operator rule operator.
         */
        public function compare_string_values($cart_values, $rule_values, $operator)
        {
        }
        /**
         * Compare string values.
         *
         * @param string $cart_value cart values.
         * @param array  $rule_value rules values.
         * @param string $operator rule operator.
         */
        public function compare_number_values($cart_value, $rule_value, $operator)
        {
        }
    }
    /**
     * Variation
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Product_Options
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
         * Add localize variables.
         *
         * @param array $localize localize array.
         *
         * @since 1.0.0
         */
        public function add_localize_vars($localize)
        {
        }
        /**
         * Product Variation option position
         *
         * @param int $checkout_id checkout id.
         */
        public function product_variation_option_position($checkout_id)
        {
        }
        /**
         * Product selection options
         */
        public function product_selection_option()
        {
        }
        /**
         * Prepare cart products
         */
        public function prepare_cart_products()
        {
        }
        /**
         * Get all selected products
         *
         * @param int $post_id post id.
         * @return array product IDs.
         */
        public function get_all_main_products($post_id)
        {
        }
        /*================ Force all products option ===========================================*/
        /**
         * Quantity selection markup
         *
         * @param object $current_product product.
         * @param array  $data product data.
         * @return string
         */
        public function force_all_product_markup($current_product, $data)
        {
        }
        /*================ Single selection options =============================================*/
        /**
         * Quantity selection markup
         *
         * @param object $current_product product obj.
         * @param array  $data product data.
         * @return string
         */
        public function single_sel_product_markup($current_product, $data)
        {
        }
        /*================ Multiple selection options ============================================*/
        /**
         * Quantity selection markup
         *
         * @param object $current_product product.
         * @param array  $data product data.
         * @return string
         */
        public function multiple_sel_product_markup($current_product, $data)
        {
        }
        /*=====================================================================================*/
        /**
         * Quantity update in cart
         */
        public function quantity_update()
        {
        }
        /************** Ajax *************************************************************************/
        /**
         * Force All Selection
         */
        public function variation_selection()
        {
        }
        /**
         * Multiple Selection
         */
        public function multiple_selection()
        {
        }
        /**
         * Single Selection
         */
        public function single_selection()
        {
        }
        /**
         * Calculate the product price with tax and sign up fee.
         *
         * @param array  $_product product array.
         * @param array  $_product_price product price.
         * @param array  $custom_price custome price.
         * @param object $variation variation product.
         * */
        public function get_calculated_product_prices($_product, $_product_price, $custom_price, $variation)
        {
        }
        /**
         * Check product in cart and remove.
         *
         * @since 1.1.5
         * @param array $products product array.
         * @return void.
         * */
        public function remove_products_from_cart($products)
        {
        }
        /**************************************** Popups *************************************/
        /**
         * Variation Popup
         */
        public function variation_popup()
        {
        }
        /**
         * Load Quick View Product.
         *
         * @since 0.0.1
         * @access public
         */
        public function load_quick_view_product()
        {
        }
        /**
         * Quick view product images markup.
         */
        public function quick_view_product_images_markup()
        {
        }
        /**
         * Product Option title.
         *
         * @return title.
         */
        public function product_option_title()
        {
        }
        /**
         * Choose a vatiation text.
         *
         * @return text.
         */
        public function variation_popup_toggle_text()
        {
        }
        /**
         * Quick view product content structure.
         */
        public function quick_view_product_content_structure()
        {
        }
        /**
         * Handle adding variable products to the cart.
         *
         * @param array $form_data Form data of the user selction.
         * @param int   $product_id Product ID to add to the cart.
         * @param int   $final_quantity Input quantity to add to the cart.
         * @param array $variation_id Variation ID to add to the cart.
         * @param array $cart_item_data Extra data to add in the cart.
         * @return array data.
         */
        public function handle_add_to_cart_variation_attributes($form_data, $product_id, $final_quantity, $variation_id, $cart_item_data)
        {
        }
        /**
         * Single Product add to cart ajax request
         *
         * @since 1.1.0
         *
         * @return void.
         */
        public function add_cart_single_product_ajax()
        {
        }
        /**
         * Get Cart product variation.
         *
         * @since 1.1.5
         * @param int $product_id product_id.
         * @return int variation_id.
         * */
        public function get_variation_product_from_cart($product_id)
        {
        }
        /**
         * Get Cart product quantity.
         *
         * @since 1.1.0
         * @param int $product_id product_id.
         * @return int $qty.
         */
        public function get_cart_product_quantity($product_id)
        {
        }
        /**
         * Calculate discount for product.
         *
         * @param string $discount_type discount type.
         * @param int    $discount_value discount value.
         * @param int    $product_price product price.
         * @return int
         * @since 1.1.5
         */
        public function calculate_pre_checkout_discount($discount_type, $discount_value, $product_price)
        {
        }
        /**
         * Your product comman header section.
         *
         * @param int    $checkout_id checkout id.
         * @param string $type optin type.
         */
        public function show_your_product_options($checkout_id, $type)
        {
        }
        /**
         * Your product highlight class.
         *
         * @param array $data product data.
         */
        public function get_product_highlight_data($data)
        {
        }
        /**
         * Calculate display discounted data when user input quanity or select product.
         *
         * @param float $original_price original price.
         * @param float $discounted_price discounted price.
         * @param int   $final_quantity final quantity.
         */
        public function calculate_input_discount_data($original_price, $discounted_price, $final_quantity)
        {
        }
        /**
         * Your product common price section.
         *
         * @param array $current_product product data.
         * @param array $data data.
         * @param array $single_variation product data.
         */
        public function your_product_price($current_product, $data, $single_variation)
        {
        }
        /**
         * Get subscription product trial period and length.
         *
         * @param array $product product data.
         */
        public function get_subscription_trial_period($product)
        {
        }
        /**
         * Get subscription product sign up fee.
         *
         * @param array $product product data.
         */
        public function get_subscription_sign_up_fee($product)
        {
        }
        /**
         * Get product price with tax.
         *
         * @param array $product product data.
         * @param int   $product_price product price.
         */
        public function get_taxable_product_price($product, $product_price)
        {
        }
        /**
         * Get selcted attribute data.
         *
         * @param array $current_product product data.
         * @param array $single_variation product data.
         * @param array $form_data selected form data.
         *
         * @return array attributes.
         */
        public function get_selected_attributes($current_product, $single_variation, $form_data = array())
        {
        }
        /**
         * Normal product markup.
         *
         * @param array $current_product product data.
         * @param array $data data.
         * @param array $selection_type selection type.
         */
        public function get_normal_product_markup($current_product, $data, $selection_type)
        {
        }
        /**
         * Variation peoduct markup.
         *
         * @param array $current_product product data.
         * @param array $single_variation variation data.
         * @param array $type show type.
         * @param array $data products.
         * @param array $selection_type selection type.
         */
        public function get_variation_product_markup($current_product, $single_variation, $type, $data, $selection_type)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Cartflows_Pro_Checkout_Meta_Data
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
         * Prepare ob rules settings.
         */
        public function get_ob_rules_data()
        {
        }
        /**
         * Prepare checkout rules settings.
         */
        public function get_checkout_rules_settings()
        {
        }
        /**
         * Add pro checkout settings.
         *
         * @param array $settings settings.
         */
        public function add_checkout_settings_pro_fields($settings)
        {
        }
        /**
         * Get supported payment methods.
         */
        public function get_supported_payment_methods()
        {
        }
        /**
         * Get shipping methods.
         */
        public function get_shipping_methods()
        {
        }
        /**
         * Get countries list.
         */
        public function get_allowed_countries()
        {
        }
        /**
         * Get product categories.
         */
        public function get_product_categories()
        {
        }
        /**
         * Get product tags.
         */
        public function get_product_tags()
        {
        }
        /**
         * Filter checkout values
         *
         * @param  array $options options.
         * @param  int   $step_id step id.
         */
        public function filter_values($options, $step_id)
        {
        }
        /**
         * Filter checkout rules.
         *
         * @param array $conditions conditions data.
         */
        public function filter_checkout_rules_values($conditions)
        {
        }
        /**
         * Filter rule options.
         *
         * @param array $rules rule.
         */
        public function filter_rules_data($rules)
        {
        }
        /**
         * Add meta fields
         *
         * @param array $settings checkout fields.
         * @param int   $step_id step id.
         * @param array $options options.
         */
        public function meta_fields_react($settings, $step_id, $options)
        {
        }
        /**
         * Add meta fields
         *
         * @param array $settings checkout fields.
         * @param array $options options.
         */
        public function design_fields_react($settings, $options)
        {
        }
        /**
         * Add custom meta fields
         *
         * @param string $id id.
         */
        public function get_product_option_fields($id)
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Checkout
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
     * Class for analytics tracking.
     */
    class Cartflows_Pro_Analytics_Tracking_Beta
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
         * Register analytics API route.
         */
        public function register_routes()
        {
        }
        /**
         * Save analytics data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         */
        public function save_analytics_data($request)
        {
        }
        /**
         * Save conversion data except upsell/downsell.
         *
         * @param int   $flow_id flow ID.
         * @param int   $prev_control_id step ID.
         * @param array $step_cookie_data step cookie data.
         *
         * @since 1.6.13
         */
        public function save_conversion_data($flow_id, $prev_control_id, $step_cookie_data)
        {
        }
        /**
         * Save upsell/downsell conversion.
         *
         * @param object $order         Parent order object data.
         * @param array  $offer_product offer product data.
         *
         * @since 1.6.13
         */
        public function save_offer_conversion($order, $offer_product)
        {
        }
        /**
         * Save single conversion by step id.
         *
         * @param int   $flow_id       flow ID.
         * @param int   $control_id    To find and create conversion.
         * @param array $step_cookie_data step cookie data.
         * @param bool  $exclude_offer exclude offer conversion.
         *
         * @since 1.6.13
         */
        public function save_conversion($flow_id, $control_id, $step_cookie_data, $exclude_offer = \true)
        {
        }
        /**
         * Save visits and visit meta in database.
         *
         * @param int  $step_id step ID.
         * @param bool $is_returning is returning visitor.
         *
         * @since 1.0.0
         */
        public function save_visit($step_id, $is_returning)
        {
        }
        /**
         * Add localize variables.
         *
         * @param array $localize localize array.
         *
         * @since 1.0.0
         */
        public function add_localize_vars($localize)
        {
        }
    }
    /**
     * Analytics DB class.
     */
    class Cartflows_Pro_Analytics_Db
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
         *  Create tables for analytics.
         */
        public function create_db_tables()
        {
        }
    }
    /**
     * Analytics reports class.
     */
    class Cartflows_Pro_Analytics_Reports
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
         * Get home page analytics.
         *
         * @param array  $analytics_data analytics.
         * @param string $start_date start date.
         * @param string $end_date end date.
         */
        public function get_home_page_analytics_data($analytics_data, $start_date, $end_date)
        {
        }
        /**
         * Get orders data for flow.
         *
         * @since 1.6.15
         * @param string $start_date start date.
         * @param string $end_date end date.
         *
         * @return int
         */
        public function get_orders_by_all_flows($start_date, $end_date)
        {
        }
        /**
         * Fetch total visits.
         *
         * @param integer $flow_ids flows id.
         * @param string  $start_date start date.
         * @param string  $end_date end date.
         *
         * @return array|object|null
         */
        public function fetch_visits_of_all_flows($flow_ids, $start_date, $end_date)
        {
        }
        /**
         * Visits map.
         *
         * @param int   $flow_id flow id.
         * @param array $visits visits data.
         * @param array $earning earning data.
         * @return array
         */
        public function visits_map($flow_id, $visits, $earning)
        {
        }
        /**
         * Fetch total visits.
         *
         * @param integer $flow_id flow_id.
         * @return array|object|null
         */
        public function fetch_visits($flow_id)
        {
        }
        /**
         * Calculate earning.
         *
         * @param integer $flow_id flow_id.
         * @return array
         */
        public function get_earnings($flow_id)
        {
        }
        /**
         * Prepare where items for query.
         *
         * @param array $conditions conditions to prepare WHERE query.
         * @return string
         */
        protected function get_items_query_where($conditions)
        {
        }
        /**
         * Get orders data for flow.
         *
         * @param int $flow_id flow id.
         * @return int
         */
        public function get_orders_by_flow($flow_id)
        {
        }
        /**
         * Check if custom order table enabled.
         *
         * @return bool
         */
        public function is_custom_order_table_enabled()
        {
        }
    }
    /**
     * Class for analytics tracking.
     */
    class Cartflows_Pro_Analytics_Tracking
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
        //phpcs:disable WordPressVIPMinimum.Variables.RestrictedVariables.cache_constraints___COOKIE
        /**
         *  Save analytics data.
         */
        public function save_analytics_data()
        {
        }
        /**
         * Save conversion data except upsell/downsell.
         *
         * @param int $step_id step ID.
         *
         * @since 1.6.13
         */
        public function save_conversion_data($step_id)
        {
        }
        /**
         * Save upsell/downsell conversion.
         *
         * @param object $order         Parent order object data.
         * @param array  $offer_product offer product data.
         *
         * @since 1.6.13
         */
        public function save_offer_conversion($order, $offer_product)
        {
        }
        /**
         * Save single conversion by step id.
         *
         * @param int  $flow_id       flow ID.
         * @param int  $control_id    To find and create conversion.
         * @param bool $exclude_offer exclude offer conversion.
         *
         * @since 1.6.13
         */
        public function save_conversion($flow_id, $control_id, $exclude_offer = \true)
        {
        }
        /**
         * Save visits and visit meta in database.
         *
         * @param int  $flow_id flow ID.
         * @param int  $step_id step ID.
         * @param bool $is_returning is returning visitor.
         *
         * @since 1.0.0
         */
        public function save_visit($flow_id, $step_id, $is_returning)
        {
        }
        /**
         * Add localize variables.
         *
         * @param array $localize localize array.
         *
         * @since 1.0.0
         */
        public function add_localize_vars($localize)
        {
        }
        //phpcs:enable WordPressVIPMinimum.Variables.RestrictedVariables.cache_constraints___COOKIE
    }
    /**
     * Initial Setup
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Downsell
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
     * Checkout Markup
     *
     * @since 1.0.0
     */
    class Cartflows_Downsell_Markup extends \Cartflows_Pro_Base_Offer_Markup
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
         * Process down sell acceptance.
         *
         * @param boolean $verify_nonce nonce check.
         */
        public function process_downsell_accepted($verify_nonce = \true)
        {
        }
        /**
         * Process down sell rejected.
         */
        public function process_downsell_rejected()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Block_JS.
     */
    class Cartflows_Pro_Block_JS
    {
        /**
         * Adds Google fonts for Offer Yes No Link.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_yes_no_link_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Yes No Button.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_yes_no_button_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Product Title.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_product_title_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Product Description.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_product_description_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Product Price.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_product_price_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Product Quantity.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_product_quantity_gfont($attr)
        {
        }
        /**
         * Adds Google fonts for Offer Product Variation.
         *
         * @since 1.6.13
         * @param array $attr the blocks attr.
         */
        public static function blocks_offer_product_variation_gfont($attr)
        {
        }
    }
    /**
     * Class BSF_Cartflows_Pro_Loader.
     */
    final class Cartflows_Pro_Block_Loader
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
         * @since 1.6.13
         *
         * @return void
         */
        public function load_helper_files()
        {
        }
        /**
         * Loads plugin files.
         *
         * @since 1.6.13
         *
         * @return void
         */
        public function load_extended_blocks()
        {
        }
        /**
         * Loads plugin files.
         *
         * @since 1.6.13
         *
         * @return void
         */
        public function load_gb_blocks()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Helper.
     */
    final class Cartflows_Pro_Gb_Helper
    {
        /**
         * Member Variable
         *
         * @since 1.6.13
         * @var instance
         */
        public static $block_list;
        /**
         * Current Block List
         *
         * @since 1.6.13
         * @var current_block_list
         */
        public static $current_block_list = array();
        /**
         * Page Blocks Variable
         *
         * @since 1.6.13
         * @var instance
         */
        public static $page_blocks;
        /**
         * Stylesheet
         *
         * @since 1.6.13
         * @var stylesheet
         */
        public static $stylesheet;
        /**
         * Script
         *
         * @since 1.6.13
         * @var script
         */
        public static $script;
        /**
         * Cartflows Pro Block Flag
         *
         * @since 1.6.13
         * @var cfp_flag
         */
        public static $cfp_flag = \false;
        /**
         * Google fonts to enqueue
         *
         * @var gfonts
         */
        public static $gfonts = array();
        /**
         *  Initiator
         *
         * @since 1.6.13
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
         * @since 1.6.13
         */
        public function generate_assets()
        {
        }
        /**
         * Generates stylesheet in loop.
         *
         * @param object $this_post Current Post Object.
         * @since 1.6.13
         */
        public function get_generated_stylesheet($this_post)
        {
        }
        /**
         * Enqueue Gutenberg block assets for both frontend + backend.
         *
         * @since 1.6.13
         */
        public function block_assets()
        {
        }
        /**
         * Parse Guten Block.
         *
         * @param string $content the content string.
         * @since 1.6.13
         */
        public function parse($content)
        {
        }
        /**
         * Generates stylesheet for reusable blocks.
         *
         * @param array $blocks Blocks array.
         * @since 1.6.13
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
         * @since  1.6.13
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
         * @since 1.6.13
         */
        public static function get_css_value($value = '', $unit = '')
        {
        }
        /**
         * Parse CSS into correct CSS syntax.
         *
         * @param array  $combined_selectors The combined selector array.
         * @param string $id The selector ID.
         * @since 1.6.13
         */
        public static function generate_all_css($combined_selectors, $id)
        {
        }
        /**
         * Parse CSS into correct CSS syntax.
         *
         * @param array  $selectors The block selectors.
         * @param string $id The selector ID.
         * @since 1.6.13
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
         * @since 1.6.13
         */
        public function get_block_css_and_js($block)
        {
        }
        /**
         * Border attribute generation Function.
         *
         * @param  array $prefix   Attribute Prefix.
         * @param array $default_args  default attributes args.
         * @return array
         */
        public static function generate_php_border_attribute($prefix, $default_args = array())
        {
        }
        /**
         * Border attribute generation Function.
         *
         * @param  array $prefix   Attribute Prefix.
         * @param array $default_args  default attributes args.
         * @return array
         */
        public static function generate_border_attribute($prefix, $default_args = array())
        {
        }
        /**
         * Border CSS generation Function.
         *
         * @param  array  $attr   Attribute List.
         * @param  string $prefix Attribuate prefix .
         * @param  string $device Responsive.
         * @return array         border css array.
         */
        public static function generate_border_css($attr, $prefix, $device = 'desktop')
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
     * Cartflows_Pro_Init_Blocks.
     *
     * @package Cartflows Pro
     */
    class Cartflows_Pro_Init_Blocks
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
         * Update attrinutes.
         *       *
         *
         * @param array $attr attr List.
         */
        public function add_pro_checkout_form_attributes($attr)
        {
        }
        /**
         * Gutenberg editor compatibility.
         *
         * @param int $step_id Step id.
         *
         * @since 1.6.13
         */
        public function gutenberg_editor_compatibility($step_id)
        {
        }
        /**
         * Renders the Offer Product Title shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_title_shortcode()
        {
        }
        /**
         * Renders the Offer Product Description shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_description_shortcode()
        {
        }
        /**
         * Renders the Offer Product Price shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_price_shortcode()
        {
        }
        /**
         * Renders the Offer Product Quantity shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_quantity_shortcode()
        {
        }
        /**
         * Renders the Offer Product Variation shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_variation_shortcode()
        {
        }
        /**
         * Renders the Offer Product Image shortcode.
         *
         * @since 1.6.13
         */
        public function offer_product_image_shortcode()
        {
        }
        /**
         * Enqueue Gutenberg block assets for both frontend + backend.
         *
         * @since 1.6.13
         */
        public function block_assets()
        {
        }
        /**
         * Enqueue Gutenberg block assets for backend.
         *
         * @since 1.6.13
         */
        public function editor_assets()
        {
        }
        /**
         * Gutenberg block category for Cartflows Pro.
         *
         * @param array  $categories Block categories.
         * @param object $post Post object.
         * @since 1.6.13
         */
        public function register_block_category($categories, $post)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Block_Config.
     */
    class Cartflows_Pro_Block_Config
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
         * @since 1.6.13
         *
         * @return array The Widget List.
         */
        public static function get_block_attributes()
        {
        }
        /**
         * Get Block Assets.
         *
         * @since 1.6.13
         *
         * @return array The Asset List.
         */
        public static function get_block_assets()
        {
        }
    }
    /**
     * Class Cartflows_Pro_Block_Helper.
     */
    class Cartflows_Pro_Block_Helper
    {
        /**
         * Get Offer Yes No Link CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_checkout_form_pro_css($attr, $id)
        {
        }
        /**
         * Get Offer Yes No Link CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_yes_no_link_css($attr, $id)
        {
        }
        /**
         * Get Offer Yes No Button CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_yes_no_button_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Title CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_title_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Description CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_description_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Price CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_price_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Quantity CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_quantity_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Variation CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_variation_css($attr, $id)
        {
        }
        /**
         * Get Offer Product Image CSS
         *
         * @since 1.6.13
         * @param array  $attr The block attributes.
         * @param string $id The selector ID.
         * @return array The Widget List.
         */
        public static function get_offer_product_image_css($attr, $id)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Description.
     */
    class Cartflows_Pro_Gb_Block_Product_Description
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Description HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Checkout_Form.
     */
    class Cartflows_Pro_Checkout_Form
    {
        /**
         * Member Variable
         *
         * @since 1.6.13
         * @var instance
         */
        public static $block_list;
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
         * Settings
         *
         * @since 1.6.13
         * @var object $settings
         */
        public static $settings;
        /**
         * Dynamic filters.
         *
         * @param array $settings Settings array.
         *
         * @since 1.6.13
         */
        public function dynamic_filters($settings)
        {
        }
        /**
         * Registers the `core/latest-posts` block on server.
         *
         * @param array $attr Array of block attributes.
         *
         * @since 1.6.13
         */
        public function checkout_form_pro_attributes($attr)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Image.
     */
    class Cartflows_Pro_Gb_Block_Product_Image
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Image HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Quantity.
     */
    class Cartflows_Pro_Gb_Block_Product_Quantity
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Quantity HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Variation.
     */
    class Cartflows_Pro_Gb_Block_Product_Variation
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Variation HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Price.
     */
    class Cartflows_Pro_Gb_Block_Product_Price
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Price HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * Class Cartflows_Pro_Gb_Block_Product_Title.
     */
    class Cartflows_Pro_Gb_Block_Product_Title
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
         * @since 1.6.13
         */
        public function register_blocks()
        {
        }
        /**
         * Render Offer Product Title HTML.
         *
         * @param array $attributes Array of block attributes.
         *
         * @since 1.6.13
         */
        public function render_html($attributes)
        {
        }
    }
    /**
     * This class initializes Cartflows Pro Optin Form
     *
     * @class CartFlows_Pro_BB_Optin_Form_Extend
     */
    final class CartFlows_Pro_BB_Optin_Form_Extend
    {
        /**
         * Initializes Optin Form.
         *
         * @since 1.6.13
         * @return void
         */
        public static function init()
        {
        }
    }
    /**
     * This class initializes BB Ultiamte Addon Helper
     *
     * @class Cartflows_Pro_BB_Helper
     */
    class Cartflows_Pro_BB_Helper
    {
        /**
         * Step type variable
         *
         * @since 1.6.13
         * @var object $step_type
         */
        public static $step_type;
        /**
         * Get current post step type
         *
         * @since 1.6.13
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
        public static function wcf_pro_is_bb_setting_page()
        {
        }
    }
    /**
     * Offer Product Variation Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Variation extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * Next Step Link Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Description extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * Offer Product Quantity for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Quantity extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * Initial Setup
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Modules_Loader
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
         * @since 1.6.13
         */
        public function init()
        {
        }
        /**
         * Returns Script array.
         *
         * @return array()
         * @since 1.6.13
         */
        public static function get_module_list()
        {
        }
        /**
         * Include Widgets files
         *
         * Load widgets files
         *
         * @since 1.6.13
         * @access public
         */
        public function include_modules_files()
        {
        }
        /**
         * Register CartFlows Pro Modules
         *
         * Register modules early to disply them on options page
         *
         * @since 1.6.13
         * @access public
         */
        public function register_pro_modules()
        {
        }
        /**
         * Get Module files
         *
         * @since 1.6.13
         * @access public
         */
        public function get_module_files()
        {
        }
        /**
         * Extend widget with pro functionality.
         *
         * @since 1.6.13
         */
        public function modules_extend_files()
        {
        }
    }
    /**
     * Offer Product Price Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Price extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * This class initializes Checkout Form
     *
     * @class Cartflows_Pro_BB_Checkout_Form_Extend
     */
    final class Cartflows_Pro_BB_Checkout_Form_Extend
    {
        /**
         * Initializes module.
         *
         * @since 1.6.13
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Dynamic filters.
         *
         * @param array $settings Settings array.
         *
         * @since 1.6.13
         */
        public static function bb_checkout_dynamic_filters($settings)
        {
        }
        /**
         * Extending row setting.
         *
         * @param array  $form Settings array.
         * @param string $id module id.
         *
         * @since 1.6.13
         */
        public static function bb_checkout_form_extend($form, $id)
        {
        }
        /**
         * Extending row setting.
         *
         * @param file  $css gets the Modules CSS.
         * @param array $nodes Modules array.
         * @param array $global_settings module global settings.
         *
         * @since 1.6.13
         */
        public static function bb_checkout_form_css($css, $nodes, $global_settings)
        {
        }
        /**
         * Render Global uabb-layout-builder js
         *
         * @since 1.6.13
         * @param file   $js Gets the js file contents.
         * @param array  $nodes Gets the nodes of the layout builder.
         * @param object $global_settings Gets the object for the Layout builder.
         */
        public static function bb_checkout_form_js($js, $nodes, $global_settings)
        {
        }
    }
    /**
     * Product Offer Title Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Title extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * Offer Yes/No Link Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Action_Link extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Function that gets the class names.
         */
        public function get_link()
        {
        }
    }
    /**
     * Offer Yes/No button Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Action_Button extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
        /**
         * Function that gets the class names.
         */
        public function get_classname()
        {
        }
        /**
         * Function that gets the button styling.
         */
        public function get_button_style()
        {
        }
        /**
         * Function that gets the class names.
         */
        public function get_link()
        {
        }
    }
    /**
     * Offer product image Module for Beaver Builder
     *
     * @since 1.6.13
     */
    class Cartflows_Pro_BB_Offer_Product_Image extends \FLBuilderModule
    {
        /**
         * Constructor function for the module. You must pass the
         * name, description, dir and url in an array to the parent class.
         */
        public function __construct()
        {
        }
        /**
         * Function to get the icon for the module
         *
         * @param string $icon gets the icon for the module.
         */
        public function get_icon($icon = '')
        {
        }
    }
    /**
     * Initialization
     *
     * @since 1.0.0
     */
    class Cartflows_Pro_Thankyou
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
         *  Display child orders at thank you page after order details.
         *
         * @param object $parent_order order object.
         */
        public function display_child_orders($parent_order)
        {
        }
    }
}
namespace {
    /**
     * Check if cartflows starter activated.
     *
     * @since x.x.x
     */
    function _is_cartflows_starter()
    {
    }
    /**
     * Check if cartflows plus activated.
     *
     * @since x.x.x
     */
    function _is_cartflows_plus()
    {
    }
    /**
     * Check if cartflows pluspro activated.
     *
     * @since x.x.x
     */
    function _is_cartflows_pluspro()
    {
    }
    /**
     * Is custom checkout?
     *
     * @param int $checkout_id checkout ID.
     * @since 1.0.0
     */
    function _is_wcf_optin_custom_fields($checkout_id)
    {
    }
    /**
     * Get get step object.
     *
     * @param int $step_id current step ID.
     * @since 1.5.9
     */
    function wcf_pro_get_step($step_id)
    {
    }
    /**
     * Get ab test
     *
     * @param int $step_id current step ID.
     * @since 1.0.0
     */
    function wcf_get_ab_test($step_id)
    {
    }
    /**
     * Get Current Step
     */
    function wcf_get_current_step_type()
    {
    }
    /**
     * Update the transient.
     *
     * @param int $checkout_id checkout id.
     */
    function wcf_update_the_checkout_transient($checkout_id)
    {
    }
    /**
     * Clean variables using sanitize_text_field.
     *
     * @param string|array $var Data to sanitize.
     * @return string|array
     */
    function wcf_clean($var)
    {
    }
    /**
     * Filter the price.
     *
     * @param int    $price price.
     * @param int    $product_id current product ID.
     * @param string $context context of action. Context can be view or edit.
     *
     * @access public
     * @return float
     */
    function wcf_pro_filter_price($price, $product_id = \false, $context = 'convert')
    {
    }
    /**
     * Covert the given price into string.
     *
     * @param int $price price.
     *
     * @access public
     * @return float
     */
    function wcf_float_to_string($price)
    {
    }
    /**
     * Wrapper for update order review. Always use this instead of woocommerce_order_review().
     */
    function cartflows_woocommerce_order_review()
    {
    }
    /**
     * License Request for Site
     *
     * @since 1.6.13
     *
     * @param  string  $license_key  License key.
     * @param  integer $site_id      Site ID.
     * @param  string  $request_type Request type (activate or deactivate).
     * @return mixed
     */
    function cartflows_pro_license_request($license_key = '', $site_id = 1, $request_type = '')
    {
    }
    /**
     * Activate License Request for Site
     *
     * @since 1.6.13
     *
     * @param  string  $license_key  License key.
     * @param  integer $site_id      Site ID.
     * @return mixed
     */
    function cartflows_pro_activate($license_key = '', $site_id = 1)
    {
    }
    /**
     * Deactivate License Request for Site
     *
     * @since 1.6.13
     *
     * @param  string  $license_key  License key.
     * @param  integer $site_id      Site ID.
     * @return mixed
     */
    function cartflows_pro_deactivate($license_key = '', $site_id = 1)
    {
    }
    /**
     * Activate Status
     *
     * @since 1.6.13
     *
     * @return string
     */
    function cartflows_pro_is_active_license()
    {
    }
    /**
     * Get global class.
     *
     * @return object
     */
    function wcf_pro()
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
     * Is woocommerce plugin installed.
     *
     * @since 1.0.0
     *
     * @access public
     */
    function _is_cartflows_installed()
    {
    }
    /**
     * Plugin Name: CartFlows Pro
     * Plugin URI: https://cartflows.com/
     * Description: eCommerce on steroid with Order Bump, One Click Upsells and much more!
     * Version: 1.11.9
     * Author: CartFlows Inc
     * Author URI: https://cartflows.com/
     * Text Domain: cartflows-pro
     *
     * @package cartflows
     */
    /**
     * Set constants.
     */
    \define('CARTFLOWS_PRO_FILE', __FILE__);
    \define('CARTFLOWS_PRO_SHORTCODES_DIR', \CARTFLOWS_PRO_DIR . 'modules/shortcodes/');
    \define('CARTFLOWS_PRO_SHORTCODES_URL', \CARTFLOWS_PRO_URL . 'modules/shortcodes/');
    \define('CARTFLOWS_PRO_OPTIN_DIR', \CARTFLOWS_PRO_DIR . 'modules/optin/');
    \define('CARTFLOWS_PRO_OPTIN_URL', \CARTFLOWS_PRO_URL . 'modules/optin/');
    \define('CARTFLOWS_WIDGETS_DIR', \CARTFLOWS_PRO_DIR . 'modules/widgets/');
    \define('CARTFLOWS_WIDGETS_URL', \CARTFLOWS_URL . 'modules/widgets/');
    \define('CARTFLOWS_PRO_AB_TEST_DIR', \CARTFLOWS_PRO_DIR . 'modules/ab-test/');
    \define('CARTFLOWS_PRO_BASE_OFFER_DIR', \CARTFLOWS_PRO_DIR . 'modules/offer/');
    \define('CARTFLOWS_PRO_UPSELL_DIR', \CARTFLOWS_PRO_DIR . 'modules/upsell/');
    \define('CARTFLOWS_PRO_UPSELL_URL', \CARTFLOWS_URL . 'modules/upsell/');
    \define('CARTFLOWS_PRO_CHECKOUT_DIR', \CARTFLOWS_PRO_DIR . 'modules/checkout/');
    \define('CARTFLOWS_PRO_CHECKOUT_URL', \CARTFLOWS_PRO_URL . 'modules/checkout/');
    \define('CARTFLOWS_TRACKING_DIR', \CARTFLOWS_PRO_DIR . 'modules/tracking/');
    \define('CARTFLOWS_TRACKING_URL', \CARTFLOWS_PRO_URL . 'modules/tracking/');
    \define('CARTFLOWS_PRO_DOWNSELL_DIR', \CARTFLOWS_PRO_DIR . 'modules/downsell/');
    \define('CARTFLOWS_PRO_DOWNSELL_URL', \CARTFLOWS_URL . 'modules/downsell/');
    \define('CARTFLOWS_PRO_THANKYOU_DIR', \CARTFLOWS_PRO_DIR . 'modules/thankyou/');
}