<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'about';

    protected $fillable = [
        'content'
    ];
}
