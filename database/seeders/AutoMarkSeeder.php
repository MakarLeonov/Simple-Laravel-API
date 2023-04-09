<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AutoMark;

class AutoMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AutoMark::factory()->count(12)->create();
    }
}
