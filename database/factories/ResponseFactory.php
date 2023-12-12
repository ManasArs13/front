<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Response>
 */
class ResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => 'gzPINIUSq1MSwDDLX4XRnAh6Ag0PRXZhnRruK02r',
            'body' => '{ "a" : "a" }',
        ];
    }
}
