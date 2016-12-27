<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    
    protected $table = 'subjects';
    protected $fillable = [

      'subject_id','subject_name',
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
  
  public function movzular(){
      
      return $this->belongsToMany('App\Sciences', 'science_id');
  }

}
