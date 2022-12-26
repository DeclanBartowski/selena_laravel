<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'active',
        'sort',
        'name',
        'code',
        'services',
        'preview_picture',
        'preview_content',
        'detail_picture',
        'detail_content',
        'main_picture',
        'main_content',
    ];

    protected $casts = [
        'services' => 'array',
    ];

}
