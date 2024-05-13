<?php

namespace EsgiIw\TpDesignPattern\Model;

class BusinessEventValidator extends EventValidator
{
    protected function checkEligibility(User $user): bool
    {
        // Vérifie si l'utilisateur est membre du BDE
    }

    protected function validateRegistration(User $user): bool
    {
        // Validation de l'inscription à un événement professionnel
    }
}