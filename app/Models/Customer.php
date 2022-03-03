<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;
    public $timestamps = false;
    
    protected $table = 'customer';
    protected $fillable = [
        'company_agent',
        'name',
        'account_id',
        'customer_type',
        'name2',
        'contact_no1',
        'contact_no2',
        'contact_no3',
        'email_address',
        'mail_address',
        'unit_no',
        'postal_code',
        'building',
        'lift_lobby',
        'region',
        'joined_date',
        'last_used',
        'credit_amount',
        'total_used',
        'note',
        'password',
        'subscribe',
        'updated_by',
        'updated_on',
    ];
}
