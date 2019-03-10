<?php
/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/8
 * Time: 上午10:45
 */

namespace LenaFramework\Core;


interface Ordered
{
    const HIGHEST_PRECEDENCE = -2147483648;

    const LOWEST_PRECEDENCE = 2147483648;
}