<?php
/**
* Plugin Name: geekaway-plugin
**/

// First, let's add First Name, Last Name, and Favorite Color to the registration form. 
// First Name and Last Name are default user meta fields in WordPress, but they aren't 
// usually on the registration form. Favorite Color is a custom user meta field.
add_action( 'register_form', 'geekawayplugin_register_form' );
function geekawayplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? sanitize_text_field( $_POST['first_name'] ) : '';
    $last_name = ( ! empty( $_POST['last_name'] ) ) ? sanitize_text_field( $_POST['last_name'] ) : '';
    $favorite_color = ( ! empty( $_POST['favorite_color'] ) ) ? sanitize_text_field( $_POST['favorite_color'] ) : '';
        
    ?>
    <p>
        <label for="first_name"><?php _e( 'First Name', 'geekawayplugin' ) ?><br />
            <input type="text" name="first_name" id="first_name" class="input" value="<?php echo esc_attr(  $first_name  ); ?>" size="25" /></label>
    </p>
    <p>
        <label for="last_name"><?php _e( 'Last Name', 'geekawayplugin' ) ?><br />
            <input type="text" name="last_name" id="last_name" class="input" value="<?php echo esc_attr(  $last_name  ); ?>" size="25" /></label>
    </p>
    <p>
        <label for="favorite_color"><?php _e( 'Favorite Color', 'geekawayplugin' ) ?><br />
            <input type="text" name="favorite_color" id="favorite_color" class="input" value="<?php echo esc_attr(  $favorite_color  ); ?>" size="25" /></label>
    </p>
    <?php
}

// We'll make the first and last name fields required, so we need to validate them.
add_filter( 'registration_errors', 'geekawayplugin_registration_errors', 10, 3 );
function geekawayplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {
    
    if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
        $errors->add( 'first_name_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'geekawayplugin' ),__( 'You must include a first name.', 'geekawayplugin' ) ) );
    }
    if ( empty( $_POST['last_name'] ) || ! empty( $_POST['last_name'] ) && trim( $_POST['last_name'] ) == '' ) {
        $errors->add( 'last_name_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'geekawayplugin' ),__( 'You must include a last name.', 'geekawayplugin' ) ) );
    }

    return $errors;
}

// Finally, let's save the data.
add_action( 'user_register', 'geekawayplugin_user_register' );
function geekawayplugin_user_register( $user_id ) {
    if ( ! empty( $_POST['first_name'] ) ) {
        update_user_meta( $user_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
    }
    if ( ! empty( $_POST['last_name'] ) ) {
        update_user_meta( $user_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
    }
    if ( ! empty( $_POST['favorite_color'] ) ) {
        update_user_meta( $user_id, 'favorite_color', sanitize_text_field( $_POST['favorite_color'] ) );
    }
}

// Now, let's add the Favorite Color field to the user profile page. The First Name 
// and Last Name are already on the profile page by default.
// show_user_profile only triggers when a user is viewing their own profile page.
// edit_user_profile only triggers when an admin is editing a user's profile page.
add_action( 'show_user_profile', 'geekawayplugin_profile_fields' );
add_action( 'edit_user_profile', 'geekawayplugin_profile_fields' );

function geekawayplugin_profile_fields( $user ) { ?>
    <h3><?php _e("Additional Information", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="favorite_color"><?php _e("Favorite Color"); ?></label></th>
        <td>
            <input type="text" name="favorite_color" id="favorite_color" value="<?php echo esc_attr( get_the_author_meta( 'favorite_color', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your favorite color."); ?></span>
        </td>
    </tr>
    </table>
<?php }

// Now, let's save the Favorite Color when the user profile page is saved.
// personal_options_update only triggers when a user is saving their own profile page.
// edit_user_profile_update only triggers when an admin is saving a user's profile page.
add_action( 'personal_options_update', 'geekawayplugin_save_profile_fields' );
add_action( 'edit_user_profile_update', 'geekawayplugin_save_profile_fields' );

function geekawayplugin_save_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'favorite_color', $_POST['favorite_color'] );
}