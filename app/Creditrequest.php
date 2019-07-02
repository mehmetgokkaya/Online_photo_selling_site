<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditrequest extends Model
{
   protected $table = 'creditrequest';
    protected $primaryKey ="cid";
    public $timestamps =false;
}
