<?php
namespace cmspp\managers\interfaces\Event;
use cmspp\managers\interfaces\Service\IService;
use cmspp\managers\interfaces\Service\IControlManager;
use cmspp\managers\interfaces\Service\IServiceManager;

interface IEventManager
{
    public function add(string $toEvent, IService $currentEvent, IControlManager $serviceControl): bool;
    public function remove(string $neededService, string $currentEvent, IControlManager $serviceControl): bool;
    public function has(IServiceManager $serviceManager, string $serviceName): bool;
    public function setEventCompositeFactory(IEventCompositeFactory $eventCompositeFactory): self;
}