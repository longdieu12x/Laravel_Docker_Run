<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Tag extends Model
{
    //
    protected $fillable = ['name'];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
