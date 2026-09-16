<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'number',
        'from',
        'subdivision',
        'cabinet',
        'description',
        'telephone',
        'executor',
        'status'
    ];
}
