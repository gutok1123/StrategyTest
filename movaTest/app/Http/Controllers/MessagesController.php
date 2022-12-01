<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessagesRequest;
use App\Services\MessagesService;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct(protected MessagesService  $messagesService)
    {
    }

    public function show(MessagesRequest $request)
    {
        $data = $request->validated();

        return  $this->json($this->messagesService->getWeekdayMessage( $data['weekday']));
    }
}
