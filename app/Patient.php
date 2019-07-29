<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $dates = ['dob'];
    Protected $fillable = [
        'first_name',
        'last_name',
    	'dob',
      	'division_id'
    ];
      
    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function treatments(){
        return $this->hasMany(Treatment::class)->latest();
    }

    // public function latest($column = 'created_at')
    // {
    //      return $this->orderBy($column, 'desc');
    // } 
}
