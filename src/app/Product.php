<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Tag;
class Product extends Model
{
    //
    protected $fillable = ['name','description','category_id'];
    public function scopeCategory($query,$categories){
        return $query->whereIn('category_id',$categories);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
