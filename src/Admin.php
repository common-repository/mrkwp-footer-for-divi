<?php
namespace MRKWP\GlobalFooter;

class Admin {
    protected $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function init() {
        $this->container['menu']->adminMenu();
    }

    public function add_zoho_support_form_page_menu() {
        $product_name = 'Footer Plugin';
        $container    = $this->container;

        add_submenu_page(
            'divi-footer-selector',
            'Contact',
            'Contact',
            'manage_options',
            'divi-footer-selector-contact',
            function () use ($product_name, $container) {
                ob_start();
                include $container['plugin_dir'] . '/resources/views/admin/zoho-support-form.php';
                echo ob_get_clean();
            }
        );
    }
}
