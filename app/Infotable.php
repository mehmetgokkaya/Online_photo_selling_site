<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infotable extends Model
{
    protected $table = 'infotable';
    protected $primaryKey ="uid";
    public $timestamps =false;
}
