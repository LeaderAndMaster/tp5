<?php
namespace app\demo\controller;

class Index
{
    public function index()
    {
        return 'jack';
    }

    public function hello($name = 'World', $city = '')
    {
        return 'Hello,' . $name . '! You come from ' . $city . '.';
    }
}
