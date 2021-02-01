<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    use HasFactory;

    protected $table = 'consultas';

    protected $fillable = [
        'id',
        'ciudad',
        'created_at'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
