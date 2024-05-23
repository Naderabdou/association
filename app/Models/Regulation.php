<?php

namespace App\Models;

use App\Models\RegulationCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulation extends Model
{
    use HasFactory;
    protected $appends = ['pdf_path'];

    protected $fillable = ['pdf', 'category_id', 'name_en', 'name_ar'];


    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut

    
    public function category()
    {
        return $this->belongsTo(RegulationCategory::class, 'category_id');
    }

    public function getPdfPathAttribute()
    {
        return asset('storage/' . $this->pdf);
    }
}
