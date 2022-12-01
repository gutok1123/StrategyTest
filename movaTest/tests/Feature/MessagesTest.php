<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessagesTest extends TestCase
{
    /**
     * 
     * The test verifies the return of the sunday message
     * 
     * @return void
     */
    public function test_get_message_sunday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Sunday']);
        $this->assertStringContainsString('Domingo', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * The test verifies the return of the monday message
     * 
     * @return void
     */
    public function test_get_message_monday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Monday']);
        $this->assertStringContainsString('Segundou', $request->content());
        $request->assertStatus(200);
    }

    /**
     * The test verifies the return of the tuesday message
     * 
     * @return void
     */
    public function test_get_message_tuesday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Tuesday']);
        $this->assertStringContainsString('Terca-Feira', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * The test verifies the return of the wednesday message
     * 
     * @return void
     */
    public function test_get_message_wednesday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Wednesday']);
        $this->assertStringContainsString('Quarta-Feira', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * The test verifies the return of the thursday message
     * 
     * @return void
     */
    public function test_get_message_thursday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Thursday']);
        $this->assertStringContainsString('Quinta-Feira', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * The test verifies the return of the friday message
     * 
     * @return void
     */
    public function test_get_message_friday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Friday']);
        $this->assertStringContainsString('Sextouu', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * The test verifies the return of the saturday message
     * 
     * @return void
     */
    public function test_get_message_saturday_return_message_of_day()
    {
        $request = $this->post('/api/message', ['weekday' => 'Saturday']);
        $this->assertStringContainsString('Sabadou', $request->content());
        $request->assertStatus(200);
    }

    /**
     * 
     * 
     *The test checks the return when we have a 422 error
     * 
     * @return void
     */
    public function test_get_message_error_return_exception_422()
    {
        $request = $this->post('/api/message', ['weekday' => 'Monnday']);
        $this->assertStringContainsString('error', $request->content());
        $request->assertStatus(422);
    }
}
