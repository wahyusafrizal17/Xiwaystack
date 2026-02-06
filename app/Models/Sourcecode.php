<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sourcecode extends Model
{
    use HasFactory;

    protected $table = 'sourcecodes';

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'thumbnail_path',
        'price',
        'description',
        'features',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'is_published' => 'boolean',
        'price' => 'integer',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(SourcecodeImage::class)->orderBy('sort_order')->orderBy('id');
    }
}

