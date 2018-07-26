<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emailcheck;
class emailreport extends Model
{
    //
protected $guarded = [];
// protected $with=['mail_to'];
    public function emailcheck()
    {
      return $this->belongsTo(Emailcheck::class)->with('mail_to');
    }

    }
