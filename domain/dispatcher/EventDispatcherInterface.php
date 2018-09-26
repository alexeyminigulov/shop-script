<?php

namespace domain\dispatcher;

interface EventDispatcherInterface
{
    public function dispatch($event);

    public function dispatchAll(array $events);
}