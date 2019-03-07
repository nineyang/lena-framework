<?php

namespace LenaFramework\Core;

use Monolog\Logger;

/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/7
 * Time: 下午9:34
 */
final class LenaApplication
{
    public static function run()
    {
        $logger = new Logger('lena');
        $logger->alert("lena application has run.");
    }
}