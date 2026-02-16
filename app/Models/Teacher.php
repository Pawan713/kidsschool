<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'description',
        'subject',
        'email',
        'mobile',
        'fb_link',
        'twitter_link',
        'instagram_link',
        'instagram_link',    
        'image',
        'status',
    ];
}


