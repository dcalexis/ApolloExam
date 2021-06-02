<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;
	
	protected $table = 'breakdown';
	
	protected $primaryKey = 'id';
	
	public function random(){
		return $this->belongsTo(Random::class);
	}
}
