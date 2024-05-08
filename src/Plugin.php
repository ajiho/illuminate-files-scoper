<?php

namespace Ajiho\IlluminateFilesScoper;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\ScriptEvents;


class Plugin implements PluginInterface, EventSubscriberInterface
{

    /**
     * @var NamespaceGenerator
     */
    protected $generator;


    public function activate(Composer $composer, IOInterface $io)
    {
        $this->generator = new NamespaceGenerator($composer);
    }


    public function deactivate(Composer $composer, IOInterface $io)
    {
        // 不需要在deactivate做任何逻辑

    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // 不需要在uninstall做任何逻辑
    }


    public static function getSubscribedEvents()
    {
        //事件触发
        return [
            //事件名称 => 事件触发方法
            ScriptEvents::POST_AUTOLOAD_DUMP => 'onPostDump',
        ];

    }


    public function onPostDump()
    {
        $this->generator->run();
    }


}
