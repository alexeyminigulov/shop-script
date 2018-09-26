<?php

namespace domain\entities\User;

trait UserEventsTrait
{
    private $_events = [];

    protected function addEvent($event)
    {
        $this->_events[] = $event;
    }

    public function releaseEvents()
    {
        $events = $this->_events;
        $this->_events = [];

        return $events;
    }
}