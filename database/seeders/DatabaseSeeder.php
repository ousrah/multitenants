<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Theme;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Manar',
            'email' => 'manar@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
    
        Theme::create([
            'name' => 'Minimalist',
            'slug' => 'minimalist',
         
        ]);
        
        Theme::create([
            'name' => 'Black Side',
            'slug' => 'blackside1',
        
        ]);
         Theme::create([
            'name' => 'Modern',
            'slug' => 'modern',
        
        ]);     
        
    }
}

