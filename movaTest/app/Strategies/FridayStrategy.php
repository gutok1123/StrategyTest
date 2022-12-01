<?php

namespace App\Strategies;

use App\Enums\WeekdayMessageEnum;
use App\Interfaces\MessageStrategyInterface;
use App\Models\Message;
use App\Repositories\MessagesRepository;

class FridayStrategy implements MessageStrategyInterface
{
    protected $repository;
    
    public function __construct()
    {
        $this->repository = new MessagesRepository(new Message());
    }
    
    public function execute(): string
    {
        return $this->repository->getMessageAtDay(WeekdayMessageEnum::FRIDAY);
    }
}
