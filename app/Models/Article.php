<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name',
        'presentation',
        'puu',
        'puc',
        'number',
    ];
    use HasFactory;

}
