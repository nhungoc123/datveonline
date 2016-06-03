<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dtb_seats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['row', 'column', 'type', 'cinema_id'];

    public function screen()
    {
        return $this->belongsTo('App\Screen');
    }
}
