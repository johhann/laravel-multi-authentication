<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AgentFactory extends Factory
{
    protected $model = Agent::class;

    public function definition()
    {
        return [
            'username' => $this->faker->username(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
