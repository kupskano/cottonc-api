<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    // use HasFactory;
    public $timestamps = false;
    
    protected $table = 'invoice_item';

    protected $fillable = [
        'invoice_id',
        'invoice_no',
        'description',
        'cat_type',
        'clean_type',
        'ready_type',
        'price',
        'qty',
        'pieces',
        'is_ready',
        'updated_by',
        'updated_on'
    ];
}
