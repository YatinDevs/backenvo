<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_1', 'phone_2', 'email', 'office_address', 'branch_address',
        'facebook', 'twitter', 'linkedin', 'youtube', 'instagram'
    ];
}
