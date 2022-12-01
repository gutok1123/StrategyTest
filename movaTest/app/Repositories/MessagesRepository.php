<?php

namespace App\Repositories;

use App\Enums\WeekdayMessageEnum;
use App\Models\Message;

class MessagesRepository
{
    public function __construct(protected Message $model)
    {
    }

    public function getMessageAtDay(WeekdayMessageEnum $day):string
    {
      $messageAtDay = $this->model->where('day_of_week',$day)->first();

      return $messageAtDay->message;
    }
}
