<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'age', 'name'
    ];

    public function Emlash(){
        return $this->hasMany(Vaccination::class);
    }
}
