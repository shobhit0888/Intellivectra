<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'apply';

    protected $fillable = ['first_name','last_name','email','mobile','total_experience','applied_for','message','upload'];
	protected $dates = ['created_at', 'updated_at'];

}
