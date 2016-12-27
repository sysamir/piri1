<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{

    protected $table = 'subjects';
    protected $fillable = [

      'subject_id','subject_name','subject_science_id',
    ];

  // public $timestamps = false;
  protected $primaryKey = 'subject_id';
  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
     'password', 'remember_token',
  ];

  public function fenni(){
    return $this->hasOne('App\Sciences', 'science_id', 'subject_science_id');
  }


}
