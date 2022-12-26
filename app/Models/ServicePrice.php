<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class ServicePrice extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'name',
        'active',
        'description',
        'price',
    ];

    protected $allowedSorts = [
        'id',
        'name',
        'price',
    ];
}
