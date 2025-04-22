<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class VideoSection extends Model
{
   
    use HasFactory;

    protected $fillable = [
        'title',
        'paragraph1',
        'paragraph2',
        'paragraph3',
        'video_type',
        'youtube_id',
        'uploaded_video_path'
    ];
}
