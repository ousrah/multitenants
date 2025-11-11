<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Le modèle Setting représente une paire clé/valeur
 * dans la base de données d'un tenant.
 */
class Setting extends Model
{
    use HasFactory;

    // Protège contre l'assignation de masse.
    // Seuls 'key' et 'value' peuvent être remplis via des formulaires.
    protected $fillable = [
        'key',
        'value',
    ];

    // Vous pourriez ajouter ici des "casts" si vous prévoyez de stocker
    // des types de données spécifiques, comme du JSON.
    // protected $casts = [
    //     'value' => 'array',
    // ];
}