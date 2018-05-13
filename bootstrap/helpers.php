<?php
/**
 * Created by PhpStorm.
 * User: 谢欣冉
 * Date: 2018/5/13
 * Time: 16:10
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}