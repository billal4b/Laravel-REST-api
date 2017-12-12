<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\Auth;

class Post extends Model {

	protected $fillable = [
        'name', 'description',
    ];
}