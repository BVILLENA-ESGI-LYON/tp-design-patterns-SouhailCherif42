<?php

namespace EsgiIw\TpDesignPattern\Model;

class SportEventValidator extends EventValidator
{
    protected function checkEligibility(User $user): bool
    {
        // Vérifie si le user a un certificat médical
    }

    protected function validateRegistration(User $user): bool
    {
        // Valide l'inscription à un Event sportif
    }
}