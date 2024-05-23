<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurProgram extends Model
{
    use HasFactory ,Sluggable;

    protected $fillable = ['name_ar', 'name_en', 'desc_ar', 'desc_en', 'image', 'slug'];

    protected $appends = ['image_path'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }
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
