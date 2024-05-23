<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['image_path'];


    //get translation title
    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut



    //get translation  job_title
    public function getJobTitleAttribute()
    {
        return $this->attributes['job_title_' . app()->getLocale()];
    } // end getTitleAttribut





    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);
    }

}
