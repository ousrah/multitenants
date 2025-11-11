<?php
namespace App\Listeners;

use Stancl\Tenancy\Events\TenantCreated;
use App\Jobs\SetupTenantDatabase;

class SetupTenantDatabaseListener
{
    public function handle(TenantCreated $event)
    {
        $tenantModel = $event->tenant;
        if ($tenantModel->database_initialized) {
            return; // déjà traité
        }
        // On dispatch le job en queue pour éviter doublons
        SetupTenantDatabase::dispatch($tenantModel);
    }
}