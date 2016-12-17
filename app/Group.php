<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
      @var array
    */
    protected $fillable = [
       'group_name',
    ];
  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
     'password', 'remember_token',
  ];


}
