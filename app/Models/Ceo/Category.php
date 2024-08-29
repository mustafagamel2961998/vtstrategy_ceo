<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
     ]; 


      //start relationship
        public function articales(){
            return $this->hasMany(Article::class,'category_id','id');
        }
     //end relationship
}
