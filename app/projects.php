<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //
    protected $table='projects';

    public $primaryKey='id';

    //Timestaps
    public $timestaps=false;


}
