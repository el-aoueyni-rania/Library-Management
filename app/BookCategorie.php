<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategorie extends Model
{
    protected $fillable = array('id' , 'category' , 'photoC');


    public $timestamps = false;

	protected $table = 'book_categories';
	protected $primaryKey = 'id';

	protected $hidden = array();


    
    public function book()
    {
        return $this->hasMany('App\Book');
    }

}