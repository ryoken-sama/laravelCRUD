<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable =[
        'title',
        'thumbnail',
        'banner',
        'subtitle1',
        'description1',
        'subtitle2',
        'description2',
        'image',
        'button_url',
        'button_text',
        'display_order',
        'is_published'
    ];
}
