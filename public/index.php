<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
// define('APP_PATH', __DIR__ . '/../application/');
// // 加载框架引导文件
// require __DIR__ . '/../thinkphp/start.php';
echo 'hello';
$str1="hello php ";
//字符串索引
echo strpos('haystack', 'a');echo "<br>";
//字符串截取
echo substr('haystack',1);echo "<br>";
echo substr('haystack',1,2);echo "<br>";
//字符串转数组
$result=str_split($str1);
print_r($result);echo "<br>";