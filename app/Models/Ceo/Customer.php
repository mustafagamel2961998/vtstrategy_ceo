<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Customer extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'website',
        'company_name',
        'status'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('customer');
    }
}
