<?php

namespace App\Models;

use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelSmartphone extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "model_smartphones";
    protected $primaryKey = "id";
    protected $fillable = ['model_name','modelsmartphone_id','slug','price','description'];
    protected $hidden = ['id','created_at','updated_at'];

    public function smartphoneBrand()
    {
        return $this->belongsTo(Smartphone::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'model_name'
            ]
        ];
    }
}