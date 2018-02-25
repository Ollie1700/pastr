<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{

    protected $fillable = [
        'paste',
        'img_data',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
