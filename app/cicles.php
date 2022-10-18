<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cicles extends Model
{
    protected $table='cicles';
    protected $fillable=['name','img','deleted'];
}
