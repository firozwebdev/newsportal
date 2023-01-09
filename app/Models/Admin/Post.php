<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //use HasFactory;
    protected $fillable = [
        'post_title',
        'category_name',
        'post_image',
        'post_description',
        'post_status',
    
    ];
}
