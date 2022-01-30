<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $fillable = array('id' , 'user_id' , 'firstnameU', 'lastnameU', 'emailU' , 'titleB', 'Date_Emprunt' , 'Date_retour');

    public $timestamps = false;

	protected $table = 'emprunts';
	protected $primaryKey = 'id';

	protected $hidden = array();

}
