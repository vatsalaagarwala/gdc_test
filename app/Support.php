<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public $table = 'supports';
	 
	public $fillable = ['name','email','subject','message'];
}
