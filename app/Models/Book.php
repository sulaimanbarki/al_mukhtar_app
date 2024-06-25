<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

class Book extends Model implements HasMedia
{
    use HasFactory, HasUploader, InteractsWithMedia;

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'isbn',
        'publication_date',
        'summary',
        'cover_image',
        'file_path',
        'pages',
        'publisher',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover_image')
            ->singleFile(); // Only one file per collection

        $this->addMediaCollection('file_path');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
