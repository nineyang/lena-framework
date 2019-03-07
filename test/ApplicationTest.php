<?php

namespace LenaFrameworkTest;

use LenaFramework\Application;
use PHPUnit\Framework\TestCase;

/**
 * Created by IntelliJ IDEA.
 * User: nineyang
 * Date: 2019/3/7
 * Time: 下午10:07
 */
class ApplicationTest extends TestCase
{
    public function testMain()
    {
        Application::main();
        $this->assertTrue(true);
    }
}