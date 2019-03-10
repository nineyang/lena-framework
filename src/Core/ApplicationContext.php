<?php
/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/10
 * Time: 下午12:30
 */

namespace LenaFramework\Core;


trait ApplicationContext
{
    public function prepareContext()
    {
        $environment = new ConfigurableEnvironment();
        $dotenv = Dotenv\Dotenv::create(__DIR__);
        $dotenv->load();
    }
}