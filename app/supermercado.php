<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supermercado extends Model
{
    protected $fillable = [
        'id', 'nome'
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
