<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() === 'production') return;

        \App\User::truncate();
        factory(\App\User::class, 10)->create();

        $adminUser = factory(\App\User::class)->make();
        $adminUser->save();
        echo("\nAn administrative user is set up with the following credentials.\nemail: " . $adminUser->email . "\npassword: secret\n");

    }
}
