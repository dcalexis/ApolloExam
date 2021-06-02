<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;
	
	protected $table = 'random';
	
	protected $primaryKey = 'id';
	
	protected $fillable = ['values', 'flag'];
	
	public function breakDown(){
		return $this->hasMany(Breakdown::class);
	}
}
