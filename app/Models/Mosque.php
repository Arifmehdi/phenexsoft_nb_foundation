<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mosque extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'district_id',
        'upazila_id',
        'name',
        'address',
        'imam_name',
        'phone',
        'image',
        'description',
        'status',
    ];

    public function division() {
        return $this->belongsTo(Division::class);
    }

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function upazila() {
        return $this->belongsTo(Upazila::class);
    }
}
