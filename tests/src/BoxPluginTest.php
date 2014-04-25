<?php

namespace Task\Plugin;

/**
 * @runTestsInSeparateProcesses
 */
class BoxPluginTest extends \PHPUnit_Framework_TestCase
{
    public function testApplication()
    {
        $plugin = new BoxPlugin;
        $this->assertInstanceOf('KevinGH\Box\Application', $plugin->getApplication());
    }

    public function testBoxPath()
    {
        $plugin = new BoxPlugin;
        $this->assertEquals('./vendor/kherge/box', BOX_PATH);
    }

    public function testPreservesBoxPath()
    {
        define('BOX_PATH', __DIR__);
        $plugin = new BoxPlugin;
        $this->assertEquals(__DIR__, BOX_PATH);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsOnBadBoxPath()
    {
        $plugin = new BoxPlugin('nope');
    }
}
