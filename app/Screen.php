<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dtb_cinemas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'decription', 'total_seat'];
}
