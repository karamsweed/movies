<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movest';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'director',
        'cost',
        'year'
    ];
}
