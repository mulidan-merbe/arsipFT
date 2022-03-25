<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use App\Filters\Filter_auth;
// use \Myth\Auth\Filters\LoginFilter;
// use \Myth\Auth\Filters\RoleFilter;
// use \Myth\Auth\Filters\PermissionFilter;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'filter_auth'   => Filter_auth::class,
        // 'login'      => \Myth\Auth\Filters\LoginFilter::class,
		// 'role'       => \Myth\Auth\Filters\RoleFilter::class,
		// 'permission' => \Myth\Auth\Filters\PermissionFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'filter_auth' => ['except' => [
                'auth', 'auth/*',
                '/'
            ]]
        ],
        // 'before' => [
        //     'honeypot',
        //     'login',
        // ],
        'after' => [
            'filter_auth' => ['except' => [
                'home', 'home/*',
                'kategori', 'kategori/*',
                'department', 'department/*',
                'dosen', 'dosen/*',
                'tendik', 'tendik/*',
                'user', 'user/*',
                'masuk', 'masuk/*',
                'masuk2', 'masuk2/*',
                'tugas', 'tugas/*',
                'skrektor', 'skrektor/*',
                'sk', 'sk/*',
                'word', 'word/*',
            ]],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
