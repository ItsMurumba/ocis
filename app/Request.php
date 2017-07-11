<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'studentId',
        'status'
    ];

    /**
     * Get the student that the request belongs to.
     */
    public function student()
    {
        return $this->belongsTo('App\Student','id');
    }
}
