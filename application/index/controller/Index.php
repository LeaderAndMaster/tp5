<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'hello ';
    }

    public function hello($name = 'World', $city = '')
    {
        return 'Hello,' . $name . '! You come from ' . $city . '.';
    }

    public function getJson($name = 'World', $city = '')
    {
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        return json_encode($arr);
    }

}