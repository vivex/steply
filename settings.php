<?php


function steply_register_settings() {
    add_option( 'steply_main_color', '#93b874');
    add_option( 'steply_text_color', '#fff');
    register_setting( 'steply', 'steply_main_color', 'steply_callback' );
    register_setting( 'steply', 'steply_text_color', 'steply_callback' );
}

add_action( 'admin_init', 'steply_register_settings' );


function steply_options_page(){
    ?>
    <div>
        <?php screen_icon(); ?>
        <h2>Steply Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'steply' ); ?>
            <h3>Change Steply Settings here</h3>
            <table>
                <tr valign="top">
                    <th scope="row"><label for="steply_main_color">Main Color</label></th>
                    <td><input type="text" id="steply_main_color" name="steply_main_color" value="<?php echo get_option('steply_main_color'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="steply_text_color">Step Text Color</label></th>
                    <td><input type="text" id="steply_text_color" name="steply_text_color" value="<?php echo get_option('steply_text_color'); ?>" /></td>
                </tr>
            </table>
            <?php  submit_button(); ?>
        </form>
    </div>
    <?php
}
function steply_plugin_create_menu(){
    add_options_page('Steply Settings', 'Steply Settings', 'manage_options', 'steply', 'steply_options_page');
}
add_action('admin_menu', 'steply_plugin_create_menu');