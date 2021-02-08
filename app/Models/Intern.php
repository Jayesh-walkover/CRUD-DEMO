<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Intern extends Model
{	

	use SoftDeletes;
	protected $guarded =[];
    protected $fillable = ['first_name' , 'last_name'];
}
