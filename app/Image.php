<?php

namespace App;

use App\Scopes\ImageScope;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ImageScope);
    }
}
