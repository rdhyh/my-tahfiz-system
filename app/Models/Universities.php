<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
    use HasFactory;

    protected $table = 'universities' ;

    protected $primaryKey = 'uni_id' ;
    public $incrementing = false ;
    public $keyType = 'string' ;


    protected $fillable = [
    
    'uni_id',    
    'uni_name',
    'uni_location',
    'created_at',
    'updated_at'
    
    ];

}
