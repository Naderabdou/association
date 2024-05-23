<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'desc_ar',
        'desc_en'
    ];

    public function getNameAttribute(): string
    {
        return $this->{'name_' . app()->getLocale()};
    }

    public function getDescAttribute(): string
    {
        return $this->{'desc_' . app()->getLocale()};
    }
}
