<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'catg_id',
        'price',
        'description',
        'image_path',
        ];
        public function scopeFilter($query, array $filters) {
            if($filters['search'] ?? false) {
                $query->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%');
            }
        }
}
