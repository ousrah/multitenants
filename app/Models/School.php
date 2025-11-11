<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class School extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'name',
        'address',
        'phone',
        'email',
        'logo_path',
        'academic_year',
        'status',

    ];

  public function cycles()
    {
        return $this->hasMany(Cycle::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
