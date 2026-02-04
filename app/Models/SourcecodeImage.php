<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SourcecodeImage extends Model
{
    use HasFactory;

    protected $table = 'sourcecode_images';

    protected $fillable = [
        'sourcecode_id',
        'image_path',
        'caption',
        'sort_order',
    ];

    public function sourcecode(): BelongsTo
    {
        return $this->belongsTo(Sourcecode::class);
    }
}

