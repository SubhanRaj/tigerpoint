<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
       use HasFactory;

       public function scopeFilter($query, array $filters)
       {
              if ($filters['tag'] ?? false) {
                     $query->where('tags', 'like', '%' . request('tag') . '%');
              }
              if ($filters['search'] ?? false) {
                     $query->where('title', 'like', '%' . request('search') . '%')->orWhere('category_name', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%');
              }
              if ($filters['category'] ?? false) {
                     $query->where('category_name', 'like', '%' . request('category') . '%');
              }
       }
}
