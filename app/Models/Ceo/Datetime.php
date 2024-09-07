<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datetime extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'date_time',
    ];


    protected $casts=[
        'date_time'=>'datetime'
    ];

}
