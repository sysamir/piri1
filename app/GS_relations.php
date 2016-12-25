<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GS_relations extends Model
{

      protected $table = 'gs_relations';
      protected $fillable = [

        'gs_group_id','gs_science_id','gs_id'
      ];

    // public $timestamps = false;
    protected $primaryKey = 'gs_id';
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
       'password', 'remember_token',
    ];


}
