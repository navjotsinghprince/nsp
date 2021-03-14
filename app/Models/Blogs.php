<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        "blog_category_id",
        "title", 
        "description", 	
        "image",
        "user_id" ,
        "created_at" ,
        "updated_at"
    ];
}
