<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurPaths extends Model
{
    use HasFactory;
    protected $fillable = ['name_ar', 'name_en', 'desc_ar', 'desc_en', 'image'];

    protected $appends = ['image_path'];


    //get translation title
    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut



    //get translation  job_title
    public function getDescAttribute()
    {
        return $this->attributes['desc_' . app()->getLocale()];
    } // end getTitleAttribut





    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
