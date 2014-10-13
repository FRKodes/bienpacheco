<?php

return [
    'location' => [
        'new' => 'New Location',
    ],
    'locations' => [
        'menu_label' => 'Locations',
        'menu_description' => 'Manage available user countries and states.',
        'enabled_label' => "Enabled",
        'enabled_help' => "Disabled locations are not visible on the front-end.",
        'enable_or_disable_title' => "Enable or Disable Locations",
        'enable_or_disable' => 'Enable or disable',
        'selected_amount' => 'Locations selected: :amount',
        'enable_success' => "Successfully enabled those locations.",
        'disable_success' => "Successfully disabled those locations.",
        'disable_confirm' => 'Are you sure?',
        'create_title' => 'Create Location',
        'update_title' => 'Edit Location',
        'preview_title' => 'Preview Locations',
        'list_title' => 'Manage Locations',
        'state' => 'State',
        'delete_confirm' => 'Do you really want to delete this location?',
        'return_to_list' => 'Return to locations list',
    ],
    'users' => [
        'menu_label' => 'Users',
        'all_users' => 'All Users',
        'new_user' => 'New User',
        'list_title' => 'Manage Users',
        'activating' => 'Activating...',
        'activate_warning_title' => 'User not activated!',
        'activate_warning_desc' => 'This user has not been activated and will be unable to sign in.',
        'activate_confirm' => 'Do you really want to activate this user?',
        'active_manually' => 'Activate this user manually',
        'delete_confirm' => 'Do you really want to delete this user?',
        'activated_success' => 'User has been activated successfully!',
        'return_to_list' => 'Return to users list',
    ],
    'settings' => [
        'menu_label' => 'User Settings',
        'menu_description' => 'Manage user based settings.',
        'activation_tab' => 'Activation',
        'location_tab' => 'Location',
        'signin_tab' => 'Sign in',
        'activate_mode' => 'Activation mode',
        'activate_mode_comment' => 'Select how a user account should be activated.',
        'activate_mode_auto' => 'Automatic',
        'activate_mode_auto_comment' => 'Activated automatically upon registration.',
        'activate_mode_user' => 'User',
        'activate_mode_user_comment' => 'The user activates their own account using mail.',
        'activate_mode_admin' => 'Administrator',
        'activate_mode_admin_comment' => 'Only an Administrator can activate a user.',
        'welcome_template' => 'Welcome Template',
        'welcome_template_comment' => 'Mail template to send a user when they are first activated.',
        'require_activation' => 'Sign in requires activation',
        'require_activation_comment' => 'Users must have an activated account to sign in.',
        'default_country' => 'Default Country',
        'default_country_comment' => 'When a user does not specify their location, select a default country to use.',
        'default_state' => 'Default State',
        'default_state_comment' => 'When a user does not specify their location, select a default state to use.',
        'use_throttle' => 'Throttle attemps',
        'use_throttle_comment' => 'Repeat failed sign in attempts will temporarily suspend the user.',
        'login_attribute' => 'Login attribute',
        'login_attribute_comment' => 'Select what user detail should be used for signing in.',
        'no_mail_template' => 'Do not send a notification',
        'hint_templates' => 'You can customize mail templates by selecting Mail > Mail Templates from the settings menu.',
    ],
    'state' => [
        'name' => 'Name',
        'name_comment' => 'Enter the display name for this state.',
        'code' => 'Code',
        'code_comment' => 'Enter a unique code to identify this state.',
    ],
    'country' => [
        'name' => 'Name',
        'code' => 'Code',
        'code_comment' => 'Enter a unique code to identify this country.',
        'enabled' => 'Enabled',
    ],
    'user' => [
        'id' => 'ID',
        'username' => 'Username',
        'name' => 'Name',
        'email' => 'Email',
        'created_at' => 'Registered',
        'phone' => 'Phone',
        'company' => 'Company',
        'city' => 'City',
        'zip' => 'Zip',
        'street_addr' => 'Street Address',
        'country' => 'Country',
        'state' => 'State',
        'reset_password' => 'Reset Password',
        'reset_password_comment' => 'To reset this users password, enter a new password here.',
        'confirm_password' => 'Password Confirmation',
        'confirm_password_comment' => 'Enter the password again to confirm it.',
        'avatar' => 'Avatar',
        'details' => 'Details',
        'account' => 'Account',
    ],
    'login' => [
        'attribute_email' => 'Email',
        'attribute_username' => 'Username',
    ],
    'account' => [
        'account' => 'Account',
        'account_desc' => 'User management form.',
        'redirect_to' => 'Redirect to',
        'redirect_to_desc' => 'Page name to redirect to after update, sign in or registration.',
        'code_param' => 'Activation Code Param',
        'code_param_desc' => 'The page URL parameter used for the registration activation code',
        'invalid_activation_code' => 'Invalid activation code supplied',
        'invalid_user' => 'A user was not found with the given credentials.',
        'success_activation' => 'Successfully activated your account.',
        'success_saved' => 'Settings successfully saved!',
        'login_first' => 'You must be logged in first!',
        'alredy_active' => 'Your account is already activated!',
        'activation_email_sent' => 'Activation email has been sent to your nominated email address.',
        'country' => 'Country',
        'state' => 'State',
        'sign_in' => 'Sign in',
        'register' => 'Register',
        'full_name' => 'Full Name',
        'email' => 'Email',
        'password' => 'Password',
        'register' => 'Register',
        'login' => 'Login',
        'address' => 'Address',
        'city_suburb' => 'City / Suburb',
        'postal_code' => 'Postal code',
        'new_password' => 'New Password',
        'new_password_confirm' => 'Confirm New Password',
    ],
    'reset_password' => [
        'reset_password' => 'Reset Password',
        'reset_password_desc' => 'Forgotten password form.',
        'code_param' => 'Reset Code Param',
        'code_param_desc' => 'The page URL parameter used for the reset code',
    ],
    'session' => [
        'session' => 'Session',
        'session_desc' => 'Adds the user session to a page and can restrict page access.',
        'security_title' => 'Allow only',
        'security_desc' => 'Who is allowed to access this page.',
        'all' => 'All',
        'users' => 'Users',
        'guests' => 'Guests',
        'redirect_title' => 'Redirect to',
        'redirect_desc' => 'Page name to redirect if access is denied.',
    ],
];