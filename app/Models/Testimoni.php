<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];


    public function getPhotoAttribute($value){
        return asset("/images/testimonis/".$value);
    }

    public function getPhoroOriginalAttribute($value){
        return $this->attributes["photo"];
    }
}
