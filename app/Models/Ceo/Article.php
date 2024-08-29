<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
       'category_id',
       'title',
       'content',
       'status'
    ]; 


    //start relationship
        public function category(){
            return $this->belongsTo(Category::class,'category_id','id');
        }
    //end relationship


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('article');
    }
}
