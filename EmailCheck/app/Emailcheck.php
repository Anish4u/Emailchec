<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emailcheck extends Model
{
  protected $guarded = [];  //
  // public $timestamps = false;

  public function emailreport()
  {
//this would return strin representation  of full cklass path
// return $this->hasMany(App\Comment);
return $this->hasMany(emailreport::class,'emailchecks_id');

  }
  public function emailaccounts()
  {

  }

}
