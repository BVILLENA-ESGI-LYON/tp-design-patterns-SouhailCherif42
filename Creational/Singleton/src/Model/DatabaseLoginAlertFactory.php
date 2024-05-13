<?php

// src/Model/DatabaseLoginAlertFactory.php

namespace EsgiIw\TpDesignPattern\Model;

class DatabaseLoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new DatabaseLoginAlert();
    }
}