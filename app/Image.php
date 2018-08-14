<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Article;

class Image extends Model
{
    //

    protected $table = "images";

    //$fillable = ['name','article_id'];


    public function article()
    {
    	return $this->belongsTo('App\Article');

    }
    
}
