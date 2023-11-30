<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'dpi',
        'certificate_number',
        'request_date',
        'expiring_date',
        'status',
    ];
}
