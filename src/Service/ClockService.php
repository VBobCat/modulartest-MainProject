<?php


namespace App\Service;


class ClockService
{
    public function now(): string
    {
        return date('c');
    }
}
