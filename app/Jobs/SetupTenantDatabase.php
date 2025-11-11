<?php

namespace App\Jobs;

use Stancl\Tenancy\Jobs\MigrateDatabase;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Database\Seeders\tenant\TenantDatabaseSeeder;

class SetupTenantDatabase implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tenant;

    public function __construct($tenant)
    {
        $this->tenant = $tenant; // modèle App\Models\Tenant
    }

    public function handle()
    {
        $tenantId = $this->tenant->id;
   //     $dbName = $this->tenant->database;

        // 1️⃣ Migration
        MigrateDatabase::dispatchSync($this->tenant);

usleep(3000000); //3 sec

        // 3️⃣ Initialiser le tenant
        tenancy()->initialize($this->tenant);

        // 4️⃣ Seeder directement en gardant le contexte tenant
        try {
            Log::info("Job SeedTenantDatabase démarré pour: {$tenantId}");

            (new TenantDatabaseSeeder())->run();

            Log::info("Seeding terminé via exécution directe pour: {$tenantId}");
        } catch (\Exception $e) {
            Log::error("Échec dans le Job de seeding pour {$tenantId}: " . $e->getMessage(), [
                'exception' => $e
            ]);
            throw $e;
        }

        // 5️⃣ Terminer le contexte tenant
        tenancy()->end();
    }
}
