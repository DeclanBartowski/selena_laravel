<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class TextBlock extends Model
{
    use HasFactory , Filterable , AsSource, Attachable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active',
        'name',
        'code',
        'link',
        'video',
        'preview_picture',
        'preview_content',
        'detail_picture',
        'detail_content',
    ];

    protected $casts = [
        'active' => 'boolean',
        'sort' => 'integer',
    ];

    protected function video(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => (is_array($value)) ? array_shift($value) : $value,
        );
    }



}
