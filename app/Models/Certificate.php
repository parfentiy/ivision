<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_number',
        'email',
        'is_activated',
        'security_code',
        'certificate_url',
        'expiration_date',
        'description',
    ];

}
