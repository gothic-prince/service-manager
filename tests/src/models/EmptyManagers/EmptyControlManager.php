<?php
namespace cmspp\serviceManager\models\EmptyManagers;
use cmspp\serviceManager\interfaces\Service\IControlManager;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

class EmptyControlManager implements IControlManager
{
    public function getType(): string
    {
        // TODO: Implement getType() method.
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function init(IServiceManager $serviceManager)
    {
        // TODO: Implement init() method.
    }

    public function getLine(): string
    {
        // TODO: Implement getLine() method.
    }

    public function getFile(): string
    {
        // TODO: Implement getFile() method.
    }

    public function getFromService(): string
    {
        // TODO: Implement getFromService() method.
    }

    public function getToService(): string
    {
        // TODO: Implement getToService() method.
    }

    public function isValid(): bool
    {
        // TODO: Implement isValid() method.
    }
}