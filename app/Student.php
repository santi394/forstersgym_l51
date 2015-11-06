<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     *  A student belongs to 1 school
     *
     * get the schol that owns the student
     * the name of the funtion is the Same as the
     * table
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }



}



