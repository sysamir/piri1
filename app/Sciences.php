<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sciences extends Model
{
  protected $table = 'sciences';
  protected $primaryKey = 'science_id';
  protected $fillable = [

    'science_id','science_name','science_groups_id',
  ];
}
