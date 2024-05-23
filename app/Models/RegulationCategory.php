<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar'];

    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut

    public function regulations()
    {
        return $this->hasMany(Regulation::class, 'category_id');
    } // end regulations

}
