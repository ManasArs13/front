<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Header;
use App\Models\Cookie;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('sessions')->insert([
            'id'            => 'gzPINIUSq1MSwDDLX4XRnAh6Ag0PRXZhnRruK02r',
            'user_id'       =>  null,
            'ip_address'    => '127.0.0.1',
            'user_agent'    => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.5993.731 YaBrowser/23.11.1.731 Yowser/2.5 Safari/537.36',
            'payload'       => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlI0WTdQem9ManNTYmVYZTVSV2w3UGRaYW55eEtRNFY3YjRBSUE0VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI6Imh0dHA6Ly9mcm9udCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
            'last_activity' => '1702415865']
        );

        \App\Models\Response::factory()
            ->has(Cookie::factory()->count(2))
            ->has(Header::factory()->count(2))
            ->count(3)
            ->create();
    }
}
