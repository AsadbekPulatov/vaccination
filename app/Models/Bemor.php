<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccination;

class Bemor extends Model
{
    use HasFactory;
    protected $fillable =[
        'familya',
        'ismi',
        'otasining_ismi',
        'tugilgan_sana',
        'millati',
        'tugilgan_joyi',
        'guvohnoma_raqami',
        'yosh',
        'manzili',
        'onasini_ismi',
        'tel_number',
        'kim_olib_keldi'
        ];

    public function Emlash(){
        return $this->hasMany(Vaccination::class);
    }
}
