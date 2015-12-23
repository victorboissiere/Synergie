<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    protected $table = 'security';

    protected $fillable = ['ip', 'info', 'type'];

    public $timestamps = true;
}
