<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Datas extends Eloquent {

   // protected $connection = 'mongodb'; 
    //protected $collection = 'post';
    protected $collection = 'coba';
    public $timestamps = false;

}