<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses' ;

    protected $primaryKey = 'course_id' ;
    public $incrementing = false ;
    public $keyType = 'string' ;

    protected $fillable = [
    
    'course_id',
    'course_name',
    'uni_name',
    'uni_location',
    'created_at',
    'updated_at',

    ];



}
