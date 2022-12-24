<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Contact extends Model
{
    use HasFactory , Filterable , AsSource;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'address',
        'map',
        'link_map',
        'work_time',
        'social_link',
        'phone',
        'text',
    ];

    protected $casts = [
        'map' => 'array',
        'social_link' => 'array',
    ];

}
