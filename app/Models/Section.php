<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Section extends Model
{
      use HasFactory;
    protected $fillable = ['level_id', 'name'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
