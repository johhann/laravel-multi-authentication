<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    public function run()
    {
        Agent::factory()->times(10)->create();
    }
}
