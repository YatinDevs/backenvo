<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    
    protected $fillable = [
        'company_name',
        'description',
        'expertise',
        'icons',
        'slider_images',
    ];

    protected $casts = [
        'expertise' => 'array',
        'icons' => 'array',
        'slider_images' => 'array',
    ];
}
