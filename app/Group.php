<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{


    protected $fillable = [

      'group_id','group_name',
    ];

  public $timestamps = false;
  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
     'password', 'remember_token',
  ];


}
