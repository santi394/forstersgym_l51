<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * the database table used by the model
     *
     * @var string
     */


    protected $table = 'schools';

    /**
     * A school has many students
     * The name of the funtion is the SAME name as the
     * table
     */

    public function students()
    {
        return $this->hasMany('App\Student');
    }

}