<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    public $table = 'student_timetables';
    
    protected $fillable = [
        'user_id',
        'subject_id',
        'day_id',
        'hall_id',
        'lecturer_group_id',
        'time_from',
        'time_to',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id', 'id');
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'hall_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'lecturer_group_id', 'id');
    }

    
}



          
