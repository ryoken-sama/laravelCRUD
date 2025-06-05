<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'icon_class',
        'button_text',
        'button_url',
        'image',
        'display_order',
        'extra_classes'
    ];
    //
}
