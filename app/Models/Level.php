<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Level extends Model
{
      use HasFactory;
    protected $fillable = ['branch_id', 'name'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
