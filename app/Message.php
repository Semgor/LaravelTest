<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['message'];

	public function user()
  {
    return $this->belongsTo('App\User');
  }

}
