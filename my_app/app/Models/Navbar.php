<?php

namespace App\Models;

use App\Models\SubcategoryModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navbar extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "navbars";
    protected $primaryKey = "id";
    protected $fillable = ['navbar_item_title','navbar_item_route','slug'];
    public $timestamps = false;

    public function subCategory()
    {
        return $this->hasMany(SubcategoryModel::class,'navbars_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'navbar_item_title'
            ]
        ];
    }

}