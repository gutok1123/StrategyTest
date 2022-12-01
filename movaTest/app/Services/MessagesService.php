<?php

namespace App\Services;

use App\Contexts\WeekdayMessageContext;
use App\Strategies\FridayStrategy;
use App\Strategies\MondayStrategy;
use App\Strategies\SaturdayStrategy;
use App\Strategies\SundayStrategy;
use App\Strategies\ThursdayStrategy;
use App\Strategies\TuesdayStrategy;
use App\Strategies\WednesdayStrategy;

class MessagesService
{

    public function getWeekdayMessage(string $weekday)
    {
        $context = new WeekdayMessageContext;

        $strategies = [
            'Sunday' => fn () => new SundayStrategy,
            'Monday' => fn () => new MondayStrategy,
            'Tuesday' => fn () => new TuesdayStrategy,
            'Wednesday' => fn () => new WednesdayStrategy,
            'Thursday' => fn () => new ThursdayStrategy,
            'Friday' => fn () => new FridayStrategy,
            'Saturday' => fn () => new SaturdayStrategy,
        ];

        $context->setStrategy($strategies[$weekday]());

        return $context->executeStrategy();
    }
}
