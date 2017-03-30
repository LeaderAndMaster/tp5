<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 全局变量规则定义
    '__pattern__' => [
        'name' => '\w+',
        'id' => '\d+',
        'year' => '\d{4}',
        'month' => '\d{2}',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'hello/[:name]' => 'index/index/hello',
    //blog
    '[blog]' => [
        ':year/:month' => ['blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
        ':id' => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['blog/read', ['method' => 'get'], ['name' => '\w+']],
    ],
];
