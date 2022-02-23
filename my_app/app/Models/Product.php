<?php

namespace App\Models;

use App\Models\Smartphone;
use App\Models\SubcategoryModel;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = ['product_name','product_uuid','sugcategory_id','instock','sncode','slug', 'images','price', 'short_description','tech_description','long_description'];
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'images' => 'array'
    ];
    public function smartphoneBrand()
    {
        return $this->belongsTo(Smartphone::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubcategoryModel::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }
}