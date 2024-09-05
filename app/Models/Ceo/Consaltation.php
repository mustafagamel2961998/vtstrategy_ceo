<?php

namespace App\Models\Ceo;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consaltation extends Model
{
    use HasFactory;
    protected $table = 'consaltaions';
    protected $fillable = [
           'name',
           'email',
           'phone',
           'whatsapp',
           'service_id',
           'date_time',
           'note',
           'status'
    ]; 

    // start relationships
        public function service(){
            return $this->belongsTo(Service::class,'service_id','id');
        }
    // end relationships
    
    protected $casts=[
        'date_time'=>'datetime'
    ];
   
}
