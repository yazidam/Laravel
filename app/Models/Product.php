<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function catalogues()
    {
        return $this->belongsToMany(Catalogue::class);
    }
    protected $fillable = [
        'name', 'description','price','stock','category_id'
    ];
}
