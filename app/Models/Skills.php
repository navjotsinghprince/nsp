<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = [
        "type",
        "name", 	
        "value",
       "user_id",	
       "created_at",
       "updated_at", 	
    ];
}
