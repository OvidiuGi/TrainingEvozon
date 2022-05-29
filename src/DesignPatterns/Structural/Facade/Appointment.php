<?php

namespace App\DesignPatterns\Structural\Facade;

class Appointment
{
    public $appointment = false;

    public function createAppointment(): bool
    {
        $this->appointment = true;

        return $this->appointment;
    }
}