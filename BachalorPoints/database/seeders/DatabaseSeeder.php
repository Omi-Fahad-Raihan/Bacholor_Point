<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('petitions')->insert([
        //   'title' => Str::random(18),
        //   'category' => Str::random(30),
        //   'description'

        // ]);

        // Petition::factory(50)->create();
        Petition::factory()->times(50)->create();
    }
}
