<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // use HasFactory;
    public $timestamps = false;
    
    protected $table = 'item';

    protected $fillable = [
        'description',
        'cat_type',
        'clean_type',
        'ready_type',
        'price',
        'updated_by',
        'updated_on'
    ];
}
