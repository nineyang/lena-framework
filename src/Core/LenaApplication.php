<?php

namespace LenaFramework\Core;

use Monolog\Logger;
use LenaFramework\Core\ApplicationContext;

/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/7
 * Time: 下午9:34
 */
final class LenaApplication
{
    use ApplicationContext;

    public function run()
    {
        $logger = new Logger('lena');
        $logger->alert("lena application has run.");

        $this->prepareContext();
    }

}