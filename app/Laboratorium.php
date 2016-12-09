<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
	protected $table = 'laboratoriums';
    public function users()
    {
        return $this->belongsTo('App\User', 'kalabid', 'id');
    }

    protected $fillable = [
        'id', 'nama', 'kalabid'
    ];
}
