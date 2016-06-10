<?php
namespace cmspp\serviceManager\models\CounterServise;
use cmspp\plugin\interfaces\IPlugin;
use cmspp\serviceManager\interfaces\Service\IService;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

class CounterService implements IService
{
    /**
     * @var IPlugin
     */
    protected $plugins = [];
    public function getType(): string
    {
        return "service";
    }

    public function getName(): string
    {
        return "CounterService";
    }

    public function init(IServiceManager $serviceManager)
    {
        // TODO: Implement init() method.
    }
    public function addPlugin(IPlugin $plugin)
    {
        $this->plugins[] = $plugin;
    }
    public function getPlugins()
    {
        return $this->plugins;
    }
}