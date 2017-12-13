<?php

use \LeanCloud\Client;
// 参数依次为 AppId, AppKey, MasterKey
Client::initialize("vWfTdVkt2d0C3sJ6Wy1h123V-gzGzoHsz", "qyJfdXdN8udwFJ88LlOwc9gc", "D1zYOe90Gz040naN9hgKPyYu");

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',true);
// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
