<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'firstName',
        'lastName',
        'email',
        'dob',
        'doa',
        'courseId'
    ];

    /**
     * Get the course that the student belongs to.
     */
    public function course()
    {
        return $this->belongsTo('App\Course','id');
    }

    /**
     * Get the certificate for the student.
     */
    public function certificate()
    {
        return $this->hasMany('App\Certificate','studentId','id');
    }

    /**
     * Get the request for the student.
     */
    public function request()
    {
        return $this->hasMany('App\Request','studentId','id');
    }
}
