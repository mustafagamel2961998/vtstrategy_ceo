<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Rate extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'name',
        'job_title',
        'comment',
        'status'
    ];



    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('rate');
    }

}
