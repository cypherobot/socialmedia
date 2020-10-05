<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('connection_statuses')->insert([
            'id' => 3,
            'status' => "Blocked",
        ]);
    }
}
