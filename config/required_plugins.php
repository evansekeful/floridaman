<?php
/**
 *******************************************************************************
 * //config/required_plugins.php
 *******************************************************************************
 *
 * Plugins required / recommend by this theme.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/


/**
 *******************************************************************************
 * required_plugins
 *******************************************************************************
 *
 *
 *
 *
**/

add_action( 'tgmpa_register', 'required_plugins' );

function required_plugins()
{

    $plugins = array(

        array(
            'name'                  => 'Bootstrap 3 Shortcodes',
            'slug'                  => 'bootstrap-3-shortcodes',
            'source'                => 'http://downloads.wordpress.org/plugin/bootstrap-3-shortcodes.zip',
            'required'              => false,
            'version'               => '3.3.6',
            'force_activation'      => true,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => 'FooGallery – Image Gallery WordPress Plugin',
            'slug'                  => 'foogallery',
            'source'                => 'https://downloads.wordpress.org/plugin/foogallery.zip',
            'required'              => false,
            'version'               => '1.2.18',
            'force_activation'      => true,
            'force_deactivation'    => false,
            'external_url'          => 'https://fooplugins.com/plugins/foogallery/',
        ),

        // add more...
    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'delicias';

    $config = array(
        'domain'            => $theme_text_domain,
        'default_path' 	    => '',
        'parent_menu_slug' 	=> 'themes.php',
        'parent_url_slug' 	=> 'themes.php',
        'menu'              => 'install-required-plugins',
        'has_notices'      	=> true,
        'is_automatic'    	=> false,
        'message' 	        => '',

        'strings'      	=> array(
            'page_title'                        => __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                        => __( 'Install Plugins', $theme_text_domain ),
            'installing'                        => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                              => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'       => _n_noop( 'Gramophone requires the following plugin: %1$s.', 'Gramophone requires the following plugins: %1$s.' ),
            'notice_can_install_recommended'    => _n_noop( 'Gramophone recommends the following plugin: %1$s.', 'Gramophone recommends the following plugins: %1$s.' ),
            'notice_cannot_install'             => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'      => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'            => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'              => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'              => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                      => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                     => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                            => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                  => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                          => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ),
            'nag_type'                          => 'updated'
        )
    );

    tgmpa( $plugins, $config );

}

?>
