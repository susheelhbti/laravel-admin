<?php

return [

    /*
     * Domain for routing.
     * @type string
     */
    'domain' => env('CONSOLE_DOMAIN', ''),

    /*
     * Prefix for routing.
     *
     * @type string
     */
    'prefix' => env('CONSOLE_PREFIX', 'console'),

    /*
     * URI name Prefix
     *
     * @type string
     */
    'name' => 'admin.',

    /*
     * Namespace for controllers.
     *
     * @type string
     */
    'namespace' => 'Admin',

    /*
     * The permission option is the highest-level authentication check that lets you define a closure that should return true if the current user
     * is allowed to view the admin section. Any "falsey" response will send the user back to the 'login_path' defined below.
     *
     * @type closure
     */
    'permission' => 'dashboards',

    /*
     * The login path is the path where Administrator will send the user if they fail a permission check
     *
     * @type string
     */
    'login_path' => 'admin.login',

    /*
     * This is the key of the return path that is sent with the redirection to your login_action. Session::get('redirect') will hold the return URL.
     *
     * @type string
     */
    'login_redirect_key' => 'redirect',

    /*
     * Global default rows per page
     *
     * @type int
     */
    'global_rows_per_page' => 20,
                
    'custom_routes_file' => app_path('routes/administrator.php'),
                
    'allowed_upload_file_exts' => [
        'ico',
        'png',
        'jpg',
        'gif',
        'jpeg',
        'mp4',
        'mov',
        'mp3'
    ]
];