<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'admin',
                'email' => 'admin@blackbits.io',
            ],
            [
                'name' => 'user',
                'email' => 'user@blackbits.io',
            ],
        ])->each(function ($user) {
            factory(\App\User::class)->create($user);
        });
    }
}
