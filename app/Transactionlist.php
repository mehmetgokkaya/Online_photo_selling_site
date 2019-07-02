<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactionlist extends Model
{
    protected $table = 'transactionlist';
    protected $primaryKey ="tid";
    public $timestamps =false;
}
