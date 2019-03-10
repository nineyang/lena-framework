<?php
/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/8
 * Time: 上午10:25
 */

namespace LenaFramework\Util;


class Arrays
{

    /**
     * @param array $array
     * @param null $default
     * @return mixed|null
     */
    public static function first(array $array, $default = null)
    {
        return empty($array) ? $default : $array[0];
    }

    /**
     * @param array $array
     * @param null $default
     * @return mixed|null
     */
    public static function last(array $array, $default = null)
    {
        return empty($array) ? $default : end($array);
    }
}