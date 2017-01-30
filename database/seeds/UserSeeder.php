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
        factory(App\User::class)->create([
            'name' => 'First User',
            'email' => 'first@example.com'
        ]);

        factory(App\User::class)->create([
            'name' => 'Second User',
            'email' => 'second@example.com'
        ]);
    }
}
