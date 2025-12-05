<?php
/**
 * IDE Helper Stubs for Vinyl Shop Discogs
 * This file helps IDEs understand WordPress constants and global functions.
 * DO NOT include this file in production code.
 *
 * @package Vinyl_Shop_Discogs
 */

// WordPress core constants
if (!defined('ABSPATH')) {
    /**
     * The absolute path to the WordPress directory
     * @var string
     */
    define('ABSPATH', __DIR__ . '/');
}

// Plugin constants (defined in main plugin file)
if (!defined('VSD_VERSION')) {
    define('VSD_VERSION', '1.0.0');
}

if (!defined('VSD_PLUGIN_DIR')) {
    define('VSD_PLUGIN_DIR', __DIR__ . '/');
}

if (!defined('VSD_PLUGIN_URL')) {
    define('VSD_PLUGIN_URL', 'http://example.com/wp-content/plugins/vinyl-shop-discogs/');
}

if (!defined('VSD_PLUGIN_BASENAME')) {
    define('VSD_PLUGIN_BASENAME', 'vinyl-shop-discogs/vinyl-shop-discogs.php');
}

// WooCommerce detection stub
if (!class_exists('WooCommerce')) {
    /**
     * WooCommerce main class stub
     */
    class WooCommerce {
        public $version = '8.0.0';
    }
}

// WC_Product stub
if (!class_exists('WC_Product_Simple')) {
    /**
     * WooCommerce Simple Product stub
     */
    class WC_Product_Simple {
        public function set_name($name) {}
        public function set_description($description) {}
        public function set_short_description($description) {}
        public function set_status($status) {}
        public function set_sku($sku) {}
        public function set_regular_price($price) {}
        public function set_manage_stock($manage) {}
        public function set_stock_quantity($quantity) {}
        public function set_stock_status($status) {}
        public function save() { return 1; }
        public function get_id() { return 1; }
        public function get_name() { return ''; }
    }
}

// WP_Error stub
if (!class_exists('WP_Error')) {
    /**
     * WordPress Error class stub
     */
    class WP_Error {
        public function __construct($code = '', $message = '', $data = '') {}
        public function get_error_message() { return ''; }
        public function get_error_code() { return ''; }
    }
}

// Global helper functions that IDEs might miss
if (!function_exists('is_wp_error')) {
    /**
     * Check whether variable is a WordPress Error
     * @param mixed $thing
     * @return bool
     */
    function is_wp_error($thing) {
        return $thing instanceof WP_Error;
    }
}

if (!function_exists('wc_get_product')) {
    /**
     * Get WooCommerce product
     * @param int|WC_Product_Simple $product
     * @return WC_Product_Simple|false
     */
    function wc_get_product($product) {
        return new WC_Product_Simple();
    }
}
