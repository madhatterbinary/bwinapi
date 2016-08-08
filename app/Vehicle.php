<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model 
{
	protected $table = 'vehicles';

	protected $primaryKey = 'serie';

	protected $fillable = ['serie', 'color', 'power', 'capacity', 'speed', 'maker_id'];

	protected $hidden = ['serie', 'created_at', 'updated_at'];

	public function maker()
	{
		return $this ->belongTo('App\Maker');
	}
} 