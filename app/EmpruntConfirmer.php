<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpruntConfirmer extends Model
{
    protected $fillable = array('id' , 'user_idC' , 'firstnameUC', 'lastnameUC', 'emailUC' , 'titleBC', 'Date_EmpruntC' , 'Date_retourC');

    public $timestamps = false;

	protected $table = 'emprunt_confirmers';
	protected $primaryKey = 'id';

	protected $hidden = array();

	public function emprunt(){
		return $this->belongsTo('App\Emprunt');
	}

	public function book_retard(){
		return $this->hasOne('App\BookRetard');
	}
}
