<?php

namespace App\Models\Ceo;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
       'service_id',
       'title',
       'content',
       'status'
    ]; 


    // start relationship
        public function service(){
            return $this->belongsTo(Service::class,'service_id','id');
        }
    // end relationship


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('article');
    }
}
