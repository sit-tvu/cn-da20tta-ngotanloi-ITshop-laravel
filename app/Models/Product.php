<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function images()
    {
        return $this->hasMany(ProductImage::class, foreignKey:'product_id');
    }
    public function tags(){
        return $this->belongsToMany(related: Tag::class, table:'product_tags', 
        foreignPivotKey:'product_id', relatedPivotKey:'tag_id')-> withTimestamps();

    }
    public function category(){
        return $this ->belongsTo(related: Category::class, foreignKey:'category_id');
    }
}
