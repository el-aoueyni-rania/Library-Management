<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $fillable = array('id' , 'user_id' , 'book_id' , 'firstnameU', 'lastnameU', 'emailU' , 'titleB', 'Date_Emprunt' , 'Date_retour');

    public $timestamps = false;

	protected $table = 'emprunts';
	protected $primaryKey = 'id';

	protected $hidden = array();

	public function user(){
		return $this->belongsTo('App\User');
	}
	public function book(){
		return $this->belongsTo('App\Book');
	}

	

	public function emp_conf(){
		return $this->hasOne('App\EmpruntConfirmer');
	}

}
