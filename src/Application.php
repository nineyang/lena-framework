<?php

namespace LenaFramework;

use LenaFramework\Core\LenaApplication;

class Application
{


    public static function main()
    {
        $app = new LenaApplication();
        $app->run();
    }

}