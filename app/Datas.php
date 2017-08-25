<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Datas extends Eloquent {

    //protected $connection = 'mongodb'; 

    //nama tabel
    protected $collection = 'coba';

    //disable timestamps
    public $timestamps = false;

    //To make all fields fillable, 
    protected $guarded = array();



}