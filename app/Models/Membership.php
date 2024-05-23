<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'ID_number',
        'birth_date',
        'certificate',
        'specialization',
        'type',
        'membership_type',
        'workplace',
        'payment_receipt',
        'status',
        'isReply',
    ];


    protected $appends = ['payment_receipt_path'];



    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 'pending':
                return 'قيد الانتظار';
                break;
            case 'approved':
                return 'مقبول';
                break;
            case 'rejected':
                return 'مرفوض';
                break;
        }
    }

    public function getIsReplyAttribute($value)
    {
        return $value == 0 ? 'لم يتم الرد' : 'تم الرد';
    }

    public function getBirthDateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = date('Y-m-d', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }



    public function getPaymentReceiptPathAttribute()
    {
        return asset('storage/' . $this->payment_receipt);
    }
}
