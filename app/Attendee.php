<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;

class Attendee extends Model
{
    protected $fillable = ['name', 'competing', 'ski_level'];

    public function registration()
    {
    	return $this->belongsTo(Registration::class);
    }

    public function getSkiLevelAttribute($value)
    {
    	$levels = [
    		'Ingen angiven',
    		'Smygare',
    		'Glidare',
    		'Svängare',
    		'Fräsare'
    	];

    	return $levels[$value];
    }

    public function getCompetingAttribute($value)
    {
    	return $value ? 'Ja' : 'Nej';
    }
}
