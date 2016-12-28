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


  public function qruplari(){
    return $this->belongsToMany('App\Group', 'gs_relations', 'gs_science_id', 'gs_group_id');
  }

  public function movzusu(){
    return $this->hasOne('App\Subjects', 'subject_science_id', 'science_id');
  }



}
