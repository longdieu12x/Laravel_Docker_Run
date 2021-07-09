<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Tag extends Model
{
    //
    protected $fillable = ['name'];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function scopeIsActive($query){
        return $query->where('is_active',true);
    }

}
