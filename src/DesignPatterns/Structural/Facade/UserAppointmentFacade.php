<?php

namespace App\DesignPatterns\Structural\Facade;

class UserAppointmentFacade
{
    private User $user;

    private Appointment $appointment;

    public function __construct()
    {
        $this->user = new User();
        $this->appointment = new Appointment();
    }

    public function makeAppointment()
    {
        $this->user->createAccount();
        $this->appointment->createAppointment();

        return true;
    }
}