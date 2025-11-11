<?php

namespace Modules\School\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\School\Models\School;
class SchoolDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $school = School::create([
             'name' => 'Lycée Pasteur',
             'email' => 'contact@pasteur.test',
         ]);
    }
}
