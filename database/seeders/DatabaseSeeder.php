<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Status::create(['title'=>'новая']);
        Status::create(['title'=>'в процессе']);
        Status::create(['title'=>'завершена']);
        Status::create(['title'=>'отменена']);
        
        User::create([
            'firstname' => 'Admin',
            'middlename' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'Admin@example.com',
            'login' => 'administarator',
            'passsword' => Hash::make('administarator'),
            'tel' => '+7999999999',
            'role' => 'Admin',
        ]);
        
    }
}
