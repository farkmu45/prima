<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'commission' => 0
        ]);
        Role::create([
            'name' => 'Member',
            'commission' => 0
        ]);
        
        Role::create([
            'name' => 'Agent',
            'commission' => 0.5
        ]);
    }
}
