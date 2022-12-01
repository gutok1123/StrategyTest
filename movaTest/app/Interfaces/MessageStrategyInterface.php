<?php

namespace App\Interfaces;

interface MessageStrategyInterface{
    public function execute(): string;
}