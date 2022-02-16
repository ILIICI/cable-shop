<?php

namespace App\Models;

use App\Models\ModelSmartphone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Smartphone extends Model
{
    use HasFactory;
    protected $table = "smartphones";
    protected $primaryKey = "id";
    protected $fillable = ['brand_name'];
    protected $hidden = ['id','created_at','updated_at'];

    public function smartphoneModel()
    {
        return $this->hasMany(ModelSmartphone::class);
    }
}