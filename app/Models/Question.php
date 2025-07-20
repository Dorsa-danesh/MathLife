<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

        protected $fillable = [
        'unit',
        'lesson',
        'qtext',
        'ans1',
        'ans2',
        'ans3',
        'ans4',
        'tans',
        'type',
    ];
}
