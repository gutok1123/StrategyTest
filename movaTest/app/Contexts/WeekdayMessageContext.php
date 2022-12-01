<?php

namespace App\Contexts;

use App\Interfaces\MessageStrategyInterface;

class WeekdayMessageContext
{
    protected MessageStrategyInterface $strategy;

    public function setStrategy(MessageStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(): string
    {
        return  $this->strategy->execute();
    }
}
