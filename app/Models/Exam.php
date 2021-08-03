<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam';
    protected $fillable = ['id','title','desc','prepared_by_user_id',
    'no_of_questions','marks','total_time_to_attempt',
'total_attempts','no_of_passings'];

}
