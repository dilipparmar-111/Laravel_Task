<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API extends Model
{
    use HasFactory;

    protected $table = 'api';
    protected $fillable = [

        'name',
        'parent_id',
        'position',
        'status',
        'image',
        'translations',
        'created_at',
        'updated_at',
    ];
}
