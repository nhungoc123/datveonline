<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dtb_movies';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'genre', 'decription', 'actor', 'year', 'durations', 'trailer'];
}
