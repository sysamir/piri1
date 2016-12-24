<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $table = 'groups';
    protected $fillable = [

      'group_id','group_name',
    ];

  // public $timestamps = false;
  protected $primaryKey = 'group_id';
  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
     'password', 'remember_token',
  ];


}
