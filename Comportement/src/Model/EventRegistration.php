<?php

namespace EsgiIw\TpDesignPattern\Model;

class EventRegistration
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function register(User $user): void
    {
        // Enregistre l'user à l'Event
    }
}