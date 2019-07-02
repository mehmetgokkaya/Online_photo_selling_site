<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phototable extends Model
{
    protected $table = 'phototable';
    protected $primaryKey ="pid";
    public $timestamps =false;
}
