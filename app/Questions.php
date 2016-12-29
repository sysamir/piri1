<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
  protected $table = 'sciences';
  protected $primaryKey = 'science_id';
  protected $fillable = [

    'question_id',
    'question_type',
    'questions_subject_id',
    'question_group_id',
    'question_status',
    'question_level',
    'question_tips',
    'question_point',
    'question_false_point',
    'question_about',
    'question_photo'
  ];

}
