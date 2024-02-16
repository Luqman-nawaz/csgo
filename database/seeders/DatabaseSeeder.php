<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('orderamounts')->insert([
            'current_level' => 'Silver I',
            'desired_level' => 'Silver II',
            'amount' => '15', 
            'boost_type' => 'boost',
        ]);
        DB::table('orderamounts')->insert([
            'current_level' => 'Level 1',
            'desired_level' => 'Level 10',
            'amount' => '100', 
            'boost_type' => 'boost',
        ]);
        DB::table('orderamounts')->insert([
            'current_level' => 'D Plus',
            'desired_level' => 'C Plus',
            'amount' => '35', 
            'boost_type' => 'boost',
        ]);
        DB::table('orderamounts')->insert([
            'current_level' => 'Gold 1',
            'desired_level' => 'Pro 1',
            'amount' => '55', 
            'boost_type' => 'boost',
        ]);
        DB::table('orderamounts')->insert([
            'current_level' => 'Silver I',
            'desired_level' => '10',
            'amount' => '70', 
            'boost_type' => 'boost',
        ]);
        DB::table('orderamounts')->insert([
            'current_level' => 'Level 1',
            'desired_level' => '1000',
            'amount' => '50', 
            'boost_type' => 'boost',
        ]);
        
        DB::table('orderamounts')->insert([
            'current_level' => 'D-',
            'desired_level' => 'C Plus',
            'amount' => '35', 
            'boost_type' => 'boost',
        ]);
        
        DB::table('orderamounts')->insert([
            'current_level' => 'D-',
            'desired_level' => '10',
            'amount' => '70', 
            'boost_type' => 'boost',
        ]);

        DB::table('orderamounts')->insert([
            'current_level' => 'Silver',
            'desired_level' => 'Pro 2',
            'amount' => '60', 
            'boost_type' => 'boost',
        ]);

        DB::table('orderamounts')->insert([
            'current_level' => 'Silver',
            'desired_level' => '10',
            'amount' => '70', 
            'boost_type' => 'boost',
        ]);


    DB::table('boosttypes')->insert(['name' => 'CS2 Boost']);
    DB::table('boosttypes')->insert(['name' => 'FaceIT Boost']);
    DB::table('boosttypes')->insert(['name' => 'ESEA']);
    DB::table('boosttypes')->insert(['name' => 'Esportal']);

    DB::table('admin')->insert(['username' => 'admin' , 'password' => '$2y$10$bqH/ePrd2vFYzFWMgwpmWOaFp0mpOX43zYu9gHIdrXN1SwqcQrO0G']);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
