<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRetard extends Model
{
    protected $fillable = array('id' , 'user_idR' , 'firstnameR', 'lastnameR', 'emailR' , 'titleR', 'Date_EmpruntR' , 'Date_retourR');

    public $timestamps = false;

	protected $table = 'book_retards';
	protected $primaryKey = 'id';

	protected $hidden = array();
}