<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategoris';
	
	public function post(){
		return $this->hasMany('App\Post');
	}

    protected $fillable = [
        'nama', 
    ];
}
