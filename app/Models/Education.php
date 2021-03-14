<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name', 	
        'address', 
        'description',
        'from',
        'to', 
        'current',
        'user_id',
        'created_at',
        'updated_at'
     	];
}
