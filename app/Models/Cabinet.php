<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Cabinet extends Model
{
    use HasFactory , Filterable , AsSource;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'children_area_value',
        'children_area_description',
        'cabinet_value',
        'cabinet_description',
        'session_value',
        'session_description',
        'photo',
        'preview',
    ];

    protected $casts = [
        'photo' => 'array',
    ];

}
