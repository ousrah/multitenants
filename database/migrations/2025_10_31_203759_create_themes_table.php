<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Le nom lisible, ex: "Minimalist Variante Bleue"
            $table->string('slug')->unique(); // L'identifiant machine, ex: "minimalist"
            $table->text('description')->nullable();
            $table->string('screenshot_path')->nullable(); // Chemin vers une image de prévisualisation
            $table->string('version')->default('1.0.0');
            $table->boolean('is_active')->default(true); // Pour activer/désactiver le thème dans la boutique
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};