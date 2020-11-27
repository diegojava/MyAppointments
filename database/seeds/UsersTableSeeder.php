<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diego Jv',
            'email' => 'djaimes10@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'), 
            'remember_token' => '',
    
            'cedula' => '12345678',
            'address' => '',
            'phone' => '+527332945812',
            'role' => 'admin'
    
        ]);
        factory(User::class, 50)->create();
    }
}
