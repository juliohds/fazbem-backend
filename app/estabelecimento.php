<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estabelecimento extends Model
{
    protected $fillable = [
        'id', 'title', 'subtitle', 'img', 'imgsub', 'desc'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','deleted_at'
    ];
}
