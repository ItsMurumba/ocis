<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'studentId'
    ];

    /**
     * Get the student that the certificate belongs to.
     */
    public function student()
    {
        return $this->belongsTo('App\Student','id');
    }
}
