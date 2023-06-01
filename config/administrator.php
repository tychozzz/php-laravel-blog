<?php

use Illuminate\Support\Facades\Auth;

return array(

    // 后台的 URI 入口
    'uri' => 'admin',

    // 后台专属域名，没有的话可以留空
    'domain' => '',

    // 应用名称，在页面标题和左上角站点名称处显示
    'title' => env('APP_NAME', 'Laravel'),

    // 模型配置信息文件存放目录
    'model_config_path' => config_path('administrator'),

    // 配置信息文件存放目录
    'settings_config_path' => config_path('administrator/settings'),

    'menu' => [
        '用户与权限' => [
            'users',
        ],
    ],

    'permission' => function () {
        // 只要是能管理内容的用户，就允许访问后台
        return Auth::check() && Auth::user()->can('manage_contents');
    },

    'use_dashboard' => false,

    'dashboard_view' => '',

    'home_page' => 'users',

    'back_to_site_path' => '/',

    'login_path' => 'login',

    'login_redirect_key' => 'redirect',

    'global_rows_per_page' => 20,

    'locales' => [],
);
