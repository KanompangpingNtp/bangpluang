<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'details',
        'logo_file',
        'payment_file',
        'contact_administration_file',
        'contact_finance_file',
        'link_map',
    ];
}
