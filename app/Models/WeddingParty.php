<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeddingParty extends Model
{
    public $table = 'party';

    protected $fillable = [
        'name',
        'position',
        'description',
        'image_name'
    ];
}
