<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

class Multimedia extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasUploader;

    protected $fillable = [
        'title',
        'description',
        'type',
        'path',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
