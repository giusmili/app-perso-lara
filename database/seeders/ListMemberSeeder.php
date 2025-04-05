<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ListMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('membres')->insert([
            'nom' => 'Doe',
            'prenom' => 'John',
            'email' => 'doeJohn@gmail.com',
            'ville' => 'New York',
            'pays' => 'US',
            'date' => Carbon::now()->toDateString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 2eme ligne

        DB::table('membres')->insert([
            'nom' => 'Koenig',
            'prenom' => 'John',
            'email' => 'koenig@gmail.com',
            'ville' => 'Moon',
            'pays' => 'US.',
            'date' => Carbon::now()->toDateString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

