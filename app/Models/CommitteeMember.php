<?php

namespace App\Models;

use App\Models\CommitteeCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommitteeMember extends Model
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

    public function CommitteeCategory()
    {
        return $this->belongsTo(CommitteeCategory::class, 'category_id');
    } // end of category
}
