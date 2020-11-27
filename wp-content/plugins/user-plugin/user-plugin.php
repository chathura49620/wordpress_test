<?php
/**
 * Plugin Name: Admin User Plugin
 * Description: This is just a User plugin for Admin Dashboard
 */

        function create_plugin_database_table_admin_users()
        {
            global $table_prefix, $wpdb;

            $tblname = 'test_users';
            $wp_track_table = $table_prefix . "$tblname ";
            if($wpdb->get_var("show tables like '$wp_track_table'" ) != $wp_track_table) 
            {
                $charset_collate = $wpdb->get_charset_collate();

                $sql = "CREATE TABLE $wp_track_table (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                first_name text NOT NULL,
                last_name text NOT NULL,
                email text NOT NULL,
                PRIMARY KEY (id)
                ) $charset_collate;";
                require_once(ABSPATH . '/wp-admin/includes/upgrade.php');
                dbDelta($sql);
            }
        }
        register_activation_hook(__FILE__, 'create_plugin_database_table_admin_users');
        function test_admin_menu_option()
    {
        add_menu_page('Add User','Admin Users','manage_options','user-admin-menu','script_page','',200);

    }
    add_action('admin_menu','test_admin_menu_option');

    function script_page(){

        if(array_key_exists('submit_user_details',$_POST)){
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];

                global $wpdb;
                $table_name = $wpdb->prefix . 'test_users';

                $wpdb->insert( 
                    $table_name, 
                    array( 
                        'first_name' => $first_name, 
                        'last_name' => $last_name, 
                        'email' => $email, 
                    ) 
                );
            ?>
            <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"><strong><?php echo $first_name ?></strong></div>
            <?php
            
        }
            ?>
            <div class="wrap">
                <h2>Add User Details</h2>
                <form method="POST" action="">
                    <p><lable for="first-name">First Name</lable>
                        <input type="text" name="first_name" value="Enter First Name" require></p>

                    <p><lable for="last-name">Last Name</lable>
                        <input type="text" name="last_name" value="Enter Last Name" require></p>

                    <p><lable for="email">Your Email</lable>
                        <input type="text" name="email" value="Enter Your Email" require></p>


                    <input type="submit" name="submit_user_details" class="button button-primary" value="SUBMIT DETAILS">
                </form>
            </div>
        <?php   
    }

        ?>
