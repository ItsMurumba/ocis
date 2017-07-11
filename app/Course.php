<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'courseName',
        'duration'
    ];

    /**
     * Get the student for the course.
     */
    public function student()
    {
        return $this->hasMany('App\Student','courseId','id');
    }
}
