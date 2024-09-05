<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'big_icon_class',
        'small_icon_class',
        'title',
        'content',
        'status',
    ];
    
  
    
    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this->addMediaCollection('big_icon');
    //     $this->addMediaCollection('small_icon');
    // }
}
