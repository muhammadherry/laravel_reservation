<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'Reservation';
    protected $fillable = ['name','phone','email','dateandtime','message','status'];
}
