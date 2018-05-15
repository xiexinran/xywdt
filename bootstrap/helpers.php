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

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}