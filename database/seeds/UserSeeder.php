<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'phone_number' => '082230634412',
            'password' => Hash::make('konek.space')
        ]);

        User::create([
            'name' => 'Member',
            'role_id' => 2,
            'email' => 'member@mail.com',
            'email_verified_at' => now(),
            'phone_number' => '082230634412',
            'password' => Hash::make('konek.space')
        ]);

        User::create([
            'name' => 'Agent Level 1',
            'role_id' => 3,
            'email' => 'agent1@mail.com',
            'email_verified_at' => now(),
            'phone_number' => '082230634412',
            'password' => Hash::make('konek.space')
        ]);

        User::create([
            'name' => 'Admin Level 2',
            'role_id' => 4,
            'email' => 'agent2@mail.com',
            'email_verified_at' => now(),
            'phone_number' => '082230634412',
            'password' => Hash::make('konek.space')
        ]);

        User::create([
            'name' => 'Admin Level 3',
            'role_id' => 5,
            'email' => 'agent3@mail.com',
            'email_verified_at' => now(),
            'phone_number' => '082230634412',
            'password' => Hash::make('konek.space')
        ]);
    }
}
