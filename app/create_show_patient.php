<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_show_patient extends Model
{
    use Sortable;


    protected $fillable = [ 'name', 'dob','division_name','last_treat_date','last_treat_name' ];


	public $sortable = [ 'name', 'dob','division_name','last_treat_date','last_treat_name'];
}
