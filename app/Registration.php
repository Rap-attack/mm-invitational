<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attendee;

class Registration extends Model
{
    protected $fillable = ['email', 'message'];

    public function attendees()
    {
    	return $this->hasMany(Attendee::class);
    }
}
