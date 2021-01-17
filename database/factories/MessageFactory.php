<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *  
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' =>  rand(1,10),
            'message' => $this->faker->paragraph($nbWords=3)
        ];
    }
}
