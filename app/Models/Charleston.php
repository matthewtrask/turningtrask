<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charleston extends Model
{
    public $table = 'charleston';

    public $fillable = [
        'location',
        'business_type',
        'description',
    ];
}
