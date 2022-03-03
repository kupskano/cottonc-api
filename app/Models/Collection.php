<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    // use HasFactory;
    public $timestamps = false;
    
    protected $table = 'collection';

    protected $fillable = [
        'id',
        'invoice_id',
        'invoice_no',
        'customer_id',
        'driver_id',
        'collect_date',
        'collect_time',
        'collect_address',
        'collect_unit_no',
        'collect_postal_code',
        'collect_building',
        'collect_region',
        'collect_note',
        'collect_type',
        'collect_pax',
        'status',
        'return_date',
        'return_time',
        'created_by',
        'created_on',
        'updated_by',
        'updated_on',
        'saved_on'
    ];
}
