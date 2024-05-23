<?php

namespace App\Models;

use App\Models\CommitteeMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommitteeCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name_en', 'name_ar'];

    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut

    public function committees()
    {
        return $this->hasMany(CommitteeMember::class, 'category_id');
    } // end committees

}
