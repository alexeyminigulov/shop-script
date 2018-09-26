<?php

namespace domain\dispatcher;

class EventDispatcher implements EventDispatcherInterface
{
    private $listeners = [];

    public function __construct($listeners)
    {
        $this->listeners = $listeners;
    }

    public function dispatch($event)
    {
        $eventName = get_class($event);
        if (array_key_exists($eventName, $this->listeners)) {
            foreach ($this->listeners[$eventName] as $listener) {
                $listener($event);
            }
        }
    }

    public function dispatchAll(array $events)
    {
        foreach ($events as $event) {
            $this->dispatch($event);
        }
    }
}