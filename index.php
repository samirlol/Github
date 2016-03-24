<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

//设置页面打印编码
header('content-type:text/html;charset=utf-8');

//定义CSS,IMG,JS
define("SITE_URL", "http://www.localhost.com/");//站点URL
define("CSS_URL", SITE_URL."test/public/Home/css/");//CSS
define("IMG_URL", SITE_URL."test/public/Home/images/");//IMG
define("JS_URL", SITE_URL."test/public/Home/js/");//JS
define("ADMIN_CSS_URL", SITE_URL."test/public/Admin/css/");//后台css
define("ADMIN_IMG_URL", SITE_URL."test/public/Admin/img/");//后台img

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./test/');

// 引入ThinkPHP入口文件
include './ThinkPHP/ThinkPHP.php';
