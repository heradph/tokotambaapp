<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    /** @use HasFactory<\Database\Factories\ItemsFactory> */
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description'];

    public function scopeFilter(Builder $query, array $filters): void{

        $query->when($filters['search'] ?? false,
         fn ($query, $search) =>
            $query->where('name', 'like', '%' . $search . '%')
        ); 
    }
}