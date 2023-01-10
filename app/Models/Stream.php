<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    protected $table = 'streams' ;

    
    protected $primaryKey = 'stream_id' ;
    public $incrementing = false ;
    public $keyType = 'string' ;



    protected $fillable = [
    
    'stream_id',
    'stream_name', 
    'created_at',
    'updated_at',
    
    ];
}
