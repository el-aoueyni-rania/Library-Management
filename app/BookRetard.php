<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRetard extends Model
{
    protected $fillable = array('id' , 'user_idR' , 'book_idR', 'emailR' , 'titleR', 'Date_EmpruntR' , 'Date_retourR');

    public $timestamps = false;

	protected $table = 'book_retards';
	protected $primaryKey = 'id';

	protected $hidden = array();


	public function emprunt_confirme(){
		return $this->belongsTo('App\EmpruntConfirmer');
	}
}
