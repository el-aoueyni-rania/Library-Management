<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = array('book_id', 'title', 'author', 'category_id', 'description', 'photo' , 'added_by' , 'total');

    public $timestamps = false;

	protected $table = 'books';
	protected $primaryKey = 'book_id';

	protected $hidden = array();


    public function issues()
    {
        return $this::count();
    }
}
