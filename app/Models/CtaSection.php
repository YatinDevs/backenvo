<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtaSection extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'phone_number',
        'phone_hours',
        'image_url',
        'call_button_text',
        'contact_button_text',
        'contact_button_link',
        'background_color',
        'text_color',
        'hover_color'
    ];
}
