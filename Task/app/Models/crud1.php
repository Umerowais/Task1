<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'heading',
        'image',
        
    ];
}
