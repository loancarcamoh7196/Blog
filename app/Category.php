<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Modelo  de clase Categories en la bd


    protected $table = "categories";

    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }


    public function scopeSearch($query,$name)
    {
    	return $query->where('name','=',$name);
    }
}
