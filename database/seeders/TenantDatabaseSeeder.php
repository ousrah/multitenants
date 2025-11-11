<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    public function run(): void
    {
    

        User::factory()->create([
            'name' => 'Manar',
            'email' => 'manar@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

         $this->call(\Modules\School\Database\Seeders\SchoolDatabaseSeeder::class);
      //  $this->call(\Modules\Student\Database\Seeders\Tenant\StudentSeeder::class);
      //  $this->call(\Modules\Payment\Database\Seeders\Tenant\PaymentSeeder::class);

    }
}
