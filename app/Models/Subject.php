<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subjects';
    
    protected $fillable = [
        'subject_code',
        'subject_name',
        'lecturer_name',
    ];
    
    protected $dates = ['created_at', 'updated_at']; // Laravel will treat these fields as Carbon instances

}


