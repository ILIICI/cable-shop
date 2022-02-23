<?php

namespace App\Models;

use App\Models\Navbar;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubcategoryModel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "subcategory";
    protected $primaryKey = "id";
    protected $fillable = ['navbars_id', 'subcategory_item_title', 'subcategory_item_route', 'slug'];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo(Navbar::class, 'id', 'navbars_id');
    }
    public function productlist()
    {
        return $this->hasMany(Product::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'subcategory_item_title'
            ]
        ];
    }
}