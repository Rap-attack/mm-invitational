<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;

class Attendee extends Model
{
    protected $fillable = ['name', 'competing', 'skiLevel'];

    public function registration()
    {
    	return $this->belongsTo(Registration::class);
    }
}
