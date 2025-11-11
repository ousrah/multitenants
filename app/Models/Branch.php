<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Branch extends Model
{
      use HasFactory;
    protected $fillable = ['cycle_id', 'name'];

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function levels()
    {
        return $this->hasMany(Level::class);
    }
}
